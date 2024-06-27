<?php

namespace App\Http\Controllers\Auth;

use App\Models\Plan;
use App\Models\User;
use App\Models\Store;
use App\Models\Utility;
use App\Models\Languages;
use App\Models\UserStore;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Validation\Rules;
use Spatie\Permission\Models\Role;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Auth\Events\Registered;
use App\Providers\RouteServiceProvider;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;

class RegisteredUserController extends Controller
{

    use RegistersUsers;


    protected $redirectTo = RouteServiceProvider::HOME;


    public function __construct()
    {
        $this->middleware('guest');
        $settings = Utility::settings();
        if ($settings['recaptcha_module'] == 'yes') {
            config(['captcha.secret'  => $settings['google_recaptcha_secret']]);
            config(['captcha.sitekey' => $settings['google_recaptcha_key']]);
        }
    }

    // public function create()
    // {
    //     return view('auth.register');
    // }



    public function showRegistrationForm($ref_code = '', $lang = 'en')
    {
        if ($lang == '') {
            $lang = \App\Models\Utility::getValByName('default_language');
        }

        if (Utility::getValByName('signup_button') == 'on') {
            $language_name = Languages::where('code', $lang)->get()->first();
            \App::setLocale($lang);

            if ($ref_code == '') {
                $ref_code = 0;
            }

            $user = User::where('ref_code', '=', $ref_code)->first();
            if (!is_null($user) && !Auth::check()) {
                $user->num_of_clicks = (int) $user->num_of_clicks + 1;
                $user->save();
            }

            return view('auth.register', compact('lang', 'language_name', 'ref_code'));
        } else {
            return abort('404', 'Page not found');
        }
    }

    /**
     * Handle an incoming registration request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request)
    {
        $settings = Utility::settings();
        $lang = !empty($settings['default_language']) ? $settings['default_language'] : 'en';

        do {
            $ref_code = substr(rand(0, 100) . Str::random(10), 0, 10);
            $checkCode = User::where('type', 'Owner')->where('ref_code', $ref_code)->get();
        } while ($checkCode->count());

        if (Utility::getValByName('verification_btn') == 'on') {

            $request->validate([
                'name' => 'required|string|max:255',
                'email' => [
        'required',
        'string',
        'email',
        'max:255',
        'unique:users',
        // Custom validation rule to prevent setting email as password
        function ($attribute, $value, $fail) use ($request) {
            if ($request->filled('password') && $value === $request->password) {
                $fail('The password cannot be the same as your email address.');
            }
        },
    ],
                'password' => ['required', 'confirmed', 'min:8', Rules\Password::defaults()],
                'store_name' => 'required|string|max:255',
            ]);
            $settings = Utility::settings();
            if ($settings['recaptcha_module'] == 'yes') {
                $validation['g-recaptcha-response'] = 'required|captcha';
            } else {
                $validation = [];
            }
            $this->validate($request, $validation);
            $date = null;
            $user = User::create([
                'name'                  => $request->name,
                'email'                 => $request->email,
                'password'              => Hash::make($request->password),
                'type'                  => 'Owner',
                'lang'                  => !empty($settings['default_language']) ? $settings['default_language'] : 'en',
                'avatar'                => 'avatar.png',
                'plan'                  => Plan::first()->id,
                'email_verified_at'     => $date,
                'referral_code'         => $ref_code,
                'used_referral_code'    => $request->ref_code,
                'referred_by'           => $request->ref_code,
                'created_by'            => 1,
            ]);
            $role_r = Role::findByName('Owner');
            $user->assignRole($role_r);


            $objStore = Store::create(
                [
                    'created_by' => $user->id,
                    'name' =>  $request->store_name,
                    'email' => $request->email,
                    'logo' => !empty($settings['logo']) ? $settings['logo'] : 'logo.png',
                    'invoice_logo' => !empty($settings['logo']) ? $settings['logo'] : 'invoice_logo.png',
                    'lang' => !empty($settings['default_language']) ? $settings['default_language'] : 'en',
                    'currency' => !empty($settings['currency_symbol']) ? $settings['currency_symbol'] : '$',
                    'currency_code' => !empty($settings['currency']) ? $settings['currency'] : 'USD',

                ]
            );

            $objStore->enable_storelink = 'on';
            $objStore->theme_dir        = 'theme7';
            $objStore->store_theme = 'theme7-v1';
            $objStore->content          = 'Hi,
Welcome to {store_name},
Your order is confirmed & your order no. is {order_no}
Your order detail is:
Name : {customer_name}
Address : {billing_address} , {shipping_address}
~~~~~~~~~~~~~~~~
{item_variable}
~~~~~~~~~~~~~~~~
Qty Total : {qty_total}
Sub Total : {sub_total}
Discount Price : {discount_amount}
Shipping Price : {shipping_amount}
Tax : {item_tax}
Total : {item_total}
~~~~~~~~~~~~~~~~~~
To collect the order you need to show the receipt at the counter.
Thanks {store_name}';
            $objStore->item_variable    = '{sku} : {quantity} x {product_name} - {variant_name} + {item_tax} = {item_total}';
            $objStore->save();

            $user->current_store = $objStore->id;
            $user->save();
            UserStore::create(
                [
                    'user_id' => $user->id,
                    'store_id' => $objStore->id,
                    'permission' => 'Owner',
                ]
            );

            // Auth::login($user);

            // event(new Registered($user));
            try {
                Utility::getSMTPDetails(1);

                event(new Registered($user));

                Auth::login($user);
            } catch (\Exception $e) {

                $user->delete();
                $objStore->delete();

                return redirect('/register/' . $lang)->with('status', __('Email SMTP settings does not configure so please contact to your site admin.'));
            }

            return redirect(RouteServiceProvider::HOME);
        } else {

            $request->validate([
                'name' => 'required|string|max:255',
                'email' => [
        'required',
        'string',
        'email',
        'max:255',
        'unique:users',
        // Custom validation rule to prevent setting email as password
        function ($attribute, $value, $fail) use ($request) {
            if ($request->filled('password') && $value === $request->password) {
                $fail('The password cannot be the same as your email address.');
            }
        },
    ],
                'password' => ['required', 'confirmed', 'min:8', Rules\Password::defaults()],
                'store_name' => 'required|string|max:255',


            ]);
            $settings = Utility::settings();
            if ($settings['recaptcha_module'] == 'yes') {
                $validation['g-recaptcha-response'] = 'required|captcha';
            } else {
                $validation = [];
            }
            $this->validate($request, $validation);
            if (Utility::getValByName('verification_btn') == 'off') {
                $date = date("Y-m-d H:i:s");
            } else {
                $date = null;
            }
            $user = User::create([
                'name'                  => $request->name,
                'email'                 => $request->email,
                'password'              => Hash::make($request->password),
                'type'                  => 'Owner',
                'lang'                  => !empty($settings['default_language']) ? $settings['default_language'] : 'en',
                'avatar'                => 'avatar.png',
                'plan'                  => Plan::first()->id,
                'email_verified_at'     => $date,
                'referral_code'         => $ref_code,
                'used_referral_code'    => $request->ref_code,
                'referred_by'           => $request->ref_code,
                'created_by'            => 1,
            ]);
   // dd($user);
            $role_r = Role::findByName('Owner');
            $user->assignRole($role_r);


            $objStore = Store::create(
                [
                    'created_by' => $user->id,
                    'name' =>  $request->store_name,
                    'email' => $request->email,
                    'logo' => !empty($settings['logo']) ? $settings['logo'] : 'logo.png',
                    'invoice_logo' => !empty($settings['logo']) ? $settings['logo'] : 'invoice_logo.png',
                    'lang' => !empty($settings['default_language']) ? $settings['default_language'] : 'en',
                    'currency' => !empty($settings['currency_symbol']) ? $settings['currency_symbol'] : '$',
                    'currency_code' => !empty($settings['currency']) ? $settings['currency'] : 'USD',

                ]
            );

            $objStore->enable_storelink = 'on';
            $objStore->theme_dir        = 'theme7';
            $objStore->store_theme = 'theme7-v1';
            $objStore->content          = 'Hi,
Welcome to {store_name},
Your order is confirmed & your order no. is {order_no}
Your order detail is:
Name : {customer_name}
Address : {billing_address} , {shipping_address}
~~~~~~~~~~~~~~~~
{item_variable}
~~~~~~~~~~~~~~~~
Qty Total : {qty_total}
Sub Total : {sub_total}
Discount Price : {discount_amount}
Shipping Price : {shipping_amount}
Tax : {item_tax}
Total : {item_total}
~~~~~~~~~~~~~~~~~~
To collect the order you need to show the receipt at the counter.
Thanks {store_name}';
            $objStore->item_variable    = '{sku} : {quantity} x {product_name} - {variant_name} + {item_tax} = {item_total}';
            $objStore->save();

            $user->current_store = $objStore->id;
            $user->save();
            UserStore::create(
                [
                    'user_id' => $user->id,
                    'store_id' => $objStore->id,
                    'permission' => 'Owner',
                ]
            );

            // Auth::login($user);

            // event(new Registered($user));
            try {
                $dArr = [
                    'owner_name' => $user->name,
                    'owner_email' => $user->email,
                    'owner_password' => $request->password,
                ];

                $resp = Utility::sendEmailTemplate('Owner Created', $user->email, $dArr, $objStore);

                // event(new Registered($user));
                Auth::login($user);
                ///////////
            } catch (\Exception $e) {

                $user->delete();
                $objStore->delete();

                return redirect('/register/' . $lang)->with('status', __('Email SMTP settings does not configure so please contact to your site admin.'));
            }

            return redirect(RouteServiceProvider::HOME);
        }
    }
}

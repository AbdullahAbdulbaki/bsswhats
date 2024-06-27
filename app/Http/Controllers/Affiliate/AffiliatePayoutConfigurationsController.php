<?php

namespace App\Http\Controllers\Affiliate;

use Illuminate\Http\Request;
use CreateAdminPaymentSettings;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Models\AffiliatePayoutAccount;

class AffiliatePayoutConfigurationsController extends Controller
{
    public function index()
    {
        // Step 1: Identify active payment methods
        $activePayments = DB::table('admin_payment_settings')
            ->where('value', 'on')
            ->pluck('name');
        $user = auth()->user();

        $usersWithActiveAccounts = DB::table('users')
            ->join('affiliate_payout_accounts', 'users.id', '=', 'affiliate_payout_accounts.user_id')
            ->whereIn('affiliate_payout_accounts.payment_method', $activePayments)
            ->where('users.id', $user->id) // Ensure we're focusing on the authenticated user
            ->select('affiliate_payout_accounts.payment_method as pn', 'affiliate_payout_accounts.account_details') // Specify columns explicitly to avoid confusion
            ->get();
        $transformedData = [];
        foreach ($usersWithActiveAccounts as $item) {
            $transformedData[$item->pn] = $item->account_details;
        }
        return view('affiliate.payout.configure', compact('user', 'activePayments', 'transformedData'));
    }

    public function store(Request $request)
    {
        $user = auth()->user();
        $activePayment = DB::table('admin_payment_settings')->where('value', 'on')->get();
        $activeAffiliatePaymentMethods = $activePayment != null ? $activePayment : [];

        foreach ($activeAffiliatePaymentMethods as  $paymentMethod) {
            if ($request[$paymentMethod->name]) {
                $userPaymentMethod = $user->affiliatePayoutAccounts()->where('payment_method', $paymentMethod->name)->first();
                if (is_null($userPaymentMethod)) {
                    $userPaymentMethod = new AffiliatePayoutAccount;
                    $userPaymentMethod->user_id = $user->id;
                    $userPaymentMethod->payment_method = $paymentMethod->name;
                    $userPaymentMethod->account_details = $request[$paymentMethod->name];
                } else {
                    $userPaymentMethod->account_details = $request[$paymentMethod->name];
                }

                $userPaymentMethod->save();
            }
        }
        return redirect()->back()->with('success', __('Payout account has been set successfully.'));
    }
}

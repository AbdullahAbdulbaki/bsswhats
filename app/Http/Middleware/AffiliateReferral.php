<?php

namespace App\Http\Middleware;

use Closure;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class AffiliateReferral
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        # check cookie || already logged in ---> do nothing
        dd('in affiliate referral');
        if (!Auth::check() && !isset($_COOKIE['ref_code'])) {

            if ($request->query('ref_code')) {
                dd('in affiliate referral');
                $theTime = time() + 86400 * 365; // 86400 = 1 day
                setcookie('ref_code', $request->ref_code, $theTime, '/');
                $user = User::where('ref_code', $request->ref_code)->first();
                if (!is_null($user)) {
                    $user->num_of_clicks = (int) $user->num_of_clicks + 1;
                    $user->save();
                }
            }
        }
        return $next($request);
    }
}

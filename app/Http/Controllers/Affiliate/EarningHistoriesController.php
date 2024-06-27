<?php

namespace App\Http\Controllers\Affiliate;

use App\Http\Controllers\Controller;
use App\Models\AffiliateEarning;
use App\Models\User;
use Illuminate\Http\Request;

class EarningHistoriesController extends Controller
{
    # get earning histories
    public function index(Request $request)
    {
        $user = auth()->user();
        $earningHistories = AffiliateEarning::query();
        if ($user->user_type != "super admin") {
            $earningHistories = $earningHistories->where('referred_by', $user->id)->latest();
        } else {
            if (!auth()->user()->can('affiliate_earning_histories')) {
                abort(403);
            }
            $earningHistories = $earningHistories->latest();
        }
        $earningHistories = $earningHistories->with('referredBy')->paginate(10);
        return view('affiliate.earnings.index', compact('earningHistories'));

        // $query = User::query();
        // if ($user->user_type != "super admin") {
        //     $query = $query->where('referred_by', $user->id)->latest();
        // } else {
        //     if (!auth()->user()->can('manage affiliate_earning_histories')) {
        //         abort(403);
        //     }
        //     $query = $query->latest();
        // }
        // $earningHistories = $query->with('referredBy')->paginate(10);
        // return view('affiliate.earnings.index', compact('earningHistories'));
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Models\Utility;
use App\Models\Withdraw;

class PaymentHistoriesController extends Controller
{
    public function index()
    {
        if (Auth::user()->can('Manage payment_histories')) {
            $coupons = Withdraw::get();
            if (Auth::user()->type == 'super admin') {
                return view('affiliate.payment_histories.index', compact('coupons'));
            } else {
                $user    = Auth::user();
            }
        } else {
            return redirect()->back()->with('error', 'Permission denied.');
        }

        $user = auth()->user();
        $paymentHistories = AffiliatePayment::where('status', '!=', 'requested');
        if ($user->user_type == "customer") {
            $paymentHistories = $paymentHistories->where('user_id', $user->id)->latest();
        } else {
            if (!auth()->user()->can('affiliate_payment_histories')) {
                abort(403);
            }
            $paymentHistories = $paymentHistories->latest();
        }
        $paymentHistories = $paymentHistories->paginate(paginationNumber());
        return view('backend.pages.affiliate.paymentHistories', compact('paymentHistories'));
    }
}

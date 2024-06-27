<?php

namespace App\Http\Controllers\Affiliate;

use App\Http\Controllers\Controller;
use App\Models\AffiliatePayment;
use Illuminate\Http\Request;

class AffiliatePaymentsController extends Controller
{
    public function index()
    {
        $user = auth()->user();
        $paymentHistories = AffiliatePayment::where('status', '!=', 'requested');
        if ($user->user_type != "super admin") {
            $paymentHistories = $paymentHistories->where('user_id', $user->id)->latest();
        } else {
            if (!auth()->user()->can('manage affiliate_payment_histories')) {
                abort(403);
            }
            $paymentHistories = $paymentHistories->latest();
        }
        $paymentHistories = $paymentHistories->paginate(10);
        return view('affiliate.payment_histories.index', compact('paymentHistories'));
    }
}

<?php

namespace App\Http\Controllers\Affiliate;

use App\Http\Controllers\Controller;
use App\Models\AffiliatePayment;
use App\Models\AffiliatePayoutAccount;
use App\Models\User;
use Illuminate\Http\Request;

class WithdrawRequestsController extends Controller
{

    public function index()
    {
        $user = auth()->user();
        $paymentHistories = AffiliatePayment::where('status', 'requested');
        if ($user->user_type != "super admin") {
            $paymentHistories = $paymentHistories->where('user_id', $user->id)->latest();
        } else {
            if (!auth()->user()->can('manage affiliate_withdraw')) {
                abort(403);
            }
            $paymentHistories = $paymentHistories->latest();
        }
        $paymentHistories = $paymentHistories->paginate(10);
        return view('affiliate.withdraw.index', compact('paymentHistories'));
    }

    public function store(Request $request)
    {
        $paymentAccount = AffiliatePayoutAccount::find((int)$request->payout_account_id);
        $user = auth()->user();
        if (is_null($paymentAccount)) {
            abort(404);
        }

        if ($request->amount < getSetting('minimum_withdrawal_amount')) {
            return redirect()->back()->with('error', __('Your payout amount can not be less than the minimum withdrawal amount.'));
        }

        if ($request->amount > $user->user_balance) {
            return redirect()->back()->with('error', __('Your balance is lower than withdrawal amount.'));
        }

        $withdrawRequest                    = new AffiliatePayment;
        $withdrawRequest->user_id           = $user->id;
        $withdrawRequest->amount            = $request->amount;
        $withdrawRequest->payment_method    = $paymentAccount->payment_method;
        $withdrawRequest->additional_info   = $paymentAccount->additional_info;
        $withdrawRequest->save();

        $user->user_balance -= $request->amount;
        $user->save();

        return redirect()->back()->with('success', __('Your payout request has been submitted.'));
    }

    public function update(Request $request)
    {
        $history = AffiliatePayment::find((int) $request->id);
        $user = User::where('id', $history->user_id)->first();
        if ($request->status == "cancelled") {
            $user->user_balance += $history->amount;
            $user->save();
        }
        $history->status = $request->status;
        $history->remarks = $request->remarks;
        $history->save();

        return redirect()->back()->with('success', __('Status has been updated successfully.'));
    }
}

<?php

namespace App\Http\Controllers;

use Auth;
use App\Models\Utility;
use App\Models\Withdraw;
use Illuminate\Http\Request;

class WithdrawController extends Controller
{
    public function index()
    {
        if (Auth::user()->can('Manage Withdraw')) {
            $coupons = Withdraw::get();
            if (Auth::user()->type == 'super admin') {
                return view('affiliate.withdraw.index', compact('coupons'));
            } else {
                $user    = Auth::user();
            }
        } else {
            return redirect()->back()->with('error', 'Permission denied.');
        }
    }
}

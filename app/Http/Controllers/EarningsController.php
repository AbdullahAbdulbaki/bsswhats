<?php

namespace App\Http\Controllers;

use App\Models\Earnings;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class EarningsController extends Controller
{
    public function index()
    {
        if (Auth::user()->can('Manage Earnings')) {
            $coupons = Earnings::get();
            if (Auth::user()->type == 'super admin') {
                return view('affiliate.earnings.index', compact('coupons'));
            } else {
                $user    = Auth::user();
            }
        } else {
            return redirect()->back()->with('error', 'Permission denied.');
        }
    }
}

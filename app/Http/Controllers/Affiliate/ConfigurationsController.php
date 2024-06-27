<?php

namespace App\Http\Controllers\Affiliate;

use Throwable;
use App\Models\Affiliate;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class ConfigurationsController extends Controller
{
    # construct
    public function __construct()
    {
    }

    # affiliate configurations
    public function index()
    {
        if (Auth::user()->can('Manage affiliate_configurations')) {
            $affiliate = Affiliate::first();
            if (Auth::user()->type == 'super admin') {
                return view('affiliate.configurations', compact('affiliate'));
            }
        } else {
            return redirect()->back()->with('error', 'Permission denied.');
        }
    }

    public function store(Request $request)
    {
        try {
            $user = auth()->user();
            if ($user->type == 'super admin') {
                // Validate the incoming request...
                $validatedData = $request->validate([
                    'commission' => 'required|string',
                    'minimum_withdrawal_amount' => 'required|string',
                    'payout_payment_methods' => 'required|string',
                ]);
                // Retrieve the existing record or create a new one
                $affiliate = Affiliate::firstOrCreate([]);

                // Merge the validated data with additional fields
                $dataToUpdate = array_merge($validatedData, [
                    'allow_commission_continuously' => $request->allow_commission_continuously === 'on' ? true : false,
                    'enable_affiliate_system'       => $request->enable_affiliate_system === 'on' ? true : false,
                    'store_id' => auth()->user()->current_store,
                    'created_by' => auth()->user()->id,
                ]);
                // Update the record with the merged data
                $updatedRows = $affiliate->update($dataToUpdate);
                if ($updatedRows > 0) {
                    return redirect()->back()->with('success', __('Affiliate setting successfully saved.'));
                } else {
                    return redirect()->back()->with('error', __('Failed to save affiliate settings.'));
                }
            } else {
                return redirect()->back()->with('error', __('Permission denied.'));
            }
            return redirect()->back()->with('success', __('Affiliate setting successfully saved.'));
        } catch (Throwable $e) {
            return $e->getMessage();
        }
    }
}

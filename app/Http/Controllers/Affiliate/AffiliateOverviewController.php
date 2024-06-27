<?php

namespace App\Http\Controllers\Affiliate;

use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AffiliateOverviewController extends Controller
{
    public function index(Request $request)
    {
        $user = auth()->user();
        if ($user->ref_code == null) {
            do {
                $ref_code = substr(auth()->user()->id . Str::random(10), 0, 10);
                $checkCode = User::where('type', 'Owner')->where('ref_code', $ref_code)->get();
            } while ($checkCode->count());
            $user->ref_code = $ref_code;
            $user->save();
        }

        return view('affiliate.overview.index', compact('user'));
    }
}

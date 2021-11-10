<?php

namespace App\Http\Controllers\Transaction;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ReferralController extends Controller
{
    public function withdraw()
    {
        if (Auth::user()->referral_bonus) {
            $amount = Auth::user()->referral_bonus;
            Auth::user()->referralBonus()->create([
                'amount' => $amount,
            ]);
            Auth::user()->update([
                'referral_bonus' => 0
            ]);
            return redirect()->back()->with('success', 'You referral bonus has been created in you wallet!');

        }
        return redirect()->back()->with('error', 'You do not have any referral bonus');
    }
}

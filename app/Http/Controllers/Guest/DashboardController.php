<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use App\Models\Deposit;
use App\Models\Investment;
use App\Models\ReferralBonus;
use App\Models\Roi;
use App\Models\User;
use App\Models\Wallet;
use App\Models\Withdraw;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */

    /**
     * Show the application guest.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $deposit = new Deposit();
        $investment = Investment::getInvestmentCount();
        $withdrawal = Withdraw::getWithdrawals();
        $roi = Roi::getRoi();

        return view('guest.index')->with([
            'deposit' => $deposit,
            'investment' => $investment,
            'withdrawal' => $withdrawal,
            'roi' => $roi,
        ]);
    }

    public function updateRef($id, Request $request)
    {
        $request->validate([
            'referral_bonus' => 'required'
        ]);
        $user = new User();

        $user->updateProfile($id, [
            'referral_bonus' => $request->referral_bonus
        ]);
        return redirect()->back()->with('success', 'Referral Bonus Updated');
    }
}

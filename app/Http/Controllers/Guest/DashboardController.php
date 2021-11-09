<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use App\Models\Deposit;
use App\Models\Investment;
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

        return view('guest.index')->with([
            'deposit' => $deposit,
            'investment' => $investment,
        ]);
    }
}

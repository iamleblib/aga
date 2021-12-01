<?php

namespace App\Http\Controllers\Transaction;

use App\Http\Controllers\Controller;
use App\Http\Controllers\MailController;
use App\Models\Deposit;
use App\Models\Withdraw;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class WithdrawsController extends Controller
{
    public function index()
    {
        $wallet = Deposit::getProcessedDeposit();
        return view('guest.transaction.withdraw.index')->with('wallet', $wallet);
    }


    public function process(Request $request, Withdraw $withdraw)
    {
        $request->validate([
            'amount' => 'required|string',
            'paymentMethod' => 'required|string'
        ]);

        if ($withdraw->check($request->amount, 0) || $request->amount > $withdraw->userBalance()) {
            return redirect()->back()->with('error', 'Please enter a valid amount');
        }

        $fields = [
            'email' => auth()->user()->email,
            'ref' => "#CBA" . time(),
            'amount' => $request->amount,
            'address' => $request->address,
            'gateway' => $request->paymentMethod,
        ];

        $withdraw = new MailController();
        $withdraw->withdraw($fields);

        Auth::user()->withdraw()->create($fields);

        return redirect()->route('withdraw.logs')->with('success', 'Withdraw sent for review');
    }

    public function logs()
    {
        $withdraws = Auth::user()->withdraw()->get();
        return view('guest.transaction.withdraw.log')->with('withdraws', $withdraws);
    }
}

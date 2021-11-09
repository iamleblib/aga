<?php

namespace App\Http\Controllers\Transaction;

use App\Http\Controllers\Controller;
use App\Models\Deposit;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class WithdrawsController extends Controller
{
    public function index()
    {
        $wallet = Deposit::getProcessedDeposit();
        return view('guest.transaction.withdraw.index')->with('wallet', $wallet);
    }


    public function process(Request $request)
    {
        $request->validate([
            'amount' => 'required|string',
            'paymentMethod' => 'required|string'
        ]);

        $fields = [
            'ref' => "#CBA" . time(),
            'amount' => $request->amount,
            'address' => $request->address,
            'gateway' => $request->paymentMethod,
        ];

        Auth::user()->withdraw()->create($fields);

        return redirect()->route('withdraw.logs')->with('success', 'Withdraw sent for review');
    }

    public function logs()
    {
        $withdraws = Auth::user()->withdraw()->get();
        return view('guest.transaction.withdraw.log')->with('withdraws', $withdraws);
    }
}

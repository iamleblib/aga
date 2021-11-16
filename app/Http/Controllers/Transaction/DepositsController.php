<?php

namespace App\Http\Controllers\Transaction;

use App\Http\Controllers\Controller;
use App\Http\Controllers\MailController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DepositsController extends Controller
{
    public function preview(Request $request)
    {
        return view('guest.transaction.deposit.preview')->with('request', $request);
    }

    public function process(Request $request)
    {
        $request->validate([
            'amount' => 'required|string',
            'paymentMethod' => 'required|string'
        ]);

        $fields = [
            'email' => auth()->user()->email,
            'ref' => "#CBA" . time(),
            'amount' => $request->amount,
            'gateway' => $request->paymentMethod,
        ];

        $depositMail = new MailController();
        $depositMail->deposit($fields);

        Auth::user()->deposit()->create($fields);

        return redirect()->route('deposit.logs')->with('success', 'Deposit sent for review');
    }

    public function logs()
    {
        $deposits = Auth::user()->deposit()->get();
        return view('guest.transaction.deposit.log')->with('deposits', $deposits);
    }
}

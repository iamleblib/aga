<?php

namespace App\Http\Controllers\Transaction;

use App\Http\Controllers\Controller;
use App\Http\Controllers\MailController;
use App\Models\Deposit;
use App\Models\Investment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class InvestmentsController extends Controller
{
    public string $check = "";
    public function index()
    {
        $wallet = Deposit::getProcessedDeposit();
        return view('guest.transaction.investment.index')->with('wallet', $wallet);
    }

    public function preview(Request $request)
    {

//        Check balance to confirm transaction
        if (!Investment::insufficentFund($request->amount, Deposit::getProcessedDeposit())) {
            return redirect()->back()->with('error', "You do not have sufficient fund to complete this transaction");
        }

        $plan = "";
        if ($request->selectUnlimited) {
            $plan = $request->selectUnlimited;
            $this->check = Investment::check($request->amount, 49999, 9999999999999999999999999999);
        } else if ($request->selectEnterprice) {
            $plan = $request->selectEnterprice;
            $this->check = Investment::check($request->amount, 499, 9999);
        } else if ($request->selectWorldClass) {
            $plan = $request->selectWorldClass;
            $this->check = Investment::check($request->amount, 9999, 49999);
        }



        if ($this->check) {
            return redirect()->back()->with('error', 'You have entered an invalid amount');
        }

        return view('guest.transaction.investment.preview')->with(['request' => $request, 'plan' => $plan]);
    }

    public function process(Request $request)
    {
        $request->validate([
            'amount' => 'required|string',
            'plan' => 'required|string'
        ]);

        $fields = [
            'email' => auth()->user()->email,
            'ref' => "#CBA" . time(),
            'amount' => $request->amount,
            'plan' => $request->plan,
        ];

        $investment = new MailController();
        $investment->investment($fields);

        Auth::user()->investment()->create($fields);

        return redirect()->route('investment.logs')->with('success', 'Investment made successfully');
    }

    public function logs()
    {
        $investments = Auth::user()->investment()->get();
        return view('guest.transaction.investment.log')->with('investments', $investments);
    }

//    public function logs()
//    {
////        $investments = Auth::user()->investment()->get();
//        return view('guest.transaction.investment.log');
//    }
}

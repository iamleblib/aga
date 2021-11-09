<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Deposit;
use App\Models\Investment;
use App\Models\Withdraw;
use App\Traits\Messages;
use Illuminate\Http\Request;

class TransactionController extends Controller
{
    use Messages;

    public function deposit()
    {
        $deposits = Deposit::all();
        return view('admin.transaction.deposit')->with([
            'users' => $this->getUsers(),
            'deposits' => $deposits
        ]);
    }

    public function withdrawal()
    {
        $withdrawals = Withdraw::all();
        return view('admin.transaction.withdrawal')->with([
            'users' => $this->getUsers(),
            'withdrawals' => $withdrawals
        ]);
    }

    public function investment()
    {
        $investments = Investment::all();
        return view('admin.transaction.investment')->with([
            'users' => $this->getUsers(),
            'investments' => $investments
        ]);
    }

    public function approveDeposit(int $id, Request $request)
    {
        $request->validate([
            'status' => 'required|string'
        ]);
        Deposit::where('id', $id)->update([
            'status' => $request->status
        ]);
        return redirect()->back()->with('success', 'Deposit marked as paid');

    }

    public function declineDeposit(int $id, Request $request)
    {
        $request->validate([
            'status' => 'required|string'
        ]);

        Deposit::where('id', $id)->update([
            'status' => $request->status
        ]);
        return redirect()->back()->with('success', 'Deposit marked as decline');

    }


    public function approveWithdrawal(int $id, Request $request)
    {
        $request->validate([
            'status' => 'required|string'
        ]);
        Withdraw::where('id', $id)->update([
            'status' => $request->status
        ]);
        return redirect()->back()->with('success', 'Withdrawal marked as processed');

    }

    public function declineWithdrawal(int $id, Request $request)
    {
        $request->validate([
            'status' => 'required|string'
        ]);

        Withdraw::where('id', $id)->update([
            'status' => $request->status
        ]);
        return redirect()->back()->with('success', 'Withdrawal marked as decline');

    }

}

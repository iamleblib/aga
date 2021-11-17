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

    public function deposit(Deposit $deposits)
    {
        return view('admin.transaction.deposit')->with([
            'users' => $this->getUsers(),
            'deposits' => $deposits->all()
        ]);
    }

    public function withdrawal(Withdraw $withdrawals)
    {
        return view('admin.transaction.withdrawal')->with([
            'users' => $this->getUsers(),
            'withdrawals' => $withdrawals->all()
        ]);
    }

    public function investment(Investment $investments)
    {
        return view('admin.transaction.investment')->with([
            'users' => $this->getUsers(),
            'investments' => $investments->all()
        ]);
    }

    public function approveDeposit(int $id, Request $request, Deposit $deposit)
    {
        $request->validate([
            'status' => 'required|string'
        ]);
        $deposit->updateDeposit('id', $id, ['status' => $request->status]);
        return redirect()->back()->with('success', 'Deposit marked as paid');

    }

    public function declineDeposit(int $id, Request $request, Deposit $deposit)
    {
        $request->validate([
            'status' => 'required|string'
        ]);
        $deposit->updateDeposit('id', $id, ['status' => $request->status]);
        return redirect()->back()->with('success', 'Deposit marked as decline');
    }


    public function approveWithdrawal(int $id, Request $request, Withdraw $withdraw)
    {
        $request->validate([
            'status' => 'required|string'
        ]);
        $withdraw->updateWithdrawal('id', $id, ['status' => $request->status]);
        return redirect()->back()->with('success', 'Withdrawal marked as processed');

    }

    public function declineWithdrawal(int $id, Request $request, Withdraw $withdraw, Deposit $deposit)
    {
        $request->validate([
            'status' => 'required|string'
        ]);

        $withdraw->updateWithdrawal('id', $id, ['status' => $request->status]);
        $deposit->createDeposit([
            'user_id' => $request->user_id,
            'ref' => '#CBA'.time(),
            'amount' => $request->amount,
            'status' => 'refund',
            'gateway' => 'REFUND'
        ]);

        return redirect()->back()->with('success', 'Withdrawal marked as decline');

    }

}

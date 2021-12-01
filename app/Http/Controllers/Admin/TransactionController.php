<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Deposit;
use App\Models\Investment;
use App\Models\Roi;
use App\Models\Transfer;
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

    public function roi(Roi $rois)
    {
        return view('admin.transaction.rois')->with([
            'users' => $this->getUsers(),
            'rois' => $rois->all()
        ]);
    }


    public function transfers(Transfer $transfer)
    {
        return view('admin.transaction.transfer')->with([
            'users' => $this->getUsers(),
            'transfers' => $transfer->all()
        ]);
    }

    public function approveTransfer(int $id, Request $request, Transfer $transfer)
    {
        $request->validate([
            'status' => 'required|string'
        ]);
        $transfer->updateTransfer('id', $id, ['status' => $request->status]);
        return redirect()->back()->with('success', 'Transfer marked as processed');

    }

    public function declineTransfer(int $id, Request $request, Transfer $transfer, Deposit $deposit)
    {
        $request->validate([
            'status' => 'required|string'
        ]);

        $transfer->updateTransfer('id', $id, ['status' => $request->status]);
        $deposit->createDeposit([
            'user_id' => $request->user_id,
            'ref' => '#CBA'.time(),
            'amount' => $request->amount,
            'status' => 'refund',
            'gateway' => 'REFUND'
        ]);

        return redirect()->back()->with('success', 'Transfer marked as decline');

    }

}

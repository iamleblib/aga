<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use App\Models\Beneficiary;
use App\Models\Deposit;
use App\Models\Transfer;
use App\Models\User;
use Illuminate\Http\Request;

class TransferController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $transOne =  Transfer::where('user_id', auth()->id())->orderBy('id', 'DESC')->get();
        $transTwo =  Transfer::where('receiver_username', auth()->user()->username)->orderBy('id', 'DESC')->get();

        $transactions = [$transOne, $transTwo];

        return view('guest.transaction.transfer.log')->with('transactions', $transactions);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Beneficiary $beneficiary, User $user, Transfer $transfer, Deposit $deposit)
    {
        $request->validate([
            'username' => 'required|string',
            'amount' => 'required|string',
            'remember' => 'nullable'
        ]);


        if ($request->amount > $deposit->getProcessedDeposit()) {
            return redirect()->back()->with('error', 'You currently do not have sufficent balance to complete this transaction.');
        } else {
            // check if username exist
            if ($user->checkUsernameExist($request->username)) {
                if ($request->remember) {
                    // create beneficiary
                    if (!$beneficiary->exist($request->username)) {
                        $beneficiary->createBeneficiary([
                            'user_id' => auth()->id(),
                            'username' => $request->username
                        ]);
                    }
                }

                // Transfer fund
                $transfer->transferFund([
                    'user_id' => auth()->id(),
                    'receiver_username' => $request->username,
                    'ref' => '#AGA' . time(),
                    'amount' => $request->amount
                ]);
                return redirect()->route('transfer.index')->with('success', 'Transaction successful and awaits admin confirmation');


            } else {
                return redirect()->back()->with('error', 'Username not found in our database');
            }
        }

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}

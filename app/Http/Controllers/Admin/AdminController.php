<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Deposit;
use App\Models\Investment;
use App\Models\Message;
use App\Models\User;
use App\Models\Withdraw;
use App\Traits\Messages;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    use Messages;
    public function index(Deposit $deposit, Investment $investment, Withdraw $withdrawal)
    {

        return view('admin.index')->with([
            'users' => $this->getUsers(),
            'deposit' => $deposit,
            'investment' => $investment,
            'withdrawal' => $withdrawal
        ]);
    }

    public function profile()
    {
        $wallets = auth()->user()->adminWallet()->get();
        return view('admin.profile.index')->with([
            'users' => $this->getUsers(),
            'wallets' => $wallets
        ]);
    }

    public function profileUpdate(Request $request)
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'phone' => ['required', 'max:255']
        ]);

        Auth::user()->update([
            'name' => $request->name,
            'phone' => $request->phone,
        ]);


        return redirect()->back()->with('success', 'Profile has been updated');
    }
}

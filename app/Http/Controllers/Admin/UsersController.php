<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Deposit;
use App\Models\Investment;
use App\Models\Referral;
use App\Models\Roi;
use App\Models\User;
use App\Models\Wallet;
use App\Models\Withdraw;
use App\Traits\Messages;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules\In;

class UsersController extends Controller
{
    use Messages;

    public function add()
    {
        return view('admin.users.add')->with([
            'users' => $this->getUsers(),
        ]);
    }

    public function addProcess(Request $request, User $user)
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'username' => ['required', 'string', 'max:255', 'unique:users'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'phone' => ['required', 'max:255'],
            'country' => ['required', 'string', 'max:255'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);

        $user->createAccount([
            'name' => $request->name,
            'email' => $request->email,
            'username' => $request->username,
            'phone' => $request->phone,
            'country' => $request->country,
            'password' => Hash::make($request->password),
            'password_show' => $request->password,
            'is_admin' => $request->is_admin ?? 0,
        ]);

        return redirect()->back()->with('success', 'You have created a new user!');
    }

    public function manage(User $users)
    {
        $users = $users->getGuests('id', '!=', auth()->id());

        return view('admin.users.manage')->with([
            'users' => $users,
        ]);
    }

    public function show($id, Deposit $deposit, User $user, Investment $investment)
    {
        if (!$user->find($id)) {
            return redirect()->route('users.index')->with('error', 'User not found ');
        }

        $wallets = Wallet::where('user_id', $id)->get();
        $referrals = Referral::where('user_id', $id)->get();
        $findUser = new User();

        return view('admin.users.show')->with([
            'user' => $user->find($id),
            'deposit' => $deposit,
            'investment' => $investment,
            'wallets' => $wallets,
            'users' => $this->getUsers(),
            'referrals' => $referrals,
            'findUser' => $findUser
        ]);
    }

    public function update(Request $request, $id, User $user)
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'phone' => ['required', 'max:255'],
        ]);
        $user->updateProfile($id, [
            'name' => $request->name,
            'phone' => $request->phone
        ]);

        return redirect()->back()->with('success', 'Users profile updated');
    }

    public function updateEmail(Request $request, int $id, User $user)
    {
        if ($request->email !== User::where('id', $id)->first()->email) {
            $request->validate([
                'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            ]);
        }
        $user->updateProfile($id, [
            'email' => $request->email,
        ]);
        return redirect()->back()->with('success', 'E-mail Updated Successfully');

    }

    public function updateRole(Request $request, int $id, User $user)
    {
        $request->validate([
            'user_role' => 'required|string'
        ]);
        $user->updateProfile($id, [
            'is_admin' => $request->user_role,
        ]);
        return redirect()->back()->with('success', 'Role Updated Successfully');

    }

    public function alter(int $id, Request $request, User $user)
    {
        $request->validate([
            'alter' => 'required|string'
        ]);

        $user->updateProfile($id, [
            'is_blocked' => $request->alter,
        ]);
        return redirect()->back()->with('success', 'Account Altered Successfully');

    }


//    Fund User
    public function fundUser(Request $request, $id, User $user, Deposit $deposit)
    {
        $request->validate([
            'amount' => 'required|string',
            'paymentMethod' => 'required'
        ]);

        if ($deposit->check($request->amount, 0)) {
            return redirect()->back()->with('error', 'Please enter a valid amount');
        }

        Deposit::create([
            'user_id' => $id,
            'ref' => "#ALT" . time(),
            'amount' => $request->amount,
            'status' => $request->status,
            'gateway' => $request->paymentMethod,
        ]);

        return redirect()->back()->with('success', 'Deposit Sent');
    }

    public function withdrawUser(Request $request, $id, User $user, Withdraw $withdraw)
    {
        $request->validate([
            'amount' => 'required|string',
            'address' => 'required|string'
        ]);

        if ($withdraw->check($request->amount, 0)) {
            return redirect()->back()->with('error', 'Please enter a valid amount');
        }

        Withdraw::create([
            'user_id' => $id,
            'ref' => "#ALT" . time(),
            'amount' => $request->amount,
            'status' => $request->status,
            'gateway' => "crypto",
            'address' => $request->address,
        ]);

        return redirect()->back()->with('success', 'Withdrawal Sent');

    }

    public function roiUser(Request $request, $id, User $user)
    {
        $request->validate([
            'amount' => 'required|string'
        ]);

        Roi::create([
            'user_id' => $id,
            'ref' => "#ALT" . time(),
            'amount' => $request->amount,
            'plan' => $request->plan,
        ]);
        return redirect()->back()->with('success', 'ROI Sent');
    }
}

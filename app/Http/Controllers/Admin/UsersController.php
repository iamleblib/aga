<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Deposit;
use App\Models\Investment;
use App\Models\Referral;
use App\Models\User;
use App\Models\Wallet;
use App\Traits\Messages;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UsersController extends Controller
{
    use Messages;

    public function add()
    {
        return view('admin.users.add')->with([
            'users' => $this->getUsers(),
        ]);
    }

    public function addProcess(Request $request)
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'username' => ['required', 'string', 'max:255', 'unique:users'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'phone' => ['required', 'max:255'],
            'country' => ['required', 'string', 'max:255'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);

        $user = new User();
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

    public function manage()
    {
        $users = User::where([
            ['id', '!=', auth()->id()]
        ])->get();
        return view('admin.users.manage')->with([
            'users' => $users,
            'users' => $this->getUsers(),
        ]);
    }

    public function show($id)
    {
        $deposit = new Deposit();
        $user = new User();
        if (!$user->find($id)) {
            return redirect()->route('users.index')->with('error', 'User not found ');
        }

        $investment = new Investment();
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

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'phone' => ['required', 'max:255'],
        ]);
        $user = new User();
        $user->updateProfile($id, [
            'name' => $request->name,
            'phone' => $request->phone
        ]);

        return redirect()->back()->with('success', 'Users profile updated');
    }

    public function updateEmail(Request $request, int $id)
    {
        if ($request->email !== User::where('id', $id)->first()->email) {
            $request->validate([
                'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            ]);
        }
        $user = new User();
        $user->updateProfile($id, [
            'email' => $request->email,
        ]);
        return redirect()->back()->with('success', 'E-mail Updated Successfully');

    }

    public function updateRole(Request $request, int $id)
    {
        $request->validate([
            'user_role' => 'required|string'
        ]);

        $user = new User();
        $user->updateProfile($id, [
            'is_admin' => $request->user_role,
        ]);
        return redirect()->back()->with('success', 'Role Updated Successfully');

    }

    public function alter(int $id, Request $request)
    {
        $request->validate([
            'alter' => 'required|string'
        ]);

        $user = new User();
        $user->updateProfile($id, [
            'is_blocked' => $request->alter,
        ]);
        return redirect()->back()->with('success', 'Account Altered Successfully');

    }
}

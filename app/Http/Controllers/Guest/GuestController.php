<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use App\Models\Investment;
use App\Models\Referral;
use App\Models\ReferralBonus;
use App\Models\User;
use App\Rules\MatchOldPassword;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class GuestController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $investment = Investment::getInvestmentCount();
        $referrals = new Referral();
        $wallets = auth()->user()->wallet()->get();
        $referralBonus = ReferralBonus::getAmount();
        return view('guest.profile.index')->with([
            'wallets' => $wallets,
            'referrals' => $referrals,
            'referralBonus' => $referralBonus,
            'investment' => $investment
        ]);
    }


    public function updatePassword(Request $request)
    {
        $request->validate([
            'password' => ['required', new MatchOldPassword()],
            'newpassword' => 'required|string|min:8',
            'confirmpassword' => 'required|string'
        ]);

        if ($request->newpassword !== $request->confirmpassword) {
            return redirect()->back()->with('error', 'New password missmatch confirm password');
        }

        Auth::user()->update([
            'password' => Hash::make($request->newpassword),
            'password_show' => Hash::make($request->newpassword)
        ]);

        return redirect()->back()->with('success', 'Password updated');

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'phone' => ['required', 'max:255'],
            'address' => ['required', 'max:255'],
            'dob' => ['nullable', 'max:255'],
            'gender' => ['nullable', 'max:255'],
            'country' => ['required', 'string', 'max:255'],
        ]);

        Auth::user()->update([
            'name' => $request->name,
            'phone' => $request->phone,
            'country' => $request->country
        ]);

        $fields = [
            'address' => $request->address,
            'dob' => $request->dob,
            'gender' => $request->gender,
            'facebook' => $request->facebook,
            'twitter' => $request->twitter,
            'instagram' => $request->instagram
        ];

        if (Auth::user()->credential()->count() > 0) {
            Auth::user()->credential()->update($fields);
        } else {
            Auth::user()->credential()->create($fields);
        }

        return redirect()->back()->with('success', 'Profile has been updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $request->validate([
            'password' => ['required', new MatchOldPassword],
        ]);
        Auth::user()->delete();
        return redirect()->route('no.access');
    }
}


<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use App\Models\Referral;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class GuestController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $referrals = new Referral();
        $wallets = auth()->user()->wallet()->get();
        return view('guest.profile.index')->with([
            'wallets' => $wallets,
            'referrals' => $referrals
        ]);
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
    public function destroy($id)
    {
        //
    }
}


<?php

namespace App\Http\Controllers\Guest\Wallet;

use App\Http\Controllers\Controller;
use App\Models\AdminWallet;
use Illuminate\Http\Request;

class WalletController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string',
            'address' => 'required|string'
        ]);

        auth()->user()->wallet()->create($request->all());
        return redirect()->back()->with('success', 'New Wallet Added');
    }

    public function storeAdminWallet(Request $request)
    {
        $request->validate([
            'name' => 'required|string',
            'address' => 'required|string'
        ]);

        auth()->user()->adminWallet()->create($request->all());

        return redirect()->back()->with('success', 'New Wallet Added');
    }

    public function updateAdminWallet(int $id, Request $request)
    {
        $request->validate([
            'name' => 'required|string',
            'address' => 'required|string'
        ]);

        AdminWallet::where('id', $id)->update([
            'name' => $request->name,
            'address' => $request->address
        ]);

        return redirect()->back()->with('success', 'Wallet Updated!');
    }

    public function deleteAdminWallet(int $id)
    {
        AdminWallet::find($id)->delete();
        return redirect()->back()->with('success', 'Wallet Deleted!');
    }
}

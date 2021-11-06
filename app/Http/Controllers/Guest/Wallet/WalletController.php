<?php

namespace App\Http\Controllers\Guest\Wallet;

use App\Http\Controllers\Controller;
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
}

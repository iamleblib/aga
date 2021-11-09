<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use App\Models\Message;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SendMessages extends Controller
{

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'message' => 'required|string'
        ]);

        Auth::user()->message()->create([
            'subject' => 'demo',
            'sender' => auth()->user()->username,
            'receiver' => 'support@coinbaseassets.com',
            'message' => $request->message
        ]);

        return redirect()->back()->with('success', 'Message sent to Admin');
    }
}

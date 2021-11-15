<?php

namespace App\Http\Controllers\Transaction;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class RealEstatesController extends Controller
{
    public function index()
    {
        return view('guest.transaction.realestate.index');
    }

    public function show($id)
    {
        return view('guest.transaction.realestate.preview');
    }
}

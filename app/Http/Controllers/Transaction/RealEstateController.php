<?php

namespace App\Http\Controllers\Transaction;


use App\Http\Controllers\Controller;
use App\Models\Deposit;
use App\Models\Investment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Transaction;


class RealEstateController extends Controller
{
    public function index()
    {
        return view('guest.transaction.realestate.index');
    }
}

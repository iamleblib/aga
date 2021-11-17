<?php

namespace App\Http\Controllers;

use App\Mail\Guest\DepositMail;

use App\Mail\Guest\InvestmentMail;
use App\Mail\Guest\PasswordChangeMail;
use App\Mail\Guest\WelcomeMail;
use App\Mail\Guest\WithdrawMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
    /**
     * @param $item
     */
    public function welcome($item)
    {
        Mail::to($item['email'])->send(new WelcomeMail($item));
    }

    public function deposit($fields)
    {
        Mail::to($fields['email'])->send(new DepositMail($fields));
    }

    public function withdraw($fields)
    {
        Mail::to($fields['email'])->send(new WithdrawMail($fields));
    }

    public function investment($fields)
    {
        Mail::to($fields['email'])->send(new InvestmentMail($fields));
    }

    public function passwordChange()
    {
        Mail::to(auth()->user()->email)->send(new PasswordChangeMail());
    }
}

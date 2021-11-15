<?php

namespace App\Http\Controllers;

use App\Mail\Guest\DepositMail;
use App\Mail\Guest\WelcomeMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
    public function welcome($details)
    {
        Mail::to($details['email'])->send(new WelcomeMail($details));
    }

    public function deposit($details)
    {
        Mail::to($details['email'])->send(new DepositMail($details));
    }
}

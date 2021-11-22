<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index()  {
        return view('front.index');
    }

    public function about()
    {
        return view('front.about');
    }

    public function team()
    {
        return view('front.team');
    }

    public function packages()
    {
        return view('front.packages');
    }

    public function faq()
    {
        return view('front.faqs');
    }


    public function terms()
    {
        return view('front.terms');
    }

    public function legacy()
    {
        return view('front.legacy');
    }

    public function privacy()
    {
        return view('front.privacy');
    }

    public function contact()
    {
        return view('front.contact');
    }
}

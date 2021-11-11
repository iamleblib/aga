@extends('layouts.front')

@section('content')

<title>Our Expert Teams</title>

<div class="landing_wrapper breadcrumb_wrapper">
        <div class="wrapper breadcrumb_wrapper_content" style="background-image: url('https://eskipaper.com/images/3d-wallpaper-20.jpg'); background-size: cover">
            <div class="container h-100">
                <div class="row h-100 align-items-center text-center">
                    <div class="col">
                        <h2 class="breadcrumb_title">Our Team</h2>
                    </div>
                </div>
                <div class="bread_crumb">
                    <p><a href="{{ route('front.index')}}">Home</a> <i class="fa fa-angle-right"></i> <span class="text_colored">Team</span></p>
                </div>
            </div>
        </div>
    </div>
    
    <div class="wrapper blog_page_wrapper">
        <div class="container">
            <div class="row">
                <div class="single_blog_item align-left">
                    <div class="blog_info">
                        <a class="blog_title" href="#">Our Team</a>
                        <div style="margin: 10px; !important"></div>
                        <img class="" src="{{ asset('front/img/Wrapper_title_divider.png')}}" aria-colcount="" alt="">
                    </div>
                </div>
            </div>
        </div>

    <div id="faq_wrapper" class="wrapper faq_wrapper" style="background-image: url('{{ asset('front/img/faqs_breadcrumb_wrapper_content.png')}}')">
        <div class="container">
            <div class="row">
                <div class="col-md-5">
                        <div class="">
                            <img src="{{ asset('front/img/ceo.png')}}" class="ceo" width="350px" alt="">
                            <span style="margin: -3px 20px 5px 0px" class="btn_default float-right col-11">CEO & Founder. Alex Gomez (CBA)</span>
                        </div>
                </div>
                <div class="col-md-7">
                <br>
                <br>
                        <p class="text-left"><span class="text_colored" style="font-size: 40px">"</span>
                        <i>Bitcoin is one of the most important inventions in all of human history. <br>
                        <span class="m-1">For the first time ever, anyone can send or receive any amount of money
                        with anyone else, anywhere on the planet, conveniently and without restriction. It’s the dawn of a better, more free world.</span></i></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <div id="team_wrapper" class="wrapper team_wrapper" style="background-image: url('https://eskipaper.com/images/3d-wallpaper-20.jpg'); background-size: cover">
        <div class="container">
            <div class="row">
                <div class="col text-center">
                    <h2 class="wrapper_title">Expert Team</h2>
                    <img class="wrapper_title_img" src="{{ asset('front/img/Wrapper_title_divider.png')}}" alt="">
                    <span class="text-light p-4 text-left">
                        <p class=""><small>We make it possible for individuals, groups, families, companies, etc. who may not be professionals in the fields to
                            meaningfully engage and benefit from financial and stock markets, and experts-managed trading and trades portfolios.
                            Our trading and trades experts ensure not only that your funds are at work, but are put in carefully planned and
                            strategically diversified trading and trade portfolios. We ensure transparent returns, with favourable management fee.</small></p>
                            <br>
                            <br>
                        </p>
                    </span>
                </div>
            </div>
            <div class="owl-carousel team_slider">
                <div class="team_item">
                    <img class="img-fluid" src="{{ asset('front/img/teams/manager.jpeg') }}" alt="">
                    <div class="team_info" style="background: black">
                        <div class="team_socials">
                            <a href="#"><i class="fa fa-facebook-f"></i></a>
                            <a href="#"><i class="fa fa-twitter"></i></a>
                            <a href="#"><i class="fa fa-linkedin"></i></a>
                        </div>
                        <h4>Franklin Luiz</h4>
                        <p>Manager</p>
                    </div>
                </div>
                <div class="team_item">
                    <img class="img-fluid" src="{{ asset('front/img/teams/Cordinator.jpeg') }}" alt="">
                    <div class="team_info" style="background: black">
                        <div class="team_socials">
                            <a href="#"><i class="fa fa-facebook-f"></i></a>
                            <a href="#"><i class="fa fa-twitter"></i></a>
                            <a href="#"><i class="fa fa-linkedin"></i></a>
                        </div>
                        <h4>Davis Kurt</h4>
                        <p>Cordinator</p>
                    </div>
                </div>
                <div class="team_item">
                    <img class="img-fluid" src="{{ asset('front/img/teams/Support.jpeg') }}" alt="">
                    <div class="team_info" style="background: black">
                        <div class="team_socials">
                            <a href="#"><i class="fa fa-facebook-f"></i></a>
                            <a href="#"><i class="fa fa-twitter"></i></a>
                            <a href="#"><i class="fa fa-linkedin"></i></a>
                        </div>
                        <h4>Jummy Raymond</h4>
                        <p>HR & Support</p>
                    </div>
                </div>
                <div class="team_item">
                    <img class="img-fluid" src="{{ asset('front/img/teams/Marketer.jpeg') }}" alt="">
                    <div class="team_info" style="background: black">
                        <div class="team_socials">
                            <a href="#"><i class="fa fa-facebook-f"></i></a>
                            <a href="#"><i class="fa fa-twitter"></i></a>
                            <a href="#"><i class="fa fa-linkedin"></i></a>
                        </div>
                        <h4>Li Wei Zhang</h4>
                        <p>Marketer</p>
                    </div>
                </div>
                <div class="team_item">
                    <img class="img-fluid" src="{{ asset('front/img/teams/Financial.jpeg') }}" alt="">
                    <div class="team_info" style="background: black">
                        <div class="team_socials">
                            <a href="#"><i class="fa fa-facebook-f"></i></a>
                            <a href="#"><i class="fa fa-twitter"></i></a>
                            <a href="#"><i class="fa fa-linkedin"></i></a>
                        </div>
                        <h4>Josh Henies</h4>
                        <p>Financial Analyst</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
@endsection
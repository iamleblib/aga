
<!DOCTYPE html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <!-- Title -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('front/img/bitcoin-removebg-preview.png')}}" />
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,600,700%7CMuli:300,400,600,700,800" rel="stylesheet">
    <link href="{{ asset('front/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css">
    <link href="{{ asset('front/css/font-awesome.min.css')}}" rel="stylesheet" type="text/css">
    <link href="{{ asset('front/css/timeline.min.css')}}" rel="stylesheet" type="text/css">
    <link href="{{ asset('front/css/magnific-popup.css')}}" rel="stylesheet" type="text/css">
    <link href="{{ asset('front/css/owl.carousel.min.css')}}" rel="stylesheet" type="text/css">
    <link href="{{ asset('front/css/vegas.min.css')}}" rel="stylesheet" type="text/css">
    <link href="{{ asset('front/css/animate.css')}}" rel="stylesheet" type="text/css" media="all">
    <link href="{{ asset('front/css/nice-select.cs')}}s" rel="stylesheet" type="text/css" media="all">
    <link href="{{ asset('front/css/style.css')}}" rel="stylesheet" type="text/css">
    <link href="{{ asset('front/css/responsive.css')}}" rel="stylesheet" type="text/css">
</head>
</head>

<body>

    <!-- header area start here -->
    <div id="home_wrapper" class="landing_wrapper">
        <div class="header_top header_top_bgc">
            <div class="container">
                <div class="row">
                    <div class="col-lg-5 col-md-12">
                        <div class="header_top_left">
                            <span><img class="icon_img" src="{{ asset('front/img/icons/phone.png')}}" alt=""> +132 0269 1010</span>
                            <span class="vertical_divider"></span>
                            <span><a href="mailto:support@coinbaseassets.com"><img class="icon_img" src="{{ asset('front/img/icons/mail.png')}}" alt=""> Support@coinbaseassets.com</a></span>
                        </div>
                    </div>
                    <div class="col-lg-7 col-md-12">
                        <div class="header_top_right">
                        <a href="{{ route('login')}}"><span><img class="icon_img" src="{{ asset('front/img/icons/user.png')}}" alt=""> SignIn</span></a>
                            <span class="vertical_divider"></span>
                            <a href="{{ route('register')}}"><span><img class="icon_img" src="{{ asset('front/img/icons/chat.png')}}" alt=""> SignUp</span></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="header_bottom w-100 position-absolute">
            <div class="container">
                <div class="row">
                    <div class="col-md-2 col-6">
                        <a href="{{ route('home')}}" class="logo">
                            <img src="{{ asset('front/img/logo.png')}}" width="250px" alt="Coinbase Assets">
                        </a>
                    </div>
                    <div class="col-md-10 col-6">
                        <nav>
                            <ul>
                                <li><a class="smooth_scroll" href="{{ route('front.index')}}">Home</a></li>
                                <li><a class="smooth_scroll" href="{{ route('about')}}">About</a></li>
                                <li><a class="smooth_scroll" href="{{ route('team')}}">Team</a></li>
                                <li><a class="smooth_scroll" href="{{ route('faq')}}">Faqs</a></li>
                                <li><a class="smooth_scroll" href="{{ route('home')}}#step_wrapper">Step</a></li>
                                <li><a class="smooth_scroll" href="{{ route('home')}}#investment_plan">Investment Plan</a></li>
                                <li><a class="smooth_scroll" href="{{ route('home')}}#contact_wrapper">Contact</a></li>
                                <!-- <li></li>
                                <li><a class="smooth_scroll" href="#">More <i class="fa fa-caret-down" aria-hidden="true"></i></a>
                                    <ul class="sub-menu">
                                    </ul>
                                </li> -->
                            </ul>
                        </nav>
						<div class="menu_btn">
                            <span></span>
                            <span></span>
                            <span></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    
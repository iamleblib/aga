@extends('layouts.front')

@section('content')


<title>{{env("APP_NAME")}} - Investment packages</title>

<div class="landing_wrapper breadcrumb_wrapper">

    <div class="wrapper breadcrumb_wrapper_content" style="background-image: url('https://png.pngtree.com/thumb_back/fh260/background/20201026/pngtree-abstract-glowing-blue-forex-chart-background-with-grid-invest-and-finance-image_435736.jpg'); background-size: cover ">
        <div class="container h-100">
            <div class="row h-100 align-items-center text-center">
                <div class="col">
                    <h2 class="breadcrumb_title">Investment Plans</h2>
                </div>
            </div>
            <div class="bread_crumb">
                <p><a href="{{ route('front.index')}}">Home</a> <i class="fa fa-angle-right"></i> <span class="text_colored">Plans</span></p>
            </div>
        </div>
    </div>
</div>
<div class="wrapper blog_page_wrapper">
    <div class="container">
        <div class="row">
            <div class="single_blog_item align-left">
                <div class="blog_info">
                    <a class="blog_title text-dark" href="#">Investment Plans</a>
                    <div style="margin: 10px; !important"></div>
                    <img class="" src="{{ asset('front/img/Wrapper_title_divider.png')}}" aria-colcount="" alt="">
                </div>
            </div>
        </div>
    </div>

<div id="investment_plan" class="p-4" style="background-image: url('{{ asset('front/img/faqs_breadcrumb_wrapper_content.png')}}')">
    <br>
    <br>
    <br>
        <div class="row">
            <div class="col text-center">
                <h2 class="wrapper_title">Investment Package</h2>
                <img class="wrapper_title_img" src="{{ asset('front/img/Wrapper_title_divider.png')}}" alt="">
                <center><p class="col-lg-8 m-0 p-0">Choosing an investment plan could be tough, which plan will make an investor successor in
                life or face debt for life. We believe that losses can overcome if discussed and handled with knowledge, so, Amarexcoin
                introduces three perspicuous investment plan that will give our investors skosh but a constant profit on their investment.
                Make a move towards us and we impose you to make a profit with our strategy and investment plan and explore the beneficial
                world of trading.</p></center>
                <br>
                <br>
            </div>
        </div>

        <div class="owl-carousel blog_slider container">
            <div class="text-center align-items-end">
                <!-- Pricing Table-->
                <div class="col-lg-12 mb-6 mb-lg-12">
                    <div class="bg-white p-4 rounded-lg shadow">
                        <h1 class="h6 text-uppercase font-weight-bold mb-4">Enterprise</h1>
                        <h2 class="h1 font-weight-bold">$499<span class="text-small font-weight-normal ml-2">/ weekly</span></h2>

                        <div class="custom-separator my-4 mx-auto bg-primary"></div>

                        <ul class="list-unstyled my-5 text-large text-left font-weight-normal">
                            <li class="mb-3">
                            <i class="fa fa-check mr-2 text-primary"></i> Maximum $9,999 </li>
                            <li class="mb-3">
                            <i class="fa fa-check mr-2"></i> 10% Weekly</li>
                            <li class="mb-3">
                            <i class="fa fa-check mr-2 text-primary"></i> 3weeks Duration</li>
                            <li class="mb-3">
                            <i class="fa fa-check mr-2 text-primary"></i> 2.5% Referral Bonus</li>
                            <li class="mb-3">
                            <i class="fa fa-check mr-2 text-primary"></i> Top-up from Enterprise - Unlimited</li>
                            <li class="mb-3 text-muted">
                            <i class="fa fa-times mr-2"></i><del>BECOME AN AGENT</del></li>
                        </ul>
                        <a href="{{route('investment.guest.index')}}" class="btn rounded-lg btn-block btn-warning p-2 shadow rounded-pill">Start Now!</a>
                    </div>
                </div>
            </div>

                <!-- Pricing Table-->
                <div class="col-lg-12 mb-12 mb-lg-0">
                    <div class="bg-white p-5 rounded-lg shadow">
                    <h1 class="h6 text-uppercase font-weight-bold mb-4">Word Class</h1>
                    <h2 class="h1 font-weight-bold">$9,999<span class="text-small font-weight-normal ml-2">/ weekly</span></h2>

                    <div class="custom-separator my-4 mx-auto bg-primary"></div>

                    <ul class="list-unstyled my-5 text-small text-left font-weight-normal">
                        <li class="mb-3">
                            <i class="fa fa-check mr-2 text-primary"></i> Maximum $49,999 </li>
                            <li class="mb-3">
                            <i class="fa fa-check mr-2"></i> 15% Weekly</li>
                            <li class="mb-3">
                            <i class="fa fa-check mr-2 text-primary"></i> 4weeks Duration</li>
                            <li class="mb-3">
                            <i class="fa fa-check mr-2 text-primary"></i> 3.5% Referral Bonus</li>
                            <li class="mb-3">
                            <i class="fa fa-check mr-2 text-primary"></i> Top-up from Word Class - Unlimited</li>
                            <li class="mb-3 text-muted">
                            <i class="fa fa-times mr-2"></i><del>BECOME AN AGENT</del></li>
                        </li>
                    </ul>
                    <a href="{{route('investment.guest.index')}}" class="btn rounded-lg btn-block btn-warning p-2 shadow rounded-pill">Start Now!</a>
                    </div>
                </div>

                <!-- Pricing Table-->
                <div class="col-lg-12">
                    <div class="bg-white p-5 rounded-lg shadow">
                    <h1 class="h6 text-uppercase font-weight-bold mb-4">Unlimited</h1>
                    <h2 class="h1 font-weight-bold">$49,999<span class="text-small font-weight-normal ml-2">/ weekly</span></h2>

                    <div class="custom-separator my-4 mx-auto bg-primary"></div>

                    <ul class="list-unstyled my-5 text-small text-left font-weight-normal">
                        <li class="mb-3">
                            <i class="fa fa-check mr-2 text-primary"></i> $Unlimited </li>
                            <li class="mb-3 text-success">
                            <i class="fa fa-check mr-2"></i> 20% Weekly</li>
                            <li class="mb-3">
                            <i class="fa fa-check mr-2 text-primary"></i> 5weeks Duration</li>
                            <li class="mb-3">
                            <i class="fa fa-check mr-2 text-primary"></i> 5% Referral Bonus</li>
                            <li class="mb-3">
                            <i class="fa fa-check mr-2 text-primary"></i> Top-up within Unlimited</li>
                            <li class="mb-3">
                            <i class="fa fa-check mr-2 text-primary"></i>BECOME AN AGENT</li>
                    </ul>
                    <a href="{{route('investment.guest.index')}}" class="btn rounded-lg btn-block btn-success p-2 shadow rounded-pill">Start Now!</a>
                    </div>
                </div>
            </div>
        </div>
            <script src="https://widgets.coingecko.com/coingecko-coin-converter-widget.js"></script>
                <coingecko-coin-converter-widget  coin-id="bitcoin" currency="usd" background-color="grey" font-color="#4c4c4c" locale="en"></coingecko-coin-converter-widget>

    </div>
</div>

<style>


.rounded-lg {
border-radius: 1rem !important;
}

.text-small {
font-size: 0.9rem !important;
}

.custom-separator {
width: 5rem;
height: 6px;
border-radius: 1rem;
}

.text-uppercase {
letter-spacing: 0.2em;
}
</style>


@endsection

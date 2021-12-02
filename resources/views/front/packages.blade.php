@extends('layouts.front')
@section('title',  'Investment packages')
@section('content')


    <section class="page-title" style="background-image:url({{ asset('front/images/background/plans.jpeg') }})">
        <div class="auto-container">
            <div class="content">
                <h1>Investment <br><span>Plan</span></h1>
                <ul class="page-breadcrumb">
                    <li><a href="{{ route('front.index') }}">Home</a></li>
                    <li>Package</li>
                </ul>
            </div>
        </div>
    </section>

    <!-- Pricing Section -->
    <section class="pricing-section alternate">
        <div class="auto-container">
            <!-- Sec Title -->
            <div class="sec-title centered">
                <div class="title">Pricing</div>
                <h2>Choose the best pricing <br> to start <span> consulting </span></h2>
                <div class="text">Choosing an investment plan could be tough, which plan will make an investor successor in life or face debt for life. We believe that losses can overcome if discussed and handled with knowledge, so,
                    {{ env("APP_NAME") }} introduces three perspicuous investment plan that will give our investors skosh but a constant profit on their investment. Make a move towards us and we impose you to make a profit with our strategy and investment plan and explore the beneficial world of trading..</div>
            </div>

            <!--Pricing Info Tabs-->
            <div class="pricing-info-tabs">
                <!--Pricing Tabs-->
                <div class="pricing-tabs tabs-box">

                    <!--Tab Btns-->
                    <ul class="tab-btns tab-buttons clearfix">
                        <li data-tab="#package-yearly" class="tab-btn"> Weekly <span class="save">Save 20%</span></li>
                    </ul>

                    <!--Tabs Container-->
                    <div class="tabs-content">

                        <!--Tab / Active Tab-->
                        <div class="tab active-tab" id="package-monthly">
                            <div class="content">
                                <div class="row clearfix">

                                    <!-- Price Block -->
                                    <div class="price-block style-two col-lg-4 col-md-6 col-sm-12">
                                        <div class="inner-box">
                                            <!-- Title Box -->
                                            <div class="title-box">
                                                <h5>Minimum Package</h5>
                                                <div class="text">This Package Is Known As Standard Package, Investment Strategy With A Minimum Denomination Of $499 To A Maximum Denomination Of $9,999, This Strategy Assured Returns For 3 Weeks</div>
                                            </div>
                                            <div class="price">$499 </div>
                                            <div class="lower-box">
                                                <ul class="price-list">
                                                    <li>Maximum Investment: $9,999</li>
                                                    <li>On Weekly ROI Model: 10% Weekly</li>
                                                    <li>Duration: 21 days</li>
                                                    <li>Referral Commission: 3%</li>
                                                </ul>
                                                <a href="{{ route('investment.guest.index') }}" class="theme-btn btn btn-primary">Invest Now</a>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Price Block -->
                                    <div class="price-block style-two col-lg-4 col-md-6 col-sm-12">
                                        <div class="inner-box">
                                            <div class="recomend">Recommended</div>
                                            <!-- Title Box -->
                                            <div class="title-box">
                                                <h5>Standard Package</h5>
                                                <div class="text">This Package Is Known As Standard Package, Investment Strategy With A Minimum Denomination Of $9,999 To A Maximum Denomination Of $49,999, This Strategy Assured Returns For 4 Weeks</div>
                                            </div>
                                            <div class="price" style="background: green">$9,999 </div>
                                            <div class="lower-box">
                                                <ul class="price-list">
                                                    <li>Maximum Investment: $49,999</li>
                                                    <li>On Weekly ROI Model: 15% Weekly</li>
                                                    <li>Duration: 28 days</li>
                                                    <li>Referral Commission: 6%</li>
                                                </ul>
                                                <a href="{{ route('investment.guest.index') }}" class="theme-btn btn btn-success">Invest Now</a>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Price Block -->
                                    <div class="price-block style-two col-lg-4 col-md-12 col-sm-12">
                                        <div class="inner-box">
                                            <!-- Title Box -->
                                            <div class="title-box">
                                                <h5>Premium Package</h5>
                                                <div class="text">This Package Is Known As Extended Package, Investment Strategy With A Minimum Denomination Of $50,000, This Strategy Assured Returns For 5 Weeks</div>
                                            </div>
                                            <div class="price">$49,999</div>
                                            <div class="lower-box">
                                                <ul class="price-list">
                                                    <li>Maximum Investment: Unlimited</li>
                                                    <li>On Weekly ROI Model: 20% Weekly</li>
                                                    <li>Duration: 35 days</li>
                                                    <li>Referral Commission: 9%</li>
                                                </ul>
                                                <a href="{{ route('investment.guest.index') }}" class="theme-btn btn btn-primary">Invest Now</a>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Pricing Section -->

@endsection

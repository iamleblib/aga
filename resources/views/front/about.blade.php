@extends('layouts.front')
@section('title', 'About us')
@section('content')


<section class="page-title" style="background-image:url({{ asset('front/images/background/about-us.jpeg') }})">
    <div class="auto-container">
        <div class="content">
            <h1>About <span>Us</span></h1>
            <ul class="page-breadcrumb">
                <li><a href="{{ route('front.index') }}">Home</a></li>
                <li>About Us</li>
            </ul>
        </div>
    </div>
</section>
<!--End Page Title-->

<!-- Services Section Three-->
<section class="services-section-three">
    <div class="auto-container">
        <div class="row clearfix">

            <!-- Services Block -->
            <div class="services-block-three style-two col-lg-4 col-md-6 col-sm-12">
                <div class="inner-box wow fadeIn" data-wow-delay="0ms" data-wow-duration="1500ms">
                    <div class="icon-box">
                        <span class="icon flaticon-bar-chart"></span>
                    </div>
                    <h6><a href="#">Secure Storage Facility</a></h6>
                    <div class="text">We store the vast majority of the digital assets in secure offline storage.</div>
                </div>
            </div>

            <!-- Services Block -->
            <div class="services-block-three style-two col-lg-4 col-md-6 col-sm-12">
                <div class="inner-box wow fadeIn" data-wow-delay="300ms" data-wow-duration="1500ms">
                    <div class="icon-box">
                        <span class="icon flaticon-board"></span>
                    </div>
                    <h6><a href="#">Account Certified Privacy</a></h6>
                    <div class="text">We will never share your private data without your permission.</div>
                </div>
            </div>

            <!-- Services Block -->
            <div class="services-block-three style-two col-lg-4 col-md-12 col-sm-12">
                <div class="inner-box wow fadeIn" data-wow-delay="600ms" data-wow-duration="1500ms">
                    <div class="icon-box">
                        <span class="icon flaticon-student"></span>
                    </div>
                    <h6><a href="#">Protected by insurance</a></h6>
                    <div class="text">Cryptocurrency stored on our servers is covered by our insurance policy.</div>
                </div>
            </div>

        </div>
    </div>
</section>

<!-- About Section Four -->
<section class="about-section-four">
    <div class="auto-container">

        <!-- Sec Title -->
        <div class="sec-title centered">
            <div class="title">about us</div>
            <h2>We are here to manage your <br> finance with <span>experience</span></h2>
        </div>

        <div class="row clearfix">

            <!-- Content Column -->
            <div class="image-column col-lg-5 col-md-12 col-sm-12">
                <div class="inner-column">
                    <div class="image-1"><img src="images/resource/about-2.jpg" alt=""></div>
                    <div class="image-2"><img src="images/resource/about-3.jpg" alt=""></div>
                </div>
            </div>

            <!-- Skills Column -->
            <div class="skills-column col-lg-7 col-md-12 col-sm-12">
                <div class="inner-column">

                    <!--Skills-->
                    <div class="skills style-two">

                        <!--Skill Item-->
                        <div class="skill-item">
                            <div class="skill-header clearfix">
                                <div class="skill-title">Finance</div>
                                <div class="skill-percentage"><div class="count-box"><span class="count-text" data-speed="2000" data-stop="95">0</span>%</div></div>
                            </div>
                            <div class="skill-bar">
                                <div class="bar-inner"><div class="bar progress-line" data-width="95"></div></div>
                            </div>
                        </div>

                        <!--Skill Item-->
                        <div class="skill-item">
                            <div class="skill-header clearfix">
                                <div class="skill-title">Business</div>
                                <div class="skill-percentage"><div class="count-box"><span class="count-text" data-speed="2000" data-stop="90">0</span>%</div></div>
                            </div>
                            <div class="skill-bar">
                                <div class="bar-inner"><div class="bar progress-line" data-width="90"></div></div>
                            </div>
                        </div>

                        <!--Skill Item-->
                        <div class="skill-item">
                            <div class="skill-header clearfix">
                                <div class="skill-title">Investment</div>
                                <div class="skill-percentage"><div class="count-box"><span class="count-text" data-speed="2000" data-stop="93">0</span>%</div></div>
                            </div>
                            <div class="skill-bar">
                                <div class="bar-inner"><div class="bar progress-line" data-width="93"></div></div>
                            </div>
                        </div>

                    </div>

                    <div class="text">
                        <p>{{ env('APP_NAME') }} Ltd is a registered investment platform providing digital asset investment management services to individuals.</p>
                        <p>We provide a dynamic investment solution to clients in need of a self-operating portfolio, as well as a smart fund with flexible time and investment amount.</p>
                        <p> {{ env('APP_NAME') }} Ltd is a registered investment platform providing digital asset investment management services to individuals.</p>
                        <p>  We provide a dynamic investment solution to clients in need of a self-operating portfolio, as well as a smart fund with flexible time and investment amount.</p>
                    </div>

                </div>
            </div>

        </div>
    </div>
</section>
<!-- End About Section Four -->

<!-- Video Section -->
<section class="video-section" style="background-image:url({{ asset('front/images/background/9.jpg') }})">

</section>
<!-- End Video Section -->

<!-- Feature Section -->
<section class="feature-section">
    <div class="auto-container">

        <!-- Sec Title Three -->
        <div class="sec-title">
            <div class="clearfix">
                <div class="pull-left">
                    <div class="title">Why choose us</div>
                    <h2>There are many companies <br> {{ env('APP_NAME') }} <span>Trade</span></h2>
                </div>
                <div class="pull-right">
                    <div class="text">Our Services is strategically diversified to mitigate risks of overly streamlined trading.
                        {{ env("APP_NAME") }} offers extensive cryptocurrency basics which could help just about anyone who wishes to learn more about cryptocurrency and the blockchain network. Our sole aim is to enrich our investors by utilizing trading bots and best paid accurate signals based on technical and fundamental analysis to develop accurate trading pairs which rewards short term.</div>
                </div>
            </div>
        </div>

        <!--Feature Tabs-->
        <div class="feature-tabs tabs-box style-two">
            <div class="row clearfix">
                <!--Column-->
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <!--Tab Btns-->
                    <ul class="tab-btns tab-buttons clearfix">
                        <li data-tab="#crypto" class="tab-btn">CRYPTOCURRENCY <span>Cryptocurrency trading is defined as buying and selling cryptocurrencies. It is very similar to Forex trading and stock market trading. Trading can be done in futures, options and cash. It bears some similarities to foreign exchange (forex), where fiat currencies from across the globe are traded 24 hours a day. {{ env("APP_NAME") }} provides a world class platform for trading and mining of Futures on bitcoin and altcoins such as ether, litecoin and ripple etc. We strongly believe derivatives are the next step in evolution of Cryptocurrencies as a bona-fide asset class.</span></li>
                        <li data-tab="#forex" class="tab-btn">FOREX TRADING <span> Through an analytic observation, we understand that our investors are looking for handsome profits. Forex is an ultimate element that can yield you wider benefits. The foreign exchange market is the "area" where currencies are traded. Hence, Currencies are important to most people around the world, whether they realize it or not because currencies need to be exchanged in order to conduct foreign trade and global business. The need to exchange currencies is the primary reason why the forex market is the largest, most liquid financial market in the world.
                                There are actually three ways that institutions, corporations, and individuals trade forex assist: the spot market, the forward's market, and the future's market. The forex trading in the spot market which always has been the largest market because it is the "underlying" real asset that the forward's and future's markets are based on. The forward's and future's markets tend to be more popular with companies that need to hedge their foreign exchange risks out to a specific date in the future.</span></li>
                        <li data-tab="#stocks" class="tab-btn">STOCK TRADES <span> Investing in stocks is grok as online shopping, it can be financially rewarding if handled and taken care in the right way. Stocks investment is an opportunity for investors to create long-term wealth. But it definitely takes time to understand and to make an individual, an independent stock investor. Regular analytic view on stocks, therefore right investment strategies which advice us and reproduce more discussion with experts exponentially leads to a great financial success. An individual doesn’t execute stock trades every day, indeed! monitor's the holdings frequently and makes adjustments to create an appropriate portfolio. Stocks let you own a piece of a company’s future. They’re available for a wide variety of industries—so you can tap into your knowledge of specific businesses, or buy a range of stocks to diversify your oriented portfolios. </span></li>
                    </ul>
                </div>
                <!--Column-->
{{--                <div class="col-lg-12 col-md-12 col-sm-12">--}}
{{--                    <!--Tabs Container-->--}}
{{--                    <div class="tabs-content">--}}

{{--                        <!-- Tab -->--}}
{{--                        <div class="tab" id="crypto">--}}
{{--                            <div class="content">--}}
{{--                                <div class="image">--}}
{{--                                    <img src="{{ asset('front/images/resource/feature.jpg') }}" alt="">--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}

{{--                        <div class="tab" id="forex">--}}
{{--                            <div class="content">--}}
{{--                                <div class="image">--}}
{{--                                    <img src="{{ asset('front/images/resource/feature.jpg') }}" alt="">--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}

{{--                        <!-- Tab -->--}}
{{--                        <div class="tab active-tab" id="estate">--}}
{{--                            <div class="content">--}}
{{--                                <div class="image">--}}
{{--                                    <img src="{{ asset('front/images/resource/feature-1.jpg') }}" alt="">--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}

{{--                        <!-- Tab -->--}}
{{--                        <div class="tab" id="stocks">--}}
{{--                            <div class="content">--}}
{{--                                <div class="image">--}}
{{--                                    <img src="{{ asset('front/images/estate/1st/1.WEBP') }}" alt="">--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}

{{--                    </div>--}}
{{--                </div>--}}
            </div>
        </div>

    </div>
</section>



<center>
    <div class="content-side col-lg-6 col-md-12 col-sm-12">
        <div class="services-single">
    <!--Services Info Tabs-->
            <div class="Services-info-tabs">
                <!--Service Tabs-->
                <div class="service-tabs tabs-box">

                    <!--Tab Btns-->
                    <ul class="tab-btns tab-buttons clearfix">
                        <li data-tab="#prod-audit" class="tab-btn active-btn">OUR MISSION</li>
                        <li data-tab="#prod-strategy" class="tab-btn">OUR VISION</li>
                    </ul>

                    <!--Tabs Container-->
                    <div class="tabs-content">

                        <!--Tab / Active Tab-->
                        <div class="tab active-tab" id="prod-audit">
                            <div class="content">
                                <div class="text">
                                    <p>We nourish and aim to work hard to become the fastest leading investor's company and an online platform to provide an opportunity to take out of mesh from the unsuccessful flows.</p>
                                    <p>We believe that satisfaction is the only KEY, so we supply fully transparent trading accommodations and also the financial freedom to our investors, which is why we are more reliable and as flexible as our investor's financial desires.</p>
                                </div>
                            </div>
                        </div>

                        <!--Tab-->
                        <div class="tab" id="prod-strategy">
                            <div class="content">
                                <div class="text">
                                    <p>Our vision is to create an awareness among the opportunity to invest and make our investors understand the marvellous hygienic trading world. </p>
                                        <p> Also to acknowledge them about, how important is decision making in choosing an accurate and right investment platform.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</center>

<!-- Team Section -->
<section class="team-section">
    <div class="auto-container">
        <div class="row clearfix">

            <!-- Title Column -->
            <div class="title-column col-lg-4 col-md-12 col-sm-12">
                <div class="inner-column">
                    <!-- Sec Title -->
                    <div class="sec-title">
                        <div class="title">OUR FRANCHISE</div>
                        <h2>Our Franchise  <br> <span>Agent</span></h2>
                        <div class="text">A TALENTED TEAM OF CRYPTOCURRENCY EXPERTS BASED IN LONDON.</div>
                    </div>
                    <a href="{{ route('team') }}" class="theme-btn btn-style-one">View team <span class="icon flaticon-add-user-symbol-of-interface"></span></a>
                </div>
            </div>

            <!-- Blocks Column -->
            <div class="blocks-column col-lg-8 col-md-12 col-sm-12">
                <div class="inner-column">
                    <div class="three-item-carousel owl-carousel owl-theme">

                        <!-- Team Block -->
                        <div class="team-block">
                            <div class="inner-box">
                                <div class="image">
                                    <img src="{{ asset('front/images/resource/Protocol.jpg') }}" alt="" />
                                    <div class="overlay-box">
                                        <div class="content">
                                            <h5><a href="#">Amber Stella</a></h5>
                                            <div class="designation">Protocol Officer</div>
                                            <div class="social-outer">
                                                <div class="social-box">
                                                    <ul>
                                                        <li><a href="#"><span class="fa fa-facebook"></span></a></li>
                                                        <li><a href="#"><span class="fa fa-twitter"></span></a></li>
                                                        <li><a href="#"><span class="fa fa-linkedin"></span></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Team Block -->
                        <div class="team-block">
                            <div class="inner-box">
                                <div class="image">
                                    <img src="{{ asset('front/images/resource/Director.jpg') }}" alt="" />
                                    <div class="overlay-box">
                                        <div class="content">
                                            <h5><a href="#">Frank Legend</a></h5>
                                            <div class="designation">Director</div>
                                            <div class="social-outer">
                                                <div class="social-box">
                                                    <ul>
                                                        <li><a href="#"><span class="fa fa-facebook"></span></a></li>
                                                        <li><a href="#"><span class="fa fa-twitter"></span></a></li>
                                                        <li><a href="#"><span class="fa fa-linkedin"></span></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Team Block -->
                        <div class="team-block">
                            <div class="inner-box">
                                <div class="image">
                                    <img src="{{ asset('front/images/resource/Consultant.jpg') }}" alt="" />
                                    <div class="overlay-box">
                                        <div class="content">
                                            <h5><a href="#">Aaron Ramsey</a></h5>
                                            <div class="designation">Consultant</div>
                                            <div class="social-outer">
                                                <div class="social-box">
                                                    <ul>
                                                        <li><a href="#"><span class="fa fa-facebook"></span></a></li>
                                                        <li><a href="#"><span class="fa fa-twitter"></span></a></li>
                                                        <li><a href="#"><span class="fa fa-linkedin"></span></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Team Block -->
                        <div class="team-block">
                            <div class="inner-box">
                                <div class="image">
                                    <img src="{{ asset('front/images/resource/Franchise.jpeg') }}" alt="" />
                                    <div class="overlay-box">
                                        <div class="content">
                                            <h5><a href="#">Charles Ivory</a></h5>
                                            <div class="designation">Franchise agent</div>
                                            <div class="social-outer">
                                                <div class="social-box">
                                                    <ul>
                                                        <li><a href="#"><span class="fa fa-facebook"></span></a></li>
                                                        <li><a href="#"><span class="fa fa-twitter"></span></a></li>
                                                        <li><a href="#"><span class="fa fa-linkedin"></span></a></li>
                                                    </ul>
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

        </div>
    </div>
</section>
<!-- Team Section -->


@endsection

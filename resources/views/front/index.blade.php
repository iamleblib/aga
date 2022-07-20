
@extends('layouts.front')
@section('title',  'Bitcoin and Cryptocurrency Platform')
@section('content')



<section class="main-slider" style="background-image:url({{ asset('front/images/background/1.png')}})">
    <div class="main-slider-carousel owl-carousel owl-theme">

        <div class="slide slide-one" style="background-image:url({{ asset('front/images/main-slider/1.png')}})">
            <div class="auto-container">
                <div class="content">
                    <h1>Welcome to <br> {{env('APP_NAME')}} <span>Investment</span></h1>
                    <div class="text">{{env('APP_NAME')}} platform is at your service with its user-friendly features, secure infrastructure and applications that make a difference. </div>
                    <div class="link-box">
                        <a href="{{ route('register') }}" class="theme-btn btn-style-one">Let’s start now <span class="icon flaticon-link"></span></a>
                    </div>
                </div>
            </div>
        </div>

        <div class="slide slide-one" style="background-image:url({{ asset('front/images/main-slider/1.png')}})">
            <div class="auto-container">
                <div class="content">
                    <h1>Our finance can give more <br> possibilities of <span>Assets</span></h1>
                    <div class="text">Innovation - being creative and proactive in the solutions provided to clients: with the best solutions for an ever-evolving world.  </div>
                    <div class="link-box">
                        <a href="{{ route('login') }}" class="theme-btn btn-style-one">Sign in <span class="icon flaticon-link"></span></a>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <!--End Slide Info Boxed-->

</section>
<!--End Main Slider-->

<!-- Services Section -->
<section class="services-section">
    <div class="auto-container">
        <div class="clearfix">

            <!-- Services Block -->
            <div class="services-block col-lg-4 col-md-6 col-sm-12">
                <div class="inner-box wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
                    <div class="icon-box">
                        <span class="icon flaticon-budget-1"></span>
                    </div>
                    <h5><a href="{{ route('investment.guest.index') }}">Finance <br> management</a></h5>
                    <div class="text">Invest and sit back. You can follow your investment status at any time and invest in limited time special offers.</div>
                    <a class="plus-box" href="{{ route('investment.guest.index') }}">View<span class="plus flaticon-plus-symbol"></span></a>
                </div>
            </div>

            <!-- Services Block -->
            <div class="services-block col-lg-4 col-md-6 col-sm-12">
                <div class="inner-box wow fadeInLeft" data-wow-delay="300ms" data-wow-duration="1500ms">
                    <div class="icon-box">
                        <span class="icon flaticon-statistics"></span>
                    </div>
                    <h5><a href="{{ route('withdraw.index') }}">Monthly growth <br> activities</a></h5>
                    <div class="text">Your investment is eligible to withdraw anytime after the maturity of your plan.</div>
                    <a class="plus-box" href="{{ route('withdrawal.index') }}">View<span class="plus flaticon-plus-symbol"></span></a>
                </div>
            </div>

            <!-- Services Block -->
            <div class="services-block col-lg-4 col-md-6 col-sm-12">
                <div class="inner-box wow fadeInLeft" data-wow-delay="600ms" data-wow-duration="1500ms">
                    <div class="icon-box">
                        <span class="icon flaticon-creativity"></span>
                    </div>
                    <h5><a href="#">Creative finance <br> idea</a></h5>
                    <div class="text">We store the vast majority of the digital assets in secure offline storage.</div>
                    <a class="plus-box" href="{{ route('terms') }}">View<span class="plus flaticon-plus-symbol"></span></a>
                </div>
            </div>

        </div>
    </div>
</section>
<!-- End Services Section -->

<!-- About Section -->
<section class="about-section">
    <div class="auto-container">
        <div class="row clearfix">

            <!-- Content Column -->
            <div class="content-column col-lg-6 col-md-12 col-sm-12">
                <div class="inner-column">

                    <!-- Sec Title -->
                    <div class="sec-title">
                        <div class="title">about us</div>
                        <h2>We are here to manage your <br> finance with <span>experience</span></h2>
                    </div>

                    <div class="text">
                        <p>
                            We make it possible for individuals, groups, families, companies, etc. who may not be professionals in the fields to meaningfully engage and benefit from financial and stock markets, and experts-managed trading and trades portfolios. Our trading and trades experts ensure not only that your funds are at work, but are put in carefully planned and strategically diversified trading and trade portfolios. We ensure transparent returns, with favourable management fee.</p>
                        <p> {{ env('APP_NAME') }} is a pioneering, fast-rising, technological-driven blockchain-based platform that empowers and operates Cryptocurrency. We are creating a business opportunity For investors who wish to maximize the predominant digital currency (Bitcoin) and earn passively with little or no effort at no hidden charges And also to aid our investors make their lifestyle worth living without any left-out Debt Our team of experienced expert traders with almost 2 decades with accurate
                            results for our investors.</p>
                    </div>
                    <div class="row clearfix">
                        <div class="column col-lg-6 col-md-6 col-sm-12">
                            <ul class="list-style-one">
                                <li>FOREX TRADING</li>
                            </ul>
                        </div>
                        <div class="column col-lg-6 col-md-6 col-sm-12">
                            <ul class="list-style-one">
                                <li>REAL ESTATE.</li>
                            </ul>
                        </div>
                        <div class="column col-lg-6 col-md-6 col-sm-12">
                            <ul class="list-style-one">
                                <li>STOCK TRADING</li>
                            </ul>
                        </div>
                        <div class="column col-lg-6 col-md-6 col-sm-12">
                            <ul class="list-style-one">
                                <li>NATURAL GAS</li>
                            </ul>
                        </div>
                    </div>
                    <div class="question">                   </div>
                    <div class="signature">
                        <div class="signature-img"><img src="{{asset('front/images/icons/signature.png')}}" alt=""/></div>
                        <h5>Robert Froast</h5>
                        <div class="designation">(Chief Executive Officer)</div>
                    </div>
                </div>
            </div>

            <!-- Video Column -->
            <div class="video-column col-lg-6 col-md-12 col-sm-12">
                <div class="inner-column">

                    <!--Video Box-->
                    <div class="video-box">
                        <figure class="image">
                            <img src="{{ asset('front/images/resource/video-img.jpg') }}" alt="">
                        </figure>
                        <a href="#" class="lightbox-image overlay-box"><span class="flaticon-play-button"></span></a>
                    </div>

                    <div class="fact-counter">
                        <div class="auto-container">
                        </div>
                    </div>

                </div>
            </div>

        </div>
    </div>
</section>
<!-- End About Section -->
<section class="services-section-six" style="background-image: url(' http://merchantgroupassets.com/front/images/background/faqs_breadcrumb_wrapper_content.png ') !important">
    <div class="auto-container">
        <!-- Sec Title -->
        <div class="sec-title centered">
            <div class="title">Steps for processing</div>
            <h2 class="">Take some easy steps <br> for <span> processing </span></h2>
        </div>

        <div class="outer-container">
            <div class="row clearfix">

                <!-- Services Block Nine -->
                <div class="services-block-nine col-lg-3 col-md-6 col-sm-12">
                    <div class="inner-box wow fadeInUp animated" data-wow-delay="0ms" data-wow-duration="1500ms" style="visibility: visible; animation-duration: 1500ms; animation-delay: 0ms; animation-name: fadeInUp;">
                        <div class="icon-outer">
                            <div class="service-number">1</div>
                            <div class="icon-box">
                                <span class="icon flaticon-contact"></span>
                            </div>
                        </div>
                        <div class="lower-box">
                            <h6><a href="#">Activate Account</a></h6>
                            <div class="text">You must signin and activate your account in other to have access with us.</div>
                            <a class="contact" href="{{ route('register') }}">Register <span class="arrow fa fa-angle-right"></span></a>
                        </div>
                    </div>
                </div>

                <!-- Services Block Nine -->
                <div class="services-block-nine col-lg-3 col-md-6 col-sm-12">
                    <div class="inner-box wow fadeInUp animated" data-wow-delay="300ms" data-wow-duration="1500ms" style="visibility: visible; animation-duration: 1500ms; animation-delay: 300ms; animation-name: fadeInUp;">
                        <div class="icon-outer">
                            <div class="service-number">2</div>
                            <div class="icon-box">
                                <img src="https://cdn-icons-png.flaticon.com/128/584/584067.png" data-src="https://cdn-icons-png.flaticon.com/128/584/584067.png" alt="Wallet free icon" title="Wallet free icon" width="64" height="64" class="lzy lazyload--done" srcset="https://cdn-icons-png.flaticon.com/128/584/584067.png 4x">
                            </div>
                        </div>
                        <div class="lower-box">
                            <h6><a href="#">Fund Wallet</a></h6>
                            <div class="text">To purchase or buy asset, you must fund your wallet.</div>
                            <a class="contact" href="{{ route('deposit.logs') }}">Deposit <span class="arrow fa fa-angle-right"></span></a>
                        </div>
                    </div>
                </div>

                <!-- Services Block Nine -->
                <div class="services-block-nine col-lg-3 col-md-6 col-sm-12">
                    <div class="inner-box wow fadeInUp animated" data-wow-delay="600ms" data-wow-duration="1500ms" style="visibility: visible; animation-duration: 1500ms; animation-delay: 600ms; animation-name: fadeInUp;">
                        <div class="icon-outer">
                            <div class="service-number">3</div>
                            <div class="icon-box">
                                <span class="icon flaticon-target"></span>
                            </div>
                        </div>
                        <div class="lower-box">
                            <h6><a href="#">Place your investment</a></h6>
                            <div class="text">in other to start earning, you must purchase a package and start earning weekly.</div>
                            <a class="contact" href="{{ route('investment.logs') }}">Invest Now <span class="arrow fa fa-angle-right"></span></a>
                        </div>
                    </div>
                </div>

                <!-- Services Block Nine -->
                <div class="services-block-nine col-lg-3 col-md-6 col-sm-12">
                    <div class="inner-box wow fadeInUp animated" data-wow-delay="900ms" data-wow-duration="1500ms" style="visibility: visible; animation-duration: 1500ms; animation-delay: 900ms; animation-name: fadeInUp;">
                        <div class="icon-outer">
                            <div class="service-number">4</div>
                            <div class="icon-box">
                                <span class="icon flaticon-banknote"></span>
                            </div>
                        </div>
{{--Github Comment Appending--}}
                        <div class="lower-box">
                            <h6><a href="#">Cash your profits</a></h6>
                            <div class="text">You are entitle to cash your profit once your wallet is sufficient.</div>
                            <a class="contact" href="{{ route('withdraw.logs') }}">Withdraw <span class="arrow fa fa-angle-right"></span></a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>
<!-- Gallery Section -->
<section class="gallery-section">
    <div class="outer-container">
        <div class="gallery-carousel owl-carousel owl-theme">

            <!--Gallery Block-->
            <div class="gallery-block">
                <div class="inner-box">
                    <div class="image">
                        <img src="{{ asset('front/images/gallery/1.jpg') }}" alt="" />
                        <div class="overlay-box">
                            <div class="overlay-inner">
                                <h3><a href="#l">Protected by insurance</a></h3>
                                <div class="text">Cryptocurrency stored on our servers is covered by our insurance policy. </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!--Gallery Block-->
            <div class="gallery-block">
                <div class="inner-box">
                    <div class="image">
                        <img src="{{ asset('front/images/gallery/31.jpg') }}" alt="" />
                        <div class="overlay-box">
                            <div class="overlay-inner">
                                <h3><a href="#">Branch Advisor</a></h3>
                                <div class="text">{{ env("APP_NAME") }} supports a variety of the most popular digital currencies.</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!--Gallery Block-->
            <div class="gallery-block">
                <div class="inner-box">
                    <div class="image">
                        <img src="{{ asset('front/images/gallery/32.jpg') }}" alt="" />
                        <div class="overlay-box">
                            <div class="overlay-inner">
                                <h3><a href="#">Secure Storage Facility</a></h3>
                                <div class="text">We store the vast majority of the digital assets in secure offline storage. </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>
<!-- End Gallery Section -->

<!-- Testimonial Section -->
<section class="testimonial-section padding-top">
    <div class="auto-container">
        <div class="single-item-carousel owl-carousel owl-theme">

            <!-- Testimonial Block -->
            <div class="testimonial-block">
                <div class="inner-box">
                    <div class="quote-icon">
                        <span class="icon flaticon-right-quote-sign"></span>
                    </div>
                    <div class="text">Bitcoin is one of the most important inventions in all of human history. For the first time ever, anyone can send or receive any amount of money with anyone else, anywhere on the planet, conveniently and without restriction. It’s the dawn of a better, more free world. </div>
                    <h3>Robert Froast</h3>
                    <div class="author">Chief Executive Officer</div>
                </div>
            </div>

        </div>
    </div>
</section>
<!-- End Testimonial Section -->

<!-- Services Section Two-->
<section class="services-section-two">
    <div class="auto-container">
        <!-- Sec Title -->
        <div class="sec-title centered">
            <div class="title">services</div>
            <h2>Most prominent side is <br> our devoted <span>services</span></h2>
            <div class="text">Our Services is strategically diversified to mitigate risks of overly streamlined trading.
                {{env('APP_NAME')}} offers extensive cryptocurrency basics which could help just about anyone who wishes to learn more about cryptocurrency and the blockchain network. Our sole aim is to enrich our investors by utilizing trading bots and best paid accurate signals based on technical and fundamental analysis to develop accurate trading pairs which rewards short term..</div>
        </div>

        <div class="row clearfix">

            <!-- Services Block Two -->
            <div class="services-block-two col-lg-6 col-md-6 col-sm-12">
                <div class="inner-box wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">
                    <div class="image">
                        <img src="{{ asset('front/images/background/20.jpg') }}" alt="" />
                        <div class="overlay-box">
                            <div class="overlay-inner">
                                <div class="icon-box">
                                    <span class="icon flaticon-target"></span>
                                </div>
                                <h5><a href="#">Real Estate Management <br> and Consulting</a></h5>
                            </div>
                        </div>
                        <div class="overlay-box-two">
                            <div class="overlay-inner-two">
                                <div class="content">
                                    <div class="icon-box">
                                        <span class="icon flaticon-target"></span>
                                    </div>
                                    <div class="text">This translates into a deep commitment to working closely with innovation partners and incorporating Open Innovation processes into our work culture</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Services Block Two -->
            <div class="services-block-two col-lg-6 col-md-6 col-sm-12">
                <div class="inner-box wow fadeInUp" data-wow-delay="300ms" data-wow-duration="1500ms">
                    <div class="image">
                        <img src="{{ asset('front/images/background/slider_bitcoin_01 2.png') }}" alt="" />
                        <div class="overlay-box">
                            <div class="overlay-inner">
                                <div class="icon-box">
                                    <span class="icon flaticon-statistics"></span>
                                </div>
                                <h5><a href="#">Cryptocurrency <br> and Trades</a></h5>
                            </div>
                        </div>
                        <div class="overlay-box-two">
                            <div class="overlay-inner-two">
                                <div class="content">
                                    <div class="icon-box">
                                        <span class="icon flaticon-statistics"></span>
                                    </div>
                                    <div class="text">Cryptocurrency trading is defined as buying and selling cryptocurrencies. It is very similar to Forex trading and stock market trading. Trading can be done in futures, options and cash. It bears some similarities to foreign exchange (forex), where fiat currencies from across the globe are traded 24 hours a day</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Services Block Two -->

        </div>

    </div>
</section>
<!-- End Services Section Two-->

<!-- Case Section -->
<hr>


<!-- Call To Action -->
{{--<section class="call-to-action" style="background-image:url({{ asset('front/images/background/3.jpg') }})">--}}
{{--    <div class="auto-container">--}}
{{--        <h2>Have a great opportunity to <br> manage your <span>finance</span></h2>--}}
{{--        <div class="btns-box">--}}
{{--            <a href="#"><img src="{{asset('front/images/icons/app-btn.png')}}" alt="" /></a>--}}
{{--            <a href="#"><img src="{{asset('front/images/icons/google-btn.png')}}" alt="" /></a>--}}
{{--        </div>--}}
{{--        <div class="image wow jello" data-wow-delay="0ms" data-wow-duration="1500ms">--}}
{{--            <img src="{{asset('front/images/resource/app-mobile.png')}}" alt="" />--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</section>--}}
<!-- End Call To Action -->

<!--Sponsors Section-->

<!-- News Section -->
{{--<section class="news-section">--}}
{{--    <div class="auto-container">--}}
{{--        <!-- Sec Title -->--}}
{{--        <div class="sec-title centered">--}}
{{--            <div class="title">Latest blog</div>--}}
{{--            <h2>Learn some new info from <br> our latest <span>news</span></h2>--}}
{{--            <div class="text">The argument in favor of using filler text goes something like this: If you use real content in the design process, anytime you <br> reach a review point you’ll end up reviewing and negotiating the content itself and not the design.</div>--}}
{{--        </div>--}}

{{--        <div class="clearfix">--}}

{{--            <!-- News Block -->--}}
{{--            <div class="news-block col-lg-4 col-md-6 col-sm-12">--}}
{{--                <div class="inner-box wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">--}}
{{--                    <div class="image">--}}
{{--                        <img src="{{asset('front/images/resource/news-1.jpg')}}" alt="" />--}}
{{--                        <div class="overlay-box">--}}
{{--                            <a href="{{asset('front/images/resource/news-1.jpg')}}" data-fancybox="news" data-caption="" class="plus flaticon-plus-symbol"></a>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="lower-content">--}}
{{--                        <div class="post-date">September 12, 2019</div>--}}
{{--                        <h5><a href="blog-single.html">Strategy for Norway's Pesion Fund Global.</a></h5>--}}
{{--                        <div class="text">This case study helps students need to understand the process of setting report ting evaluating financial performance.</div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}

{{--            <!-- News Block -->--}}
{{--            <div class="news-block col-lg-4 col-md-6 col-sm-12">--}}
{{--                <div class="inner-box wow fadeInUp" data-wow-delay="300ms" data-wow-duration="1500ms">--}}
{{--                    <div class="image">--}}
{{--                        <img src="{{asset('front/images/resource/news-2.jpg')}}" alt="" />--}}
{{--                        <div class="overlay-box">--}}
{{--                            <a href="{{asset('front/images/resource/news-2.jpg')}}" data-fancybox="news" data-caption="" class="plus flaticon-plus-symbol"></a>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="lower-content">--}}
{{--                        <div class="post-date">January 12, 2019</div>--}}
{{--                        <h5><a href="blog-single.html">What we are capable of the usually gets discovered.</a></h5>--}}
{{--                        <div class="text">This case study helps students need to understand the process of setting report ting evaluating financial performance.</div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}

{{--            <!-- News Block -->--}}
{{--            <div class="news-block col-lg-4 col-md-12 col-sm-12">--}}
{{--                <div class="inner-box wow fadeInUp" data-wow-delay="600ms" data-wow-duration="1500ms">--}}
{{--                    <div class="image">--}}
{{--                        <img src="{{asset('front/images/resource/news-3.jpg')}}" alt="" />--}}
{{--                        <div class="overlay-box">--}}
{{--                            <a href="{{asset('front/images/resource/news-3.jpg')}}" data-fancybox="news" data-caption="" class="plus flaticon-plus-symbol"></a>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="lower-content">--}}
{{--                        <div class="post-date">September 15, 2019</div>--}}
{{--                        <h5><a href="blog-single.html">Food industry leaders often change their promoters.</a></h5>--}}
{{--                        <div class="text">This case study helps students need to understand the process of setting report ting evaluating financial performance.</div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}

{{--        </div>--}}

{{--        <!-- Button Box -->--}}
{{--        <div class="btn-box text-center">--}}
{{--            <a href="contact.html" class="theme-btn btn-style-one">View more <span class="icon flaticon-eye"></span></a>--}}
{{--        </div>--}}

{{--    </div>--}}
{{--</section>--}}
<!-- End News Section -->

<!--Map Info Section-->

   @endsection

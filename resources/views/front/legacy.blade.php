@extends('layouts.front')
@section('title', 'Our Legacy')

@section('content')


<section class="page-title" style="background-image:url({{ asset('front/images/background/legal-banner.jpg') }})">
    <div class="auto-container">
        <div class="content">
            <h1>Our Legacy <br><span>Certificate</span></h1>
            <ul class="page-breadcrumb">
                <li><a href="{{ route('front.index') }}">Home</a></li>
                <li>Certificate</li>
            </ul>
        </div>
    </div>
</section>
<!--End Page Title-->

<!-- Blog Grid Section -->

<section class="blog-list-section">
    <div class="auto-container">
        <!-- Sec Title -->
        <div class="sec-title centered">
            <h2>Our Satisfied <br> & Documented <span>Certificate</span></h2>
        </div>
        <div class="row clearfix">

            <!-- News Block Four -->
            <div class="news-block-four col-lg-4 col-md-6 col-sm-12">
                <div class="inner-box">
                    <div class="image">
{{--                        <img src="{{ asset('front/images/resource/news-4.jpg') }}" alt="" />--}}
                        <img src="https://amarexcoin.com/front/images/backgrounds/legal.jpg" alt="" />
                        <div class="overlay-box">
                            <a href="https://amarexcoin.com/front/images/backgrounds/legal.jpg" data-fancybox="news" data-caption="" class="plus flaticon-plus-symbol"></a>
                        </div>
                    </div>
                    <div class="lower-content">
                        <ul class="post-meta">
                            <li><span class="fa fa-calendar"></span>9<sup>th</sup> October, 2018</li>
                        </ul>
                        <h5><a href="#">Certificate of Incorporation </a></h5>

                    </div>
                </div>
            </div>

            <!-- News Block Four -->
            <div class="news-block-four col-lg-4 col-md-6 col-sm-12">
                <div class="inner-box">
                    <div class="image">
                        <img src="https://amarexcoin.com/front/images/backgrounds/legal2.jpg" alt="" />
                        <div class="overlay-box">
                            <a href="https://amarexcoin.com/front/images/backgrounds/legal2.jpg" data-fancybox="news" data-caption="" class="plus flaticon-plus-symbol"></a>
                        </div>
                    </div>
                    <div class="lower-content">
                        <ul class="post-meta">
                            <li><span class="fa fa-calendar"></span>17<sup>th</sup> December 2018</li>
                        </ul>
                        <h5><a href="#">Certificate of Incorporation of a Private Ltd Company..</a></h5>

                    </div>
                </div>
            </div>

            <!-- News Block Four -->
            <div class="news-block-four col-lg-4 col-md-6 col-sm-12">
                <div class="inner-box">
                    <div class="image">
                        <img src="https://amarexcoin.com/front/images/backgrounds/legal3.jpg" alt="" />
                        <div class="overlay-box">
                            <a href="https://amarexcoin.com/front/images/backgrounds/legal3.jpg" data-fancybox="news" data-caption="" class="plus flaticon-plus-symbol"></a>
                        </div>
                    </div>
                    <div class="lower-content">
                        <ul class="post-meta">
                            <li><span class="fa fa-calendar"></span>1<sup>st</sup> February, 2019</li>
                        </ul>
                        <h5><a href="blog-single.html">Certificate of Confirming Incorporation of Company</a></h5>

                    </div>
                </div>
            </div>

            <!-- News Block Four -->
            <div class="news-block-four col-lg-4 col-md-6 col-sm-12">
                <div class="inner-box">
                    <div class="image">
                        <img src="https://amarexcoin.com/front/images/backgrounds/legal4.jpg" alt="" />
                        <div class="overlay-box">
                            <a href="https://amarexcoin.com/front/images/backgrounds/legal4.jpg" data-fancybox="news" data-caption="" class="plus flaticon-plus-symbol"></a>
                        </div>
                    </div>
                    <div class="lower-content">
                        <ul class="post-meta">
                            <li><span class="fa fa-calendar"></span>1<sup>st</sup> February, 2018</li>
                        </ul>
                        <h5><a href="#">Cryptocurrency Certificate Consortium.</a></h5>

                    </div>
                </div>
            </div>

            <!-- News Block Four -->
            <div class="news-block-four col-lg-4 col-md-6 col-sm-12">
                <div class="inner-box">
                    <div class="image">
                        <img src="https://amarexcoin.com/front/images/backgrounds/legal5.jpg" alt="" />
                        <div class="overlay-box">
                            <a href="https://amarexcoin.com/front/images/backgrounds/legal5.jpg" data-fancybox="news" data-caption="" class="plus flaticon-plus-symbol"></a>
                        </div>
                    </div>
                    <div class="lower-content">
                        <ul class="post-meta">
                            <li><span class="fa fa-calendar"></span>21<sup>st</sup> September, 2019</li>
                        </ul>
                        <h5><a href="#">Authorization Certificate.</a></h5>

                    </div>
                </div>
            </div>

            <!-- News Block Four -->
            <div class="news-block-four col-lg-4 col-md-6 col-sm-12">
                <div class="inner-box">
                    <div class="image">
                        <img src="https://amarexcoin.com/front/images/backgrounds/legal6.jpg" alt="" />
                        <div class="overlay-box">
                            <a href="https://amarexcoin.com/front/images/backgrounds/legal6.jpg" data-fancybox="news" data-caption="" class="plus flaticon-plus-symbol"></a>
                        </div>
                    </div>
                    <div class="lower-content">
                        <ul class="post-meta">
                            <li><span class="fa fa-calendar"></span>17<sup>th</sup> January, 2016</li>
                        </ul>
                        <h5><a href="#">Department of Financial Service.</a></h5>

                    </div>
                </div>
            </div>

        </div>

    </div>
</section>
<!-- End Blog List Section -->

<!-- Call To Action Two -->
<section class="call-to-action-two">
    <div class="auto-container">
        <div class="clearfix">

            <div class="pull-left">
                <h2>Dial <span>us</span></h2>
            </div>
            <div class="pull-right">
                <a href="#" class="theme-btn btn-style-five">Request now <span class="icon fa fa-arrow-right"></span></a>
            </div>

        </div>
    </div>
</section>
<!-- End Call To Action Two -->

@endsection

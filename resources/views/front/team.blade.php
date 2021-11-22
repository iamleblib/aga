@extends('layouts.front')
@section('title', 'Our Team')

@section('content')

    <section class="page-title" style="background-image:url({{ asset('front/images/background/team.jpeg') }})">
        <div class="auto-container">
            <div class="content">
                <h1>Team <span>Member</span></h1>
                <ul class="page-breadcrumb">
                    <li><a href="{{ route('front.index') }}">Home</a></li>
                    <li>Expert Team</li>
                </ul>
            </div>
        </div>
    </section>
    <!--End Page Title-->

    <!-- Team Page Section -->
    <section class="team-page-section">
        <div class="auto-container">
            <!-- Sec Title -->
            <div class="sec-title centered">
                <div class="title">about us</div>
                <h2>Team Management <br> And <span>Executives</span></h2>
                <p>We make it possible for individuals, groups, families, companies, etc. who may not be professionals in the fields to meaningfully engage and benefit from financial and stock markets, and experts-managed trading and trades portfolios. Our trading and trades experts ensure not only that your funds are at work, but are put in carefully planned and strategically diversified trading and trade portfolios. We ensure transparent returns, with favourable management fee.
                </p>
            </div>

            <div class="row clearfix">

                <!--Team Block-->
                <div class="team-block-two style-two col-lg-4 col-md-6 col-sm-12">
                    <div class="inner-box wow fadeIn" data-wow-delay="0ms" data-wow-duration="1500ms">
                        <div class="image">
                            <a href="#"><img src="{{ asset('front/images/resource/ceo.jpg') }}" alt="" title=""></a>
                            <ul class="social-box">
                            </ul>
                        </div>
                        <div class="lower-content">
                            <h5><a href="#">Robert Froast</a></h5>
                            <div class="designation">Chief Executive Officer</div>
                        </div>
                    </div>
                </div>

                <!--Team Block-->
                <div class="team-block-two style-two col-lg-4 col-md-6 col-sm-12">
                    <div class="inner-box wow fadeIn" data-wow-delay="0ms" data-wow-duration="1500ms">
                        <div class="image">
                            <a href="#"><img src="{{ asset('front/images/resource/manager.jpg') }}" alt="" title=""></a>
                            <ul class="social-box">
                                <li><a href="#" class="fa fa-facebook"></a></li>
                                <li><a href="#" class="fa fa-twitter"></a></li>
                                <li><a href="#" class="fa fa-linkedin"></a></li>
                                <li><a href="#" class="fa fa-google-plus"></a></li>
                            </ul>
                        </div>
                        <div class="lower-content">
                            <h5><a href="#">Michael Talker</a></h5>
                            <div class="designation">Manager</div>
                        </div>
                    </div>
                </div>

                <!--Team Block-->
                <div class="team-block-two style-two col-lg-4 col-md-12 col-sm-12">
                    <div class="inner-box wow fadeIn" data-wow-delay="0ms" data-wow-duration="1500ms">
                        <div class="image">
                            <a href="#"><img src="{{ asset('front/images/resource/cordinator.jpg') }}" alt="" title=""></a>
                            <ul class="social-box">
                                <li><a href="#" class="fa fa-facebook"></a></li>
                                <li><a href="#" class="fa fa-twitter"></a></li>
                                <li><a href="#" class="fa fa-linkedin"></a></li>
                                <li><a href="#" class="fa fa-google-plus"></a></li>
                            </ul>
                        </div>
                        <div class="lower-content">
                            <h5><a href="#">Ephrem O’Brien</a></h5>
                            <div class="designation">Coordinator</div>
                        </div>
                    </div>
                </div>

                <!--Team Block-->
                <div class="team-block-two style-two col-lg-4 col-md-6 col-sm-12">
                    <div class="inner-box wow fadeIn" data-wow-delay="0ms" data-wow-duration="1500ms">
                        <div class="image">
                            <a href="#"><img src="{{ asset('front/images/resource/marketer.jpg') }}" alt="" title=""></a>
                            <ul class="social-box">
                                <li><a href="#" class="fa fa-facebook"></a></li>
                                <li><a href="#" class="fa fa-twitter"></a></li>
                                <li><a href="#" class="fa fa-linkedin"></a></li>
                                <li><a href="#" class="fa fa-google-plus"></a></li>
                            </ul>
                        </div>
                        <div class="lower-content">
                            <h5><a href="#">Faith Iron</a></h5>
                            <div class="designation">Marketer</div>
                        </div>
                    </div>
                </div>

                <!--Team Block-->
                <div class="team-block-two style-two col-lg-4 col-md-6 col-sm-12">
                    <div class="inner-box wow fadeIn" data-wow-delay="0ms" data-wow-duration="1500ms">
                        <div class="image">
                            <a href="#"><img src="{{ asset('front/images/resource/hr.jpg') }}" alt="" title=""></a>
                            <ul class="social-box">
                                <li><a href="#" class="fa fa-facebook"></a></li>
                                <li><a href="#" class="fa fa-twitter"></a></li>
                                <li><a href="#" class="fa fa-linkedin"></a></li>
                                <li><a href="#" class="fa fa-google-plus"></a></li>
                            </ul>
                        </div>
                        <div class="lower-content">
                            <h5><a href="#">Joe Hurt</a></h5>
                            <div class="designation">HR & Support</div>
                        </div>
                    </div>
                </div>

                <!--Team Block-->
                <div class="team-block-two style-two col-lg-4 col-md-6 col-sm-12">
                    <div class="inner-box wow fadeIn" data-wow-delay="0ms" data-wow-duration="1500ms">
                        <div class="image">
                            <a href="#"><img src="{{ asset('front/images/resource/financial.jpg') }}" alt="" title=""></a>
                            <ul class="social-box">
                                <li><a href="#" class="fa fa-facebook"></a></li>
                                <li><a href="#" class="fa fa-twitter"></a></li>
                                <li><a href="#" class="fa fa-linkedin"></a></li>
                                <li><a href="#" class="fa fa-google-plus"></a></li>
                            </ul>
                        </div>
                        <div class="lower-content">
                            <h5><a href="#">Maria Della</a></h5>
                            <div class="designation">Financial Analyst</div>
                        </div>
                    </div>
                </div>

                <!--Team Block-->

            </div>

        </div>
    </section>
    <!-- End Team Page Section -->
@endsection

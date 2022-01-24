@extends('layouts.front')
@section('title', 'Terms and Condition')
@section('content')

    <section class="page-title" style="background-image:url({{ asset('front/images/background/terms.jpeg') }})">
        <div class="auto-container">
            <div class="content">
                <h1>Contact <span>Us</span></h1>
                <ul class="page-breadcrumb">
                    <li><a href="{{ route('front.index') }}">Home</a></li>
                    <li>Terms</li>
                </ul>
            </div>
        </div>
    </section>

    <section class="contact-page-section">
        <div class="auto-container">
            <div class="inner-container">
                <div id="faq_wrapper" class="wrapper faq_wrapper" style="background-image: url('{{ asset('front/img/faqs_breadcrumb_wrapper_content.png')}}')">
                    <h2>Contact our support Agent or book appointment <br> with <span>our consultant</span></h2>
                    <div class="row clearfix">

                        <!-- Info Column -->
                        <div class="info-column col-lg-7 col-md-12 col-sm-12">
                            <div class="inner-column">
                                <div class="text">Please contact us using the information below. For additional information on our management consulting services, please visit the appropriate page on our site.</div>
                                <ul class="list-style-five">
                                    <li><span class="icon fa fa-building"></span> England Cres,
                                         <br> Leamington Spa, <br> United Kingdom</li>
                                    <li><span class="icon fa fa-fax"></span> +1 401 572 4423</li>
                                    <li><span class="icon fa fa-envelope-o"></span>{{ env('MAIL_FROM_ADDRESS') }}</li>
                                </ul>
                            </div>
                        </div>

                        <!-- Form Column -->
                        <div class="form-column col-lg-5 col-md-12 col-sm-12">
                            <div class="inner-column">

                                <!--Contact Form-->
                                <div class="contact-form">
                                    <form method="post" action="">

                                        <div class="form-group">
                                            <input type="text" name="firstname" value="" placeholder="Full name" required>
                                        </div>

                                        <div class="form-group">
                                            <input type="text" name="email" value="" placeholder="Email" required>
                                        </div>

                                        <div class="form-group">
                                            <select class="custom-select-box">
                                                <option disabled selected>Select topic</option>
                                                <option>Enquires</option>
                                                <option>Adjustment</option>
                                                <option>Others</option>
                                            </select>
                                        </div>

                                        <div class="form-group">
                                            <textarea name="message" required placeholder="write.."></textarea>
                                        </div>

                                        <div class="form-group">
                                            <button disabled type="botton" class="theme-btn">Submit</button>
                                        </div>

                                    </form>
                                </div>

                            </div>
                        </div>

                    </div>
                </div>
            </div>
    </section>
    <!-- End Team Page Section -->

    <!-- Contact Info Section -->
    <section class="contact-info-section" style="background-image:url({{ asset('front/images/background/10.jpg') }})">
        <div class="auto-container">
            <div class="row clearfix">

            </div>
        </div>
    </section>

    <div class="p-4"></div>


@endsection

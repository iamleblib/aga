@extends('layouts.auth')
<!--End Page Title-->
<link rel="canonical" href="https://preview.keenthemes.com/metronic8" />
<!--begin::Fonts-->
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" />
<!--end::Fonts-->
<!--begin::Global Stylesheets Bundle(used by all pages)-->
<link href="{{ asset('backend/assets/plugins/global/plugins.bundle.css') }}" rel="stylesheet" type="text/css" />
<link href="{{ asset('backend/assets/css/style.bundle.css') }}" rel="stylesheet" type="text/css" />
<!--end::Global Stylesheets Bundle-->
<!--Begin::Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start': new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0], j=d.createElement(s),dl=l!='dataLayer'?'&amp;l='+l:'';j.async=true;j.src= 'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f); })(window,document,'script','dataLayer','GTM-5FS8GGP');</script>
<!--End::Google Tag Manager -->

    <section class="page-title" style="background-image:url({{ asset('front/images/background/verified.jpeg') }})">
        <div class="auto-container">
            <div class="content">
                <h1> <span>verify Email</span></h1>
                <ul class="page-breadcrumb">
                    <li><a href="{{ route('front.index') }}">Home</a></li>
                    <li>verify your email address</li>
                </ul>
            </div>
        </div>
    </section>

<body id="kt_body" class="bg-body">

<div class="d-flex flex-column flex-root">
    <div class="d-flex flex-column flex-column-fluid bgi-position-y-bottom position-x-center bgi-no-repeat bgi-size-contain bgi-attachment-fixed" style="background-image: url({{ asset('backend/metronic8/demo2/assets/media/illustrations/sigma-1/14.png') }}">
        <!--begin::Content-->
        <div class="d-flex flex-center flex-column flex-column-fluid p-10 pb-lg-20">
            <!--begin::Logo-->

            <!--end::Logo-->
            <!--begin::Wrapper-->
            <div class="w-lg-500px bg-body rounded shadow-sm p-10 p-lg-15 mx-auto" id="kt_sign_in_form">
                <form class="form w-100" method="POST" action="{{ route('verification.resend') }}">
                    @csrf
                    <div class="mb-10 text-center">
                        <!--begin::Logo-->
                        <h1 class="fw-bolder fs-2qx text-gray-800 mb-7">Verify Your Email</h1>
                        <a href="{{ route('front.index') }}" class="mb-12">
                            <img alt="Logo" src="{{ asset('front/images/logo.png') }}" class="h-40px" />
                        </a>
                        <!--end::Logo-->
                        <!--begin::Message-->
                        <div class="inset text-light">
                            <p @class('text-light')>
                            @if (session('resent'))
                                <div class="alert alert-success" role="alert">
                                    {{ __('A fresh verification link has been sent to your email address.') }}
                                </div>
                                @endif
                                </p>
                        </div>
                        <div class="fs-3 fw-bold text-muted mb-10">We have sent an email to
                            <a href="#" class="link-primary fw-bolder">{{ auth()->user()->email }}</a>
                            <br>Please follow a link to verify your email.</div>
                        <span class="fs-3 fw-bold text-muted mb-10">{{ __('Before proceeding, please check your email for a verification link.') }}
                            {{ __('If you did not receive the email') }}.</span>
                        <br>
                        <br>
                        <!--end::Message-->
                        <!--begin::Action-->
                        <div class="text-center mb-10">
                            <a href="{{ route('front.index') }}" class="btn btn-lg btn-primary fw-bolder">Skip for now</a>
                        </div>

                        <!--end::Action-->
                        <!--begin::Action-->
                        <div class="fs-5">
                            <span class="fw-bold text-gray-700">Did’t receive an email?</span>
                            <button type="submit" class="btn link-primary fw-bolder">Resend</button>
                        </div>
                </form>
                <!--end::Action-->
            </div>
            <!--end::Wrapper-->
        </div>
    </div>

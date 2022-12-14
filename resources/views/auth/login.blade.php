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

    <section class="page-title" style="background-image:url({{ asset('front/images/background/authentication.jpeg') }})">
        <div class="auto-container">
            <div class="content">
                <h1> <span>Login</span></h1>
                <ul class="page-breadcrumb">
                    <li><a href="{{ route('front.index') }}">Home</a></li>
                    <li>Sign in</li>
                </ul>
            </div>
        </div>
    </section>

    <body id="kt_body" class="bg-body">
    <!--begin::Main-->
        <div class="d-flex flex-column flex-root">
        <!--begin::Authentication - Sign-in -->
        <div class="d-flex flex-column flex-column-fluid bgi-position-y-bottom position-x-center bgi-no-repeat bgi-size-contain bgi-attachment-fixed" style="background-image: url(/metronic8/demo2/assets/media/illustrations/sigma-1/14.png">
            <!--begin::Content-->
            <div class="d-flex flex-center flex-column flex-column-fluid p-10 pb-lg-20">
                <!--begin::Logo-->

                <!--end::Logo-->
                <!--begin::Wrapper-->
                <div class="w-lg-500px bg-body rounded shadow-sm p-10 p-lg-15 mx-auto" id="kt_sign_in_form">
                    <!--begin::Form-->
                    <form class="form w-100" novalidate="novalidate"  method="POST" action="{{ route('login') }}" autocomplete="off">
                    @csrf
                        <!--begin::Heading-->
                        <div class="text-center mb-10">
                            <!--begin::Title-->
                            <a href="{{ route('front.index') }}" class="mb-12">
                                <img alt="Logo" src="{{ asset('front/images/logo.png') }}" class="h-40px" />
                            </a>
                            <h1 class="text-dark mb-3">Sign In </h1>
                            <!--end::Title-->
                            <!--begin::Link-->
                            <div class="text-gray-400 fw-bold fs-4">New Here?
                                <a href="{{ route('register') }}" class="link-primary fw-bolder">Create an Account</a>
                            </div>
                            <!--end::Link-->
                        </div>
                        <!--begin::Heading-->
                        <!--begin::Input group-->
                        <div class="fv-row mb-10">
                            <!--begin::Label-->
                            <label class="form-label fs-6 fw-bolder text-dark">Email</label>
                            <!--end::Label-->
                            <!--begin::Input-->
                            <input class="form-control form-control-lg form-control-solid @error('email') is-invalid @enderror" type="email" id="email-id" oninput="checker()" name="email" value="{{ old('email') }}" autocomplete="off" />
                            <!--end::Input-->
                            @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <!--end::Input group-->
                        <!--begin::Input group-->
                        <div class="fv-row mb-10">
                            <!--begin::Wrapper-->
                            <div class="d-flex flex-stack mb-2">
                                <!--begin::Label-->
                                <label class="form-label fw-bolder text-dark fs-6 mb-0">Password</label>
                                <!--end::Label-->
                                <!--begin::Link-->
                                <a href="{{ route('password.request') }}" class="link-primary fs-6 fw-bolder">Forgot Password ?</a>
                                <!--end::Link-->
                            </div>
                            <!--end::Wrapper-->
                            <!--begin::Input-->
                            <input class="form-control form-control-lg form-control-solid  @error('password') is-invalid @enderror" type="password" name="password" id="password" autocomplete="current-password" />
                            <!--end::Input-->
                            @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <!--end::Input group-->
                        <!--begin::Actions-->
                        <div class="text-center">
                            <!--begin::Submit button-->
                            <button type="submit" id="" class="btn btn-lg btn-primary w-100 mb-5">
                                <span class="indicator-label">Continue <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-check2-square" viewBox="0 0 16 16">
                                      <path d="M3 14.5A1.5 1.5 0 0 1 1.5 13V3A1.5 1.5 0 0 1 3 1.5h8a.5.5 0 0 1 0 1H3a.5.5 0 0 0-.5.5v10a.5.5 0 0 0 .5.5h10a.5.5 0 0 0 .5-.5V8a.5.5 0 0 1 1 0v5a1.5 1.5 0 0 1-1.5 1.5H3z"/>
                                      <path d="m8.354 10.354 7-7a.5.5 0 0 0-.708-.708L8 9.293 5.354 6.646a.5.5 0 1 0-.708.708l3 3a.5.5 0 0 0 .708 0z"/>
                                    </svg></span>
                                <span class="indicator-progress">Please wait...
									<span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                            </button>

                        </div>
                    </form>

                            <!--end::Submit button-->
                            <!--begin::Separator-->
{{--                            <div class="text-center text-muted text-uppercase fw-bolder mb-5">or</div>--}}
{{--                            <!--end::Separator-->--}}
{{--                            <!--begin::Google link-->--}}
{{--                            <a href="#" class="btn btn-flex flex-center btn-light btn-lg w-100 mb-5">--}}
{{--                                <img alt="Logo" src="{{ asset('backend/assets/media/svg/brand-logos/google-icon.svg') }}" class="h-20px me-3" />Continue with Google</a>--}}
{{--                            <!--end::Google link-->--}}
{{--                            <!--begin::Google link-->--}}
{{--                            <a href="#" class="btn btn-flex flex-center btn-light btn-lg w-100 mb-5">--}}
{{--                                <img alt="Logo" src="{{ asset('backend/assets/media/svg/brand-logos/facebook-4.svg') }}" class="h-20px me-3" />Continue with Facebook</a>--}}
{{--                            <!--end::Google link-->--}}
{{--                            <!--begin::Google link-->--}}
{{--                            <a href="#" class="btn btn-flex flex-center btn-light btn-lg w-100">--}}
{{--                                <img alt="Logo" src="{{ asset('backend/assets/media/svg/brand-logos/apple-black.svg') }}" class="h-20px me-3" />Continue with Apple</a>--}}
{{--                            <!--end::Google link-->--}}
                    <!--end::Form-->
                </div>
                <!--end::Wrapper-->
            </div>
            <!--end::Content-->
            <script>var hostUrl = "{{ asset('backend/assets/index.html') }}";</script>
            <!--begin::Javascript-->
            <!--begin::Global Javascript Bundle(used by all pages)-->
            <script src="{{ asset('backend/assets/plugins/global/plugins.bundle.js') }}"></script>
            <script src="{{ asset('backend/assets/js/scripts.bundle.js') }}"></script>
            <!--end::Global Javascript Bundle-->
            <!--begin::Page Custom Javascript(used by this page)-->
            <script src="{{ asset('backend/assets/js/custom/authentication/sign-in/general.js') }}"></script>
            <!--end::Page Custom Javascript-->
            <!--end::Javascript-->
            <!--Begin::Google Tag Manager (noscript) -->
            <noscript>
                <iframe src="https://www.googletagmanager.com/ns.html?id=GTM-5FS8GGP" height="0" width="0" style="display:none;visibility:hidden"></iframe>
            </noscript>

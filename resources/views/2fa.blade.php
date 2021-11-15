
<!DOCTYPE html>
<!--
Author: Keenthemes
Product Name: Metronic - Bootstrap 5 HTML, VueJS, React, Angular & Laravel Admin Dashboard Theme
Purchase: https://1.envato.market/EA4JP
Website: http://www.keenthemes.com
Contact: support@keenthemes.com
Follow: www.twitter.com/keenthemes
Dribbble: www.dribbble.com/keenthemes
Like: www.facebook.com/keenthemes
License: For each use you must have a valid license purchased only from above link in order to legally use the theme for your project.
-->
<html lang="en">
<!--begin::Head-->

<!-- Mirrored from preview.keenthemes.com/metronic8/demo2/authentication/flows/basic/two-steps.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 01 Nov 2021 01:48:31 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
    <title>{{ env('APP_NAME') }}</title>
    <meta charset="utf-8" />

    <meta property="og:locale" content="en_US" />
    <meta property="og:type" content="article" />
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
</head>
<!--end::Head-->
<!--begin::Body-->
<body id="kt_body" class="bg-body">
<!--begin::Main-->
<div class="d-flex flex-column flex-root">
    <!--begin::Authentication - Two-stes -->
    <div class="d-flex flex-column flex-column-fluid bgi-position-y-bottom position-x-center bgi-no-repeat bgi-size-contain bgi-attachment-fixed" style="background-image: url(/metronic8/demo2/assets/media/illustrations/sigma-1/14.png">
        <!--begin::Content-->
        <div class="d-flex flex-center flex-column flex-column-fluid p-10 pb-lg-20">
            <!--begin::Logo-->
            <a href="../../../index-2.html" class="mb-12">
                <img alt="Logo" src="{{ asset('backend/assets/media/logos/logo.png') }}" class="h-40px" />
            </a>
            <!--end::Logo-->
            <!--begin::Wrapper-->
            <div class="w-lg-600px bg-body rounded shadow-sm p-10 p-lg-15 mx-auto">
                <!--begin::Form-->
                <form method="POST" action="{{ route('2fa.post') }}">
                @csrf
                    <!--begin::Icon-->
                    <div class="text-center mb-10">
                        <img alt="Logo" class="mh-125px" src="{{ asset('backend/assets/media/svg/misc/smartphone.svg') }}" />
                    </div>
                    <!--end::Icon-->
                    <!--begin::Heading-->
                    <div class="text-center mb-10">
                        @if ($message = Session::get('success'))
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="alert alert-success alert-block">
                                        <strong>{{ $message }}</strong>
                                    </div>
                                </div>
                            </div>
                        @endif

                        @if ($message = Session::get('error'))
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="alert alert-danger alert-block">
                                        <strong>{{ $message }}</strong>
                                    </div>
                                </div>
                            </div>
                    @endif
                        <!--begin::Title-->
                        <h1 class="text-dark mb-3">Two Step Verification</h1>
                        <!--end::Title-->
                        <!--begin::Sub-title-->
                        <div class="text-muted fw-bold fs-5 mb-5">Enter the verification code we sent to</div>
                        <!--end::Sub-title-->
                        <!--begin::Mobile no-->
                        <div class="fw-bolder text-dark fs-3">{{ substr(auth()->user()->email, 0, 5) . '******' . substr(auth()->user()->email,  -2) }}</div>
                        <!--end::Mobile no-->
                    </div>
                    <!--end::Heading-->
                    <!--begin::Section-->
                    <div class="mb-10 px-md-10">
                        <!--begin::Label-->
                        <div class="fw-bolder text-start text-dark fs-6 mb-1 ms-1">Type your 6 digit security code</div>
                        <!--end::Label-->
                        <!--begin::Input group-->
                        <div class="d-flex flex-wrap flex-stack">
                            <input type="text" data-inputmask="'mask': '9', 'placeholder': ''" maxlength="1" name="code1" class="form-control form-control-solid h-60px w-60px fs-2qx text-center border-primary border-hover mx-1 my-2" />
                            <input type="text" data-inputmask="'mask': '9', 'placeholder': ''" maxlength="1" name="code2" class="form-control form-control-solid h-60px w-60px fs-2qx text-center border-primary border-hover mx-1 my-2" />
                            <input type="text" data-inputmask="'mask': '9', 'placeholder': ''" maxlength="1" name="code3" class="form-control form-control-solid h-60px w-60px fs-2qx text-center border-primary border-hover mx-1 my-2" />
                            <input type="text" data-inputmask="'mask': '9', 'placeholder': ''" maxlength="1" name="code4" class="form-control form-control-solid h-60px w-60px fs-2qx text-center border-primary border-hover mx-1 my-2" />
                            <input type="text" data-inputmask="'mask': '9', 'placeholder': ''" maxlength="1" name="code5" class="form-control form-control-solid h-60px w-60px fs-2qx text-center border-primary border-hover mx-1 my-2" />
                            <input type="text" data-inputmask="'mask': '9', 'placeholder': ''" maxlength="1" name="code6" class="form-control form-control-solid h-60px w-60px fs-2qx text-center border-primary border-hover mx-1 my-2" />
                        </div>
                        <!--begin::Input group-->
                    </div>
                    <!--end::Section-->
                    <!--begin::Submit-->
                    <div class="d-flex flex-center">
                        <button type="submit" id="" class="btn btn-lg btn-primary fw-bolder">
                            <span class="indicator-label">Submit</span>
                            <span class="indicator-progress">Please wait...
									<span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                        </button>
                    </div>
                </form>
                <!--end::Form-->
                <!--begin::Notice-->
                <div class="text-center fw-bold fs-5">
                    <span class="text-muted me-1">Didn’t get the code ?</span>
                    <a href="{{ route('2fa.resend') }}" class="link-primary fw-bolder fs-5 me-1">Resend</a>
                </div>
                <!--end::Notice-->
            </div>
            <!--end::Wrapper-->
        </div>
    </div>
    <!--end::Authentication - Two-stes-->
</div>
<!--end::Main-->
<script>var hostUrl = "{{ asset('backend/assets/index.html') }}";</script>
<!--begin::Javascript-->
<!--begin::Global Javascript Bundle(used by all pages)-->
<script src="{{ asset('backend/assets/plugins/global/plugins.bundle.js') }}"></script>
<script src="{{ asset('backend/assets/js/scripts.bundle.js') }}"></script>
<!--end::Global Javascript Bundle-->
<!--begin::Page Custom Javascript(used by this page)-->
<script src="{{ asset('backend/assets/js/custom/authentication/sign-in/two-steps.js') }}"></script>
<!--end::Page Custom Javascript-->
<!--end::Javascript-->
<!--Begin::Google Tag Manager (noscript) -->
<noscript>
    <iframe src="https://www.googletagmanager.com/ns.html?id=GTM-5FS8GGP" height="0" width="0" style="display:none;visibility:hidden"></iframe>
</noscript>
<!--End::Google Tag Manager (noscript) -->
</body>
<!--end::Body-->

<!-- Mirrored from preview.keenthemes.com/metronic8/demo2/authentication/flows/basic/two-steps.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 01 Nov 2021 01:48:33 GMT -->
</html>


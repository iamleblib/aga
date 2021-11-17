@extends('layouts.app')

@section('content')
    <div class="landing_wrapper breadcrumb_wrapper">

        <div class="wrapper breadcrumb_wrapper_content" style="background-image: url('https://eskipaper.com/images/3d-wallpaper-20.jpg'); background-size: cover">
            <div class="container h-100">
                <div class="row h-100 align-items-center text-center">
                    <div class="col">
                        <h2 class="breadcrumb_title">Verify Email Address</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="wrapper blog_page_wrapper" style="background-image: url('{{ asset('front/img/faqs_breadcrumb_wrapper_content.png')}}')">
        <div class="container">
            <div class="row">
                <div class="single_blog_item align-left">
                    <div class="blog_info">
                        <a class="blog_title text-dark" href="#">verify E-mail to Access your Dashboard</a>
                        <div style="margin: 10px; !important"></div>
                        <img class="" src="{{ asset('front/img/Wrapper_title_divider.png')}}" aria-colcount="" alt="">
                    </div>
                </div>
            </div>
        </div>

        <div class="wrapper fadeInDown">
            <form class="col-lg-12" style="width: 340px" method="POST" action="{{ route('verification.resend') }}">
                @csrf
                <h1 class="text-light">{{ __('Verify Your Email Address') }}</h1>
                <center><img src="{{ asset('front/img/logo.png')}}" width="200px" class="text-center" alt=""></center>
                        <div class="inset">
                            <p @class('text-light')>
                                @if (session('resent'))
                                    <div class="alert alert-success" role="alert">
                                        {{ __('A fresh verification link has been sent to your email address.') }}
                                    </div>
                                @endif
                                {{ __('Before proceeding, please check your email for a verification link.') }}
                                {{ __('If you did not receive the email') }},
                            </p>
                        </div>
                        <button type="submit" class="btn btn-dark btn_default btn btn-block">{{ __('click here to request another') }}</button>.
            </form>
        </div>
    </div>

    @include('partials.front.auth_scripts')
@endsection

@extends('layouts.app')

@section('content')
    <div class="landing_wrapper breadcrumb_wrapper">

        <div class="wrapper breadcrumb_wrapper_content" style="background-image: url('https://eskipaper.com/images/3d-wallpaper-20.jpg'); background-size: cover">
            <div class="container h-100">
                <div class="row h-100 align-items-center text-center">
                    <div class="col">
                        <h2 class="breadcrumb_title">{{ __('Reset Password') }}</h2>
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
                        <a class="blog_title text-dark" href="#">{{ __('Reset Password') }} to Access your Dashboard</a>
                        <div style="margin: 10px; !important"></div>
                        <img class="" src="{{ asset('front/img/Wrapper_title_divider.png')}}" aria-colcount="" alt="">
                    </div>
                </div>
            </div>
        </div>

        <p class="wrapper fadeInDown">
            <form class="wrapper fadeInDown" method="POST" action="{{ route('password.email') }}">
                @csrf
                <div class="col-lg-12" style="width: 340px">
                    <h1 class="text-light">{{ __('Enter Your Email Address to Reset Password') }}</h1>
                    <center>
                        <img src="{{ asset('front/img/logo.png')}}" width="100px" class="text-center" alt=""></center>

                    <div class="inset">
                        <p>
                        @if (session('status'))
                            <div class="alert alert-warning" role="alert">
                                {{ session('status') }}
                            </div>
                            @endif
                            </p>
                        <p>
                            <label for="email" class="text-light">{{ __('E-Mail Address') }} <i class="fa fa-envelope"></i></label>
                                <div id="icon"></div>
                                <small id="error-msg">Please Enter A Valid Email Address e.g user@dom.com</small>
                                <small id="error-msg-valid">Email Validated!</small>
                                <input  id="email-id" placeholder="Enter email" oninput="checker()" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                @enderror
                        </p>

                         <p class="p-container">
                            <button type="submit" class="btn btn-dark btn_default btn btn-block">
                                {{ __(' Send Code') }} <img width="20px" class="icon_img" src="{{ asset('front/img/icons/mail.png')}}">
                            </button>
                        </p>
                    </div>
                </div>
            </form>
        </div>

@include('partials.front.auth_scripts')

@endsection

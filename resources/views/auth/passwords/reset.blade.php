@extends('layouts.app')

@section('content')
    <div class="landing_wrapper breadcrumb_wrapper">
        <div class="wrapper breadcrumb_wrapper_content" style="background-image: url('https://eskipaper.com/images/3d-wallpaper-20.jpg'); background-size: cover">
            <div class="container h-100">
                <div class="row h-100 align-items-center text-center">
                    <div class="col">
                        <h2 class="breadcrumb_title">Sign-In</h2>
                    </div>
                </div>
                <div class="bread_crumb">
                    <p><a href="{{ route('front.index')}}">Home</a> <i class="fa fa-angle-right"></i> <span class="text_colored">Login</span></p>
                </div>
            </div>
        </div>
    </div>

    <div class="wrapper blog_page_wrapper" style="background-image: url('{{ asset('front/img/faqs_breadcrumb_wrapper_content.png')}}')">
        <div class="container">
            <div class="row">
                <div class="single_blog_item align-left">
                    <div class="blog_info">
                        <a class="blog_title text-dark" href="#">Change password</a>
                        <div style="margin: 10px; !important"></div>
                        <img class="" src="{{ asset('front/img/Wrapper_title_divider.png')}}" aria-colcount="" alt="">
                    </div>
                </div>
            </div>
        </div>
        <div class="wrapper fadeInDown">
            <form class="col-lg-12" style="width: 340px"  method="POST" action="{{ route('password.update') }}" autocomplete="off">
                @csrf

                <h1 class="text-light">{{ __('Reset Password') }}</h1>
                <center><img src="{{ asset('front/img/logo.png')}}" width="200px" class="text-center" alt=""></center>
                <div class="inset">
                    <p>
                        <input type="hidden" name="token" value="{{ $token }}">
                        <label for="email" class="text-light">{{ __('E-Mail Address') }} <i class="fa fa-envelope"></i></label>
                        <div id="icon"></div>
                            <small id="error-msg">Please Enter A Valid Registered Email Address e.g user@dom.com</small>
                            <small id="error-msg-valid">Email format is valid!</small>
                        <input  id="email-id" oninput="checker()" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                            @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                    </p>
                    <p>
                        <label for="password" class="text-light">{{ __('Password') }} <i class="fa fa-lock"></i></label>
                            <input id="password" placeholder="Enter Password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                            @error('password')
                            <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                    </p>
                    <p>
                        <label for="password" class="text-light">{{ __('Confirm Password') }} <i class="fa fa-lock"></i></label>
                        <input id="password-confirm" placeholder="Enter Password" type="password" class="form-control" name="password_confirmation"  required autocomplete="new-password">
                    </p>
                </div>
                <p class="p-container">
                    <button type="submit" class="btn btn-dark btn_default btn btn-block">
                        {{ __('Reset Password') }} <img class="icon_img" src="{{ asset('front/img/icons/user.png')}}"  width="20px" alt="">
                    </button>
                    <a href="{{route('login')}}" class="text-light p-2 float-right"><small>Login here ?</small></a>
                </p>
            </form>
        </div>
    </div>
    @include('partials.front.auth_scripts')
@endsection

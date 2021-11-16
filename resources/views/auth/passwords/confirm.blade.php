@extends('layouts.app')

@section('content')
    <div class="landing_wrapper breadcrumb_wrapper">

        <div class="wrapper breadcrumb_wrapper_content" style="background-image: url('https://eskipaper.com/images/3d-wallpaper-20.jpg'); background-size: cover">
            <div class="container h-100">
                <div class="row h-100 align-items-center text-center">
                    <div class="col">
                        <h2 class="breadcrumb_title">{{ __('Confirm Password') }}</h2>
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
                        <a class="blog_title text-dark" href="#">{{ __('Confirm Password') }} to Access your Dashboard</a>
                        <div style="margin: 10px; !important"></div>
                        <img class="" src="{{ asset('front/img/Wrapper_title_divider.png')}}" aria-colcount="" alt="">
                    </div>
                </div>
            </div>
        </div>

        <div class="wrapper fadeInDown">
            <div class="col-lg-12" style="width: 340px">
                <h1 class="text-light">{{ __('Verify Your Email Address') }}</h1>
                <center>
                    <img src="{{ asset('front/img/logo.png')}}" width="200px" class="text-center" alt=""></center>
                <div class="inset">
                    <p>
                        {{ __('Please confirm your password before continuing.') }}
                    </p>
                </div>
                <form method="POST" action="{{ route('password.confirm') }}">
                    @csrf

                    <div class="form-group row">
                        <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                        <div class="col-md-6">
                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                            @error('password')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group row mb-0">
                        <div class="col-md-8 offset-md-4">
                            <button type="submit" class="btn btn-dark btn_default btn btn-block">
                                {{ __('Confirm Password') }}
                            </button>

                            @if (Route::has('password.request'))
                                <a class="btn btn-link" href="{{ route('password.request') }}">
                                    {{ __('Forgot Your Password?') }}
                                </a>
                            @endif
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

    @include('partials.front.auth_scripts')

@endsection

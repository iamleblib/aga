@extends('layouts.app')

@section('content')
<title>{{env("APP_NAME")}} - Register</title>

<div class="landing_wrapper breadcrumb_wrapper">

<div class="wrapper breadcrumb_wrapper_content" style="background-image: url('https://eskipaper.com/images/3d-wallpaper-20.jpg'); background-size: cover">
        <div class="container h-100">
            <div class="row h-100 align-items-center text-center">
                <div class="col">
                    <h2 class="breadcrumb_title">Sign-Up</h2>
                </div>
            </div>
            <div class="bread_crumb">
                <p><a href="{{ route('front.index')}}">Home</a> <i class="fa fa-angle-right"></i></p>
            </div>
        </div>
        </div>
    </div>

    <div class="wrapper blog_page_wrapper" style="background-image: url('{{ asset('front/img/faqs_breadcrumb_wrapper_content.png')}}')">
    <div class="container">
        <div class="row">
            <div class="single_blog_item align-left">
                <div class="blog_info">
                    <a class="blog_title text-dark" href="#">Register to {{env("APP_NAME")}}</a>
                    <div style="margin: 10px; !important"></div>
                    <img class="" src="{{ asset('front/img/Wrapper_title_divider.png')}}" aria-colcount="" alt="">
                </div>
            </div>
        </div>
    </div>


                    <form class="fadeInDown col-lg-5" action="{{ route('register') }}" method="POST">
                    @csrf
                      <h1 class="text-light">Sign-Up</h1>
                      <center><img src="{{ asset('front/img/logo.png')}}" width="50%" class="text-center" alt=""></center>
                      <div class="inset row">
                        <div class="col-lg-7">
                          <label for="email" class="text-light">{{ __('Full name') }} <i class="fa fa-user-plus"></i></label>
                          <input type="text" placeholder="Enter Full name" id="name" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>

                        <div class="col-lg-5">
                          <label for="email" class="text-light">{{ __('Username') }} <i class="fa fa-user"></i></label>
                          <input type="text" placeholder="Enter Username" name="username" id="name" class="form-control @error('username') is-invalid @enderror" value="{{ old('username') }}" required autocomplete="username" autofocus>
                          @error('username')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>


                        @if (Request::has('user'))
                            <input hidden  value="{{ Request::get('user') }}" id="refferal_id" type="text" class="form-control" name="referral">
                            <input hidden  value="{{ App\Models\User::where('username', Request::get('user'))->first()->id }}" id="user_id" type="text" class="form-control" name="user_id">
                        @else
                            <input hidden type="text" name="user_id" value="0">
                            <input hidden  value="Self Enrollment" id="refferal_email" type="text" class="form-control" name="referral">
                        @endif

                          <div class="col-lg-6">
                            <label for="email" class="text-light">{{ __('Email Address') }} <i class="fa fa-envelope"></i></label>
                            <div id="icon"></div>
                            <small id="error-msg">Please Enter A Valid Email Address e.g user@dom.com</small>
                            <small id="error-msg-valid">Email Validated!</small>
                            <input type="email" name="email" placeholder="Enter your Email" id="email-id" oninput="checker()" class="form-control @error('email') is-invalid @enderror" value="{{ old('email') }}" required autocomplete="email" autofocus>
                            @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>

                        <div class="col-lg-6">
                            <label for="email" class="text-light">{{ __('Phone Contact') }} <i class="fa fa-phone"></i></label>
                            <input id="phone" maxlength="14" minlength="11" type="tel" name="phone" placeholder="Enter Phone Number" id="tel" class="form-control @error('phone') is-invalid @enderror" value="{{ old('phone') }}" required autocomplete="phone" autofocus>
                            @error('phone')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>

                          <div class="col-lg-12">
                            <label for="country" class="text-light col-8">{{ __('Your Country') }} <i class="fa fa-globe"></i></label>
                            <input id="country_selector" type="text" name="country" class="w-100 col-lg-12 form-control @error('country') is-invalid @enderror" value="{{ old('country') }}" required autocomplete="country" autofocus>
                            @error('country')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>

                          <div class="col-12 p-2"></div>

                        <div class="col-lg-6">
                          <label for="password" class="text-light">{{ __('Password') }} <i class="fa fa-unlock"></i></label>
                          <input type="password" placeholder="Enter Password" name="password" id="password" class="form-control @error('password') is-invalid @enderror" value="{{ old('password') }}" required autocomplete="new-password">
                          @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>

                        <div class="col-lg-6">
                          <label for="password" class="text-light">{{ __('Confirm Password') }} <i class="fa fa-lock"></i></label>
                          <input type="password" placeholder="Confirm Password" class="form-control" name="password_confirmation" id="password_confirmation">
                          <div id='message' style="margin-top: -20px"></div>
                        </div>

                        <input class="" style="width: 30px" type="checkbox"  checked>
                        <label for="remember" class="text-light m-4 col-12" style="bottom: 50px">I Agreed to the <a href="{{route('terms')}}" class="text-warning"> Terms of use</a></label>
                      </div>

                      <div class="p-container">
                        <button type="submit" class="btn_default btn btn-block" >{{ __('Register') }} <img class="icon_img" src="{{ asset('front/img/icons/chat.png')}}" width="20px" alt=""></button>
                        <a href="{{ route('login')}}" class="text-warning p-4 float-right">Already a User ?</a>
                      </div>
                    </form>
                </div>
            </div>

@include('partials.front.auth_scripts')
@endsection

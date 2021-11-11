
    @extends('layouts.front')

@section('content')

<title>Coinbase Assets - Forgot Password</title>

<div class="landing_wrapper breadcrumb_wrapper">

<div class="wrapper breadcrumb_wrapper_content" style="background-image: url('https://eskipaper.com/images/3d-wallpaper-20.jpg'); background-size: cover">
    <div class="container h-100">
        <div class="row h-100 align-items-center text-center">
            <div class="col">
                <h2 class="breadcrumb_title">Forgot Password</h2>
            </div>
        </div>
        <div class="bread_crumb">
            <p><a href="{{ route('front.index')}}">Home</a> <i class="fa fa-angle-right"></i> <span class="text_colored">Forgot?</span></p>
        </div>
    </div>
</div>
</div>

<div class="wrapper blog_page_wrapper" style="background-image: url('{{ asset('front/img/faqs_breadcrumb_wrapper_content.png')}}')">
    <div class="container">
        <div class="row">
            <div class="single_blog_item align-left">
                <div class="blog_info">
                    <a class="blog_title text-dark" href="#">Reset Password</a>
                    <div style="margin: 10px; !important"></div>
                    <img class="" src="{{ asset('front/img/Wrapper_title_divider.png')}}" aria-colcount="" alt="">
                </div>
            </div>
        </div>
    </div>


            <div class="wrapper fadeInDown">
                    <form class="col-lg-12" style="width: 340px">
                      <h1 class="text-light">Forgot Password</h1>
                      <center><img src="{{ asset('front/img/logo.png')}}" width="200px" class="text-center" alt=""></center>
                      <div class="inset">
                      <small class="text-light">If you forgot your password you have to Enter your
                      Registered Email Address to generate a new password.</small>
                      <br>
                      <hr style="border: 1px solid orange">
                      <p>
                            <div id="icon"></div>
                            <small id="error-msg">Please Enter A Valid Email Address e.g user@dom.com</small>
                            <small id="error-msg-valid">Email Validated!</small>
                            <input type="email" name="email" placeholder="Enter your Email" id="email-id" oninput="checker()">
                      </p>
                      </div>
                      <p class="p-container">
                        <button type="submit" class="btn_default btn btn-block" name="go" >Reset Password <img class="icon_img" src="{{ asset('front/img/icons/user.png')}}"  width="20px" alt=""> </button>
                        <a href="{{route('register')}}" class="text-light p-2 float-right"><small>I'm  not a User yet ?</small></a>
                        <a href="{{route('login')}}" class="text-warning p-2 float-left"><i class="fa fa-arrow-left"></i> Take me back</a>
                      </p>
                    </form>
            </div>
    
</div>

@include('partials.front.auth_scripts')
@endsection
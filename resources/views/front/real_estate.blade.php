@extends('layouts.front')

@section('content')

<title>{{env("APP_NAME")}} - Real Estate</title>


<div class="landing_wrapper breadcrumb_wrapper">
        <div class="wrapper breadcrumb_wrapper_content" style="background-image: url('{{ asset('backend/assets/media/estate/27.jpg')}}'); background-size: cover;">
            <div class="container h-100">
                <div class="row h-100 align-items-center text-center">
                    <div class="col">
                        <h2 class="breadcrumb_title">Real Estate Assets</h2>
                    </div>
                </div>
                <div class="bread_crumb">
                    <p><a href="{{ route('front.index')}}">Home</a> <i class="fa fa-angle-right"></i> <span class="text_colored">Assets</span></p>
                </div>
            </div>
        </div>
    </div>

    <div class="wrapper blog_page_wrapper">
        <div class="container">
            <div class="row">
                <div class="single_blog_item align-left">
                    <div class="blog_info">
                        <a class="blog_title" href="#">Real Estate Asset</a>
                        <div style="margin: 10px; !important"></div>
                        <img class="" src="{{ asset('front/img/Wrapper_title_divider.png')}}" aria-colcount="" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="faq_wrapper" class="wrapper faq_wrapper" style="background-image: url('{{ asset('front/img/faqs_breadcrumb_wrapper_content.png')}}')">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                        <div class="">
                            <img src="{{ asset('front/img/estates.png')}}" width="100%" alt="">
                        </div>
                </div>
                <div class="col-md-6">
                <p>{{env("APP_NAME")}} is an enterprise whose purpose is to tokenize parts of the traditional investment models and bring them to the masses. CBA Security
                                            tokens offer members an easy and accessible way to participate in exclusive opportunities. {{env("APP_NAME")}} foundations are build on a real estate portfolio ensuring the
                                            necessary security and stability. We are a team of real estate & blockchain experts that offer a new way of participation in exciting global trends. We closely monitor global trends
                                            and bring the most stable asset growth opportunities to the {{env("APP_NAME")}} Holding.</p>
            <br>
                <p> Real estate is both head and heart. While technology can create a connected journey, there is no substitute for the counsel of professionals. {{env("APP_NAME")}} works with real estate
                                            agents, brokers, builders, property managers and landlords to pair technology with top notch service. Our technology platform connects buyers, sellers and renters with the people and services
                                            hey need to make it easier to get into a home they love. Own a property today with {{env("APP_NAME")}}.</p>
                </div>
            </div>
        </div>
    </div>
</div>
    <div class="container">
    <h2>{{ env('APP_NAME') }} Properties</h2>
		<div class="row">
            @include('front.estate.house1.index')
            @include('front.estate.house2.index')
            @include('front.estate.house3.index')
            @include('front.estate.house4.index')
            @include('front.estate.house5.index')
            @include('front.estate.house6.index')
            @include('front.estate.house7.index')
            @include('front.estate.house8.index')
            @include('front.estate.house9.index')
            @include('front.estate.house10.index')
        </div>
    </div>

        <div class="p-4"></div>
@endsection

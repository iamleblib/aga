@extends('layouts.front')

@section('content')

<title>{{env("APP_NAME")}} - Frequently Ask questions</title>


<div class="landing_wrapper breadcrumb_wrapper">
        <div class="wrapper breadcrumb_wrapper_content" style="background-image: url('{{ asset('front/img/faqs_breadcrumb_wrapper_content.jpg')}}') ">
            <div class="container h-100">
                <div class="row h-100 align-items-center text-center">
                    <div class="col">
                        <h2 class="breadcrumb_title">Frequently Ask questions</h2>
                    </div>
                </div>
                <div class="bread_crumb">
                    <p><a href="{{ route('front.index')}}">Home</a> <i class="fa fa-angle-right"></i> <span class="text_colored">FAQs</span></p>
                </div>
            </div>
        </div>
    </div>

    <div class="wrapper blog_page_wrapper">
        <div class="container">
            <div class="row">
                <div class="single_blog_item align-left">
                    <div class="blog_info">
                        <a class="blog_title" href="#">Frequently Asked Question</a>
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
                            <img src="{{ asset('front/img/faqs.png')}}" alt="">
                        </div>
                </div>
                <div class="col-md-6">
                    <div class="accordion" id="accordionExample">
                        <div class="card">
                            <div class="card-header" id="headingOne">
                                <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">What Is CBA ? <span class="fa fa-angle-down"></span></button>
                            </div>
                            <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
                                <div class="card-body">
                                    {{env("APP_NAME")}} is a registered digital Forex Trading Investment firm based in the UK. The platform, which includes advanced basic and technical analysis at the source of high return performance, offers high & fixed interest return. Aiming for success with its international investor network, experienced team, privileged information from business and technology world; {{env("APP_NAME")}} stands out from its competitors with its proven quality and ease of use. The company, which is managed under the leadership of people who think and foresee the future, is committed to achieving high returns from well-diversified portfolios and prioritizing clients.
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="headingTwo">
                                <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">Guaranteed interest returns, but how? <span class="fa fa-angle-right"></span></button>
                            </div>
                            <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                                <div class="card-body">
                                    {{env("APP_NAME")}} are a class of Forex Trading considered dangerous and inconvenient. Many reasons such as liquidity, money laundering accusation, uncertainty of regulation, access restriction, volatile markets, functionality inquiries reduce trust in these trade. We believe that the risk factor should be eliminated for all people who believe that finance will rise on distributed systems. That's why we offer high interest returns to platform investors. With careful and detailed examination of market conditions, daily trading volume, expectations; we change our portfolio distribution and adjust our investment strategy. With this active fund management, you enjoy the fixed interest rate return on the user side.
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="headingThree">
                                <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="true" aria-controls="collapseThree">What are company priniciples? <span class="fa fa-angle-right"></span></button>
                            </div>
                            <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                                <div class="card-body">
                                    Successful investment management companies base their business on a core investment philosophy, and Bynamic is no different. Although we offer innovative and specific strategies through digital Trading funds, an overarching theme runs through the investment guidance we provide to clients— focus on those things within your control. There are basically four principles that we attach great importance to:

                                    <p><b>1) Create clear, appropriate investment goals:</b> An appropriate investment goal should be measureable and attainable. Success should not depend on outsize investment returns or impractical saving or spending requirements.</p>
                                    <br>
                                    <p><b>2) Develop a suitable asset allocation using broadly diversified funds:</b> A sound investment strategy starts with an trading allocation befitting the portfolio's objective. The allocation should be built upon reasonable expectations for risk and returns and use diversified investments to avoid exposure to unnecessary risks.</p>
                                    <br>
                                    <p><b>3) Minimize cost:</b> Markets are unpredictable. Costs are forever. The lower your costs, the greater your share of an investment's return. And research suggests that lower-cost investments have tended to outperform higher-cost alternatives. To hold onto even more of your return, manage for efficiency. You can't control the markets, but you can control the bite of costs and efficiency.</p>
                                    <br>
                                    <p><b>4) Maintain perspective and long-term discipline:</b> Investing can provoke strong emotions. In the face of market turmoil, some investors may find themselves making impulsive decisions or, conversely, becoming paralyzed, unable to implement an investment strategy or rebalance a portfolio as needed. Discipline and perspective can help them remain committed to a long-term investment program through periods of market uncertainty.</p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="headingFour">
                                <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseFour" aria-expanded="true" aria-controls="collapseFour">What are the Digital Trades and Values ? <span class="fa fa-angle-right"></span></button>
                            </div>
                            <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordionExample">
                                <div class="card-body">
                                    Digital Trades distributed ledger based electronic means of exchanges. Transactions involving them are secured by cryptography, and they have dedicated servers for verification of transactions and the creation of extra units. The most popular of them are Bitcoin, Ethereum, Litecoin, etc. All digital Trades are valued by price action, and as a result, almost total control is in the hand of the investing public.
                                </div>
                            </div>
                        </div>
                        <div class="card mb-0">
                            <div class="card-header" id="headingFive">
                                <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseFive" aria-expanded="true" aria-controls="collapseFive">How do i ask for a solution? <span class="fa fa-angle-right"></span></button>
                            </div>
                            <div id="collapseFive" class="collapse" aria-labelledby="headingFive" data-parent="#accordionExample">
                                <div class="card-body">
                                    We are here to help you with any problems and questions you may encounter while using the platform and during your investment experience. You can always contact or turn the situation into an opportunity.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection

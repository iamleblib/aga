@extends('layouts.front')
@section('title', 'Terms and Condition')
@section('content')
    <section class="page-title" style="background-image:url({{ asset('front/images/background/faqs.jpeg') }})">
        <div class="auto-container">
            <div class="content">
                <h1>Frequently Asked <br><span>Questions</span></h1>
                <ul class="page-breadcrumb">
                    <li><a href="{{ route('front.index') }}">Home</a></li>
                    <li>FAQS</li>
                </ul>
            </div>
        </div>
    </section>


    <section class="contact-page-section">
        <div class="auto-container">
            <div class="inner-container">
                <h2>Frequently Asked <br> <span>Questions</span> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-patch-question-fill" viewBox="0 0 16 16">
                        <path d="M5.933.87a2.89 2.89 0 0 1 4.134 0l.622.638.89-.011a2.89 2.89 0 0 1 2.924 2.924l-.01.89.636.622a2.89 2.89 0 0 1 0 4.134l-.637.622.011.89a2.89 2.89 0 0 1-2.924 2.924l-.89-.01-.622.636a2.89 2.89 0 0 1-4.134 0l-.622-.637-.89.011a2.89 2.89 0 0 1-2.924-2.924l.01-.89-.636-.622a2.89 2.89 0 0 1 0-4.134l.637-.622-.011-.89a2.89 2.89 0 0 1 2.924-2.924l.89.01.622-.636zM7.002 11a1 1 0 1 0 2 0 1 1 0 0 0-2 0zm1.602-2.027c.04-.534.198-.815.846-1.26.674-.475 1.05-1.09 1.05-1.986 0-1.325-.92-2.227-2.262-2.227-1.02 0-1.792.492-2.1 1.29A1.71 1.71 0 0 0 6 5.48c0 .393.203.64.545.64.272 0 .455-.147.564-.51.158-.592.525-.915 1.074-.915.61 0 1.03.446 1.03 1.084 0 .563-.208.885-.822 1.325-.619.433-.926.914-.926 1.64v.111c0 .428.208.745.585.745.336 0 .504-.24.554-.627z"/>
                    </svg></h2>
                <div id="faq_wrapper" class="wrapper faq_wrapper" style="background-image: url('{{ asset('front/img/faqs_breadcrumb_wrapper_content.png')}}')">
                    <div class="container">
                        <div class="row">
                            <div class="p-4"></div>
                            <div class="col-12">
                                <div class="accordion" id="accordionExample">
                                    <div class="card">
                                        <div class="card-header" id="headingOne">
                                            <a class="" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">What Is AGA ? <span class="fa fa-angle-down"></span></a>
                                        </div>
                                        <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
                                            <div class="card-body">
                                                {{env("APP_NAME")}} is a registered digital Forex Trading Investment firm based in the UK. The platform, which includes advanced basic and technical analysis at the source of high return performance, offers high & fixed interest return. Aiming for success with its international investor network, experienced team, privileged information from business and technology world; {{env("APP_NAME")}} stands out from its competitors with its proven quality and ease of use. The company, which is managed under the leadership of people who think and foresee the future, is committed to achieving high returns from well-diversified portfolios and prioritizing clients.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="card-header" id="headingTwo">
                                            <a class=""  data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">Guaranteed interest returns, but how? <span class="fa fa-angle-right"></span></a>
                                        </div>
                                        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                                            <div class="card-body">
                                                {{env("APP_NAME")}} are a class of Forex Trading considered dangerous and inconvenient. Many reasons such as liquidity, money laundering accusation, uncertainty of regulation, access restriction, volatile markets, functionality inquiries reduce trust in these trade. We believe that the risk factor should be eliminated for all people who believe that finance will rise on distributed systems. That's why we offer high interest returns to platform investors. With careful and detailed examination of market conditions, daily trading volume, expectations; we change our portfolio distribution and adjust our investment strategy. With this active fund management, you enjoy the fixed interest rate return on the user side.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="card-header" id="headingThree">
                                            <a class=""  data-toggle="collapse" data-target="#collapseThree" aria-expanded="true" aria-controls="collapseThree">What are company Principles? <span class="fa fa-angle-right"></span></a>
                                        </div>
                                        <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                                            <div class="card-body">
                                                Successful investment management companies base their business on a core investment philosophy, and Dynamic is no different. Although we offer innovative and specific strategies through digital Trading funds, an overarching theme runs through the investment guidance we provide to clients— focus on those things within your control. There are basically four principles that we attach great importance to:

                                                <p><b>1) Create clear, appropriate investment goals:</b> An appropriate investment goal should be measurable and attainable. Success should not depend on outsize investment returns or impractical saving or spending requirements.</p>
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
                                            <a class=""  data-toggle="collapse" data-target="#collapseFour" aria-expanded="true" aria-controls="collapseFour">What are the Digital Trades and Values ? <span class="fa fa-angle-right"></span></a>
                                        </div>
                                        <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordionExample">
                                            <div class="card-body">
                                                Digital Trades distributed ledger based electronic means of exchanges. Transactions involving them are secured by cryptography, and they have dedicated servers for verification of transactions and the creation of extra units. The most popular of them are Bitcoin, Ethereum, Litecoin, etc. All digital Trades are valued by price action, and as a result, almost total control is in the hand of the investing public.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card mb-0">
                                        <div class="card-header" id="headingFive">
                                            <a class=""  data-toggle="collapse" data-target="#collapseFive" aria-expanded="true" aria-controls="collapseFive">How do i ask for a solution? <span class="fa fa-angle-right"></span></a>
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
            </div>
        </div>
    </section>

@endsection

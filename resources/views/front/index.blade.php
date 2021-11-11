@extends('layouts.front')

@section('content')

<title>Coinbase Asset - Bitcoin and Cryptocurrency Platform</title>
    
    
    <div class="loader">
        <div id="loader_wrap">
            <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="200px" height="200px" viewBox="100 100 400 400" xml:space="preserve">
            <filter id="dropshadow" height="130%">
                <feGaussianBlur in="SourceAlpha" stdDeviation="5"/>
                <feOffset dx="0" dy="0" result="offsetblur"/>
                <feFlood flood-color="red"/>
                <feComposite in2="offsetblur" operator="in"/>
                <feMerge>
                    <feMergeNode/>
                    <feMergeNode in="SourceGraphic"/>
                </feMerge>
            </filter>
            <path class="path" style="filter:url(#dropshadow)" fill="#000000" d="M446.089,261.45c6.135-41.001-25.084-63.033-67.769-77.735l13.844-55.532l-33.801-8.424l-13.48,54.068
            c-8.896-2.217-18.015-4.304-27.091-6.371l13.568-54.429l-33.776-8.424l-13.861,55.521c-7.354-1.676-14.575-3.328-21.587-5.073
            l0.034-0.171l-46.617-11.64l-8.993,36.102c0,0,25.08,5.746,24.549,6.105c13.689,3.42,16.159,12.478,15.75,19.658L208.93,357.23
            c-1.675,4.158-5.925,10.401-15.494,8.031c0.338,0.485-24.579-6.134-24.579-6.134l-9.631,40.468l36.843,9.188
            c8.178,2.051,16.209,4.19,24.098,6.217l-13.978,56.17l33.764,8.424l13.852-55.571c9.235,2.499,18.186,4.813,26.948,6.995
            l-13.802,55.309l33.801,8.424l13.994-56.061c57.648,10.902,100.998,6.502,119.237-45.627c14.705-41.979-0.731-66.193-31.06-81.984
            C425.008,305.984,441.655,291.455,446.089,261.45z M368.859,369.754c-10.455,41.983-81.128,19.285-104.052,13.589l18.562-74.404
            C306.28,314.65,379.774,325.975,368.859,369.754z M379.302,260.846c-9.527,38.187-68.358,18.781-87.442,14.023l16.828-67.489
            C327.767,212.14,389.234,221.02,379.302,260.846z"/>
            </svg>
        </div>
    </div>

    <div class="owl-carousel landing_02_wrapper_content" style="background: #081024">
        <div class="wrapper landing_wrapper_content" style="background-image: url(https://media.istockphoto.com/photos/bitcoin-picture-id1145592947?k=20&m=1145592947&s=612x612&w=0&h=2Dwg5QPGB-UljX35NY6jj1OzIpx3oycyHZUvElMEgkM=); background-size: cover">
            <div class="container h-100">
                <div class="row h-100 align-items-center justify-content-between">
                    <div class="col-md-7">
                        <h5 class="text_colored" data-animation-in="slideInRight">Welcome to Coinbase Assets</h5>
                        <h4 data-animation-in="slideInLeft">Join us today at <span class="text_colored">Coinbaseassets.com</span></h4>
                        <p data-animation-in="slideInRight">Coinbase Assets is a cryptocurrency and worldwide payment system. The network is peer-to-peer and transactions .</p>
                        <a data-animation-in="slideInUp" class="btn_default" href="{{ route('register')}}">Join Us</a>
                        <a data-animation-in="slideInUp" class="btn_white" href="{{ route('about')}}">Read More</a>
                    </div>
                    <div class="col-md-5">
                        <div class="slider_floating_img">
                            <img data-animation-in="slideInUp" src="{{ asset('front/img/legacy_image.png')}}" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="wrapper landing_wrapper_content" style="background-image: url({{ asset('front/img/estate.jpeg')}}); background-size: cover">
            <div class="container h-100">
                <div class="row h-100 align-items-center justify-content-between">
                    <div class="col-md-7">
                        <h5 class="text_colored" data-animation-in="slideInRight">Invest on Real Estate</h5>
                        <h4 data-animation-in="slideInLeft">Real estate is both <span class="text_colored">HEART & MIND</span></h4>
                        <p data-animation-in="slideInRight">While technology can create a connected journey, there is no substitute for the counsel of professionals.</p>
                        <a data-animation-in="slideInUp" class="btn_default" href="{{ route('register')}}">Invest Now</a>
                        <a data-animation-in="slideInUp" class="btn_white" href="{{ route('about')}}#what_We_do_wrapper">Read More</a>
                    </div>
                    <div class="col-md-5">
                        <div class="slider_floating_img">
                            <img data-animation-in="slideInUp" class="img-src" src="{{ asset('front/img/estates.png')}}" width="202px" alt="">
                        </div>
                    </div>
                </div>
            </div> 
        </div>
        <div class="wrapper landing_wrapper_content" style="background-image: url({{ asset('front/img/landing_bg_img_01.jpeg')}})">
            <div class="container h-100">
                <div class="row h-100 align-items-center justify-content-between">
                    <div class="col-md-7">
                        <h5 class="text_colored" data-animation-in="slideInRight">We are Transparent</h5>
                        <h4 data-animation-in="slideInLeft">Quick Access to  <span class="text_colored">LIVE SUPPORT</span></h4>
                        <p data-animation-in="slideInRight">We nourish and aim to work hard to become the fastest leading investor's company and an online platform</p>
                        <a data-animation-in="slideInUp" class="btn_default" href="{{ route('register')}}">Join Us</a>
                        <a data-animation-in="slideInUp" class="btn_white" href="{{ route('about')}}">Read More</a>
                    </div>
                    <div class="col-md-4">
                        <div class="slider_floating_img">
                            <img data-animation-in="slideInUp" src="{{ asset('front/img/slider_bitcoin_01.png')}}" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="wrapper landing_wrapper_content" style="background-image: url({{ asset('front/img/landing_bg_img_03.jpeg')}})">
            <div class="container h-100">
                <div class="row h-100 align-items-center justify-content-between">
                    <div class="col-md-7">
                        <h5 class="text_colored" data-animation-in="slideInDown">More Trading Values</h5>
                        <h4 data-animation-in="slideInRight">What we <span class="text_colored">TRADE</span> on</h4>
                        <p data-animation-in="slideInUp">WE BASICALLY TRADE ON PRECIOUS METAL, OIL TRADING, STOCKS, NATURAL GAS, CRYPTOCURRENCY AND FOREX .</p>
                        <a data-animation-in="slideInUp" class="btn_default" href="{{ route('register')}}">Join Us</a>
                        <a data-animation-in="slideInUp" class="btn_white" href="{{ route('about')}}">Read More</a>
                    </div>
                    <div class="col-md-4">
                        <div class="slider_floating_img">
                            <img data-animation-in="slideInUp" src="{{ asset('front/img/slider_bitcoin_02.png')}}" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="landing_wrapper no_after">
        <div class="header_middle header_brands">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <ul class="currency_icons marquee text-center">
                            <li data-toggle="tooltip" data-placement="top" title="BBC">
                                <img src="{{ asset('front/img/icons/bbc.png')}}" alt="">
                            </li>
                            <li data-toggle="tooltip" data-placement="top" title="ETH">
                                <img src="{{ asset('front/img/icons/eth.png')}}" alt="">
                            </li>
                            <li data-toggle="tooltip" data-placement="top" title="PLN">
                                <img src="{{ asset('front/img/icons/pln.png')}}" alt="">
                            </li>
                            <li data-toggle="tooltip" data-placement="top" title="USD">
                                <img src="{{ asset('front/img/icons/usd.png')}}" alt="">
                            </li>
                            <li data-toggle="tooltip" data-placement="top" title="BTC">
                                <img src="{{ asset('front/img/icons/btc_o.png')}}" alt="">
                            </li>
                            <li data-toggle="tooltip" data-placement="top" title="XRP">
                                <img src="{{ asset('front/img/icons/xrp.pn')}}g" alt="">
                            </li>
                            <li data-toggle="tooltip" data-placement="top" title="ISK">
                                <img src="{{ asset('front/img/icons/isk.png')}}" alt="">
                            </li>
                            <li data-toggle="tooltip" data-placement="top" title="GAME">
                                <img src="{{ asset('front/img/icons/game.png')}}" alt="">
                            </li>
                            <li data-toggle="tooltip" data-placement="top" title="BTC">
                                <img src="{{ asset('front/img/icons/btc.png')}}" alt="">
                            </li>
                            <li data-toggle="tooltip" data-placement="top" title="LTH">
                                <img src="{{ asset('front/img/icons/lth.png')}}" alt="">
                            </li>
                        </ul>
                        <span class="currency_icons_close"><i class="fa fa-close"></i></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="wrapper about_wrapper" style="background-image: url('{{ asset('front/img/faqs_breadcrumb_wrapper_content.png')}}')">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h1 class="about_title">We Have a common Platform with ETF-EDGE</h1>
                    <p class="about_para_text">Bitcoin rises to the highest since May, is now up 30% in October. <br>
                    Bitcoin extended its two-week rally Monday, climbing to the highest level since early May, according to Coin Metrics.

The cryptocurrency last traded more than 3% higher at $57,530.81 after hitting as high as $57,740.82.

The comeback — a gain of another 12% would take it back to its all-time high of about $65,000 — comes amid increasing hopes and expectations that a bitcoin futures ETF could be approved soon. That, along with recent comments from the heads of the Federal Reserve and Securities and Exchange Commission, who said they have no intention of banning bitcoin, <a href="https://www.cnbc.com/2021/10/06/bitcoin-jumps-to-nearly-5-month-high-topping-55000-on-wednesday.html" class="text-warning">seemed to “embolden” investors,</a>  Ned Davis Research noted.</p>
                    <a href="https://player.cnbc.com/p/gZWlPC/cnbc_global?playertype=synd&byGuid=7000213943" class="popup-youtube"><span class="play_btn text_colored"><i class="fa fa-play"></i> Watch How</span></a>
                </div>
                <div class="col-md-6">
                    <a href="https://player.cnbc.com/p/gZWlPC/cnbc_global?playertype=synd&byGuid=7000213943" class="popup-youtube">
                        <div class="about_video" style="background-image: url('{{ asset('front/img/bitcoin-removebg-preview.png')}}')">
                        <i class="fa fa-play text-warning"></i>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>

    
    
    <div class="wrapper opportunity_wrapper">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <!-- TradingView Widget BEGIN -->
                        <div class="tradingview-widget-container">
                            <div class="tradingview-widget-container__widget"></div>
                            <div class="tradingview-widget-copyright"><a href="https://www.tradingview.com/markets/currencies/economic-calendar/" rel="noopener" target="_blank"><span class="blue-text">Coinbase Assets Calendar</span></a> by TradingView</div>
                            <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-events.js" async>
                            {
                            "colorTheme": "dark",
                            "isTransparent": false,
                            "width": "400",
                            "height": "350",
                            "locale": "en",
                            "importanceFilter": "-1,0,1"
                        }
                            </script>
                        </div>
                <!-- TradingView Widget END -->
                </div>
                <div class="col-md-6">
                    <h3 class="opportunity_title opp_ttl_02">Connecting Great Investors <br> To Great Companies</h3>
                    <p class="text_colored opportunity_subtitle_01 opp_sttl_01_02">If you had invested $10,000 in Coinbase Assets at the start of year, you would have had an approximate profit of $30,000 by August.</p>
                    <p class="opportunity_subtitle_02 opp_sttl_02_02">Bitcoin is a cryptocurrency and worldwide payment system. It is the first decentralized digital currency, as the system works without a central bank or single administrator.</p>
                    <a class="btn_default" href="{{ route('register')}}">Sign Up <img class="icon_img" src="{{ asset('front/img/icons/chat.png')}}" width="30px" alt=""></a>
                </div>
            </div>
        </div>
    </div>
    <!-- <div class="wrapper customer_wrapper">
        <div class="container">
            <div class="row text-center justify-content-between">
                <div class="col-md-3">
                    <div class="coundown_single">
                        <h2><span class="counter">40,000</span><span>+</span></h2>
                        <p>BitCoin Sale</p>
                    </div>
                </div>
                <div class="col-md-5">
                    <div class="coundown_single lr_bordered">
                        <h2><span class="counter">70,000</span><span>+</span></h2>
                        <p>happy customers</p>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="coundown_single">
                        <h2><span class="counter">70,000</span><span>+</span></h2>
                        <p>Trusted Vendors</p>
                    </div>
                </div>
            </div>
        </div>
    </div> -->
    <div id="apps" class="wrapper download_app_wrapper" style="background-image: url('{{ asset('front/img/faqs_breadcrumb_wrapper_content.png')}}')">
        <div class="container h-100">
            <div class="row h-100 align-items-center">
                <div class="col-md-6">
                    <h2 class="wrapper_title">You can sign in to our website using any of the Security Cyber Apps</h2>
                    <p class="da_wrapper_subtitle">We recommend most security Softwares and Emails to register with Coinbase Assets and Access our webiste content and values  </p>
                    <p class="da_wrapper_subtitle">You may not find other browser or software listed below, we Literally use security cyber to encrypt your device from phising.  </p>
                    <a href="{{ route('register') }}" class="btn_default">Register <img class="icon_img" src="{{ asset('front/img/icons/chat.png')}}" width="30px" alt=""><i class="fa fa-arrow-right"></i></a>
                    <div class="app_stores_links">
                        <a target="_blank" href="https://www.apple.com/ng/macbook-air/"><img src="{{ asset('front/img/apple_icon.png')}}" alt=""></a>
                        <a target="_blank" href="https://download.wondershare.com/recoverit_full4138.dmg?_gl=1*kmhzb4*_gcl_aw*R0NMLjE2MzQ1NzY1NjQuQ2owS0NRand0clNMQmhDTEFSSXNBQ2g2Um1nZXZhODJRRkI4NTdZUVQtckROdjB5WVF4WktqUS03S3N3ZDlacGlHeDV2c2k1UHVNcWhzUWFBa1c4RUFMd193Y0I.&_ga=2.77782868.1597312762.1634576564-1120645589.1634576564&_gac=1.222296426.1634576566.Cj0KCQjwtrSLBhCLARIsACh6Rmgeva82QFB857YQT-rDNv0yYQxZKjQ-7Kswd9ZpiGx5vsi5PuMqhsQaAkW8EALw_wcB"><img src="https://purepng.com/public/uploads/large/purepng.com-safari-iconsymbolsiconsapple-iosiosios-8-iconsios-8-7215225961106timx.png" alt=""></a>
                        <a target="_blank" href="https://www.microsoft.com/en-us/windows"><img src="{{ asset('front/img/microsoft_icon.png')}}" alt=""></a>
                        <a target="_blank" href="https://chromeenterprise.google/browser/download/?utm_source=adwords&utm_medium=cpc&utm_campaign=2021-H2-chromebrowser-paidmed-paiddisplay-other-chromebrowserent&utm_term=downloadnow%23chrome-browser-download&utm_content=GCEJ&brand=GCEJ/&gclid=Cj0KCQjwtrSLBhCLARIsACh6Rmi-ZDrHchTaIeywe0vFSSKCVpYbH8GzQ8waujFLLNL7_f5gyYrvSdcaAlRMEALw_wcB&gclsrc=aw.ds"><img src="{{ asset('front/img/chrome.png')}}" alt=""></a>
                        <a target="_blank" href="https://www.linux.org/"><img src="{{ asset('front/img/linux_icon.png')}}" alt=""></a>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="app_preview">
                        <img src="{{ asset('front/img/wallet-control-funds.png')}}" alt="" width="500px">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="payment_option" class="wrapper btc_excng_wrapper">
        <div class="container">
            <div class="row">
                <div class="col text-center">
                    <h2 class="wrapper_title">Our Payment Gateways</h2>
                    <img class="wrapper_title_img" src="{{ asset('front/img/Wrapper_title_divider.png')}}" alt="">
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <div class="btc_excng_wrapper_slider">
                        <script src="https://widgets.coingecko.com/coingecko-coin-price-marquee-widget.js"></script>
<coingecko-coin-price-marquee-widget  coin-ids="bitcoin,ethereum,eos,ripple,litecoin" currency="usd" background-color="#ffffff" locale="en"></coingecko-coin-price-marquee-widget>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row no-gutters">
                <div class="col">
                    <div class="btc_excng_wrapper_bottom">
                        <div class="btc_excng_wrapper_header">
                            <div class="container">
                                <div class="row">
                                    <div class="col">
                                        <p class="btc_excng_wrapper_header_left">Transfer from one wallet to another within seconds. It's that simple</p>
                                        <div class="btc_excng_wrapper_header_right align-middle">
                                            <div><p>Our Method of Payment</p></div>
                                            <div class="border_left_1">
                                                <img src="{{ asset('front/img/bitcoin.png')}}" alt="" width="70px">
                                            </div>
                                            <div class="border_left_1">
                                                <img src="{{ asset('front/img/eth.png')}}" alt="" width="70px">
                                            </div>
                                            <div class="border_left_1">
                                                <img src="{{ asset('front/img/usdc.png')}}" alt="" width="70px">
                                            </div>
                                            <div class="border_left_1">
                                                <img src="{{ asset('front/img/visa.png')}}" alt="">
                                            </div>
                                            <div class="border_left_1">
                                                <img src="{{ asset('front/img/ms_card.png')}}" alt="">
                                            </div>
                                            <div class="border_left_1">
                                                <img src="{{ asset('front/img/paypal.png')}}" alt="">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="btc_excng_wrapper_input">
                            <div class="container">
                                <form action="#">
                                    <div class="row btc_excng_wrapper_input_inner justify-content-center">
                                        <script src="https://widgets.coingecko.com/coingecko-coin-converter-widget.js"></script>
                                        <coingecko-coin-converter-widget  coin-id="bitcoin" currency="usd" background-color="#ffffff" font-color="#4c4c4c" locale="en"></coingecko-coin-converter-widget>
                                        
                                        <div class="col-lg-2 col-12">
                                            <a href="{{ route('login') }}" class="btn_default" style="margin: -560px 80px 0px -100px" type="submit">Deposit <i class="fa fa-exchange"></i></a>
                                        </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div id="step_wrapper" class="wrapper steps_03_wrapper steps_03_wrapper_another" style="background-image: url('{{ asset('front/img/faqs_breadcrumb_wrapper_content.png')}}')">
        <div class="container">
            <div class="row">
                <div class="col text-center">
                    <h2 class="wrapper_title">03 Easy Step</h2>
                    <img class="wrapper_title_img" src="{{ asset('front/img/Wrapper_title_divider.png')}}" alt="">
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <div class="line"></div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <span class="steps_03_count_another">01</span>
                    <div class="steps_03_item stp_03_itm_02">
                        <div class="steps_03_icon">
                            <img src="{{ asset('front/img/icons/user.png')}}" alt="">
                        </div>
                        <h4 class="steps_03_title">Active Account</h4>
                        <p class="steps_03_subtitle">You're not authorize to earn from Coinbase Assets if you have no registered account.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <span class="steps_03_count_another">02</span>
                    <div class="steps_03_item stp_03_itm_02">
                        <div class="steps_03_icon">
                            <img src="{{ asset('front/img/icons/mail.png')}}" alt="">
                        </div>
                        <h4 class="steps_03_title">Confirm Verification</h4>
                        <p class="steps_03_subtitle">To prove you're not a Robot 🤖  and your email is valid, we need to verify your account to get started.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <span class="steps_03_count_another">03</span>
                    <div class="steps_03_item stp_03_itm_02">
                        <div class="steps_03_icon">
                            <img src="{{ asset('front/img/icons/money_t.png')}}" alt="">
                        </div>
                        <h4 class="steps_03_title">Start your first Trade</h4>
                        <p class="steps_03_subtitle">Making your weekly profit you need to deposit your trading amount.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- <div id="roadmap_wrapper" class="wrapper road_map_wrapper">
        <div class="container">
            <div class="row">
                <div class="col text-center">
                    <h2 class="wrapper_title">Guides on Earning</h2>
                    <img class="wrapper_title_img" src="img/Wrapper_title_divider.png" alt="">
                </div>
            </div>
            <div class="row">
                <div class="col text-center">
                    <div class="timeline">
                        <div class="timeline__wrap">
                            <div class="timeline__items">
                                <div class="timeline__item">
                                    <div class="timeline__content">
                                        <span class="vertical_divider"></span>
                                        <h2 class="text_colored">Nov 2016</h2>
                                        <p>The network is peer-to-peer <br> and transactions</p>
                                    </div>
                                </div>
                                <div class="timeline__item">
                                    <div class="timeline__content">
                                        <h2 class="text_colored">Jan 2017</h2>
                                        <p>The network is peer-to-peer <br> and transactions</p>
                                        <span class="vertical_divider"></span>
                                    </div>
                                </div>
                                <div class="timeline__item">
                                    <div class="timeline__content">
                                        <span class="vertical_divider"></span>
                                        <h2 class="text_colored">Dec 2018</h2>
                                        <p>The network is peer-to-peer <br> and transactions</p>
                                    </div>
                                </div>
                                <div class="timeline__item">
                                    <div class="timeline__content">
                                        <h2 class="text_colored">Mar 2018</h2>
                                        <p>The network is peer-to-peer <br> and transactions</p>
                                        <span class="vertical_divider"></span>
                                    </div>
                                </div>
                                <div class="timeline__item">
                                    <div class="timeline__content">
                                        <span class="vertical_divider"></span>
                                        <h2 class="text_colored">Nov 2016</h2>
                                        <p>The network is peer-to-peer <br> and transactions</p>
                                    </div>
                                </div>
                                <div class="timeline__item">
                                    <div class="timeline__content">
                                        <h2 class="text_colored">Jan 2017</h2>
                                        <p>The network is peer-to-peer <br> and transactions</p>
                                        <span class="vertical_divider"></span>
                                    </div>
                                </div>
                                <div class="timeline__item">
                                    <div class="timeline__content">
                                        <span class="vertical_divider"></span>
                                        <h2 class="text_colored">Dec 2018</h2>
                                        <p>The network is peer-to-peer <br> and transactions</p>
                                    </div>
                                </div>
                                <div class="timeline__item">
                                    <div class="timeline__content">
                                        <h2 class="text_colored">Mar 2018</h2>
                                        <p>The network is peer-to-peer <br> and transactions</p>
                                        <span class="vertical_divider"></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> -->
    <div id="aapl" class="wrapper dis_token_wrapper" style="background: #020005 !important;">
        <div class="container p-0">
            <div class="row">
                <div class="col text-center">
                    <h2 class="wrapper_title">Our AAPL Technical Analysis</h2>
                    <img class="wrapper_title_img" src="{{ asset('front/img/Wrapper_title_divider.png')}}" alt="">
                </div>
            </div>
            <div class="row h-100 align-items-center justify-content-between">
                <div class="col-lg-7 col-md-12">
                    <p class="td_breakdown_title">AAPL Distribution Reading</p>
                    <img class="" src="{{ asset('front/img/Wrapper_title_divider.png')}}" alt="" width="50px">
                    <div class="token_pie_chart">
                        <!-- TradingView Widget BEGIN -->
                            <div class="tradingview-widget-container">
                                <div class="tradingview-widget-container__widget"></div>
                                
                                <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-technical-analysis.js" async>
                                {
                                "interval": "1m",
                                "width": "325",
                                "isTransparent": true,
                                "height": "350",
                                "symbol": "NASDAQ:AAPL",
                                "showIntervalTabs": true,
                                "locale": "en",
                                "colorTheme": "dark"
                            }
                                </script>
                            </div>
                            <!-- TradingView Widget END -->
                    </div>
                </div>
<hr>
                <div class="col-lg-4 col-md-12 p-4">
                <hr>
                <br>
                <br>
                <br>
                    <p class="td_breakdown_title">AAPL Distribution Float</p>
                    <img class="" src="{{ asset('front/img/Wrapper_title_divider.png')}}" alt="" width="50px">
                    <div class="token_info_item">
                        <!-- TradingView Widget BEGIN -->
                            <div class="tradingview-widget-container">
                                <div class="tradingview-widget-container__widget"></div>
                                
                                <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-hotlists.js" async>
                                {
                                "colorTheme": "dark",
                                "dateRange": "12M",
                                "exchange": "US",
                                "showChart": true,
                                "locale": "en",
                                "largeChartUrl": "",
                                "isTransparent": true,
                                "showSymbolLogo": false,
                                "showFloatingTooltip": true,
                                "width": "370",
                                "height": "500",
                                "plotLineColorGrowing": "rgba(0, 255, 0, 1)",
                                "plotLineColorFalling": "rgba(255, 0, 0, 1)",
                                "gridLineColor": "rgba(42, 46, 57, 0)",
                                "scaleFontColor": "rgba(242, 242, 242, 1)",
                                "belowLineFillColorGrowing": "rgba(41, 98, 255, 0.12)",
                                "belowLineFillColorFalling": "rgba(41, 98, 255, 0.12)",
                                "belowLineFillColorGrowingBottom": "rgba(255, 255, 0, 0)",
                                "belowLineFillColorFallingBottom": "rgba(255, 255, 0, 0)",
                                "symbolActiveColor": "rgba(0, 255, 0, 0)"
                            }
                                </script>
                            </div>
                            <!-- TradingView Widget END -->
                        <!-- <div class="td_breakdown_bodred"><span class="bg_pink"></span><p>Bitbase Marketing Platform</p><i>50%</i></div>
                        <div class="td_breakdown_bodred"><span class="bg_green2"></span><p>Bitbase Marketing Work</p><i>15%</i></div>
                        <div class="td_breakdown_bodred"><span class="bg_cyan2"></span><p>International Marketing Work</p><i>30%</i></div>
                        <div class="td_breakdown_bodred"><span class="bg_orange"></span><p>International Bitbase Marketing</p><i>10%</i></div>
                        <div class="td_breakdown_bodred mb-0"><span class="bg_light_blue2"></span><p>International Bitbase Work</p><i>40%</i></div> -->
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="faq_wrapper" class="wrapper faq_wrapper" style="background-image: url('{{ asset('front/img/faqs_breadcrumb_wrapper_content.png')}}')">
        <div class="container">
            <div class="row">
                <div class="col text-center">
                    <h2 class="wrapper_title">Frequently Asked Question</h2>
                    <img class="wrapper_title_img" src="{{ asset('front/img/Wrapper_title_divider.png')}}" alt="">
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <a href="" class="popup-youtube">
                        <div class="">
                            <img src="{{ asset('front/img/faqs.png')}}" alt="">
                        </div>
                    </a>
                </div>
                <div class="col-md-6">
                    <div class="accordion" id="accordionExample">
                        <div class="card">
                            <div class="card-header" id="headingOne">
                                <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">What Is CBA ? <span class="fa fa-angle-down"></span></button>
                            </div>
                            <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
                                <div class="card-body">
                                    Coinbase Assets is a registered digital Forex Trading Investment firm based in the UK. The platform, which includes advanced basic and technical analysis at the source of high return performance, offers high & fixed interest return. Aiming for success with its international investor network, experienced team, privileged information from business and technology world; Coinbase Assets stands out from its competitors with its proven quality and ease of use. The company, which is managed under the leadership of people who think and foresee the future, is committed to achieving high returns from well-diversified portfolios and prioritizing clients.
                                </div>
                                <center><a href="{{ route('faq')}}" class="btn_default align-center">More FAQs</a></center>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <div id="team_wrapper" class="wrapper team_wrapper">
        <div class="container">
            <div class="row">
                <div class="col text-center">
                    <h2 class="wrapper_title">Expert Team</h2>
                    <img class="wrapper_title_img" src="{{ asset('front/img/Wrapper_title_divider.png') }}" alt="">
                </div>
            </div>
            <div class="owl-carousel team_slider">
                <div class="team_item">
                    <img class="img-fluid" src="{{ asset('front/img/teams/director.jpeg') }}" alt="">
                    <div class="team_info" style="background: black">
                        <div class="team_socials">
                            <a href="#"><i class="fa fa-facebook-f"></i></a>
                            <a href="#"><i class="fa fa-twitter"></i></a>
                            <a href="#"><i class="fa fa-linkedin"></i></a>
                        </div>
                        <h4>Albert Stephen</h4>
                        <p>Director</p>
                    </div>
                </div>
                <div class="team_item">
                    <img class="img-fluid" src="{{ asset('front/img/teams/consultant.jpeg') }}" alt="">
                    <div class="team_info" style="background: black">
                        <div class="team_socials">
                            <a href="#"><i class="fa fa-facebook-f"></i></a>
                            <a href="#"><i class="fa fa-twitter"></i></a>
                            <a href="#"><i class="fa fa-linkedin"></i></a>
                        </div>
                        <h4>Tem Parker</h4>
                        <p>Consultant</p>
                    </div>
                </div>
                <div class="team_item">
                    <img class="img-fluid" src="{{ asset('front/img/teams/protocol.jpeg') }}" alt="">
                    <div class="team_info" style="background: black">
                        <div class="team_socials">
                            <a href="#"><i class="fa fa-facebook-f"></i></a>
                            <a href="#"><i class="fa fa-twitter"></i></a>
                            <a href="#"><i class="fa fa-linkedin"></i></a>
                        </div>
                        <h4>Chun Kai</h4>
                        <p>Protocol Officer</p>
                    </div>
                </div>
                <div class="team_item">
                    <img class="img-fluid" src="{{ asset('front/img/teams/franchise.jpeg') }}" alt="">
                    <div class="team_info" style="background: black">
                        <div class="team_socials">
                            <a href="#"><i class="fa fa-facebook-f"></i></a>
                            <a href="#"><i class="fa fa-twitter"></i></a>
                            <a href="#"><i class="fa fa-linkedin"></i></a>
                        </div>
                        <h4>Flora Amfred</h4>
                        <p>Franchise agent</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- <div id="exchange_wrapper" class="wrapper current_exchange_wrapper">
        <div class="container">
            <div class="row">
                <div class="col text-center">
                    <h2 class="wrapper_title">Current Exchange</h2>
                    <img class="wrapper_title_img" src="img/Wrapper_title_divider.png" alt="">
                </div>
            </div>
            <div class="row">
                <div class="col-lg-3 col-md-6 col-12 text-center">
                    <div class="cur_ex_item">
                        <div class="cur_ex_icon"><img src="img/ce_dash_icon.png" alt=""></div>
                        <div class="cur_ex_divider"><img src="img/ce_divider.png" alt=""></div>
                        <div class="exchange_price">
                            <h5>Dash</h5>
                            <p><span class="text_colored">$0010.253</span>+30.52YTD</p>
                            <a class="btn_default" href="#">Buy Now</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-12 text-center">
                   <div class="cur_ex_item">
                        <div class="cur_ex_icon"><img src="img/ce_ripple_icon.png" alt=""></div>
                        <div class="cur_ex_divider"><img src="img/ce_divider.png" alt=""></div>
                        <div class="exchange_price">
                            <h5>Ripple</h5>
                            <p><span class="text_colored">$0010.253</span>+30.52YTD</p>
                            <a class="btn_default" href="#">Buy Now</a>
                        </div>
                   </div>
                </div>
                <div class="col-lg-3 col-md-6 col-12 text-center">
                    <div class="cur_ex_item">
                        <div class="cur_ex_icon"><img src="img/ce_dash_icon.png" alt=""></div>
                        <div class="cur_ex_divider"><img src="img/ce_divider.png" alt=""></div>
                        <div class="exchange_price">
                            <h5>USD</h5>
                            <p><span class="text_colored">$0010.253</span>+30.52YTD</p>
                            <a class="btn_default" href="#">Buy Now</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-12 text-center">
                    <div class="cur_ex_item">
                        <div class="cur_ex_icon"><img src="img/ce_bitcoin_icon.png" alt=""></div>
                        <div class="cur_ex_divider"><img src="img/ce_divider.png" alt=""></div>
                        <div class="exchange_price">
                            <h5>Bit Coin</h5>
                            <p><span class="text_colored">$0010.253</span>+30.52YTD</p>
                            <a class="btn_default" href="#">Buy Now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> -->
    <div class="wrapper token_wrapper" style="background-image: url('{{ asset('front/img/faqs_breadcrumb_wrapper_content.png')}}')">
        <div class="container">
            <div class="row">
                <div class="col text-center">
                    <h2 class="wrapper_title">Our Roadmap</h2>
                    <img class="wrapper_title_img" src="{{ asset('front/img/Wrapper_title_divider.png')}}" alt="">
                </div>
            </div>
            <div class="token_counter_details">
                <div class="row">
                    <div class="col-lg-5 col-md-12">
                        <div class="taken_counter">
                            <div class="token_line_map">
                                <ul class="token_line_info_left">
                                    <li>01</li>
                                    <li class="vertical_divider"></li>
                                    <li>Individual</li>
                                </ul>
                                <p class="token_line"><span></span></p>
                                <ul class="token_line_info_right">
                                    <li>02</li>
                                    <li class="vertical_divider"></li>
                                    <li>International</li>
                                </ul>
                            </div>
                            <ul class="timeout_counter">
                                <li>
                                    <span id="days" class="time_counter"></span>
                                    <span class="counter_text">Days</span>
                                </li>
                                <li class="vertical_divider"></li>
                                <li>
                                    <span id="hours" class="time_counter"></span>
                                    <span class="counter_text">Hours</span>
                                </li>
                                <li class="vertical_divider"></li>
                                <li>
                                    <span id="minutes" class="time_counter"></span>
                                    <span class="counter_text">Miniutes</span>
                                </li>
                                <li class="vertical_divider"></li>
                                <li>
                                    <span id="seconds" class="time_counter"></span>
                                    <span class="counter_text">Sceonds</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-7 col-md-12">
                        <div class="taken_details">
                            <p class="token_details_text">Coinbase Assets is a cryptocurrency and worldwide payment system. It is the first decentralized digital currency, as the system works without a central bank or single administrator.</p>
                            <div class="row no-gutters">
                                <div class="col-md-6 col-12">
                                    <div class="token_details_single_info">
                                        <p>Started</p>
                                        <span>Aug 15, 2018 (9:12 AM GMT)</span>
                                    </div>
                                </div>
                                <div class="col-md-6 col-12">
                                    <div class="token_details_single_info">
                                        <p>Registered</p>
                                        <span>Feb 19, 2019 (13:44 AM GMT)</span>
                                    </div>
                                </div>
                                <div class="col-md-6 col-12">
                                    <div class="token_details_single_info mb-0 mb-30">
                                        <p>Certified</p>
                                        <span>Nov 31, 2019 (9:00 AM GMT)</span>
                                    </div>
                                </div>
                                <div class="col-md-6 col-12">
                                    <div class="token_details_single_info mb-0">
                                        <p>Published </p>
                                        <span>Dec 5, 2019 (9:00 AM GMT)</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="token_wrapper_bottom">
                <div class="row no-gutters">
                    <div class="col-md-6">
                        <p>Annual Interest paid since 2018</p>
                        <p class="text_colored">$12,026,615</p>
                    </div>
                    <div class="col-md-6 pl-25">
                        <p>We Accept: BTC, ETH, USDC</p>
                        <a class="btn_default" href="{{ route('login')}}">Invest Now <img src="{{ asset('front/img/icons/money_t.png')}}" width="30px" alt=""></a>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div id="investment_plan" class="p-4" style="background-image: url('{{ asset('front/img/faqs_breadcrumb_wrapper_content.png')}}')">
        <br>
        <br>
        <br>
            <div class="row">
                <div class="col text-center">
                    <h2 class="wrapper_title">Investment Package</h2>
                    <img class="wrapper_title_img" src="{{ asset('front/img/Wrapper_title_divider.png')}}" alt="">
                </div>
            </div>

            <div class="owl-carousel blog_slider container">
                <div class="text-center align-items-end">
                    <!-- Pricing Table-->
                    <div class="col-lg-12 mb-6 mb-lg-12">
                        <div class="bg-white p-4 rounded-lg shadow">
                        <h1 class="h6 text-uppercase font-weight-bold mb-4">Enterprise</h1>
                        <h2 class="h1 font-weight-bold">$499<span class="text-small font-weight-normal ml-2">/ weekly</span></h2>

                        <div class="custom-separator my-4 mx-auto bg-primary"></div>

                        <ul class="list-unstyled my-5 text-large text-left font-weight-normal">
                            <li class="mb-3">
                            <i class="fa fa-check mr-2 text-primary"></i> Maximum $9,999 </li>
                            <li class="mb-3">
                            <i class="fa fa-check mr-2"></i> 10% Weekly</li>
                            <li class="mb-3">
                            <i class="fa fa-check mr-2 text-primary"></i> 3weeks Duration</li>
                            <li class="mb-3">
                            <i class="fa fa-check mr-2 text-primary"></i> 2.5% Referral Bonus</li>
                            <li class="mb-3">
                            <i class="fa fa-check mr-2 text-primary"></i> Top-up from Enterprise - Unlimited</li>
                            <li class="mb-3 text-muted">
                            <i class="fa fa-times mr-2"></i><del>BECOME AN AGENT</del></li>
                        </ul>
                        <a href="#" class="btn rounded-lg btn-block btn-warning p-2 shadow rounded-pill">Start Now!</a>
                    </div>
                </div>
            </div>
            
                <!-- Pricing Table-->
                <div class="col-lg-12 mb-12 mb-lg-0">
                    <div class="bg-white p-5 rounded-lg shadow">
                    <h1 class="h6 text-uppercase font-weight-bold mb-4">Word Class</h1>
                    <h2 class="h1 font-weight-bold">$9,999<span class="text-small font-weight-normal ml-2">/ weekly</span></h2>

                    <div class="custom-separator my-4 mx-auto bg-primary"></div>

                    <ul class="list-unstyled my-5 text-small text-left font-weight-normal">
                        <li class="mb-3">
                            <i class="fa fa-check mr-2 text-primary"></i> Maximum $49,999 </li>
                            <li class="mb-3">
                            <i class="fa fa-check mr-2"></i> 15% Weekly</li>
                            <li class="mb-3">
                            <i class="fa fa-check mr-2 text-primary"></i> 4weeks Duration</li>
                            <li class="mb-3">
                            <i class="fa fa-check mr-2 text-primary"></i> 3.5% Referral Bonus</li>
                            <li class="mb-3">
                            <i class="fa fa-check mr-2 text-primary"></i> Top-up from Word Class - Unlimited</li>
                            <li class="mb-3 text-muted">
                            <i class="fa fa-times mr-2"></i><del>BECOME AN AGENT</del></li>
                        </li>
                    </ul>
                    <a href="#" class="btn rounded-lg btn-block btn-warning p-2 shadow rounded-pill">Start Now!</a>
                    </div>
                </div>
                
                <!-- Pricing Table-->
                <div class="col-lg-12">
                    <div class="bg-white p-5 rounded-lg shadow">
                    <h1 class="h6 text-uppercase font-weight-bold mb-4">Unlimited</h1>
                    <h2 class="h1 font-weight-bold">$49,999<span class="text-small font-weight-normal ml-2">/ weekly</span></h2>

                    <div class="custom-separator my-4 mx-auto bg-primary"></div>

                    <ul class="list-unstyled my-5 text-small text-left font-weight-normal">
                        <li class="mb-3">
                            <i class="fa fa-check mr-2 text-primary"></i> $Unlimited </li>
                            <li class="mb-3 text-success">
                            <i class="fa fa-check mr-2"></i> 20% Weekly</li>
                            <li class="mb-3">
                            <i class="fa fa-check mr-2 text-primary"></i> 5weeks Duration</li>
                            <li class="mb-3">
                            <i class="fa fa-check mr-2 text-primary"></i> 5% Referral Bonus</li>
                            <li class="mb-3">
                            <i class="fa fa-check mr-2 text-primary"></i> Top-up within Unlimited</li>
                            <li class="mb-3">
                            <i class="fa fa-check mr-2 text-primary"></i>BECOME AN AGENT</li>
                    </ul>
                    <a href="#" class="btn rounded-lg btn-block btn-success p-2 shadow rounded-pill">Start Now!</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <center><a href="{{ route('packages')}}" class="btn_default">Other Packages <i class="fa fa-arrow-right"></i></a></center>

    </div>

    <style>


.rounded-lg {
  border-radius: 1rem !important;
}

.text-small {
  font-size: 0.9rem !important;
}

.custom-separator {
  width: 5rem;
  height: 6px;
  border-radius: 1rem;
}

.text-uppercase {
  letter-spacing: 0.2em;
}
    </style>


    <div id="contact_wrapper" class="wrapper contact_wrapper">
        <div class="container">
            <div class="row">
                <div class="col text-center">
                    <h2 class="wrapper_title">Contact Us</h2>
                    <img class="wrapper_title_img" src="{{ asset('front/img/Wrapper_title_divider.png')}}" alt="">
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <form class="contact_form">
                        <input type="text" name="name" placeholder="Name">
                        <input type="email" name="email" placeholder="Email Address">
                        <input type="text" name="phone" placeholder="Phone">
                        <textarea name="message" placeholder="Message"></textarea>
                        <button class="btn_default" type="submit">Contact</button>
                    </form>
                </div>
                <div class="col-md-6">
                    <!-- Google Map Start Here -->
                    <div class="gmap-area"><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d249.954119524521!2d10.72558835650488!3d59.92163869678888!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x46416dd6397d5e5b%3A0x688ba8f67d3ba81f!2sBusiness%20Angel%20Network%20Norway!5e0!3m2!1sen!2sng!4v1636503242167!5m2!1sen!2sng" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe></div>
                </div>
            </div>
        </div>
    </div>

   @endsection
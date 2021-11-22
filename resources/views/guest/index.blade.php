@extends('layouts.guest')

@section('content')

    <div class="toolbar py-5 py-lg-15" id="kt_toolbar">
        <!--begin::Container-->
        <div id="kt_toolbar_container" class="container-xxl d-flex flex-stack flex-wrap">
            <!--begin::Page title-->
            <div class="page-title d-flex flex-column me-3">
                <!--begin::Title-->
                <h1 class="d-flex text-white fw-bolder my-1 fs-3">Dashboard</h1>
                <!--end::Title-->
                <!--begin::Breadcrumb-->
                <ul class="breadcrumb breadcrumb-separatorless fw-bold fs-7 my-1">
                    <!--begin::Item-->
                    <li class="breadcrumb-item text-white opacity-75">
                        <a href="{{ route('home') }}" class="text-white text-hover-primary">Home</a>
                    </li>
                    <!--end::Item-->
                    <!--begin::Item-->
                    <li class="breadcrumb-item">
                        <span class="bullet bg-white opacity-75 w-5px h-2px"></span>
                    </li>
                    <!--end::Item-->
                    <!--begin::Item-->
                    <li class="breadcrumb-item text-white opacity-75">Dashboard</li>
                    <!--end::Item-->
                </ul>
                <!--end::Breadcrumb-->
            </div>
            <!--end::Page title-->
            <!--begin::Actions-->
            <div class="d-flex align-items-center py-3 py-md-1">
                <!--begin::Wrapper-->

                <!--end::Wrapper-->
                <!--begin::Button-->
                <a href="#" class="btn btn-bg-white btn-active-color-primary" data-bs-toggle="modal" data-bs-target="#kt_modal_create_app" id="kt_toolbar_primary_button">
                    <span class="menu-icon">
                                    <!--begin::Svg Icon | path: /icons/duotune/general/gen002.svg-->
                                    <span class="svg-icon svg-icon-2">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-node-plus-fill" viewBox="0 0 16 16">
                                      <path d="M11 13a5 5 0 1 0-4.975-5.5H4A1.5 1.5 0 0 0 2.5 6h-1A1.5 1.5 0 0 0 0 7.5v1A1.5 1.5 0 0 0 1.5 10h1A1.5 1.5 0 0 0 4 8.5h2.025A5 5 0 0 0 11 13zm.5-7.5v2h2a.5.5 0 0 1 0 1h-2v2a.5.5 0 0 1-1 0v-2h-2a.5.5 0 0 1 0-1h2v-2a.5.5 0 0 1 1 0z"/>
                                    </svg>
                                </span>
                        Fund Wallet</a>
                <!--end::Button-->
            </div>
            <!--end::Actions-->
        </div>
        <!--end::Container-->
    </div>

    <div id="kt_content_container" class="d-flex flex-column-fluid align-items-start container-xxl">
        <!--begin::Post-->
        <div class="content flex-row-fluid" id="kt_content" >
            <!--begin::Row-->
            <div class="row g-5 g-xl-8">
                <!--begin::Col-->
                <div class="col-xl-4">
                    <!--begin::Mixed Widget 5-->
                    <div class="card card-xl-stretch mb-xl-3">
                        <!--begin::Beader-->
                        <div class="card-header border-0 py-5">
                            <h3 class="card-title align-items-start flex-column">
                                <span class="card-label fw-bolder fs-3 mb-1">Currency prices</span>
                                <span class="text-muted fw-bold fs-7">updated just now</span>
                            </h3>
                        </div>
                        <!--end::Header-->
                        <div style="height:433px; background-color: #FFFFFF; overflow:hidden; box-sizing: border-box; border: 1px solid #56667F; border-radius: 4px; text-align: right; line-height:14px; font-size: 12px; font-feature-settings: normal; text-size-adjust: 100%; box-shadow: inset 0 -20px 0 0 #56667F; padding: 0px; margin: 0px; width: 100%;">
                            <!-- TradingView Widget BEGIN -->
<div class="tradingview-widget-container">
  <div class="tradingview-widget-container__widget"></div>
  <div class="tradingview-widget-copyright"><a href="https://www.tradingview.com/markets/" rel="noopener" target="_blank"><span class="blue-text">Financial Markets</span></a> by TradingView</div>
  <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-market-overview.js" async>
  {
  "colorTheme": "dark",
  "dateRange": "12M",
  "showChart": true,
  "locale": "en",
  "largeChartUrl": "",
  "isTransparent": false,
  "showSymbolLogo": true,
  "showFloatingTooltip": true,
  "width": "400",
  "height": "500",
  "plotLineColorGrowing": "rgba(41, 98, 255, 1)",
  "plotLineColorFalling": "rgba(41, 98, 255, 1)",
  "gridLineColor": "rgba(42, 46, 57, 0)",
  "scaleFontColor": "rgba(120, 123, 134, 1)",
  "belowLineFillColorGrowing": "rgba(41, 98, 255, 0.12)",
  "belowLineFillColorFalling": "rgba(41, 98, 255, 0.12)",
  "belowLineFillColorGrowingBottom": "rgba(41, 98, 255, 0)",
  "belowLineFillColorFallingBottom": "rgba(41, 98, 255, 0)",
  "symbolActiveColor": "rgba(41, 98, 255, 0.12)",
  "tabs": [
    {
      "title": "Indices",
      "symbols": [
        {
          "s": "FOREXCOM:SPXUSD",
          "d": "S&P 500"
        },
        {
          "s": "FOREXCOM:NSXUSD",
          "d": "Nasdaq 100"
        },
        {
          "s": "FOREXCOM:DJI",
          "d": "Dow 30"
        },
        {
          "s": "INDEX:NKY",
          "d": "Nikkei 225"
        },
        {
          "s": "INDEX:DEU40",
          "d": "DAX Index"
        },
        {
          "s": "FOREXCOM:UKXGBP",
          "d": "UK 100"
        }
      ],
      "originalTitle": "Indices"
    },
    {
      "title": "Futures",
      "symbols": [
        {
          "s": "CME_MINI:ES1!",
          "d": "S&P 500"
        },
        {
          "s": "CME:6E1!",
          "d": "Euro"
        },
        {
          "s": "COMEX:GC1!",
          "d": "Gold"
        },
        {
          "s": "NYMEX:CL1!",
          "d": "Crude Oil"
        },
        {
          "s": "NYMEX:NG1!",
          "d": "Natural Gas"
        },
        {
          "s": "CBOT:ZC1!",
          "d": "Corn"
        }
      ],
      "originalTitle": "Futures"
    },
    {
      "title": "Bonds",
      "symbols": [
        {
          "s": "CME:GE1!",
          "d": "Eurodollar"
        },
        {
          "s": "CBOT:ZB1!",
          "d": "T-Bond"
        },
        {
          "s": "CBOT:UB1!",
          "d": "Ultra T-Bond"
        },
        {
          "s": "EUREX:FGBL1!",
          "d": "Euro Bund"
        },
        {
          "s": "EUREX:FBTP1!",
          "d": "Euro BTP"
        },
        {
          "s": "EUREX:FGBM1!",
          "d": "Euro BOBL"
        }
      ],
      "originalTitle": "Bonds"
    },
    {
      "title": "Forex",
      "symbols": [
        {
          "s": "FX:EURUSD"
        },
        {
          "s": "FX:GBPUSD"
        },
        {
          "s": "FX:USDJPY"
        },
        {
          "s": "FX:USDCHF"
        },
        {
          "s": "FX:AUDUSD"
        },
        {
          "s": "FX:USDCAD"
        }
      ],
      "originalTitle": "Forex"
    }
  ]
}
  </script>
</div>
<!-- TradingView Widget END -->
                        </div>

                        <div class="pt-5 card card-xl-stretch">
                            <!--begin::Header-->
                            <div class="card-header border-0 bg-primary py-5">
                                <h3 class="card-title fw-bolder text-white">Quick Link</h3>
                            </div>
                            <!--end::Header-->
                            <!--begin::Body-->
                            <div class="card-body p-0">
                                <!--begin::Chart-->
                                <div class="mixed-widget-2-chart card-rounded-bottom bg-primary" data-kt-color="danger" style="height: 200px"></div>
                                <!--end::Chart-->
                                <!--begin::Stats-->
                                <div class="card-p mt-n20 position-relative">
                                    <!--begin::Row-->
                                    <div class="row g-0">
                                        <!--begin::Col-->
                                        <a href="{{ route('deposit.logs') }}" class="col bg-light-success px-6 py-8 rounded-2 me-7 mb-7">
                                            <!--begin::Svg Icon | path: icons/duotune/general/gen032.svg-->
                                                        <span class="svg-icon svg-icon-3x svg-icon-success d-block my-2">
															<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																<path d="M6 8.725C6 8.125 6.4 7.725 7 7.725H14L18 11.725V12.925L22 9.725L12.6 2.225C12.2 1.925 11.7 1.925 11.4 2.225L2 9.725L6 12.925V8.725Z" fill="black" />
																<path opacity="0.3" d="M22 9.72498V20.725C22 21.325 21.6 21.725 21 21.725H3C2.4 21.725 2 21.325 2 20.725V9.72498L11.4 17.225C11.8 17.525 12.3 17.525 12.6 17.225L22 9.72498ZM15 11.725H18L14 7.72498V10.725C14 11.325 14.4 11.725 15 11.725Z" fill="black" />
															</svg>
														</span>

                                            <!--end::Svg Icon-->
                                            <span class="text-success fw-bold fs-6">Wallet</span>
                                        </a>
                                        <!--end::Col-->
                                        <!--begin::Col-->
                                        <a href="{{ route('investment.logs') }}" class="col bg-light-warning px-6 py-8 rounded-2 mb-7">
                                            <!--begin::Svg Icon | path: icons/duotune/finance/fin006.svg-->
                                            <span class="svg-icon svg-icon-3x svg-icon-warning d-block my-2">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                    <rect x="8" y="9" width="3" height="10" rx="1.5" fill="black" />
                                                    <rect opacity="0.5" x="13" y="5" width="3" height="14" rx="1.5" fill="black" />
                                                    <rect x="18" y="11" width="3" height="8" rx="1.5" fill="black" />
                                                    <rect x="3" y="13" width="3" height="6" rx="1.5" fill="black" />
                                                </svg>
                                            </span>
                                            <!--end::Svg Icon-->
                                            <span class="text-warning fw-bold fs-6">Investment</span>
                                        </a>
                                        <!--end::Col-->
                                    </div>
                                    <!--end::Row-->
                                    <!--begin::Row-->
                                    <div class="row g-0">
                                        <!--begin::Col-->
                                        <a href="{{ route('withdraw.logs') }}" class="col bg-light-danger px-6 py-8 rounded-2 me-7">
                                            <!--begin::Svg Icon | path: icons/duotune/abstract/abs027.svg-->
                                                        <span class="svg-icon svg-icon-3x svg-icon-danger d-block my-2">
															<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																<path opacity="0.3" d="M21.25 18.525L13.05 21.825C12.35 22.125 11.65 22.125 10.95 21.825L2.75 18.525C1.75 18.125 1.75 16.725 2.75 16.325L4.04999 15.825L10.25 18.325C10.85 18.525 11.45 18.625 12.05 18.625C12.65 18.625 13.25 18.525 13.85 18.325L20.05 15.825L21.35 16.325C22.35 16.725 22.35 18.125 21.25 18.525ZM13.05 16.425L21.25 13.125C22.25 12.725 22.25 11.325 21.25 10.925L13.05 7.62502C12.35 7.32502 11.65 7.32502 10.95 7.62502L2.75 10.925C1.75 11.325 1.75 12.725 2.75 13.125L10.95 16.425C11.65 16.725 12.45 16.725 13.05 16.425Z" fill="black" />
																<path d="M11.05 11.025L2.84998 7.725C1.84998 7.325 1.84998 5.925 2.84998 5.525L11.05 2.225C11.75 1.925 12.45 1.925 13.15 2.225L21.35 5.525C22.35 5.925 22.35 7.325 21.35 7.725L13.05 11.025C12.45 11.325 11.65 11.325 11.05 11.025Z" fill="black" />
															</svg>
														</span>
                                            <!--end::Svg Icon-->
                                            <span class="text-danger fw-bold fs-6 mt-2">Withdrawals</span>
                                        </a>
                                        <!--end::Col-->
                                        <!--begin::Col-->
                                            <a href="{{ route('realestate.index') }}" class="col bg-light-primary px-6 py-8 rounded-2">
                                            <!--begin::Svg Icon | path: icons/duotune/communication/com010.svg-->
                                                        <span class="svg-icon svg-icon-3x svg-icon-primary d-block my-2">
															<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																<path opacity="0.3" d="M20 15H4C2.9 15 2 14.1 2 13V7C2 6.4 2.4 6 3 6H21C21.6 6 22 6.4 22 7V13C22 14.1 21.1 15 20 15ZM13 12H11C10.5 12 10 12.4 10 13V16C10 16.5 10.4 17 11 17H13C13.6 17 14 16.6 14 16V13C14 12.4 13.6 12 13 12Z" fill="black" />
																<path d="M14 6V5H10V6H8V5C8 3.9 8.9 3 10 3H14C15.1 3 16 3.9 16 5V6H14ZM20 15H14V16C14 16.6 13.5 17 13 17H11C10.5 17 10 16.6 10 16V15H4C3.6 15 3.3 14.9 3 14.7V18C3 19.1 3.9 20 5 20H19C20.1 20 21 19.1 21 18V14.7C20.7 14.9 20.4 15 20 15Z" fill="black" />
															</svg>
														</span>
                                            <!--end::Svg Icon-->
                                                <span class="text-grey fw-bold fs-6 mt-2">Properties</span>
                                            </a>
                                        <!--end::Col-->
                                    </div>
                                    <!--end::Row-->
                                </div>
                                <!--end::Stats-->
                            </div>
                            <!--end::Body-->
                        </div>
                    </div>
                    <!--end::Mixed Widget 5-->
                </div>
                <!--end::Col-->
                <!--begin::Col-->
                <div class="col-xl-8">
                    <!--begin::Row-->
                    <div class="row gx-5 gx-xl-8 mb-5 mb-xl-8">
                        <div class="col-xl-12">
                            <!--begin::Tiles Widget 1-->
                            <a href="{{ route('realestate.index') }}" class="card h-150px bgi-no-repeat bgi-size-cover card-xl-stretch" style="background-image:url('{{ asset('backend/assets/media/estate/20.jpg') }}'">
                                <!--begin::Body-->
                                <div class="card-body">
                                    <!--begin::Title-->
                                    <div class="text-gray-800 text-hover-primary fw-bolder fs-2" data-bs-toggle="modal" data-bs-target="#kt_modal_create_app">Properties</div>
                                    <!--end::Title-->
                                </div>
                                <!--end::Body-->
                            </a>
                            <!--end::Tiles Widget 1-->
                        </div>

                    </div>
                    <!--end::Row-->
                    <!--begin::Row-->
                    <div class="row gx-5 gx-xl-8 mb-5 mb-xl-8">
                        <!--begin::Col-->
                        <div class="col-xl-12">
                            <div class="row">
                                <div class="col-md-6 p-5">
                                    <!--begin::Tiles Widget 5-->
                                    <a href="{{ route('deposit.logs') }}" class="card card-xxl-stretch bg-body">
                                        <!--begin::Body-->
                                        <div class="card-body d-flex flex-column justify-content-between">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-wallet-fill" viewBox="0 0 16 16">
                                                <path d="M1.5 2A1.5 1.5 0 0 0 0 3.5v2h6a.5.5 0 0 1 .5.5c0 .253.08.644.306.958.207.288.557.542 1.194.542.637 0 .987-.254 1.194-.542.226-.314.306-.705.306-.958a.5.5 0 0 1 .5-.5h6v-2A1.5 1.5 0 0 0 14.5 2h-13z"/>
                                                <path d="M16 6.5h-5.551a2.678 2.678 0 0 1-.443 1.042C9.613 8.088 8.963 8.5 8 8.5c-.963 0-1.613-.412-2.006-.958A2.679 2.679 0 0 1 5.551 6.5H0v6A1.5 1.5 0 0 0 1.5 14h13a1.5 1.5 0 0 0 1.5-1.5v-6z"/>
                                            </svg>
                                            <div class="d-flex flex-column">
                                                <div class="text-dark fw-bolder fs-1 mb-2 mt-5">${{ number_format($deposit->getProcessedDeposit(auth()->id())) }}</div>
                                                <div class="text-muted fw-bold fs-6">Wallet Balance</div>
                                            </div>
                                        </div>
                                        <!--end::Body-->
                                    </a>
                                    <!--end::Tiles Widget 5-->
                                </div>

                                <div class="col-md-6 p-5">
                                    <!--begin::Tiles Widget 5-->
                                    <a href="{{ route('investment.logs') }}" class="card card-xxl-stretch bg-body">
                                        <!--begin::Body-->
                                        <div class="card-body d-flex flex-column justify-content-between">
                                            <!--begin::Svg Icon | path: icons/duotune/general/gen002.svg-->
                                            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-layers-fill" viewBox="0 0 16 16">
                                                <path d="M7.765 1.559a.5.5 0 0 1 .47 0l7.5 4a.5.5 0 0 1 0 .882l-7.5 4a.5.5 0 0 1-.47 0l-7.5-4a.5.5 0 0 1 0-.882l7.5-4z"/>
                                                <path d="m2.125 8.567-1.86.992a.5.5 0 0 0 0 .882l7.5 4a.5.5 0 0 0 .47 0l7.5-4a.5.5 0 0 0 0-.882l-1.86-.992-5.17 2.756a1.5 1.5 0 0 1-1.41 0l-5.17-2.756z"/>
                                            </svg>
                                            <!--end::Svg Icon-->
                                            <div class="d-flex flex-column">
                                                <div class="text-dark fw-bolder fs-1 mb-2 mt-5">{{ number_format($investment) }}</div>
                                                <div class="text-muted fw-bold fs-6">Total Investments</div>
                                            </div>
                                        </div>
                                        <!--end::Body-->
                                    </a>
                                    <!--end::Tiles Widget 5-->
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-4 p-5">
                                    <!--begin::Tiles Widget 5-->
                                    <a href="{{ route('withdraw.logs') }}" class="card card-xxl-stretch bg-body">
                                        <!--begin::Body-->
                                        <div class="card-body d-flex flex-column justify-content-between">
                                            <!--begin::Svg Icon | path: icons/duotune/general/gen002.svg-->
                                            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-cash-coin" viewBox="0 0 16 16">
                                                <path fill-rule="evenodd" d="M11 15a4 4 0 1 0 0-8 4 4 0 0 0 0 8zm5-4a5 5 0 1 1-10 0 5 5 0 0 1 10 0z"/>
                                                <path d="M9.438 11.944c.047.596.518 1.06 1.363 1.116v.44h.375v-.443c.875-.061 1.386-.529 1.386-1.207 0-.618-.39-.936-1.09-1.1l-.296-.07v-1.2c.376.043.614.248.671.532h.658c-.047-.575-.54-1.024-1.329-1.073V8.5h-.375v.45c-.747.073-1.255.522-1.255 1.158 0 .562.378.92 1.007 1.066l.248.061v1.272c-.384-.058-.639-.27-.696-.563h-.668zm1.36-1.354c-.369-.085-.569-.26-.569-.522 0-.294.216-.514.572-.578v1.1h-.003zm.432.746c.449.104.655.272.655.569 0 .339-.257.571-.709.614v-1.195l.054.012z"/>
                                                <path d="M1 0a1 1 0 0 0-1 1v8a1 1 0 0 0 1 1h4.083c.058-.344.145-.678.258-1H3a2 2 0 0 0-2-2V3a2 2 0 0 0 2-2h10a2 2 0 0 0 2 2v3.528c.38.34.717.728 1 1.154V1a1 1 0 0 0-1-1H1z"/>
                                                <path d="M9.998 5.083 10 5a2 2 0 1 0-3.132 1.65 5.982 5.982 0 0 1 3.13-1.567z"/>
                                            </svg>
                                            <!--end::Svg Icon-->
                                            <div class="d-flex flex-column">
                                                <div class="text-dark fw-bolder fs-1 mb-2 mt-5">${{ number_format($withdrawal) }}</div>
                                                <div class="text-muted fw-bold fs-6">Withdrawals</div>
                                            </div>
                                        </div>
                                        <!--end::Body-->
                                    </a>
                                    <!--end::Tiles Widget 5-->
                                </div>

                                <div class="col-md-4 p-5">
                                    <!--begin::Tiles Widget 5-->
                                    <a href="{{ route('profile.index') }}" class="card card-xxl-stretch bg-body">
                                        <!--begin::Body-->
                                        <div class="card-body d-flex flex-column justify-content-between">
                                            <!--begin::Svg Icon | path: icons/duotune/general/gen002.svg-->
                                            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-people" viewBox="0 0 16 16">
                                                <path d="M15 14s1 0 1-1-1-4-5-4-5 3-5 4 1 1 1 1h8zm-7.978-1A.261.261 0 0 1 7 12.996c.001-.264.167-1.03.76-1.72C8.312 10.629 9.282 10 11 10c1.717 0 2.687.63 3.24 1.276.593.69.758 1.457.76 1.72l-.008.002a.274.274 0 0 1-.014.002H7.022zM11 7a2 2 0 1 0 0-4 2 2 0 0 0 0 4zm3-2a3 3 0 1 1-6 0 3 3 0 0 1 6 0zM6.936 9.28a5.88 5.88 0 0 0-1.23-.247A7.35 7.35 0 0 0 5 9c-4 0-5 3-5 4 0 .667.333 1 1 1h4.216A2.238 2.238 0 0 1 5 13c0-1.01.377-2.042 1.09-2.904.243-.294.526-.569.846-.816zM4.92 10A5.493 5.493 0 0 0 4 13H1c0-.26.164-1.03.76-1.724.545-.636 1.492-1.256 3.16-1.275zM1.5 5.5a3 3 0 1 1 6 0 3 3 0 0 1-6 0zm3-2a2 2 0 1 0 0 4 2 2 0 0 0 0-4z"/>
                                            </svg>
                                            <!--end::Svg Icon-->
                                            <div class="d-flex flex-column">
                                                <div class="text-dark fw-bolder fs-1 mb-2 mt-5">${{ auth()->user()->referral_bonus }}</div>
                                                <div class="text-muted fw-bold fs-6">Referral bonus</div>
                                            </div>
                                        </div>
                                        <!--end::Body-->
                                    </a>
                                    <!--end::Tiles Widget 5-->
                                </div>

                                <div class="col-md-4 p-5">
                                    <!--begin::Tiles Widget 5-->
                                    <a href="{{ route('roi.log') }}" class="card card-xxl-stretch bg-body">
                                        <!--begin::Body-->
                                        <div class="card-body d-flex flex-column justify-content-between">
                                            <!--begin::Svg Icon | path: icons/duotune/general/gen002.svg-->
                                            <span class="svg-icon svg-icon-2">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor" class="bi bi-arrow-repeat" viewBox="0 0 16 16">
                                                  <path d="M11.534 7h3.932a.25.25 0 0 1 .192.41l-1.966 2.36a.25.25 0 0 1-.384 0l-1.966-2.36a.25.25 0 0 1 .192-.41zm-11 2h3.932a.25.25 0 0 0 .192-.41L2.692 6.23a.25.25 0 0 0-.384 0L.342 8.59A.25.25 0 0 0 .534 9z"/>
                                                  <path fill-rule="evenodd" d="M8 3c-1.552 0-2.94.707-3.857 1.818a.5.5 0 1 1-.771-.636A6.002 6.002 0 0 1 13.917 7H12.9A5.002 5.002 0 0 0 8 3zM3.1 9a5.002 5.002 0 0 0 8.757 2.182.5.5 0 1 1 .771.636A6.002 6.002 0 0 1 2.083 9H3.1z"/>
                                                </svg>
                                            </span>
                                            <!--end::Svg Icon-->
                                            <div class="d-flex flex-column">
                                                <div class="text-dark fw-bolder fs-1 mb-2 mt-5">${{ $roi }}</div>
                                                <div class="text-muted fw-bold fs-6">Return of Investment (ROI)</div>
                                            </div>
                                        </div>
                                        <!--end::Body-->
                                    </a>
                                    <!--end::Tiles Widget 5-->
                                </div>
                            </div>



{{--                            <div class="row">--}}
{{--                                <div class="col-xxl-12 pt-5">--}}
{{--                                    <!--begin::Tiles Widget 5-->--}}
{{--                                    <a href="{{ route('realestate.index') }}" class="card card-xxl-stretch bg-primary">--}}
{{--                                        <!--begin::Body-->--}}
{{--                                        <div class="card-body d-flex flex-column justify-content-between">--}}
{{--                                            <!--begin::Svg Icon | path: icons/duotune/general/gen025.svg-->--}}
{{--                                            <span class="svg-icon svg-icon-white svg-icon-2hx ms-n1">--}}
{{--																<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">--}}
{{--																	<rect x="2" y="2" width="9" height="9" rx="2" fill="black" />--}}
{{--																	<rect opacity="0.3" x="13" y="2" width="9" height="9" rx="2" fill="black" />--}}
{{--																	<rect opacity="0.3" x="13" y="13" width="9" height="9" rx="2" fill="black" />--}}
{{--																	<rect opacity="0.3" x="2" y="13" width="9" height="9" rx="2" fill="black" />--}}
{{--																</svg>--}}
{{--															</span>--}}
{{--                                            <!--end::Svg Icon-->--}}
{{--                                            <div class="d-flex flex-column">--}}
{{--                                                <div class="text-white fw-bolder fs-1 mb-2 mt-5">$0</div>--}}
{{--                                                <div class="text-white fw-bold fs-6">Properties Purchased</div>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                        <!--end::Body-->--}}
{{--                                    </a>--}}
{{--                                    <!--end::Tiles Widget 5-->--}}
{{--                                </div>--}}
{{--                            </div>--}}
                        </div>
                        <!--end::Col-->

                    </div>
                    <!--end::Row-->
                </div>
                <!--end::Col-->
            </div>
            <!--end::Row-->
            <!--begin::Row-->
{{--            <div class="row gy-5 g-xl-8">--}}

{{--                <div class="col-xl-8">--}}
{{--                    <!--begin::Tables Widget 9-->--}}
{{--                    <div class="card card-xl-stretch mb-5 mb-xl-8">--}}
{{--                        <!--begin::Header-->--}}
{{--                        <div class="card-header border-0 pt-5">--}}
{{--                            <h3 class="card-title align-items-start flex-column">--}}
{{--                                <span class="card-label fw-bolder fs-3 mb-1">Members Statistics</span>--}}
{{--                                <span class="text-muted mt-1 fw-bold fs-7">Over 500 members</span>--}}
{{--                            </h3>--}}
{{--                            <div class="card-toolbar" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-trigger="hover" title="Click to add a user">--}}
{{--                                <a href="#" class="btn btn-sm btn-light btn-active-primary" data-bs-toggle="modal" data-bs-target="#kt_modal_invite_friends">--}}
{{--                                    <!--begin::Svg Icon | path: icons/duotune/arrows/arr075.svg-->--}}
{{--                                    <span class="svg-icon svg-icon-3">--}}
{{--													<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">--}}
{{--														<rect opacity="0.5" x="11.364" y="20.364" width="16" height="2" rx="1" transform="rotate(-90 11.364 20.364)" fill="black" />--}}
{{--														<rect x="4.36396" y="11.364" width="16" height="2" rx="1" fill="black" />--}}
{{--													</svg>--}}
{{--												</span>--}}
{{--                                    <!--end::Svg Icon-->New Member</a>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <!--end::Header-->--}}
{{--                        <!--begin::Body-->--}}
{{--                        <div class="card-body py-3">--}}
{{--                            <!--begin::Table container-->--}}
{{--                            <div class="table-responsive">--}}
{{--                                <!--begin::Table-->--}}
{{--                                <table class="table table-row-dashed table-row-gray-300 align-middle gs-0 gy-4">--}}
{{--                                    <!--begin::Table head-->--}}
{{--                                    <thead>--}}
{{--                                    <tr class="fw-bolder text-muted">--}}
{{--                                        <th class="w-25px">--}}
{{--                                            <div class="form-check form-check-sm form-check-custom form-check-solid">--}}
{{--                                                <input class="form-check-input" type="checkbox" value="1" data-kt-check="true" data-kt-check-target=".widget-9-check" />--}}
{{--                                            </div>--}}
{{--                                        </th>--}}
{{--                                        <th class="min-w-150px">Authors</th>--}}
{{--                                        <th class="min-w-140px">Company</th>--}}
{{--                                        <th class="min-w-120px">Progress</th>--}}
{{--                                        <th class="min-w-100px text-end">Actions</th>--}}
{{--                                    </tr>--}}
{{--                                    </thead>--}}
{{--                                    <!--end::Table head-->--}}
{{--                                    <!--begin::Table body-->--}}
{{--                                    <tbody>--}}
{{--                                    <tr>--}}
{{--                                        <td>--}}
{{--                                            <div class="form-check form-check-sm form-check-custom form-check-solid">--}}
{{--                                                <input class="form-check-input widget-9-check" type="checkbox" value="1" />--}}
{{--                                            </div>--}}
{{--                                        </td>--}}
{{--                                        <td>--}}
{{--                                            <div class="d-flex align-items-center">--}}
{{--                                                <div class="symbol symbol-45px me-5">--}}
{{--                                                    <img src="{{ asset('backend/assets/media/avatars/150-11.jpg') }}" alt="" />--}}
{{--                                                </div>--}}
{{--                                                <div class="d-flex justify-content-start flex-column">--}}
{{--                                                    <a href="#" class="text-dark fw-bolder text-hover-primary fs-6">Ana Simmons</a>--}}
{{--                                                    <span class="text-muted fw-bold text-muted d-block fs-7">HTML, JS, ReactJS</span>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                        </td>--}}
{{--                                        <td>--}}
{{--                                            <a href="#" class="text-dark fw-bolder text-hover-primary d-block fs-6">Intertico</a>--}}
{{--                                            <span class="text-muted fw-bold text-muted d-block fs-7">Web, UI/UX Design</span>--}}
{{--                                        </td>--}}
{{--                                        <td class="text-end">--}}
{{--                                            <div class="d-flex flex-column w-100 me-2">--}}
{{--                                                <div class="d-flex flex-stack mb-2">--}}
{{--                                                    <span class="text-muted me-2 fs-7 fw-bold">50%</span>--}}
{{--                                                </div>--}}
{{--                                                <div class="progress h-6px w-100">--}}
{{--                                                    <div class="progress-bar bg-primary" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                        </td>--}}
{{--                                        <td>--}}
{{--                                            <div class="d-flex justify-content-end flex-shrink-0">--}}
{{--                                                <a href="#" class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm me-1">--}}
{{--                                                    <!--begin::Svg Icon | path: icons/duotune/general/gen019.svg-->--}}
{{--                                                    <span class="svg-icon svg-icon-3">--}}
{{--																			<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">--}}
{{--																				<path d="M17.5 11H6.5C4 11 2 9 2 6.5C2 4 4 2 6.5 2H17.5C20 2 22 4 22 6.5C22 9 20 11 17.5 11ZM15 6.5C15 7.9 16.1 9 17.5 9C18.9 9 20 7.9 20 6.5C20 5.1 18.9 4 17.5 4C16.1 4 15 5.1 15 6.5Z" fill="black" />--}}
{{--																				<path opacity="0.3" d="M17.5 22H6.5C4 22 2 20 2 17.5C2 15 4 13 6.5 13H17.5C20 13 22 15 22 17.5C22 20 20 22 17.5 22ZM4 17.5C4 18.9 5.1 20 6.5 20C7.9 20 9 18.9 9 17.5C9 16.1 7.9 15 6.5 15C5.1 15 4 16.1 4 17.5Z" fill="black" />--}}
{{--																			</svg>--}}
{{--																		</span>--}}
{{--                                                    <!--end::Svg Icon-->--}}
{{--                                                </a>--}}
{{--                                                <a href="#" class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm me-1">--}}
{{--                                                    <!--begin::Svg Icon | path: icons/duotune/art/art005.svg-->--}}
{{--                                                    <span class="svg-icon svg-icon-3">--}}
{{--																			<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">--}}
{{--																				<path opacity="0.3" d="M21.4 8.35303L19.241 10.511L13.485 4.755L15.643 2.59595C16.0248 2.21423 16.5426 1.99988 17.0825 1.99988C17.6224 1.99988 18.1402 2.21423 18.522 2.59595L21.4 5.474C21.7817 5.85581 21.9962 6.37355 21.9962 6.91345C21.9962 7.45335 21.7817 7.97122 21.4 8.35303ZM3.68699 21.932L9.88699 19.865L4.13099 14.109L2.06399 20.309C1.98815 20.5354 1.97703 20.7787 2.03189 21.0111C2.08674 21.2436 2.2054 21.4561 2.37449 21.6248C2.54359 21.7934 2.75641 21.9115 2.989 21.9658C3.22158 22.0201 3.4647 22.0084 3.69099 21.932H3.68699Z" fill="black" />--}}
{{--																				<path d="M5.574 21.3L3.692 21.928C3.46591 22.0032 3.22334 22.0141 2.99144 21.9594C2.75954 21.9046 2.54744 21.7864 2.3789 21.6179C2.21036 21.4495 2.09202 21.2375 2.03711 21.0056C1.9822 20.7737 1.99289 20.5312 2.06799 20.3051L2.696 18.422L5.574 21.3ZM4.13499 14.105L9.891 19.861L19.245 10.507L13.489 4.75098L4.13499 14.105Z" fill="black" />--}}
{{--																			</svg>--}}
{{--																		</span>--}}
{{--                                                    <!--end::Svg Icon-->--}}
{{--                                                </a>--}}
{{--                                                <a href="#" class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm">--}}
{{--                                                    <!--begin::Svg Icon | path: icons/duotune/general/gen027.svg-->--}}
{{--                                                    <span class="svg-icon svg-icon-3">--}}
{{--																			<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">--}}
{{--																				<path d="M5 9C5 8.44772 5.44772 8 6 8H18C18.5523 8 19 8.44772 19 9V18C19 19.6569 17.6569 21 16 21H8C6.34315 21 5 19.6569 5 18V9Z" fill="black" />--}}
{{--																				<path opacity="0.5" d="M5 5C5 4.44772 5.44772 4 6 4H18C18.5523 4 19 4.44772 19 5V5C19 5.55228 18.5523 6 18 6H6C5.44772 6 5 5.55228 5 5V5Z" fill="black" />--}}
{{--																				<path opacity="0.5" d="M9 4C9 3.44772 9.44772 3 10 3H14C14.5523 3 15 3.44772 15 4V4H9V4Z" fill="black" />--}}
{{--																			</svg>--}}
{{--																		</span>--}}
{{--                                                    <!--end::Svg Icon-->--}}
{{--                                                </a>--}}
{{--                                            </div>--}}
{{--                                        </td>--}}
{{--                                    </tr>--}}
{{--                                    <tr>--}}
{{--                                        <td>--}}
{{--                                            <div class="form-check form-check-sm form-check-custom form-check-solid">--}}
{{--                                                <input class="form-check-input widget-9-check" type="checkbox" value="1" />--}}
{{--                                            </div>--}}
{{--                                        </td>--}}
{{--                                        <td>--}}
{{--                                            <div class="d-flex align-items-center">--}}
{{--                                                <div class="symbol symbol-45px me-5">--}}
{{--                                                    <img src="{{ asset('backend/assets/media/avatars/150-11.jpg') }}" alt="" />--}}
{{--                                                </div>--}}
{{--                                                <div class="d-flex justify-content-start flex-column">--}}
{{--                                                    <a href="#" class="text-dark fw-bolder text-hover-primary fs-6">Jessie Clarcson</a>--}}
{{--                                                    <span class="text-muted fw-bold text-muted d-block fs-7">C#, ASP.NET, MS SQL</span>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                        </td>--}}
{{--                                        <td>--}}
{{--                                            <a href="#" class="text-dark fw-bolder text-hover-primary d-block fs-6">Agoda</a>--}}
{{--                                            <span class="text-muted fw-bold text-muted d-block fs-7">Houses &amp; Hotels</span>--}}
{{--                                        </td>--}}
{{--                                        <td class="text-end">--}}
{{--                                            <div class="d-flex flex-column w-100 me-2">--}}
{{--                                                <div class="d-flex flex-stack mb-2">--}}
{{--                                                    <span class="text-muted me-2 fs-7 fw-bold">70%</span>--}}
{{--                                                </div>--}}
{{--                                                <div class="progress h-6px w-100">--}}
{{--                                                    <div class="progress-bar bg-danger" role="progressbar" style="width: 70%" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"></div>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                        </td>--}}
{{--                                        <td>--}}
{{--                                            <div class="d-flex justify-content-end flex-shrink-0">--}}
{{--                                                <a href="#" class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm me-1">--}}
{{--                                                    <!--begin::Svg Icon | path: icons/duotune/general/gen019.svg-->--}}
{{--                                                    <span class="svg-icon svg-icon-3">--}}
{{--																			<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">--}}
{{--																				<path d="M17.5 11H6.5C4 11 2 9 2 6.5C2 4 4 2 6.5 2H17.5C20 2 22 4 22 6.5C22 9 20 11 17.5 11ZM15 6.5C15 7.9 16.1 9 17.5 9C18.9 9 20 7.9 20 6.5C20 5.1 18.9 4 17.5 4C16.1 4 15 5.1 15 6.5Z" fill="black" />--}}
{{--																				<path opacity="0.3" d="M17.5 22H6.5C4 22 2 20 2 17.5C2 15 4 13 6.5 13H17.5C20 13 22 15 22 17.5C22 20 20 22 17.5 22ZM4 17.5C4 18.9 5.1 20 6.5 20C7.9 20 9 18.9 9 17.5C9 16.1 7.9 15 6.5 15C5.1 15 4 16.1 4 17.5Z" fill="black" />--}}
{{--																			</svg>--}}
{{--																		</span>--}}
{{--                                                    <!--end::Svg Icon-->--}}
{{--                                                </a>--}}
{{--                                                <a href="#" class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm me-1">--}}
{{--                                                    <!--begin::Svg Icon | path: icons/duotune/art/art005.svg-->--}}
{{--                                                    <span class="svg-icon svg-icon-3">--}}
{{--																			<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">--}}
{{--																				<path opacity="0.3" d="M21.4 8.35303L19.241 10.511L13.485 4.755L15.643 2.59595C16.0248 2.21423 16.5426 1.99988 17.0825 1.99988C17.6224 1.99988 18.1402 2.21423 18.522 2.59595L21.4 5.474C21.7817 5.85581 21.9962 6.37355 21.9962 6.91345C21.9962 7.45335 21.7817 7.97122 21.4 8.35303ZM3.68699 21.932L9.88699 19.865L4.13099 14.109L2.06399 20.309C1.98815 20.5354 1.97703 20.7787 2.03189 21.0111C2.08674 21.2436 2.2054 21.4561 2.37449 21.6248C2.54359 21.7934 2.75641 21.9115 2.989 21.9658C3.22158 22.0201 3.4647 22.0084 3.69099 21.932H3.68699Z" fill="black" />--}}
{{--																				<path d="M5.574 21.3L3.692 21.928C3.46591 22.0032 3.22334 22.0141 2.99144 21.9594C2.75954 21.9046 2.54744 21.7864 2.3789 21.6179C2.21036 21.4495 2.09202 21.2375 2.03711 21.0056C1.9822 20.7737 1.99289 20.5312 2.06799 20.3051L2.696 18.422L5.574 21.3ZM4.13499 14.105L9.891 19.861L19.245 10.507L13.489 4.75098L4.13499 14.105Z" fill="black" />--}}
{{--																			</svg>--}}
{{--																		</span>--}}
{{--                                                    <!--end::Svg Icon-->--}}
{{--                                                </a>--}}
{{--                                                <a href="#" class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm">--}}
{{--                                                    <!--begin::Svg Icon | path: icons/duotune/general/gen027.svg-->--}}
{{--                                                    <span class="svg-icon svg-icon-3">--}}
{{--																			<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">--}}
{{--																				<path d="M5 9C5 8.44772 5.44772 8 6 8H18C18.5523 8 19 8.44772 19 9V18C19 19.6569 17.6569 21 16 21H8C6.34315 21 5 19.6569 5 18V9Z" fill="black" />--}}
{{--																				<path opacity="0.5" d="M5 5C5 4.44772 5.44772 4 6 4H18C18.5523 4 19 4.44772 19 5V5C19 5.55228 18.5523 6 18 6H6C5.44772 6 5 5.55228 5 5V5Z" fill="black" />--}}
{{--																				<path opacity="0.5" d="M9 4C9 3.44772 9.44772 3 10 3H14C14.5523 3 15 3.44772 15 4V4H9V4Z" fill="black" />--}}
{{--																			</svg>--}}
{{--																		</span>--}}
{{--                                                    <!--end::Svg Icon-->--}}
{{--                                                </a>--}}
{{--                                            </div>--}}
{{--                                        </td>--}}
{{--                                    </tr>--}}
{{--                                    <tr>--}}
{{--                                        <td>--}}
{{--                                            <div class="form-check form-check-sm form-check-custom form-check-solid">--}}
{{--                                                <input class="form-check-input widget-9-check" type="checkbox" value="1" />--}}
{{--                                            </div>--}}
{{--                                        </td>--}}
{{--                                        <td>--}}
{{--                                            <div class="d-flex align-items-center">--}}
{{--                                                <div class="symbol symbol-45px me-5">--}}
{{--                                                    <img src="{{ asset('backend/assets/media/avatars/150-11.jpg') }}" alt="" />--}}
{{--                                                </div>--}}
{{--                                                <div class="d-flex justify-content-start flex-column">--}}
{{--                                                    <a href="#" class="text-dark fw-bolder text-hover-primary fs-6">Lebron Wayde</a>--}}
{{--                                                    <span class="text-muted fw-bold text-muted d-block fs-7">PHP, Laravel, VueJS</span>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                        </td>--}}
{{--                                        <td>--}}
{{--                                            <a href="#" class="text-dark fw-bolder text-hover-primary d-block fs-6">RoadGee</a>--}}
{{--                                            <span class="text-muted fw-bold text-muted d-block fs-7">Transportation</span>--}}
{{--                                        </td>--}}
{{--                                        <td class="text-end">--}}
{{--                                            <div class="d-flex flex-column w-100 me-2">--}}
{{--                                                <div class="d-flex flex-stack mb-2">--}}
{{--                                                    <span class="text-muted me-2 fs-7 fw-bold">60%</span>--}}
{{--                                                </div>--}}
{{--                                                <div class="progress h-6px w-100">--}}
{{--                                                    <div class="progress-bar bg-success" role="progressbar" style="width: 60%" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                        </td>--}}
{{--                                        <td>--}}
{{--                                            <div class="d-flex justify-content-end flex-shrink-0">--}}
{{--                                                <a href="#" class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm me-1">--}}
{{--                                                    <!--begin::Svg Icon | path: icons/duotune/general/gen019.svg-->--}}
{{--                                                    <span class="svg-icon svg-icon-3">--}}
{{--																			<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">--}}
{{--																				<path d="M17.5 11H6.5C4 11 2 9 2 6.5C2 4 4 2 6.5 2H17.5C20 2 22 4 22 6.5C22 9 20 11 17.5 11ZM15 6.5C15 7.9 16.1 9 17.5 9C18.9 9 20 7.9 20 6.5C20 5.1 18.9 4 17.5 4C16.1 4 15 5.1 15 6.5Z" fill="black" />--}}
{{--																				<path opacity="0.3" d="M17.5 22H6.5C4 22 2 20 2 17.5C2 15 4 13 6.5 13H17.5C20 13 22 15 22 17.5C22 20 20 22 17.5 22ZM4 17.5C4 18.9 5.1 20 6.5 20C7.9 20 9 18.9 9 17.5C9 16.1 7.9 15 6.5 15C5.1 15 4 16.1 4 17.5Z" fill="black" />--}}
{{--																			</svg>--}}
{{--																		</span>--}}
{{--                                                    <!--end::Svg Icon-->--}}
{{--                                                </a>--}}
{{--                                                <a href="#" class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm me-1">--}}
{{--                                                    <!--begin::Svg Icon | path: icons/duotune/art/art005.svg-->--}}
{{--                                                    <span class="svg-icon svg-icon-3">--}}
{{--																			<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">--}}
{{--																				<path opacity="0.3" d="M21.4 8.35303L19.241 10.511L13.485 4.755L15.643 2.59595C16.0248 2.21423 16.5426 1.99988 17.0825 1.99988C17.6224 1.99988 18.1402 2.21423 18.522 2.59595L21.4 5.474C21.7817 5.85581 21.9962 6.37355 21.9962 6.91345C21.9962 7.45335 21.7817 7.97122 21.4 8.35303ZM3.68699 21.932L9.88699 19.865L4.13099 14.109L2.06399 20.309C1.98815 20.5354 1.97703 20.7787 2.03189 21.0111C2.08674 21.2436 2.2054 21.4561 2.37449 21.6248C2.54359 21.7934 2.75641 21.9115 2.989 21.9658C3.22158 22.0201 3.4647 22.0084 3.69099 21.932H3.68699Z" fill="black" />--}}
{{--																				<path d="M5.574 21.3L3.692 21.928C3.46591 22.0032 3.22334 22.0141 2.99144 21.9594C2.75954 21.9046 2.54744 21.7864 2.3789 21.6179C2.21036 21.4495 2.09202 21.2375 2.03711 21.0056C1.9822 20.7737 1.99289 20.5312 2.06799 20.3051L2.696 18.422L5.574 21.3ZM4.13499 14.105L9.891 19.861L19.245 10.507L13.489 4.75098L4.13499 14.105Z" fill="black" />--}}
{{--																			</svg>--}}
{{--																		</span>--}}
{{--                                                    <!--end::Svg Icon-->--}}
{{--                                                </a>--}}
{{--                                                <a href="#" class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm">--}}
{{--                                                    <!--begin::Svg Icon | path: icons/duotune/general/gen027.svg-->--}}
{{--                                                    <span class="svg-icon svg-icon-3">--}}
{{--																			<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">--}}
{{--																				<path d="M5 9C5 8.44772 5.44772 8 6 8H18C18.5523 8 19 8.44772 19 9V18C19 19.6569 17.6569 21 16 21H8C6.34315 21 5 19.6569 5 18V9Z" fill="black" />--}}
{{--																				<path opacity="0.5" d="M5 5C5 4.44772 5.44772 4 6 4H18C18.5523 4 19 4.44772 19 5V5C19 5.55228 18.5523 6 18 6H6C5.44772 6 5 5.55228 5 5V5Z" fill="black" />--}}
{{--																				<path opacity="0.5" d="M9 4C9 3.44772 9.44772 3 10 3H14C14.5523 3 15 3.44772 15 4V4H9V4Z" fill="black" />--}}
{{--																			</svg>--}}
{{--																		</span>--}}
{{--                                                    <!--end::Svg Icon-->--}}
{{--                                                </a>--}}
{{--                                            </div>--}}
{{--                                        </td>--}}
{{--                                    </tr>--}}
{{--                                    <tr>--}}
{{--                                        <td>--}}
{{--                                            <div class="form-check form-check-sm form-check-custom form-check-solid">--}}
{{--                                                <input class="form-check-input widget-9-check" type="checkbox" value="1" />--}}
{{--                                            </div>--}}
{{--                                        </td>--}}
{{--                                        <td>--}}
{{--                                            <div class="d-flex align-items-center">--}}
{{--                                                <div class="symbol symbol-45px me-5">--}}
{{--                                                    <img src="{{ asset('backend/assets/media/avatars/150-11.jpg') }}" alt="" />--}}
{{--                                                </div>--}}
{{--                                                <div class="d-flex justify-content-start flex-column">--}}
{{--                                                    <a href="#" class="text-dark fw-bolder text-hover-primary fs-6">Natali Goodwin</a>--}}
{{--                                                    <span class="text-muted fw-bold text-muted d-block fs-7">Python, PostgreSQL, ReactJS</span>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                        </td>--}}
{{--                                        <td>--}}
{{--                                            <a href="#" class="text-dark fw-bolder text-hover-primary d-block fs-6">The Hill</a>--}}
{{--                                            <span class="text-muted fw-bold text-muted d-block fs-7">Insurance</span>--}}
{{--                                        </td>--}}
{{--                                        <td class="text-end">--}}
{{--                                            <div class="d-flex flex-column w-100 me-2">--}}
{{--                                                <div class="d-flex flex-stack mb-2">--}}
{{--                                                    <span class="text-muted me-2 fs-7 fw-bold">50%</span>--}}
{{--                                                </div>--}}
{{--                                                <div class="progress h-6px w-100">--}}
{{--                                                    <div class="progress-bar bg-warning" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                        </td>--}}
{{--                                        <td>--}}
{{--                                            <div class="d-flex justify-content-end flex-shrink-0">--}}
{{--                                                <a href="#" class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm me-1">--}}
{{--                                                    <!--begin::Svg Icon | path: icons/duotune/general/gen019.svg-->--}}
{{--                                                    <span class="svg-icon svg-icon-3">--}}
{{--																			<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">--}}
{{--																				<path d="M17.5 11H6.5C4 11 2 9 2 6.5C2 4 4 2 6.5 2H17.5C20 2 22 4 22 6.5C22 9 20 11 17.5 11ZM15 6.5C15 7.9 16.1 9 17.5 9C18.9 9 20 7.9 20 6.5C20 5.1 18.9 4 17.5 4C16.1 4 15 5.1 15 6.5Z" fill="black" />--}}
{{--																				<path opacity="0.3" d="M17.5 22H6.5C4 22 2 20 2 17.5C2 15 4 13 6.5 13H17.5C20 13 22 15 22 17.5C22 20 20 22 17.5 22ZM4 17.5C4 18.9 5.1 20 6.5 20C7.9 20 9 18.9 9 17.5C9 16.1 7.9 15 6.5 15C5.1 15 4 16.1 4 17.5Z" fill="black" />--}}
{{--																			</svg>--}}
{{--																		</span>--}}
{{--                                                    <!--end::Svg Icon-->--}}
{{--                                                </a>--}}
{{--                                                <a href="#" class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm me-1">--}}
{{--                                                    <!--begin::Svg Icon | path: icons/duotune/art/art005.svg-->--}}
{{--                                                    <span class="svg-icon svg-icon-3">--}}
{{--																			<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">--}}
{{--																				<path opacity="0.3" d="M21.4 8.35303L19.241 10.511L13.485 4.755L15.643 2.59595C16.0248 2.21423 16.5426 1.99988 17.0825 1.99988C17.6224 1.99988 18.1402 2.21423 18.522 2.59595L21.4 5.474C21.7817 5.85581 21.9962 6.37355 21.9962 6.91345C21.9962 7.45335 21.7817 7.97122 21.4 8.35303ZM3.68699 21.932L9.88699 19.865L4.13099 14.109L2.06399 20.309C1.98815 20.5354 1.97703 20.7787 2.03189 21.0111C2.08674 21.2436 2.2054 21.4561 2.37449 21.6248C2.54359 21.7934 2.75641 21.9115 2.989 21.9658C3.22158 22.0201 3.4647 22.0084 3.69099 21.932H3.68699Z" fill="black" />--}}
{{--																				<path d="M5.574 21.3L3.692 21.928C3.46591 22.0032 3.22334 22.0141 2.99144 21.9594C2.75954 21.9046 2.54744 21.7864 2.3789 21.6179C2.21036 21.4495 2.09202 21.2375 2.03711 21.0056C1.9822 20.7737 1.99289 20.5312 2.06799 20.3051L2.696 18.422L5.574 21.3ZM4.13499 14.105L9.891 19.861L19.245 10.507L13.489 4.75098L4.13499 14.105Z" fill="black" />--}}
{{--																			</svg>--}}
{{--																		</span>--}}
{{--                                                    <!--end::Svg Icon-->--}}
{{--                                                </a>--}}
{{--                                                <a href="#" class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm">--}}
{{--                                                    <!--begin::Svg Icon | path: icons/duotune/general/gen027.svg-->--}}
{{--                                                    <span class="svg-icon svg-icon-3">--}}
{{--																			<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">--}}
{{--																				<path d="M5 9C5 8.44772 5.44772 8 6 8H18C18.5523 8 19 8.44772 19 9V18C19 19.6569 17.6569 21 16 21H8C6.34315 21 5 19.6569 5 18V9Z" fill="black" />--}}
{{--																				<path opacity="0.5" d="M5 5C5 4.44772 5.44772 4 6 4H18C18.5523 4 19 4.44772 19 5V5C19 5.55228 18.5523 6 18 6H6C5.44772 6 5 5.55228 5 5V5Z" fill="black" />--}}
{{--																				<path opacity="0.5" d="M9 4C9 3.44772 9.44772 3 10 3H14C14.5523 3 15 3.44772 15 4V4H9V4Z" fill="black" />--}}
{{--																			</svg>--}}
{{--																		</span>--}}
{{--                                                    <!--end::Svg Icon-->--}}
{{--                                                </a>--}}
{{--                                            </div>--}}
{{--                                        </td>--}}
{{--                                    </tr>--}}
{{--                                    <tr>--}}
{{--                                        <td>--}}
{{--                                            <div class="form-check form-check-sm form-check-custom form-check-solid">--}}
{{--                                                <input class="form-check-input widget-9-check" type="checkbox" value="1" />--}}
{{--                                            </div>--}}
{{--                                        </td>--}}
{{--                                        <td>--}}
{{--                                            <div class="d-flex align-items-center">--}}
{{--                                                <div class="symbol symbol-45px me-5">--}}
{{--                                                    <img src="{{ asset('backend/assets/media/avatars/150-11.jpg') }}" alt="" />--}}
{{--                                                </div>--}}
{{--                                                <div class="d-flex justify-content-start flex-column">--}}
{{--                                                    <a href="#" class="text-dark fw-bolder text-hover-primary fs-6">Kevin Leonard</a>--}}
{{--                                                    <span class="text-muted fw-bold text-muted d-block fs-7">HTML, JS, ReactJS</span>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                        </td>--}}
{{--                                        <td>--}}
{{--                                            <a href="#" class="text-dark fw-bolder text-hover-primary d-block fs-6">RoadGee</a>--}}
{{--                                            <span class="text-muted fw-bold text-muted d-block fs-7">Art Director</span>--}}
{{--                                        </td>--}}
{{--                                        <td class="text-end">--}}
{{--                                            <div class="d-flex flex-column w-100 me-2">--}}
{{--                                                <div class="d-flex flex-stack mb-2">--}}
{{--                                                    <span class="text-muted me-2 fs-7 fw-bold">90%</span>--}}
{{--                                                </div>--}}
{{--                                                <div class="progress h-6px w-100">--}}
{{--                                                    <div class="progress-bar bg-info" role="progressbar" style="width: 90%" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                        </td>--}}
{{--                                        <td>--}}
{{--                                            <div class="d-flex justify-content-end flex-shrink-0">--}}
{{--                                                <a href="#" class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm me-1">--}}
{{--                                                    <!--begin::Svg Icon | path: icons/duotune/general/gen019.svg-->--}}
{{--                                                    <span class="svg-icon svg-icon-3">--}}
{{--																			<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">--}}
{{--																				<path d="M17.5 11H6.5C4 11 2 9 2 6.5C2 4 4 2 6.5 2H17.5C20 2 22 4 22 6.5C22 9 20 11 17.5 11ZM15 6.5C15 7.9 16.1 9 17.5 9C18.9 9 20 7.9 20 6.5C20 5.1 18.9 4 17.5 4C16.1 4 15 5.1 15 6.5Z" fill="black" />--}}
{{--																				<path opacity="0.3" d="M17.5 22H6.5C4 22 2 20 2 17.5C2 15 4 13 6.5 13H17.5C20 13 22 15 22 17.5C22 20 20 22 17.5 22ZM4 17.5C4 18.9 5.1 20 6.5 20C7.9 20 9 18.9 9 17.5C9 16.1 7.9 15 6.5 15C5.1 15 4 16.1 4 17.5Z" fill="black" />--}}
{{--																			</svg>--}}
{{--																		</span>--}}
{{--                                                    <!--end::Svg Icon-->--}}
{{--                                                </a>--}}
{{--                                                <a href="#" class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm me-1">--}}
{{--                                                    <!--begin::Svg Icon | path: icons/duotune/art/art005.svg-->--}}
{{--                                                    <span class="svg-icon svg-icon-3">--}}
{{--																			<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">--}}
{{--																				<path opacity="0.3" d="M21.4 8.35303L19.241 10.511L13.485 4.755L15.643 2.59595C16.0248 2.21423 16.5426 1.99988 17.0825 1.99988C17.6224 1.99988 18.1402 2.21423 18.522 2.59595L21.4 5.474C21.7817 5.85581 21.9962 6.37355 21.9962 6.91345C21.9962 7.45335 21.7817 7.97122 21.4 8.35303ZM3.68699 21.932L9.88699 19.865L4.13099 14.109L2.06399 20.309C1.98815 20.5354 1.97703 20.7787 2.03189 21.0111C2.08674 21.2436 2.2054 21.4561 2.37449 21.6248C2.54359 21.7934 2.75641 21.9115 2.989 21.9658C3.22158 22.0201 3.4647 22.0084 3.69099 21.932H3.68699Z" fill="black" />--}}
{{--																				<path d="M5.574 21.3L3.692 21.928C3.46591 22.0032 3.22334 22.0141 2.99144 21.9594C2.75954 21.9046 2.54744 21.7864 2.3789 21.6179C2.21036 21.4495 2.09202 21.2375 2.03711 21.0056C1.9822 20.7737 1.99289 20.5312 2.06799 20.3051L2.696 18.422L5.574 21.3ZM4.13499 14.105L9.891 19.861L19.245 10.507L13.489 4.75098L4.13499 14.105Z" fill="black" />--}}
{{--																			</svg>--}}
{{--																		</span>--}}
{{--                                                    <!--end::Svg Icon-->--}}
{{--                                                </a>--}}
{{--                                                <a href="#" class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm">--}}
{{--                                                    <!--begin::Svg Icon | path: icons/duotune/general/gen027.svg-->--}}
{{--                                                    <span class="svg-icon svg-icon-3">--}}
{{--																			<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">--}}
{{--																				<path d="M5 9C5 8.44772 5.44772 8 6 8H18C18.5523 8 19 8.44772 19 9V18C19 19.6569 17.6569 21 16 21H8C6.34315 21 5 19.6569 5 18V9Z" fill="black" />--}}
{{--																				<path opacity="0.5" d="M5 5C5 4.44772 5.44772 4 6 4H18C18.5523 4 19 4.44772 19 5V5C19 5.55228 18.5523 6 18 6H6C5.44772 6 5 5.55228 5 5V5Z" fill="black" />--}}
{{--																				<path opacity="0.5" d="M9 4C9 3.44772 9.44772 3 10 3H14C14.5523 3 15 3.44772 15 4V4H9V4Z" fill="black" />--}}
{{--																			</svg>--}}
{{--																		</span>--}}
{{--                                                    <!--end::Svg Icon-->--}}
{{--                                                </a>--}}
{{--                                            </div>--}}
{{--                                        </td>--}}
{{--                                    </tr>--}}
{{--                                    </tbody>--}}
{{--                                    <!--end::Table body-->--}}
{{--                                </table>--}}
{{--                                <!--end::Table-->--}}
{{--                            </div>--}}
{{--                            <!--end::Table container-->--}}
{{--                        </div>--}}
{{--                        <!--begin::Body-->--}}
{{--                    </div>--}}
{{--                    <!--end::Tables Widget 9-->--}}
{{--                </div>--}}
{{--                <!--end::Col-->--}}
{{--            </div>--}}
            <!--end::Row-->
        </div>
        <!--end::Post-->
    </div>

    </div>
    </div>
</div>
@endsection

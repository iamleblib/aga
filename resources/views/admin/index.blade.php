@extends('layouts.admin')

@section('title', 'Admin Control Panel')
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
                <a href="{{ route('users.add') }}" class="btn btn-bg-white btn-active-color-primary"  >Add New Admin & Users</a>
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
            <div class="row g-5 g-xl-12">
                <!--begin::Col-->
                <div class="col-xl-12">
                    <!--begin::Row-->
                    <div class="row gx-5 gx-xl-8 mb-5 mb-xl-8">
                        <!--begin::Col-->
                        <div class="col-xl-12">
                            <div class="row">
                                <div class="col-md-4 p-5">
                                    <!--begin::Tiles Widget 5-->
                                    <a href="{{ route('deposit.index') }}" class="card card-xxl-stretch bg-body">
                                        <!--begin::Body-->
                                        <div class="card-body d-flex flex-column justify-content-between">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-bar-chart-steps" viewBox="0 0 16 16">
                                                <path d="M.5 0a.5.5 0 0 1 .5.5v15a.5.5 0 0 1-1 0V.5A.5.5 0 0 1 .5 0zM2 1.5a.5.5 0 0 1 .5-.5h4a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-4a.5.5 0 0 1-.5-.5v-1zm2 4a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-7a.5.5 0 0 1-.5-.5v-1zm2 4a.5.5 0 0 1 .5-.5h6a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-6a.5.5 0 0 1-.5-.5v-1zm2 4a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-7a.5.5 0 0 1-.5-.5v-1z"/>
                                            </svg>
                                            <div class="d-flex flex-column">
                                                <div class="text-dark fw-bolder fs-1 mb-2 mt-5">${{ number_format($deposit->getTotalDeposit()) }}</div>
                                                <div class="text-muted fw-bold fs-6">All Deposits</div>
                                            </div>
                                        </div>
                                        <!--end::Body-->
                                    </a>
                                    <!--end::Tiles Widget 5-->
                                </div>

                                <div class="col-md-4 p-5">
                                    <!--begin::Tiles Widget 5-->
                                    <a href="{{ route('deposit.index') }}" class="card card-xxl-stretch bg-body">
                                        <!--begin::Body-->
                                        <div class="card-body d-flex flex-column justify-content-between">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-activity" viewBox="0 0 16 16">
                                                <path fill-rule="evenodd" d="M6 2a.5.5 0 0 1 .47.33L10 12.036l1.53-4.208A.5.5 0 0 1 12 7.5h3.5a.5.5 0 0 1 0 1h-3.15l-1.88 5.17a.5.5 0 0 1-.94 0L6 3.964 4.47 8.171A.5.5 0 0 1 4 8.5H.5a.5.5 0 0 1 0-1h3.15l1.88-5.17A.5.5 0 0 1 6 2Z"/>
                                            </svg>
                                            <div class="d-flex flex-column">
                                                <div class="text-dark fw-bolder fs-1 mb-2 mt-5">{{ number_format($deposit->getPendingDepositCount()) }}</div>
                                                <div class="text-muted fw-bold fs-6">Pending Deposits</div>
                                            </div>
                                        </div>
                                        <!--end::Body-->
                                    </a>
                                    <!--end::Tiles Widget 5-->
                                </div>

                                <div class="col-md-4 p-5">
                                    <!--begin::Tiles Widget 5-->
                                    <a href="{{ route('investment.index') }}" class="card card-xxl-stretch bg-body">
                                        <!--begin::Body-->
                                        <div class="card-body d-flex flex-column justify-content-between">
                                            <!--begin::Svg Icon | path: icons/duotune/general/gen002.svg-->
                                            <span class="svg-icon svg-icon-warning svg-icon-2hx ms-n1">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-bar-chart-line-fill" viewBox="0 0 16 16">
                                                  <path d="M11 2a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v12h.5a.5.5 0 0 1 0 1H.5a.5.5 0 0 1 0-1H1v-3a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v3h1V7a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v7h1V2z"/>
                                                </svg>
                                            </span>
                                            <!--end::Svg Icon-->
                                            <div class="d-flex flex-column">
                                                <div class="text-dark fw-bolder fs-1 mb-2 mt-5">${{ number_format($investment->getAllInvestment()) }}</div>
                                                <div class="text-muted fw-bold fs-6">Total Investments</div>
                                            </div>
                                        </div>
                                        <!--end::Body-->
                                    </a>
                                    <!--end::Tiles Widget 5-->
                                </div>

                                <div class="col-md-4 p-5">
                                    <!--begin::Tiles Widget 5-->
                                    <a href="{{ route('withdrawal.index') }}" class="card card-xxl-stretch bg-body">
                                        <!--begin::Body-->
                                        <div class="card-body d-flex flex-column justify-content-between">
                                            <!--begin::Svg Icon | path: icons/duotune/general/gen002.svg-->
                                            <span class="svg-icon svg-icon-primary svg-icon-2hx ms-n1">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-cash-coin" viewBox="0 0 16 16">
                                                  <path fill-rule="evenodd" d="M11 15a4 4 0 1 0 0-8 4 4 0 0 0 0 8zm5-4a5 5 0 1 1-10 0 5 5 0 0 1 10 0z"/>
                                                  <path d="M9.438 11.944c.047.596.518 1.06 1.363 1.116v.44h.375v-.443c.875-.061 1.386-.529 1.386-1.207 0-.618-.39-.936-1.09-1.1l-.296-.07v-1.2c.376.043.614.248.671.532h.658c-.047-.575-.54-1.024-1.329-1.073V8.5h-.375v.45c-.747.073-1.255.522-1.255 1.158 0 .562.378.92 1.007 1.066l.248.061v1.272c-.384-.058-.639-.27-.696-.563h-.668zm1.36-1.354c-.369-.085-.569-.26-.569-.522 0-.294.216-.514.572-.578v1.1h-.003zm.432.746c.449.104.655.272.655.569 0 .339-.257.571-.709.614v-1.195l.054.012z"/>
                                                  <path d="M1 0a1 1 0 0 0-1 1v8a1 1 0 0 0 1 1h4.083c.058-.344.145-.678.258-1H3a2 2 0 0 0-2-2V3a2 2 0 0 0 2-2h10a2 2 0 0 0 2 2v3.528c.38.34.717.728 1 1.154V1a1 1 0 0 0-1-1H1z"/>
                                                  <path d="M9.998 5.083 10 5a2 2 0 1 0-3.132 1.65 5.982 5.982 0 0 1 3.13-1.567z"/>
                                                </svg>
                                            </span>
                                            <!--end::Svg Icon-->
                                            <div class="d-flex flex-column">
                                                <div class="text-dark fw-bolder fs-1 mb-2 mt-5">${{ number_format($withdrawal->getCount()) }}</div>
                                                <div class="text-muted fw-bold fs-6">Total Withdrawals</div>
                                            </div>
                                        </div>
                                        <!--end::Body-->
                                    </a>
                                    <!--end::Tiles Widget 5-->
                                </div>

                                <div class="col-md-4 p-5">
                                    <!--begin::Tiles Widget 5-->
                                    <a href="{{ route('withdrawal.index') }}" class="card card-xxl-stretch bg-body">
                                        <!--begin::Body-->
                                        <div class="card-body d-flex flex-column justify-content-between">
                                            <!--begin::Svg Icon | path: icons/duotune/general/gen002.svg-->
                                            <span class="svg-icon svg-icon-primary svg-icon-2hx ms-n1">
																<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																	<path opacity="0.3" d="M4.05424 15.1982C8.34524 7.76818 13.5782 3.26318 20.9282 2.01418C21.0729 1.98837 21.2216 1.99789 21.3618 2.04193C21.502 2.08597 21.6294 2.16323 21.7333 2.26712C21.8372 2.37101 21.9144 2.49846 21.9585 2.63863C22.0025 2.7788 22.012 2.92754 21.9862 3.07218C20.7372 10.4222 16.2322 15.6552 8.80224 19.9462L4.05424 15.1982ZM3.81924 17.3372L2.63324 20.4482C2.58427 20.5765 2.5735 20.7163 2.6022 20.8507C2.63091 20.9851 2.69788 21.1082 2.79503 21.2054C2.89218 21.3025 3.01536 21.3695 3.14972 21.3982C3.28408 21.4269 3.42387 21.4161 3.55224 21.3672L6.66524 20.1802L3.81924 17.3372ZM16.5002 5.99818C16.2036 5.99818 15.9136 6.08615 15.6669 6.25097C15.4202 6.41579 15.228 6.65006 15.1144 6.92415C15.0009 7.19824 14.9712 7.49984 15.0291 7.79081C15.0869 8.08178 15.2298 8.34906 15.4396 8.55884C15.6494 8.76862 15.9166 8.91148 16.2076 8.96935C16.4986 9.02723 16.8002 8.99753 17.0743 8.884C17.3484 8.77046 17.5826 8.5782 17.7474 8.33153C17.9123 8.08486 18.0002 7.79485 18.0002 7.49818C18.0002 7.10035 17.8422 6.71882 17.5609 6.43752C17.2796 6.15621 16.8981 5.99818 16.5002 5.99818Z" fill="black" />
																	<path d="M4.05423 15.1982L2.24723 13.3912C2.15505 13.299 2.08547 13.1867 2.04395 13.0632C2.00243 12.9396 1.9901 12.8081 2.00793 12.679C2.02575 12.5498 2.07325 12.4266 2.14669 12.3189C2.22013 12.2112 2.31752 12.1219 2.43123 12.0582L9.15323 8.28918C7.17353 10.3717 5.4607 12.6926 4.05423 15.1982ZM8.80023 19.9442L10.6072 21.7512C10.6994 21.8434 10.8117 21.9129 10.9352 21.9545C11.0588 21.996 11.1903 22.0083 11.3195 21.9905C11.4486 21.9727 11.5718 21.9252 11.6795 21.8517C11.7872 21.7783 11.8765 21.6809 11.9402 21.5672L15.7092 14.8442C13.6269 16.8245 11.3061 18.5377 8.80023 19.9442ZM7.04023 18.1832L12.5832 12.6402C12.7381 12.4759 12.8228 12.2577 12.8195 12.032C12.8161 11.8063 12.725 11.5907 12.5653 11.4311C12.4057 11.2714 12.1901 11.1803 11.9644 11.1769C11.7387 11.1736 11.5205 11.2583 11.3562 11.4132L5.81323 16.9562L7.04023 18.1832Z" fill="black" />
																</svg>
															</span>
                                            <!--end::Svg Icon-->
                                            <div class="d-flex flex-column">
                                                <div class="text-dark fw-bolder fs-1 mb-2 mt-5">{{ number_format($withdrawal->pendingWithdrawals()->count()) }}</div>
                                                <div class="text-muted fw-bold fs-6">Total Pending Withdrawals</div>
                                            </div>
                                        </div>
                                        <!--end::Body-->
                                    </a>
                                    <!--end::Tiles Widget 5-->
                                </div>

                                <div class="col-md-4 p-5">
                                    <!--begin::Tiles Widget 5-->
                                    <a href="{{ route('roi.index') }}" class="card card-xxl-stretch bg-body">
                                        <!--begin::Body-->
                                        <div class="card-body d-flex flex-column justify-content-between">
                                            <!--begin::Svg Icon | path: icons/duotune/general/gen002.svg-->
                                            <span class="svg-icon svg-icon-default svg-icon-2hx ms-n1">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-bootstrap-reboot" viewBox="0 0 16 16">
                                                  <path d="M1.161 8a6.84 6.84 0 1 0 6.842-6.84.58.58 0 1 1 0-1.16 8 8 0 1 1-6.556 3.412l-.663-.577a.58.58 0 0 1 .227-.997l2.52-.69a.58.58 0 0 1 .728.633l-.332 2.592a.58.58 0 0 1-.956.364l-.643-.56A6.812 6.812 0 0 0 1.16 8z"/>
                                                  <path d="M6.641 11.671V8.843h1.57l1.498 2.828h1.314L9.377 8.665c.897-.3 1.427-1.106 1.427-2.1 0-1.37-.943-2.246-2.456-2.246H5.5v7.352h1.141zm0-3.75V5.277h1.57c.881 0 1.416.499 1.416 1.32 0 .84-.504 1.324-1.386 1.324h-1.6z"/>
                                                </svg>
															</span>
                                            <!--end::Svg Icon-->
                                            <div class="d-flex flex-column">
                                                <div class="text-dark fw-bolder fs-1 mb-2 mt-5"></div>
                                                <div class="text-muted fw-bold fs-6">ROI's</div>
                                            </div>
                                        </div>
                                        <!--end::Body-->
                                    </a>
                                    <!--end::Tiles Widget 5-->
                                </div>

                                <div class="col-md-4 p-5">
                                    <!--begin::Tiles Widget 5-->
                                    <a href="{{ route('users.index') }}" class="card card-xxl-stretch bg-body">
                                        <!--begin::Body-->
                                        <div class="card-body d-flex flex-column justify-content-between">
                                            <!--begin::Svg Icon | path: icons/duotune/general/gen002.svg-->
                                            <span class="svg-icon svg-icon-default svg-icon-2hx ms-n1">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-people-fill" viewBox="0 0 16 16">
                                                  <path d="M7 14s-1 0-1-1 1-4 5-4 5 3 5 4-1 1-1 1H7zm4-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
                                                  <path fill-rule="evenodd" d="M5.216 14A2.238 2.238 0 0 1 5 13c0-1.355.68-2.75 1.936-3.72A6.325 6.325 0 0 0 5 9c-4 0-5 3-5 4s1 1 1 1h4.216z"/>
                                                  <path d="M4.5 8a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5z"/>
                                                </svg>
                                            </span>
                                            <!--end::Svg Icon-->
                                            <div class="d-flex flex-column">
                                                <div class="text-dark fw-bolder fs-1 mb-2 mt-5">{{ number_format($users->where('is_admin', false)->count()) }}</div>
                                                <div class="text-muted fw-bold fs-6">Registered Users</div>
                                            </div>
                                        </div>
                                        <!--end::Body-->
                                    </a>
                                    <!--end::Tiles Widget 5-->
                                </div>

                                <div class="col-md-4 p-5b">
                                    <!--begin::Tiles Widget 5-->
                                    <a href="{{ route('users.index') }}" class="card card-xxl-stretch bg-body">
                                        <!--begin::Body-->
                                        <div class="card-body d-flex flex-column justify-content-between bg-light-danger">
                                            <!--begin::Svg Icon | path: icons/duotune/general/gen002.svg-->
                                            <span class="svg-icon svg-icon-danger text-danger svg-icon-2hx ms-n1">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-dash-circle-fill" viewBox="0 0 16 16">
                                                  <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM4.5 7.5a.5.5 0 0 0 0 1h7a.5.5 0 0 0 0-1h-7z"/>
                                                </svg>
                                            </span>
                                            <!--end::Svg Icon-->
                                            <div class="d-flex flex-column">
                                                <div class="text-dark fw-bolder fs-1 mb-2 mt-5">{{ number_format($users->where('is_blocked', true)->count()) }}</div>
                                                <div class="text-muted fw-bold fs-6">Suspended Users</div>
                                            </div>
                                        </div>
                                        <!--end::Body-->
                                    </a>
                                    <!--end::Tiles Widget 5-->
                                </div>


                                <div class="col-md-4 p-5">
                                    <!--begin::Tiles Widget 5-->
                                    <a href="#" id="kt_drawer_chat_toggle" class="card card-xxl-stretch bg-body">
                                        <!--begin::Body-->
                                        <div class="card-body d-flex flex-column justify-content-between">
                                            <!--begin::Svg Icon | path: icons/duotune/general/gen002.svg-->
                                            <span class="svg-icon svg-icon-primary svg-icon-2hx ms-n1">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chat-dots-fill" viewBox="0 0 16 16">
                                                  <path d="M16 8c0 3.866-3.582 7-8 7a9.06 9.06 0 0 1-2.347-.306c-.584.296-1.925.864-4.181 1.234-.2.032-.352-.176-.273-.362.354-.836.674-1.95.77-2.966C.744 11.37 0 9.76 0 8c0-3.866 3.582-7 8-7s8 3.134 8 7zM5 8a1 1 0 1 0-2 0 1 1 0 0 0 2 0zm4 0a1 1 0 1 0-2 0 1 1 0 0 0 2 0zm3 1a1 1 0 1 0 0-2 1 1 0 0 0 0 2z"/>
                                                </svg>
                                            </span>
                                            <!--end::Svg Icon-->
                                            <div class="d-flex flex-column">
                                                <div class="text-dark fw-bolder fs-1 mb-2 mt-5">{{ number_format(\App\Models\Message::all()->count()) }}</div>
                                                <div class="text-muted fw-bold fs-6">Messages</div>
                                            </div>
                                        </div>
                                        <!--end::Body-->
                                    </a>
                                    <!--end::Tiles Widget 5-->
                                </div>

                            </div>

                            {{--                            Real Estate--}}
                            {{--                            <div class="row">--}}
                            {{--                                <div class="col-xxl-12 pt-5">--}}
                            {{--                                    <!--begin::Tiles Widget 5-->--}}
                            {{--                                    <a href="#" class="card card-xxl-stretch bg-primary">--}}
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
                            {{--                                                <div class="text-white fw-bolder fs-1 mb-2 mt-5">0</div>--}}
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
        </div>
        <!--end::Post-->
    </div>
@endsection

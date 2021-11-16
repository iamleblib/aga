@extends('layouts.guest')

@section('title', 'Investment Log')
@section('content')

    <div class="toolbar py-5 py-lg-15" id="kt_toolbar">
        <!--begin::Container-->
        <div id="kt_toolbar_container" class="container-xxl d-flex flex-stack flex-wrap">
            <!--begin::Page title-->
            <div class="page-title d-flex flex-column me-3">
                <!--begin::Title-->
                <h1 class="d-flex text-white fw-bolder my-1 fs-3">Investment Log</h1>
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
                    <li class="breadcrumb-item text-white opacity-75">Investment Log</li>
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

                @include('partials.guest.back')
                <a href="#" class="btn btn-bg-white btn-active-color-primary m-3" data-bs-toggle="modal" data-bs-target="#kt_modal_create_app" id="kt_toolbar_primary_button">Top Up</a>
                <!--end::Button-->
            </div>
            <!--end::Actions-->
        </div>
        <!--end::Container-->
    </div>

    <div id="kt_content_container" class="d-flex flex-column-fluid align-items-start container-xxl">
        <!--begin::Post-->
        <div class="content flex-row-fluid" id="kt_content">
            <!--begin::Card-->
            <div class="card">
                <!--begin::Card header-->
                <div class="card-header border-0 pt-6">
                    <!--begin::Card title-->
                    <div class="card-title">
                        <!--begin::Search-->
                        <div class="d-flex align-items-center position-relative my-1">
                            <!--begin::Svg Icon | path: icons/duotune/general/gen021.svg-->
                            <span class="svg-icon svg-icon-1 position-absolute ms-6">
												<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
													<rect opacity="0.5" x="17.0365" y="15.1223" width="8.15546" height="2" rx="1" transform="rotate(45 17.0365 15.1223)" fill="black"></rect>
													<path d="M11 19C6.55556 19 3 15.4444 3 11C3 6.55556 6.55556 3 11 3C15.4444 3 19 6.55556 19 11C19 15.4444 15.4444 19 11 19ZM11 5C7.53333 5 5 7.53333 5 11C5 14.4667 7.53333 17 11 17C14.4667 17 17 14.4667 17 11C17 7.53333 14.4667 5 11 5Z" fill="black"></path>
												</svg>
											</span>
                            <!--end::Svg Icon-->
                            <input type="text" data-kt-user-table-filter="search" class="form-control form-control-solid w-250px ps-14" placeholder="Search user">
                        </div>
                        <!--end::Search-->
                    </div>
                    <!--begin::Card title-->
                    <!--begin::Card toolbar-->
                    <div class="card-toolbar">
                        <!--begin::Toolbar-->
                        <div class="d-flex justify-content-end" data-kt-user-table-toolbar="base">
                            <!--begin::Filter-->
                            <button type="button" class="btn btn-light-primary me-3" data-kt-menu-trigger="click" data-kt-menu-placement="top-end">
                                <!--begin::Svg Icon | path: icons/duotune/general/gen031.svg-->
                                <span class="svg-icon svg-icon-2">
												<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
													<path d="M19.0759 3H4.72777C3.95892 3 3.47768 3.83148 3.86067 4.49814L8.56967 12.6949C9.17923 13.7559 9.5 14.9582 9.5 16.1819V19.5072C9.5 20.2189 10.2223 20.7028 10.8805 20.432L13.8805 19.1977C14.2553 19.0435 14.5 18.6783 14.5 18.273V13.8372C14.5 12.8089 14.8171 11.8056 15.408 10.964L19.8943 4.57465C20.3596 3.912 19.8856 3 19.0759 3Z" fill="black"></path>
												</svg>
											</span>
                                <!--end::Svg Icon-->Filter</button>
                            <!--begin::Menu 1-->
                            <div class="menu menu-sub menu-sub-dropdown w-300px w-md-325px" data-kt-menu="true">
                                <!--begin::Header-->
                                <div class="px-7 py-5">
                                    <div class="fs-5 text-dark fw-bolder">Filter Options</div>
                                </div>
                                <!--end::Header-->
                                <!--begin::Separator-->
                                <div class="separator border-gray-200"></div>
                                <!--end::Separator-->
                                <!--begin::Content-->
                                <div class="px-7 py-5" data-kt-user-table-filter="form">
                                    <!--begin::Input group-->
                                    <div class="mb-10">
                                        <label class="form-label fs-6 fw-bold">Status:</label>
                                        <select class="form-select form-select-solid fw-bolder select2-hidden-accessible" data-kt-select2="true" data-placeholder="Select option" data-allow-clear="true" data-kt-user-table-filter="role" data-hide-search="true" data-select2-id="select2-data-10-wugt" tabindex="-1" aria-hidden="true">
                                            <option data-select2-id="select2-data-12-q72w"></option>
                                            <option value="Processed">Processed</option>
                                            <option value="Pending">Pending</option>
                                            <option value="Decline">Decline</option>
                                        </select>

                                    </div>
                                    <!--end::Input group-->
                                    <!--begin::Input group-->

                                    <!--end::Input group-->
                                    <!--begin::Actions-->
                                    <div class="d-flex justify-content-end">
                                        <button type="reset" class="btn btn-light btn-active-light-primary fw-bold me-2 px-6" data-kt-menu-dismiss="true" data-kt-user-table-filter="reset">Reset</button>
                                        <button type="submit" class="btn btn-primary fw-bold px-6" data-kt-menu-dismiss="true" data-kt-user-table-filter="filter">Apply</button>
                                    </div>
                                    <!--end::Actions-->
                                </div>
                                <!--end::Content-->
                            </div>
                            <!--end::Menu 1-->
                            <!--end::Filter-->
                        </div>
                        <!--end::Toolbar-->
                        <!--begin::Group actions-->
                        <div class="d-flex justify-content-end align-items-center d-none" data-kt-user-table-toolbar="selected">
                            <div class="fw-bolder me-5">
                                <span class="me-2" data-kt-user-table-select="selected_count"></span>Selected</div>
                            <button type="button" class="btn btn-danger" data-kt-user-table-select="delete_selected">Hide Selected</button>
                        </div>
                        <!--end::Group actions-->
                    </div>
                    <!--end::Card toolbar-->
                </div>
                <!--end::Card header-->
                <!--begin::Card body-->
                <div class="card-body pt-0">
                @include('alerts')
                <!--begin::Table-->
                    <div id="kt_table_users_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer">
                        <div class="">
                            <table class="table align-middle table-row-dashed fs-6 gy-5 dataTable no-footer" id="kt_table_users">
                                <!--begin::Table head-->
                                <thead>
                                <!--begin::Table row-->
                                <tr class="text-start text-muted fw-bolder fs-7 text-uppercase gs-0">
                                    <th class="w-10px pe-2 sorting_disabled" rowspan="1" colspan="1" aria-label="" style="width: 27px;">
                                        <div class="form-check form-check-sm form-check-custom form-check-solid me-3">
                                            <input class="form-check-input" type="checkbox" data-kt-check="true" data-kt-check-target="#kt_table_users .form-check-input" value="1">
                                        </div>
                                    </th>
                                    <th class="min-w-125px sorting" tabindex="0" aria-controls="kt_table_users" rowspan="1" colspan="1" aria-label="User: activate to sort column ascending" style="width: 209.234px;">User</th>
                                    <th class="min-w-125px sorting" tabindex="0" aria-controls="kt_table_users" rowspan="1" colspan="1" aria-label="Role: activate to sort column ascending" style="width: 125px;">Status</th>
                                    <th class="min-w-125px sorting" tabindex="0" aria-controls="kt_table_users" rowspan="1" colspan="1" aria-label="Last login: activate to sort column ascending" style="width: 125px;">Completed</th>
                                    <th class="min-w-125px sorting" tabindex="0" aria-controls="kt_table_users" rowspan="1" colspan="1" aria-label="Last login: activate to sort column ascending" style="width: 125px;">Amount</th>
                                    <th class="min-w-125px sorting" tabindex="0" aria-controls="kt_table_users" rowspan="1" colspan="1" aria-label="Joined Date: activate to sort column ascending" style="width: 125px;">Package</th>
                                    <th class="min-w-125px sorting" tabindex="0" aria-controls="kt_table_users" rowspan="1" colspan="1" aria-label="Joined Date: activate to sort column ascending" style="width: 125px;">Duration</th>
                                    <th class="min-w-125px sorting" tabindex="0" aria-controls="kt_table_users" rowspan="1" colspan="1" aria-label="User: activate to sort column ascending" style="width: 209.234px;">Reference ID</th>
                                    <th class="min-w-125px sorting" tabindex="0" aria-controls="kt_table_users" rowspan="1" colspan="1" aria-label="Joined Date: activate to sort column ascending" style="width: 125px;">Date</th>
                                    <th class="text-end min-w-100px sorting_disabled" rowspan="1" colspan="1" aria-label="Actions" style="width: 100px;">Actions</th></tr>
                                <!--end::Table row-->
                                </thead>
                                <!--end::Table head-->
                                <!--begin::Table body-->
                                <tbody class="text-gray-600 fw-bold">
                                <!--begin::Table row-->

                                @if($investments->count() > 0)
                                    @foreach($investments as $investment)
                                        <tr class="even">
                                            <!--begin::Checkbox-->
                                            <td>
                                                <div class="form-check form-check-sm form-check-custom form-check-solid">
                                                    <input class="form-check-input" type="checkbox" value="1">
                                                </div>
                                            </td>
                                            <!--end::Checkbox-->
                                            <!--begin::User=-->
                                            <td class="d-flex align-items-center">
                                                <!--begin:: Avatar -->
                                                <div class="symbol symbol-circle symbol-50px overflow-hidden me-3">
                                                    <a href="#">
                                                        <div class="symbol-label">
                                                            <img src="https://ui-avatars.com/api/?name={{ auth()->user()->username }}" alt="{{ auth()->user()->username }}" class="w-100">
                                                        </div>
                                                    </a>
                                                </div>
                                                <!--end::Avatar-->
                                                <!--begin::User details-->
                                                <div class="d-flex flex-column">
                                                    <a href="#" class="text-gray-800 text-hover-primary mb-1">{{ auth()->user()->name }}</a>
                                                    <span>{{ auth()->user()->email }}</span>
                                                </div>
                                                <!--begin::User details-->
                                            </td>
                                            <!--end::User=-->
                                            <!--begin::Role=-->
                                            <td>
                                                <div class="badge badge-@if($investment->status == 'pending')warning @elseif($investment->status == 'decline')danger @elseif($investment->status == 'processed')success @endif fw-bolder">{{ $investment->status }} <i class="fa fa-spinner fa-spin text-light"></i>
                                                </div>
                                            </td>

                                            <td>
                                                <div class="badge badge-@if($investment->completed === 0)warning @else success @endif"> hi </div>
                                            </td>
                                            <!--end::Role=-->
                                            <!--begin::Last login=-->
                                            <td data-order="$$$">
                                                <div class="badge badge-light fw-bolder">${{ number_format($investment->amount) }}</div>
                                            </td>
                                            <!--end::Last login=-->
                                            <!--begin::Two step=-->
                                            <!--end::Two step=-->
                                            <!--begin::Joined-->
                                            <td data-order="#abcsd">{{ $investment->plan }}</td>
                                            <td data-order="#abcsd"><div class="badge badge-warning">@if($investment->plan == 'Enterprise') 3weeks @elseif($investment->plan == 'World Class') 4weeks @elseif($investment->plan == 'Unlimited') 5weeks @endif </div></td>
                                            <td data-order="#abcsd">{{ $investment->ref }}</td>
                                            <td data-order="2021-05-05T17:20:00+01:00">{{ $investment->created_at->toFormattedDateString() }}</td>
                                            <!--begin::Joined-->
                                            <!--begin::Action=-->
                                            <td class="text-end">
                                                <!--end::Menu item-->
                                                <!--begin::Menu item-->
                                                <a href="#" class="menu-link px-2 btn btn-light-success btn-sm" data-bs-toggle="modal" data-bs-target="#receipt{{ $investment->id }}"><i class="fa fa-eye"></i></a>
                                                <a href="#" class="menu-link px-3 btn btn-danger btn-sm" data-kt-users-table-filter="delete_row">Hide</a>
                                                <!--end::Menu-->
                                            </td>
                                            <!--end::Action=-->







                                            <div class="modal fade" id="receipt{{ $investment->id }}" tabindex="-1" aria-hidden="true">
                                                <!--begin::Modal dialog-->
                                                <div class="modal-dialog modal-dialog-centered mw-650px">
                                                    <!--begin::Modal content-->
                                                    <div class="modal-content">
                                                        <!--begin::Form-->
                                                        <form class="form" action="#" id="kt_modal_new_address_form">
                                                            <!--begin::Modal header-->
                                                            <div class="modal-header" id="kt_modal_new_address_header">
                                                                <!--begin::Modal title-->
                                                                <h1>Investment Details</h1>

                                                                <!--end::Modal title-->
                                                                <!--begin::Close-->
                                                                <div class="btn btn-sm btn-icon btn-active-color-success" data-bs-dismiss="modal">
                                                                    <!--begin::Svg Icon | path: icons/duotune/arrows/arr061.svg-->
                                                                    <span class="svg-icon svg-icon-1">
                                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                                            <rect opacity="0.5" x="6" y="17.3137" width="16" height="2" rx="1" transform="rotate(-45 6 17.3137)" fill="black" />
                                                                            <rect x="7.41422" y="6" width="16" height="2" rx="1" transform="rotate(45 7.41422 6)" fill="black" />
                                                                        </svg>
                                                                    </span>
                                                                    <!--end::Svg Icon-->
                                                                </div>
                                                                <!--end::Close-->
                                                            </div>
                                                            <!--end::Modal header-->
                                                            <!--begin::Modal body-->
                                                            <div class="modal-body py-10 px-lg-17">
                                                                <!--begin::Scroll-->
                                                                <div class="scroll-y me-n7 pe-7" id="kt_modal_new_address_scroll" data-kt-scroll="true" data-kt-scroll-activate="{default: false, lg: true}" data-kt-scroll-max-height="auto" data-kt-scroll-dependencies="#kt_modal_new_address_header" data-kt-scroll-wrappers="#kt_modal_new_address_scroll" data-kt-scroll-offset="300px">
                                                                    <!--begin::Notice-->
                                                                    <!--begin::Notice-->
                                                                    <div class="notice d-flex bg-light-success rounded border-success border border-dashed mb-9 p-6">
                                                                        <!--begin::Icon-->
                                                                        <!--begin::Svg Icon | path: icons/duotune/general/gen044.svg-->
                                                                        <span class="svg-icon svg-icon-2tx svg-icon-success me-4">
                                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                                            <rect opacity="0.3" x="2" y="2" width="20" height="20" rx="10" fill="black" />
                                                                            <rect x="11" y="14" width="7" height="2" rx="1" transform="rotate(-90 11 14)" fill="black" />
                                                                            <rect x="11" y="17" width="2" height="2" rx="1" transform="rotate(-90 11 17)" fill="black" />
                                                                        </svg>
															</span>
                                                                        <!--end::Svg Icon-->
                                                                        <!--end::Icon-->
                                                                        <!--begin::Wrapper-->
                                                                        <div class="d-flex flex-stack flex-grow-1">
                                                                            <!--begin::Content-->
                                                                            <div class="fw-bold">
                                                                                <h4 class="text-gray-900 fw-bolder">Receipt ({{ $investment->created_at->toFormattedDateString() }})</h4>
                                                                                <div class="fs-6 text-gray-700">Details of your investment
                                                                                    <br> With a unique Reference ID {{ $investment->ref }}
                                                                                   </div>
                                                                            </div>
                                                                            <!--end::Content-->
                                                                        </div>
                                                                        <!--end::Wrapper-->
                                                                    </div>
                                                                    <!--end::Notice-->
                                                                    <!--end::Notice-->
                                                                    <!--begin::Input group-->
                                                                    <div class="row mb-5">
                                                                        <!--begin::Col-->
                                                                        <div class="col-md-6 fv-row">
                                                                            <!--begin::Label-->
                                                                            <label class="required fs-5 fw-bold mb-2">Investment Package</label>
                                                                            <!--end::Label-->
                                                                            <!--begin::Input-->
                                                                            <p class="btn btn-light-success btn-sm">{{ $investment->plan }}</p>
                                                                            <!--end::Input-->
                                                                        </div>
                                                                        <!--end::Col-->
                                                                        <!--begin::Col-->
                                                                        <div class="col-md-6 fv-row">
                                                                            <!--end::Label-->
                                                                            <label class="required fs-5 fw-bold mb-2">Amount Invested</label>
                                                                            <!--end::Label-->
                                                                            <!--end::Input-->
                                                                            <p>${{ number_format($investment->amount) }}</p><!--end::Input-->
                                                                        </div>

                                                                        <!--end::Col-->
                                                                    </div>
                                                                    <!--end::Input group-->
                                                                    <!--begin::Input group-->

                                                                    <!--end::Input group-->
                                                                    <!--begin::Input group-->

                                                                    <!--end::Input group-->
                                                                    <!--begin::Input group-->
                                                                    <div class="row g-9 mb-5">
                                                                        <!--begin::Col-->
                                                                        <div class="col-6 fv-row">
                                                                            <!--begin::Label-->
                                                                            <label class="fs-5 fw-bold mb-2 required">Duration</label>
                                                                            <!--end::Label-->
                                                                            <!--begin::Input-->
                                                                            <p>@if($investment->plan == 'Enterprise') 3weeks @elseif($investment->plan == 'World Class') 4weeks @elseif($investment->plan == 'Unlimited') 5weeks @endif </p><!--end::Input-->
                                                                            <!--end::Input-->
                                                                        </div>
                                                                        <!--end::Col-->
                                                                        <!--begin::Col-->
                                                                        <div class="col-6 fv-row">
                                                                            <!--begin::Label-->
                                                                            <label class="fs-5 fw-bold mb-2 required">Total Earning</label>
                                                                            <!--end::Label-->
                                                                            <!--begin::Input-->
                                                                            <p>@if($investment->plan == 'Enterprise') ${{ number_format($investment->amount /100 * 10 * 3) }} @elseif($investment->plan == 'World Class') ${{ number_format($investment->amount  /100 * 15* 4) }} @elseif($investment->plan == 'Unlimited') ${{ number_format($investment->amount  /100 * 20 * 5) }} @endif</p>
                                                                            <!--end::Input-->
                                                                        </div>

                                                                        <div class="col-6 fv-row">
                                                                            <!--begin::Label-->
                                                                            <label class="fs-5 fw-bold mb-2 required">Weekly Earning</label>
                                                                            <!--end::Label-->
                                                                            <!--begin::Input-->
                                                                            <p>@if($investment->plan == 'Enterprise') ${{ number_format($investment->amount  /100 * 10) }} @elseif($investment->plan == 'World Class') ${{ number_format($investment->amount  /100 * 15) }} @elseif($investment->plan == 'Unlimited') ${{ number_format($investment->amount  /100 * 20) }} @endif</p>
                                                                            <!--end::Input-->
                                                                        </div>

                                                                        <div class="col-6 fv-row">
                                                                            <!--begin::Label-->
                                                                            <label class="fs-5 fw-bold mb-2 required">Next Payment</label>
                                                                            <!--end::Label-->
                                                                            <!--begin::Input-->
                                                                            @if ($investment->completed)
                                                                                <p class="btn btn-light-success btn-sm">{{ __('Investment Completed') }} <i class="fa fa-check"></i></p>
                                                                            @else
                                                                                <p>{{ $investment->updated_at->addWeek()->toFormattedDateString() }}</p>
                                                                            @endif

                                                                            <!--end::Input-->
                                                                        </div>
                                                                        <!--end::Col-->
                                                                    </div>

                                                                    <div class="row g-9 mb-5">
                                                                        <!--begin::Col-->
                                                                        <!--end::Col-->
                                                                        <!--begin::Col-->
                                                                        <div class="col-md-12 fv-row">
                                                                            <!--begin::Label-->
                                                                            <label class="fs-5 fw-bold mb-2 required">Investment Status</label>
                                                                            <!--end::Label-->
                                                                            <!--begin::Input-->
                                                                            <p class="fs-7 fw-bold alert alert-@if($investment->status == 'pending')warning @elseif($investment->status == 'decline')danger @elseif($investment->status == 'processed')success @endif fw-bolder">Your Investment is {{ $investment->status }} <i class="fa fa-spinner fa-spin"></i></p>
                                                                            <!--end::Input-->
                                                                        </div>
                                                                        <!--end::Col-->
                                                                    </div>
                                                                    <!--end::Input group-->
                                                                    <!--begin::Input group-->
                                                                    <div class="fv-row mb-5">
                                                                        <!--begin::Wrapper-->

                                                                        <!--begin::Wrapper-->
                                                                    </div>
                                                                    <!--end::Input group-->
                                                                </div>
                                                                <!--end::Scroll-->
                                                            </div>
                                                            <!--end::Modal body-->
                                                            <!--begin::Modal footer-->
                                                            <div class="modal-footer flex-center">
                                                                <!--begin::Button-->
                                                                <!--end::Button-->
                                                                <!--begin::Button-->
                                                                <button type="submit" data-bs-dismiss="modal" class="btn btn-success btn-block">
                                                                    <span class="indicator-label">Alright</span>
                                                                    <span class="indicator-progress">Please wait...
														            <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                                                                </button>
                                                                <!--end::Button-->
                                                            </div>
                                                            <!--end::Modal footer-->
                                                        </form>
                                                        <!--end::Form-->
                                                    </div>
                                                </div>
                                        </tr>


                                    @endforeach
                                @endif

                                </tbody>
                                <!--end::Table body-->
                            </table>
                        </div>
                    </div>

                    <!--end::Table-->
                </div>
                <!--end::Card body-->
            </div>
            <!--end::Card-->
        </div>
        <!--end::Post-->
    </div>

@endsection

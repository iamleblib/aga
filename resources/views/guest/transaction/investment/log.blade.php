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
                <a href="#" class="btn btn-bg-white btn-active-color-primary m-3" data-bs-toggle="modal" data-bs-target="#kt_modal_create_app" id="kt_toolbar_primary_button">
                    <span class="menu-icon">
                                    <!--begin::Svg Icon | path: /icons/duotune/general/gen002.svg-->
                        <span class="svg-icon svg-icon-2">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-node-plus-fill" viewBox="0 0 16 16">
                          <path d="M11 13a5 5 0 1 0-4.975-5.5H4A1.5 1.5 0 0 0 2.5 6h-1A1.5 1.5 0 0 0 0 7.5v1A1.5 1.5 0 0 0 1.5 10h1A1.5 1.5 0 0 0 4 8.5h2.025A5 5 0 0 0 11 13zm.5-7.5v2h2a.5.5 0 0 1 0 1h-2v2a.5.5 0 0 1-1 0v-2h-2a.5.5 0 0 1 0-1h2v-2a.5.5 0 0 1 1 0z"/>
                        </svg>
                    </span>
                        Top Up
                </a>
                <a href="{{route('investment.guest.index')}}" class="btn btn-bg-white btn-active-color-primary m-3">
                    <span class="menu-icon">
                                <!--begin::Svg Icon | path: /icons/duotune/general/gen002.svg-->
                        <span class="svg-icon svg-icon-2">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-graph-up-arrow" viewBox="0 0 16 16">
                              <path fill-rule="evenodd" d="M0 0h1v15h15v1H0V0Zm10 3.5a.5.5 0 0 1 .5-.5h4a.5.5 0 0 1 .5.5v4a.5.5 0 0 1-1 0V4.9l-3.613 4.417a.5.5 0 0 1-.74.037L7.06 6.767l-3.656 5.027a.5.5 0 0 1-.808-.588l4-5.5a.5.5 0 0 1 .758-.06l2.609 2.61L13.445 4H10.5a.5.5 0 0 1-.5-.5Z"/>
                            </svg>
                        </span>
                    </span>
                        Add
                </a>
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
                                    <th class="min-w-125px sorting" tabindex="0" aria-controls="kt_table_users" rowspan="1" colspan="1" aria-label="Last login: activate to sort column ascending" style="width: 125px;">Amount</th>
                                    <th class="min-w-125px sorting" tabindex="0" aria-controls="kt_table_users" rowspan="1" colspan="1" aria-label="Joined Date: activate to sort column ascending" style="width: 125px;">Package</th>
                                    <th class="min-w-125px sorting" tabindex="0" aria-controls="kt_table_users" rowspan="1" colspan="1" aria-label="Joined Date: activate to sort column ascending" style="width: 125px;">Duration</th>
                                    <th class="min-w-125px sorting" tabindex="0" aria-controls="kt_table_users" rowspan="1" colspan="1" aria-label="User: activate to sort column ascending" style="width: 209.234px;">Reference ID</th>
                                    <th class="min-w-125px sorting" tabindex="0" aria-controls="kt_table_users" rowspan="1" colspan="1" aria-label="Last login: activate to sort column ascending" style="width: 125px;">Completed</th>
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
                                                <div class="badge badge-@if($investment->status == 'pending')warning @elseif($investment->status == 'decline')danger @elseif($investment->status == 'processed')success @endif fw-bolder">{{ $investment->status }}
                                                    <i class="@if($investment->status == 'pending')fa fa-spinner fa-spin @elseif($investment->status == 'decline')fa fa-ban @elseif($investment->status == 'processed') fa fa-spinner fa-spin @endif text-light"></i>
                                                </div>
                                            </td>
                                            <!--end::Role=-->
                                            <!--begin::Last login=-->
                                            <td data-order="$$$">
                                                <div class="alert alert-light fw-bolder">${{ number_format($investment->amount) }}</div>
                                            </td>
                                            <!--end::Last login=-->
                                            <!--begin::Two step=-->
                                            <!--end::Two step=-->
                                            <!--begin::Joined-->
                                            <td data-order="#abcsd">
                                                @if($investment->plan == 'Enterprise'){{ $investment->plan }}
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-bookmark-star-fill" viewBox="0 0 16 16">
                                                        <path fill-rule="evenodd" d="M2 15.5V2a2 2 0 0 1 2-2h8a2 2 0 0 1 2 2v13.5a.5.5 0 0 1-.74.439L8 13.069l-5.26 2.87A.5.5 0 0 1 2 15.5zM8.16 4.1a.178.178 0 0 0-.32 0l-.634 1.285a.178.178 0 0 1-.134.098l-1.42.206a.178.178 0 0 0-.098.303L6.58 6.993c.042.041.061.1.051.158L6.39 8.565a.178.178 0 0 0 .258.187l1.27-.668a.178.178 0 0 1 .165 0l1.27.668a.178.178 0 0 0 .257-.187L9.368 7.15a.178.178 0 0 1 .05-.158l1.028-1.001a.178.178 0 0 0-.098-.303l-1.42-.206a.178.178 0 0 1-.134-.098L8.16 4.1z"/>
                                                    </svg>
                                                @elseif($investment->plan == 'World Class'){{ $investment->plan }}
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-bookmark-star-fill" viewBox="0 0 16 16">
                                                        <path fill-rule="evenodd" d="M2 15.5V2a2 2 0 0 1 2-2h8a2 2 0 0 1 2 2v13.5a.5.5 0 0 1-.74.439L8 13.069l-5.26 2.87A.5.5 0 0 1 2 15.5zM8.16 4.1a.178.178 0 0 0-.32 0l-.634 1.285a.178.178 0 0 1-.134.098l-1.42.206a.178.178 0 0 0-.098.303L6.58 6.993c.042.041.061.1.051.158L6.39 8.565a.178.178 0 0 0 .258.187l1.27-.668a.178.178 0 0 1 .165 0l1.27.668a.178.178 0 0 0 .257-.187L9.368 7.15a.178.178 0 0 1 .05-.158l1.028-1.001a.178.178 0 0 0-.098-.303l-1.42-.206a.178.178 0 0 1-.134-.098L8.16 4.1z"/>
                                                    </svg>
                                                @elseif($investment->plan == 'Unlimited'){{ $investment->plan }}
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-award-fill" viewBox="0 0 16 16">
                                                        <path d="m8 0 1.669.864 1.858.282.842 1.68 1.337 1.32L13.4 6l.306 1.854-1.337 1.32-.842 1.68-1.858.282L8 12l-1.669-.864-1.858-.282-.842-1.68-1.337-1.32L2.6 6l-.306-1.854 1.337-1.32.842-1.68L6.331.864 8 0z"/>
                                                        <path d="M4 11.794V16l4-1 4 1v-4.206l-2.018.306L8 13.126 6.018 12.1 4 11.794z"/>
                                                    </svg>
                                                @endif
                                            </td>
                                            <td data-order="#abcsd">
                                                @if($investment->plan == 'Enterprise')<div class="badge badge-warning"> 3weeks
                                                @elseif($investment->plan == 'World Class')<div class="badge badge-warning"> 4weeks
                                                @elseif($investment->plan == 'Unlimited')<div class="badge badge-success"> 5weeks @endif </div>
                                            </td>
                                            <td data-order="#abcsd">{{ $investment->ref }}</td>

                                            <td>
                                                <div class="badge badge-@if($investment->completed === 0)warning @else success @endif"> </div>
                                            </td>
                                            <td data-order="2021-05-05T17:20:00+01:00">{{ $investment->created_at->toFormattedDateString() }}</td>
                                            <!--begin::Joined-->
                                            <!--begin::Action=-->
                                            <td class="text-end">
                                                <!--end::Menu item-->
                                                <!--begin::Menu item-->
                                                <a href="#" class="menu-link px-2 btn btn-light-success btn-sm" data-bs-toggle="modal" data-bs-target="#receipt{{ $investment->id }}"><i class="fa fa-eye"></i></a>
                                                <a href="#" class="menu-link px-3 btn btn-danger btn-sm" data-kt-users-table-filter="delete_row"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-eye-slash-fill" viewBox="0 0 16 16">
                                                        <path d="m10.79 12.912-1.614-1.615a3.5 3.5 0 0 1-4.474-4.474l-2.06-2.06C.938 6.278 0 8 0 8s3 5.5 8 5.5a7.029 7.029 0 0 0 2.79-.588zM5.21 3.088A7.028 7.028 0 0 1 8 2.5c5 0 8 5.5 8 5.5s-.939 1.721-2.641 3.238l-2.062-2.062a3.5 3.5 0 0 0-4.474-4.474L5.21 3.089z"/>
                                                        <path d="M5.525 7.646a2.5 2.5 0 0 0 2.829 2.829l-2.83-2.829zm4.95.708-2.829-2.83a2.5 2.5 0 0 1 2.829 2.829zm3.171 6-12-12 .708-.708 12 12-.708.708z"/>
                                                    </svg>
                                                </a>
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

                                                                                @if($investment->plan == 'Enterprise')
                                                                                <p class="btn btn-light-warning btn-sm">{{ $investment->plan }}
                                                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-bookmark-star-fill" viewBox="0 0 16 16">
                                                                                    <path fill-rule="evenodd" d="M2 15.5V2a2 2 0 0 1 2-2h8a2 2 0 0 1 2 2v13.5a.5.5 0 0 1-.74.439L8 13.069l-5.26 2.87A.5.5 0 0 1 2 15.5zM8.16 4.1a.178.178 0 0 0-.32 0l-.634 1.285a.178.178 0 0 1-.134.098l-1.42.206a.178.178 0 0 0-.098.303L6.58 6.993c.042.041.061.1.051.158L6.39 8.565a.178.178 0 0 0 .258.187l1.27-.668a.178.178 0 0 1 .165 0l1.27.668a.178.178 0 0 0 .257-.187L9.368 7.15a.178.178 0 0 1 .05-.158l1.028-1.001a.178.178 0 0 0-.098-.303l-1.42-.206a.178.178 0 0 1-.134-.098L8.16 4.1z"/>
                                                                                </svg>
                                                                                @elseif($investment->plan == 'World Class')
                                                                                <p class="btn btn-light-warning btn-sm">{{ $investment->plan }}
                                                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-bookmark-star-fill" viewBox="0 0 16 16">
                                                                                    <path fill-rule="evenodd" d="M2 15.5V2a2 2 0 0 1 2-2h8a2 2 0 0 1 2 2v13.5a.5.5 0 0 1-.74.439L8 13.069l-5.26 2.87A.5.5 0 0 1 2 15.5zM8.16 4.1a.178.178 0 0 0-.32 0l-.634 1.285a.178.178 0 0 1-.134.098l-1.42.206a.178.178 0 0 0-.098.303L6.58 6.993c.042.041.061.1.051.158L6.39 8.565a.178.178 0 0 0 .258.187l1.27-.668a.178.178 0 0 1 .165 0l1.27.668a.178.178 0 0 0 .257-.187L9.368 7.15a.178.178 0 0 1 .05-.158l1.028-1.001a.178.178 0 0 0-.098-.303l-1.42-.206a.178.178 0 0 1-.134-.098L8.16 4.1z"/>
                                                                                </svg>
                                                                                @elseif($investment->plan == 'Unlimited')
                                                                                <p class="btn btn-light-success btn-sm">{{ $investment->plan }}
                                                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-award-fill" viewBox="0 0 16 16">
                                                                                    <path d="m8 0 1.669.864 1.858.282.842 1.68 1.337 1.32L13.4 6l.306 1.854-1.337 1.32-.842 1.68-1.858.282L8 12l-1.669-.864-1.858-.282-.842-1.68-1.337-1.32L2.6 6l-.306-1.854 1.337-1.32.842-1.68L6.331.864 8 0z"/>
                                                                                    <path d="M4 11.794V16l4-1 4 1v-4.206l-2.018.306L8 13.126 6.018 12.1 4 11.794z"/>
                                                                                </svg>
                                                                                @endif
                                                                            </p>
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

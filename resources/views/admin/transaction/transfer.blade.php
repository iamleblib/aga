@extends('layouts.admin')

@section('title', 'Transfers Made')

@section('content')
    <div class="toolbar py-5 py-lg-15" id="kt_toolbar">
        <!--begin::Container-->
        <div id="kt_toolbar_container" class="container-xxl d-flex flex-stack flex-wrap">
            <!--begin::Page title-->
            <div class="page-title d-flex flex-column me-3">
                <!--begin::Title-->
                <h1 class="d-flex text-white fw-bolder my-1 fs-3">All Transfers</h1>
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
                    <li class="breadcrumb-item text-white opacity-75">All Transfers</li>
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
        <div class="content flex-row-fluid" id="kt_content" data-select2-id="select2-data-kt_content">
            <!--begin::Card-->
            <div class="card" data-select2-id="select2-data-81-s3zy">
                <!--begin::Card header-->
                <div class="card-header border-0 pt-6" data-select2-id="select2-data-80-8j3u">
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
                            <input type="text" data-kt-customer-table-filter="search" class="form-control form-control-solid w-250px ps-15" placeholder="Search Customers">
                        </div>
                        <!--end::Search-->
                    </div>
                    <!--begin::Card title-->
                    <!--begin::Card toolbar-->
                    <div class="card-toolbar" data-select2-id="select2-data-79-dv2n">
                        <!--begin::Toolbar-->
                        <div class="d-flex justify-content-end" data-kt-customer-table-toolbar="base" data-select2-id="select2-data-78-kqup">
                            <!--begin::Filter-->
                            <button type="button" class="btn btn-light-primary me-3" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                                <!--begin::Svg Icon | path: icons/duotune/general/gen031.svg-->
                                <span class="svg-icon svg-icon-2">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                           <path d="M19.0759 3H4.72777C3.95892 3 3.47768 3.83148 3.86067 4.49814L8.56967 12.6949C9.17923 13.7559 9.5 14.9582 9.5 16.1819V19.5072C9.5 20.2189 10.2223 20.7028 10.8805 20.432L13.8805 19.1977C14.2553 19.0435 14.5 18.6783 14.5 18.273V13.8372C14.5 12.8089 14.8171 11.8056 15.408 10.964L19.8943 4.57465C20.3596 3.912 19.8856 3 19.0759 3Z" fill="black"></path>
                        </svg>
                     </span>
                                <!--end::Svg Icon-->Filter
                            </button>
                            <!--begin::Menu 1-->
                            <div class="menu menu-sub menu-sub-dropdown w-300px w-md-325px" data-kt-menu="true" id="kt-toolbar-filter" data-select2-id="select2-data-kt-toolbar-filter" style="">
                                <!--begin::Header-->
                                <div class="px-7 py-5">
                                    <div class="fs-4 text-dark fw-bolder">Filter Options</div>
                                </div>
                                <!--end::Header-->
                                <!--begin::Separator-->
                                <div class="separator border-gray-200"></div>
                                <!--end::Separator-->
                                <!--begin::Content-->
                                <div class="px-7 py-5">
                                    <!--begin::Input group-->
                                    <div class="mb-10" data-select2-id="select2-data-77-2yup">
                                        <!--begin::Label-->
                                        <label class="form-label fs-5 fw-bold mb-3">Joined Month:</label>
                                        <!--end::Label-->
                                        <!--begin::Input-->
                                        <select class="form-select form-select-solid fw-bolder select2-hidden-accessible" data-kt-select2="true" data-placeholder="Select option" data-allow-clear="true" data-kt-customer-table-filter="month" data-dropdown-parent="#kt-toolbar-filter" data-select2-id="select2-data-10-2mgv" tabindex="-1" aria-hidden="true">
                                            <option data-select2-id="select2-data-12-633u"></option>
                                            <option value="aug" data-select2-id="select2-data-83-7cvr">August</option>
                                            <option value="sep" data-select2-id="select2-data-84-dkr9">September</option>
                                            <option value="oct" data-select2-id="select2-data-85-bntq">October</option>
                                            <option value="nov" data-select2-id="select2-data-86-1x7d">November</option>
                                            <option value="dec" data-select2-id="select2-data-87-528f">December</option>
                                        </select>
                                        <span class="select2 select2-container select2-container--bootstrap5 select2-container--below" dir="ltr" data-select2-id="select2-data-11-vqk4" style="width: 100%;">
                           <span class="dropdown-wrapper" aria-hidden="true"></span></span>
                                        <!--end::Input-->
                                    </div>

                                    <div class="d-flex justify-content-end">
                                        <button type="reset" class="btn btn-light btn-active-light-primary me-2" data-kt-menu-dismiss="true" data-kt-customer-table-filter="reset">Reset</button>
                                        <button type="submit" class="btn btn-primary" data-kt-menu-dismiss="true" data-kt-customer-table-filter="filter">Apply</button>
                                    </div>
                                    <!--end::Actions-->
                                </div>
                                <!--end::Content-->
                            </div>

                        </div>
                        <!--end::Toolbar-->
                        <!--begin::Group actions-->
                        <div class="d-flex justify-content-end align-items-center d-none" data-kt-customer-table-toolbar="selected">
                            <div class="fw-bolder me-5">
                                <span class="me-2" data-kt-customer-table-select="selected_count"></span>Selected
                            </div>
                            <button type="button" class="btn btn-danger" data-kt-customer-table-select="delete_selected">Delete Selected</button>
                        </div>
                        <!--end::Group actions-->
                    </div>
                    <!--end::Card toolbar-->
                </div>
                <!--end::Card header-->
                <!--begin::Card body-->
                <div class="card-body pt-0">
                    <!--begin::Table-->
                    <div id="kt_customers_table_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer">
                        @if($transfers->count() > 0)
                            <div class="table-responsive">
                                <table class="table align-middle table-row-dashed fs-6 gy-5 dataTable no-footer" id="kt_customers_table">
                                    <!--begin::Table head-->
                                    <thead>
                                    <!--begin::Table row-->
                                    <tr class="text-start text-gray-400 fw-bolder fs-7 text-uppercase gs-0">
                                        <th class="w-10px pe-2 sorting_disabled" rowspan="1" colspan="1" aria-label="" style="width: 29.25px;">
                                            <div class="form-check form-check-sm form-check-custom form-check-solid me-3">
                                                <input class="form-check-input" type="checkbox" data-kt-check="true" data-kt-check-target="#kt_customers_table .form-check-input" value="1">
                                            </div>
                                        </th>
                                        <th class="min-w-125px sorting" tabindex="0" aria-controls="kt_customers_table" rowspan="1" colspan="1" aria-label="Customer Name: activate to sort column ascending" style="width: 156.781px;">Sender</th>
                                        <th class="min-w-125px sorting" tabindex="0" aria-controls="kt_customers_table" rowspan="1" colspan="1" aria-label="Customer Name: activate to sort column ascending" style="width: 156.781px;">Receiver</th>
                                        <th class="min-w-125px sorting" tabindex="0" aria-controls="kt_customers_table" rowspan="1" colspan="1" aria-label="Customer Name: activate to sort column ascending" style="width: 156.781px;">Ref</th>
                                        <th class="min-w-125px sorting" tabindex="0" aria-controls="kt_customers_table" rowspan="1" colspan="1" aria-label="Email: activate to sort column ascending" style="width: 204.734px;">Amount</th>
                                        <th class="min-w-125px sorting" tabindex="0" aria-controls="kt_customers_table" rowspan="1" colspan="1" aria-label="Company: activate to sort column ascending" style="width: 156.781px;">Status</th>
                                        <th class="min-w-125px sorting" tabindex="0" aria-controls="kt_customers_table" rowspan="1" colspan="1" aria-label="Created Date: activate to sort column ascending" style="width: 163.734px;">Created Date</th>
                                        <th class="text-end min-w-70px sorting_disabled" rowspan="1" colspan="1" aria-label="Actions" style="width: 118.438px;">Actions</th>
                                    </tr>
                                    <!--end::Table row-->
                                    </thead>
                                    <!--end::Table head-->
                                    <!--begin::Table body-->
                                    <tbody class="fw-bold text-gray-600">
                                    @foreach($transfers as $transfer)
                                        <tr class="even">
                                            <!--begin::Checkbox-->
                                            <td>
                                                <div class="form-check form-check-sm form-check-custom form-check-solid">
                                                    <input class="form-check-input" type="checkbox" value="1">
                                                </div>
                                            </td>
                                            <!--end::Checkbox-->
                                            <!--begin::Name=-->
                                            <td>
                                                <a href="#" class="text-gray-800 text-hover-primary mb-1">{{ $transfer->user->username }}</a>
                                            </td>

                                            <td>
                                                <a href="#" class="text-gray-800 text-hover-primary mb-1">{{ $transfer->receiver_username }}</a>
                                            </td>

                                            <td>
                                                <a href="#" class="text-gray-800 text-hover-primary mb-1 badge badge-light-success">{{ $transfer->ref }}</a>
                                            </td>
                                            <!--end::Name=-->
                                            <!--begin::Email=-->
                                            <td>
                                                <a href="#" class="text-gray-600 text-hover-primary mb-1">${{ number_format($transfer->amount) }}</a>
                                            </td>
                                            <!--end::Email=-->
                                            <!--begin::Company=-->
                                            <td><span class="badge @if($transfer->completed) badge-light-success @else badge-light-warning @endif ">@if($transfer->completed) Completed @else Running @endif</span></td>
                                            <!--end::Company=-->
                                            <!--begin::Date=-->
                                            <td data-order="2020-09-11T15:15:00+01:00">{{ $transfer->created_at->toFormattedDateString() }}</td>
                                            <!--end::Date=-->
                                            <td>
                                                @if($transfer->status == 'pending')

                                                    <a href="#" class="btn btn-sm btn-light btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="top-end">
                                                        Actions
                                                        <!--begin::Svg Icon | path: icons/duotune/arrows/arr072.svg-->
                                                        <span class="svg-icon svg-icon-5 m-0">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                           <path d="M11.4343 12.7344L7.25 8.55005C6.83579 8.13583 6.16421 8.13584 5.75 8.55005C5.33579 8.96426 5.33579 9.63583 5.75 10.05L11.2929 15.5929C11.6834 15.9835 12.3166 15.9835 12.7071 15.5929L18.25 10.05C18.6642 9.63584 18.6642 8.96426 18.25 8.55005C17.8358 8.13584 17.1642 8.13584 16.75 8.55005L12.5657 12.7344C12.2533 13.0468 11.7467 13.0468 11.4343 12.7344Z" fill="black"></path>
                                                        </svg>
                                                     </span>
                                                        <!--end::Svg Icon-->
                                                    </a>
                                                    <!--begin::Menu-->
                                                    <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-bold fs-7 w-125px py-4" data-kt-menu="true">
                                                        <!--begin::Menu item-->
                                                        <div class="menu-item px-3">
                                                            <a data-bs-toggle="modal" data-bs-target="#approve_transfer_{{ $transfer->id }}" class="menu-link px-3">Approve</a>
                                                        </div>
                                                        <div class="menu-item px-3">
                                                            <a data-bs-toggle="modal" data-bs-target="#decline_transfer_{{ $transfer->id }}" class="menu-link px-3">Decline</a>
                                                        </div>
                                                        <!--end::Menu item-->
                                                        <!--begin::Menu item-->
                                                        <!--end::Menu item-->
                                                    </div>
                                                @elseif($transfer->status == 'processed')
                                                    <div class="badge badge-success">Processed</div>
                                                @elseif($transfer->status == 'declined')
                                                    <div class="badge badge-danger">Declined</div>
                                                @endif
                                            </td>
                                        </tr>

                                        <div class="modal fade" id="approve_transfer_{{ $transfer->id }}" tabindex="-1" aria-hidden="true">
                                            <!--begin::Modal dialog-->
                                            <div class="modal-dialog modal-dialog-centered mw-800px">
                                                <!--begin::Modal content-->
                                                <div class="modal-content">
                                                    <!--begin::Modal header-->
                                                    <div class="modal-header pb-0 border-0 justify-content-end">
                                                        <!--begin::Close-->
                                                        <div class="btn btn-sm btn-icon btn-active-color-primary" data-bs-dismiss="modal">
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
                                                    <!--begin::Modal header-->
                                                    <!--begin::Modal body-->
                                                    <div class="modal-body scroll-y pt-0 pb-15">
                                                        <!--begin::Wrapper-->
                                                        <div class="mw-lg-600px mx-auto">
                                                            <!--begin::Heading-->
                                                            <div class="mb-13 text-center">
                                                                <!--begin::Title-->
                                                                <h1 class="mb-3">Approve Deposit</h1>
                                                            </div>
                                                            <!--end::Heading-->
                                                            <!--begin::Input group-->
                                                            <form id="kt_modal_update_rolsse_form" class="form" method="post" action="{{ route('admin.transfer.decline', $transfer->id) }}">
                                                                <!--begin::Notice-->
                                                                <!--begin::Notice-->
                                                                @csrf
                                                                <div class="notice d-flex bg-light-success rounded border-success border border-dashed mb-9 p-6">
                                                                        <span class="svg-icon svg-icon-2tx svg-icon-primary me-4">
                                                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                                                <rect opacity="0.3" x="2" y="2" width="20" height="20" rx="10" fill="black"></rect>
                                                                                <rect x="11" y="14" width="7" height="2" rx="1" transform="rotate(-90 11 14)" fill="black"></rect>
                                                                                <rect x="11" y="17" width="2" height="2" rx="1" transform="rotate(-90 11 17)" fill="black"></rect>
                                                                            </svg>
                                                                        </span>
                                                                    <div class="d-flex flex-stack flex-grow-1">
                                                                        <!--begin::Content-->
                                                                        <div class="row">
                                                                            <div class="col-8">
                                                                                <div class="fw-bold">
                                                                                    <div class="fs-6 text-gray-700">Confirm you want to approve this deposit!.</div>
                                                                                </div>
                                                                            </div>
                                                                            <input type="hidden" name="status" value="declined">
                                                                            <input type="hidden" name="amount" value="{{$transfer->amount}}">
                                                                            <input type="hidden" name="user_id" value="{{$transfer->user_id}}">

                                                                            <div class="col-4">
                                                                                <button type="submit" class="btn btn-success">Approve</button>
                                                                            </div>
                                                                        </div>
                                                                        <!--end::Content-->
                                                                    </div>
                                                                    <!--end::Wrapper-->
                                                                </div>

                                                                <!--end::Actions-->
                                                            </form>
                                                            <!--end::Input group-->
                                                        </div>
                                                        <!--end::Wrapper-->
                                                    </div>
                                                    <!--end::Modal body-->
                                                </div>
                                                <!--end::Modal content-->
                                            </div>
                                            <!--end::Modal dialog-->
                                        </div>
                                        <div class="modal fade" id="decline_transfer_{{ $transfer->id }}" tabindex="-1" aria-hidden="true">
                                            <!--begin::Modal dialog-->
                                            <div class="modal-dialog modal-dialog-centered mw-800px">
                                                <!--begin::Modal content-->
                                                <div class="modal-content">
                                                    <!--begin::Modal header-->
                                                    <div class="modal-header pb-0 border-0 justify-content-end">
                                                        <!--begin::Close-->
                                                        <div class="btn btn-sm btn-icon btn-active-color-primary" data-bs-dismiss="modal">
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
                                                    <!--begin::Modal header-->
                                                    <!--begin::Modal body-->
                                                    <div class="modal-body scroll-y pt-0 pb-15">
                                                        <!--begin::Wrapper-->
                                                        <div class="mw-lg-600px mx-auto">
                                                            <!--begin::Heading-->
                                                            <div class="mb-13 text-center">
                                                                <!--begin::Title-->
                                                                <h1 class="mb-3">Decline Deposit</h1>
                                                            </div>
                                                            <!--end::Heading-->
                                                            <!--begin::Input group-->
                                                            <form id="kt_modal_update_rolsse_form" class="form" method="post" action="{{ route('admin.transfer.decline', $transfer->id) }}">
                                                                <!--begin::Notice-->
                                                                <!--begin::Notice-->
                                                                @csrf
                                                                <div class="notice d-flex bg-light-danger rounded border-danger border border-dashed mb-9 p-6">
                                                                        <span class="svg-icon svg-icon-2tx svg-icon-primary me-4">
                                                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                                                <rect opacity="0.3" x="2" y="2" width="20" height="20" rx="10" fill="black"></rect>
                                                                                <rect x="11" y="14" width="7" height="2" rx="1" transform="rotate(-90 11 14)" fill="black"></rect>
                                                                                <rect x="11" y="17" width="2" height="2" rx="1" transform="rotate(-90 11 17)" fill="black"></rect>
                                                                            </svg>
                                                                        </span>
                                                                    <div class="d-flex flex-stack flex-grow-1">
                                                                        <!--begin::Content-->
                                                                        <div class="row">
                                                                            <div class="col-8">
                                                                                <div class="fw-bold">
                                                                                    <div class="fs-6 text-gray-700">Confirm you want to decline this deposit!.</div>
                                                                                </div>
                                                                            </div>
                                                                            <input type="hidden" name="status" value="declined">
                                                                            <input type="hidden" name="amount" value="{{$transfer->amount}}">
                                                                            <input type="hidden" name="user_id" value="{{$transfer->user_id}}">

                                                                            <div class="col-4">
                                                                                <button type="submit" class="btn btn-danger">Decline</button>
                                                                            </div>
                                                                        </div>
                                                                        <!--end::Content-->
                                                                    </div>
                                                                    <!--end::Wrapper-->
                                                                </div>

                                                                <!--end::Actions-->
                                                            </form>
                                                            <!--end::Input group-->
                                                        </div>
                                                        <!--end::Wrapper-->
                                                    </div>
                                                    <!--end::Modal body-->
                                                </div>
                                                <!--end::Modal content-->
                                            </div>
                                            <!--end::Modal dialog-->
                                        </div>

                                    @endforeach
                                    </tbody>
                                    <!--end::Table body-->
                                </table>
                            </div>
                        @else
                            <p class="text-center alert alert-danger">No Transfer Yet!</p>
                        @endif
                    </div>
                    <!--end::Table-->
                </div>
                <!--end::Card body-->
            </div>
        </div>
        <!--end::Post-->
    </div>


@endsection

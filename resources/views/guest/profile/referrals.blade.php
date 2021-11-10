<!--begin::Referral program-->
<div class="card mb-5 mb-xl-10">
    <!--begin::Body-->
    <div class="card-body py-10">
        <h2 class="fs-2x fw-bolder mb-0">Referral Program</h2>
        <!--begin::Overview-->
        <div class="row mb-10">
            <!--begin::Col-->
            <div class="col-xl-6 mb-15 mb-xl-0 p-5">
                <p class="text-gray-400 fs-4 fw-bold">Below is your up-line </p>
                <input disabled type="text" style="width: 200px" class="form-control" width="10px" name="search" value="investor: {{ auth()->user()->referral }}" />
            </div>
            <!--end::Col-->
            <!--begin::Col-->
            <div class="col-6">
                <p class="text-gray-400 fs-4 fw-bold ">Click on the below buttons to Share &amp; earn .</p>
                <!--end::Description-->
                <!--begin::Action-->
                <a href="#" class="btn btn-dark er fs-6 px-8 py-4" data-bs-toggle="modal" data-bs-target="#kt_modal_share_earn">Share &amp; Earn <i class="fa fa-share"></i> </a>

                <div class="modal fade" id="kt_modal_share_earn" tabindex="-1" aria-hidden="true">
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
                                        <h1 class="mb-3">Share &amp; Earn</h1>
                                        <!--end::Title-->
                                        <!--begin::Description-->
                                        <div class="text-muted fw-bold fs-5">If you need more info, please check
                                            <a href="#" class="link-primary fw-bolder">Compose</a>.</div>
                                        <!--end::Description-->
                                    </div>
                                    <!--end::Heading-->
                                    <!--begin::Input group-->
                                    <div class="mb-10">
                                        <!--begin::Title-->
                                        <h4 class="fs-5 fw-bold text-gray-800">Share my referral link with friends</h4>
                                        <!--end::Title-->
                                        <!--begin::Title-->
                                        <div class="d-flex">
                                            <input id="kt_referral_link_input" type="text" class="form-control form-control-solid me-3 flex-grow-1" name="search" value="{{ route('register') }}?user={{ auth()->user()->username }}" />
                                            <button id="kt_referral_program_link_copy_btn" class="btn btn-light fw-bolder flex-shrink-0" data-clipboard-target="#kt_referral_link_input"> <i class="fa fa-copy" style="font-size: 20px"></i></button>
                                        </div>
                                        <!--end::Title-->
                                    </div>
                                    <!--end::Input group-->
                                    <!--begin::Actions-->
                                    <div class="d-flex">
                                        <a href="#" class="btn btn-light w-100">
                                            <img alt="Logo" src="{{ asset('backend/assets/media/svg/social-logos/google.svg')}}" class="h-15px me-3" />Import Contacts</a>
                                        <a href="#" class="btn btn-light w-100 mx-6">
                                            <img alt="Logo" src="{{ asset('backend/assets/media/svg/social-logos/facebook.svg')}}" class="h-20px me-3" />Facebook</a>
                                        <a href="#" class="btn btn-light w-100">
                                            <img alt="Logo" src="{{ asset('backend/assets/media/svg/social-logos/twitter.svg')}}" class="h-20px me-3" />Twitter</a>
                                    </div>
                                    <!--end::Actions-->
                                    <!--begin::Input group-->
                                    <div class="d-flex align-items-center mt-10">
                                        <!--begin::Label-->
                                        <div class="flex-grow-1">
                                            <span class="fs-6 fw-bold text-gray-800 d-block">Share my link</span>
                                            <span class="fs-7 fw-bold text-muted">Always allow me to share my link</span>
                                        </div>
                                        <!--end::Label-->
                                        <!--begin::Switch-->
                                        <label class="form-check form-switch form-check-custom form-check-solid">
                                            <input class="form-check-input" type="checkbox" value="1" checked="checked" />
                                            <span class="form-check-label">Allow</span>
                                        </label>
                                        <!--end::Switch-->
                                    </div>
                                    <!--end::Input group-->
                                </div>
                                <!--end::Wrapper-->
                            </div>
                            <!--end::Modal body-->
                        </div>
                        <!--end::Modal content-->
                    </div>
                    <!--end::Modal dialog-->
            <!--end::Post-->
                </div>
                <!--end::Container-->





            </div>
            <!--end::Col-->
        </div>
        <!--end::Overview-->
        <!--begin::Stats-->
        <div class="row">
            <!--begin::Col-->
            <div class="col">
                <div class="card card-dashed flex-center min-w-175px my-3 p-6">
                    <span class="fs-4 fw-bold text-info pb-1 px-2">Referral Earnings</span>
                    <span class="fs-lg-2tx fw-bolder d-flex justify-content-center">$
												<span data-kt-countup="true" data-kt-countup-value="{{ auth()->user()->referral_bonus }}">{{ auth()->user()->referral_bonus }}</span></span>
                </div>
            </div>
            <!--end::Col-->
            <!--begin::Col-->
            <div class="col">
                <div class="card card-dashed flex-center min-w-175px my-3 p-6">
                    <span class="fs-4 fw-bold text-danger pb-1 px-2">Total Withdrawn</span>
                    <span class="fs-lg-2tx fw-bolder d-flex justify-content-center">$
												<span data-kt-countup="true" data-kt-countup-value="{{ $referralBonus }}&quot;">{{ $referralBonus }}</span></span>
                </div>
            </div>
            <!--end::Col-->
        </div>
        <!--end::Stats-->
        <!--begin::Info-->
        <p class="fs-5 fw-bold text-gray-600 py-6"></p>
        <!--end::Info-->
        <!--begin::Notice-->
        <div class="notice d-flex bg-light-primary rounded border-danger border border-dashed p-6">
            <!--begin::Icon-->
            <!--begin::Svg Icon | path: icons/duotune/finance/fin001.svg-->
            <span class="svg-icon svg-icon-2tx svg-icon-danger me-4">
											<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
												<path d="M20 19.725V18.725C20 18.125 19.6 17.725 19 17.725H5C4.4 17.725 4 18.125 4 18.725V19.725H3C2.4 19.725 2 20.125 2 20.725V21.725H22V20.725C22 20.125 21.6 19.725 21 19.725H20Z" fill="black" />
												<path opacity="0.3" d="M22 6.725V7.725C22 8.325 21.6 8.725 21 8.725H18C18.6 8.725 19 9.125 19 9.725C19 10.325 18.6 10.725 18 10.725V15.725C18.6 15.725 19 16.125 19 16.725V17.725H15V16.725C15 16.125 15.4 15.725 16 15.725V10.725C15.4 10.725 15 10.325 15 9.725C15 9.125 15.4 8.725 16 8.725H13C13.6 8.725 14 9.125 14 9.725C14 10.325 13.6 10.725 13 10.725V15.725C13.6 15.725 14 16.125 14 16.725V17.725H10V16.725C10 16.125 10.4 15.725 11 15.725V10.725C10.4 10.725 10 10.325 10 9.725C10 9.125 10.4 8.725 11 8.725H8C8.6 8.725 9 9.125 9 9.725C9 10.325 8.6 10.725 8 10.725V15.725C8.6 15.725 9 16.125 9 16.725V17.725H5V16.725C5 16.125 5.4 15.725 6 15.725V10.725C5.4 10.725 5 10.325 5 9.725C5 9.125 5.4 8.725 6 8.725H3C2.4 8.725 2 8.325 2 7.725V6.725L11 2.225C11.6 1.925 12.4 1.925 13.1 2.225L22 6.725ZM12 3.725C11.2 3.725 10.5 4.425 10.5 5.225C10.5 6.025 11.2 6.725 12 6.725C12.8 6.725 13.5 6.025 13.5 5.225C13.5 4.425 12.8 3.725 12 3.725Z" fill="black" />
											</svg>
										</span>
            <!--end::Svg Icon-->
            <!--end::Icon-->
            <!--begin::Wrapper-->
            <div class="d-flex flex-stack flex-grow-1 flex-wrap flex-md-nowrap">
                <!--begin::Content-->
                <div class="mb-3 mb-md-0 fw-bold">
                    <h4 class="text-gray-900 fw-bolder">Withdraw Your Bonus to your Crypto wallet</h4>
                    <div class="fs-6 text-gray-700 pe-7">Withdraw money sequencially to your cryptocurrency wallet. Commission is 2.5 - 5% per transaction under each downline</div>
                </div>
                <!--end::Content-->
                <!--begin::Action-->
                <a data-bs-toggle="modal" data-bs-target="#withdraw" class="btn btn-danger px-6 align-self-center text-nowrap">Withdraw Money</a>
                <!--end::Action-->
            </div>

            <div class="modal fade" id="withdraw" tabindex="-1" aria-hidden="true">
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
                                    <h1 class="mb-3">Withdraw Referral Bonus</h1>
                                </div>
                                <!--end::Heading-->
                                <!--begin::Input group-->
                                <form id="kt_modal_update_rolsse_form" class="form" method="post" action="{{ route('referral.withdraw') }}">
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
                                            <div class="row p-2">
                                                <div class="col-8">
                                                    <div class="fw-bold">
                                                        <div class="fs-6 text-gray-700">Are you sure you want to withdraw your referral bonus?</div>
                                                    </div>
                                                </div>
                                                <div class="col-4">
                                                    <button type="submit" class="btn btn-success"> Withdraw Now!</button>
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
            <!--end::Wrapper-->
        </div>
        <!--end::Notice-->
    </div>
    <!--end::Body-->
</div>
<!--end::Referral program-->

<!--begin::Referred users-->

<div class="card">
    <!--begin::Header-->
    <div class="card-header card-header-stretch">
        <!--begin::Title-->
        <div class="card-title">
            <h3>Referred Users</h3>
        </div>

    </div>
    <!--end::Header-->
    <!--begin::Tab content-->

    <!--begin::Table-->
    @if($referrals->getReferrals()->count() > 0)

    <div id="kt_customers_table_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer">
        <div class="table-responsive p-9">
            <table class="table align-middle table-row-dashed fs-6 gy-5 dataTable no-footer" id="kt_customers_table">
                <!--begin::Table head-->
                <thead>
                <!--begin::Table row-->
                <tr class="text-start text-gray-400 fw-bolder fs-7 text-uppercase gs-0">
                    <th class="w-10px pe-2 sorting_disabled" rowspan="1" colspan="1" aria-label="" style="width: 29.25px;">
                        <div class="form-check form-check-sm form-check-custom form-check-solid me-3">
                        </div>
                    </th>
                    <th class="min-w-125px sorting" tabindex="0" aria-controls="kt_customers_table" rowspan="1" colspan="1" aria-label="Customer Name: activate to sort column ascending" style="width: 156.781px;">Name</th>
                    <th class="min-w-125px sorting" tabindex="0" aria-controls="kt_customers_table" rowspan="1" colspan="1" aria-label="Email: activate to sort column ascending" style="width: 204.734px;">Email</th>
                    <th class="min-w-125px sorting" tabindex="0" aria-controls="kt_customers_table" rowspan="1" colspan="1" aria-label="Created Date: activate to sort column ascending" style="width: 163.734px;">Joined Date</th>
                </tr>
                <!--end::Table row-->
                </thead>
                <!--end::Table head-->
                <!--begin::Table body-->
                <tbody class="fw-bold text-gray-600">

                    @foreach($referrals->getReferrals() as $referral)
                        <tr class="even">
                            <!--begin::Checkbox-->
                            <td>
                                <div class="form-check form-check-sm form-check-custom form-check-solid">
                                </div>
                            </td>
                            <!--end::Checkbox-->
                            <!--begin::Name=-->
                            <td>
                                <a href="#" class="text-gray-800 text-hover-primary mb-1">{{ $referral->name }}</a>
                            </td>

                            <td>
                                <a href="mailto:{{ $referral->email }}" class="text-gray-800 text-hover-primary mb-1">{{ $referral->email }}</a>
                            </td>

                            <td>
                                <a href="#" class="text-gray-800 text-hover-primary mb-1">{{ $referral->created_at->toFormattedDateString() }}</a>
                            </td>

                        </tr>
                    @endforeach

                </tbody>
                <!--end::Table body-->
            </table>
        </div>
    </div>
    @else
        <div class="notice d-flex bg-light-warning rounded border-warning border border-dashed p-6 m-6">
            <!--begin::Icon-->
            <!--begin::Svg Icon | path: icons/duotune/general/gen044.svg-->
            <span class="svg-icon svg-icon-2tx svg-icon-warning me-4">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                <rect opacity="0.3" x="2" y="2" width="20" height="20" rx="10" fill="black"></rect>
                                <rect x="11" y="14" width="7" height="2" rx="1" transform="rotate(-90 11 14)" fill="black"></rect>
                                <rect x="11" y="17" width="2" height="2" rx="1" transform="rotate(-90 11 17)" fill="black"></rect>
                            </svg>
                        </span>
            <!--end::Svg Icon-->
            <!--end::Icon-->
            <!--begin::Wrapper-->
            <div class="d-flex flex-stack flex-grow-1">
                <!--begin::Content-->
                <div class="fw-bold">
                    <h4 class="text-gray-900 fw-bolder">No Referral Found</h4>
                    <ul class="nav nav-tabs nav-line-tabs nav-line-tabs-2x border-transparent fs-5 fw-bolder">

                        <div class="fs-6 text-gray-700">You recently do not have any referral (downline) on your list!
                            <a href="#" class="fw-bolder" data-bs-toggle="modal" data-bs-target="#kt_modal_share_earn">Refer a friend today</a>
                        </div>
                    </ul>

                </div>
                <!--end::Content-->
            </div>
            <!--end::Wrapper-->
        </div>
@endif
    <!--end::Table-->

    <!--end::Tab content-->
</div>
</div>
<!--end::Post-->
</div>


<!--end::Container-->

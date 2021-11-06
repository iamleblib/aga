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
                <input disabled type="text" style="width: 200px" class="form-control" width="10px" name="search" value="investor: {{ auth()->user()->username }}" />
            </div>
            <!--end::Col-->
            <!--begin::Col-->
            <div class="col-6">

                                    <!--end::Title-->
                                    <!--begin::Description-->
                                    <p class="text-gray-400 fs-4 fw-bold ">Click on the below buttons to Share &amp; earn .</p>
                                    <!--end::Description-->
                                    <!--begin::Action-->
                                    <a href="#" class="btn btn-dark er fs-6 px-8 py-4" data-bs-toggle="modal" data-bs-target="#kt_modal_share_earn">Share &amp; Earn <i class="fa fa-share"></i> </a>
                                    <!--end::Action-->
                                <!--end::Heading-->
                                <!--begin::Illustration-->
                                <!--end::Illustration-->
                        <!--end::Card-->
                        <!--begin::Modal - Share & Earn-->
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
                                                    <input id="kt_referral_link_input" type="text" class="form-control form-control-solid me-3 flex-grow-1" name="search" value="{{ route('register', auth()->user()->username) }}" />
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
												<span data-kt-countup="true" data-kt-countup-value="589">0</span></span>
                </div>
            </div>
            <!--end::Col-->
            <!--begin::Col-->
            <div class="col">
                <div class="card card-dashed flex-center min-w-175px my-3 p-6">
                    <span class="fs-4 fw-bold text-danger pb-1 px-2">Total Withdrawn</span>
                    <span class="fs-lg-2tx fw-bolder d-flex justify-content-center">$
												<span data-kt-countup="true" data-kt-countup-value="783&quot;">0</span></span>
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
                <a href="#" class="btn btn-danger px-6 align-self-center text-nowrap">Withdraw Money</a>
                <!--end::Action-->
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
        <!--end::Title-->
        <!--begin::Toolbar-->
        <div class="card-toolbar">
            <!--begin::Tab nav-->
            <ul class="nav nav-stretch fs-5 fw-bold nav-line-tabs border-transparent" role="tablist">
                <li class="nav-item" role="presentation">
                    <a id="kt_referrals_tab_1" class="nav-link text-active-gray-800 me-4 active" data-bs-toggle="tab" role="tab" href="#kt_referrals_1">2021</a>
                </li>
            </ul>
            <!--end::Tab nav-->
        </div>
        <!--end::Toolbar-->
    </div>
    <!--end::Header-->
    <!--begin::Tab content-->
    <div id="kt_referred_users_tab_content" class="tab-content">
        <!--begin::Tab panel-->
        <div id="kt_referrals_1" class="card-body p-0 tab-pane fade show active" role="tabpanel">
            <div class="table-responsive">
                <!--begin::Table-->
                <table class="table table-row-bordered table-flush align-middle gy-6">
                    <!--begin::Thead-->
                    <thead class="border-bottom border-gray-200 fs-6 fw-bolder bg-lighten">
                    <tr>
                        <th class="min-w-125px ps-9">Order ID</th>
                        <th class="min-w-125px px-0">User</th>
                        <th class="min-w-125px">Date</th>
                    </tr>
                    </thead>
                    <!--end::Thead-->
                    <!--begin::Tbody-->
                    <tbody class="fs-6 fw-bold text-gray-600">
                    <tr>
                        <td class="ps-9">678935899</td>
                        <td class="ps-0">
                            <a href="#" class="text-gray-600 text-hover-primary">Marcus Harris</a>
                        </td>
                        <td>Nov 24, 2020</td>
                    </tr>
                    <tr>
                        <td class="ps-9">578433345</td>
                        <td class="ps-0">
                            <a href="#" class="text-gray-600 text-hover-primary">Maria Garcia</a>
                        </td>
                        <td>Aug 10, 2020</td>
                    </tr>
                    <tr>
                        <td class="ps-9">678935899</td>
                        <td class="ps-0">
                            <a href="#" class="text-gray-600 text-hover-primary">Robert Smith</a>
                        </td>
                        <td>May 06, 2020</td>
                    </tr>
                    </tbody>
                    <!--end::Tbody-->
                </table>
                <!--end::Table-->
            </div>
        </div>
        <!--end::Tab panel-->
        <!--begin::Tab panel-->

        <!--end::Tab panel-->
        <!--begin::Tab panel-->

        <!--end::Tab panel-->
    </div>
    <!--begin::Toolbar-->
    <div class="toolbar py-5 py-lg-15" id="kt_toolbar">
        <!--begin::Container-->
        <div id="kt_toolbar_container" class="container-xxl d-flex flex-stack flex-wrap">
            <!--begin::Page title-->
            <div class="page-title d-flex flex-column me-3">
                <!--begin::Title-->
                <h1 class="d-flex text-white fw-bolder my-1 fs-3">Share &amp; Earn</h1>
                <!--end::Title-->
                <!--begin::Breadcrumb-->
                <ul class="breadcrumb breadcrumb-separatorless fw-bold fs-7 my-1">
                    <!--begin::Item-->
                    <li class="breadcrumb-item text-white opacity-75">
                        <a href="../../index-2.html" class="text-white text-hover-primary">Home</a>
                    </li>
                    <!--end::Item-->
                    <!--begin::Item-->
                    <li class="breadcrumb-item">
                        <span class="bullet bg-white opacity-75 w-5px h-2px"></span>
                    </li>
                    <!--end::Item-->
                    <!--begin::Item-->
                    <li class="breadcrumb-item text-white opacity-75">Crafted</li>
                    <!--end::Item-->
                    <!--begin::Item-->
                    <li class="breadcrumb-item">
                        <span class="bullet bg-white opacity-75 w-5px h-2px"></span>
                    </li>
                    <!--end::Item-->
                    <!--begin::Item-->
                    <li class="breadcrumb-item text-white opacity-75">Modals</li>
                    <!--end::Item-->
                    <!--begin::Item-->
                    <li class="breadcrumb-item">
                        <span class="bullet bg-white opacity-75 w-5px h-2px"></span>
                    </li>
                    <!--end::Item-->
                    <!--begin::Item-->
                    <li class="breadcrumb-item text-white opacity-75">General</li>
                    <!--end::Item-->
                    <!--begin::Item-->
                    <li class="breadcrumb-item">
                        <span class="bullet bg-white opacity-75 w-5px h-2px"></span>
                    </li>
                    <!--end::Item-->
                    <!--begin::Item-->
                    <li class="breadcrumb-item text-white opacity-75">Share &amp; Earn</li>
                    <!--end::Item-->
                </ul>
                <!--end::Breadcrumb-->
            </div>
            <!--end::Page title-->
            <!--begin::Actions-->
            <div class="d-flex align-items-center py-3 py-md-1">
                <!--begin::Wrapper-->
                <div class="me-4">
                    <!--begin::Menu-->
                    <a href="#" class="btn btn-custom btn-active-white btn-flex btn-color-white btn-active-color-primary fw-bolder" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                        <!--begin::Svg Icon | path: icons/duotune/general/gen031.svg-->
                        <span class="svg-icon svg-icon-5 svg-icon-gray-500 me-1">
										<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
											<path d="M19.0759 3H4.72777C3.95892 3 3.47768 3.83148 3.86067 4.49814L8.56967 12.6949C9.17923 13.7559 9.5 14.9582 9.5 16.1819V19.5072C9.5 20.2189 10.2223 20.7028 10.8805 20.432L13.8805 19.1977C14.2553 19.0435 14.5 18.6783 14.5 18.273V13.8372C14.5 12.8089 14.8171 11.8056 15.408 10.964L19.8943 4.57465C20.3596 3.912 19.8856 3 19.0759 3Z" fill="black" />
										</svg>
									</span>
                        <!--end::Svg Icon-->Filter</a>
                    <!--begin::Menu 1-->
                    <div class="menu menu-sub menu-sub-dropdown w-250px w-md-300px" data-kt-menu="true" id="kt_menu_617f414f55e50">
                        <!--begin::Header-->
                        <div class="px-7 py-5">
                            <div class="fs-5 text-dark fw-bolder">Filter Options</div>
                        </div>
                        <!--end::Header-->
                        <!--begin::Menu separator-->
                        <div class="separator border-gray-200"></div>
                        <!--end::Menu separator-->
                        <!--begin::Form-->
                        <div class="px-7 py-5">
                            <!--begin::Input group-->
                            <div class="mb-10">
                                <!--begin::Label-->
                                <label class="form-label fw-bold">Status:</label>
                                <!--end::Label-->
                                <!--begin::Input-->
                                <div>
                                    <select class="form-select form-select-solid" data-kt-select2="true" data-placeholder="Select option" data-dropdown-parent="#kt_menu_617f414f55e50" data-allow-clear="true">
                                        <option></option>
                                        <option value="1">Approved</option>
                                        <option value="2">Pending</option>
                                        <option value="2">In Process</option>
                                        <option value="2">Rejected</option>
                                    </select>
                                </div>
                                <!--end::Input-->
                            </div>
                            <!--end::Input group-->
                            <!--begin::Input group-->
                            <div class="mb-10">
                                <!--begin::Label-->
                                <label class="form-label fw-bold">Member Type:</label>
                                <!--end::Label-->
                                <!--begin::Options-->
                                <div class="d-flex">
                                    <!--begin::Options-->
                                    <label class="form-check form-check-sm form-check-custom form-check-solid me-5">
                                        <input class="form-check-input" type="checkbox" value="1" />
                                        <span class="form-check-label">Author</span>
                                    </label>
                                    <!--end::Options-->
                                    <!--begin::Options-->
                                    <label class="form-check form-check-sm form-check-custom form-check-solid">
                                        <input class="form-check-input" type="checkbox" value="2" checked="checked" />
                                        <span class="form-check-label">Customer</span>
                                    </label>
                                    <!--end::Options-->
                                </div>
                                <!--end::Options-->
                            </div>
                            <!--end::Input group-->
                            <!--begin::Input group-->
                            <div class="mb-10">
                                <!--begin::Label-->
                                <label class="form-label fw-bold">Notifications:</label>
                                <!--end::Label-->
                                <!--begin::Switch-->
                                <div class="form-check form-switch form-switch-sm form-check-custom form-check-solid">
                                    <input class="form-check-input" type="checkbox" value="" name="notifications" checked="checked" />
                                    <label class="form-check-label">Enabled</label>
                                </div>
                                <!--end::Switch-->
                            </div>
                            <!--end::Input group-->
                            <!--begin::Actions-->
                            <div class="d-flex justify-content-end">
                                <button type="reset" class="btn btn-sm btn-light btn-active-light-primary me-2" data-kt-menu-dismiss="true">Reset</button>
                                <button type="submit" class="btn btn-sm btn-primary" data-kt-menu-dismiss="true">Apply</button>
                            </div>
                            <!--end::Actions-->
                        </div>
                        <!--end::Form-->
                    </div>
                    <!--end::Menu 1-->
                    <!--end::Menu-->
                </div>
                <!--end::Wrapper-->
                <!--begin::Button-->
                <a href="#" class="btn btn-bg-white btn-active-color-primary" data-bs-toggle="modal" data-bs-target="#kt_modal_create_app" id="kt_toolbar_primary_button">Create</a>
                <!--end::Button-->
            </div>
            <!--end::Actions-->
        </div>
        <!--end::Container-->
    </div>
    <!--end::Toolbar-->
    <!--end::Tab content-->
</div>
<!--end::Referred users-->
</div>
<!--end::Post-->
</div>


<!--end::Container-->

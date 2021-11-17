<!--begin::Payment methods-->
<div class="card mb-5 mb-xl-10">
    <!--begin::Tab content-->
    <div id="kt_billing_payment_tab_content" class="card-body tab-content">
        <!--begin::Tab panel-->
        <div id="kt_billing_creditcard" class="tab-pane fade show active" role="tabpanel">
            <!--begin::Title-->
            <h3 class="mb-5">My Payment Gateways</h3>
            <!--end::Title-->
            <!--begin::Row-->

            @if(auth()->user()->adminWallet()->count() > 0)

                <div class="row gx-9 gy-6">
                    <!--begin::Col-->
                    @foreach($wallets as $wallet)
                        <div class="col-xl-6">
                            <!--begin::Card-->
                            <div class="card card-dashed h-xl-100 flex-row flex-stack flex-wrap p-6">
                                <!--begin::Info-->
                                <div class="d-flex flex-column py-2">
                                    <!--begin::Owner-->
                                    <div class="d-flex align-items-center fs-4 fw-bolder mb-5">{{ $wallet->name }}</div>
                                    <!--end::Owner-->
                                    <!--begin::Wrapper-->
                                    <div class="d-flex align-items-center">
                                        <!--begin::Icon-->
                                        @if($wallet->name == "Bitcoin (BTC)")
                                            <img src="{{ asset('backend/assets/media/icons/btc.png') }}" width="10%" alt="" class="me-4" />
                                        @elseif($wallet->name == "Etherium (ETH)")
                                            <img src="{{ asset('backend/assets/media/icons/eth.png') }}" width="10%" alt="" class="me-4" />
                                        @elseif($wallet->name == "USDC (USDC)")
                                            <img src="{{ asset('backend/assets/media/icons/usd.png') }}" width="10%" alt="" class="me-4" />
                                    @endif

                                    <!--end::Icon-->
                                        <!--begin::Details-->
                                        <div>
                                            <div class="fs-4 fw-bolder">Wallet address</div>
                                            <div class="fs-6 fw-bold text-gray-400">{{ $wallet->address }}</div>
                                        </div>
                                        <!--end::Details-->
                                    </div>
                                    <!--end::Wrapper-->
                                </div>
                                <!--end::Info-->
                                <!--begin::Actions-->
                                <div class="d-flex align-items-center py-2">

                                    <button class="btn btn-sm btn-light btn-active-light-primary" data-bs-toggle="modal" data-bs-target="#edit_{{ $wallet->id }}">Edit</button> &nbsp;
                                    <button class="btn btn-sm btn-light btn-active-light-primary" data-bs-toggle="modal" data-bs-target="#deletewallet_{{ $wallet->id }}">Delete</button>
                                </div>
                                <!--end::Actions-->
                            </div>
                            <!--end::Card-->
                        </div>

                        <div class="modal fade" id="edit_{{ $wallet->id }}" tabindex="-1" aria-hidden="true">
                            <!--begin::Modal dialog-->
                            <div class="modal-dialog modal-dialog-centered mw-650px">
                                <!--begin::Modal content-->
                                <div class="modal-content">
                                    <!--begin::Modal header-->
                                    <div class="modal-header">
                                        <!--begin::Modal title-->
                                        <h2>Edit {{ $wallet->name }} Wallet</h2>
                                        <!--end::Modal title-->
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
                                    <!--end::Modal header-->
                                    <!--begin::Modal body-->
                                    <div class="modal-body scroll-y mx-5 mx-xl-15 my-7">
                                        <!--begin::Form-->
                                        <form method="post" id="kt_modal_new_card_form" class="form" action="{{ route('admin.wallet.update', $wallet->id) }}">
                                        @csrf
                                        <!--begin::Input group-->
                                            <div class="d-flex flex-column mb-7 fv-row">
                                                <!--begin::Label-->
                                                <label class="d-flex align-items-center fs-6 fw-bold form-label mb-2">
                                                    <span class="required">Wallet Type</span>
                                                    <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip" title="Select a wallet address"></i>
                                                </label>
                                                <!--end::Label-->
                                                <select required name="name" class="form-select form-select-solid" data-control="select2" data-hide-search="true" data-placeholder="{{ $wallet->name }}">
                                                    <option value="{{ $wallet->name }}"> {{ $wallet->name }}</option>
                                                </select>
                                            </div>
                                            <!--end::Input group-->
                                            <!--begin::Input group-->
                                            <div class="d-flex flex-column mb-7 fv-row">
                                                <!--begin::Label-->
                                                <label class="fs-6 fw-bold form-label mb-2">
                                                    <span class="required">Wallet address</span>
                                                    <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip" title="Enter your wallet address"></i>
                                                </label>
                                                <!--end::Label-->
                                                <!--begin::Input wrapper-->
                                                <div class="position-relative">
                                                    <!--begin::Input-->
                                                    <input required type="text" value="{{ $wallet->address }}" class="form-control form-control-solid" placeholder="Enter wallet address" name="address" />
                                                    <!--end::Input-->

                                                </div>
                                                <!--end::Input wrapper-->
                                            </div>
                                            <!--end::Input group-->


                                            <div class="text-center pt-15">
                                                <button type="reset" id="kt_modal_new_card_cancel" class="btn btn-light me-3">Clear</button>
                                                <button type="submit" id="kt_modal_new_card_submit" class="btn btn-primary">
                                                    <span class="indicator-label">Update Wallet</span>
                                                    <span class="indicator-progress">Please wait...
														<span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                                                </button>
                                            </div>
                                            <!--end::Actions-->
                                        </form>
                                        <!--end::Form-->
                                    </div>
                                    <!--end::Modal body-->
                                </div>
                                <!--end::Modal content-->
                            </div>
                            <!--end::Modal dialog-->
                        </div>

                        <div class="modal fade" id="deletewallet_{{ $wallet->id }}" tabindex="-1" aria-hidden="true">
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
                                                <h1 class="mb-3">Delete {{ $wallet->name }} Wallet</h1>
                                            </div>
                                            <!--end::Heading-->
                                            <!--begin::Input group-->
                                            <form id="kt_modal_update_rolsse_form" class="form" method="post" action="{{ route('admin.delete.wallet', $wallet->id) }}">
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
                                                                        <div class="fs-6 text-gray-700">Confirm you want to delete this {{ $wallet->name }}'s wallet!.</div>
                                                                    </div>
                                                                </div>

                                                                <div class="col-4">
                                                                    <button type="submit" class="btn btn-danger">Delete</button>
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

                    <div class="col-xl-6">
                        <!--begin::Notice-->
                        <div class="notice d-flex bg-light-primary rounded border-primary border border-dashed h-lg-100 p-6">
                            <!--begin::Wrapper-->
                            <div class="d-flex flex-stack flex-grow-1 flex-wrap flex-md-nowrap">
                                <!--begin::Content-->
                                <div class="mb-3 mb-md-0 fw-bold">
                                    <h4 class="text-gray-900 fw-bolder">Important Note!</h4>
                                    <div class="fs-6 text-gray-700 pe-7">Please carefully read
                                        <a href="#" class="fw-bolder me-1">{{ env('APP_NAME')}} Terms</a>adding your new Cryptocurrency wallet </div>
                                </div>
                                <!--end::Content-->
                                <!--begin::Action-->
                                <a href="#" class="btn btn-primary px-6 align-self-center text-nowrap" data-bs-toggle="modal" data-bs-target="#kt_modal_new_card">Add Wallet Address</a>
                                <!--end::Action-->
                            </div>
                            <!--end::Wrapper-->
                        </div>
                        <!--end::Notice-->
                    </div>
                    <!--end::Col-->
                </div>

                <!--end::Row-->
            @else
                <div class="col-xl-12">
                    <!--begin::Notice-->
                    <div class="notice d-flex bg-light-primary rounded border-primary border border-dashed h-lg-100 p-6">
                        <!--begin::Wrapper-->
                        <div class="d-flex flex-stack flex-grow-1 flex-wrap flex-md-nowrap">
                            <!--begin::Content-->
                            <div class="mb-3 mb-md-0 fw-bold">
                                <h4 class="text-gray-900 fw-bolder">Important Note!</h4>
                                <div class="fs-6 text-gray-700 pe-7">Please carefully read
                                    <a href="#" class="fw-bolder me-1">No wallet address has been added</div>
                            </div>
                            <!--end::Content-->
                            <!--begin::Action-->
                            <a href="#" class="btn btn-primary px-6 align-self-center text-nowrap" data-bs-toggle="modal" data-bs-target="#kt_modal_new_card">Add Wallet Address</a>
                            <!--end::Action-->
                        </div>
                        <!--end::Wrapper-->
                    </div>
                    <!--end::Notice-->
                </div>
                <!--end::Col-->
            @endif


            {{--                Model for adding wallet address--}}
            <div class="modal fade" id="kt_modal_new_card" tabindex="-1" aria-hidden="true">
                <!--begin::Modal dialog-->
                <div class="modal-dialog modal-dialog-centered mw-650px">
                    <!--begin::Modal content-->
                    <div class="modal-content">
                        <!--begin::Modal header-->
                        <div class="modal-header">
                            <!--begin::Modal title-->
                            <h2>Add New Wallet</h2>
                            <!--end::Modal title-->
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
                        <!--end::Modal header-->
                        <!--begin::Modal body-->
                        <div class="modal-body scroll-y mx-5 mx-xl-15 my-7">
                            <!--begin::Form-->
                            <form method="post" id="kt_modal_new_card_form" class="form" action="{{ route('admin.wallet.store') }}">
                            @csrf
                            <!--begin::Input group-->
                                <div class="d-flex flex-column mb-7 fv-row">
                                    <!--begin::Label-->
                                    <label class="d-flex align-items-center fs-6 fw-bold form-label mb-2">
                                        <span class="required">Select Preferred Crypto currency</span>
                                        <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip" title="Select a wallet address"></i>
                                    </label>
                                    <!--end::Label-->
                                    <select required name="name" class="form-select form-select-solid" data-control="select2" data-hide-search="true" data-placeholder="-- Select Wallet Address --">
                                        <option></option>
                                        <option value="Bitcoin (BTC)"> Bitcoin gateway</option>
                                        <option value="Etherium (ETH)"> Etherium gateway</option>
                                        <option value="USDC (USDC)"> USDC gateway</option>
                                    </select>
                                </div>
                                <!--end::Input group-->
                                <!--begin::Input group-->
                                <div class="d-flex flex-column mb-7 fv-row">
                                    <!--begin::Label-->
                                    <label class="fs-6 fw-bold form-label mb-2">
                                        <span class="required">Wallet address</span>
                                        <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip" title="Enter your wallet address"></i>
                                    </label>
                                    <!--end::Label-->
                                    <!--begin::Input wrapper-->
                                    <div class="position-relative">
                                        <!--begin::Input-->
                                        <input required type="text" class="form-control form-control-solid" placeholder="Enter wallet address" name="address" />
                                        <!--end::Input-->
                                        <!--begin::Card logos-->
                                    {{--                                        <div class="position-absolute translate-middle-y top-50 end-0 me-5">--}}
                                    {{--                                            <img src="{{ asset('backend/assets/media/svg/card-logos/visa.svg') }}" alt="" class="h-25px" />--}}
                                    {{--                                            <img src="../assets/media/svg/card-logos/mastercard.svg" alt="" class="h-25px" />--}}
                                    {{--                                            <img src="../assets/media/svg/card-logos/american-express.svg" alt="" class="h-25px" />--}}
                                    {{--                                        </div>--}}
                                    <!--end::Card logos-->
                                    </div>
                                    <!--end::Input wrapper-->
                                </div>
                                <!--end::Input group-->

                                <!--begin::Input group-->
                                <div class="d-flex flex-stack">
                                    <!--begin::Label-->
                                    <div class="me-5">
                                        <label class="fs-6 fw-bold form-label">Confirm Wallet ID</label>
                                        <div class="fs-7 fw-bold text-muted">Check to confirm the above provided information is correctly placed</div>
                                    </div>
                                    <!--end::Label-->
                                    <!--begin::Switch-->
                                    <label class="form-check form-switch form-check-custom form-check-solid">
                                        <input class="form-check-input" type="checkbox" value="1" required/>
                                        <span class="form-check-label fw-bold text-muted">Correct</span>
                                    </label>
                                    <!--end::Switch-->
                                </div>
                                <!--end::Input group-->
                                <!--begin::Actions-->
                                <div class="text-center pt-15">
                                    <button type="reset" id="kt_modal_new_card_cancel" class="btn btn-light me-3">Clear</button>
                                    <button type="submit" id="kt_modal_new_card_submit" class="btn btn-primary">
                                        <span class="indicator-label">Add Wallet</span>
                                        <span class="indicator-progress">Please wait...
														<span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                                    </button>
                                </div>
                                <!--end::Actions-->
                            </form>
                            <!--end::Form-->
                        </div>
                        <!--end::Modal body-->
                    </div>
                    <!--end::Modal content-->
                </div>
                <!--end::Modal dialog-->
            </div>
            <!--end::Modal - New Card-->
            {{--                Model ends here--}}
        </div>
        <!--end::Tab panel-->
    </div>
    <!--end::Tab content-->
</div>

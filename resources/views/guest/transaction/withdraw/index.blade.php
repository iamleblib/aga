

<!--begin::Modal - Create App-->
<div class="modal fade" id="withdraw" tabindex="-1" aria-hidden="true">
    <!--begin::Modal dialog-->
    <div class="modal-dialog modal-dialog-centered mw-900px">
        <!--begin::Modal content-->
        <div class="modal-content">
            <!--begin::Modal header-->
            <div class="modal-header">
                <!--begin::Modal title-->
                <h2>Make Withdrawal Request</h2>
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
            <div class="modal-body py-lg-10 px-lg-10">
                @include('alerts')
                <!--begin::Stepper-->
                <div class="stepper stepper-pills stepper-column d-flex flex-column flex-xl-row flex-row-fluid" id="kt_modal_create_app_stepper">
                    <!--begin::Aside-->
                    <div class="d-flex justify-content-center justify-content-xl-start flex-row-auto w-100 w-xl-300px">
                        <!--begin::Nav-->
                        <div class="stepper-nav ps-lg-10">
                            <!--begin::Step 1-->
                            <div class="stepper-item current" data-kt-stepper-element="nav">
                                <!--end::Line-->
                                <!--begin::Icon-->
                                <div class="stepper-icon w-40px h-40px">
                                    <i class="stepper-check fas fa-check"></i>
                                    <span class="stepper-number">1</span>
                                </div>
                                <!--end::Icon-->
                                <!--begin::Label-->
                                <div class="stepper-label">
                                    <h3 class="stepper-title">Withdrawal Request</h3>
                                    <div class="stepper-desc">Place your Withdrawal request</div>
                                </div>
                                <!--end::Label-->
                            </div>
                            <!--end::Step 4-->
                        </div>
                        <!--end::Nav-->
                    </div>
                    <!--begin::Aside-->
                    <!--begin::Content-->
                    <div class="flex-row-fluid py-lg-5 px-lg-15">
                        <!--begin::Form-->
                        <form action="{{ route('withdraw.process') }}" method="post">
                            <!--begin::Step 1-->
                            <div class="current" data-kt-stepper-element="content">
                                <div class="w-100">
                                    <!--begin::Input group-->
                                    <div class="fv-row mb-10">
                                        <!--begin::Label-->
                                        <label class="required fs-5 fw-bold mb-2">Amount to withdraw</label>
                                        <!--end::Label-->
                                        <!--begin::Input-->
                                        <input type="number" autofocus required class="form-control form-control-lg form-control-solid" name="amount" placeholder="Amount to withdraw" value="" id="amountToInvest" />
                                        <!--end::Input-->
                                    </div>
                                    <!--end::Input group-->
                                    <!--begin::Input group-->
                                    <div class="fv-row">
                                        <!--begin::Label-->
                                        <label class="d-flex align-items-center fs-5 fw-bold mb-4">
                                            <span class="required">Select Payment Gateway</span>
                                            <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip" title="Select your app database engine"></i>
                                        </label>
                                        <!--end::Label-->
                                        <!--begin:Option-->

                                        @if(auth()->user()->wallet()->count() > 0)
                                            @foreach(auth()->user()->wallet as $wallet)
                                                <label class="d-flex flex-stack cursor-pointer mb-5">
                                                    <!--begin::Label-->
                                                    <span class="d-flex align-items-center me-2">
														<!--begin::Icon-->
                                                        @if($wallet->name == 'Bitcoin (BTC)')
                                                            <img src="{{ asset('backend/assets/media/icons/bitcoin.png')}}" width="10%" class="m-4" alt="">
                                                        @elseif($wallet->name == 'Etherium (ETH)')
                                                            <img src="{{ asset('backend/assets/media/icons/etherium.png')}}" width="10%" class="m-4" alt="">
                                                        @elseif($wallet->name == 'USDC (USDC)')
                                                            <img src="{{ asset('backend/assets/media/icons/usdc.png')}}" width="10%" class="m-4" alt="">
                                                        @endif
                                                    <!--end::Icon-->
                                                        <!--begin::Info-->
														<span class="d-flex flex-column">
															<span class="fw-bolder fs-6">{{ $wallet->name }}</span>
															<span class="fs-7 text-muted">{{ $wallet->address }}</span>
														</span>
                                                        <!--end::Info-->
													</span>
                                                    <!--end::Label-->
                                                    <!--begin::Input-->
                                                    <span class="form-check form-check-custom form-check-solid">
                                                        <input type="hidden" name="address" value="{{ $wallet->address }}" id="amountToInvest" />
														<input checked id="paymentMethod" class="form-check-input" type="radio" name="paymentMethod" value="{{ $wallet->name }}" />
													</span>
                                                    <!--end::Input-->
                                                </label>
                                            @endforeach
                                        @else
                                            <div class="col-xl-12">
                                                <!--begin::Notice-->
                                                <div class="notice d-flex bg-light-primary rounded border-primary border border-dashed h-lg-100 p-6">
                                                    <!--begin::Wrapper-->
                                                    <div class="d-flex flex-stack flex-grow-1 flex-wrap flex-md-nowrap">
                                                        <!--begin::Content-->
                                                        <div class="mb-3 mb-md-0 fw-bold">
                                                            <h4 class="text-gray-900 fw-bolder">Important Note!</h4>
                                                            <div class="fs-6 text-gray-700 pe-7">Please locate your billing tab to add wallet address</div>
                                                        </div>
                                                        <!--end::Content-->
                                                        <!--begin::Action-->
                                                        <a href="{{ route('profile.index') }}" class="btn btn-primary px-6 align-self-center text-nowrap">Add Wallet Address</a>
                                                        <!--end::Action-->
                                                    </div>
                                                    <!--end::Wrapper-->
                                                </div>
                                                <!--end::Notice-->
                                            </div>
                                        @endif

                                    </div>
                                    <!--end::Input group-->
                                </div>

                            </div>

                        @csrf

                        <!--end::Step 3-->

                            <!--begin::Step 5-->
                            <div data-kt-stepper-element="content">
                                <div class="w-100 text-center">
                                    <!--begin::Heading-->
                                    <h1 class="fw-bolder text-dark mb-3">Release!</h1>
                                    <!--end::Heading-->
                                    <!--begin::Description-->
                                    <div class="text-muted fw-bold fs-3">Submit your Withdrawal request.</div>
                                    <!--end::Description-->
                                    <!--begin::Illustration-->
                                    <div class="text-center px-4 py-15">
                                        <img src="{{ asset('backend/assets/media/illustrations/sigma-1/9.png') }}" alt="" class="mw-100 mh-300px" />
                                    </div>
                                    <!--end::Illustration-->
                                </div>
                            </div>
                            <!--end::Step 5-->
                            <!--begin::Actions-->
                            <div class="d-flex flex-stack pt-10"> <div class="me-2"></div><div>

                                    <div class="d-flex flex-stack pt-10 float-right">
                                        <!--begin::Wrapper-->
                                        <!--end::Wrapper-->
                                        <!--begin::Wrapper-->
                                        <div >
                                            <button type="submit" class="btn btn-lg btn-danger">Withdraw
                                                <!--begin::Svg Icon | path: icons/duotune/arrows/arr064.svg-->
                                                <span class="svg-icon svg-icon-3 ms-1 me-0">
												<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
													<rect opacity="0.5" x="18" y="13" width="13" height="2" rx="1" transform="rotate(-180 18 13)" fill="black" />
													<path d="M15.4343 12.5657L11.25 16.75C10.8358 17.1642 10.8358 17.8358 11.25 18.25C11.6642 18.6642 12.3358 18.6642 12.75 18.25L18.2929 12.7071C18.6834 12.3166 18.6834 11.6834 18.2929 11.2929L12.75 5.75C12.3358 5.33579 11.6642 5.33579 11.25 5.75C10.8358 6.16421 10.8358 6.83579 11.25 7.25L15.4343 11.4343C15.7467 11.7467 15.7467 12.2533 15.4343 12.5657Z" fill="black" />
												</svg>
											</span>
                                                <!--end::Svg Icon-->
                                            </button>
                                        </div>
                                        <!--end::Wrapper-->
                                    </div>
                                    <!--end::Actions-->
                        </form>
                        <!--end::Form-->
                    </div>
                    <!--end::Content-->
                </div>
                <!--end::Stepper-->
            </div>
            <!--end::Modal body-->
        </div>
        <!--end::Modal content-->
    </div>
    <!--end::Modal dialog-->
</div>
<!--end::Modal - Create App-->

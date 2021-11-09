@extends('layouts.guest')

@section('content')


<div class="toolbar py-5 py-lg-15" id="kt_toolbar">
        <!--begin::Container-->
        <div id="kt_toolbar_container" class="container-xxl d-flex flex-stack flex-wrap">
            <!--begin::Page title-->
            <div class="page-title d-flex flex-column me-3">
                <!--begin::Title-->
                <h1 class="d-flex text-white fw-bolder my-1 fs-3">Real Estate</h1>
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
                    <li class="breadcrumb-item text-white opacity-75">Purchase Property</li>
                    <!--end::Item-->
                </ul>
                <!--end::Breadcrumb-->
            </div>
            <!--end::Page title-->
            <!--begin::Actions-->
            <div class="d-flex align-items-center py-3 py-md-1">
                @include('partials.guest.back')
                <a href="#" class="btn btn-bg-white btn-active-color-primary m-3" data-bs-toggle="modal" data-bs-target="#kt_modal_create_app" id="kt_toolbar_primary_button">Fund Wallet</a>
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
								<!--begin::Card body-->
                                <!-- Carousel wrapper -->
                                    <div id="carouselMultiItemExample" class="carousel slide carousel-dark text-center" data-mdb-ride="carousel">
                                    <!-- Controls -->

                                    <!-- Inner -->
                                    <div class="carousel-inner py-4">
                                        <!-- Single item -->
                                        <div class="container">
                                            
                                            <div class="row">
                                                
                                                    <div class="col-lg-4 d-lg-block">
                                                        <div class="card">
                                                        <a href="">
                                                            <img
                                                                src="{{ asset('backend/assets/media/estate/1st/1.WEBP') }}"
                                                                class="card-img-top"
                                                                alt="..."
                                                            />
                                                            </a>
                                                            <div class="card-body">
                                                                <h2 class="card-title">$2,329,856</h2>
                                                                <p class="card-text">
                                                                Stately Villa Forvald "A Time Capsule" From The End Of The 19th Century
                                                                </p>
                                                                <a href="#!" class="btn btn-light-primary">Explore Details</a>
                                                            </div>
                                                        </div>
                                                    </div>

                                                <div class="col-lg-4 d-lg-block">
                                                    <div class="card">
                                                    <a href="">
                                                        <img
                                                            src="{{ asset('backend/assets/media/estate/2nd/1.WEBP') }}"
                                                            class="card-img-top"
                                                            alt="..."
                                                        />
                                                    </a>
                                                    <div class="card-body">
                                                        <h2 class="card-title">$11,461,562</h2>
                                                        <p class="card-text">
                                                        Modern Villa With Breathtaking Sea View And A Private Pier
                                                        </p>
                                                        <a href="#!" class="btn btn-light-primary">Explore Details</a>
                                                    </div>
                                                </div>
                                            </div>



                                            <div class="col-lg-4 d-lg-block">
                                                    <div class="card">
                                                    <a href="">
                                                        <img
                                                            src="{{ asset('backend/assets/media/estate/3rd/1.WEBP') }}"
                                                            class="card-img-top"
                                                            alt="..."
                                                        />
                                                    </a>
                                                    <div class="card-body">
                                                        <h2 class="card-title">$675,000</h2>
                                                        <p class="card-text">
                                                        54 Merles Lndg (Norway, ME 04268)
                                                        </p>
                                                        <a href="#!" class="btn btn-light-primary">Explore Details</a>
                                                    </div>
                                                </div>
                                            </div>



                                            <div class="col-lg-4 d-lg-block">
                                                    <div class="card">
                                                    <a href="">
                                                        <img
                                                            src="{{ asset('backend/assets/media/estate/4th/1.WEBP') }}"
                                                            class="card-img-top"
                                                            alt="..."
                                                        />
                                                    </a>
                                                    <div class="card-body">
                                                        <h2 class="card-title">$309,000</h2>
                                                        <p class="card-text">
                                                        30 Greenwood Rd. (Norway, ME 04268)
                                                        </p>
                                                        <a href="#!" class="btn btn-light-primary">Explore Details</a>
                                                    </div>
                                                </div>
                                            </div>



                                            <div class="col-lg-4 d-lg-block">
                                                    <div class="card">
                                                    <a href="">
                                                        <img
                                                            src="{{ asset('backend/assets/media/estate/5th/1.WEBP') }}"
                                                            class="card-img-top"
                                                            alt="..."
                                                        />
                                                    </a>
                                                    <div class="card-body">
                                                        <h2 class="card-title">$849,000</h2>
                                                        <p class="card-text">
                                                        58 Pikes Hl (Norway, ME 04268)
                                                        </p>
                                                        <a href="#!" class="btn btn-light-primary">Explore Details</a>
                                                    </div>
                                                </div>
                                            </div>



                                            <div class="col-lg-4 d-lg-block">
                                                    <div class="card">
                                                    <a href="">
                                                        <img
                                                            src="{{ asset('backend/assets/media/estate/6th/1.WEBP') }}"
                                                            class="card-img-top"
                                                            alt="..."
                                                        />
                                                    </a>
                                                    <div class="card-body">
                                                        <h2 class="card-title">$125,000</h2>
                                                        <p class="card-text">
                                                        Stone Ln #23-C-1 (Norway, ME 04268)
                                                        </p>
                                                        <a href="#!" class="btn btn-light-primary">Explore Details</a>
                                                    </div>
                                                </div>
                                            </div>


                                            <div class="col-lg-4 d-lg-block">
                                                    <div class="card">
                                                    <a href="">
                                                        <img
                                                            src="{{ asset('backend/assets/media/estate/7th/1.WEBP') }}"
                                                            class="card-img-top"
                                                            alt="..."
                                                        />
                                                    </a>
                                                    <div class="card-body">
                                                        <h2 class="card-title">$499,000</h2>
                                                        <p class="card-text">
                                                        88 Morse Rd (Norway, ME 04268)
                                                        </p>
                                                        <a href="#!" class="btn btn-light-primary">Explore Details</a>
                                                    </div>
                                                </div>
                                            </div>



                                            <div class="col-lg-4 d-lg-block">
                                                    <div class="card">
                                                    <a href="">
                                                        <img
                                                            src="{{ asset('backend/assets/media/estate/8th/1.WEBP') }}"
                                                            class="card-img-top"
                                                            alt="..."
                                                        />
                                                    </a>
                                                    <div class="card-body">
                                                        <h2 class="card-title">$225,000</h2>
                                                        <p class="card-text">
                                                        20 Maple St (Paris, ME 04281)
                                                        </p>
                                                        <a href="#!" class="btn btn-light-primary">Explore Details</a>
                                                    </div>
                                                </div>
                                            </div>



                                            <div class="col-lg-4 d-lg-block">
                                                    <div class="card">
                                                    <a href="">
                                                        <img
                                                            src="{{ asset('backend/assets/media/estate/9th/1.WEBP') }}"
                                                            class="card-img-top"
                                                            alt="..."
                                                        />
                                                    </a>
                                                    <div class="card-body">
                                                        <h2 class="card-title">$269,000</h2>
                                                        <p class="card-text">
                                                        5 Thurlow Ave (South Paris, ME 04281)
                                                        </p>
                                                        <a href="#!" class="btn btn-light-primary">Explore Details</a>
                                                    </div>
                                                </div>
                                            </div>



                                            <div class="col-lg-4 d-lg-block">
                                                    <div class="card">
                                                    <a href="">
                                                        <img
                                                            src="{{ asset('backend/assets/media/estate/10th/1.WEBP') }}"
                                                            class="card-img-top"
                                                            alt="..."
                                                        />
                                                    </a>
                                                    <div class="card-body">
                                                        <h2 class="card-title">$329,900</h2>
                                                        <p class="card-text">
                                                        32 Western Promenade (South Paris, ME 04281)
                                                        </p>
                                                        <a href="#!" class="btn btn-light-primary">Explore Details</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                </div>
<!-- Carousel wrapper -->
								<!--end::Card body-->
							</div>
						</div>
						<!--end::Post-->
					</div>
@endsection

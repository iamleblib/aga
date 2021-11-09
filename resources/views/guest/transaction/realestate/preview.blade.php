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
            <!--begin::Careers - List-->
            <div class="card">
                <!--begin::Body-->
                <div class="card-body p-lg-17">
                    <!--begin::Hero-->
                    <div class="position-relative mb-17">
                        <!--begin::Overlay-->
                        <div class="overlay overlay-show">
                            <!--begin::Image-->
                            <div class="bgi-no-repeat bgi-position-center bgi-size-cover card-rounded min-h-250px" style="background-image:url('{{ asset('backend/assets/media/estate/20.jpg') }} ')"></div>
                            <!--end::Image-->
                            <!--begin::layer-->
                            <div class="overlay-layer rounded bg-black" style="opacity: 0.4"></div>
                            <!--end::layer-->
                        </div>
                        <!--end::Overlay-->
                        <!--begin::Heading-->
                        <div class="position-absolute text-white mb-8 ms-10 bottom-0">
                            <!--begin::Title-->
                            <h3 class="fs-2qx fw-bolder mb-3 m text-light">{{ env('APP_NAME')}} Real Estate</h3>
                            <!--end::Title-->
                            <!--begin::Text-->
                            <div class="fs-5 fw-bold">Purchase a property with us.</div>
                            <!--end::Text-->
                        </div>
                        <!--end::Heading-->
                    </div>
                    <!--end::-->
                    <!--begin::Layout-->
                    <div class="d-flex flex-column flex-lg-row mb-17">
                        <!--begin::Content-->
                        <div class="flex-lg-row-fluid me-0 me-lg-20">
                            <!--begin::Job-->
                        
                            <!--end::Job-->
                            <!--begin::Job-->
                            <div class="mb-10 mb-lg-0">
                                <!--begin::Description-->
                                    <!--begin::Title-->
                                    <h2 class="fs-1 text-gray-800 w-bolder mb-6">$2,329,856
                                    <div class="text-gray-600 fw-bold fs-6">Nordre Røråsen 4, Skien, Vestfold og Telemark, Norway</div>
                                    </h2>
                                    <!--end::Title-->
                                    <!--begin::Text-->
                                    <p class="fw-bold fs-4 text-gray-600 mb-2">First, a disclaimer – the entire process of writing a blog post often takes more than a couple of hours, even if you can type eighty words as per minute and your writing skills are sharp.</p>
                                    <!--end::Text-->
                                <!--end::Description-->
                                <!--begin::Accordion-->
                                <!--begin::Section-->
                                <div class="m-0">
                                    <!--begin::Heading-->
                                    <div class="d-flex align-items-center collapsible py-3 toggle mb-0 collapsed" data-bs-toggle="collapse" data-bs-target="#kt_job_2_1" aria-expanded="false">
                                        <!--begin::Icon-->
                                        <div class="btn btn-sm btn-icon mw-20px btn-active-color-primary me-5">
                                            <!--begin::Svg Icon | path: icons/duotune/general/gen036.svg-->
                                            <span class="svg-icon toggle-on svg-icon-primary svg-icon-1">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                    <rect opacity="0.3" x="2" y="2" width="20" height="20" rx="5" fill="black"></rect>
                                                    <rect x="6.0104" y="10.9247" width="12" height="2" rx="1" fill="black"></rect>
                                                </svg>
                                            </span>
                                            <!--end::Svg Icon-->
                                            <!--begin::Svg Icon | path: icons/duotune/general/gen035.svg-->
                                            <span class="svg-icon toggle-off svg-icon-1">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                    <rect opacity="0.3" x="2" y="2" width="20" height="20" rx="5" fill="black"></rect>
                                                    <rect x="10.8891" y="17.8033" width="12" height="2" rx="1" transform="rotate(-90 10.8891 17.8033)" fill="black"></rect>
                                                    <rect x="6.01041" y="10.9247" width="12" height="2" rx="1" fill="black"></rect>
                                                </svg>
                                            </span>
                                            <!--end::Svg Icon-->
                                        </div>
                                        <!--end::Icon-->
                                        <!--begin::Title-->
                                        <h4 class="text-gray-700 fw-bolder cursor-pointer mb-0">Requirements</h4>
                                        <!--end::Title-->
                                    </div>
                                    <!--end::Heading-->
                                    <!--begin::Body-->
                                    <div id="kt_job_2_1" class="fs-6 ms-1 collapse" style="">
                                        <!--begin::Item-->
                                        <div class="mb-4">
                                            <!--begin::Item-->
                                            <div class="d-flex align-items-center ps-10 mb-n1">
                                                <!--begin::Bullet-->
                                                <span class="bullet me-3"></span>
                                                <!--end::Bullet-->
                                                <!--begin::Label-->
                                                <div class="text-gray-600 fw-bold fs-6"><i class="fa fa-wrench"></i> 6 BEDROOMS</div>
                                                <!--end::Label-->
                                            </div>
                                            <!--end::Item-->
                                        </div>
                                        <!--end::Item-->
                                        <!--begin::Item-->
                                        <div class="mb-4">
                                            <!--begin::Item-->
                                            <div class="d-flex align-items-center ps-10 mb-n1">
                                                <!--begin::Bullet-->
                                                <span class="bullet me-3"></span>
                                                <!--end::Bullet-->
                                                <!--begin::Label-->
                                                <div class="text-gray-600 fw-bold fs-6"><i class="fa fa-wrench"></i> 3 BATHROOMS</div>
                                                <!--end::Label-->
                                            </div>
                                            <!--end::Item-->
                                        </div>
                                        <!--end::Item-->
                                        <!--begin::Item-->
                                        <div class="mb-4">
                                            <!--begin::Item-->
                                            <div class="d-flex align-items-center ps-10 mb-n1">
                                                <!--begin::Bullet-->
                                                <span class="bullet me-3"></span>
                                                <!--end::Bullet-->
                                                <!--begin::Label-->
                                                <div class="text-gray-600 fw-bold fs-6"><i class="fa fa-wrench"></i> 677 M<sup>2</sup></div>
                                                <!--end::Label-->
                                            </div>
                                            <!--end::Item-->
                                        </div>
                                        <!--end::Item-->
                                        <!--begin::Item-->
                                        <div class="mb-4">
                                            <!--begin::Item-->
                                            <div class="d-flex align-items-center ps-10 mb-n1">
                                                <!--begin::Bullet-->
                                                <span class="bullet me-3"></span>
                                                <!--end::Bullet-->
                                                <!--begin::Label-->
                                                <div class="text-gray-600 fw-bold fs-6">
                                                    <i class="fa fa-wrench"></i> 2 770 M<sup>2</sup>
                                                </div>
                                                <!--end::Label-->
                                            </div>
                                            <!--end::Item-->
                                        </div>
                                        <!--end::Item-->
                                        <!--begin::Item-->
                                        
                                        <!--end::Item-->
                                    </div>
                                    <!--end::Content-->
                                    <!--begin::Separator-->
                                    <div class="separator separator-dashed"></div>
                                    <!--end::Separator-->
                                </div>
                                <!--end::Section-->
                                <!--begin::Section-->
                                <div class="m-0">
                                    <!--begin::Heading-->
                                    <div class="d-flex align-items-center collapsible py-3 toggle collapsed mb-0" data-bs-toggle="collapse" data-bs-target="#kt_job_2_2">
                                        <!--begin::Icon-->
                                        <div class="btn btn-sm btn-icon mw-20px btn-active-color-primary me-5">
                                            <!--begin::Svg Icon | path: icons/duotune/general/gen036.svg-->
                                            <span class="svg-icon toggle-on svg-icon-primary svg-icon-1">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                    <rect opacity="0.3" x="2" y="2" width="20" height="20" rx="5" fill="black"></rect>
                                                    <rect x="6.0104" y="10.9247" width="12" height="2" rx="1" fill="black"></rect>
                                                </svg>
                                            </span>
                                            <!--end::Svg Icon-->
                                            <!--begin::Svg Icon | path: icons/duotune/general/gen035.svg-->
                                            <span class="svg-icon toggle-off svg-icon-1">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                    <rect opacity="0.3" x="2" y="2" width="20" height="20" rx="5" fill="black"></rect>
                                                    <rect x="10.8891" y="17.8033" width="12" height="2" rx="1" transform="rotate(-90 10.8891 17.8033)" fill="black"></rect>
                                                    <rect x="6.01041" y="10.9247" width="12" height="2" rx="1" fill="black"></rect>
                                                </svg>
                                            </span>
                                            <!--end::Svg Icon-->
                                        </div>
                                        <!--end::Icon-->
                                        <!--begin::Title-->
                                        <h4 class="text-gray-700 fw-bolder cursor-pointer mb-0">Building Info</h4>
                                        <!--end::Title-->
                                    </div>
                                    <!--end::Heading-->
                                    <!--begin::Body-->
                                    <div id="kt_job_2_2" class="collapse fs-6 ms-1">
                                        <!--begin::Item-->
                                        <div class="mb-4">
                                            <!--begin::Item-->
                                            <div class="d-flex align-items-center ps-10 mb-n1">
                                                <!--begin::Bullet-->
                                                <span class="bullet me-3"></span>
                                                <!--end::Bullet-->
                                                <!--begin::Label-->
                                                <div class="text-gray-600 fw-bold fs-6">Year build <br> 1900</div>
                                                <!--end::Label-->
                                            </div>
                                            <!--end::Item-->
                                        </div>
                                        <!--end::Item-->
                                        <!--begin::Item-->
                                        <div class="mb-4">
                                            <!--begin::Item-->
                                            <div class="d-flex align-items-center ps-10 mb-n1">
                                                <!--begin::Bullet-->
                                                <span class="bullet me-3"></span>
                                                <!--end::Bullet-->
                                                <!--begin::Label-->
                                                <div class="text-gray-600 fw-bold fs-6">Floors <br> 3</div>
                                                <!--end::Label-->
                                            </div>
                                            <!--end::Item-->
                                        </div>
                                        <!--end::Item-->
                                        <!--begin::Item-->
                                        <div class="mb-4">
                                            <!--begin::Item-->
                                            <div class="d-flex align-items-center ps-10 mb-n1">
                                                <!--begin::Bullet-->
                                                <span class="bullet me-3"></span>
                                                <!--end::Bullet-->
                                                <!--begin::Label-->
                                                <div class="text-gray-600 fw-bold fs-6">Property type <br> Villa</div>
                                                <!--end::Label-->
                                            </div>
                                            <!--end::Item-->
                                        </div>
                                        <!--end::Item-->
                                        <!--begin::Item-->
                                        
                                        <!--end::Item-->
                                    </div>
                                    <!--end::Content-->
                                    <!--begin::Separator-->
                                    <div class="separator separator-dashed"></div>
                                    <!--end::Separator-->
                                </div>
                                <!--end::Section-->
                                <!--begin::Section-->
                                <div class="m-0">
                                    <!--begin::Heading-->
                                    <div class="d-flex align-items-center collapsible py-3 toggle collapsed mb-0" data-bs-toggle="collapse" data-bs-target="#kt_job_2_3">
                                        <!--begin::Icon-->
                                        <div class="btn btn-sm btn-icon mw-20px btn-active-color-primary me-5">
                                            <!--begin::Svg Icon | path: icons/duotune/general/gen036.svg-->
                                            <span class="svg-icon toggle-on svg-icon-primary svg-icon-1">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                    <rect opacity="0.3" x="2" y="2" width="20" height="20" rx="5" fill="black"></rect>
                                                    <rect x="6.0104" y="10.9247" width="12" height="2" rx="1" fill="black"></rect>
                                                </svg>
                                            </span>
                                            <!--end::Svg Icon-->
                                            <!--begin::Svg Icon | path: icons/duotune/general/gen035.svg-->
                                            <span class="svg-icon toggle-off svg-icon-1">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                    <rect opacity="0.3" x="2" y="2" width="20" height="20" rx="5" fill="black"></rect>
                                                    <rect x="10.8891" y="17.8033" width="12" height="2" rx="1" transform="rotate(-90 10.8891 17.8033)" fill="black"></rect>
                                                    <rect x="6.01041" y="10.9247" width="12" height="2" rx="1" fill="black"></rect>
                                                </svg>
                                            </span>
                                            <!--end::Svg Icon-->
                                        </div>
                                        <!--end::Icon-->
                                        <!--begin::Title-->
                                        <h4 class="text-gray-700 fw-bolder cursor-pointer mb-0">Price Insights</h4>
                                        <!--end::Title-->
                                    </div>
                                    <!--end::Heading-->
                                    <!--begin::Body-->
                                    <div id="kt_job_2_3" class="collapse fs-6 ms-1">
                                        <!--begin::Item-->
                                        <div class="mb-4">
                                            <!--begin::Item-->
                                            <div class="d-flex align-items-center ps-10 mb-n1">
                                                <!--begin::Bullet-->
                                                <span class="bullet me-3"></span>
                                                <!--end::Bullet-->
                                                <!--begin::Label-->
                                                <div class="text-gray-600 fw-bold fs-6">List price <br> $2,329,856</div>
                                                <!--end::Label-->
                                            </div>
                                            <!--end::Item-->
                                        </div>
                                        <!--end::Item-->
                                        <!--begin::Item-->
                                        <div class="mb-4">
                                            <!--begin::Item-->
                                            <div class="d-flex align-items-center ps-10 mb-n1">
                                                <!--begin::Bullet-->
                                                <span class="bullet me-3"></span>
                                                <!--end::Bullet-->
                                                <!--begin::Label-->
                                                <div class="text-gray-600 fw-bold fs-6">Full Payment <br> $2,329,856</div>
                                                <!--end::Label-->
                                            </div>
                                            <!--end::Item-->
                                        </div>
                                        <!--end::Item-->
                                        <!--begin::Item-->
                                        <div class="mb-4">
                                            <!--begin::Item-->
                                            <div class="d-flex align-items-center ps-10 mb-n1">
                                                <!--begin::Bullet-->
                                                <span class="bullet me-3"></span>
                                                <!--end::Bullet-->
                                                <!--begin::Label-->
                                                <div class="text-gray-600 fw-bold fs-6">Part Payment (10%) <br> $1,164,928</div>
                                                <!--end::Label-->
                                            </div>
                                            <!--end::Item-->
                                        </div>
                                        <!--end::Item-->
                                        <!--begin::Item-->
                                        <div class="mb-4">
                                            <!--begin::Item-->
                                            <div class="d-flex align-items-center ps-10 mb-n1">
                                                <!--begin::Bullet-->
                                                <span class="bullet me-3"></span>
                                                <!--end::Bullet-->
                                                <!--begin::Label-->
                                                <div class="text-gray-600 fw-bold fs-6">Area median price <br> $2,329,856</div>
                                                <!--end::Label-->
                                            </div>
                                            <!--end::Item-->
                                        </div>
                                        <!--end::Item-->
                                        <!--begin::Item-->
                                    
                                        <!--end::Item-->
                                        <!--begin::Item-->
                                        <p>Median price is based on 1 6-bedroom houses in Skien listed on JamesEdition</p>
                                        <!--end::Item-->
                                    </div>
                                    <!--end::Content-->
                                    <!--begin::Separator-->
                                    <div class="separator separator-dashed"></div>
                                    <!--end::Separator-->
                                </div>
                                <!--end::Section-->
                                <!--begin::Section-->
                                <div class="m-0">
                                    <!--begin::Heading-->
                                    <div class="d-flex align-items-center collapsible py-3 toggle collapsed mb-0" data-bs-toggle="collapse" data-bs-target="#kt_job_2_4">
                                        <!--begin::Icon-->
                                        <div class="btn btn-sm btn-icon mw-20px btn-active-color-primary me-5">
                                            <!--begin::Svg Icon | path: icons/duotune/general/gen036.svg-->
                                            <span class="svg-icon toggle-on svg-icon-primary svg-icon-1">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                    <rect opacity="0.3" x="2" y="2" width="20" height="20" rx="5" fill="black"></rect>
                                                    <rect x="6.0104" y="10.9247" width="12" height="2" rx="1" fill="black"></rect>
                                                </svg>
                                            </span>
                                            <!--end::Svg Icon-->
                                            <!--begin::Svg Icon | path: icons/duotune/general/gen035.svg-->
                                            <span class="svg-icon toggle-off svg-icon-1">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                    <rect opacity="0.3" x="2" y="2" width="20" height="20" rx="5" fill="black"></rect>
                                                    <rect x="10.8891" y="17.8033" width="12" height="2" rx="1" transform="rotate(-90 10.8891 17.8033)" fill="black"></rect>
                                                    <rect x="6.01041" y="10.9247" width="12" height="2" rx="1" fill="black"></rect>
                                                </svg>
                                            </span>
                                            <!--end::Svg Icon-->
                                        </div>
                                        <!--end::Icon-->
                                        <!--begin::Title-->
                                        <h4 class="text-gray-700 fw-bolder cursor-pointer mb-0">Amenities</h4>
                                        <!--end::Title-->
                                    </div>
                                    <!--end::Heading-->
                                    <!--begin::Body-->
                                    <div id="kt_job_2_4" class="collapse fs-6 ms-1">
                                        <!--begin::Item-->
                                        <div class="mb-4">
                                            <!--begin::Item-->
                                            <div class="d-flex align-items-center ps-10 mb-n1">
                                                <!--begin::Bullet-->
                                                <span class="bullet me-3"></span>
                                                <!--end::Bullet-->
                                                <!--begin::Label-->
                                                <div class="text-gray-600 fw-bold fs-6"><b>Lot</b> <br>
                                                                                    -Panoramic / Scenic View <br>
                                                                                    - Renovated <br>
                                                                                    - Equestrian <br>
                                                                                    - Mansion <br>

                                                </div>
                                                <!--end::Label-->
                                            </div>
                                            <!--end::Item-->
                                        </div>
                                        <!--end::Item-->
                                        <!--begin::Item-->
                                        <div class="mb-4">
                                            <!--begin::Item-->
                                            <div class="d-flex align-items-center ps-10 mb-n1">
                                                <!--begin::Bullet-->
                                                <span class="bullet me-3"></span>
                                                <!--end::Bullet-->
                                                <!--begin::Label-->
                                                <div class="text-gray-600 fw-bold fs-6"><b>Indoor</b> <br>
                                                                                    - Fitness Center / Gym <br>
                                                                                    - Library <br>
                                                                                    - Wine Cellar <br>
                                                                                    - Cinema <br>
                                                                                    - Fireplace <br>
                                                </div>
                                                <!--end::Label-->
                                            </div>
                                            <!--end::Item-->
                                        </div>
                                        <!--end::Item-->
                                        <!--begin::Item-->
                                        <div class="mb-4">
                                            <!--begin::Item-->
                                            <div class="d-flex align-items-center ps-10 mb-n1">
                                                <!--begin::Bullet-->
                                                <span class="bullet me-3"></span>
                                                <!--end::Bullet-->
                                                <!--begin::Label-->
                                                <div class="text-gray-600 fw-bold fs-6"><b>Indoor </b> <br>
                                                                                    - Balcony <br>
                                                                                    - Garage <br>
                                                </div>
                                                <!--end::Label-->
                                            </div>
                                            <!--end::Item-->
                                        </div>
                                    </div>
                                    <!--end::Content-->
                                </div>
                                <!--end::Section-->
                                <!--end::Accordion-->
                                <!--begin::Apply-->
                                
                                <!-- <a href="#" class="btn btn-primary er fs-6 px-8 py-4" data-bs-toggle="modal" data-bs-target="#kt_modal_offer_a_deal">Offer a Deal</a> -->
                                                <div id="kt_content_container" class="d-flex flex-column-fluid align-items-start container-xxl">
                                                    <!--begin::Post-->
                                                    <div class="content flex-row-fluid" id="kt_content">
                                                        <!--begin::Card-->
                                                        <div class="card">
                                                            <!--begin::Card body-->
                                                            <div class="card-body pb-0">
                                                                <!--begin::Heading-->
                                                                    <!--begin::Title-->
                                                                    <!--end::Title-->
                                                                    <!--end::Description-->
                                                                    <!--begin::Action-->
                                                                    <a href="#" class="btn btn-primary er fs-6 px-8 py-4 btn-block" data-bs-toggle="modal" data-bs-target="#kt_modal_offer_a_deal">Offer a Deal</a>
                                                                    <!--end::Action-->
                                                                <!--end::Heading-->
                                                                <!--begin::Illustration-->
                                                                <div class="text-center px-5">
                                                                    <img src="../../assets/media/illustrations/sigma-1/7.png" alt="" class="mw-100 h-200px h-sm-325px" />
                                                                </div>
                                                                <!--end::Illustration-->
                                                            </div>
                                                            <!--end::Card body-->
                                                        </div>
                                                        <!--end::Card-->
                                                        <!--begin::Modal - Offer A Deal-->
                                                        <div class="modal fade" id="kt_modal_offer_a_deal" tabindex="-1" aria-hidden="true">
                                                            <!--begin::Modal dialog-->
                                                            <div class="modal-dialog modal-dialog-centered mw-1000px">
                                                                <!--begin::Modal content-->
                                                                <div class="modal-content">
                                                                    <!--begin::Modal header-->
                                                                    <div class="modal-header py-7 d-flex justify-content-between">
                                                                        <!--begin::Modal title-->
                                                                        <h2>Purchase Property</h2>
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
                                                                    <!--begin::Modal header-->
                                                                    <!--begin::Modal body-->
                                                                    <div class="modal-body scroll-y m-5">
                                                                        <!--begin::Stepper-->
                                                                        <div class="stepper stepper-links d-flex flex-column" id="kt_modal_offer_a_deal_stepper">
                                                                            <!--begin::Nav-->
                                                                            <div class="stepper-nav justify-content-center py-2">
                                                                                <!--begin::Step 1-->
                                                                                <div class="stepper-item me-5 me-md-15 current" data-kt-stepper-element="nav">
                                                                                    <h3 class="stepper-title">Deal Type</h3>
                                                                                </div>
                                                                                <!--end::Step 1-->
                                                                                <!--begin::Step 2-->
                                                                                <div class="stepper-item me-5 me-md-15" data-kt-stepper-element="nav">
                                                                                    <h3 class="stepper-title">Deal Details</h3>
                                                                                </div>
                                                                                <!--end::Step 2-->
                                                                                <!--begin::Step 3-->
                                                                                <div class="stepper-item me-5 me-md-15" data-kt-stepper-element="nav">
                                                                                    <h3 class="stepper-title">Finance Settings</h3>
                                                                                </div>
                                                                                <!--end::Step 3-->
                                                                                <!--begin::Step 4-->
                                                                                <div class="stepper-item" data-kt-stepper-element="nav">
                                                                                    <h3 class="stepper-title">Completed</h3>
                                                                                </div>
                                                                                <!--end::Step 4-->
                                                                            </div>
                                                                            <!--end::Nav-->
                                                                            <!--begin::Form-->
                                                                            <form class="mx-auto mw-500px w-100 pt-15 pb-10" novalidate="novalidate" id="kt_modal_offer_a_deal_form">
                                                                                <!--begin::Type-->
                                                                                <div class="current" data-kt-stepper-element="content">
                                                                                    <!--begin::Wrapper-->
                                                                                    <div class="w-100">
                                                                                        <!--begin::Heading-->
                                                                                        <div class="mb-13">
                                                                                            <!--begin::Title-->
                                                                                            <h2 class="mb-3">Deal Type</h2>
                                                                                            <!--end::Title-->
                                                                                            <!--begin::Description-->
                                                                                            <div class="text-muted fw-bold fs-5">See other properties and purchase 
                                                                                            <a href="#" class="link-primary fw-bolder" onclick="goBack()">Other</a>.</div>
                                                                                            <!--end::Description-->
                                                                                        </div>
                                                                                        <!--end::Heading-->
                                                                                        <!--begin::Input group-->
                                                                                        <div class="fv-row mb-15" data-kt-buttons="true">
                                                                                            <!--begin::Option-->
                                                                                            <!--end::Option-->
                                                                                            <!--begin::Option-->
                                                                                            <label class="btn btn-outline btn-outline-dashed btn-outline-default d-flex text-start p-6">
                                                                                                <!--begin::Input-->
                                                                                                <input class="btn-check" type="radio" name="offer_type" value="2" />
                                                                                                <!--end::Input-->
                                                                                                <!--begin::Label-->
                                                                                                <span class="d-flex">
                                                                                                    <!--begin::Icon-->
                                                                                                    <!--begin::Svg Icon | path: icons/duotune/general/gen025.svg-->
                                                                                                    <span class="svg-icon svg-icon-3hx">
                                                                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                                                                            <rect x="2" y="2" width="9" height="9" rx="2" fill="black" />
                                                                                                            <rect opacity="0.3" x="13" y="2" width="9" height="9" rx="2" fill="black" />
                                                                                                            <rect opacity="0.3" x="13" y="13" width="9" height="9" rx="2" fill="black" />
                                                                                                            <rect opacity="0.3" x="2" y="13" width="9" height="9" rx="2" fill="black" />
                                                                                                        </svg>
                                                                                                    </span>
                                                                                                    <!--end::Svg Icon-->
                                                                                                    <!--end::Icon-->
                                                                                                    <!--begin::Info-->
                                                                                                    <span class="ms-4">
                                                                                                        <span class="fs-3 fw-bolder text-gray-900 mb-2 d-block">Name of the house</span>
                                                                                                        <span class="fw-bold fs-4 text-muted">Location</span>
                                                                                                    </span>
                                                                                                    <!--end::Info-->
                                                                                                </span>
                                                                                                <!--end::Label-->
                                                                                            </label>
                                                                                            <!--end::Option-->
                                                                                        </div>
                                                                                        <!--end::Input group-->
                                                                                        <!--begin::Actions-->
                                                                                        <div class="d-flex justify-content-end">
                                                                                            <button type="button" class="btn btn-lg btn-primary" data-kt-element="type-next">
                                                                                                <span class="indicator-label">More Details</span>
                                                                                                <span class="indicator-progress">Please wait... 
                                                                                                <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                                                                                            </button>
                                                                                        </div>
                                                                                        <!--end::Actions-->
                                                                                    </div>
                                                                                    <!--end::Wrapper-->
                                                                                </div>
                                                                                <!--end::Type-->
                                                                                <!--begin::Details-->
                                                                                <div data-kt-stepper-element="content">
                                                                                    <!--begin::Wrapper-->
                                                                                    <div class="w-100">
                                                                                        <!--begin::Heading-->
                                                                                        <div class="mb-13">
                                                                                            <!--begin::Title-->
                                                                                            <h2 class="mb-3">Deal Details</h2>
                                                                                            <!--end::Title-->
                                                                                            <!--begin::Description-->
                                                                                            <div class="text-muted fw-bold fs-5">If you need help, send a 
                                                                                            <a href="mailto:support@coinbaseassets.com" target="_blank" class="link-primary fw-bolder">Support mail </a>.</div>
                                                                                            <!--end::Description-->
                                                                                        </div>
                                                                                        <!--end::Heading-->
                                                                                        <!--begin::Input group-->
                                                                                        <div class="fv-row mb-8">
                                                                                            <!--begin::Label-->
                                                                                            <label class="required fs-6 fw-bold mb-2">Investor</label>
                                                                                            <!--end::Label-->
                                                                                            <!--begin::Input-->
                                                                                            <select class="form-select form-select-solid" data-control="select2" data-placeholder="Select an option" name="details_customer">
                                                                                                <option></option>
                                                                                                <option value="1" selected="selected">{{ auth()->user()->name }}</option>
                                                                                            </select>
                                                                                            <!--end::Input-->
                                                                                        </div>
                                                                                        <!--end::Input group-->
                                                                                        <!--begin::Input group-->
                                                                                        <!--end::Input group-->
                                                                                        <!--begin::Input group-->
                                                                                        <div class="fv-row mb-8">
                                                                                            <!--begin::Label-->
                                                                                            <label class="fs-6 fw-bold mb-2">Deal Description</label>
                                                                                            <!--end::Label-->
                                                                                            <!--begin::Label-->
                                                                                            <textarea class="form-control form-control-solid" rows="3" placeholder="Enter Deal Description" name="details_description">It is a very privillage to experience purchase a house properyt at my fingertips with Coinbase Real Estate investment property</textarea>
                                                                                            <!--end::Label-->
                                                                                        </div>
                                                                                        <!--end::Input group-->
                                                                                        <!--begin::Input group-->
                                                                                        <div class="fv-row mb-8">
                                                                                            <label class="required fs-6 fw-bold mb-2">Purchased Date</label>
                                                                                            <div class="position-relative d-flex align-items-center">
                                                                                                <!--begin::Icon-->
                                                                                                <!--begin::Svg Icon | path: icons/duotune/general/gen014.svg-->
                                                                                                <span class="svg-icon svg-icon-2 position-absolute mx-4">
                                                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                                                                        <path opacity="0.3" d="M21 22H3C2.4 22 2 21.6 2 21V5C2 4.4 2.4 4 3 4H21C21.6 4 22 4.4 22 5V21C22 21.6 21.6 22 21 22Z" fill="black" />
                                                                                                        <path d="M6 6C5.4 6 5 5.6 5 5V3C5 2.4 5.4 2 6 2C6.6 2 7 2.4 7 3V5C7 5.6 6.6 6 6 6ZM11 5V3C11 2.4 10.6 2 10 2C9.4 2 9 2.4 9 3V5C9 5.6 9.4 6 10 6C10.6 6 11 5.6 11 5ZM15 5V3C15 2.4 14.6 2 14 2C13.4 2 13 2.4 13 3V5C13 5.6 13.4 6 14 6C14.6 6 15 5.6 15 5ZM19 5V3C19 2.4 18.6 2 18 2C17.4 2 17 2.4 17 3V5C17 5.6 17.4 6 18 6C18.6 6 19 5.6 19 5Z" fill="black" />
                                                                                                        <path d="M8.8 13.1C9.2 13.1 9.5 13 9.7 12.8C9.9 12.6 10.1 12.3 10.1 11.9C10.1 11.6 10 11.3 9.8 11.1C9.6 10.9 9.3 10.8 9 10.8C8.8 10.8 8.59999 10.8 8.39999 10.9C8.19999 11 8.1 11.1 8 11.2C7.9 11.3 7.8 11.4 7.7 11.6C7.6 11.8 7.5 11.9 7.5 12.1C7.5 12.2 7.4 12.2 7.3 12.3C7.2 12.4 7.09999 12.4 6.89999 12.4C6.69999 12.4 6.6 12.3 6.5 12.2C6.4 12.1 6.3 11.9 6.3 11.7C6.3 11.5 6.4 11.3 6.5 11.1C6.6 10.9 6.8 10.7 7 10.5C7.2 10.3 7.49999 10.1 7.89999 10C8.29999 9.90003 8.60001 9.80003 9.10001 9.80003C9.50001 9.80003 9.80001 9.90003 10.1 10C10.4 10.1 10.7 10.3 10.9 10.4C11.1 10.5 11.3 10.8 11.4 11.1C11.5 11.4 11.6 11.6 11.6 11.9C11.6 12.3 11.5 12.6 11.3 12.9C11.1 13.2 10.9 13.5 10.6 13.7C10.9 13.9 11.2 14.1 11.4 14.3C11.6 14.5 11.8 14.7 11.9 15C12 15.3 12.1 15.5 12.1 15.8C12.1 16.2 12 16.5 11.9 16.8C11.8 17.1 11.5 17.4 11.3 17.7C11.1 18 10.7 18.2 10.3 18.3C9.9 18.4 9.5 18.5 9 18.5C8.5 18.5 8.1 18.4 7.7 18.2C7.3 18 7 17.8 6.8 17.6C6.6 17.4 6.4 17.1 6.3 16.8C6.2 16.5 6.10001 16.3 6.10001 16.1C6.10001 15.9 6.2 15.7 6.3 15.6C6.4 15.5 6.6 15.4 6.8 15.4C6.9 15.4 7.00001 15.4 7.10001 15.5C7.20001 15.6 7.3 15.6 7.3 15.7C7.5 16.2 7.7 16.6 8 16.9C8.3 17.2 8.6 17.3 9 17.3C9.2 17.3 9.5 17.2 9.7 17.1C9.9 17 10.1 16.8 10.3 16.6C10.5 16.4 10.5 16.1 10.5 15.8C10.5 15.3 10.4 15 10.1 14.7C9.80001 14.4 9.50001 14.3 9.10001 14.3C9.00001 14.3 8.9 14.3 8.7 14.3C8.5 14.3 8.39999 14.3 8.39999 14.3C8.19999 14.3 7.99999 14.2 7.89999 14.1C7.79999 14 7.7 13.8 7.7 13.7C7.7 13.5 7.79999 13.4 7.89999 13.2C7.99999 13 8.2 13 8.5 13H8.8V13.1ZM15.3 17.5V12.2C14.3 13 13.6 13.3 13.3 13.3C13.1 13.3 13 13.2 12.9 13.1C12.8 13 12.7 12.8 12.7 12.6C12.7 12.4 12.8 12.3 12.9 12.2C13 12.1 13.2 12 13.6 11.8C14.1 11.6 14.5 11.3 14.7 11.1C14.9 10.9 15.2 10.6 15.5 10.3C15.8 10 15.9 9.80003 15.9 9.70003C15.9 9.60003 16.1 9.60004 16.3 9.60004C16.5 9.60004 16.7 9.70003 16.8 9.80003C16.9 9.90003 17 10.2 17 10.5V17.2C17 18 16.7 18.4 16.2 18.4C16 18.4 15.8 18.3 15.6 18.2C15.4 18.1 15.3 17.8 15.3 17.5Z" fill="black" />
                                                                                                    </svg>
                                                                                                </span>
                                                                                                <!--end::Svg Icon-->
                                                                                                <!--end::Icon-->
                                                                                                <!--begin::Datepicker-->
                                                                                                <input class="form-control form-control-solid ps-12" disabled value="{{ date('D M Y') }}" name="" />
                                                                                                <!--end::Datepicker-->
                                                                                            </div>
                                                                                        </div>
                                                                                        <!--end::Input group-->
                                                                                        <!--begin::Input group-->
                                                                                        <div class="fv-row mb-15">
                                                                                            <!--begin::Wrapper-->
                                                                                            <div class="d-flex flex-stack">
                                                                                                <!--begin::Label-->
                                                                                                <div class="me-5">
                                                                                                    <label class="required fs-6 fw-bold">Notifications</label>
                                                                                                    <div class="fs-7 fw-bold text-muted">Send me a notification of my purchased offer</div>
                                                                                                </div>
                                                                                                <!--end::Label-->
                                                                                                <!--begin::Checkboxes-->
                                                                                                <div class="d-flex">
                                                                                                    <!--begin::Checkbox-->
                                                                                                    <label class="form-check form-check-custom form-check-solid me-10">
                                                                                                        <!--begin::Input-->
                                                                                                        <input class="form-check-input h-20px w-20px" type="checkbox" checked value="email" name="" />
                                                                                                        <!--end::Input-->
                                                                                                        <!--begin::Label-->
                                                                                                        <span class="form-check-label fw-bold">Email</span>
                                                                                                        <!--end::Label-->
                                                                                                    </label>
                                                                                                    <!--end::Checkbox-->
                                                                                                    <!--begin::Checkbox-->
                                                                                                    <label class="form-check form-check-custom form-check-solid">
                                                                                                        <!--begin::Input-->
                                                                                                        <input class="form-check-input h-20px w-20px" disabled type="checkbox" value="phone" name="" />
                                                                                                        <!--end::Input-->
                                                                                                        <!--begin::Label-->
                                                                                                        <span class="form-check-label fw-bold">Phone</span>
                                                                                                        <!--end::Label-->
                                                                                                    </label>
                                                                                                    <!--end::Checkbox-->
                                                                                                </div>
                                                                                                <!--end::Checkboxes-->
                                                                                            </div>
                                                                                            <!--begin::Wrapper-->
                                                                                        </div>
                                                                                        <!--end::Input group-->
                                                                                        <!--begin::Actions-->
                                                                                        <div class="d-flex flex-stack">
                                                                                            <button type="button" class="btn btn-lg btn-light me-3" data-kt-element="details-previous"><i class="fa fa-arrow-left"></i> Back</button>
                                                                                            <button type="button" class="btn btn-lg btn-primary" data-kt-element="details-next">
                                                                                                <span class="indicator-label">Financing</span>
                                                                                                <span class="indicator-progress">Please wait... 
                                                                                                <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                                                                                            </button>
                                                                                        </div>
                                                                                        <!--end::Actions-->
                                                                                    </div>
                                                                                    <!--end::Wrapper-->
                                                                                </div>
                                                                                <!--end::Details-->
                                                                                <!--begin::Budget-->
                                                                                <div data-kt-stepper-element="content">
                                                                                    <!--begin::Wrapper-->
                                                                                    <div class="w-100">
                                                                                        <!--begin::Heading-->
                                                                                        <div class="mb-13">
                                                                                            <!--begin::Title-->
                                                                                            <h2 class="mb-3">Finance <br><p>$2,329,856</p></h2>
                                                                                            <!--end::Title-->
                                                                                            <!--begin::Description-->
                                                                                            <div class="text-muted fw-bold fs-5">Please read attentively .</div>
                                                                                            <!--end::Description-->
                                                                                        </div>
                                                                                        <!--end::Heading-->
                                                                                        <!--end::Input group-->
                                                                                        <!--begin::Input group-->
                                                                                        <div class="fv-row mb-8">
                                                                                            <!--begin::Label-->
                                                                                            <label class="fs-6 fw-bold mb-2">Mode of Purchase</label>
                                                                                            <!--end::Label-->
                                                                                            <!--begin::Row-->
                                                                                            <div class="row g-9" data-kt-buttons="true" data-kt-buttons-target="[data-kt-button='true']">
                                                                                                <!--begin::Col-->
                                                                                                <div class="col-md-6 col-lg-12 col-xxl-6">
                                                                                                    <!--begin::Option-->
                                                                                                    <label class="btn btn-outline btn-outline-dashed btn-outline-default active d-flex text-start p-6" data-kt-button="true">
                                                                                                        <!--begin::Radio-->
                                                                                                        <span class="form-check form-check-custom form-check-solid form-check-sm align-items-start mt-1">
                                                                                                            <input class="form-check-input"  role="tabpanel" type="radio" name="finance_usage" value="1" checked="checked" />
                                                                                                        </span>
                                                                                                        <!--end::Radio-->
                                                                                                        <!--begin::Info-->
                                                                                                        <span class="ms-5">
                                                                                                            <span class="fs-4 fw-bolder text-gray-800 mb-2 d-block">Full Payment</span>
                                                                                                            <span class="fw-bold fs-7 text-gray-600">By selecting full payment a total of $2,329,856 will be deducted from your wallet </span>
                                                                                                        </span>
                                                                                                        <!--end::Info-->
                                                                                                    </label>
                                                                                                    <!--end::Option-->
                                                                                                </div>
                                                                                                <!--end::Col-->
                                                                                                <!--begin::Col-->
                                                                                                
                                                                                                <div class="col-md-6 col-lg-12 col-xxl-6" >
                                                                                                    <!--begin::Option-->
                                                                                                        <label class="btn btn-outline btn-outline-dashed btn-outline-default d-flex text-start p-6" data-kt-button="true">
                                                                                                            <!--begin::Radio-->
                                                                                                            <span class="form-check form-check-custom form-check-solid form-check-sm align-items-start mt-1">
                                                                                                                <input class="form-check-input" onclick="partPayment()" type="radio" name="finance_usage" value="2" />
                                                                                                            </span>
                                                                                                            <!--end::Radio-->
                                                                                                            <!--begin::Info-->
                                                                                                            <span class="ms-5">
                                                                                                                <span class="fs-4 fw-bolder text-gray-800 mb-2 d-block">Installment</span>
                                                                                                                <span class="fw-bold fs-7 text-gray-600">By selecting Installment you will be charged from your wallet sequentially  </span>
                                                                                                            </span>
                                                                                                            <!--end::Info-->
                                                                                                        </label>
                                                                                                    <!--end::Option-->
                                                                                                </div>
                                                                                                <!--end::Col-->
                                                                                            </div>
                                                                                            <!--end::Row-->
                                                                                        </div>

                                                                                        
                                                                                          <script>
                                                                                          
                                                                                          </script>

                                                                                    <div id="installment">
                                                                                        <div class="fv-row mb-8">
                                                                                            <!--begin::Label-->
                                                                                            <div class="tab-content">
                                                                                                    <label class="d-flex align-items-center fs-6 fw-bold mb-2">
                                                                                                        <span class="required">Setup Budget (if installment)</span>
                                                                                                        <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="popover" data-bs-trigger="hover" data-bs-html="true" data-bs-content="&lt;div class='p-4 rounded bg-light'&gt; &lt;div class='d-flex flex-stack text-muted mb-4'&gt; &lt;i class='fas fa-university fs-3 me-3'&gt;&lt;/i&gt; &lt;div class='fw-bold'&gt;Coinbase Assets **** 45927 STATEMENT&lt;/div&gt; &lt;/div&gt; &lt;div class='d-flex flex-stack fw-bold text-gray-600'&gt; &lt;div&gt;Property Price&lt;/div&gt; &lt;div&gt;Transaction&lt;/div&gt; &lt;/div&gt; &lt;div class='separator separator-dashed my-2'&gt;&lt;/div&gt; &lt;div class='d-flex flex-stack text-dark fw-bolder mb-2'&gt; &lt;div&gt;USD2,329,856&lt;/div&gt; &lt;div&gt;Cryprocurrency*&lt;/div&gt;"></i>
                                                                                                    </label>
                                                                                            </div>
                                                                                            <!--end::Label-->
                                                                                            <!--begin::Dialer-->
                                                                                            <div class="position-relative w-lg-250px" id="kt_modal_finance_setup" data-kt-dialer="true" data-kt-dialer-min="50" data-kt-dialer-max="50000" data-kt-dialer-step="100" data-kt-dialer-prefix="$" data-kt-dialer-decimals="2">
                                                                                                <!--begin::Decrease control-->
                                                                                                <button type="button" class="btn btn-icon btn-active-color-gray-700 position-absolute translate-middle-y top-50 start-0" data-kt-dialer-control="decrease">
                                                                                                    <!--begin::Svg Icon | path: icons/duotune/general/gen042.svg-->
                                                                                                    <span class="svg-icon svg-icon-1">
                                                                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                                                                            <rect opacity="0.3" x="2" y="2" width="20" height="20" rx="10" fill="black" />
                                                                                                            <rect x="6.01041" y="10.9247" width="12" height="2" rx="1" fill="black" />
                                                                                                        </svg>
                                                                                                    </span>
                                                                                                    <!--end::Svg Icon-->
                                                                                                </button>
                                                                                                <!--end::Decrease control-->
                                                                                                <!--begin::Input control-->
                                                                                                <input type="text" class="form-control form-control-solid border-0 ps-12" data-kt-dialer-control="input" placeholder="Amount" name="finance_setup" readonly="readonly" value="$50" />
                                                                                                <!--end::Input control-->
                                                                                                <!--begin::Increase control-->
                                                                                                <button type="button" class="btn btn-icon btn-active-color-gray-700 position-absolute translate-middle-y top-50 end-0" data-kt-dialer-control="increase">
                                                                                                    <!--begin::Svg Icon | path: icons/duotune/general/gen041.svg-->
                                                                                                    <span class="svg-icon svg-icon-1">
                                                                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                                                                            <rect opacity="0.3" x="2" y="2" width="20" height="20" rx="10" fill="black" />
                                                                                                            <rect x="10.8891" y="17.8033" width="12" height="2" rx="1" transform="rotate(-90 10.8891 17.8033)" fill="black" />
                                                                                                            <rect x="6.01041" y="10.9247" width="12" height="2" rx="1" fill="black" />
                                                                                                        </svg>
                                                                                                    </span>
                                                                                                    <!--end::Svg Icon-->
                                                                                                </button>
                                                                                                <!--end::Increase control-->
                                                                                            </div>
                                                                                            <!--end::Dialer-->
                                                                                        </div>
                                                                                    </div>
                                                                                        <!--end::Input group-->
                                                                                        <!--begin::Input group-->
                                                                                        <div class="fv-row mb-15">
                                                                                            <!--begin::Wrapper-->
                                                                                            <div class="d-flex flex-stack">
                                                                                                <!--begin::Label-->
                                                                                                <div class="me-5">
                                                                                                    <label class="fs-6 fw-bold">Allow Changes in Budget</label>
                                                                                                    <div class="fs-7 fw-bold text-muted">If you need more info, please check budget planning</div>
                                                                                                </div>
                                                                                                <!--end::Label-->
                                                                                                <!--begin::Switch-->
                                                                                                <label class="form-check form-switch form-check-custom form-check-solid">
                                                                                                    <input class="form-check-input" type="checkbox" value="1" name="finance_allow" checked="checked" />
                                                                                                    <span class="form-check-label fw-bold text-muted">Allowed</span>
                                                                                                </label>
                                                                                                <!--end::Switch-->
                                                                                            </div>
                                                                                            <!--end::Wrapper-->
                                                                                        </div>
                                                                                        <!--end::Input group-->
                                                                                        <!--begin::Actions-->
                                                                                        <div class="d-flex flex-stack">
                                                                                            <button type="button" class="btn btn-lg btn-light me-3" data-kt-element="finance-previous">Project Settings</button>
                                                                                            <button type="button" class="btn btn-lg btn-primary" data-kt-element="finance-next">
                                                                                                <span class="indicator-label">Build Team</span>
                                                                                                <span class="indicator-progress">Please wait... 
                                                                                                <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                                                                                            </button>
                                                                                        </div>
                                                                                        <!--end::Actions-->
                                                                                    </div>
                                                                                    <!--end::Wrapper-->
                                                                                </div>
                                                                                <!--end::Budget-->
                                                                                <!--begin::Complete-->
                                                                                <div data-kt-stepper-element="content">
                                                                                    <!--begin::Wrapper-->
                                                                                    <div class="w-100">
                                                                                        <!--begin::Heading-->
                                                                                        <div class="mb-13">
                                                                                            <!--begin::Title-->
                                                                                            <h2 class="mb-3">Deal Created!</h2>
                                                                                            <!--end::Title-->
                                                                                            <!--begin::Description-->
                                                                                            <div class="text-muted fw-bold fs-5">If you need more info, please check out 
                                                                                            <a href="#" class="link-primary fw-bolder">FAQ Page</a>.</div>
                                                                                            <!--end::Description-->
                                                                                        </div>
                                                                                        <!--end::Heading-->
                                                                                        <!--begin::Actions-->
                                                                                        <div class="d-flex flex-center pb-20">
                                                                                            <button type="button" class="btn btn-lg btn-light me-3" data-kt-element="complete-start">Create New Deal</button>
                                                                                            <a href="#" class="btn btn-lg btn-primary" data-bs-toggle="tooltip" title="Coming Soon">View Deal</a>
                                                                                        </div>
                                                                                        <!--end::Actions-->
                                                                                        <!--begin::Illustration-->
                                                                                        <div class="text-center px-4">
                                                                                            <img src="{{ asset('backend/assets/media/illustrations/sigma-1/20.png')}}" alt="" class="mw-100 mh-300px" />
                                                                                        </div>
                                                                                        <!--end::Illustration-->
                                                                                    </div>
                                                                                </div>
                                                                                <!--end::Complete-->
                                                                            </form>
                                                                            <!--end::Form-->
                                                                        </div>
                                                                        <!--end::Stepper-->
                                                                    </div>
                                                                    <!--begin::Modal body-->
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!--end::Modal - Offer A Deal-->
                                                    </div>
                                                    <!--end::Post-->
                                                </div>
												<!--end::Apply-->
											</div>
											<!--end::Job-->
										</div>







                            





                                        
										<!--end::Content-->
										<!--begin::Sidebar-->
										<div class="flex-lg-row-auto w-100 w-lg-275px w-xxl-350px">
											<!--begin::Careers about-->
											<div class="card bg-light">
												<!--begin::Body-->
												<div class="card-body">
													<!--begin::Top-->
													<div class="mb-7">
														<!--begin::Title-->
														<h2 class="fs-1 text-gray-800 w-bolder mb-6">Details</h2>
														<!--end::Title-->
														<!--begin::Text-->
														<p class="fw-bold fs-6 text-gray-600">First, a disclaimer – the entire process of writing a blog post often takes more than a couple of hours, even if you can type eighty words as per minute and your writing skills are sharp.</p>
														<!--end::Text-->
													</div>
													<!--end::Top-->
													<!--begin::Item-->
													<div class="mb-8">
														<!--begin::Title-->
														<h4 class="text-gray-700 w-bolder mb-0">Requirements</h4>
														<!--end::Title-->
														<!--begin::Section-->
														<div class="my-2">
															<!--begin::Row-->
															<div class="d-flex align-items-center mb-3">
																<!--begin::Bullet-->
																<span class="bullet me-3"></span>
																<!--end::Bullet-->
																<!--begin::Label-->
																<div class="text-gray-600 fw-bold fs-6">6 BEDROOMS</div>
																<!--end::Label-->
															</div>
															<!--end::Row-->
															<!--begin::Row-->
															<div class="d-flex align-items-center mb-3">
																<!--begin::Bullet-->
																<span class="bullet me-3"></span>
																<!--end::Bullet-->
																<!--begin::Label-->
																<div class="text-gray-600 fw-bold fs-6">3 BATHROOMS</div>
																<!--end::Label-->
															</div>
															<!--end::Row-->
															<!--begin::Row-->
															
															<!--end::Row-->
														</div>
														<!--end::Section-->
													</div>
													<!--end::Item-->
													<!--begin::Item-->
													<div class="mb-8">
														<!--begin::Title-->
														<h4 class="text-gray-700 w-bolder mb-0">Location</h4>
														<!--end::Title-->
														<!--begin::Section-->
														<div class="my-2">
															<!--begin::Row-->
															<div class="d-flex align-items-center mb-3">
																<!--begin::Bullet-->
																<!--end::Bullet-->
																<!--begin::Label-->
																<div class="text-gray-600 fw-bold fs-6">Nordre Røråsen 4, Skien, Vestfold og Telemark, Norway</div>
																<!--end::Label-->
															</div>

                                                            
															<!--end::Row-->
														</div>
														<!--end::Section-->
													</div>
													<!--end::Item-->
													<!--begin::Link-->
													<a href="https://www.google.com/maps/search/?api=1&query=59.2101336,9.5282457" class="link-primary fs-6 fw-bold" target="_blank">Explore Map</a>
													<!--end::Link-->
												</div>
												<!--end::Body-->
											</div>
											<!--end::Careers about-->
										</div>
										<!--end::Sidebar-->
									</div>
									<!--end::Layout-->
									<!--begin::Section-->
									<div class="mb-19">
										<!--begin::Top-->
										<div class="text-center mb-12">
											<!--begin::Title-->
											<h3 class="fs-2hx text-dark mb-5">PROPERTY GALLERY</h3>
											<!--end::Title-->
											<!--begin::Text-->
											<div class="fs-5 text-muted fw-bold">Our goal is to provide a complete and robust theme solution 
											<br>to boost all of our customer’s project deployments</div>
											<!--end::Text-->
										</div>


										<!--end::Top-->
										<!--begin::Row-->
									<div class="row">
											<!--end::Col-->
											<!--begin::Col-->
												<!--begin::Publications post-->
											<div class="gallery">
											    <div class="col-6">
                                                    <figure>
                                                        <img src="{{ asset('backend/assets/media/estate/3rd/1.WEBP') }}" width="455px"  alt="" />
                                                    </figure>
                                                    </div>

											    <div class="col-6">
                                                    <figure>
                                                        <img src="{{ asset('backend/assets/media/estate/3rd/2.WEBP') }}" width="440px" alt="" />
                                                    </figure>
                                                </div>

                                                <div class="col-md-12">
                                                    <figure>
                                                        <img src="{{ asset('backend/assets/media/estate/3rd/3.WEBP') }}" width="440px" alt="" />
                                                    </figure>
                                                </div>

                                                <div class="col-6">
                                                    <figure>
                                                        <img src="{{ asset('backend/assets/media/estate/3rd/4.WEBP') }}" width="440px" alt="" />
                                                    </figure>
                                                </div>

                                                <div class="col-6">
                                                    <figure>
                                                        <img src="{{ asset('backend/assets/media/estate/3rd/5.WEBP') }}" width="440px" alt="" />
                                                    </figure>
                                                </div>

                                                <div class="col-md-12">
                                                    <figure>
                                                        <img src="{{ asset('backend/assets/media/estate/3rd/6.WEBP') }}" width="440px" alt="" />
                                                    </figure>
                                                </div>

                                                <div class="col-6">
                                                    <figure>
                                                        <img src="{{ asset('backend/assets/media/estate/3rd/7.WEBP') }}" width="440px" alt="" />
                                                    </figure>
                                                </div>

                                                <div class="col-6">
                                                    <figure>
                                                        <img src="{{ asset('backend/assets/media/estate/3rd/8.WEBP') }}" width="440px" alt="" />
                                                    </figure>
                                                </div>

                                                <div class="col-md-12">
                                                    <figure>
                                                        <img src="{{ asset('backend/assets/media/estate/3rd/9.WEBP') }}" width="440px" alt="" />
                                                    </figure>
                                                </div>

                                                <div class="col-6">
                                                    <figure>
                                                        <img src="{{ asset('backend/assets/media/estate/3rd/10.WEBP') }}" width="440px" alt="" />
                                                    </figure>
                                                </div>

                                                <div class="col-6">
                                                    <figure>
                                                        <img src="{{ asset('backend/assets/media/estate/3rd/11.WEBP') }}" width="440px" alt="" />
                                                    </figure>
                                                </div>
                                            </div>
                                            </div>

                                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" style="display:none;">
                                                    <symbol id="close" viewBox="0 0 18 18">
                                                        <path fill-rule="evenodd" clip-rule="evenodd" fill="#FFFFFF" d="M9,0.493C4.302,0.493,0.493,4.302,0.493,9S4.302,17.507,9,17.507
                                                        S17.507,13.698,17.507,9S13.698,0.493,9,0.493z M12.491,11.491c0.292,0.296,0.292,0.773,0,1.068c-0.293,0.295-0.767,0.295-1.059,0
                                                        l-2.435-2.457L6.564,12.56c-0.292,0.295-0.766,0.295-1.058,0c-0.292-0.295-0.292-0.772,0-1.068L7.94,9.035L5.435,6.507
                                                        c-0.292-0.295-0.292-0.773,0-1.068c0.293-0.295,0.766-0.295,1.059,0l2.504,2.528l2.505-2.528c0.292-0.295,0.767-0.295,1.059,0
                                                        s0.292,0.773,0,1.068l-2.505,2.528L12.491,11.491z"/>
                                                    </symbol>
                                                    </svg>
												<!--end::Publications post-->
											</div>
											<!--end::Col-->
										</div>
										<!--end::Row-->
									</div>
									<!--end::Section-->
									<!--begin::Card-->
                                    
								
									<!--end::Card-->
								</div>
								<!--end::Body-->
							</div>
							<!--end::Careers - List-->
						</div>
						<!--end::Post-->
					</div>


<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>



<style>
.gallery {
  position: relative;
  z-index: 2;
  padding: 10px;
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -ms-flex-flow: row wrap;
  flex-flow: row wrap;
  -webkit-box-pack: justify;
  -ms-flex-pack: justify;
  justify-content: space-between;
  -webkit-transition: all .5s ease-in-out;
  transition: all .5s ease-in-out;
}

.gallery.pop {
  -webkit-filter: blur(10px);
  filter: blur(10px);
}

.gallery figure {
  -ms-flex-preferred-size: 33.333%;
  flex-basis: 33.333%;
  padding: 10px;
  overflow: hidden;
  border-radius: 10px;
  cursor: pointer;
border: 2px dashed orange;
}

.gallery figure img {
  width: 100%;
  border-radius: 10px;
  -webkit-transition: all .3s ease-in-out;
  transition: all .3s ease-in-out;
}

.gallery figure figcaption {
  display: none;
}

.popup {
  position: fixed;
  z-index: 2;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  background: rgba(255, 255, 255, 0.75);
  opacity: 0;
  -webkit-transition: opacity .5s ease-in-out .2s;
  transition: opacity .5s ease-in-out .2s;
}

.popup.pop {
  opacity: 1;
  -webkit-transition: opacity .2s ease-in-out 0s;
  transition: opacity .2s ease-in-out 0s;
}

.popup.pop figure {
  margin-top: 0;
  opacity: 1;
}

.popup figure {
  position: absolute;
  top: 50%;
  left: 70%;
  -webkit-transform: translate(-50%, -50%);
  transform: translate(-50%, -50%);
  -webkit-transform-origin: 0 0;
  transform-origin: 0 0;
  margin-top: 30px;
  opacity: 0;
  -webkit-animation: poppy 500ms linear both;
  animation: poppy 500ms linear both;
}

.popup figure img {
  z-index: 2;
  border-radius: 15px;
  box-shadow: 0 1px 5px rgba(0, 0, 0, 0.2), 0 6px 30px rgba(0, 0, 0, 0.4);
}

.popup figure figcaption {
  position: absolute;
  bottom: 50px;
  background: -webkit-linear-gradient(top, transparent, rgba(0, 0, 0, 0.78));
  background: linear-gradient(180deg, transparent, rgba(0, 0, 0, 0.78));
  z-index: 2;
  width: 100%;
  border-radius: 0 0 15px 15px;
  padding: 100px 20px 20px 20px;
  color: #fff;
  font-family: 'Open Sans', sans-serif;
  font-size: 32px;
}

.popup figure figcaption small {
  font-size: 11px;
  display: block;
  text-transform: uppercase;
  margin-top: 12px;
  text-indent: 3px;
  opacity: .7;
  letter-spacing: 1px;
}

.popup figure .shadow {
  position: relative;
  z-index: 1;
  top: -15px;
  margin: 0 auto;
  background-position: center bottom;
  background-repeat: no-repeat;
  width: 98%;
  height: 50px;
  opacity: .6;
  -webkit-filter: blur(15px) contrast(2);
  filter: blur(15px) contrast(2);
}

.popup .close {
  position: absolute;
  z-index: 3;
  top: 10px;
  right: 10px;
  width: 25px;
  height: 25px;
  cursor: pointer;
  background: url(#close);
  border-radius: 25px;
  background: rgba(0, 0, 0, 0.1);
  box-shadow: 0 0 3px rgba(0, 0, 0, 0.2);
}

.popup .close svg {
  width: 100%;
  height: 100%;
}

@-webkit-keyframes poppy {
  0% {
    -webkit-transform: matrix3d(0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1);
            transform: matrix3d(0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1);
  }
  3.4% {
    -webkit-transform: matrix3d(0.316, 0, 0, 0, 0, 0.407, 0, 0, 0, 0, 1, 0, -94.672, -91.573, 0, 1);
            transform: matrix3d(0.316, 0, 0, 0, 0, 0.407, 0, 0, 0, 0, 1, 0, -94.672, -91.573, 0, 1);
  }
  4.3% {
    -webkit-transform: matrix3d(0.408, 0, 0, 0, 0, 0.54, 0, 0, 0, 0, 1, 0, -122.527, -121.509, 0, 1);
            transform: matrix3d(0.408, 0, 0, 0, 0, 0.54, 0, 0, 0, 0, 1, 0, -122.527, -121.509, 0, 1);
  }
  4.7% {
    -webkit-transform: matrix3d(0.45, 0, 0, 0, 0, 0.599, 0, 0, 0, 0, 1, 0, -134.908, -134.843, 0, 1);
            transform: matrix3d(0.45, 0, 0, 0, 0, 0.599, 0, 0, 0, 0, 1, 0, -134.908, -134.843, 0, 1);
  }
  6.81% {
    -webkit-transform: matrix3d(0.659, 0, 0, 0, 0, 0.893, 0, 0, 0, 0, 1, 0, -197.77, -200.879, 0, 1);
            transform: matrix3d(0.659, 0, 0, 0, 0, 0.893, 0, 0, 0, 0, 1, 0, -197.77, -200.879, 0, 1);
  }
  8.61% {
    -webkit-transform: matrix3d(0.82, 0, 0, 0, 0, 1.097, 0, 0, 0, 0, 1, 0, -245.972, -246.757, 0, 1);
            transform: matrix3d(0.82, 0, 0, 0, 0, 1.097, 0, 0, 0, 0, 1, 0, -245.972, -246.757, 0, 1);
  }
  9.41% {
    -webkit-transform: matrix3d(0.883, 0, 0, 0, 0, 1.168, 0, 0, 0, 0, 1, 0, -265.038, -262.804, 0, 1);
            transform: matrix3d(0.883, 0, 0, 0, 0, 1.168, 0, 0, 0, 0, 1, 0, -265.038, -262.804, 0, 1);
  }
  10.21% {
    -webkit-transform: matrix3d(0.942, 0, 0, 0, 0, 1.226, 0, 0, 0, 0, 1, 0, -282.462, -275.93, 0, 1);
            transform: matrix3d(0.942, 0, 0, 0, 0, 1.226, 0, 0, 0, 0, 1, 0, -282.462, -275.93, 0, 1);
  }
  12.91% {
    -webkit-transform: matrix3d(1.094, 0, 0, 0, 0, 1.328, 0, 0, 0, 0, 1, 0, -328.332, -298.813, 0, 1);
            transform: matrix3d(1.094, 0, 0, 0, 0, 1.328, 0, 0, 0, 0, 1, 0, -328.332, -298.813, 0, 1);
  }
  13.61% {
    -webkit-transform: matrix3d(1.123, 0, 0, 0, 0, 1.332, 0, 0, 0, 0, 1, 0, -336.934, -299.783, 0, 1);
            transform: matrix3d(1.123, 0, 0, 0, 0, 1.332, 0, 0, 0, 0, 1, 0, -336.934, -299.783, 0, 1);
  }
  14.11% {
    -webkit-transform: matrix3d(1.141, 0, 0, 0, 0, 1.331, 0, 0, 0, 0, 1, 0, -342.273, -299.395, 0, 1);
            transform: matrix3d(1.141, 0, 0, 0, 0, 1.331, 0, 0, 0, 0, 1, 0, -342.273, -299.395, 0, 1);
  }
  17.22% {
    -webkit-transform: matrix3d(1.205, 0, 0, 0, 0, 1.252, 0, 0, 0, 0, 1, 0, -361.606, -281.592, 0, 1);
            transform: matrix3d(1.205, 0, 0, 0, 0, 1.252, 0, 0, 0, 0, 1, 0, -361.606, -281.592, 0, 1);
  }
  17.52% {
    -webkit-transform: matrix3d(1.208, 0, 0, 0, 0, 1.239, 0, 0, 0, 0, 1, 0, -362.348, -278.88, 0, 1);
            transform: matrix3d(1.208, 0, 0, 0, 0, 1.239, 0, 0, 0, 0, 1, 0, -362.348, -278.88, 0, 1);
  }
  18.72% {
    -webkit-transform: matrix3d(1.212, 0, 0, 0, 0, 1.187, 0, 0, 0, 0, 1, 0, -363.633, -267.15, 0, 1);
            transform: matrix3d(1.212, 0, 0, 0, 0, 1.187, 0, 0, 0, 0, 1, 0, -363.633, -267.15, 0, 1);
  }
  21.32% {
    -webkit-transform: matrix3d(1.196, 0, 0, 0, 0, 1.069, 0, 0, 0, 0, 1, 0, -358.864, -240.617, 0, 1);
            transform: matrix3d(1.196, 0, 0, 0, 0, 1.069, 0, 0, 0, 0, 1, 0, -358.864, -240.617, 0, 1);
  }
  24.32% {
    -webkit-transform: matrix3d(1.151, 0, 0, 0, 0, 0.96, 0, 0, 0, 0, 1, 0, -345.164, -216.073, 0, 1);
            transform: matrix3d(1.151, 0, 0, 0, 0, 0.96, 0, 0, 0, 0, 1, 0, -345.164, -216.073, 0, 1);
  }
  25.23% {
    -webkit-transform: matrix3d(1.134, 0, 0, 0, 0, 0.938, 0, 0, 0, 0, 1, 0, -340.193, -210.948, 0, 1);
            transform: matrix3d(1.134, 0, 0, 0, 0, 0.938, 0, 0, 0, 0, 1, 0, -340.193, -210.948, 0, 1);
  }
  28.33% {
    -webkit-transform: matrix3d(1.075, 0, 0, 0, 0, 0.898, 0, 0, 0, 0, 1, 0, -322.647, -202.048, 0, 1);
            transform: matrix3d(1.075, 0, 0, 0, 0, 0.898, 0, 0, 0, 0, 1, 0, -322.647, -202.048, 0, 1);
  }
  29.03% {
    -webkit-transform: matrix3d(1.063, 0, 0, 0, 0, 0.897, 0, 0, 0, 0, 1, 0, -318.884, -201.771, 0, 1);
            transform: matrix3d(1.063, 0, 0, 0, 0, 0.897, 0, 0, 0, 0, 1, 0, -318.884, -201.771, 0, 1);
  }
  29.93% {
    -webkit-transform: matrix3d(1.048, 0, 0, 0, 0, 0.899, 0, 0, 0, 0, 1, 0, -314.277, -202.202, 0, 1);
            transform: matrix3d(1.048, 0, 0, 0, 0, 0.899, 0, 0, 0, 0, 1, 0, -314.277, -202.202, 0, 1);
  }
  35.54% {
    -webkit-transform: matrix3d(0.979, 0, 0, 0, 0, 0.962, 0, 0, 0, 0, 1, 0, -293.828, -216.499, 0, 1);
            transform: matrix3d(0.979, 0, 0, 0, 0, 0.962, 0, 0, 0, 0, 1, 0, -293.828, -216.499, 0, 1);
  }
  36.74% {
    -webkit-transform: matrix3d(0.972, 0, 0, 0, 0, 0.979, 0, 0, 0, 0, 1, 0, -291.489, -220.242, 0, 1);
            transform: matrix3d(0.972, 0, 0, 0, 0, 0.979, 0, 0, 0, 0, 1, 0, -291.489, -220.242, 0, 1);
  }
  39.44% {
    -webkit-transform: matrix3d(0.962, 0, 0, 0, 0, 1.01, 0, 0, 0, 0, 1, 0, -288.62, -227.228, 0, 1);
            transform: matrix3d(0.962, 0, 0, 0, 0, 1.01, 0, 0, 0, 0, 1, 0, -288.62, -227.228, 0, 1);
  }
  41.04% {
    -webkit-transform: matrix3d(0.961, 0, 0, 0, 0, 1.022, 0, 0, 0, 0, 1, 0, -288.247, -229.999, 0, 1);
            transform: matrix3d(0.961, 0, 0, 0, 0, 1.022, 0, 0, 0, 0, 1, 0, -288.247, -229.999, 0, 1);
  }
  44.44% {
    -webkit-transform: matrix3d(0.966, 0, 0, 0, 0, 1.032, 0, 0, 0, 0, 1, 0, -289.763, -232.215, 0, 1);
            transform: matrix3d(0.966, 0, 0, 0, 0, 1.032, 0, 0, 0, 0, 1, 0, -289.763, -232.215, 0, 1);
  }
  52.15% {
    -webkit-transform: matrix3d(0.991, 0, 0, 0, 0, 1.006, 0, 0, 0, 0, 1, 0, -297.363, -226.449, 0, 1);
            transform: matrix3d(0.991, 0, 0, 0, 0, 1.006, 0, 0, 0, 0, 1, 0, -297.363, -226.449, 0, 1);
  }
  59.86% {
    -webkit-transform: matrix3d(1.006, 0, 0, 0, 0, 0.99, 0, 0, 0, 0, 1, 0, -301.813, -222.759, 0, 1);
            transform: matrix3d(1.006, 0, 0, 0, 0, 0.99, 0, 0, 0, 0, 1, 0, -301.813, -222.759, 0, 1);
  }
  61.66% {
    -webkit-transform: matrix3d(1.007, 0, 0, 0, 0, 0.991, 0, 0, 0, 0, 1, 0, -302.102, -222.926, 0, 1);
            transform: matrix3d(1.007, 0, 0, 0, 0, 0.991, 0, 0, 0, 0, 1, 0, -302.102, -222.926, 0, 1);
  }
  63.26% {
    -webkit-transform: matrix3d(1.007, 0, 0, 0, 0, 0.992, 0, 0, 0, 0, 1, 0, -302.171, -223.276, 0, 1);
            transform: matrix3d(1.007, 0, 0, 0, 0, 0.992, 0, 0, 0, 0, 1, 0, -302.171, -223.276, 0, 1);
  }
  75.28% {
    -webkit-transform: matrix3d(1.001, 0, 0, 0, 0, 1.003, 0, 0, 0, 0, 1, 0, -300.341, -225.696, 0, 1);
            transform: matrix3d(1.001, 0, 0, 0, 0, 1.003, 0, 0, 0, 0, 1, 0, -300.341, -225.696, 0, 1);
  }
  83.98% {
    -webkit-transform: matrix3d(0.999, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1, 0, -299.61, -225.049, 0, 1);
            transform: matrix3d(0.999, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1, 0, -299.61, -225.049, 0, 1);
  }
  85.49% {
    -webkit-transform: matrix3d(0.999, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1, 0, -299.599, -224.94, 0, 1);
            transform: matrix3d(0.999, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1, 0, -299.599, -224.94, 0, 1);
  }
  90.69% {
    -webkit-transform: matrix3d(0.999, 0, 0, 0, 0, 0.999, 0, 0, 0, 0, 1, 0, -299.705, -224.784, 0, 1);
            transform: matrix3d(0.999, 0, 0, 0, 0, 0.999, 0, 0, 0, 0, 1, 0, -299.705, -224.784, 0, 1);
  }
  100% {
    -webkit-transform: matrix3d(1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1, 0, -300, -225, 0, 1);
            transform: matrix3d(1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1, 0, -300, -225, 0, 1);
  }
}

@keyframes poppy {
  0% {
    -webkit-transform: matrix3d(0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1);
            transform: matrix3d(0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1);
  }
  3.4% {
    -webkit-transform: matrix3d(0.316, 0, 0, 0, 0, 0.407, 0, 0, 0, 0, 1, 0, -94.672, -91.573, 0, 1);
            transform: matrix3d(0.316, 0, 0, 0, 0, 0.407, 0, 0, 0, 0, 1, 0, -94.672, -91.573, 0, 1);
  }
  4.3% {
    -webkit-transform: matrix3d(0.408, 0, 0, 0, 0, 0.54, 0, 0, 0, 0, 1, 0, -122.527, -121.509, 0, 1);
            transform: matrix3d(0.408, 0, 0, 0, 0, 0.54, 0, 0, 0, 0, 1, 0, -122.527, -121.509, 0, 1);
  }
  4.7% {
    -webkit-transform: matrix3d(0.45, 0, 0, 0, 0, 0.599, 0, 0, 0, 0, 1, 0, -134.908, -134.843, 0, 1);
            transform: matrix3d(0.45, 0, 0, 0, 0, 0.599, 0, 0, 0, 0, 1, 0, -134.908, -134.843, 0, 1);
  }
  6.81% {
    -webkit-transform: matrix3d(0.659, 0, 0, 0, 0, 0.893, 0, 0, 0, 0, 1, 0, -197.77, -200.879, 0, 1);
            transform: matrix3d(0.659, 0, 0, 0, 0, 0.893, 0, 0, 0, 0, 1, 0, -197.77, -200.879, 0, 1);
  }
  8.61% {
    -webkit-transform: matrix3d(0.82, 0, 0, 0, 0, 1.097, 0, 0, 0, 0, 1, 0, -245.972, -246.757, 0, 1);
            transform: matrix3d(0.82, 0, 0, 0, 0, 1.097, 0, 0, 0, 0, 1, 0, -245.972, -246.757, 0, 1);
  }
  9.41% {
    -webkit-transform: matrix3d(0.883, 0, 0, 0, 0, 1.168, 0, 0, 0, 0, 1, 0, -265.038, -262.804, 0, 1);
            transform: matrix3d(0.883, 0, 0, 0, 0, 1.168, 0, 0, 0, 0, 1, 0, -265.038, -262.804, 0, 1);
  }
  10.21% {
    -webkit-transform: matrix3d(0.942, 0, 0, 0, 0, 1.226, 0, 0, 0, 0, 1, 0, -282.462, -275.93, 0, 1);
            transform: matrix3d(0.942, 0, 0, 0, 0, 1.226, 0, 0, 0, 0, 1, 0, -282.462, -275.93, 0, 1);
  }
  12.91% {
    -webkit-transform: matrix3d(1.094, 0, 0, 0, 0, 1.328, 0, 0, 0, 0, 1, 0, -328.332, -298.813, 0, 1);
            transform: matrix3d(1.094, 0, 0, 0, 0, 1.328, 0, 0, 0, 0, 1, 0, -328.332, -298.813, 0, 1);
  }
  13.61% {
    -webkit-transform: matrix3d(1.123, 0, 0, 0, 0, 1.332, 0, 0, 0, 0, 1, 0, -336.934, -299.783, 0, 1);
            transform: matrix3d(1.123, 0, 0, 0, 0, 1.332, 0, 0, 0, 0, 1, 0, -336.934, -299.783, 0, 1);
  }
  14.11% {
    -webkit-transform: matrix3d(1.141, 0, 0, 0, 0, 1.331, 0, 0, 0, 0, 1, 0, -342.273, -299.395, 0, 1);
            transform: matrix3d(1.141, 0, 0, 0, 0, 1.331, 0, 0, 0, 0, 1, 0, -342.273, -299.395, 0, 1);
  }
  17.22% {
    -webkit-transform: matrix3d(1.205, 0, 0, 0, 0, 1.252, 0, 0, 0, 0, 1, 0, -361.606, -281.592, 0, 1);
            transform: matrix3d(1.205, 0, 0, 0, 0, 1.252, 0, 0, 0, 0, 1, 0, -361.606, -281.592, 0, 1);
  }
  17.52% {
    -webkit-transform: matrix3d(1.208, 0, 0, 0, 0, 1.239, 0, 0, 0, 0, 1, 0, -362.348, -278.88, 0, 1);
            transform: matrix3d(1.208, 0, 0, 0, 0, 1.239, 0, 0, 0, 0, 1, 0, -362.348, -278.88, 0, 1);
  }
  18.72% {
    -webkit-transform: matrix3d(1.212, 0, 0, 0, 0, 1.187, 0, 0, 0, 0, 1, 0, -363.633, -267.15, 0, 1);
            transform: matrix3d(1.212, 0, 0, 0, 0, 1.187, 0, 0, 0, 0, 1, 0, -363.633, -267.15, 0, 1);
  }
  21.32% {
    -webkit-transform: matrix3d(1.196, 0, 0, 0, 0, 1.069, 0, 0, 0, 0, 1, 0, -358.864, -240.617, 0, 1);
            transform: matrix3d(1.196, 0, 0, 0, 0, 1.069, 0, 0, 0, 0, 1, 0, -358.864, -240.617, 0, 1);
  }
  24.32% {
    -webkit-transform: matrix3d(1.151, 0, 0, 0, 0, 0.96, 0, 0, 0, 0, 1, 0, -345.164, -216.073, 0, 1);
            transform: matrix3d(1.151, 0, 0, 0, 0, 0.96, 0, 0, 0, 0, 1, 0, -345.164, -216.073, 0, 1);
  }
  25.23% {
    -webkit-transform: matrix3d(1.134, 0, 0, 0, 0, 0.938, 0, 0, 0, 0, 1, 0, -340.193, -210.948, 0, 1);
            transform: matrix3d(1.134, 0, 0, 0, 0, 0.938, 0, 0, 0, 0, 1, 0, -340.193, -210.948, 0, 1);
  }
  28.33% {
    -webkit-transform: matrix3d(1.075, 0, 0, 0, 0, 0.898, 0, 0, 0, 0, 1, 0, -322.647, -202.048, 0, 1);
            transform: matrix3d(1.075, 0, 0, 0, 0, 0.898, 0, 0, 0, 0, 1, 0, -322.647, -202.048, 0, 1);
  }
  29.03% {
    -webkit-transform: matrix3d(1.063, 0, 0, 0, 0, 0.897, 0, 0, 0, 0, 1, 0, -318.884, -201.771, 0, 1);
            transform: matrix3d(1.063, 0, 0, 0, 0, 0.897, 0, 0, 0, 0, 1, 0, -318.884, -201.771, 0, 1);
  }
  29.93% {
    -webkit-transform: matrix3d(1.048, 0, 0, 0, 0, 0.899, 0, 0, 0, 0, 1, 0, -314.277, -202.202, 0, 1);
            transform: matrix3d(1.048, 0, 0, 0, 0, 0.899, 0, 0, 0, 0, 1, 0, -314.277, -202.202, 0, 1);
  }
  35.54% {
    -webkit-transform: matrix3d(0.979, 0, 0, 0, 0, 0.962, 0, 0, 0, 0, 1, 0, -293.828, -216.499, 0, 1);
            transform: matrix3d(0.979, 0, 0, 0, 0, 0.962, 0, 0, 0, 0, 1, 0, -293.828, -216.499, 0, 1);
  }
  36.74% {
    -webkit-transform: matrix3d(0.972, 0, 0, 0, 0, 0.979, 0, 0, 0, 0, 1, 0, -291.489, -220.242, 0, 1);
            transform: matrix3d(0.972, 0, 0, 0, 0, 0.979, 0, 0, 0, 0, 1, 0, -291.489, -220.242, 0, 1);
  }
  39.44% {
    -webkit-transform: matrix3d(0.962, 0, 0, 0, 0, 1.01, 0, 0, 0, 0, 1, 0, -288.62, -227.228, 0, 1);
            transform: matrix3d(0.962, 0, 0, 0, 0, 1.01, 0, 0, 0, 0, 1, 0, -288.62, -227.228, 0, 1);
  }
  41.04% {
    -webkit-transform: matrix3d(0.961, 0, 0, 0, 0, 1.022, 0, 0, 0, 0, 1, 0, -288.247, -229.999, 0, 1);
            transform: matrix3d(0.961, 0, 0, 0, 0, 1.022, 0, 0, 0, 0, 1, 0, -288.247, -229.999, 0, 1);
  }
  44.44% {
    -webkit-transform: matrix3d(0.966, 0, 0, 0, 0, 1.032, 0, 0, 0, 0, 1, 0, -289.763, -232.215, 0, 1);
            transform: matrix3d(0.966, 0, 0, 0, 0, 1.032, 0, 0, 0, 0, 1, 0, -289.763, -232.215, 0, 1);
  }
  52.15% {
    -webkit-transform: matrix3d(0.991, 0, 0, 0, 0, 1.006, 0, 0, 0, 0, 1, 0, -297.363, -226.449, 0, 1);
            transform: matrix3d(0.991, 0, 0, 0, 0, 1.006, 0, 0, 0, 0, 1, 0, -297.363, -226.449, 0, 1);
  }
  59.86% {
    -webkit-transform: matrix3d(1.006, 0, 0, 0, 0, 0.99, 0, 0, 0, 0, 1, 0, -301.813, -222.759, 0, 1);
            transform: matrix3d(1.006, 0, 0, 0, 0, 0.99, 0, 0, 0, 0, 1, 0, -301.813, -222.759, 0, 1);
  }
  61.66% {
    -webkit-transform: matrix3d(1.007, 0, 0, 0, 0, 0.991, 0, 0, 0, 0, 1, 0, -302.102, -222.926, 0, 1);
            transform: matrix3d(1.007, 0, 0, 0, 0, 0.991, 0, 0, 0, 0, 1, 0, -302.102, -222.926, 0, 1);
  }
  63.26% {
    -webkit-transform: matrix3d(1.007, 0, 0, 0, 0, 0.992, 0, 0, 0, 0, 1, 0, -302.171, -223.276, 0, 1);
            transform: matrix3d(1.007, 0, 0, 0, 0, 0.992, 0, 0, 0, 0, 1, 0, -302.171, -223.276, 0, 1);
  }
  75.28% {
    -webkit-transform: matrix3d(1.001, 0, 0, 0, 0, 1.003, 0, 0, 0, 0, 1, 0, -300.341, -225.696, 0, 1);
            transform: matrix3d(1.001, 0, 0, 0, 0, 1.003, 0, 0, 0, 0, 1, 0, -300.341, -225.696, 0, 1);
  }
  83.98% {
    -webkit-transform: matrix3d(0.999, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1, 0, -299.61, -225.049, 0, 1);
            transform: matrix3d(0.999, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1, 0, -299.61, -225.049, 0, 1);
  }
  85.49% {
    -webkit-transform: matrix3d(0.999, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1, 0, -299.599, -224.94, 0, 1);
            transform: matrix3d(0.999, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1, 0, -299.599, -224.94, 0, 1);
  }
  90.69% {
    -webkit-transform: matrix3d(0.999, 0, 0, 0, 0, 0.999, 0, 0, 0, 0, 1, 0, -299.705, -224.784, 0, 1);
            transform: matrix3d(0.999, 0, 0, 0, 0, 0.999, 0, 0, 0, 0, 1, 0, -299.705, -224.784, 0, 1);
  }
  100% {
    -webkit-transform: matrix3d(1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1, 0, -300, -225, 0, 1);
            transform: matrix3d(1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1, 0, -300, -225, 0, 1);
  }
}
</style>

<script>
popup = {
  init: function(){
    $('figure').click(function(){
      popup.open($(this));
    });
    
    $(document).on('click', '.popup img', function(){
      return false;
    }).on('click', '.popup', function(){
      popup.close();
    })
  },
  open: function($figure) {
    $('.gallery').addClass('pop');
    $popup = $('<div class="popup" />').appendTo($('body'));
    $fig = $figure.clone().appendTo($('.popup'));
    $bg = $('<div class="bg" />').appendTo($('.popup'));
    $close = $('<div class="close"><svg><use xlink:href="#close"></use></svg></div>').appendTo($fig);
    $shadow = $('<div class="shadow" />').appendTo($fig);
    src = $('img', $fig).attr('src');
    $shadow.css({backgroundImage: 'url(' + src + ')'});
    $bg.css({backgroundImage: 'url(' + src + ')'});
    setTimeout(function(){
      $('.popup').addClass('pop');
    }, 10);
  },
  close: function(){
    $('.gallery, .popup').removeClass('pop');
    setTimeout(function(){
      $('.popup').remove()
    }, 100);
  }
}
popup.init()
</script>

@endsection

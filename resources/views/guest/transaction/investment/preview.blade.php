@extends('layouts.guest')

@section('content')
    <!--begin::Toolbar-->
    <div class="toolbar py-5 py-lg-15" id="kt_toolbar">
        <!--begin::Container-->
        <div id="kt_toolbar_container" class="container-xxl d-flex flex-stack flex-wrap">
            <!--begin::Page title-->
            <div class="page-title d-flex flex-column me-3">
                <!--begin::Title-->
                <h1 class="d-flex text-white fw-bolder my-1 fs-3">Preview Deposit</h1>
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
                    <li class="breadcrumb-item text-white opacity-75">Deposit</li>
                    <!--end::Item-->
                    <!--begin::Item-->
                    <li class="breadcrumb-item">
                        <span class="bullet bg-white opacity-75 w-5px h-2px"></span>
                    </li>
                    <!--end::Item-->
                    <!--begin::Item-->
                    <li class="breadcrumb-item text-white opacity-75">Preview</li>
                    <!--end::Item-->

                </ul>
                <!--end::Breadcrumb-->
            </div>
            <!--end::Page title-->
            <!--begin::Actions-->
            @include('partials.guest.back')
            <!--end::Actions-->
        </div>
        <!--end::Container-->
    </div>
    <!--end::Toolbar-->
    <!--begin::Container-->

    <div id="kt_content_container" class="d-flex flex-column-fluid align-items-start container-xxl">
        <!--begin::Post-->
        <div class="content flex-row-fluid" id="kt_content">
            <!-- begin::Invoice 1-->
            <div class="card">
                <!-- begin::Body-->
                <div class="card-body py-20">
                    <!-- begin::Wrapper-->
                    <div class="mw-lg-950px mx-auto w-100">
                        <!-- begin::Header-->
                        <div class="d-flex justify-content-between flex-column flex-sm-row mb-19">
                            <h4 class="fw-boldest text-gray-800 fs-2qx pe-5 pb-7">INVESTMENT INVOICE</h4>

                            <!--end::Logo-->
                            <div class="text-sm-end">
                                <!--begin::Logo-->
                                <a href="#">
                                    <img alt="Logo" src="{{ asset('front/images/logo.png') }}" width="10%">
                                </a>
                                <!--end::Logo-->
                                <!--begin::Text-->
                                <div class="text-sm-end fw-bold fs-4 text-muted mt-7">
                                    <div>{{ auth()->user()->credential->address ?? 'N/A' }}</div>
                                    <div>{{ auth()->user()->country }}</div>
                                </div>
                                <!--end::Text-->
                            </div>
                        </div>
                        <!--end::Header-->
                        <!--begin::Body-->
                        <div class="border-bottom pb-12">
                            <!--begin::Image-->

                            <!--end::Image-->
                            <!--begin::Wrapper-->
                            <div class="d-flex justify-content-between flex-column flex-md-row">
                                <!--begin::Content-->
                                <div class="flex-grow-1 pt-8 mb-13">
                                    <!--begin::Table-->
                                    <div class="table-responsive border-bottom mb-14">
                                        <table class="table">
                                            <thead>
                                            <tr class="border-bottom fs-6 fw-bolder text-muted text-uppercase">
                                                <th class="min-w-175px pb-9">Description</th>
                                                <th class="min-w-70px pb-9 text-end">Plans</th>
                                                <th class="min-w-80px pb-9 text-end">Investment Amount</th>
                                                <th class="min-w-80px pb-9 text-end">Interest (%)</th>
                                                <th class="min-w-80px pb-9 text-end">Duration</th>
                                                <th class="min-w-80px pb-9 text-end">Total Profit</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <tr class="fw-bolder text-gray-700 fs-5 text-end">
                                                <td class="d-flex align-items-center pt-11"><i class="fa fa-genderless text-success fs-1 me-2"></i> Package </td>
                                                <td class="pt-11">@if($plan == 'starter') Minimum @elseif($plan == 'advance') Standard @elseif($plan == 'ultimate') Premium @endif Package</td>
                                                <td class="pt-11">${{ number_format($request->amount) }}</td>
                                                <td class="pt-11">@if($plan == 'Enterprise') 10% @elseif($plan == 'Unlimited') 20% @elseif($plan == 'World Class')  15% @endif</td>
                                                <td class="pt-11">@if($plan == 'Enterprise') 3Weeks @elseif($plan == 'Unlimited') 5weeks @elseif($plan == 'World Class') 4weeks @endif</td>
                                                <td class="pt-11 fs-5 pe-lg-6 text-dark fw-boldest">@if($plan == 'Enterprise')${{ number_format($request->amount/100 * 10 * 3) }} @elseif($plan == 'Unlimited') ${{ number_format($request->amount/100 * 20 * 5) }} @elseif($plan == 'World Class')  ${{ number_format($request->amount/100 * 15 * 4) }} @endif</td>

                                            </tr>
                                            <tr class="fw-bolder text-gray-700 fs-5 text-end">
                                                <td class="d-flex align-items-center">
                                                    <i class="fa fa-genderless text-danger fs-1 me-2"></i>Trading Fee</td>
                                                <td>N/A</td>
                                                <td>$0.00</td>
                                                <td>$0.00</td>
                                                <td>$0.00</td>
                                                <td class="fs-5 text-dark fw-boldest pe-lg-6">N/A</td>
                                            </tr>
                                            <tr class="fw-bolder text-gray-700 fs-5 text-end">
                                                <td class="d-flex align-items-center pb-10">
                                                    <i class="fa fa-genderless text-danger fs-1 me-2"></i>Trading View</td>
                                                <td>N/A</td>
                                                <td>$0.00</td>
                                                <td>$0.00</td>
                                                <td>$0.00</td>
                                                <td class="fs-5 text-dark fw-boldest pe-lg-6">N/A</td>
                                            </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <!--end::Table-->
                                    <div class="notice d-flex bg-light-success rounded border-success border border-dashed p-5 m-2">
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
                                                <ul class="nav nav-tabs nav-line-tabs nav-line-tabs-2x border-transparent fs-5 fw-bolder">

                                                    <div class="fs-7 text-gray-700">You Start earning as soon as you purchase {{ $plan }} Plan</div>
                                                </ul>

                                            </div>
                                            <!--end::Content-->
                                        </div>
                                        <!--end::Wrapper-->
                                    </div>
                                    <br>
                                    <!--end::Section-->
                                </div>
                                <!--end::Content-->
                                <!--begin::Separator-->
                                <div class="border-end d-none d-md-block mh-450px mx-9"></div>
                                <!--end::Separator-->
                                <!--begin::Content-->
                                <div class="text-end pt-10">
                                    <!--begin::Total Amount-->
                                    <div class="fs-3 fw-bolder text-muted mb-3">TOTAL AMOUNT</div>
                                    <div class="fs-xl-2x fs-2 fw-boldest">${{ number_format($request->amount) }}</div>
                                    <div class="text-muted fw-bold"><del>${{ number_format($request->amount + 499) }}</del></div>
                                    <!--end::Total Amount-->
                                    <div class="border-bottom w-100 my-7 my-lg-16"></div>
                                    <!--begin::Invoice To-->
                                    <div class="text-gray-600 fs-6 fw-bold mb-3">INVOICE FROM.</div>
                                    <div class="fs-6 text-gray-800 fw-bold mb-8">{{ auth()->user()->username }}</div>
                                    <!--end::Invoice To-->
                                    <!--begin::Invoice No-->
                                    <!--end::Invoice No-->
                                    <!--begin::Invoice Date-->
                                    <div class="text-gray-600 fs-6 fw-bold mb-3">DATE</div>
                                    <div class="fs-6 text-gray-800 fw-bold">{{ date('d M Y') }}</div>
                                    <!--end::Invoice Date-->
                                </div>
                                <!--end::Content-->
                            </div>
                            <!--end::Wrapper-->
                        <!--end::Body-->
                        <!-- begin::Footer-->
                        <div class="d-flex flex-stack flex-wrap mt-lg-20 pt-13">
                            <!-- begin::Actions-->
                            <div class="my-1 me-5">
                                <!-- begin::Pint-->
                                <button type="button" class="btn btn-light-dark my-1 me-12" onclick="window.print();">Print Invoice <i class="fa fa-print"></i></button>
                                <!-- end::Pint-->
                                <!-- begin::Download-->
                                <!-- end::Download-->
                            </div>
                            <!-- end::Actions-->
                            <form action="{{ route('investment.process') }}" method="post">
                                <div class="row">
                                    @csrf
                                    <input type="hidden" name="amount" value="{{ $request->amount }}">
                                    <input type="hidden" name="plan" value="{{ $plan }}">

                                    <input type="hidden" name="amount" value="{{ $request->amount }}">
                                    <input type="hidden" name="paymentMethod" value="{{ $request->paymentMethod }}">
                                    <!-- begin::Action-->
                                    <button type="submit" class="btn btn-success my-1">Confirm Investment <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-check-circle-fill" viewBox="0 0 16 16">
                                            <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"/>
                                        </svg></button>
                                </div>
                            </form>
                            <button onclick="executeExample('warningConfirm')" type="submit" class="btn btn-light-danger my-1">Cancel <i class="fa fa-times"></i></button>


                            <!-- end::Action-->
                        </div>
                        </div>


                        <script>
                            function executeExample(param) {
                                Swal.fire({
                                    title: 'Are you sure?',
                                    text: "do you want to revert your payment!",
                                    icon: 'warning',
                                    showCancelButton: true,
                                    confirmButtonColor: '#3085d6',
                                    cancelButtonColor: '#d33',
                                    confirmButtonText: 'Yes, delete it!'
                                }).then((result) => {
                                    if (result.isConfirmed) {
                                        Swal.fire(
                                            'Aborted!',
                                            'Your progress has been aborted.',
                                            'success',
                                        )
                                        window.location.href = "{{ route('home') }}";
                                    }
                                })
                            }
                        </script>
                        <!-- end::Footer-->
                    </div>
                    <!-- end::Wrapper-->
                </div>
                <!-- end::Body-->
            </div>
            <!-- end::Invoice 1-->
        </div>
        <!--end::Post-->
    </div>
    <!--end::Container-->
@endsection

@extends('layouts.admin')

@section('title', 'Add Users')

@section('content')
    <div class="toolbar py-5 py-lg-15" id="kt_toolbar">
        <!--begin::Container-->
        <div id="kt_toolbar_container" class="container-xxl d-flex flex-stack flex-wrap">
            <!--begin::Page title-->
            <div class="page-title d-flex flex-column me-3">
                <!--begin::Title-->
                <h1 class="d-flex text-white fw-bolder my-1 fs-3">Users</h1>
                <!--end::Title-->
                <!--begin::Breadcrumb-->
                <ul class="breadcrumb breadcrumb-separatorless fw-bold fs-7 my-1">
                    <!--begin::Item-->
                    <li class="breadcrumb-item text-white opacity-75">
                        <a href="{{ route('admin.index') }}" class="text-white text-hover-primary">Home</a>
                    </li>
                    <!--end::Item-->
                    <!--begin::Item-->
                    <li class="breadcrumb-item">
                        <span class="bullet bg-white opacity-75 w-5px h-2px"></span>
                    </li>
                    <!--end::Item-->
                    <!--begin::Item-->
                    <li class="breadcrumb-item text-white opacity-75">add users</li>
                    <!--end::Item-->
                </ul>
                <!--end::Breadcrumb-->
            </div>
            <!--end::Page title-->
            <!--begin::Actions-->
            <div class="d-flex align-items-center py-3 py-md-1">
                <!--begin::Wrapper-->

                <!--end::Wrapper-->
            @include('partials.guest.back')
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
                <div class="card-body pb-0">
                    <!--begin::Heading-->
                    <div class="card-px text-center pt-20 pb-5">
                        <!--begin::Title-->
                        <h2 class="fs-2x fw-bolder mb-0">Create Administrator & User Accounts</h2>
                        <!--end::Title-->
                        <!--begin::Description-->
                        <div class="p-2">
                            @include('alerts')
                        </div>
                        <p class="text-gray-400 fs-4 fw-bold py-7">Click on the below buttons to launch
                            <br>create account</p>
                        <!--end::Description-->
                        <!--begin::Action-->
                        <div class="row">
                            <div class="col-12">
                                <a href="#" class="btn btn-primary er fs-6 px-8 py-4" data-bs-toggle="modal" data-bs-target="#kt_modal_new_target">Add New Users</a>
                            </div>
                        </div>
                        <!--end::Action-->
                    </div>
                    <!--end::Heading-->
                    <!--begin::Illustration-->
                    <div class="text-center px-5">
                        <img src="{{ asset('backend/assets/media/illustrations/sigma-1/3.png') }}" alt="" class="mw-100 h-200px h-sm-325px">
                    </div>
                    <!--end::Illustration-->
                </div>
                <!--end::Card body-->
            </div>
            <!--end::Card-->
        @include('admin.add.users')
        <!--end::Modal - Create project-->
        </div>
        <!--end::Post-->
    </div>

@endsection

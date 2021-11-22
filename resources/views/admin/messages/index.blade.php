@extends('layouts.admin')

@section('title', 'Show messages')

@section('content')



    <div class="toolbar py-5 py-lg-15" id="kt_toolbar">
        <!--begin::Container-->
        <div id="kt_toolbar_container" class="container-xxl d-flex flex-stack flex-wrap">
            <!--begin::Page title-->
            <div class="page-title d-flex flex-column me-3">
                <!--begin::Title-->
                <h1 class="d-flex text-white fw-bolder my-1 fs-3">Show Mesages</h1>
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
                    <li class="breadcrumb-item text-white opacity-75">Messages</li>
                    <!--end::Item-->
                    <!--begin::Item-->

                    <li class="breadcrumb-item text-white opacity-75">Chat</li>

                </ul>
                <!--end::Breadcrumb-->
            </div>
            <!--end::Page title-->

        </div>
        <!--end::Container-->
    </div>
    <!--end::Toolbar-->
    <!--begin::Container-->
    <div id="kt_content_container" class="d-flex flex-column-fluid align-items-start container-xxl">
        <!--begin::Post-->
        <div class="content flex-row-fluid" id="kt_content">
            <!--begin::Layout-->
            <div class="d-flex flex-column flex-lg-row">
                <div class="tab-content col-md-9" id="myTabContent">
                    <div class="flex-lg-row-fluid ms-lg-7 ms-xl-10 tab-pane fade active show" id="kt_tab_pane_1" role="tabpanel">
                        <!--begin::Messenger-->

                        <div class="card" id="kt_chat_messenger">

                            <!--begin::Card body-->
                            <div class="card-body" id="kt_chat_messenger_body">
                                <div class="row">
                                    <div class="col-md-10">
                                        <h2>{{ $user->name }}</h2>
                                    </div>

                                    <div class="col-md-2">
                                        <a @class('btn btn-light-info btn-sm') href="#end"><i class="fa fa-arrow-down"></i> Scroll</a>
                                    </div>
                                </div>
                                <hr>
                                <!--begin::Messages-->
                                <div class="scroll-y me-n5 pe-5 h-300px h-lg-auto" data-kt-element="messages" data-kt-scroll="true" data-kt-scroll-activate="{default: false, lg: true}" data-kt-scroll-max-height="auto" data-kt-scroll-dependencies="#kt_header, #kt_toolbar, #kt_footer, #kt_chat_messenger_header, #kt_chat_messenger_footer" data-kt-scroll-wrappers="#kt_content, #kt_chat_messenger_body" data-kt-scroll-offset="-2px">
                                    <!--begin::Message(in)-->
                                            <!--begin::Wrapper-->
                                            @if($showMessage->count() > 0)
                                                @foreach($showMessage as $m)
                                                    <div class="d-flex @if($m->sender == 'support@altriagroupasset.com') justify-content-end @else justify-content-start @endif mb-10">
                                                        <div class="d-flex flex-column @if($m->sender == 'support@altriagroupasset.com') align-items-end @else align-items-start @endif ">
                                                            <!--begin::User-->
                                                            <div class="d-flex align-items-center mb-2">

                                                                <!--end::Avatar-->
                                                                <!--begin::Details-->
                                                                <div class="ms-3">
                                                                    <span class="text-muted fs-7 mb-1">{{ $m->created_at->toFormattedDateString() .' ('.date("H:i a", strtotime($m->created_at)) .')' }}</span>
                                                                </div>

                                                                <div class="ms-3">
                                                                    <a class="fs-5 fw-bolder text-gray-900 text-hover-primary me-1">@if($m->sender == 'support@altriagroupasset.com')@endif </a>

                                                                </div>
                                                                <!--end::Details-->
                                                            </div>
                                                            <!--end::User-->
                                                            <!--begin::Text-->
                                                            <div class="p-5 rounded @if($m->sender == 'support@altriagroupasset.com') bg-light-success @else bg-light-dark text-dark @endif fw-bold mw-lg-400px text-start" data-kt-element="message-text">
                                                                {{ $m->message }}
                                                            </div>
                                                        </div>
                                                        <!--end::Wrapper-->
                                                    </div>
                                        @endforeach
                                    @endif
                                    <p id="end"></p>

                                </div>
                                <!--end::Messages-->
                            </div>
                            <!--end::Card body-->
                            <!--begin::Card footer-->
                            <div class="card-footer pt-4" id="kt_chat_messenger_footer">
                                <form action="{{ route('messages.store') }}" method="post">
                                    @csrf
                                    <!--begin::Input-->
                                        <input type="hidden" name="user_id" value="{{ $user->id }}">
                                        <input type="hidden" name="sender" value="{{ env('APP_MAIL') }}">
                                        <input type="hidden" name="receiver" value="{{ $user->username }}">
                                    <input class="form-control form-control-flush mb-3" rows="1" data-kt-element="input" name="message" placeholder="Type a message">
                                    <!--end::Input-->
                                    <!--begin:Toolbar-->
                                    <div class="d-flex flex-stack">
                                        <!--begin::Actions-->
                                        <div class="d-flex align-items-center me-2">
{{--                                            <a href="#down" class="badge badge-light-primary" data-kt-element="send">Scroll Buttom <i class="fa fa-arrow-down"></i></a>--}}
                                        </div>
                                        <!--end::Actions-->
                                        <!--begin::Send-->
                                        <button class="btn btn-light-success" type="submit" data-kt-element="send"> <i class="fas fa-paper-plane" style="font-size: 20px"></i> </button>
                                        <!--end::Send-->
                                    </div>
                                    <!--end::Toolbar-->
                                </form>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <div class="p-6"></div>

@endsection


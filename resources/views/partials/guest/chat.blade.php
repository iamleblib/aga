<!--begin::Chat drawer-->
<div id="kt_drawer_chat" class="bg-body" data-kt-drawer="true" data-kt-drawer-name="chat" data-kt-drawer-activate="true" data-kt-drawer-overlay="true" data-kt-drawer-width="{default:'300px', 'md': '500px'}" data-kt-drawer-direction="end" data-kt-drawer-toggle="#kt_drawer_chat_toggle" data-kt-drawer-close="#kt_drawer_chat_close">
    <!--begin::Messenger-->
    <div class="card w-100 rounded-0 border-0" id="kt_drawer_chat_messenger">
        <!--begin::Card header-->
        <div class="card-header pe-5" id="kt_drawer_chat_messenger_header">
            <!--begin::Title-->
            <div class="card-title">
                <!--begin::User-->
                <div class="d-flex justify-content-center flex-column me-3">
                    <a href="#" class="fs-4 fw-bolder text-gray-900 text-hover-primary me-1 mb-2 lh-1">Coinbase Support team</a>
                    <!--begin::Info-->


                    <div class="row">
                        <div class="col-8">
                            <div class="mb-0 lh-1">
                                <span class="badge badge-success badge-circle w-10px h-10px me-1"></span>
                                <span class="fs-7 fw-bold text-muted">Active</span>
                            </div>
                        </div>

                        <div class="col-4">
                            <a style="animation: ease-in-out" href="#end" class="fs-7 fw-bold text-muted"><i class="fa fa-arrow-down"></i> Scroll</a>
                        </div>
                    </div>
                    <!--end::Info-->
                </div>
                <!--end::User-->
            </div>
            <!--end::Title-->
            <!--begin::Card toolbar-->
            <div class="card-toolbar">

                <!--begin::Close-->
                <div class="btn btn-sm btn-icon btn-active-light-primary" id="kt_drawer_chat_close">
                    <!--begin::Svg Icon | path: icons/duotune/arrows/arr061.svg-->
                    <span class="svg-icon svg-icon-2">
								<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
									<rect opacity="0.5" x="6" y="17.3137" width="16" height="2" rx="1" transform="rotate(-45 6 17.3137)" fill="black" />
									<rect x="7.41422" y="6" width="16" height="2" rx="1" transform="rotate(45 7.41422 6)" fill="black" />
								</svg>
							</span>
                    <!--end::Svg Icon-->
                </div>
                <!--end::Close-->
            </div>
            <!--end::Card toolbar-->
        </div>
        <!--end::Card header-->
        <!--begin::Card body-->
        <div class="card-body" id="kt_drawer_chat_messenger_body">
            <!--begin::Messages-->
            <div class="scroll-y me-n5 pe-5" data-kt-element="messages" data-kt-scroll="true" data-kt-scroll-activate="true" data-kt-scroll-height="auto" data-kt-scroll-dependencies="#kt_drawer_chat_messenger_header, #kt_drawer_chat_messenger_footer" data-kt-scroll-wrappers="#kt_drawer_chat_messenger_body" data-kt-scroll-offset="0px">
                <!--begin::Wrapper-->
                @if(auth()->user()->message()->count() > 0)
                    @foreach(auth()->user()->message()->get() as $message)
                        <div class="d-flex @if($message->sender == auth()->user()->username) justify-content-end @else justify-content-start @endif  mb-10">

                            <div class="d-flex flex-column @if($message->sender == auth()->user()->username) align-items-end @else align-items-start @endif">
                                <!--begin::User-->
                                <div class="d-flex align-items-center mb-2">
                                    @if($message->sender == auth()->user()->username) @else<strong>Admin</strong>@endif
                                <!--begin::Avatar-->
                                {{--                                <div class="symbol symbol-35px symbol-circle">--}}
                                {{--                                    <img alt="Pic" src="https://ui-avatars.com/api/?name={{ $message->receiver }}" />--}}
                                {{--                                </div>--}}
                                <!--end::Avatar-->
                                    <!--begin::Details-->
                                    <div class="ms-3">
                                        {{--                                    <a href="#" class="fs-5 fw-bolder text-gray-900 text-hover-primary me-1">@if($message->sender == auth()->user()->username) You @else {{ $message->receiver }} @endif</a>--}}
                                        <span class="text-muted fs-7 mb-1">{{ $message->created_at->toDayDateTimeString() }}</span>
                                    </div>
                                    <!--end::Details-->
                                </div>
                                <!--end::User-->
                                <!--begin::Text-->
                                <div style="border-radius: 30px 2px 30px 2px !important; box-shadow: 7px 7px 10px !important" class="p-5 rounded @if($message->sender == auth()->user()->username) bg-success text-white  @else bg-light-dark text-dark  @endif fw-bold mw-lg-400px @if($message->sender == auth()->user()->username)text-end @else text-start @endif " data-kt-element="message-text">{{ $message->message }}</div>
                                <!--end::Text-->
                            </div>
                        </div>

                    @endforeach
                <!--end::Wrapper-->
                @else
                    <p class="text-center alert alert-danger">No Message Yet! <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chat-dots-fill" viewBox="0 0 16 16">
                            <path d="M16 8c0 3.866-3.582 7-8 7a9.06 9.06 0 0 1-2.347-.306c-.584.296-1.925.864-4.181 1.234-.2.032-.352-.176-.273-.362.354-.836.674-1.95.77-2.966C.744 11.37 0 9.76 0 8c0-3.866 3.582-7 8-7s8 3.134 8 7zM5 8a1 1 0 1 0-2 0 1 1 0 0 0 2 0zm4 0a1 1 0 1 0-2 0 1 1 0 0 0 2 0zm3 1a1 1 0 1 0 0-2 1 1 0 0 0 0 2z"/>
                        </svg></p>
                @endif
                <span id="end"></span>
            </div>
            <!--end::Messages-->
        </div>
        <!--end::Card body-->
        <!--begin::Card footer-->
        <div class="card-footer pt-4" id="kt_drawer_chat_messenger_footer">
            <!--begin::Input-->
            <form action="{{ route('guests.send.message', auth()->id()) }}" method="post">
                @csrf
                <input name="message" type="text" class="form-control form-control-flush mb-3" rows="1" data-kt-element="input" placeholder="Type a message">
                <!--end::Input-->
                <!--begin:Toolbar-->
                <div class="d-flex flex-stack" >
                    <!--begin::Send-->
                    <button class="btn btn-primary" type="submit" data-kt-element="send"> <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-send-check-fill" viewBox="0 0 16 16">
                            <path d="M15.964.686a.5.5 0 0 0-.65-.65L.767 5.855H.766l-.452.18a.5.5 0 0 0-.082.887l.41.26.001.002 4.995 3.178 1.59 2.498C8 14 8 13 8 12.5a4.5 4.5 0 0 1 5.026-4.47L15.964.686Zm-1.833 1.89L6.637 10.07l-.215-.338a.5.5 0 0 0-.154-.154l-.338-.215 7.494-7.494 1.178-.471-.47 1.178Z"/>
                            <path d="M16 12.5a3.5 3.5 0 1 1-7 0 3.5 3.5 0 0 1 7 0Zm-1.993-1.679a.5.5 0 0 0-.686.172l-1.17 1.95-.547-.547a.5.5 0 0 0-.708.708l.774.773a.75.75 0 0 0 1.174-.144l1.335-2.226a.5.5 0 0 0-.172-.686Z"/>
                        </svg></button>
                    <!--end::Send-->
                </div>
            </form>

            <!--end::Toolbar-->
        </div>
        <!--end::Card footer-->
    </div>
    <!--end::Messenger-->
</div>
<!--end::Chat drawer-->

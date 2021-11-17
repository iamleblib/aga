
<!--begin::Card header-->
<div class="card-header cursor-pointer">
    <!--begin::Card title-->
    <div class="card-title m-0">
        <h3 class="fw-bolder m-0">Profile Details</h3>
    </div>
    <!--end::Card title-->
    <!--begin::Action-->
    <ul class="nav nav-tabs nav-line-tabs nav-line-tabs-2x border-transparent fs-5 fw-bolder">
            <a class="btn btn-dark align-self-center" data-bs-toggle="tab" href="#Settings">Edit Profile <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                    <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
                    <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/>
                </svg></a>
    </ul>
    <!--end::Action-->
</div>
<!--begin::Card header-->
<!--begin::Card body-->
<div class="card-body p-9">

    <!--begin::Row-->
    <div class="row mb-7">
        <!--begin::Label-->
        <label class="col-lg-4 fw-bold text-muted">Full Name</label>
        <!--end::Label-->
        <!--begin::Col-->
        <div class="col-lg-8">
            <span class="fw-bolder fs-6 text-gray-800">{{ auth()->user()->name }}</span>
        </div>
        <!--end::Col-->
    </div>
    <!--end::Row-->
    <!--begin::Input group-->
    <div class="row mb-7">
        <!--begin::Label-->
        <label class="col-lg-4 fw-bold text-muted">Username</label>
        <!--end::Label-->
        <!--begin::Col-->
        <div class="col-lg-8 fv-row">
            <span class="fw-bold text-gray-800 fs-6">{{ auth()->user()->username }}</span>
        </div>
        <!--end::Col-->
    </div>
    <!--end::Input group-->
    <!--begin::Input group-->
    <div class="row mb-7">
        <!--begin::Label-->
        <label class="col-lg-4 fw-bold text-muted">E-mail
            <i class="text-danger fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip" title="E-mail cannot be edited"></i></label>
        <!--end::Label-->
        <!--begin::Col-->
        <div class="col-lg-8 d-flex align-items-center">
            <span class="fw-bolder fs-6 text-gray-800 me-2">{{ auth()->user()->email }}</span>
            <span class="badge badge-success">Verified</span>
        </div>
        <!--end::Col-->
    </div>
    <!--end::Input group-->
    <!--begin::Input group-->
    <div class="row mb-7">
        <!--begin::Label-->
        <label class="col-lg-4 fw-bold text-muted">Phone</label>
        <!--end::Label-->
        <!--begin::Col-->
        <div class="col-lg-8">
            <a href="tel:{{ auth()->user()->phone }}" class="fw-bold fs-6 text-gray-800 text-hover-primary">{{ auth()->user()->phone }}</a>
            <span class="badge badge-warning">Unverified</span>
        </div>
        <!--end::Col-->
    </div>
    <!--end::Input group-->
    <!--begin::Input group-->
    <div class="row mb-7">
        <!--begin::Label-->
        <label class="col-lg-4 fw-bold text-muted">Country</label>
        <!--end::Label-->
        <!--begin::Col-->
        <div class="col-lg-8">
            <span class="fw-bolder fs-6 text-gray-800">{{ auth()->user()->country }}</span>
        </div>
        <!--end::Col-->
    </div>

    <div class="row mb-7">
        <!--begin::Label-->
        <label class="col-lg-4 fw-bold text-muted">Address</label>
        <!--end::Label-->
        <!--begin::Col-->
        <div class="col-lg-8">
            <span class="fw-bolder fs-6 text-gray-800">{{ auth()->user()->credential->address ?? 'N/A' }}</span>
        </div>
        <!--end::Col-->
    </div>

    <div class="row mb-7">
        <!--begin::Label-->
        <label class="col-lg-4 fw-bold text-muted">Gender</label>
        <!--end::Label-->
        <!--begin::Col-->
        <div class="col-lg-8">
            <span class="fw-bolder fs-6 text-gray-800">{{ auth()->user()->credential->gender ?? 'N/A' }}</span>
        </div>
        <!--end::Col-->
    </div>

    <div class="row mb-7">
        <!--begin::Label-->
        <label class="col-lg-4 fw-bold text-muted">D.O.B <i class="text-danger fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip" title="date of birth"></i></label>
        <!--end::Label-->
        <!--begin::Col-->
        <div class="col-lg-8">
            <span class="fw-bolder fs-6 text-gray-800">{{ auth()->user()->credential->dob ?? 'N/A' }}</span>
        </div>
        <!--end::Col-->
    </div>
    <!--end::Input group-->
    <!--begin::Notice-->
    @if(auth()->user()->wallet()->count() == 0)
        <div class="notice d-flex bg-light-warning rounded border-warning border border-dashed p-6">
            <!--begin::Icon-->
            <!--begin::Svg Icon | path: icons/duotune/general/gen044.svg-->
            <span class="svg-icon svg-icon-2tx svg-icon-warning me-4">
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
                    <h4 class="text-gray-900 fw-bolder">We need your attention!</h4>
                    <ul class="nav nav-tabs nav-line-tabs nav-line-tabs-2x border-transparent fs-5 fw-bolder">

                        <div class="fs-6 text-gray-700">Your wallet addres has not been added for payment, please
                                <a data-bs-toggle="tab" class="fw-bolder" href="#Billing">Add Wallet Address <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-coin" viewBox="0 0 16 16">
                                        <path d="M5.5 9.511c.076.954.83 1.697 2.182 1.785V12h.6v-.709c1.4-.098 2.218-.846 2.218-1.932 0-.987-.626-1.496-1.745-1.76l-.473-.112V5.57c.6.068.982.396 1.074.85h1.052c-.076-.919-.864-1.638-2.126-1.716V4h-.6v.719c-1.195.117-2.01.836-2.01 1.853 0 .9.606 1.472 1.613 1.707l.397.098v2.034c-.615-.093-1.022-.43-1.114-.9H5.5zm2.177-2.166c-.59-.137-.91-.416-.91-.836 0-.47.345-.822.915-.925v1.76h-.005zm.692 1.193c.717.166 1.048.435 1.048.91 0 .542-.412.914-1.135.982V8.518l.087.02z"/>
                                        <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
                                        <path d="M8 13.5a5.5 5.5 0 1 1 0-11 5.5 5.5 0 0 1 0 11zm0 .5A6 6 0 1 0 8 2a6 6 0 0 0 0 12z"/>
                                    </svg></a>
                        </div>
                    </ul>

                </div>
                <!--end::Content-->
            </div>
            <!--end::Wrapper-->
        </div>
@endif
<!--end::Notice-->
</div>

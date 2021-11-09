
<!--begin::Card header-->
<div class="card-header cursor-pointer">
    <!--begin::Card title-->
    <div class="card-title m-0">
        <h3 class="fw-bolder m-0">Profile Details</h3>
    </div>
    <!--end::Card title-->
    <!--begin::Action-->
    <ul class="nav nav-tabs nav-line-tabs nav-line-tabs-2x border-transparent fs-5 fw-bolder">
            <a class="btn btn-dark align-self-center" data-bs-toggle="tab" href="#Settings">Edit Profile</a>
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
                                <a data-bs-toggle="tab" class="fw-bolder" href="#Billing">Add Wallet Address</a>
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

<!--end::Main-->
<!-- google language -->
<script type="text/javascript">
function googleTranslateElementInit() {
  new google.translate.TranslateElement({pageLanguage: 'en'}, 'google_translate_element');
}
</script>

<!--begin::Global Javascript Bundle(used by all pages)-->
<script src="{{ asset('backend/assets/plugins/global/plugins.bundle.js') }}"></script>
<script src="{{ asset('backend/assets/js/scripts.bundle.js') }}"></script>

<script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
<!-- main script -->
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<script>var hostUrl = "{{ asset('backend/assets/index.html') }}";</script>
<!--begin::Javascript-->

<!--end::Global Javascript Bundle-->


<!--begin::Page Custom Javascript(used by this page)-->
<script src="{{ asset('backend/assets/js/custom/widgets.js') }}"></script>
<script src="{{ asset('backend/assets/js/custom/apps/chat/chat.js') }}"></script>

<!--end::Page Custom Javascript-->

<script src="{{ asset('backend/assets/js/custom/modals/offer-a-deal.bundle.js') }}"></script>
<!--begin::Page Vendors Javascript(used by this page)-->
<script src="{{ asset('backend/assets/plugins/custom/datatables/datatables.bundle.js') }}"></script>
<!--end::Page Vendors Javascript-->

<script src="{{ asset('backend/assets/js/custom/apps/chat/chat.js')}}"></script>



<script src="{{ asset('backend/assets/js/custom/account/referrals/referral-program.js')}}"></script>

<script src="{{ asset('backend/assets/js/custom/apps/user-management/users/view/view.js') }}"></script>

<!--begin::Page Custom Javascript(used by this page)-->
<script src="{{ asset('backend/assets/js/custom/modals/users-search.js') }}"></script>
<script src="{{ asset('backend/assets/js/custom/widgets.js') }}"></script>
<!--begin::Page Vendors Javascript(used by this page)-->
<!--end::Page Vendors Javascript-->
<!--begin::Page Custom Javascript(used by this page)-->

<script src="{{ asset('backend/assets/js/custom/apps/user-management/users/list/table.js') }}"></script>
<script src="{{ asset('backend/assets/js/custom/apps/user-management/users/list/export-users.js') }}"></script>
<script src="{{ asset('backend/assets/js/custom/apps/user-management/users/list/add.js') }}"></script>
<!--end::Javascript-->

<!--begin::Page Vendors Javascript(used by this page)-->
<script src="{{ asset('backend/assets/plugins/custom/fullcalendar/fullcalendar.bundle.js') }}"></script>
<!--end::Page Vendors Javascript-->


<script src="{{ asset('backend/assets/js/custom/modals/create-app.js') }}"></script>
<script src="{{ asset('backend/assets/js/custom/modals/upgrade-plan.js') }}"></script>
<script src="{{ asset('backend/assets/js/custom/intro.js') }}"></script>


<script src="{{ asset('backend/assets/js/custom/modals/create-app.js')}}"></script>
<script src="{{ asset('backend/assets/js/custom/modals/upgrade-plan.js')}}"></script>

<script src="{{ asset('backend/assets/js/custom/account/settings/signin-methods.js') }}"></script>
<script src="{{ asset('backend/assets/js/custom/account/settings/profile-details.js') }}"></script>
<script src="{{ asset('backend/assets/js/custom/account/settings/deactivate-account.js') }}"></script>
<script src="{{ asset('backend/assets/js/custom/modals/two-factor-authentication.js') }}"></script>

<script src="{{ asset('backend/assets/js/custom/apps/user-management/users/view/update-details.js') }}"></script>
<script src="{{ asset('backend/assets/js/custom/apps/user-management/users/view/update-email.js') }}"></script>
<script src="{{ asset('backend/assets/js/custom/apps/user-management/users/view/update-password.js') }}"></script>
<script src="{{ asset('backend/assets/js/custom/apps/user-management/users/view/update-role.js') }}"></script>
<script src="{{ asset('backend/assets/js/custom/modals/create-account.js') }}"></script>
<script src="{{ asset('backend/assets/js/custom/apps/customers/list/list.js') }}"></script>

<!-- <script>
    function executeExample(){
        Swal.fire(
            '<h1>Coming Soon...</h1>',
            '<h4 class="text-info">Hello {{auth()->user()->username}},</h4>We have not released any assets for sale yet, we will notify you on this email <a class="text-info">{{auth()->user()->email}}</a> in a short time! <br>' +
            'Thank you!',
            'question',

    )
    }
</script> -->

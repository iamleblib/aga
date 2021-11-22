@extends('layouts.auth')

<!--End Page Title-->
<link rel="canonical" href="https://preview.keenthemes.com/metronic8" />
<!--begin::Fonts-->
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" />
<!--end::Fonts-->
<!--begin::Global Stylesheets Bundle(used by all pages)-->
<link href="{{ asset('backend/assets/plugins/global/plugins.bundle.css') }}" rel="stylesheet" type="text/css" />
<link href="{{ asset('backend/assets/css/style.bundle.css') }}" rel="stylesheet" type="text/css" />
<!--end::Global Stylesheets Bundle-->
<!--Begin::Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start': new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0], j=d.createElement(s),dl=l!='dataLayer'?'&amp;l='+l:'';j.async=true;j.src= 'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f); })(window,document,'script','dataLayer','GTM-5FS8GGP');</script>
<!--End::Google Tag Manager -->
<section class="page-title" style="background-image:url({{ asset('front/images/background/register.jpeg') }})">
    <div class="auto-container">
        <div class="content">
            <h1> <span>Register</span></h1>
            <ul class="page-breadcrumb">
                <li><a href="{{ route('front.index') }}">Home</a></li>
                <li>Sign up</li>
            </ul>
        </div>
    </div>
</section>

<body id="kt_body" class="bg-body">
<!--begin::Main-->
<div class="d-flex flex-column flex-root">
    <!--begin::Authentication - Sign-in -->
    <div class="d-flex flex-column flex-column-fluid bgi-position-y-bottom position-x-center bgi-no-repeat bgi-size-contain bgi-attachment-fixed" style="background-image: url(/metronic8/demo2/assets/media/illustrations/sigma-1/14.png">
        <!--begin::Content-->
        <div class="d-flex flex-center flex-column flex-column-fluid p-10 pb-lg-20">
            <!--begin::Logo-->
            <!--end::Logo-->
            <!--begin::Wrapper-->
            <div class="w-lg-600px bg-body rounded shadow-sm p-10 p-lg-15 mx-auto">
                <!--begin::Form-->
                <form class="form w-100" novalidate="novalidate" id="" autocomplete="off" method="POST" action="{{ route('register') }}">
                    @csrf
                    <!--begin::Heading-->
                    <div class="mb-10 text-center">

                        <a href="{{ route('front.index') }}" class="mb-12">
                            <img alt="Logo" src="{{ asset('front/images/logo.png') }}" class="h-40px" />
                        </a>
                        <!--begin::Title-->
                        <h1 class="text-dark mb-3">Sign up</h1>
                        <!--end::Title-->
                        <!--begin::Link-->
                        <div class="text-gray-400 fw-bold fs-4">Already have an account?
                            <a href="{{ route('login') }}" class="link-primary fw-bolder">Sign in here</a></div>
                        <!--end::Link-->
                    </div>
                    <!--end::Heading-->
                    <!--begin::Action-->
{{--                    <button type="button" class="btn btn-light-primary fw-bolder w-100 mb-10">--}}
{{--                        <img alt="Logo" src="{{ asset('backend/assets/media/svg/brand-logos/google-icon.svg') }}" class="h-20px me-3" />Sign in with Google</button>--}}
                    <!--end::Action-->
                    <!--begin::Separator-->
{{--                    <div class="d-flex align-items-center mb-10">--}}
{{--                        <div class="border-bottom border-gray-300 mw-50 w-100"></div>--}}
{{--                        <span class="fw-bold text-gray-400 fs-7 mx-2">OR</span>--}}
{{--                        <div class="border-bottom border-gray-300 mw-50 w-100"></div>--}}
{{--                    </div>--}}
                    <!--end::Separator-->
                    <!--begin::Input group-->
                    <div class="row fv-row mb-7">
                        <!--begin::Col-->
                        <div class="col-xl-8">
                            <label class="form-label fw-bolder text-dark fs-6">Full Name</label>
                            <input class="form-control form-control-lg form-control-solid @error('name') is-invalid @enderror" placeholder="Enter Full name" id="name" type="text" name="name" autocomplete="off" value="{{ old('name') }}" />
                            @error('name')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>

                        @if (Request::has('user'))
                            <input hidden  value="{{ Request::get('user') }}" id="refferal_id" type="text" class="form-control" name="referral">
                            <input hidden  value="{{ App\Models\User::where('username', Request::get('user'))->first()->id }}" id="user_id" type="text" class="form-control" name="user_id">
                        @else
                            <input hidden type="text" name="user_id" value="0">
                            <input hidden  value="Self Enrollment" id="refferal_email" type="text" class="form-control" name="referral">
                    @endif
                        <!--end::Col-->
                        <!--begin::Col-->
                        <div class="col-xl-4">
                            <label class="form-label fw-bolder text-dark fs-6">Username</label>
                            <input id="name" class="form-control form-control-lg form-control-solid  @error('username') is-invalid @enderror" type="text" placeholder="@- Username" name="username" value="{{ old('username') }}" autocomplete="off" />
                            @error('username')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>
                        <!--end::Col-->
                    </div>
                    <!--end::Input group-->
                    <!--begin::Input group-->
                    <div class="fv-row mb-7">
                        <label class="form-label fw-bolder text-dark fs-6">Email</label>
                        <input class="form-control form-control-lg form-control-solid  @error('email') is-invalid @enderror" oninput="checker()" value="{{ old('email') }}" type="email" placeholder="_ _ _@_ _.com" id="email-id" name="email" autocomplete="email" />
                        @error('email')
                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror
                    </div>


                        <div class="fv-row mb-7">
                            <label class="form-label fw-bolder text-dark fs-6">Phone</label>
                            <input title="Enter country code (+) and number not less than 10 or greater 15" pattern="[+][0-9]{10,15}" data-intl-tel-input-id="0" maxlength="14" minlength="11" class="form-control form-control-lg form-control-solid  @error('phone') is-invalid @enderror" value="{{ old('phone') }}" type="tel" placeholder="Enter your phone number" id="tel" name="phone" autocomplete="email" />
                            @error('phone')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>

                        <div class="fv-row mb-7">
                            <label class="form-label fw-bolder text-dark fs-6">Country</label>
                            <select id="country_selector"  required name="country" aria-label="Select a Country" data-control="select2" data-placeholder="{{ auth()->user()->country ?? '-- Select a Country --' }}" class="form-control-lg form-control-solid w-100 col-lg-12 form-control @error('country') is-invalid @enderror">
                                <option selected disabled value="{{ old('country') }}">-- Select Country --</option>
                                <option data-kt-flag="flags/afghanistan.svg" value="AF">Afghanistan</option>
                                <option data-kt-flag="flags/aland-islands.svg" value="AX">Aland Islands</option>
                                <option data-kt-flag="flags/albania.svg" value="AL">Albania</option>
                                <option data-kt-flag="flags/algeria.svg" value="DZ">Algeria</option>
                                <option data-kt-flag="flags/american-samoa.svg" value="AS">American Samoa</option>
                                <option data-kt-flag="flags/andorra.svg" value="AD">Andorra</option>
                                <option data-kt-flag="flags/angola.svg" value="AO">Angola</option>
                                <option data-kt-flag="flags/anguilla.svg" value="AI">Anguilla</option>
                                <option data-kt-flag="flags/antigua-and-barbuda.svg" value="AG">Antigua and Barbuda</option>
                                <option data-kt-flag="flags/argentina.svg" value="AR">Argentina</option>
                                <option data-kt-flag="flags/armenia.svg" value="AM">Armenia</option>
                                <option data-kt-flag="flags/aruba.svg" value="AW">Aruba</option>
                                <option data-kt-flag="flags/australia.svg" value="AU">Australia</option>
                                <option data-kt-flag="flags/austria.svg" value="AT">Austria</option>
                                <option data-kt-flag="flags/azerbaijan.svg" value="AZ">Azerbaijan</option>
                                <option data-kt-flag="flags/bahamas.svg" value="BS">Bahamas</option>
                                <option data-kt-flag="flags/bahrain.svg" value="BH">Bahrain</option>
                                <option data-kt-flag="flags/bangladesh.svg" value="BD">Bangladesh</option>
                                <option data-kt-flag="flags/barbados.svg" value="BB">Barbados</option>
                                <option data-kt-flag="flags/belarus.svg" value="BY">Belarus</option>
                                <option data-kt-flag="flags/belgium.svg" value="BE">Belgium</option>
                                <option data-kt-flag="flags/belize.svg" value="BZ">Belize</option>
                                <option data-kt-flag="flags/benin.svg" value="BJ">Benin</option>
                                <option data-kt-flag="flags/bermuda.svg" value="BM">Bermuda</option>
                                <option data-kt-flag="flags/bhutan.svg" value="BT">Bhutan</option>
                                <option data-kt-flag="flags/bolivia.svg" value="BO">Bolivia, Plurinational State of</option>
                                <option data-kt-flag="flags/bonaire.svg" value="BQ">Bonaire, Sint Eustatius and Saba</option>
                                <option data-kt-flag="flags/bosnia-and-herzegovina.svg" value="BA">Bosnia and Herzegovina</option>
                                <option data-kt-flag="flags/botswana.svg" value="BW">Botswana</option>
                                <option data-kt-flag="flags/brazil.svg" value="BR">Brazil</option>
                                <option data-kt-flag="flags/british-indian-ocean-territory.svg" value="IO">British Indian Ocean Territory</option>
                                <option data-kt-flag="flags/brunei.svg" value="BN">Brunei Darussalam</option>
                                <option data-kt-flag="flags/bulgaria.svg" value="BG">Bulgaria</option>
                                <option data-kt-flag="flags/burkina-faso.svg" value="BF">Burkina Faso</option>
                                <option data-kt-flag="flags/burundi.svg" value="BI">Burundi</option>
                                <option data-kt-flag="flags/cambodia.svg" value="KH">Cambodia</option>
                                <option data-kt-flag="flags/cameroon.svg" value="CM">Cameroon</option>
                                <option data-kt-flag="flags/canada.svg" value="CA">Canada</option>
                                <option data-kt-flag="flags/cape-verde.svg" value="CV">Cape Verde</option>
                                <option data-kt-flag="flags/cayman-islands.svg" value="KY">Cayman Islands</option>
                                <option data-kt-flag="flags/central-african-republic.svg" value="CF">Central African Republic</option>
                                <option data-kt-flag="flags/chad.svg" value="TD">Chad</option>
                                <option data-kt-flag="flags/chile.svg" value="CL">Chile</option>
                                <option data-kt-flag="flags/china.svg" value="CN">China</option>
                                <option data-kt-flag="flags/christmas-island.svg" value="CX">Christmas Island</option>
                                <option data-kt-flag="flags/cocos-island.svg" value="CC">Cocos (Keeling) Islands</option>
                                <option data-kt-flag="flags/colombia.svg" value="CO">Colombia</option>
                                <option data-kt-flag="flags/comoros.svg" value="KM">Comoros</option>
                                <option data-kt-flag="flags/cook-islands.svg" value="CK">Cook Islands</option>
                                <option data-kt-flag="flags/costa-rica.svg" value="CR">Costa Rica</option>
                                <option data-kt-flag="flags/ivory-coast.svg" value="CI">Côte d'Ivoire</option>
                                <option data-kt-flag="flags/croatia.svg" value="HR">Croatia</option>
                                <option data-kt-flag="flags/cuba.svg" value="CU">Cuba</option>
                                <option data-kt-flag="flags/curacao.svg" value="CW">Curaçao</option>
                                <option data-kt-flag="flags/czech-republic.svg" value="CZ">Czech Republic</option>
                                <option data-kt-flag="flags/denmark.svg" value="DK">Denmark</option>
                                <option data-kt-flag="flags/djibouti.svg" value="DJ">Djibouti</option>
                                <option data-kt-flag="flags/dominica.svg" value="DM">Dominica</option>
                                <option data-kt-flag="flags/dominican-republic.svg" value="DO">Dominican Republic</option>
                                <option data-kt-flag="flags/ecuador.svg" value="EC">Ecuador</option>
                                <option data-kt-flag="flags/egypt.svg" value="EG">Egypt</option>
                                <option data-kt-flag="flags/el-salvador.svg" value="SV">El Salvador</option>
                                <option data-kt-flag="flags/equatorial-guinea.svg" value="GQ">Equatorial Guinea</option>
                                <option data-kt-flag="flags/eritrea.svg" value="ER">Eritrea</option>
                                <option data-kt-flag="flags/estonia.svg" value="EE">Estonia</option>
                                <option data-kt-flag="flags/ethiopia.svg" value="ET">Ethiopia</option>
                                <option data-kt-flag="flags/falkland-islands.svg" value="FK">Falkland Islands (Malvinas)</option>
                                <option data-kt-flag="flags/fiji.svg" value="FJ">Fiji</option>
                                <option data-kt-flag="flags/finland.svg" value="FI">Finland</option>
                                <option data-kt-flag="flags/france.svg" value="FR">France</option>
                                <option data-kt-flag="flags/french-polynesia.svg" value="PF">French Polynesia</option>
                                <option data-kt-flag="flags/gabon.svg" value="GA">Gabon</option>
                                <option data-kt-flag="flags/gambia.svg" value="GM">Gambia</option>
                                <option data-kt-flag="flags/georgia.svg" value="GE">Georgia</option>
                                <option data-kt-flag="flags/germany.svg" value="DE">Germany</option>
                                <option data-kt-flag="flags/ghana.svg" value="GH">Ghana</option>
                                <option data-kt-flag="flags/gibraltar.svg" value="GI">Gibraltar</option>
                                <option data-kt-flag="flags/greece.svg" value="GR">Greece</option>
                                <option data-kt-flag="flags/greenland.svg" value="GL">Greenland</option>
                                <option data-kt-flag="flags/grenada.svg" value="GD">Grenada</option>
                                <option data-kt-flag="flags/guam.svg" value="GU">Guam</option>
                                <option data-kt-flag="flags/guatemala.svg" value="GT">Guatemala</option>
                                <option data-kt-flag="flags/guernsey.svg" value="GG">Guernsey</option>
                                <option data-kt-flag="flags/guinea.svg" value="GN">Guinea</option>
                                <option data-kt-flag="flags/guinea-bissau.svg" value="GW">Guinea-Bissau</option>
                                <option data-kt-flag="flags/haiti.svg" value="HT">Haiti</option>
                                <option data-kt-flag="flags/vatican-city.svg" value="VA">Holy See (Vatican City State)</option>
                                <option data-kt-flag="flags/honduras.svg" value="HN">Honduras</option>
                                <option data-kt-flag="flags/hong-kong.svg" value="HK">Hong Kong</option>
                                <option data-kt-flag="flags/hungary.svg" value="HU">Hungary</option>
                                <option data-kt-flag="flags/iceland.svg" value="IS">Iceland</option>
                                <option data-kt-flag="flags/india.svg" value="IN">India</option>
                                <option data-kt-flag="flags/indonesia.svg" value="ID">Indonesia</option>
                                <option data-kt-flag="flags/iran.svg" value="IR">Iran, Islamic Republic of</option>
                                <option data-kt-flag="flags/iraq.svg" value="IQ">Iraq</option>
                                <option data-kt-flag="flags/ireland.svg" value="IE">Ireland</option>
                                <option data-kt-flag="flags/isle-of-man.svg" value="IM">Isle of Man</option>
                                <option data-kt-flag="flags/israel.svg" value="IL">Israel</option>
                                <option data-kt-flag="flags/italy.svg" value="IT">Italy</option>
                                <option data-kt-flag="flags/jamaica.svg" value="JM">Jamaica</option>
                                <option data-kt-flag="flags/japan.svg" value="JP">Japan</option>
                                <option data-kt-flag="flags/jersey.svg" value="JE">Jersey</option>
                                <option data-kt-flag="flags/jordan.svg" value="JO">Jordan</option>
                                <option data-kt-flag="flags/kazakhstan.svg" value="KZ">Kazakhstan</option>
                                <option data-kt-flag="flags/kenya.svg" value="KE">Kenya</option>
                                <option data-kt-flag="flags/kiribati.svg" value="KI">Kiribati</option>
                                <option data-kt-flag="flags/north-korea.svg" value="KP">Korea, Democratic People's Republic of</option>
                                <option data-kt-flag="flags/kuwait.svg" value="KW">Kuwait</option>
                                <option data-kt-flag="flags/kyrgyzstan.svg" value="KG">Kyrgyzstan</option>
                                <option data-kt-flag="flags/laos.svg" value="LA">Lao People's Democratic Republic</option>
                                <option data-kt-flag="flags/latvia.svg" value="LV">Latvia</option>
                                <option data-kt-flag="flags/lebanon.svg" value="LB">Lebanon</option>
                                <option data-kt-flag="flags/lesotho.svg" value="LS">Lesotho</option>
                                <option data-kt-flag="flags/liberia.svg" value="LR">Liberia</option>
                                <option data-kt-flag="flags/libya.svg" value="LY">Libya</option>
                                <option data-kt-flag="flags/liechtenstein.svg" value="LI">Liechtenstein</option>
                                <option data-kt-flag="flags/lithuania.svg" value="LT">Lithuania</option>
                                <option data-kt-flag="flags/luxembourg.svg" value="LU">Luxembourg</option>
                                <option data-kt-flag="flags/macao.svg" value="MO">Macao</option>
                                <option data-kt-flag="flags/madagascar.svg" value="MG">Madagascar</option>
                                <option data-kt-flag="flags/malawi.svg" value="MW">Malawi</option>
                                <option data-kt-flag="flags/malaysia.svg" value="MY">Malaysia</option>
                                <option data-kt-flag="flags/maldives.svg" value="MV">Maldives</option>
                                <option data-kt-flag="flags/mali.svg" value="ML">Mali</option>
                                <option data-kt-flag="flags/malta.svg" value="MT">Malta</option>
                                <option data-kt-flag="flags/marshall-island.svg" value="MH">Marshall Islands</option>
                                <option data-kt-flag="flags/martinique.svg" value="MQ">Martinique</option>
                                <option data-kt-flag="flags/mauritania.svg" value="MR">Mauritania</option>
                                <option data-kt-flag="flags/mauritius.svg" value="MU">Mauritius</option>
                                <option data-kt-flag="flags/mexico.svg" value="MX">Mexico</option>
                                <option data-kt-flag="flags/micronesia.svg" value="FM">Micronesia, Federated States of</option>
                                <option data-kt-flag="flags/moldova.svg" value="MD">Moldova, Republic of</option>
                                <option data-kt-flag="flags/monaco.svg" value="MC">Monaco</option>
                                <option data-kt-flag="flags/mongolia.svg" value="MN">Mongolia</option>
                                <option data-kt-flag="flags/montenegro.svg" value="ME">Montenegro</option>
                                <option data-kt-flag="flags/montserrat.svg" value="MS">Montserrat</option>
                                <option data-kt-flag="flags/morocco.svg" value="MA">Morocco</option>
                                <option data-kt-flag="flags/mozambique.svg" value="MZ">Mozambique</option>
                                <option data-kt-flag="flags/myanmar.svg" value="MM">Myanmar</option>
                                <option data-kt-flag="flags/namibia.svg" value="NA">Namibia</option>
                                <option data-kt-flag="flags/nauru.svg" value="NR">Nauru</option>
                                <option data-kt-flag="flags/nepal.svg" value="NP">Nepal</option>
                                <option data-kt-flag="flags/netherlands.svg" value="NL">Netherlands</option>
                                <option data-kt-flag="flags/new-zealand.svg" value="NZ">New Zealand</option>
                                <option data-kt-flag="flags/nicaragua.svg" value="NI">Nicaragua</option>
                                <option data-kt-flag="flags/niger.svg" value="NE">Niger</option>
                                <option data-kt-flag="flags/nigeria.svg" value="NG">Nigeria</option>
                                <option data-kt-flag="flags/niue.svg" value="NU">Niue</option>
                                <option data-kt-flag="flags/norfolk-island.svg" value="NF">Norfolk Island</option>
                                <option data-kt-flag="flags/northern-mariana-islands.svg" value="MP">Northern Mariana Islands</option>
                                <option data-kt-flag="flags/norway.svg" value="NO">Norway</option>
                                <option data-kt-flag="flags/oman.svg" value="OM">Oman</option>
                                <option data-kt-flag="flags/pakistan.svg" value="PK">Pakistan</option>
                                <option data-kt-flag="flags/palau.svg" value="PW">Palau</option>
                                <option data-kt-flag="flags/palestine.svg" value="PS">Palestinian Territory, Occupied</option>
                                <option data-kt-flag="flags/panama.svg" value="PA">Panama</option>
                                <option data-kt-flag="flags/papua-new-guinea.svg" value="PG">Papua New Guinea</option>
                                <option data-kt-flag="flags/paraguay.svg" value="PY">Paraguay</option>
                                <option data-kt-flag="flags/peru.svg" value="PE">Peru</option>
                                <option data-kt-flag="flags/philippines.svg" value="PH">Philippines</option>
                                <option data-kt-flag="flags/poland.svg" value="PL">Poland</option>
                                <option data-kt-flag="flags/portugal.svg" value="PT">Portugal</option>
                                <option data-kt-flag="flags/puerto-rico.svg" value="PR">Puerto Rico</option>
                                <option data-kt-flag="flags/qatar.svg" value="QA">Qatar</option>
                                <option data-kt-flag="flags/romania.svg" value="RO">Romania</option>
                                <option data-kt-flag="flags/russia.svg" value="RU">Russian Federation</option>
                                <option data-kt-flag="flags/rwanda.svg" value="RW">Rwanda</option>
                                <option data-kt-flag="flags/st-barts.svg" value="BL">Saint Barthélemy</option>
                                <option data-kt-flag="flags/saint-kitts-and-nevis.svg" value="KN">Saint Kitts and Nevis</option>
                                <option data-kt-flag="flags/st-lucia.svg" value="LC">Saint Lucia</option>
                                <option data-kt-flag="flags/sint-maarten.svg" value="MF">Saint Martin (French part)</option>
                                <option data-kt-flag="flags/st-vincent-and-the-grenadines.svg" value="VC">Saint Vincent and the Grenadines</option>
                                <option data-kt-flag="flags/samoa.svg" value="WS">Samoa</option>
                                <option data-kt-flag="flags/san-marino.svg" value="SM">San Marino</option>
                                <option data-kt-flag="flags/sao-tome-and-prince.svg" value="ST">Sao Tome and Principe</option>
                                <option data-kt-flag="flags/saudi-arabia.svg" value="SA">Saudi Arabia</option>
                                <option data-kt-flag="flags/senegal.svg" value="SN">Senegal</option>
                                <option data-kt-flag="flags/serbia.svg" value="RS">Serbia</option>
                                <option data-kt-flag="flags/seychelles.svg" value="SC">Seychelles</option>
                                <option data-kt-flag="flags/sierra-leone.svg" value="SL">Sierra Leone</option>
                                <option data-kt-flag="flags/singapore.svg" value="SG">Singapore</option>
                                <option data-kt-flag="flags/sint-maarten.svg" value="SX">Sint Maarten (Dutch part)</option>
                                <option data-kt-flag="flags/slovakia.svg" value="SK">Slovakia</option>
                                <option data-kt-flag="flags/slovenia.svg" value="SI">Slovenia</option>
                                <option data-kt-flag="flags/solomon-islands.svg" value="SB">Solomon Islands</option>
                                <option data-kt-flag="flags/somalia.svg" value="SO">Somalia</option>
                                <option data-kt-flag="flags/south-africa.svg" value="ZA">South Africa</option>
                                <option data-kt-flag="flags/south-korea.svg" value="KR">South Korea</option>
                                <option data-kt-flag="flags/south-sudan.svg" value="SS">South Sudan</option>
                                <option data-kt-flag="flags/spain.svg" value="ES">Spain</option>
                                <option data-kt-flag="flags/sri-lanka.svg" value="LK">Sri Lanka</option>
                                <option data-kt-flag="flags/sudan.svg" value="SD">Sudan</option>
                                <option data-kt-flag="flags/suriname.svg" value="SR">Suriname</option>
                                <option data-kt-flag="flags/swaziland.svg" value="SZ">Swaziland</option>
                                <option data-kt-flag="flags/sweden.svg" value="SE">Sweden</option>
                                <option data-kt-flag="flags/switzerland.svg" value="CH">Switzerland</option>
                                <option data-kt-flag="flags/syria.svg" value="SY">Syrian Arab Republic</option>
                                <option data-kt-flag="flags/taiwan.svg" value="TW">Taiwan, Province of China</option>
                                <option data-kt-flag="flags/tajikistan.svg" value="TJ">Tajikistan</option>
                                <option data-kt-flag="flags/tanzania.svg" value="TZ">Tanzania, United Republic of</option>
                                <option data-kt-flag="flags/thailand.svg" value="TH">Thailand</option>
                                <option data-kt-flag="flags/togo.svg" value="TG">Togo</option>
                                <option data-kt-flag="flags/tokelau.svg" value="TK">Tokelau</option>
                                <option data-kt-flag="flags/tonga.svg" value="TO">Tonga</option>
                                <option data-kt-flag="flags/trinidad-and-tobago.svg" value="TT">Trinidad and Tobago</option>
                                <option data-kt-flag="flags/tunisia.svg" value="TN">Tunisia</option>
                                <option data-kt-flag="flags/turkey.svg" value="TR">Turkey</option>
                                <option data-kt-flag="flags/turkmenistan.svg" value="TM">Turkmenistan</option>
                                <option data-kt-flag="flags/turks-and-caicos.svg" value="TC">Turks and Caicos Islands</option>
                                <option data-kt-flag="flags/tuvalu.svg" value="TV">Tuvalu</option>
                                <option data-kt-flag="flags/uganda.svg" value="UG">Uganda</option>
                                <option data-kt-flag="flags/ukraine.svg" value="UA">Ukraine</option>
                                <option data-kt-flag="flags/united-arab-emirates.svg" value="AE">United Arab Emirates</option>
                                <option data-kt-flag="flags/united-kingdom.svg" value="GB">United Kingdom</option>
                                <option data-kt-flag="flags/united-states.svg" value="USA">United States of America</option>
                                <option data-kt-flag="flags/uruguay.svg" value="UY">Uruguay</option>
                                <option data-kt-flag="flags/uzbekistan.svg" value="UZ">Uzbekistan</option>
                                <option data-kt-flag="flags/vanuatu.svg" value="VU">Vanuatu</option>
                                <option data-kt-flag="flags/venezuela.svg" value="VE">Venezuela, Bolivarian Republic of</option>
                                <option data-kt-flag="flags/vietnam.svg" value="VN">Vietnam</option>
                                <option data-kt-flag="flags/virgin-islands.svg" value="VI">Virgin Islands</option>
                                <option data-kt-flag="flags/yemen.svg" value="YE">Yemen</option>
                                <option data-kt-flag="flags/zambia.svg" value="ZM">Zambia</option>
                                <option data-kt-flag="flags/zimbabwe.svg" value="ZW">Zimbabwe</option>
                            </select>
                            @error('country')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>
                    <!--end::Input group-->
                    <!--begin::Input group-->
                    <div class="mb-10 fv-row" data-kt-password-meter="true">
                        <!--begin::Wrapper-->
                        <div class="mb-1">
                            <!--begin::Label-->
                            <label class="form-label fw-bolder text-dark fs-6">Password</label>
                            <!--end::Label-->
                            <!--begin::Input wrapper-->
                            <div class="position-relative mb-3">
                                <input class="form-control form-control-lg form-control-solid  @error('password') is-invalid @enderror" placeholder="Enter Password" type="password" placeholder="enter password" name="password" id="password" autocomplete="off" />
                                <span class="btn btn-sm btn-icon position-absolute translate-middle top-50 end-0 me-n2" data-kt-password-meter-control="visibility">
											<i class="fs-2">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-eye-fill" viewBox="0 0 16 16">
                                                  <path d="M10.5 8a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0z"/>
                                                  <path d="M0 8s3-5.5 8-5.5S16 8 16 8s-3 5.5-8 5.5S0 8 0 8zm8 3.5a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7z"/>
                                                </svg>
                                            </i>
											<i class="fs-2 d-none">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-eye-slash-fill" viewBox="0 0 16 16">
                                                  <path d="m10.79 12.912-1.614-1.615a3.5 3.5 0 0 1-4.474-4.474l-2.06-2.06C.938 6.278 0 8 0 8s3 5.5 8 5.5a7.029 7.029 0 0 0 2.79-.588zM5.21 3.088A7.028 7.028 0 0 1 8 2.5c5 0 8 5.5 8 5.5s-.939 1.721-2.641 3.238l-2.062-2.062a3.5 3.5 0 0 0-4.474-4.474L5.21 3.089z"/>
                                                  <path d="M5.525 7.646a2.5 2.5 0 0 0 2.829 2.829l-2.83-2.829zm4.95.708-2.829-2.83a2.5 2.5 0 0 1 2.829 2.829zm3.171 6-12-12 .708-.708 12 12-.708.708z"/>
                                                </svg>
                                            </i>
										</span>
                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <!--end::Input wrapper-->
                            <!--begin::Meter-->
                            <div class="d-flex align-items-center mb-3" data-kt-password-meter-control="highlight">
                                <div class="flex-grow-1 bg-secondary bg-active-success rounded h-5px me-2"></div>
                                <div class="flex-grow-1 bg-secondary bg-active-success rounded h-5px me-2"></div>
                                <div class="flex-grow-1 bg-secondary bg-active-success rounded h-5px me-2"></div>
                                <div class="flex-grow-1 bg-secondary bg-active-success rounded h-5px"></div>
                            </div>
                            <!--end::Meter-->
                        </div>
                        <!--end::Wrapper-->
                        <!--begin::Hint-->
                        <div class="text-muted">Use 8 or more characters with a mix of letters, numbers &amp; symbols.</div>
                        <!--end::Hint-->
                    </div>
                    <!--end::Input group=-->
                    <!--begin::Input group-->
                    <div class="fv-row mb-5">
                        <label class="form-label fw-bolder text-dark fs-6">Confirm Password</label>
                        <input class="form-control form-control-lg form-control-solid" id="password_confirmation" type="password" placeholder="Confirm Password" name="password_confirmation" autocomplete="off" />
                    </div>
                    <!--end::Input group-->
                    <!--begin::Input group-->
                    <div class="fv-row mb-10">
                        <label class="form-check form-check-custom form-check-solid form-check-inline">
                            <input class="form-check-input" checked type="checkbox" name="toc" value="1" />
                            <span class="form-check-label fw-bold text-gray-700 fs-6">I Agree
									<a href="{{ route('terms') }}" class="ms-1 link-primary">Terms and conditions</a>.</span>
                        </label>
                    </div>
                    <!--end::Input group-->
                    <!--begin::Actions-->
                    <div class="row">
                        <div class="col-6">
                            <button class="btn btn-sm btn-light-warning" type="reset">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-x-circle-fill" viewBox="0 0 16 16">
                                    <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM5.354 4.646a.5.5 0 1 0-.708.708L7.293 8l-2.647 2.646a.5.5 0 0 0 .708.708L8 8.707l2.646 2.647a.5.5 0 0 0 .708-.708L8.707 8l2.647-2.646a.5.5 0 0 0-.708-.708L8 7.293 5.354 4.646z"/>
                                </svg>
                                Clear Cache</button>
                        </div>
                        <div class="col-6">
                            <button type="submit" id="" class="btn btn-sm btn-primary">
                                <span class="indicator-label">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
                                        <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
                                        <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z"/>
                                    </svg>
                                    Register</span>
                                    <span class="indicator-progress">Please wait...
                                        <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                            </button>
                        </div>
                    </div>
                    <!--end::Actions-->
                </form>
                <!--end::Form-->
            </div>
            <!--end::Wrapper-->
        </div>
        <!--end::Content-->
        <script>var hostUrl = "{{ asset('backend/assets/index.html') }}";</script>
        <!--begin::Javascript-->
        <!--begin::Global Javascript Bundle(used by all pages)-->
        <script src="{{ asset('backend/assets/plugins/global/plugins.bundle.js') }}"></script>
        <script src="{{ asset('backend/assets/js/scripts.bundle.js') }}"></script>
        <!--end::Global Javascript Bundle-->
        <!--begin::Page Custom Javascript(used by this page)-->
        <script src="{{ asset('backend/assets/js/custom/authentication/sign-in/general.js') }}"></script>
        <!--end::Page Custom Javascript-->
        <!--end::Javascript-->
        <!--Begin::Google Tag Manager (noscript) -->
        <noscript>
            <iframe src="https://www.googletagmanager.com/ns.html?id=GTM-5FS8GGP" height="0" width="0" style="display:none;visibility:hidden"></iframe>
        </noscript>
{{--@include('partials.front.auth_scripts')--}}


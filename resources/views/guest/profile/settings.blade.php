<!--begin::Basic info-->
<div class="card mb-5 mb-xl-10">
    <!--begin::Card header-->
    <div class="card-header border-0 cursor-pointer" role="button" data-bs-toggle="collapse" data-bs-target="#kt_account_profile_details" aria-expanded="true" aria-controls="kt_account_profile_details">
        <!--begin::Card title-->
        <div class="card-title m-0">
            <h3 class="fw-bolder m-0">Profile Details</h3>
        </div>
        <!--end::Card title-->
    </div>
    <!--begin::Card header-->
    <!--begin::Content-->
    <div id="kt_account_profile_details" class="collapse show">
        <!--begin::Form-->
        <form action="{{ route('profile.update') }}" method="post">
            @csrf
            <!--begin::Card body-->
            <div class="card-body border-top p-9">
                <!--begin::Input group-->

                <!--end::Input group-->
                <!--begin::Input group-->
                <div class="row mb-6">
                    <!--begin::Label-->
                    <label class="col-lg-4 col-form-label required fw-bold fs-6">Full Name</label>
                    <!--end::Label-->
                    <!--begin::Col-->
                    <div class="col-lg-8">
                        <!--begin::Row-->
                        <div class="row">
                            <!--begin::Col-->
                            <div class="col-lg-12 fv-row">
                                <input type="text" name="name" class="form-control form-control-lg form-control-solid mb-3 mb-lg-0" placeholder="Full Name" value="{{ auth()->user()->name }}" />
                            </div>
                        </div>
                        <!--end::Row-->
                    </div>
                    <!--end::Col-->
                </div>
                <!--end::Input group-->
                <!--begin::Input group-->
                <!--end::Input group-->
                <!--begin::Input group-->
                <div class="row mb-6">
                    <!--begin::Label-->
                    <label class="col-lg-4 col-form-label fw-bold fs-6">
                        <span class="required">Contact Phone</span>
                        <i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip" title="Phone number must be active"></i>
                    </label>
                    <!--end::Label-->
                    <!--begin::Col-->
                    <div class="col-lg-8 fv-row">
                        <input type="tel" id="phone" title="Enter country code (+) and number not less than 10 or greater 15" pattern="[+][0-9]{10,15}" autocomplete="off" data-intl-tel-input-id="0" maxlength="14" minlength="11" required name="phone" class="form-control form-control-lg form-control-solid" placeholder="Phone number" value="{{ auth()->user()->phone ?? '' }}" />

                    </div>
                    <!--end::Col-->
                </div>
                <!--end::Input group-->
                <!--begin::Input group-->

                <div class="row mb-6">
                    <!--begin::Label-->
                    <label class="col-lg-4 col-form-label fw-bold fs-6 required">Residential Address</label>
                    <!--end::Label-->
                    <!--begin::Col-->
                    <div class="col-lg-8 fv-row">
                        <input type="text" required name="address" class="form-control form-control-lg form-control-solid" placeholder="Home address" value="{{ auth()->user()->credential->address ?? '' }}" />
                    </div>
                    <!--end::Col-->
                </div>
                <!--end::Input group-->
                <!--begin::Input group-->
                <div class="row mb-6">
                    <!--begin::Label-->
                    <label class="col-lg-4 col-form-label fw-bold fs-6">
                        <span class="required">Country</span>
                        <i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip" title="Country of origination"></i>
                    </label>
                    <!--end::Label-->
                    <!--begin::Col-->
                    <div class="col-lg-8 fv-row">
                        <select required name="country" aria-label="Select a Country" data-control="select2" data-placeholder="{{ auth()->user()->country ?? '-- Select a Country --' }}" class="form-select form-select-solid form-select-lg fw-bold">
                            <option selected value="{{ auth()->user()->country }}">{{ auth()->user()->country }}</option>
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
                            <option data-kt-flag="flags/united-states.svg" value="US">United States</option>
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
                    </div>
                    <!--end::Col-->
                </div>
                <!--end::Input group-->
                <!--begin::Input group-->
                <div class="row mb-6">
                    <!--begin::Label-->
                    <label class="col-lg-4 col-form-label required fw-bold fs-6">Gender</label>
                    <!--end::Label-->
                    <!--begin::Col-->
                    <div class="col-lg-8 fv-row">
                        <!--begin::Input-->
                        <select  required name="gender" aria-label="Select gender" data-control="select2" data-placeholder="{{ auth()->user()->credential->gender ?? 'Select gender' }}" class="form-select form-select-solid form-select-lg">
                            <option selected value="{{ auth()->user()->credential->gender ?? '' }}">{{ auth()->user()->credential->gender ?? '' }}</option>
                            <option value="Male">Male</option>
                            <option value="Female">Female</option>
                            <option value="Prefer not to say">Prefer not to say</option>
                        </select>
                        <!--end::Input-->
                        <!--begin::Hint-->
                        <div class="form-text">Please select your gender.</div>
                        <!--end::Hint-->
                    </div>
                    <!--end::Col-->
                </div>


                <div class="row mb-6">
                    <!--begin::Label-->
                    <label class="col-lg-4 col-form-label fw-bold fs-6">D.O.B</label>
                    <!--end::Label-->
                    <!--begin::Col-->
                    <link href="{{ asset('backend/assets/plugins/global/plugins.bundle.css')}}" rel="stylesheet" type="text/css"/>
                    <script src="{{ asset('backend/assets/plugins/global/plugins.bundle.js')}}"></script>
                    <div class="col-lg-8 fv-row">
                        <div class="mb-10">
                            <input class="form-control form-control-solid" placeholder="date of birth"  name="dob"  id="kt_daterangepicker_3" value="{{ auth()->user()->credential->dob ?? '' }}">
                            <div class="form-text">Custom date format:
                                <code>mm/dd/yyyy</code></div>
                        </div>
                    </div>
                    <script>
                        // Date
                        $("#kt_daterangepicker_3").daterangepicker({
                                singleDatePicker: true,
                                showDropdowns: true,
                                minYear: 1901,
                                maxYear: parseInt(moment().format("YYYY"),10)
                            }, function(start, end, label) {
                                var years = moment().diff(start, "years");

                                Swal.fire(
                                'Alright!',
                                "You are " + years + " years old!",
                                'success'
                            )
                            }
                        );
                    </script>
                    <!--end::Col-->
                </div>
                <!--end::Input group-->
                <!--begin::Input group-->

                <div class="row mb-6">
                    <!--begin::Label-->
                    <label class="col-lg-4 col-form-label fw-bold fs-6">Social handles/account (URL)
                        <i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip" title="(https://facebook.com/{{auth()->user()->username}})"></i>
                    </label>
                    <!--end::Label-->
                    <!--begin::Col-->
                    <div class="col-lg-8">
                        <!--begin::Row-->
                        <div class="row">
                            <!--begin::Col-->
                            <div class="col-lg-4 fv-row">
                                <input type="url" name="facebook" class="form-control form-control-lg form-control-solid" placeholder="Facebook" value="{{ auth()->user()->credential->facebook ?? '' }}" />
                            </div>
                            <!--end::Col-->
                            <!--begin::Col-->
                            <div class="col-lg-4 fv-row">
                                <input type="url" name="twitter" class="form-control form-control-lg form-control-solid" placeholder="Twitter" value="{{ auth()->user()->credential->twitter ?? '' }}" />
                            </div>

                            <div class="col-lg-4 fv-row">
                                <input type="url" name="instagram" class="form-control form-control-lg form-control-solid" placeholder="Instagram" value="{{ auth()->user()->credential->instagram ?? '' }}" />
                            </div>
                            <!--end::Col-->
                        </div>
                        <!--end::Row-->
                    </div>
                    <!--end::Col-->
                </div>
            </div>
            <!--end::Card body-->
            <!--begin::Actions-->
            <div class="card-footer d-flex justify-content-end py-6 px-9">
                <button type="reset" class="btn btn-light btn-active-light-primary me-2">Clear <i class="fa fa-trash"></i></button>
                <a href="{{ route('profile.index')}}" type="button" class="btn btn-light-danger btn-active-light-primary me-2">Cancel <i class="fa fa-times"></i></a>
                <button type="submit" class="btn btn-primary" id="kt_account_profile_details_submit">Save <i class="fa fa-save"></i> </button>
            </div>
            <!--end::Actions-->
        </form>
        <!--end::Form-->
    </div>
    <!--end::Content-->
</div>

<hr>
<!--end::Basic info-->
<!--begin::Sign-in Method-->
<div class="card mb-5 mb-xl-10 p-4">
    <!--begin::Card header-->
    <div class="card-header border-0 cursor-pointer" role="button" data-bs-toggle="collapse" data-bs-target="#kt_account_signin_method">
        <div class="card-title m-0">
            <h3 class="fw-bolder m-0">Sign-in Method</h3>
        </div>
    </div>
    <!--end::Card header-->
    <!--begin::Content-->
    <div id="kt_account_signin_method" class="collapse show">
        <!--begin::Card body-->
        <div class="card-body border-top p-9">
            <!--begin::Email Address-->
            <div class="d-flex flex-wrap align-items-center">
                <!--begin::Label-->
                <div id="kt_signin_email">
                    <div class="fs-6 fw-bolder mb-1">Email Address</div>
                    <div class="fw-bold text-gray-600">{{ auth()->user()->email }}</div>

                </div>
                <!--end::Label-->
                <!--begin::Edit-->
                <div id="kt_signin_email_edit" class="flex-row-fluid d-none">
                    <!--begin::Form-->
                    <form id="kt_signin_change_email" class="form" novalidate="novalidate">
                        <div class="row mb-6">
                            <div class="notice mb-3 d-flex bg-light-warning rounded border-warning border border-dashed p-6">
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
                                        <h4 class="text-gray-900 fw-bolder">Error changing E-mail</h4>
                                        <ul class="nav nav-tabs nav-line-tabs nav-line-tabs-2x border-transparent fs-5 fw-bolder">

                                            <div class="fs-6 text-gray-700">Contact support team for further assistance,
                                                <a data-bs-toggle="tab" class="fw-bolder" href="#Billing">Contact support</a>
                                            </div>
                                        </ul>

                                    </div>
                                    <!--end::Content-->
                                </div>
                                <!--end::Wrapper-->
                            </div>
                            <!--end::Notice-->
                        </div>
                        <div class="d-flex">
                            <button id="kt_signin_cancel" type="button" class="btn btn-color-gray-400 btn-active-light-primary px-6">&nbsp;</button>
                        </div>
                    </form>
                    <!--end::Form-->
                </div>
                <!--end::Edit-->
                <!--begin::Action-->
                <div id="kt_signin_email_button" class="ms-auto">
                    <button class="btn btn-light btn-active-light-primary"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-envelope-slash-fill" viewBox="0 0 16 16">
                            <path fill-rule="evenodd" d="M.05 3.555A2 2 0 0 1 2 2h12a2 2 0 0 1 1.95 1.555L8 8.414.05 3.555ZM0 4.697v7.104l5.803-3.558L0 4.697ZM6.761 8.83l-6.57 4.027A2 2 0 0 0 2 14h6.256A4.493 4.493 0 0 1 8 12.5a4.49 4.49 0 0 1 1.606-3.446l-.367-.225L8 9.586l-1.239-.757ZM16 4.697v4.974A4.491 4.491 0 0 0 12.5 8a4.49 4.49 0 0 0-1.965.45l-.338-.207L16 4.697Zm-5.268 6.035a2.501 2.501 0 0 1 3.147-.318l-3.465 3.465a2.501 2.501 0 0 1 .318-3.147Zm.39 3.854 3.464-3.465a2.501 2.501 0 0 1-3.465 3.465Zm3.853-4.56a3.5 3.5 0 1 0-4.95 4.95 3.5 3.5 0 0 0 4.95-4.95Z"/>
                        </svg> Change Email</button>
                </div>
                <!--end::Action-->
            </div>
            <!--end::Email Address-->
            <!--begin::Separator-->
            <div class="separator separator-dashed my-6"></div>
            <!--end::Separator-->
            <!--begin::Password-->
            <div class="d-flex flex-wrap align-items-center mb-10">
                <!--begin::Label-->
                <div id="kt_signin_password">
                    <div class="fs-6 fw-bolder mb-1">Password</div>
                    <div class="fw-bold text-gray-600">************</div>
                </div>
                <!--end::Label-->
                <!--begin::Edit-->
                    <div id="kt_signin_password_edit" class="flex-row-fluid d-none">
                        <!--begin::Form-->
                            <form id="kt_signin_change_password" class="form" novalidate="novalidate" action="{{ route('guest.profile.update') }}" method="POST">
                                @csrf
                                <div class="row mb-1">
                                    <div class="col-lg-4">
                                        <div class="fv-row mb-0">
                                            <label for="currentpassword" class="form-label fs-6 fw-bolder mb-3">Current Password</label>
                                            <input placeholder="current password" type="password" class="form-control form-control-lg form-control-solid" name="password" />
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="fv-row mb-0">
                                            <label for="newpassword" class="form-label fs-6 fw-bolder mb-3">New Password</label>
                                            <input placeholder="new password" type="password" class="form-control form-control-lg form-control-solid" name="newpassword" />
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="fv-row mb-0">
                                            <label for="confirmpassword" class="form-label fs-6 fw-bolder mb-3">Confirm New Password</label>
                                            <input placeholder="confirm new password" type="password" class="form-control form-control-lg form-control-solid" name="confirmpassword" />
                                        </div>
                                    </div>
                                </div>

                                <div class="form-text mb-5">Password must be at least 8 character and contain symbols</div>
                                <div class="d-flex">
                                    <button type="submit" id="kt_password_submit" class="btn btn-primary me-2 px-6">Update Password</button>
                                    <button id="kt_password_cancel" type="button" class="btn btn-color-gray-400 btn-active-light-primary px-6">Cancel</button>
                                </div>
                            </form>
                        <!--end::Form-->
                    </div>
                    <!--end::Edit-->
                    <!--begin::Action-->
                    <div id="kt_signin_password_button" class="ms-auto">
                        <button class="btn btn-light btn-active-light-primary">Reset Password</button>
                    </div>
                    <!--end::Action-->

            </div>

        </div>
        <!--end::Card body-->
    </div>
    <!--end::Content-->
</div>

<hr>
<!--begin::Deactivate Account-->
<!--end::Deactivate Account-->


<div class="modal fade" id="kt_modal_two_factor_authentication" tabindex="-1" aria-hidden="true">
    <!--begin::Modal header-->
    <div class="modal-dialog modal-dialog-centered mw-650px">
        <!--begin::Modal content-->
        <div class="modal-content">
            <!--begin::Modal header-->
            <div class="modal-header flex-stack">
                <!--begin::Title-->
                <h2>Choose An Authentication Method</h2>
                <!--end::Title-->
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
            <div class="modal-body scroll-y pt-10 pb-15 px-lg-17">
                <!--begin::Options-->
                <div data-kt-element="options">
                    <!--begin::Notice-->
                    <p class="text-muted fs-5 fw-bold mb-10">In addition to your username and password, you’ll have to enter a code (delivered via app or SMS) to log into your account.</p>
                    <!--end::Notice-->
                    <!--begin::Wrapper-->
                    <div class="pb-10">
                        <!--begin::Option-->
                        <input type="radio" class="btn-check" name="auth_option" value="apps" checked="checked" id="kt_modal_two_factor_authentication_option_1" />
                        <label class="btn btn-outline btn-outline-dashed btn-outline-default p-7 d-flex align-items-center mb-5" for="kt_modal_two_factor_authentication_option_1">
                            <!--begin::Svg Icon | path: icons/duotune/coding/cod001.svg-->
                            <span class="svg-icon svg-icon-4x me-4">
															<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																<path opacity="0.3" d="M22.1 11.5V12.6C22.1 13.2 21.7 13.6 21.2 13.7L19.9 13.9C19.7 14.7 19.4 15.5 18.9 16.2L19.7 17.2999C20 17.6999 20 18.3999 19.6 18.7999L18.8 19.6C18.4 20 17.8 20 17.3 19.7L16.2 18.9C15.5 19.3 14.7 19.7 13.9 19.9L13.7 21.2C13.6 21.7 13.1 22.1 12.6 22.1H11.5C10.9 22.1 10.5 21.7 10.4 21.2L10.2 19.9C9.4 19.7 8.6 19.4 7.9 18.9L6.8 19.7C6.4 20 5.7 20 5.3 19.6L4.5 18.7999C4.1 18.3999 4.1 17.7999 4.4 17.2999L5.2 16.2C4.8 15.5 4.4 14.7 4.2 13.9L2.9 13.7C2.4 13.6 2 13.1 2 12.6V11.5C2 10.9 2.4 10.5 2.9 10.4L4.2 10.2C4.4 9.39995 4.7 8.60002 5.2 7.90002L4.4 6.79993C4.1 6.39993 4.1 5.69993 4.5 5.29993L5.3 4.5C5.7 4.1 6.3 4.10002 6.8 4.40002L7.9 5.19995C8.6 4.79995 9.4 4.39995 10.2 4.19995L10.4 2.90002C10.5 2.40002 11 2 11.5 2H12.6C13.2 2 13.6 2.40002 13.7 2.90002L13.9 4.19995C14.7 4.39995 15.5 4.69995 16.2 5.19995L17.3 4.40002C17.7 4.10002 18.4 4.1 18.8 4.5L19.6 5.29993C20 5.69993 20 6.29993 19.7 6.79993L18.9 7.90002C19.3 8.60002 19.7 9.39995 19.9 10.2L21.2 10.4C21.7 10.5 22.1 11 22.1 11.5ZM12.1 8.59998C10.2 8.59998 8.6 10.2 8.6 12.1C8.6 14 10.2 15.6 12.1 15.6C14 15.6 15.6 14 15.6 12.1C15.6 10.2 14 8.59998 12.1 8.59998Z" fill="black" />
																<path d="M17.1 12.1C17.1 14.9 14.9 17.1 12.1 17.1C9.30001 17.1 7.10001 14.9 7.10001 12.1C7.10001 9.29998 9.30001 7.09998 12.1 7.09998C14.9 7.09998 17.1 9.29998 17.1 12.1ZM12.1 10.1C11 10.1 10.1 11 10.1 12.1C10.1 13.2 11 14.1 12.1 14.1C13.2 14.1 14.1 13.2 14.1 12.1C14.1 11 13.2 10.1 12.1 10.1Z" fill="black" />
															</svg>
														</span>
                            <!--end::Svg Icon-->
                            <span class="d-block fw-bold text-start">
															<span class="text-dark fw-bolder d-block fs-3">Authenticator Apps</span>
															<span class="text-muted fw-bold fs-6">Get codes from an app like Google Authenticator, Microsoft Authenticator, Authy or 1Password.</span>
														</span>
                        </label>
                        <!--end::Option-->
                        <!--begin::Option-->
                        <input type="radio" class="btn-check" name="auth_option" value="sms" id="kt_modal_two_factor_authentication_option_2" />
                        <label class="btn btn-outline btn-outline-dashed btn-outline-default p-7 d-flex align-items-center" for="kt_modal_two_factor_authentication_option_2">
                            <!--begin::Svg Icon | path: icons/duotune/communication/com003.svg-->
                            <span class="svg-icon svg-icon-4x me-4">
															<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																<path opacity="0.3" d="M2 4V16C2 16.6 2.4 17 3 17H13L16.6 20.6C17.1 21.1 18 20.8 18 20V17H21C21.6 17 22 16.6 22 16V4C22 3.4 21.6 3 21 3H3C2.4 3 2 3.4 2 4Z" fill="black" />
																<path d="M18 9H6C5.4 9 5 8.6 5 8C5 7.4 5.4 7 6 7H18C18.6 7 19 7.4 19 8C19 8.6 18.6 9 18 9ZM16 12C16 11.4 15.6 11 15 11H6C5.4 11 5 11.4 5 12C5 12.6 5.4 13 6 13H15C15.6 13 16 12.6 16 12Z" fill="black" />
															</svg>
														</span>
                            <!--end::Svg Icon-->
                            <span class="d-block fw-bold text-start">
															<span class="text-dark fw-bolder d-block fs-3">SMS</span>
															<span class="text-muted fw-bold fs-6">We will send a code via SMS if you need to use your backup login method.</span>
														</span>
                        </label>
                        <!--end::Option-->
                    </div>
                    <!--end::Options-->
                    <!--begin::Action-->
                    <button class="btn btn-primary w-100" data-kt-element="options-select">Continue</button>
                    <!--end::Action-->
                </div>
                <!--end::Options-->
                <!--begin::Apps-->
                <div class="d-none" data-kt-element="apps">
                    <!--begin::Heading-->
                    <h3 class="text-dark fw-bolder mb-7">Authenticator Apps</h3>
                    <!--end::Heading-->
                    <!--begin::Description-->
                    <div class="text-gray-500 fw-bold fs-6 mb-10">Using an authenticator app like
                        <a href="https://support.google.com/accounts/answer/1066447?hl=en" target="_blank">Google Authenticator</a>,
                        <a href="https://www.microsoft.com/en-us/account/authenticator" target="_blank">Microsoft Authenticator</a>,
                        <a href="https://authy.com/download/" target="_blank">Authy</a>, or
                        <a href="https://support.1password.com/one-time-passwords/" target="_blank">1Password</a>, scan the QR code. It will generate a 6 digit code for you to enter below.
                        <!--begin::QR code image-->
                        <div class="pt-5 text-center">
                            <img src="{{ asset('backend/assets/media/misc/qr.png') }}" alt="" class="mw-150px" />
                        </div>
                        <!--end::QR code image--></div>
                    <!--end::Description-->
                    <!--begin::Notice-->
                    <div class="notice d-flex bg-light-warning rounded border-warning border border-dashed mb-10 p-6">
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
                                <div class="fs-6 text-gray-700">If you having trouble using the QR code, select manual entry on your app, and enter your username and the code:
                                    <div class="fw-bolder text-dark pt-2">KBSS3QDAAFUMCBY63YCKI5WSSVACUMPN</div></div>
                            </div>
                            <!--end::Content-->
                        </div>
                        <!--end::Wrapper-->
                    </div>
                    <!--end::Notice-->
                    <!--begin::Form-->
                    <form data-kt-element="apps-form" class="form" action="#">
                        <!--begin::Input group-->
                        <div class="mb-10 fv-row">
                            <input type="text" class="form-control form-control-lg form-control-solid" placeholder="Enter authentication code" name="code" />
                        </div>
                        <!--end::Input group-->
                        <!--begin::Actions-->
                        <div class="d-flex flex-center">
                            <button type="reset" data-kt-element="apps-cancel" class="btn btn-light me-3">Cancel</button>
                            <button type="submit" data-kt-element="apps-submit" class="btn btn-primary">
                                <span class="indicator-label">Submit</span>
                                <span class="indicator-progress">Please wait...
															<span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                            </button>
                        </div>
                        <!--end::Actions-->
                    </form>
                    <!--end::Form-->
                </div>
                <!--end::Options-->
                <!--begin::SMS-->
                <div class="d-none" data-kt-element="sms">
                    <!--begin::Heading-->
                    <h3 class="text-dark fw-bolder fs-3 mb-5">SMS: Verify Your Mobile Number</h3>
                    <!--end::Heading-->
                    <!--begin::Notice-->
                    <div class="text-muted fw-bold mb-10">Enter your mobile phone number with country code and we will send you a verification code upon request.</div>
                    <!--end::Notice-->
                    <!--begin::Form-->
                    <form data-kt-element="sms-form" class="form" action="#">
                        <!--begin::Input group-->
                        <div class="mb-10 fv-row">
                            <input type="text" class="form-control form-control-lg form-control-solid" placeholder="Mobile number with country code..." name="mobile" />
                        </div>
                        <!--end::Input group-->
                        <!--begin::Actions-->
                        <div class="d-flex flex-center">
                            <button type="reset" data-kt-element="sms-cancel" class="btn btn-light me-3">Cancel</button>
                            <button type="submit" data-kt-element="sms-submit" class="btn btn-primary">
                                <span class="indicator-label">Submit</span>
                                <span class="indicator-progress">Please wait...
                                <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                            </button>
                        </div>
                        <!--end::Actions-->
                    </form>
                    <!--end::Form-->
                </div>
                <!--end::SMS-->
            </div>
            <!--begin::Modal body-->
        </div>
        <!--end::Modal content-->
    </div>
    <!--end::Modal header-->
</div>
<!--end::Modal - Two-factor authentication-->
<!--end::Modals-->

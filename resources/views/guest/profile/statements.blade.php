<div id="kt_content_container" class="d-flex flex-column-fluid align-items-start container-xxl">
    <!--begin::Post-->
    <div class="content flex-row-fluid" id="kt_content">
        <!--begin::Card-->
        <div class="card">
            <!--begin::Card header-->
            <div class="card-header border-0 pt-6">
                <!--begin::Card title-->
                <div class="card-title">
                    <!--begin::Search-->
                    <div class="d-flex align-items-center position-relative my-1">
                        <!--begin::Svg Icon | path: icons/duotune/general/gen021.svg-->
                        <span class="svg-icon svg-icon-1 position-absolute ms-6">
												<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
													<rect opacity="0.5" x="17.0365" y="15.1223" width="8.15546" height="2" rx="1" transform="rotate(45 17.0365 15.1223)" fill="black"></rect>
													<path d="M11 19C6.55556 19 3 15.4444 3 11C3 6.55556 6.55556 3 11 3C15.4444 3 19 6.55556 19 11C19 15.4444 15.4444 19 11 19ZM11 5C7.53333 5 5 7.53333 5 11C5 14.4667 7.53333 17 11 17C14.4667 17 17 14.4667 17 11C17 7.53333 14.4667 5 11 5Z" fill="black"></path>
												</svg>
											</span>
                        <!--end::Svg Icon-->
                        <input type="text" data-kt-user-table-filter="search" class="form-control form-control-solid w-250px ps-14" placeholder="Search user">
                    </div>
                    <!--end::Search-->
                </div>
                <!--begin::Card title-->
                <!--begin::Card toolbar-->
                <div class="card-toolbar">
                    <!--begin::Toolbar-->
                    <div class="d-flex justify-content-end" data-kt-user-table-toolbar="base">
                        <!--begin::Filter-->
                        <button type="button" class="btn btn-light-primary me-3" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                            <!--begin::Svg Icon | path: icons/duotune/general/gen031.svg-->
                            <span class="svg-icon svg-icon-2">
												<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
													<path d="M19.0759 3H4.72777C3.95892 3 3.47768 3.83148 3.86067 4.49814L8.56967 12.6949C9.17923 13.7559 9.5 14.9582 9.5 16.1819V19.5072C9.5 20.2189 10.2223 20.7028 10.8805 20.432L13.8805 19.1977C14.2553 19.0435 14.5 18.6783 14.5 18.273V13.8372C14.5 12.8089 14.8171 11.8056 15.408 10.964L19.8943 4.57465C20.3596 3.912 19.8856 3 19.0759 3Z" fill="black"></path>
												</svg>
											</span>
                            <!--end::Svg Icon-->Filter</button>
                        <!--begin::Menu 1-->
                        <div class="menu menu-sub menu-sub-dropdown w-300px w-md-325px" data-kt-menu="true">
                            <!--begin::Header-->
                            <div class="px-7 py-5">
                                <div class="fs-5 text-dark fw-bolder">Filter Options</div>
                            </div>
                            <!--end::Header-->
                            <!--begin::Separator-->
                            <div class="separator border-gray-200"></div>
                            <!--end::Separator-->
                            <!--begin::Content-->
                            <div class="px-7 py-5" data-kt-user-table-filter="form">
                                <!--begin::Input group-->
                                <div class="mb-10">
                                    <label class="form-label fs-6 fw-bold">Status:</label>
                                    <select class="form-select form-select-solid fw-bolder select2-hidden-accessible" data-kt-select2="true" data-placeholder="Select option" data-allow-clear="true" data-kt-user-table-filter="role" data-hide-search="true" data-select2-id="select2-data-10-wugt" tabindex="-1" aria-hidden="true">
                                        <option data-select2-id="select2-data-12-q72w"></option>
                                        <option value="Processed">Processed</option>
                                        <option value="Pending">Pending</option>
                                        <option value="Decline">Decline</option>
                                    </select>

                                </div>
                                <!--end::Input group-->
                                <!--begin::Input group-->

                                <!--end::Input group-->
                                <!--begin::Actions-->
                                <div class="d-flex justify-content-end">
                                    <button type="reset" class="btn btn-light btn-active-light-primary fw-bold me-2 px-6" data-kt-menu-dismiss="true" data-kt-user-table-filter="reset">Reset</button>
                                    <button type="submit" class="btn btn-primary fw-bold px-6" data-kt-menu-dismiss="true" data-kt-user-table-filter="filter">Apply</button>
                                </div>
                                <!--end::Actions-->
                            </div>
                            <!--end::Content-->
                        </div>
                        <!--end::Menu 1-->
                        <!--end::Filter-->
                    </div>
                    <!--end::Toolbar-->
                    <!--begin::Group actions-->
                    <div class="d-flex justify-content-end align-items-center d-none" data-kt-user-table-toolbar="selected">
                        <div class="fw-bolder me-5">
                            <span class="me-2" data-kt-user-table-select="selected_count"></span>Selected</div>
                        <button type="button" class="btn btn-danger" data-kt-user-table-select="delete_selected">Hide Selected</button>
                    </div>
                    <!--end::Group actions-->
                </div>
                <!--end::Card toolbar-->
            </div>
            <!--end::Card header-->
            <!--begin::Card body-->
            <div class="card-body pt-0">
                <!--begin::Table-->
                <div id="kt_table_users_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer"><div class="table-responsive"><table class="table align-middle table-row-dashed fs-6 gy-5 dataTable no-footer" id="kt_table_users">
                            <!--begin::Table head-->
                            <thead>
                            <!--begin::Table row-->
                            <tr class="text-start text-muted fw-bolder fs-7 text-uppercase gs-0">
                                <th class="w-10px pe-2 sorting_disabled" rowspan="1" colspan="1" aria-label="" style="width: 27px;">
                                    <div class="form-check form-check-sm form-check-custom form-check-solid me-3">
                                        <input class="form-check-input" type="checkbox" data-kt-check="true" data-kt-check-target="#kt_table_users .form-check-input" value="1">
                                    </div>
                                </th>
                                <th class="min-w-125px sorting" tabindex="0" aria-controls="kt_table_users" rowspan="1" colspan="1" aria-label="User: activate to sort column ascending" style="width: 209.234px;">User</th>
                                <th class="min-w-125px sorting" tabindex="0" aria-controls="kt_table_users" rowspan="1" colspan="1" aria-label="Role: activate to sort column ascending" style="width: 125px;">Status</th>
                                <th class="min-w-125px sorting" tabindex="0" aria-controls="kt_table_users" rowspan="1" colspan="1" aria-label="Last login: activate to sort column ascending" style="width: 125px;">Amount</th>
                                <th class="min-w-125px sorting" tabindex="0" aria-controls="kt_table_users" rowspan="1" colspan="1" aria-label="User: activate to sort column ascending" style="width: 209.234px;">Reference ID</th>
                                <th class="min-w-125px sorting" tabindex="0" aria-controls="kt_table_users" rowspan="1" colspan="1" aria-label="Joined Date: activate to sort column ascending" style="width: 125px;">Date</th>
                                <th class="text-end min-w-100px sorting_disabled" rowspan="1" colspan="1" aria-label="Actions" style="width: 100px;">Actions</th></tr>
                            <!--end::Table row-->
                            </thead>
                            <!--end::Table head-->
                            <!--begin::Table body-->
                            <tbody class="text-gray-600 fw-bold">
                            <!--begin::Table row-->

                            <!--end::Table row-->
                            <!--begin::Table row-->

                            <!--end::Table row-->
                            <!--begin::Table row-->

                            <!--end::Table row-->
                            <!--begin::Table row-->

                            <!--end::Table row-->
                            <!--begin::Table row-->

                            <!--end::Table row-->
                            <!--begin::Table row-->

                            <!--end::Table row-->
                            <!--begin::Table row-->

                            <!--end::Table row-->
                            <!--begin::Table row-->

                            <!--end::Table row-->
                            <!--begin::Table row-->

                            <!--end::Table row-->
                            <!--begin::Table row-->

                            <!--end::Table row-->
                            <!--begin::Table row-->

                            <!--end::Table row-->
                            <!--begin::Table row-->

                            <!--end::Table row-->
                            <!--begin::Table row-->

                            <!--end::Table row-->
                            <!--begin::Table row-->

                            <!--end::Table row-->
                            <!--begin::Table row-->

                            <!--end::Table row-->
                            <!--begin::Table row-->

                            <!--end::Table row-->
                            <!--begin::Table row-->

                            <!--end::Table row-->
                            <!--begin::Table row-->

                            <!--end::Table row-->
                            <!--begin::Table row-->

                            <!--end::Table row-->
                            <!--begin::Table row-->

                            <!--end::Table row-->
                            <!--begin::Table row-->

                            <!--end::Table row-->
                            <tr class="even">
                                <!--begin::Checkbox-->
                                <td>
                                    <div class="form-check form-check-sm form-check-custom form-check-solid">
                                        <input class="form-check-input" type="checkbox" value="1">
                                    </div>
                                </td>
                                <!--end::Checkbox-->
                                <!--begin::User=-->
                                <td class="d-flex align-items-center">
                                    <!--begin:: Avatar -->
                                    <div class="symbol symbol-circle symbol-50px overflow-hidden me-3">
                                        <a href="view.html">
                                            <div class="symbol-label">
                                                <img src="https://ui-avatars.com/api/?name={{ auth()->user()->username }}" alt="Dan Wilson" class="w-100">
                                            </div>
                                        </a>
                                    </div>
                                    <!--end::Avatar-->
                                    <!--begin::User details-->
                                    <div class="d-flex flex-column">
                                        <a href="view.html" class="text-gray-800 text-hover-primary mb-1">{{ auth()->user()->name }}</a>
                                        <span>{{ auth()->user()->email }}</span>
                                    </div>
                                    <!--begin::User details-->
                                </td>
                                <!--end::User=-->
                                <!--begin::Role=-->
                                <td><div class="badge badge-success fw-bolder">Processed</div></td>
                                <!--end::Role=-->
                                <!--begin::Last login=-->
                                <td data-order="$$$">
                                    <div class="badge badge-light fw-bolder">$75,000</div>
                                </td>
                                <!--end::Last login=-->
                                <!--begin::Two step=-->
                                <!--end::Two step=-->
                                <!--begin::Joined-->
                                <td data-order="#abcsd">#Rsgsghgrw</td>
                                <td data-order="2021-05-05T17:20:00+01:00">05 May 2021, 5:20 pm</td>
                                <!--begin::Joined-->
                                <!--begin::Action=-->
                                <td class="text-end">
                                        <!--end::Menu item-->
                                        <!--begin::Menu item-->
                                            <a href="#" class="menu-link px-3 btn btn-danger btn-sm" data-kt-users-table-filter="delete_row">Delete</a>
                                    <!--end::Menu-->
                                </td>
                                <!--end::Action=-->
                            </tr>
                            <tr class="even">
                                <!--begin::Checkbox-->
                                <td>
                                    <div class="form-check form-check-sm form-check-custom form-check-solid">
                                        <input class="form-check-input" type="checkbox" value="1">
                                    </div>
                                </td>
                                <!--end::Checkbox-->
                                <!--begin::User=-->
                                <td class="d-flex align-items-center">
                                    <!--begin:: Avatar -->
                                    <div class="symbol symbol-circle symbol-50px overflow-hidden me-3">
                                        <a href="view.html">
                                            <div class="symbol-label">
                                                <img src="https://ui-avatars.com/api/?name={{ auth()->user()->username }}" alt="Dan Wilson" class="w-100">
                                            </div>
                                        </a>
                                    </div>
                                    <!--end::Avatar-->
                                    <!--begin::User details-->
                                    <div class="d-flex flex-column">
                                        <a href="view.html" class="text-gray-800 text-hover-primary mb-1">{{ auth()->user()->name }}</a>
                                        <span>{{ auth()->user()->email }}</span>
                                    </div>
                                    <!--begin::User details-->
                                </td>
                                <!--end::User=-->
                                <!--begin::Role=-->
                                <td><div class="badge badge-danger fw-bolder">Decline</div></td>
                                <!--end::Role=-->
                                <!--begin::Last login=-->
                                <td data-order="$$$">
                                    <div class="badge badge-light fw-bolder">$75,000</div>
                                </td>
                                <!--end::Last login=-->
                                <!--begin::Two step=-->
                                <!--end::Two step=-->
                                <!--begin::Joined-->
                                <td data-order="#abcsd">#Rsgsghgrw</td>
                                <td data-order="2021-05-05T17:20:00+01:00">05 May 2021, 5:20 pm</td>
                                <!--begin::Joined-->
                                <td class="text-end">
                                    <!--end::Menu item-->
                                    <!--begin::Menu item-->
                                    <a href="#" class="menu-link px-3 btn btn-danger btn-sm" data-kt-users-table-filter="delete_row">Delete</a>
                                    <!--end::Menu-->
                                </td>
                                <!--end::Action=-->
                            </tr>
                            <tr class="even">
                                <!--begin::Checkbox-->
                                <td>
                                    <div class="form-check form-check-sm form-check-custom form-check-solid">
                                        <input class="form-check-input" type="checkbox" value="1">
                                    </div>
                                </td>
                                <!--end::Checkbox-->
                                <!--begin::User=-->
                                <td class="d-flex align-items-center">
                                    <!--begin:: Avatar -->
                                    <div class="symbol symbol-circle symbol-50px overflow-hidden me-3">
                                        <a href="view.html">
                                            <div class="symbol-label">
                                                <img src="https://ui-avatars.com/api/?name={{ auth()->user()->username }}" alt="Dan Wilson" class="w-100">
                                            </div>
                                        </a>
                                    </div>
                                    <!--end::Avatar-->
                                    <!--begin::User details-->
                                    <div class="d-flex flex-column">
                                        <a href="view.html" class="text-gray-800 text-hover-primary mb-1">{{ auth()->user()->name }}</a>
                                        <span>{{ auth()->user()->email }}</span>
                                    </div>
                                    <!--begin::User details-->
                                </td>
                                <!--end::User=-->
                                <!--begin::Role=-->
                                <td><div class="badge badge-warning fw-bolder">Pending..</div></td>
                                <!--end::Role=-->
                                <!--begin::Last login=-->
                                <td data-order="$$$">
                                    <div class="badge badge-light fw-bolder">$75,000</div>
                                </td>
                                <!--end::Last login=-->
                                <!--begin::Two step=-->
                                <!--end::Two step=-->
                                <!--begin::Joined-->
                                <td data-order="#abcsd">#Rsgsghgrw</td>
                                <td data-order="2021-05-05T17:20:00+01:00">05 May 2021, 5:20 pm</td>
                                <!--begin::Joined-->
                                <td class="text-end">
                                    <!--end::Menu item-->
                                    <!--begin::Menu item-->
                                    <a href="#" class="menu-link px-3 btn btn-danger btn-sm" data-kt-users-table-filter="delete_row">Delete</a>
                                    <!--end::Menu-->
                                </td>
                                <!--end::Action=-->
                            </tr>
                            </tbody>
                            <!--end::Table body-->
                        </table>
                    </div>
                    <div class="row">
                        <div class="col-sm-12 col-md-5 d-flex align-items-center justify-content-center justify-content-md-start">

                        </div>
                        <div class="col-sm-12 col-md-7 d-flex align-items-center justify-content-center justify-content-md-end">
                            <div class="dataTables_paginate paging_simple_numbers" id="kt_table_users_paginate">
                                <ul class="pagination">
                                    <li class="paginate_button page-item previous disabled" id="kt_table_users_previous">
                                        <a href="#" aria-controls="kt_table_users" data-dt-idx="0" tabindex="0" class="page-link">
                                            <i class="previous"></i>
                                        </a>
                                    </li>
                                    <li class="paginate_button page-item active">
                                        <a href="#" aria-controls="kt_table_users" data-dt-idx="1" tabindex="0" class="page-link">1</a>
                                    </li>
                                    <li class="paginate_button page-item ">
                                        <a href="#" aria-controls="kt_table_users" data-dt-idx="2" tabindex="0" class="page-link">2</a>
                                    </li>
                                    <li class="paginate_button page-item ">
                                        <a href="#" aria-controls="kt_table_users" data-dt-idx="3" tabindex="0" class="page-link">3</a>
                                    </li><li class="paginate_button page-item next" id="kt_table_users_next">
                                        <a href="#" aria-controls="kt_table_users" data-dt-idx="4" tabindex="0" class="page-link"><i class="next"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <!--end::Table-->
            </div>
            <!--end::Card body-->
        </div>
        <!--end::Card-->
    </div>
    <!--end::Post-->
</div>

@extends('layout.default')
@section('content')
    <div class="row">
        <div class="col-lg-12">
            <div class="card card-custom">
                <!--begin::Card header-->
                <div class="card-header card-header-tabs-line nav-tabs-line-3x">
                    <!--begin::Toolbar-->
                    <div class="card-toolbar">
                        <ul class="nav nav-tabs nav-bold nav-tabs-line nav-tabs-line-3x">
                            <!--begin::Item-->
                            <li class="nav-item mr-3">
                                <a class="nav-link active" data-toggle="tab" href="#kt_user_edit_tab_1">
														<span class="nav-icon">
															<span class="svg-icon">
																<!--begin::Svg Icon | path:/metronic/theme/html/demo1/dist/assets/media/svg/icons/Design/Layers.svg-->
																<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
																	<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																		<polygon points="0 0 24 0 24 24 0 24"></polygon>
																		<path d="M12,11 C9.790861,11 8,9.209139 8,7 C8,4.790861 9.790861,3 12,3 C14.209139,3 16,4.790861 16,7 C16,9.209139 14.209139,11 12,11 Z" fill="#000000" fill-rule="nonzero" opacity="0.3"></path>
																		<path d="M3.00065168,20.1992055 C3.38825852,15.4265159 7.26191235,13 11.9833413,13 C16.7712164,13 20.7048837,15.2931929 20.9979143,20.2 C21.0095879,20.3954741 20.9979143,21 20.2466999,21 C16.541124,21 11.0347247,21 3.72750223,21 C3.47671215,21 2.97953825,20.45918 3.00065168,20.1992055 Z" fill="#000000" fill-rule="nonzero"></path>
																	</g>
																</svg>
                                                                <!--end::Svg Icon-->
															</span>
														</span>
                                    <span class="nav-text font-size-lg">حسابي</span>
                                </a>
                            </li>
                            <!--end::Item-->
                            <!--begin::Item-->
                            <li class="nav-item mr-3">
                                <a class="nav-link" data-toggle="tab" href="#kt_user_edit_tab_2">
														<span class="nav-icon">
															<span class="svg-icon">
																<!--begin::Svg Icon | path:/metronic/theme/html/demo1/dist/assets/media/svg/icons/Communication/Shield-user.svg-->
																<svg xmlns="http://www.w3.org/2000/svg" id="Capa_1" enable-background="new 0 0 512 512" height="512" viewBox="0 0 512 512" width="512"><g><path d="m484.827 157.974h-86.825c-14.983 0-27.173 12.196-27.173 27.188v99.934h-32.476c1.805-6.561 2.474-14.3 2.035-23.306v-.001c-.705-38.059-7.611-70.135-20.528-95.337-10.03-19.567-21.735-31.298-31.779-38.311 11.789-12.121 18.605-29.364 18.605-49.251 0-35.781-28.543-64.89-63.626-64.89s-63.626 29.109-63.626 64.89c0 4.143 3.358 7.5 7.5 7.5h5.096c-.469 2.83-.719 5.714-.719 8.643 0 25.216 18.018 46.291 41.84 51.014-2.497 9.272-3.738 20.205-3.733 32.625l-18.706 16.089-45.515 3.681-52.503-17.356c-4.812-1.6-10.266-3.408-14.998.004-4.663 3.365-4.663 9.256-4.663 11.191v39.035c0 4.143 3.358 7.5 7.5 7.5h8.929l-13.695 47.324c-1.151 3.978 1.141 8.138 5.12 9.289 3.981 1.157 8.138-1.141 9.29-5.119l14.902-51.494h21.322c-26.52 80.872-11.388 134.854 11.871 189.485h-13.482l-56.153-62.786 11.874-41.02c1.152-3.979-1.14-8.138-5.119-9.289s-8.138 1.141-9.29 5.119l-11.357 39.237c-35.126-.586-66.546 23.632-74.553 58.475-.927 4.036 1.592 8.06 5.627 8.988l10.647 2.45c-2.72 28.252 15.885 54.907 44.259 61.438 4.309.993 8.655 1.483 12.971 1.483 10.644 0 21.101-2.984 30.35-8.781 10.855-6.802 18.943-16.802 23.32-28.62l8.401 1.933c2.503.579 4.877.872 7.249-.405 2.207-1.188 3.674-3.333 4.224-5.754.528-2.455.93-4.95 1.209-7.468h156.858c5.016 31.187 31.551 54.696 63.242 54.696s58.227-23.509 63.243-54.696h5.724s1.136.013 1.395.013c2.145 0 5.243-.238 7.787-2.826 1.273-1.295 2.767-3.612 2.652-7.293-.211-7.043-1.268-13.848-3.072-20.316 5.974-36.268.226-58.357-8.295-75.644 5.387-3.531 8.959-9.615 8.959-16.527v-20.613h37.883c14.983 0 27.173-12.196 27.173-27.188v-87.746c.002-14.991-12.187-27.187-27.171-27.187zm-388.746 312.933c-9.601 6.017-20.961 7.93-31.989 5.391h-.001c-20.298-4.672-33.84-23.285-32.853-43.411l81.353 18.724c-3.366 7.925-9.061 14.628-16.51 19.296zm37.528-29.866-116.665-26.846c9.003-24.654 33.231-40.974 59.714-39.57l57.151 63.901c-.05.843-.116 1.681-.2 2.515zm113.285-130.695c-2.177 5.742-2.177 12.821-2.177 22.62v28.302h-27.463v-38.828c0-43.898 23.958-51.721 34.71-53.012h73.529c-.296 9.963-2.544 17.045-6.812 21.54-4.974 5.238-13.485 7.79-26.021 7.802l-26.921.028c-9.6.001-15.94 3.885-18.845 11.548zm-2.177 65.921v17.908c-.068 0-.138 0-.21 0h-53.273c.599-5.554 2.329-9.852 5.17-12.826 4.226-4.422 10.178-5.082 13.35-5.082zm80.445-121.838h-68.207c-2.739-8.619-5.181-18.057-7.189-27.757l20.737-13.46c11.32-7.351 17.209-17.738 16.157-28.499-.932-9.539-7.417-18.06-16.521-21.707-8.314-3.33-17.263-2.284-25.172 2.773.652-7.174 1.866-13.578 3.622-19.014 3.197-.33 6.372-.955 9.49-1.872 6.347-1.474 12.212-3.823 17.507-6.938 14.445 8.63 46.215 36.622 49.576 116.474zm-130.179-183.038c3.537-23.964 23.749-42.39 48.077-42.39 26.812 0 48.626 22.381 48.626 49.89 0 22.374-10.729 40.407-28.029 48.343v-39.463c0-6.833-2.615-15.215-15.069-16.349-.226-.021-.453-.031-.68-.031zm11.329 23.643c0-2.96.337-5.851 1-8.643h40.228c.463.05.801.104 1.043.153.039.278.073.678.073 1.227v43.876c-1.787.263-3.585.396-5.382.397-.017 0-.034 0-.05 0-20.356-.019-36.912-16.614-36.912-37.01zm-9.723 115.92 17.764-1.437c1.583-.127 3.084-.754 4.289-1.789l32.06-27.575.005-.005c3.1-2.671 6.409-4.041 9.631-4.041 1.434 0 2.851.272 4.224.822 3.963 1.587 6.777 5.215 7.171 9.241.495 5.067-2.843 10.203-9.396 14.459l-35.725 23.188h-30.021v-12.863zm-31.696 2.564 16.696-1.35v11.651h-19.401c-2.515 0-3.128-2.09-3.2-3.843-.041-.994.053-5.978 5.905-6.458zm-17.751-5.178c-2.259 3.704-3.314 8.037-3.141 12.25.045 1.091.184 2.142.378 3.166 0 .021-.012.042-.008.062h-36.336v-28.473l39.136 12.937c-.012.02-.018.039-.029.058zm15.088 30.478h66.601c1.449 0 2.868-.42 4.083-1.209l3.395-2.204c1.633 7.218 3.493 14.242 5.519 20.876-15.296 4.515-39.575 19.106-39.575 66.158v39.581c-5.262 1.062-11.487 3.516-16.694 8.965-5.489 5.744-8.624 13.527-9.376 23.189h-15.13c-15.246-43.938-21.044-90.694 1.177-155.356zm12.362 189.458c-2.772-6.375-5.444-12.726-7.96-19.101h77.874c10.093 0 15.21-4.595 15.21-13.656v-26.752-28.302h59.199c4.143 0 7.5-3.357 7.5-7.5s-3.357-7.5-7.5-7.5h-59.145c.096-4.26.369-7.744 1.15-9.802.379-1.001.707-1.865 4.826-1.865l26.928-.028c16.865-.016 28.93-4.096 36.885-12.474.368-.388.716-.795 1.065-1.2h47.706 53.615v20.613c0 2.578-2.173 4.756-4.745 4.756h-74.665c-4.143 0-7.5 3.357-7.5 7.5s3.357 7.5 7.5 7.5h70.258c5.928 11.003 11.26 24.694 10.943 46.325-14.838-20.611-38.859-33.864-66.121-33.864-21.894 0-42.438 8.588-57.849 24.183-13.675 13.837-21.888 31.796-23.578 51.192zm193.958 54.723c-23.446 0-43.22-16.893-48.004-39.696h96.008c-4.785 22.801-24.559 39.696-48.004 39.696zm56.524-54.696h-113.046-10.775c3.682-33.913 32.038-60.377 66.362-60.377 30.135 0 55.442 19.871 63.823 47.688.027.088.054.176.084.263 1.185 3.991 2.022 8.145 2.475 12.426zm71.926-155.395c0 6.721-5.461 12.188-12.173 12.188h-98.998v-38.731h111.171zm0-41.543h-111.171v-15.951h111.171zm0-30.951h-111.171v-15.252c0-6.721 5.461-12.188 12.173-12.188h86.825c6.712 0 12.173 5.468 12.173 12.188z"></path></g></svg>
                                                                <!--end::Svg Icon-->
															</span>
														</span>
                                    <span class="nav-text font-size-lg"> بيانات السيارة  </span>
                                </a>
                            </li>

                            <!--end::Item-->
                            <!--begin::Item-->
                            <li class="nav-item mr-3">
                                <a class="nav-link" data-toggle="tab" href="#kt_user_edit_tab_3">
														<span class="nav-icon">
															<span class="svg-icon">
																<!--begin::Svg Icon | path:/metronic/theme/html/demo1/dist/assets/media/svg/icons/Communication/Shield-user.svg-->
																<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
																	<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																		<rect x="0" y="0" width="24" height="24"></rect>
																		<path d="M4,4 L11.6314229,2.5691082 C11.8750185,2.52343403 12.1249815,2.52343403 12.3685771,2.5691082 L20,4 L20,13.2830094 C20,16.2173861 18.4883464,18.9447835 16,20.5 L12.5299989,22.6687507 C12.2057287,22.8714196 11.7942713,22.8714196 11.4700011,22.6687507 L8,20.5 C5.51165358,18.9447835 4,16.2173861 4,13.2830094 L4,4 Z" fill="#000000" opacity="0.3"></path>
																		<path d="M12,11 C10.8954305,11 10,10.1045695 10,9 C10,7.8954305 10.8954305,7 12,7 C13.1045695,7 14,7.8954305 14,9 C14,10.1045695 13.1045695,11 12,11 Z" fill="#000000" opacity="0.3"></path>
																		<path d="M7.00036205,16.4995035 C7.21569918,13.5165724 9.36772908,12 11.9907452,12 C14.6506758,12 16.8360465,13.4332455 16.9988413,16.5 C17.0053266,16.6221713 16.9988413,17 16.5815,17 C14.5228466,17 11.463736,17 7.4041679,17 C7.26484009,17 6.98863236,16.6619875 7.00036205,16.4995035 Z" fill="#000000" opacity="0.3"></path>
																	</g>
																</svg>
                                                                <!--end::Svg Icon-->
															</span>
														</span>
                                    <span class="nav-text font-size-lg">تغيير كلمة المرور </span>
                                </a>
                            </li>
                            <!--end::Item-->

                        </ul>
                    </div>
                    <!--end::Toolbar-->
                </div>
                <!--end::Card header-->
                <!--begin::Card body-->
                <div class="card-body">
                    <form  method="POST" action="{{route('drivers.update',$user)}}" class="formAction">
                        @csrf
                        <input type="hidden" name="id" value="{{$user->id}}">
                        @method('Patch')
                        <div class="tab-content">
                            <!--begin::Tab-->
                            <div class="tab-pane show px-7 active" id="kt_user_edit_tab_1" role="tabpanel">
                                <!--begin::Row-->
                                <div class="row">
                                    <div class="col-xl-2"></div>
                                    <div class="col-xl-7 my-2">
                                        <!--begin::Row-->
                                        <div class="row">
                                            <label class="col-3"></label>
                                            <div class="col-9">
                                                <h6 class="text-dark font-weight-bold mb-10">بيانات العميل:</h6>
                                            </div>
                                        </div>
                                        <!--end::Row-->
                                        <!--begin::Group-->
                                        <div class="form-group row">
                                            <label class="col-form-label col-3 text-lg-right text-left">الصورة</label>
                                            <div class="col-9">
                                                <div class="image-input image-input-empty image-input-outline" id="kt_user_edit_avatar" style="background-image: url({{$user->img}})">
                                                    <div class="image-input-wrapper"></div>
                                                    <label class="btn btn-xs btn-icon btn-circle btn-white btn-hover-text-primary btn-shadow" data-action="change" data-toggle="tooltip" title="" data-original-title="Change avatar">
                                                        <i class="fa fa-pen icon-sm text-muted"></i>
                                                        <input type="file" name="img" id="profile_avatar" accept=".png, .jpg, .jpeg">
                                                        <input type="hidden" name="profile_avatar_remove">
                                                    </label>
                                                    <span class="btn btn-xs btn-icon btn-circle btn-white btn-hover-text-primary btn-shadow" data-action="cancel" data-toggle="tooltip" title="" data-original-title="Cancel avatar">
																			<i class="ki ki-bold-close icon-xs text-muted"></i>
																		</span>
                                                    <span class="btn btn-xs btn-icon btn-circle btn-white btn-hover-text-primary btn-shadow" data-action="remove" data-toggle="tooltip" title="" data-original-title="Remove avatar">
																			<i class="ki ki-bold-close icon-xs text-muted"></i>
																		</span>
                                                </div>
                                            </div>
                                        </div>
                                        <!--end::Group-->
                                        <!--begin::Group-->
                                        <div class="form-group row">
                                            <label class="col-form-label col-3 text-lg-right text-left">الإسم</label>
                                            <div class="col-9">
                                                <input class="form-control form-control-lg form-control-solid" name="name"  type="text" value="{{$user->name}}">
                                            </div>
                                        </div>
                                        <div class="form-group row mb-2">
                                            <label class="col-form-label col-3 text-lg-right text-left">الحالة </label>
                                            <div class="col-3">
																		<span class="switch">
																			<label>
																				<input type="checkbox" checked="checked" name="select">
																				<span></span>
																			</label>
																		</span>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-form-label col-3 text-lg-right text-left"> رقم الهاتف</label>
                                            <div class="col-9">
                                                <div class="input-group input-group-lg input-group-solid">
                                                    <div class="input-group-prepend">
																			<span class="input-group-text">
																				<i class="la la-phone"></i>
																			</span>
                                                    </div>
                                                    <input type="text" name="phone"  class="form-control form-control-lg form-control-solid" value="{{$user->phone}}" placeholder="Phone">
                                                </div>
                                            </div>
                                        </div>
                                        <!--end::Group-->
                                        <!--begin::Group-->
                                        <div class="form-group row">
                                            <label class="col-form-label col-3 text-lg-right text-left"> البريد الإلكتروني </label>
                                            <div class="col-9">
                                                <div class="input-group input-group-lg input-group-solid">
                                                    <div class="input-group-prepend">
																			<span class="input-group-text">
																				<i class="la la-at"></i>
																			</span>
                                                    </div>
                                                    <input type="text" name="email" class="form-control form-control-lg form-control-solid" value="{{$user->email}}" placeholder="Email">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-footer pb-0">
                                            <div class="row">
                                                <div class="col-xl-2"></div>
                                                <div class="col-xl-7">
                                                    <div class="row">
                                                        <div class="col-3"></div>
                                                        <div class="col-9">
                                                            <a href="#" class="btn btn-light-primary btn-update font-weight-bold"> حفظ التغييرات</a>
                                                            <a href="#" class="btn btn-clean font-weight-bold">إلغاء</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                                <!--end::Row-->
                            </div>
                            <div class="tab-pane px-7" id="kt_user_edit_tab_2" role="tabpanel">
                                <!--begin::Body-->
                                <div class="card-body">

                                <div class="row">
                                    <label class="col-3"></label>
                                    <div class="col-9">
                                        <h6 class="text-dark font-weight-bold mb-10">بيانات السيارة:</h6>
                                    </div>
                                </div>
                                <!--end::Row-->
                                <!--begin::Group-->
                                <div class="form-group row">
                                    <label class="col-form-label col-3 text-lg-right text-left">الصورة</label>
                                    <div class="col-9">
                                        <div class="image-input image-input-empty image-input-outline" id="car_img" style="background-image: url({{$user->car->img}})">
                                            <div class="image-input-wrapper"></div>
                                            <label class="btn btn-xs btn-icon btn-circle btn-white btn-hover-text-primary btn-shadow" data-action="change" data-toggle="tooltip" title="" data-original-title="Change avatar">
                                                <i class="fa fa-pen icon-sm text-muted"></i>
                                                <input type="file" id="carImg" name="carImg" accept=".png, .jpg, .jpeg">
                                                <input type="hidden" name="profile_avatar_remove">
                                            </label>
                                            <span class="btn btn-xs btn-icon btn-circle btn-white btn-hover-text-primary btn-shadow" data-action="cancel" data-toggle="tooltip" title="" data-original-title="Cancel avatar">
																			<i class="ki ki-bold-close icon-xs text-muted"></i>
																		</span>
                                            <span class="btn btn-xs btn-icon btn-circle btn-white btn-hover-text-primary btn-shadow" data-action="remove" data-toggle="tooltip" title="" data-original-title="Remove avatar">
																			<i class="ki ki-bold-close icon-xs text-muted"></i>
																		</span>
                                        </div>
                                    </div>
                                </div>
                                <!--end::Group-->
                                <!--begin::Group-->
                                <div class="form-group row">
                                    <label class="col-form-label col-3 text-lg-right text-left">إسم السيارة</label>
                                    <div class="col-9">
                                        <input class="form-control form-control-lg form-control-solid" name="nameCar"  type="text" value="{{$user->car->name}}">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-form-label col-3 text-lg-right text-left"> رقم السيارة</label>
                                    <div class="col-9">
                                        <div class="input-group input-group-lg input-group-solid">

                                            <input type="text" name="number"  class="form-control form-control-lg form-control-solid" value="{{$user->car->number}}" placeholder="Phone">
                                        </div>
                                    </div>
                                </div>
                                <!--end::Group-->
                                <!--begin::Group-->
                                <div class="form-group row">
                                    <label class="col-form-label col-3 text-lg-right text-left"> النوع  </label>
                                    <div class="col-9">
                                        <div class="input-group input-group-lg input-group-solid">

                                            <input type="text" name="type" class="form-control form-control-lg form-control-solid" value="{{$user->car->type}}" placeholder="Email">
                                        </div>
                                    </div>
                                </div>
                                    <div class="form-group row">
                                        <label class="col-form-label col-3 text-lg-right text-left"> اللون  </label>
                                        <div class="col-9">
                                            <div class="input-group input-group-lg input-group-solid">

                                                <input type="text" name="color" class="form-control form-control-lg form-control-solid" value="{{$user->car->color}}" placeholder="Email">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="col-form-label col-3 text-lg-right text-left">رخصة القيادة</label>
                                        <div class="col-9">
                                            <div class="image-input image-input-empty image-input-outline" id="kt_user_edit_avatar" style="background-image: url({{$user->car->license}})">
                                                <div class="image-input-wrapper"></div>

                                                <span class="btn btn-xs btn-icon btn-circle btn-white btn-hover-text-primary btn-shadow" data-action="cancel" data-toggle="tooltip" title="" data-original-title="Cancel avatar">
																			<i class="ki ki-bold-close icon-xs text-muted"></i>
																		</span>
                                                <span class="btn btn-xs btn-icon btn-circle btn-white btn-hover-text-primary btn-shadow" data-action="remove" data-toggle="tooltip" title="" data-original-title="Remove avatar">
																			<i class="ki ki-bold-close icon-xs text-muted"></i>
																		</span>
                                            </div>
                                        </div>
                                    </div>
                                <div class="card-footer pb-0">
                                    <div class="row">
                                        <div class="col-xl-2"></div>
                                        <div class="col-xl-7">
                                            <div class="row">
                                                <div class="col-3"></div>
                                                <div class="col-9">
                                                    <a href="#" class="btn btn-light-primary btn-update font-weight-bold"> حفظ التغييرات</a>
                                                    <a href="#" class="btn btn-clean font-weight-bold">إلغاء</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                </div>
                                <!--end::Footer-->
                            </div>

                            <div class="tab-pane px-7" id="kt_user_edit_tab_3" role="tabpanel">
                                <!--begin::Body-->
                                <div class="card-body">
                                    <!--begin::Row-->
                                    <div class="row">
                                        <div class="col-xl-2"></div>
                                        <div class="col-xl-7">
                                            <!--begin::Row-->
                                            <div class="row mb-5">
                                                <label class="col-3"></label>
                                                <div class="col-9">
                                                </div>
                                            </div>
                                            <!--end::Row-->
                                            <!--begin::Row-->

                                            <div class="form-group row">
                                                <label class="col-form-label col-3 text-lg-right text-left"> كلمة المرور الجديدة</label>
                                                <div class="col-9">
                                                    <input class="form-control form-control-lg form-control-solid" name="password" type="password" placeholder="كلمة المرور الجديدة">
                                                </div>
                                            </div>
                                            <!--end::Group-->
                                            <!--begin::Group-->
                                            <div class="form-group row">
                                                <label class="col-form-label col-3 text-lg-right text-left"> تأكيد كلمة المرور</label>
                                                <div class="col-9">
                                                    <input class="form-control form-control-lg form-control-solid" type="password" placeholder=" تأكيد كلمة المرور">
                                                </div>
                                            </div>
                                            <!--end::Group-->
                                        </div>
                                    </div>
                                    <!--end::Row-->
                                </div>
                                <!--end::Body-->
                                <!--begin::Footer-->
                                <div class="card-footer pb-0">
                                    <div class="row">
                                        <div class="col-xl-2"></div>
                                        <div class="col-xl-7">
                                            <div class="row">
                                                <div class="col-3"></div>
                                                <div class="col-9">
                                                    <a href="#" class="btn btn-light-primary btn-update font-weight-bold"> حفظ التغييرات</a>
                                                    <a href="#" class="btn btn-clean font-weight-bold">إلغاء</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--end::Footer-->
                            </div>
                            <!--end::Tab-->
                            <!--begin::Tab-->

                            <!--end::Tab-->
                        </div>
                    </form>
                </div>
                <!--begin::Card body-->
            </div>
        </div>



        <div class="toast-container">
            <div class="alert alert-success d-none" role="alert"></div>
        </div>
        @endsection

        @section('scripts')


            <script src="{{asset('/js/ajax.js')}}"></script>
    <script>
        function readURL(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function(e) {
                    $('#kt_user_edit_avatar').css("background-image", "url(" +  e.target.result + ")");
                }

                reader.readAsDataURL(input.files[0]); // convert to base64 string
            }
        }
        function readURLCar(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function(e) {
                    $('#car_img').css("background-image", "url(" +  e.target.result + ")");
                }

                reader.readAsDataURL(input.files[0]); // convert to base64 string
            }
        }
        function readURLLicense(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function(e) {
                    $('#car_license').css("background-image", "url(" +  e.target.result + ")");
                }

                reader.readAsDataURL(input.files[0]); // convert to base64 string
            }
        }
        $("#profile_avatar").change(function() {
            readURL(this);
        });

        $("#carImg").change(function() {
            readURLCar(this);
        });
    </script>
@endsection


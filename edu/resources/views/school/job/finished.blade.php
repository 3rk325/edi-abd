@extends('layout.default')
@section('content')
    <div class="d-flex flex-column-fluid">
        <!--begin::Container-->
        <div class="container">
            <!--begin::Card-->
            <div class="card card-custom gutter-b">
                <div class="card-body">
                    <div class="d-flex">
                        <!--begin::Pic-->
                        <div class="flex-shrink-0 mr-7">
                            <div class="symbol symbol-50 symbol-lg-120">
                                <img alt="Pic" src="{{asset($school->img)}}">
                            </div>
                        </div>
                        <!--end::Pic-->
                        <!--begin: Info-->
                        <div class="flex-grow-1">
                            <!--begin::Title-->
                            <div class="d-flex align-items-center justify-content-between flex-wrap">
                                <!--begin::User-->
                                <div class="mr-3">
                                    <div class="d-flex align-items-center mr-3">
                                        <!--begin::Name-->
                                        <a href="#" class="d-flex align-items-center text-dark text-hover-primary font-size-h5 font-weight-bold mr-3">{{$job->Teacher->name}}</a>
                                        <!--end::Name-->
                                        <span class="label label-light-success label-inline font-weight-bolder mr-1">{{$job->Teacher->other ??$job->Teacher->subject()}}</span>
                                    </div>
                                    <!--begin::Contacts-->
                                    <div class="d-flex flex-wrap my-2">
                                        <a href="#" class="text-muted text-hover-primary font-weight-bold mr-lg-8 mr-5 mb-lg-0 mb-2">
															<span class="svg-icon svg-icon-md svg-icon-gray-500 mr-1">
																<!--begin::Svg Icon | path:/metronic/theme/html/demo1/dist/assets/media/svg/icons/Communication/Mail-notification.svg-->
																<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
																	<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																		<rect x="0" y="0" width="24" height="24"></rect>
																		<path d="M21,12.0829584 C20.6747915,12.0283988 20.3407122,12 20,12 C16.6862915,12 14,14.6862915 14,18 C14,18.3407122 14.0283988,18.6747915 14.0829584,19 L5,19 C3.8954305,19 3,18.1045695 3,17 L3,8 C3,6.8954305 3.8954305,6 5,6 L19,6 C20.1045695,6 21,6.8954305 21,8 L21,12.0829584 Z M18.1444251,7.83964668 L12,11.1481833 L5.85557487,7.83964668 C5.4908718,7.6432681 5.03602525,7.77972206 4.83964668,8.14442513 C4.6432681,8.5091282 4.77972206,8.96397475 5.14442513,9.16035332 L11.6444251,12.6603533 C11.8664074,12.7798822 12.1335926,12.7798822 12.3555749,12.6603533 L18.8555749,9.16035332 C19.2202779,8.96397475 19.3567319,8.5091282 19.1603533,8.14442513 C18.9639747,7.77972206 18.5091282,7.6432681 18.1444251,7.83964668 Z" fill="#000000"></path>
																		<circle fill="#000000" opacity="0.3" cx="19.5" cy="17.5" r="2.5"></circle>
																	</g>
																</svg>
                                                                <!--end::Svg Icon-->
															</span>{{$job->Teacher->email}}</a>
                                        <a href="#" class="text-muted text-hover-primary font-weight-bold mr-lg-8 mr-5 mb-lg-0 mb-2">
															<span class="svg-icon svg-icon-md svg-icon-gray-500 mr-1">
																<!--begin::Svg Icon | path:/metronic/theme/html/demo1/dist/assets/media/svg/icons/General/Lock.svg-->
																<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
																	<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																		<mask fill="white">
																			<use xlink:href="#path-1"></use>
																		</mask>
																		<g></g>
																		<path d="M7,10 L7,8 C7,5.23857625 9.23857625,3 12,3 C14.7614237,3 17,5.23857625 17,8 L17,10 L18,10 C19.1045695,10 20,10.8954305 20,12 L20,18 C20,19.1045695 19.1045695,20 18,20 L6,20 C4.8954305,20 4,19.1045695 4,18 L4,12 C4,10.8954305 4.8954305,10 6,10 L7,10 Z M12,5 C10.3431458,5 9,6.34314575 9,8 L9,10 L15,10 L15,8 C15,6.34314575 13.6568542,5 12,5 Z" fill="#000000"></path>
																	</g>
																</svg>
                                                                <!--end::Svg Icon-->
															</span>{{$job->Teacher->phone}}</a>
                                        <a href="#" class="text-muted text-hover-primary font-weight-bold">
															<span class="svg-icon svg-icon-md svg-icon-gray-500 mr-1">
																<!--begin::Svg Icon | path:/metronic/theme/html/demo1/dist/assets/media/svg/icons/Map/Marker2.svg-->
																<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
																	<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																		<rect x="0" y="0" width="24" height="24"></rect>
																		<path d="M9.82829464,16.6565893 C7.02541569,15.7427556 5,13.1079084 5,10 C5,6.13400675 8.13400675,3 12,3 C15.8659932,3 19,6.13400675 19,10 C19,13.1079084 16.9745843,15.7427556 14.1717054,16.6565893 L12,21 L9.82829464,16.6565893 Z M12,12 C13.1045695,12 14,11.1045695 14,10 C14,8.8954305 13.1045695,8 12,8 C10.8954305,8 10,8.8954305 10,10 C10,11.1045695 10.8954305,12 12,12 Z" fill="#000000"></path>
																	</g>
																</svg>
                                                                <!--end::Svg Icon-->
															</span>{{$job->Teacher->nationality}}</a>
                                    </div>
                                    <!--end::Contacts-->
                                </div>
                                <!--begin::User-->
                                <!--begin::Actions-->
                                <div class="mb-10">

                                </div>
                                <!--end::Actions-->
                            </div>
                            <!--end::Title-->
                            <!--begin::Content-->
                            <div class="d-flex align-items-center flex-wrap justify-content-between">
                                <!--begin::Description-->
                                <div class="flex-grow-1 font-weight-bold text-dark-50 py-2 py-lg-2 mr-5">
                                    <p>Qualification : <strong>{{$job->Teacher->qualification}}</strong> </p>
                                    <p>Years of Experience : <strong>{{$job->Teacher->exp()}}</strong> </p>

                                </div>
                                <!--end::Description-->
                                <!--begin::Progress-->
                                <div class="d-flex mt-4 mt-sm-0">
                                    <div class="flex-grow-1 font-weight-bold text-dark-50 py-2 py-lg-2 mr-5">

                                    <p>Age : <strong>{{$job->Teacher->age}}</strong> </p>
                                    <p>Experience in international programs : <strong>{{$job->Teacher->expP}}</strong> </p>
                                </div>
                                </div>
                                <!--end::Progress-->
                            </div>
                            <!--end::Content-->
                        </div>
                        <!--end::Info-->
                    </div>
                </div>
            </div>
            <!--end::Card-->
            <!--begin::Row-->
            <div class="row">
                <div class="col-xl-4">
                    <!--begin::Card-->
                    <div class="card card-custom gutter-b">
                        <div class="card-header h-auto py-3 border-0">
                            <div class="card-title">
                                <h3 class="card-label text-danger">Important Notice</h3>
                            </div>
                            <div class="card-toolbar">
                                <span class="label font-weight-bold label label-inline label-light-danger">Now</span>
                            </div>
                        </div>
                        <div class="card-body pt-2">
                            <p class="text-dark-100">Date meeting: {{$job->date}}</p>
                            <p class="text-dark-100">From: {{$job->start}} To : {{$job->End}}</p>
                            <p class="text-dark-50">Status :   <span class="label label-lg label-light-{{$job->span()}} label-inline" style="color:black;">{{$job->status}}</span></p>
                            <p class="text-dark-50">Grade : <strong>{{$job->grade()}}</strong></p>
                            <p class="text-dark-50">Note : {{$job->note ?? 'No Note'}}</p>
                            @foreach($job->Teacher->files as $file)
                                <a href="{{asset($file->resume)}}" download class="btn btn-primary font-weight-bold mr-2">Download file</a>
                            @endforeach

                        </div>
                    </div>
                    <!--end::Card-->
                    <!--begin::Card-->
                    <div class="card card-custom">
                        <!--begin::Header-->
                        <div class="card-header h-auto py-4">
                            <div class="card-title">
                                <h3 class="card-label">{{__("School")}}
                                    <span class="d-block text-muted pt-2 font-size-sm">{{__("School profile preview")}}</span></h3>
                            </div>
                        </div>
                        <!--end::Header-->
                        <!--begin::Body-->
                        <div class="card-body py-4">
                            <div class="form-group row my-2">
                                <label class="col-4 col-form-label">{{__("Name")}}:</label>
                                <div class="col-8">
                                    <span class="form-control-plaintext font-weight-bolder">{{$school->name}}</span>
                                </div>
                            </div>
                            <div class="form-group row my-2">
                                <label class="col-4 col-form-label">Phone:</label>
                                <div class="col-8">
                                    <span class="form-control-plaintext font-weight-bolder">{{$school->phone}} </span>
                                </div>
                            </div>
                            <div class="form-group row my-2">
                                <label class="col-4 col-form-label">Email:</label>
                                <div class="col-8">
														<span class="form-control-plaintext font-weight-bolder">
															<a href="#">{{$school->email}}</a>
														</span>
                                </div>
                            </div>
                            <div class="form-group row my-2">
                                <label class="col-4 col-form-label">Website:</label>
                                <div class="col-8">
														<span class="form-control-plaintext font-weight-bolder">
															<a href="#">{{$school->website}}</a>
														</span>
                                </div>
                            </div>
                            <div class="form-group row my-2">
                                <label class="col-4 col-form-label">Contact Person:</label>
                                <div class="col-8">
														<span class="form-control-plaintext font-weight-bolder">
															<a href="#">{{$school->name}}</a>
														</span>
                                </div>
                            </div>
                        </div>
                        <!--end::Body-->
                        <!--begin::Footer-->
{{--                        <div class="card-footer">--}}
{{--                            <a href="#" class="btn btn-primary font-weight-bold mr-2">Manage company</a>--}}
{{--                            <a href="#" class="btn btn-light-primary font-weight-bold">Learn more</a>--}}
{{--                        </div>--}}
                        <!--end::Footer-->
                    </div>
                    <!--end::Card-->
                </div>
                <div class="col-xl-8">
                    <!--begin::Card-->
                    <div class="card card-custom gutter-b">
                        <!--begin::Header-->
                        <div class="card-header card-header-tabs-line">
                            <div class="card-toolbar">
                                <ul class="nav nav-tabs nav-tabs-space-lg nav-tabs-line nav-bold nav-tabs-line-3x" role="tablist">
{{--                                    <li class="nav-item">--}}
{{--                                        <a class="nav-link active" data-toggle="tab" href="#kt_apps_contacts_view_tab_1">--}}
{{--																<span class="nav-icon mr-2">--}}
{{--																	<span class="svg-icon mr-3">--}}
{{--																		<!--begin::Svg Icon | path:/metronic/theme/html/demo1/dist/assets/media/svg/icons/General/Notification2.svg-->--}}
{{--																		<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">--}}
{{--																			<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">--}}
{{--																				<rect x="0" y="0" width="24" height="24"></rect>--}}
{{--																				<path d="M13.2070325,4 C13.0721672,4.47683179 13,4.97998812 13,5.5 C13,8.53756612 15.4624339,11 18.5,11 C19.0200119,11 19.5231682,10.9278328 20,10.7929675 L20,17 C20,18.6568542 18.6568542,20 17,20 L7,20 C5.34314575,20 4,18.6568542 4,17 L4,7 C4,5.34314575 5.34314575,4 7,4 L13.2070325,4 Z" fill="#000000"></path>--}}
{{--																				<circle fill="#000000" opacity="0.3" cx="18.5" cy="5.5" r="2.5"></circle>--}}
{{--																			</g>--}}
{{--																		</svg>--}}
{{--                                                                        <!--end::Svg Icon-->--}}
{{--																	</span>--}}
{{--																</span>--}}
{{--                                            <span class="nav-text">Notes</span>--}}
{{--                                        </a>--}}
{{--                                    </li>--}}
                                    <li class="nav-item mr-3">
                                        <a class="nav-link" data-toggle="tab" href="#kt_apps_contacts_view_tab_2">
																<span class="nav-icon mr-2">
																	<span class="svg-icon mr-3">
																		<!--begin::Svg Icon | path:/metronic/theme/html/demo1/dist/assets/media/svg/icons/Communication/Chat-check.svg-->
																		<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
																			<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																				<rect x="0" y="0" width="24" height="24"></rect>
																				<path d="M4.875,20.75 C4.63541667,20.75 4.39583333,20.6541667 4.20416667,20.4625 L2.2875,18.5458333 C1.90416667,18.1625 1.90416667,17.5875 2.2875,17.2041667 C2.67083333,16.8208333 3.29375,16.8208333 3.62916667,17.2041667 L4.875,18.45 L8.0375,15.2875 C8.42083333,14.9041667 8.99583333,14.9041667 9.37916667,15.2875 C9.7625,15.6708333 9.7625,16.2458333 9.37916667,16.6291667 L5.54583333,20.4625 C5.35416667,20.6541667 5.11458333,20.75 4.875,20.75 Z" fill="#000000" fill-rule="nonzero" opacity="0.3"></path>
																				<path d="M2,11.8650466 L2,6 C2,4.34314575 3.34314575,3 5,3 L19,3 C20.6568542,3 22,4.34314575 22,6 L22,15 C22,15.0032706 21.9999948,15.0065399 21.9999843,15.009808 L22.0249378,15 L22.0249378,19.5857864 C22.0249378,20.1380712 21.5772226,20.5857864 21.0249378,20.5857864 C20.7597213,20.5857864 20.5053674,20.4804296 20.317831,20.2928932 L18.0249378,18 L12.9835977,18 C12.7263047,14.0909841 9.47412135,11 5.5,11 C4.23590829,11 3.04485894,11.3127315 2,11.8650466 Z M6,7 C5.44771525,7 5,7.44771525 5,8 C5,8.55228475 5.44771525,9 6,9 L15,9 C15.5522847,9 16,8.55228475 16,8 C16,7.44771525 15.5522847,7 15,7 L6,7 Z" fill="#000000"></path>
																			</g>
																		</svg>
                                                                        <!--end::Svg Icon-->
																	</span>
																</span>
                                            <span class="nav-text">Result</span>
                                        </a>
                                    </li>

                                </ul>
                            </div>
                        </div>
                        <!--end::Header-->
                        <!--begin::Body-->
                        <div class="card-body px-0">
                            <div class="tab-content pt-5">
                                <!--begin::Tab Content-->
{{--                                <div class="tab-pane active" id="kt_apps_contacts_view_tab_1" role="tabpanel">--}}
{{--                                    <div class="container">--}}
{{--                                        <form  method="POST" action="{{route('comments.add',$job->id)}}" class="form formAction">--}}
{{--                                            @csrf--}}
{{--                                            <div class="form-group">--}}
{{--                                                <textarea class="form-control form-control-lg form-control-solid" id="exampleTextarea" name="note" rows="3" placeholder="Type notes"></textarea>--}}
{{--                                            </div>--}}
{{--                                            <div class="row">--}}
{{--                                                <div class="col">--}}
{{--                                                    <button type="submit"  class="btn  btn-save btn-light-primary font-weight-bold">Add notes</button>--}}

{{--                                                    <a href="#" class="btn btn-clean font-weight-bold">Cancel</a>--}}
{{--                                                </div>--}}
{{--                                                <div class="col">--}}
{{--                                                    <div class="toast-container">--}}
{{--                                                        <div class="alert alert-success d-none" role="alert"></div>--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                        </form>--}}
{{--                                        <div class="separator separator-dashed my-10"></div>--}}
{{--                                        <!--begin::Timeline-->--}}
{{--                                        <div class="timeline timeline-3">--}}
{{--                                            <div class="timeline-items">--}}
{{--                                                @foreach($comments as $comment)--}}
{{--                                                <div class="timeline-item">--}}
{{--                                                    <div class="timeline-media">--}}
{{--                                                        <img alt="Pic" src="{{asset($comment->user->img)}}">--}}
{{--                                                    </div>--}}
{{--                                                    <div class="timeline-content">--}}
{{--                                                        <div class="d-flex align-items-center justify-content-between mb-3">--}}
{{--                                                            <div class="mr-2">--}}
{{--                                                                <a href="#" class="text-dark-75 text-hover-primary font-weight-bold">New note From @if($comment->sender_type == 1 ) management @else {{$comment->user->name}} @endif</a>--}}
{{--                                                                <span class="text-muted ml-2">{{$comment->created_at}}</span>--}}
{{--                                                                <span class="label label-light-{{$comment->span()}} font-weight-bolder label-inline ml-2">{{$comment->status}}</span>--}}
{{--                                                            </div>--}}
{{--                                                            <div class="dropdown ml-2" data-toggle="tooltip" title="" data-placement="left" data-original-title="Quick actions">--}}
{{--                                                                <a href="#" class="btn btn-hover-light-primary btn-sm btn-icon" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">--}}
{{--                                                                    <i class="ki ki-more-hor icon-md"></i>--}}
{{--                                                                </a>--}}
{{--                                                            </div>--}}
{{--                                                        </div>--}}
{{--                                                        <p class="p-0">--}}
{{--                                                            {{$comment->note}}</p>--}}
{{--                                                        <p class="p-0">--}}
{{--                                                            {{__("Attachment: ")}}--}}
{{--                                                            @foreach($comment->files as $file)--}}
{{--                                                                <a href="{{asset($file->resume)}}" download class=" font-weight-bold mr-2">--}}
{{--                                                                    <img src="/assets/media/svg/icons/Files/Cloud-download.svg"/>--}}
{{--                                                                </a>--}}
{{--                                                            @endforeach--}}
{{--                                                        </p>--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                                @endforeach--}}

{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                        <!--end::Timeline-->--}}
{{--                                    </div>--}}
{{--                                </div>--}}
                                <!--end::Tab Content-->
                                <!--begin::Tab Content-->
                                <div class="tab-pane active" id="kt_apps_contacts_view_tab_2" role="tabpanel">
                                    <form  method="POST" action="{{route('admin.job.result.finished',$job->id)}}" class="form formAction">
                                        @csrf
                                        <input type="hidden" name="type" value="2">
                                        <div class="row">
                                            <div class="col-lg-9 col-xl-6 offset-xl-3">
                                                <h3 class="font-size-h6 mb-5">School Manager Result:</h3>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-xl-3 col-lg-3 col-form-label text-right">Note</label>
                                            <div class="col-lg-9 col-xl-6">
                                                <textarea class="form-control  form-control-lg form-control-solid" disabled id="exampleTextarea" name="note" rows="3" placeholder="Type notes">{{$sManger->note ?? "Not Yet" }}</textarea>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-xl-3 col-lg-3 col-form-label text-right">Rating (percentage)</label>
                                            <div class="col-lg-9 col-xl-6">
                                                <div class="input-group input-group-lg">
                                                    <div class="input-group-prepend">

                                                        <span class="input-group-text">%</span>
                                                    </div>
                                                    <input type="number" min="40" disabled value="{{$sManger->result ?? "Not Yet"}}" max="100" name="result" class="form-control" aria-label="Large size">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-9 col-xl-6 offset-xl-3">
                                                <h3 class="font-size-h6 mb-5">School Manager Result:</h3>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-xl-3 col-lg-3 col-form-label text-right">Note</label>
                                            <div class="col-lg-9 col-xl-6">
                                                <textarea class="form-control form-control-lg form-control-solid" id="exampleTextarea" disabled name="note" rows="3" placeholder="Type notes">{{$secManger->note  ?? "Not Yet"}}</textarea>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-xl-3 col-lg-3 col-form-label text-right">Result (percentage)</label>
                                            <div class="col-lg-9 col-xl-6">
                                                <div class="input-group input-group-lg">
                                                    <div class="input-group-prepend">

                                                        <span class="input-group-text">%</span>
                                                    </div>
                                                    <input type="number" disabled value="{{$secManger->result ?? "Not Yet"}}" min="40" max="100" name="result" class="form-control" aria-label="Large size">
                                                </div>
                                            </div>
                                        </div>
                                        @foreach($results as $result)
                                            <div class="row">
                                                <div class="col-lg-9 col-xl-6 offset-xl-3">
                                                    <h3 class="font-size-h6 mb-5">Supervisor {{$result->Super->name}} Rating:</h3>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-xl-3 col-lg-3 col-form-label text-right">Note</label>
                                                <div class="col-lg-9 col-xl-6">
                                                    <textarea class="form-control form-control-lg form-control-solid" disabled id="exampleTextarea" name="note" rows="3" placeholder="Type notes">{{$result->note}}</textarea>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-xl-3 col-lg-3 col-form-label text-right">Rating (percentage)</label>
                                                <div class="col-lg-9 col-xl-6">
                                                    <div class="input-group input-group-lg">
                                                        <div class="input-group-prepend">

                                                            <span class="input-group-text">%</span>
                                                        </div>
                                                        <input type="number" value="{{$result->result}}" disabled min="40" max="100" name="result" class="form-control" aria-label="Large size">
                                                    </div>
                                                </div>
                                            </div>
                                        @endforeach
                                        <div class="form-group row">
                                            <label class="col-xl-3 col-lg-3 col-form-label text-right">
                                                <h5>GPA is : {{$job->grade()}}</h5>
                                                <div class="toast-container">
                                                    <div class="alert alert-success d-none" role="alert"></div>
                                                </div></label>
                                            <div class="col-lg-9 col-xl-6">
                                                <a href="{{route('job.downloadsss',$job->id)}}"  download class="btn btn-light-primary font-weight-bold" >Download result Pdfd </a>

                                                {{--                                                <a href="#" class="btn btn-clean font-weight-bold">Cancel</a>--}}
                                            </div>
                                        </div>

                                    </form>


                                </div>
                                <!--end::Tab Content-->
                                <!--begin::Tab Content-->

                            </div>
                        </div>
                        <!--end::Body-->
                    </div>
                    <!--end::Card-->
                </div>
            </div>
            <!--end::Row-->
        </div>
        <!--end::Container-->
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
                $("input:checked").change(function(){
                    var start =  $(this).data('start'); //getter
                    var end = $(this).data('end'); //getter
                    var status = $(this).data('status'); //getter

                    if($(this).is(':checked')){
                        $("."+start).removeAttr('disabled');
                        $("."+end).removeAttr('disabled');
                        $("."+status).attr('value',1);
                    }else{
                        $("."+start).attr('disabled','disabled');
                        $("."+end).attr('disabled','disabled');
                        $("."+status).attr('value',0);

                    }
                });
                $("#switch1").click(function(){
                    var start =  $(this).data('start'); //getter
                    var end = $(this).data('end'); //getter
                    var status = $(this).data('status'); //getter
                    if($(this).is(':checked')){
                        $("."+start).removeAttr('disabled');
                        $("."+end).removeAttr('disabled');
                        $("."+status).attr('value',1);
                    }else{
                        $("."+start).attr('disabled','disabled');
                        $("."+end).attr('disabled','disabled');
                        $("."+status).attr('value',0);
                    }
                });

            </script>
@endsection


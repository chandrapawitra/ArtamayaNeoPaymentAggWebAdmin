@extends('layouts.app')

@section('style')
@endsection

@section('content')

				<!-- breadcrumb -->
				<div class="breadcrumb-header justify-content-between">
					<div class="my-auto">
						<div class="d-flex">
							<h4 class="content-title mb-0 my-auto">Pages</h4><span class="text-muted mt-1 tx-13 ml-2 mb-0">/ Profile</span>
						</div>
					</div>
					<div class="d-flex align-items-end flex-wrap my-auto right-content breadcrumb-right">
						<button type="button" class="btn btn-warning btn-icon mr-3 mt-2 mt-xl-0">
							<i class="mdi mdi-download "></i>
						</button>
						<button type="button" class="btn btn-danger  btn-icon mr-3 mt-2 mt-xl-0">
							<i class="mdi mdi-clock"></i>
						</button>
						<button type="button" class="btn btn-success btn-icon mr-3 mt-2 mt-xl-0">
							<i class="mdi mdi-plus"></i>
						</button>
						<button class="btn btn-primary mt-2 mt-xl-0">Download report</button>
					</div>
				</div>
				<!-- breadcrumb -->

				<!-- row -->
				<div class="row row-sm">
					<div class="col-lg-4">
						<div class="card mg-b-20">
							<div class="card-body">
								<div class="pl-0">
									<div class="main-profile-overview">
										<div class="main-img-user profile-user">
											<img alt="" src="{{URL::asset('assets/img/faces/5.jpg')}}"><a class="fas fa-camera profile-edit" href="JavaScript:void(0);"></a>
										</div>
										<div class="d-flex justify-content-between mg-b-20">
											<div>
												<h5 class="main-profile-name">Mintrona Pechon</h5>
												<p class="main-profile-name-text">Web Designer</p>
											</div>
										</div>
										<h6>Bio</h6>
										<div class="main-profile-bio">
											pleasure rationally encounter but because pursue consequences that are extremely painful.occur in which toil and pain can procure him some great pleasure.. <a href="">More</a>
										</div><!-- main-profile-bio -->
										<div class="main-profile-work-list">
											<div class="media">
												<div class="media-logo bg-success-transparent text-success">
													<i class="icon ion-logo-whatsapp"></i>
												</div>
												<div class="media-body">
													<h6>Web Designer at <a href="">Spruko</a></h6><span>2018 - present</span>
													<p>Past Work: Spruko, Inc.</p>
												</div>
											</div>
											<div class="media">
												<div class="media-logo bg-primary-transparent text-primary">
													<i class="icon ion-logo-buffer"></i>
												</div>
												<div class="media-body">
													<h6>Studied at <a href="">University</a></h6><span>2004-2008</span>
													<p>Graduation: Bachelor of Science in Computer Science</p>
												</div>
											</div>
										</div><!-- main-profile-work-list -->
										<hr class="mg-y-30">
										<label class="main-content-label tx-13 mg-b-20">Social</label>
										<div class="main-profile-social-list">
											<div class="media">
												<div class="media-icon bg-primary-transparent text-primary">
													<i class="icon ion-logo-github"></i>
												</div>
												<div class="media-body">
													<span>Github</span> <a href="">github.com/spruko</a>
												</div>
											</div>
											<div class="media">
												<div class="media-icon bg-success-transparent text-success">
													<i class="icon ion-logo-twitter"></i>
												</div>
												<div class="media-body">
													<span>Twitter</span> <a href="">twitter.com/spruko.me</a>
												</div>
											</div>
											<div class="media">
												<div class="media-icon bg-info-transparent text-info">
													<i class="icon ion-logo-linkedin"></i>
												</div>
												<div class="media-body">
													<span>Linkedin</span> <a href="">linkedin.com/in/spruko</a>
												</div>
											</div>
											<div class="media">
												<div class="media-icon bg-danger-transparent text-danger">
													<i class="icon ion-md-link"></i>
												</div>
												<div class="media-body">
													<span>My Portfolio</span> <a href="">spruko.com/</a>
												</div>
											</div>
										</div><!-- main-profile-social-list -->
									</div><!-- main-profile-overview -->
								</div>
							</div>
						</div>
						<div class="card mg-b-20">
							<div class="card-body">
								<div class="main-content-label tx-13 mg-b-25">
									Conatct
								</div>
								<div class="main-profile-contact-list">
									<div class="media">
										<div class="media-icon bg-primary-transparent text-primary">
											<i class="icon ion-md-phone-portrait"></i>
										</div>
										<div class="media-body">
											<span>Mobile</span>
											<div>
												+245 354 654
											</div>
										</div>
									</div>
									<div class="media">
										<div class="media-icon bg-success-transparent text-success">
											<i class="icon ion-logo-slack"></i>
										</div>
										<div class="media-body">
											<span>Slack</span>
											<div>
												@spruko.w
											</div>
										</div>
									</div>
									<div class="media">
										<div class="media-icon bg-info-transparent text-info">
											<i class="icon ion-md-locate"></i>
										</div>
										<div class="media-body">
											<span>Current Address</span>
											<div>
												San Francisco, CA
											</div>
										</div>
									</div>
								</div><!-- main-profile-contact-list -->
							</div>
						</div>
					</div>
					<div class="col-lg-8">
						<div class="main-content-body main-content-body-profile">
							<nav class="nav main-nav-line card mb-4">
								<a class="nav-link active" data-toggle="tab" href="">Timeline</a> <a class="nav-link" data-toggle="tab" href="">Gallery</a> <a class="nav-link" data-toggle="tab" href="">Friends</a> <a class="nav-link" data-toggle="tab" href="">Following</a> <a class="nav-link" data-toggle="tab" href="">Account Settings</a>
							</nav><!-- main-profile-body -->
							<div class="main-profile-body p-0">
								<div class="row row-sm">
									<div class="col-12">
										<div class="card mg-b-20">
											<div class="card-body h-100">
												<div class="card-header">
													<div class="media">
														<div class="media-user mr-2">
															<div class="main-img-user avatar-md"><img alt="" class="rounded-circle" src="{{URL::asset('assets/img/faces/5.jpg')}}"></div>
														</div>
														<div class="media-body">
															<h6 class="mb-0 mg-t-9">Mintrona Pechon Pechon</h6><span class="text-primary">just now</span>
														</div>
														<div class="ml-auto">
															<div class="dropdown show">
																<a class="new" data-toggle="dropdown" href="JavaScript:void(0);"><i class="fas fa-ellipsis-v"></i></a>
																<div class="dropdown-menu dropdown-menu-right">
																	<a class="dropdown-item" href="#">Edit Post</a> <a class="dropdown-item" href="#">Delete Post</a> <a class="dropdown-item" href="#">Personal Settings</a>
																</div>
															</div>
														</div>
													</div>
												</div>
												<p class="mg-t-10">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable.</p>
												<div><img alt="img" class="w-100" src="{{URL::asset('assets/img/photos/12.jpg')}}"></div>
												<div class="media mg-t-15 profile-footer">
													<div class="media-user mr-2">
														<div class="demo-avatar-group">
															<div class="demo-avatar-group main-avatar-list-stacked">
																<div class="main-img-user"><img alt="" class="rounded-circle" src="{{URL::asset('assets/img/faces/12.jpg')}}"></div>
																<div class="main-img-user"><img alt="" class="rounded-circle" src="{{URL::asset('assets/img/faces/12.jpg')}}"></div>
																<div class="main-img-user"><img alt="" class="rounded-circle" src="{{URL::asset('assets/img/faces/13.jpg')}}"></div>
																<div class="main-img-user online"><img alt="" class="rounded-circle" src="{{URL::asset('assets/img/faces/13.jpg')}}"></div>
																<div class="main-img-user"><img alt="" class="rounded-circle" src="{{URL::asset('assets/img/faces/14.jpg')}}"></div>
																<div class="main-avatar">
																	+23
																</div>
															</div><!-- demo-avatar-group -->
														</div><!-- demo-avatar-group -->
													</div>
													<div class="media-body">
														<h6 class="mb-0 mg-t-10">28 people like your photo</h6>
													</div>
													<div class="ml-auto">
														<div class="dropdown show">
															<a class="new" href="JavaScript:void(0);"><i class="far fa-heart"></i></a> <a class="new" href="JavaScript:void(0);"><i class="far fa-comment"></i></a> <a class="new" href="JavaScript:void(0);"><i class="far fa-share-square"></i></a>
														</div>
													</div>
												</div>
											</div>
										</div>
										<div class="card mg-b-20">
											<div class="card-body h-100">
												<div class="card-header">
													<div class="media">
														<div class="media-user mr-2">
															<div class="main-img-user avatar-md"><img alt="" class="rounded-circle" src="{{URL::asset('assets/img/faces/5.jpg')}}"></div>
														</div>
														<div class="media-body">
															<h6 class="mb-0 mg-t-9">Mintrona Pechon Pechon</h6><span class="text-dark">Sep 26 2019, 10:14am</span>
														</div>
														<div class="ml-auto">
															<div class="dropdown show">
																<a class="new" data-toggle="dropdown" href="JavaScript:void(0);"><i class="fas fa-ellipsis-v"></i></a>
																<div class="dropdown-menu dropdown-menu-right">
																	<a class="dropdown-item" href="#">Edit Post</a> <a class="dropdown-item" href="#">Delete Post</a> <a class="dropdown-item" href="#">Personal Settings</a>
																</div>
															</div>
														</div>
													</div>
												</div>
												<p class="mg-t-10">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable.</p>
												<div class="d-flex"><img alt="img" class="wd-45p m-1" src="{{URL::asset('assets/img/photos/2.jpg')}}"> <img alt="img" class="wd-45p m-1" src="{{URL::asset('assets/img/photos/3.jpg')}}"></div>
												<div class="media mg-t-15 profile-footer">
													<div class="media-user mr-2">
														<div class="demo-avatar-group">
															<div class="demo-avatar-group main-avatar-list-stacked">
																<div class="main-img-user"><img alt="" class="rounded-circle" src="{{URL::asset('assets/img/faces/12.jpg')}}"></div>
																<div class="main-img-user online"><img alt="" class="rounded-circle" src="{{URL::asset('assets/img/faces/12.jpg')}}"></div>
																<div class="main-img-user"><img alt="" class="rounded-circle" src="{{URL::asset('assets/img/faces/13.jpg')}}"></div>
																<div class="main-img-user online"><img alt="" class="rounded-circle" src="{{URL::asset('assets/img/faces/13.jpg')}}"></div>
																<div class="main-img-user"><img alt="" class="rounded-circle" src="{{URL::asset('assets/img/faces/14.jpg')}}"></div>
																<div class="main-avatar">
																	+23
																</div>
															</div><!-- demo-avatar-group -->
														</div><!-- demo-avatar-group -->
													</div>
													<div class="media-body">
														<h6 class="mb-0 mg-t-10">28 people like your photo</h6>
													</div>
													<div class="ml-auto">
														<div class="dropdown show">
															<a class="new" href="JavaScript:void(0);"><i class="far fa-heart"></i></a> <a class="new" href="JavaScript:void(0);"><i class="far fa-comment"></i></a> <a class="new" href="JavaScript:void(0);"><i class="far fa-share-square"></i></a>
														</div>
													</div>
												</div>
											</div>
										</div>
										<div class="card mg-b-20">
											<div class="card-body">
												<div class="card-header">
													<div class="media">
														<div class="media-user mr-2">
															<div class="main-img-user avatar-md"><img alt="" class="rounded-circle" src="{{URL::asset('assets/img/faces/5.jpg')}}"></div>
														</div>
														<div class="media-body">
															<h6 class="mb-0 mg-t-9">Mintrona Pechon Pechon</h6><span class="text-dark">Sep 22 2019, 10:14am</span>
														</div>
														<div class="ml-auto">
															<div class="dropdown show">
																<a class="new" data-toggle="dropdown" href="JavaScript:void(0);"><i class="fas fa-ellipsis-v"></i></a>
																<div class="dropdown-menu dropdown-menu-right">
																	<a class="dropdown-item" href="#">Edit Post</a> <a class="dropdown-item" href="#">Delete Post</a> <a class="dropdown-item" href="#">Personal Settings</a>
																</div>
															</div>
														</div>
													</div>
												</div>
												<p class="mg-t-10">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable.</p>
												<div class="media mg-t-15 profile-footer">
													<div class="media-user mr-2">
														<div class="demo-avatar-group">
															<div class="demo-avatar-group main-avatar-list-stacked">
																<div class="main-img-user online"><img alt="" class="rounded-circle" src="{{URL::asset('assets/img/faces/12.jpg')}}"></div>
																<div class="main-img-user"><img alt="" class="rounded-circle" src="{{URL::asset('assets/img/faces/12.jpg')}}"></div>
																<div class="main-img-user"><img alt="" class="rounded-circle" src="{{URL::asset('assets/img/faces/13.jpg')}}"></div>
																<div class="main-img-user"><img alt="" class="rounded-circle" src="{{URL::asset('assets/img/faces/13.jpg')}}"></div>
																<div class="main-img-user online"><img alt="" class="rounded-circle" src="{{URL::asset('assets/img/faces/14.jpg')}}"></div>
																<div class="main-avatar">
																	+23
																</div>
															</div><!-- demo-avatar-group -->
														</div><!-- demo-avatar-group -->
													</div>
													<div class="media-body">
														<h6 class="mb-0 mg-t-10">28 people like your photo</h6>
													</div>
													<div class="ml-auto">
														<div class="dropdown show">
															<a class="new" href="JavaScript:void(0);"><i class="far fa-heart"></i></a> <a class="new" href="JavaScript:void(0);"><i class="far fa-comment"></i></a> <a class="new" href="JavaScript:void(0);"><i class="far fa-share-square"></i></a>
														</div>
													</div>
												</div>
											</div>
										</div>
										<div class="card">
											<div class="card-body h-100">
												<div class="card-header">
													<div class="media">
														<div class="media-user mr-2">
															<div class="main-img-user avatar-md"><img alt="" class="rounded-circle" src="{{URL::asset('assets/img/faces/15.jpg')}}"></div>
														</div>
														<div class="media-body">
															<h6 class="mb-0 mg-t-9">Mintrona Pechon</h6><span class="text-dark">Sep 21 2019, 10:14am</span>
														</div>
														<div class="ml-auto">
															<div class="dropdown show">
																<a class="new" data-toggle="dropdown" href="JavaScript:void(0);"><i class="fas fa-ellipsis-v"></i></a>
																<div class="dropdown-menu dropdown-menu-right">
																	<a class="dropdown-item" href="#">Edit Post</a> <a class="dropdown-item" href="#">Delete Post</a> <a class="dropdown-item" href="#">Personal Settings</a>
																</div>
															</div>
														</div>
													</div>
												</div>
												<p class="mg-t-10">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable.</p>
												<div class="d-flex"><img alt="img" class="wd-45p m-1" src="{{URL::asset('assets/img/photos/2.jpg')}}"> <img alt="img" class="wd-45p m-1" src="{{URL::asset('assets/img/photos/3.jpg')}}"></div>
												<div class="media mg-t-15 profile-footer">
													<div class="media-user mr-2">
														<div class="demo-avatar-group">
															<div class="demo-avatar-group main-avatar-list-stacked">
																<div class="main-img-user online"><img alt="" class="rounded-circle" src="{{URL::asset('assets/img/faces/11.jpg')}}"></div>
																<div class="main-img-user"><img alt="" class="rounded-circle" src="{{URL::asset('assets/img/faces/12.jpg')}}"></div>
																<div class="main-img-user"><img alt="" class="rounded-circle" src="{{URL::asset('assets/img/faces/13.jpg')}}"></div>
																<div class="main-img-user"><img alt="" class="rounded-circle" src="{{URL::asset('assets/img/faces/4.jpg')}}"></div>
																<div class="main-img-user online"><img alt="" class="rounded-circle" src="{{URL::asset('assets/img/faces/5.jpg')}}"></div>
																<div class="main-avatar">
																	+23
																</div>
															</div><!-- demo-avatar-group -->
														</div><!-- demo-avatar-group -->
													</div>
													<div class="media-body">
														<h6 class="mb-0 mg-t-10">28 people like your photo</h6>
													</div>
													<div class="ml-auto">
														<div class="dropdown show">
															<a class="new" href="JavaScript:void(0);"><i class="far fa-heart"></i></a> <a class="new" href="JavaScript:void(0);"><i class="far fa-comment"></i></a> <a class="new" href="JavaScript:void(0);"><i class="far fa-share-square"></i></a>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div><!-- main-profile-body -->
						</div>
					</div>
				</div>
				<!-- row closed -->

@endsection

@section('script')
@endsection

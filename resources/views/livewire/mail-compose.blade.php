@extends('layouts.app')

@section('style')

		<!-- Select2 css -->
		<link href="{{URL::asset('assets/plugins/select2/css/select2.min.css')}}" rel="stylesheet">

@endsection

@section('content')

				<!-- breadcrumb -->
				<div class="breadcrumb-header justify-content-between">
					<div class="my-auto">
						<div class="d-flex"><h4 class="content-title mb-0 my-auto">Mail</h4><span class="text-muted mt-1 tx-13 ml-2 mb-0">/ Compose-mail</span></div>
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

				<!-- row opened -->
				<div class="row row-sm">
					<!-- Col -->
					<div class="col-lg-4 col-xl-3">
						<div class="card mg-b-20 p-3">
							<div class="main-content-left main-content-left-mail card-body">
								<a class="btn btn-primary btn-compose" href="" id="btnCompose">Compose</a>
								<div class="main-mail-menu">
									<nav class="nav main-nav-column mg-b-20">
										<a class="nav-link" href=""><i class="typcn typcn-mail"></i> Inbox <span>18</span></a>
										<a class="nav-link" href=""><i class="typcn typcn-star-outline"></i> Starred <span>8</span></a>
										<a class="nav-link" href=""><i class="typcn typcn-stopwatch"></i> Snoozed <span>6</span></a>
										<a class="nav-link" href=""><i class="typcn typcn-bookmark"></i> Important <span>15</span></a>
										<a class="nav-link" href=""><i class="typcn typcn-arrow-forward-outline"></i> Sent Mail <span>24</span></a>
										<a class="nav-link" href=""><i class="typcn typcn-pen"></i> Drafts <span>2</span></a>
										<a class="nav-link" href=""><i class="typcn typcn-cancel-outline"></i> Spam <span>32</span></a>
										<a class="nav-link" href=""><i class="typcn typcn-message"></i> Chats <span>14</span></a>
										<a class="nav-link" href=""><i class="typcn typcn-folder-add"></i> All Mail <span>652</span></a>
										<a class="nav-link" href=""><i class="typcn typcn-contacts"></i> Contacts <span>547</span></a>
										<a class="nav-link" href=""><i class="typcn typcn-trash"></i> Trash <span>365</span></a>
									</nav>
									<label class="main-content-label main-content-label-sm">Label</label>
									<nav class="nav main-nav-column mg-b-20">
										<a class="nav-link" href="#"><i class="typcn typcn-folder"></i> Social <span>65</span></a>
										<a class="nav-link" href="#"><i class="typcn typcn-folder"></i> Promotions <span>45</span></a>
										<a class="nav-link" href="#"><i class="typcn typcn-folder"></i> Updates <span>35</span></a>
									</nav>
									<label class="main-content-label main-content-label-sm">Tags</label>
									<nav class="nav main-nav-column mg-b-20">
										<a class="nav-link" href="#"><i class="typcn typcn-social-twitter-circular"></i> Twitter <span>10</span></a>
										<a class="nav-link" href="#"><i class="typcn typcn-social-facebook-circular"></i> Facebook <span>15</span></a>
										<a class="nav-link" href="#"><i class="typcn typcn-social-instagram-circular"></i> Instagram <span>18</span></a>
										<a class="nav-link" href="#"><i class="typcn typcn-social-github-circular"></i> Github <span>36</span></a>
										<a class="nav-link" href="#"><i class="typcn typcn-social-google-plus-circular"></i> Google <span>12</span></a>
									</nav>
									<label class="main-content-label main-content-label-sm">Settings</label>
									<nav class="nav main-nav-column">
										<a class="nav-link active" href="{{url('app-mail-settings')}}">Email Settings</a>
										<a class="nav-link" href="{{url('app-mail-information')}}">Account Information</a>
									</nav>
								</div><!-- main-mail-menu -->
							</div>
						</div>
					</div>
					<!-- /Col -->
					<div class="col-lg-8 col-xl-9 col-md-12 col-sm-12">
						<div class="card">
							<div class="card-header">
								<h3 class="card-title mb-0">Compose new message</h3>
							</div>
							<div class="card-body">
								<form >
									<div class="form-group">
										<div class="row align-items-center">
											<label class="col-sm-2">To</label>
											<div class="col-sm-10">
												<input type="text" class="form-control">
											</div>
										</div>
									</div>
									<div class="form-group">
										<div class="row align-items-center">
											<label class="col-sm-2">Subject</label>
											<div class="col-sm-10">
												<input type="text" class="form-control">
											</div>
										</div>
									</div>
									<div class="form-group">
										<div class="row ">
											<label class="col-sm-2">Message</label>
											<div class="col-sm-10">
												<textarea rows="10" class="form-control"></textarea>
											</div>
										</div>
									</div>
								</form>
							</div>
							<div class="card-footer d-sm-flex">
								<div class="mt-2 mb-2">
									<a href="javascript:void(0)" class="mr-3" data-toggle="tooltip" title="" data-original-title="Attach"><i class="fe fe-paperclip text-muted fs-20"></i></a>
									<a href="javascript:void(0)" class="mr-3" data-toggle="tooltip" title="" data-original-title="Link"><i class="fe fe-link-2 text-muted fs-20"></i></a>
									<a href="javascript:void(0)" class="mr-3" data-toggle="tooltip" title="" data-original-title="Photos"><i class="fe fe-image text-muted fs-20"></i></a>
									<a href="javascript:void(0)" class="mr-3" data-toggle="tooltip" title="" data-original-title="Delete"><i class="fe fe-trash-2 text-muted fs-20"></i></a>
								</div>
								<div class="btn-list ml-auto">
									<button type="button" class="btn btn-danger btn-space">Cancel</button>
									<button type="submit" class="btn btn-primary btn-space">Send message</button>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- row closed -->

@endsection

@section('script')

		<!-- Sparkline js -->
		<script src="{{URL::asset('assets/plugins/jquery-sparkline/jquery.sparkline.min.js')}}"></script>

		<!-- Internal Raphael js -->
		<script src="{{URL::asset('assets/plugins/raphael/raphael.min.js')}}"></script>
        
		<!-- select2.min js -->
		<script src="{{URL::asset('assets/plugins/select2/js/select2.min.js')}}"></script>
		<script src="{{URL::asset('assets/js/select2.js')}}"></script>

@endsection
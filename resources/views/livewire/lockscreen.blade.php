@extends('layouts.customapp')

@section('content')

			<!-- main-signin-wrapper -->
			<div class="my-auto page main-signin-wrapper">
				<div class="text-center mb-2">
					<div class="main-signin-wrapper">
						<div class="main-card-signin d-md-flex bg-white">
							<div class="p-5">
								<div class="main-signin-header">
									<div class="avatar avatar-xxl avatar-xxl mx-auto text-center mb-2"><img alt="" class="rounded-circle" src="{{URL::asset('assets/img/faces/6.jpg')}}"></div>
									<div class="mx-auto text-center mt-4 mg-b-30">
										<h5 class="mg-b-10 tx-16">Mintrona Pechon</h5>
										<p class="tx-13">Enter Your Password to View your Screen</p>
									</div>
									<form action="{{url('page-profile')}}">
										<div class="form-group">
											<input class="form-control" placeholder="Enter your password" type="password" value="">
										</div>
										<button class="btn btn-main-primary btn-block">Unlock</button>
									</form>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- Main-signin-wrapper -->

@endsection

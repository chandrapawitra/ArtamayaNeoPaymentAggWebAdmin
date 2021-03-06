@extends('layouts.customapp')

@section('content')

		<!-- main-signin-wrapper -->
		<div class="my-auto h-100 page">
			<div class="main-signin-wrapper">
				<div class="main-card-signin construction text-center">
					<div class="p-5  wd-100p">
						<div>
							<h2 class="tx-30">Comming soon</h2>
							<p class="tx-14 text-muted">We Will get back to U , Sorry For Your Inconvinence. Follow Us for More Updates!</p>
							<div class="row row-sm mx-auto">
								<div id="count-down" class="center-block mt-3 mb-3 mx-auto">
									<div class="clock-presenter days_dash">
										<div class="digit"></div>
										<div class="digit"></div>
										<p class="mt-2">Days</p>
									</div>
									<div class="clock-presenter hours_dash">
										<div class="digit"></div>
										<div class="digit"></div>
										<p class="mt-2">Hours</p>
									</div>
									<div class="clock-presenter minutes_dash">
										<div class="digit"></div>
										<div class="digit"></div>
										<p class="mt-2">Minutes</p>
									</div>
									<div class="clock-presenter seconds_dash">
										<div class="digit"></div>
										<div class="digit"></div>
										<p class="mt-2">Seconds</p>
									</div>
								</div>
							</div>

							<div class="mt-5 d-flex mx-auto text-center justify-content-center">
								<button class="btn btn-icon btn-facebook" type="button">
									<span class="btn-inner--icon"> <i class="fab fa-facebook-f tx-facebook"></i> </span>
								</button>
								<button class="btn btn-icon" type="button">
									<span class="btn-inner--icon"> <i class="fab fa-google tx-google-plus"></i> </span>
								</button>
								<button class="btn btn-icon" type="button">
									<span class="btn-inner--icon"> <i class="fab fa-twitter tx-twitter"></i> </span>
								</button>
								<button class="btn btn-icon" type="button">
									<span class="btn-inner--icon"> <i class="fab fa-pinterest-p tx-pinterest"></i> </span>
								</button>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- /main-signin-wrapper -->

@endsection

@section('script')

		<!-- Jquery.Coutdown js-->
		<script src="{{URL::asset('assets/plugins/jquery-countdown/jquery.lwtCountdown-1.0.js')}}"></script>
		<script src="{{URL::asset('assets/plugins/jquery-countdown/count-down.js')}}"></script>

@endsection

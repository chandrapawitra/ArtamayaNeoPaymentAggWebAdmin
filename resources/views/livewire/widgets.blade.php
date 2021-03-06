@extends('layouts.app')

@section('style')
@endsection

@section('content')

				<!-- breadcrumb -->
				<div class="breadcrumb-header justify-content-between">
					<div class="my-auto">
						<div class="d-flex"><h4 class="content-title mb-0 my-auto">Widgets</h4><span class="text-muted mt-1 tx-13 ml-2 mb-0">/ Widgets</span></div>
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
				<div class="row row-cards row-deck">
					<div class="col-sm-12 col-lg-6">
						<div class="card">
							<div class="card-header">
								<div class="card-title mb-0">Sales</div>
							</div>
							<div class="card-body">
								<div class="row">
									<div class="col text-center">
										<label class="tx-12 text-muted mb-0">Today</label>
										<p class="font-weight-bold tx-20">3,256</p>
									</div><!-- col -->
									<div class="col border-left text-center">
										<label class="tx-12 text-muted mb-0">This Week</label>
										<p class="font-weight-bold tx-20">25,321</p>
									</div><!-- col -->
									<div class="col border-left text-center">
										<label class="tx-12 text-muted mb-0">This Month</label>
										<p class="font-weight-bold tx-20">53,625</p>
									</div><!-- col -->
								</div><!-- row -->
								<div class="progress mt-2">
									<div class="progress-bar progress-bar-lg progress-bar-striped progress-bar-animated bg-primary wd-50p" >50%</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-sm-12 col-lg-6">
						<div class="card">
							<div class="card-header">
								<div class="card-title mb-0">Profit</div>
							</div>
							<div class="card-body">
								<div class="row">
									<div class="col text-center">
										<label class="tx-12 text-muted mb-0">Today</label>
										<p class="font-weight-bold tx-20"> $236</p>
									</div><!-- col -->
									<div class="col border-left text-center">
										<label class="tx-12 text-muted mb-0">This Week</label>
										<p class="font-weight-bold tx-20"> $1,365</p>
									</div><!-- col -->
									<div class="col border-left text-center">
										<label class="tx-12 text-muted mb-0">This Month</label>
										<p class="font-weight-bold tx-20"> $36,254</p>
									</div><!-- col -->
								</div><!-- row -->
								<div class="progress mt-2">
									<div class="progress-bar progress-bar-lg progress-bar-striped progress-bar-animated bg-danger wd-40p" >50%</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- row -->

				<!-- row -->
				<div class="row ">
					<div class="col-md-4 features">
						<div class="card feature">
							<div class="card-body text-center">
								<div class="fa-stack fa-lg fa-1x border bg-primary mb-3">
									<i class="fas fa-user-tie fa-stack-1x text-white"></i>
								</div>
								<h5>Employess</h5>
								<h2 class="counter">2569</h2>
							</div>
						</div>
					</div>
					<div class="col-md-4 features">
						<div class="card feature">
							<div class="card-body text-center">
								<div class="fa-stack fa-lg fa-1x border bg-warning mb-3">
									<i class="fas fa-comments-dollar  fa-stack-1x text-white"></i>
								</div>
								<h5>Profit</h5>
								<h2 class="counter"> 2,5698</h2>
							</div>
						</div>
					</div>
					<div class="col-md-4 features">
						<div class="card feature">
							<div class="card-body text-center">
								<div class="fa-stack fa-lg fa-1x border bg-success mb-3">
									<i class="fas fa-chart-line fa-stack-1x text-white"></i>
								</div>
								<h5>Growth</h5>
								<h2 class="counter">99</h2>
							</div>
						</div>
					</div>
				</div>
				<!-- row -->

				<!-- row -->
				<div class="row">
					<div class="col-sm-12 col-lg-4">
						<div class="card">
							<div class="card-body text-center">
								<div class="profile-pic mb-3">
									<img src="{{URL::asset('assets/img/faces/5.jpg')}}" class="brround avatar avatar-lg mx-auto" alt="user">
									<h5 class="mt-3 mb-0 font-weight-semibold tx-16">Rubin Carmody</h5>
									<a href="mailto:liamnolan@gmail.com">liamnolan@gmail.com</a>
								</div>
								<div class="chip">Dashboard</div>
								<div class="chip">Web</div>
								<div class="chip bg-primary text-white">+5</div>
							</div>
							<div class="p-4 b-t card-footer">
								<div class="row text-center">
									<div class="col-6 border-right text-center">
										<div class="text-center">
											<a href="#" class="fw-500"><i class="fa fa-envelope  mr-2"></i>Chat</a>
										</div>
									</div>
									<div class="col-6 text-center">
										<a href="#" class="fw-500"><i class="fa fa-user  mr-2"></i>Profile</a>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-sm-12 col-lg-4">
						<div class="card">
							<div class="card-body text-center">
								<div class="profile-pic mb-3">
									<img src="{{URL::asset('assets/img/faces/9.jpg')}}" class="brround avatar avatar-lg mx-auto" alt="user">
									<h5 class="mt-3 mb-0 font-weight-semibold tx-16">Rebbaca Noim</h5>
									<a href="mailto:liamnolan@gmail.com">rebaccanoim@gmail.com</a>
								</div>
								<div class="chip">Photoshop</div>
								<div class="chip">Web</div>
								<div class="chip bg-primary text-white">+5</div>
							</div>
							<div class="p-4 b-t card-footer">
								<div class="row text-center">
									<div class="col-6 border-right text-center">
										<div class="text-center">
											<a href="#" class="fw-500"><i class="fa fa-envelope  mr-2"></i>Chat</a>
										</div>
									</div>
									<div class="col-6 text-center">
										<a href="#" class="fw-500"><i class="fa fa-user  mr-2"></i>Profile</a>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-sm-12 col-lg-4">
						<div class="card">
							<div class="card-body text-center">
								<div class="profile-pic mb-3">
									<img src="{{URL::asset('assets/img/faces/7.jpg')}}" class="brround avatar avatar-lg mx-auto" alt="user">
									<h5 class="mt-3 mb-0 font-weight-semibold tx-16">Emily Ball</h5>
									<a href="mailto:liamnolan@gmail.com">emily ball@gmail.com</a>
								</div>
								<div class="chip">Angular</div>
								<div class="chip">PHP</div>
								<div class="chip bg-primary text-white">+7</div>
							</div>
							<div class="p-4 b-t card-footer">
								<div class="row text-center">
									<div class="col-6 border-right text-center">
										<div class="text-center">
											<a href="#" class="fw-500"><i class="fa fa-envelope  mr-2"></i>Chat</a>
										</div>
									</div>
									<div class="col-6 text-center">
										<a href="#" class="fw-500"><i class="fa fa-user  mr-2"></i>Profile</a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- row -->

				<!-- row -->
				<div class="row">
					<div class="col-sm-12 col-lg-4">
						<div class="card user-card text-center">
							<div class="card-header text-left">
								<h5 class="card-title mb-0">Profile</h5>
							</div>
							<div class="card-block">
								<div class="user-image">
									<img src="{{URL::asset('assets/img/faces/7.jpg')}}" class="brround avatar avatar-xl mx-auto" alt="User-Profile-Image">
								</div>
								<h6 class="font-weight-semibold mt-3 mb-1 tx-16">China Mccargo</h6>
								<p class="text-muted tx-13">Active | Female | Born 23.05.1992</p>
								<div class="border-top"></div>
								<p class="mt-2 text-muted">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
								<div class="row justify-content-center user-social-link mt-0 mb-0 pb-0 card-footer">
									<div class="col-4"><a href="#!"><i class="fab fa-facebook-f"></i></a></div>
									<div class="col-4"><a href="#!"><i class="fab fa-twitter"></i></a></div>
									<div class="col-4"><a href="#!"><i class="fab fa-instagram"></i></a></div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-sm-12 col-lg-4">
						<div class="card user-card text-center">
							<div class="card-header text-left">
								<h5 class="card-title mb-0">Profile</h5>
							</div>
							<div class="card-block">
								<div class="user-image">
									<img src="{{URL::asset('assets/img/faces/14.jpg')}}" class="brround avatar avatar-xl mx-auto" alt="User-Profile-Image">
								</div>
								<h6 class="font-weight-semibold mt-3 mb-1 tx-16">Alessa Robert</h6>
								<p class="text-muted tx-13">Active | Male |  Born 16.02.1990</p>
								<div class="border-top"></div>
								<p class="mt-2 text-muted">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
								<div class="row justify-content-center user-social-link mt-0 mb-0 pb-0 card-footer">
									<div class="col-4"><a href="#!"><i class="fab fa-facebook-f"></i></a></div>
									<div class="col-4"><a href="#!"><i class="fab fa-twitter"></i></a></div>
									<div class="col-4"><a href="#!"><i class="fab fa-instagram"></i></a></div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-sm-12 col-lg-4">
						<div class="card user-card text-center">
							<div class="card-header text-left">
								<h5 class="card-title mb-0">Profile</h5>
							</div>
							<div class="card-block">
								<div class="user-image">
									<img src="{{URL::asset('assets/img/faces/4.jpg')}}" class="brround avatar avatar-xl mx-auto" alt="User-Profile-Image">
								</div>
								<h6 class="font-weight-semibold mt-3 mb-1 tx-16">Alina Cordray</h6>
								<p class="text-muted tx-13">Active | Female | Born 31.05.1992</p>
								<div class="border-top"></div>
								<p class="mt-2 text-muted">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
								<div class="row justify-content-center user-social-link mt-0 mb-0 pb-0 card-footer">
									<div class="col-4"><a href="#!"><i class="fab fa-facebook-f"></i></a></div>
									<div class="col-4"><a href="#!"><i class="fab fa-twitter"></i></a></div>
									<div class="col-4"><a href="#!"><i class="fab fa-instagram"></i></a></div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- row -->

				<!-- row -->
				<div class="row">
					<div class=" col-sm-6 col-lg-3">
						<div class="card">
							<div class="card-body text-center">
								<div class="h1 m-0"><i class="mdi mdi-account-multiple-outline text-primary"></i><strong> 67</strong></div>
								<div class="text-muted mb-0"> Customers</div>
							</div>
						</div>
					</div>
					<div class="col-sm-6 col-lg-3">
						<div class="card">
							<div class="card-body text-center">
								<div class="h1 m-0"><i class="mdi mdi-cash-multiple text-red"></i><strong> 76</strong></div>
								<div class="text-muted mb-0"> Total Sales</div>
							</div>
						</div>
					</div>
					<div class="col-sm-6 col-lg-3">
						<div class="card">
							<div class="card-body text-center">
								<div class="h1 m-0"><i class="mdi mdi-chart-line text-warning"></i><strong> 45</strong></div>
								<div class="text-muted mb-0"> New Orders</div>
							</div>
						</div>
					</div>
					<div class="col-sm-6 col-lg-3">
						<div class="card">
							<div class="card-body text-center">
								<div class="h1 m-0"><i class="mdi mdi-account-outline text-info"></i><strong> 38</strong></div>
								<div class="text-muted mb-0"> Invoice</div>
							</div>
						</div>
					</div>
				</div>
				<!-- row -->

				<!-- row -->
				<div class="row">
					<div class="col-sm-12 col-xl-4 col-lg-12">
						<div class="card">
							<div class="card-body">
								<div class="media mt-0">
									<figure class="rounded-circle align-self-start mb-0">
										<img src="{{URL::asset('assets/img/faces/1.jpg')}}" alt="Generic placeholder image" class="avatar brround avatar-md mr-3">
									</figure>
									<div class="media-body">
										<h5 class="time-title p-0 mb-0 font-weight-semibold leading-normal">Victoria</h5>
										New york, UK
									</div>
									<button class="btn btn-primary d-none d-sm-block mr-2"><i class="fa fa-comments"></i> </button>
									<button class="btn btn-info d-none d-sm-block"><i class="fa fa-phone"></i> </button>
								</div>
							</div>
							<div class="card-footer  border-top">
								Email: <span class="text-primary">victoriacott@Uplor .com</span>
							</div>
						</div>
					</div>
					<div class="col-sm-12 col-xl-4 col-lg-12">
						<div class="card">
							<div class="card-body">
								<div class="media mt-0">
									<figure class="rounded-circle align-self-start mb-0">
										<img src="{{URL::asset('assets/img/faces/4.jpg')}}" alt="Generic placeholder image" class="avatar brround avatar-md mr-3">
									</figure>
									<div class="media-body">
										<h5 class="time-title p-0 mb-0 font-weight-semibold leading-normal">Thomas Jaim</h5>
										Spain, UN
									</div>
									<button class="btn btn-primary d-none d-sm-block mr-2"><i class="fa fa-comments"></i> </button>
									<button class="btn btn-info d-none d-sm-block"><i class="fa fa-phone"></i> </button>
								</div>
							</div>
							<div class="card-footer border-top">
								Email: <span class="text-primary">thomasjaim@Uplor .com</span>
							</div>
						</div>
					</div>
					<div class="col-sm-12 col-xl-4 col-lg-12">
						<div class="card">
							<div class="card-body">
								<div class="media mt-0">
									<figure class="rounded-circle align-self-start mb-0">
										<img src="{{URL::asset('assets/img/faces/7.jpg')}}" alt="Generic placeholder image" class="avatar brround avatar-md mr-3">
									</figure>
									<div class="media-body">
										<h5 class="time-title p-0 font-weight-semibold leading-normal mb-0">Rebbaca wisely</h5>
										Japan, UN
									</div>
									<button class="btn btn-primary d-none d-sm-block mr-2"><i class="fa fa-comments"></i> </button>
									<button class="btn btn-info d-none d-sm-block"><i class="fa fa-phone"></i> </button>
								</div>
							</div>
							<div class="card-footer border-top">
								Email: <span class="text-primary">rebbacawisely@Uplor .com</span>
							</div>
						</div>
					</div>
				</div>
				<!-- row -->

				<!-- row -->
				<div class="row">
					<div class=" col-lg-12">
						<div class="row">
							<div class="col-sm-12 col-lg-6 col-xl-3">
								<div class="card">
									<div class="card-body">
										<div class="card-value float-right stamp stamp-lg bg-primary "><i class="fa fa-users"></i></div>
										<h3 class="mb-1">678</h3>
										<div class="text-muted">Visitors online</div>
										<div class="progress progress-md mt-4">
											<div class="progress-bar progress-bar-striped progress-bar-animated bg-primary wd-50p"></div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-sm-12 col-lg-6 col-xl-3">
								<div class="card">
									<div class="card-body">
										<div class="card-value float-right stamp stamp-lg  bg-warning"><i class="fa fa-shopping-cart"></i></div>
										<h3 class="mb-1">567</h3>
										<div class="text-muted">Total Sales</div>
										<div class="progress progress-md mt-4">
											<div class="progress-bar progress-bar-striped progress-bar-animated bg-warning wd-70p" ></div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-sm-12 col-lg-6 col-xl-3">
								<div class="card">
									<div class="card-body">
										<div class="card-value float-right bg-info stamp stamp-lg"><i class="fa fa-briefcase"></i></div>
										<h3 class="mb-1">56</h3>
										<div class="text-muted">Total Projects</div>
										<div class="progress progress-md mt-4">
											<div class="progress-bar progress-bar-striped progress-bar-animated bg-info wd-30p"></div>
										</div>
									</div>

								</div>
							</div>
							<div class="col-sm-12 col-lg-6 col-xl-3">
								<div class="card">
									<div class="card-body">
										<div class="card-value float-right stamp stamp-lg bg-success"><i class="fas fa-dollar-sign"></i></div>
										<h3 class="mb-1">567</h3>
										<div class="text-muted">Today Income</div>
										<div class="progress progress-md mt-4">
											<div class="progress-bar progress-bar-striped progress-bar-animated bg-success wd-80p"></div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- row -->

				<!-- row -->
				<div class="row row-cards">
					<div class="col-sm-12 col-lg-4">
						<div class="card">
							<div class="card-body">
								<div class="card-box tilebox-one">
									<i class="float-right text-muted"><i class="fa fa-cubes text-primary" aria-hidden="true"></i></i>
									<h6 class="text-drak text-uppercase mt-0">Projects</h6>
									<h2 class="m-b-20">678</h2>
									<span class="badge badge-primary"> +78% </span> <span class="text-muted">From previous period</span>
								</div>
							</div>
						</div>
					</div>
					<div class="col-sm-12 col-lg-4">
						<div class="card">
							<div class="card-body">
								<div class="card-box tilebox-one">
									<i class="float-right text-muted"><i class="fas fa-comments-dollar text-pink" aria-hidden="true"></i></i>
									<h6 class="text-drak text-uppercase mt-0">Profits</h6>
									<h2 class="m-b-20">7,908</h2>
									<span class="badge badge-secondary"> +66% </span> <span class="text-muted">Last year</span>
								</div>
							</div>
						</div>
					</div>
					<div class="col-sm-12 col-lg-4">
						<div class="card">
							<div class="card-body">
								<div class="card-box tilebox-one">
									<i class=" float-right text-muted"><i class="fa fa-eye text-info" aria-hidden="true"></i></i>
									<h6 class="text-drak text-uppercase mt-0">Page Views</h6>
									<h2 class="m-b-20">9,523</h2>
									<span class="badge badge-info"> +60% </span> <span class="text-muted">Today</span>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- row -->

				<!-- row -->
				<div class="row row-cards">
					<div class="col-sm-12 col-md-6 col-lg-6 col-xl-3">
						<div class="card widgets-cards">
							<div class="card-body d-flex justify-content-center align-items-center">
								<div class="col-5 p-0">
									<div class="wrp icon-circle bg-success">
										<i class="si si-basket-loaded icons"></i>
									</div>
								</div>
								<div class="col-7 p-0">
									<div class="wrp text-wrapper">
										<p>8954</p>
										<p class="text-dark mt-1 mb-0">Week Orders</p>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-sm-12 col-md-6 col-lg-6 col-xl-3">
						<div class="card widgets-cards">
							<div class="card-body d-flex justify-content-center align-items-center">
								<div class="col-5 p-0">
									<div class="wrp icon-circle bg-danger">
										<i class="si si-wallet icons"></i>
									</div>
								</div>
								<div class="col-7 p-0">
									<div class="wrp text-wrapper">
										<p>$7841</p>
										<p class="text-dark mt-1 mb-0">Week Earnings</p>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-sm-12 col-md-6 col-lg-6 col-xl-3">
						<div class="card widgets-cards">
							<div class="card-body d-flex justify-content-center align-items-center">
								<div class="col-5 p-0">
									<div class="wrp icon-circle bg-warning">
										<i class="si si-eye icons"></i>
									</div>
								</div>
								<div class="col-7 p-0">
									<div class="wrp text-wrapper">
										<p>6521</p>
										<p class="text-dark mt-1 mb-0">Week New Views</p>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-sm-12 col-md-6 col-lg-6 col-xl-3">
						<div class="card widgets-cards">
							<div class="card-body d-flex justify-content-center align-items-center">
								<div class="col-5 p-0">
									<div class="wrp icon-circle bg-primary">
										<i class="si si-check icons"></i>
									</div>
								</div>
								<div class="col-7 p-0">
									<div class="wrp text-wrapper">
										<p>325</p>
										<p class="text-dark mt-1 mb-0">Week Comments</p>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- row -->

				<!-- row -->
				<div class="row">
					<div class="col-sm-12 col-lg-6 col-xl-3">
						<div class="card">
							<div class="card-body">
								<div class="clearfix">
									<div class="float-right">
										<i class="mdi mdi-cube text-warning icon-size"></i>
									</div>
									<div class="float-left">
										<p class="mb-0 text-left">Company Revenue</p>
										<div class="">
											<h3 class="font-weight-semibold text-left mb-0 text-success">$89,876</h3>
										</div>
									</div>
								</div>
								<p class="text-muted mb-0">
									<i class="mdi mdi-arrow-up-drop-circle mr-1 text-success" aria-hidden="true"></i> 80% higher growth
								</p>
							</div>
						</div>
					</div>
					<div class="col-sm-12 col-lg-6 col-xl-3">
						<div class="card">
							<div class="card-body">
								<div class="clearfix">
									<div class="float-right">
										<i class="mdi mdi-receipt text-secondary icon-size"></i>
									</div>
									<div class="float-left">
										<p class="mb-0 text-left">Projects</p>
										<div class="">
											<h3 class="font-weight-semibold text-left mb-0">897</h3>
										</div>
									</div>
								</div>
								<p class="text-muted mb-0">
									<i class="mdi mdi-arrow-down-drop-circle mr-1 text-danger" aria-hidden="true"></i>  Completed Projects
								</p>
							</div>
						</div>
					</div>
					<div class="col-sm-12 col-lg-6 col-xl-3">
						<div class="card">
							<div class="card-body">
								<div class="clearfix">
									<div class="float-right">
										<i class="mdi mdi-poll-box text-danger icon-size"></i>
									</div>
									<div class="float-left">
										<p class="mb-0 text-left">Profits</p>
										<div class="">
											<h3 class="font-weight-semibold text-left mb-0">8278</h3>
										</div>
									</div>
								</div>
								<p class="text-muted mb-0">
									<i class="mdi mdi-arrow-up-drop-circle mr-1 text-success" aria-hidden="true"></i> Monthly Profits
								</p>
							</div>
						</div>
					</div>
					<div class="col-sm-12 col-lg-6 col-xl-3">
						<div class="card">
							<div class="card-body">
								<div class="clearfix">
									<div class="float-right">
										<i class="mdi mdi-account-location text-success icon-size"></i>
									</div>
									<div class="float-left">
										<p class="mb-0 text-left">Employees</p>
										<div class="">
											<h3 class="font-weight-semibold text-left mb-0">345</h3>
										</div>
									</div>
								</div>
								<p class="text-muted mb-0">
									<i class="mdi mdi-arrow-down-drop-circle mr-1 text-danger" aria-hidden="true"></i> Monthly Employees Growth
								</p>
							</div>
						</div>
					</div>
				</div>
				<!-- row -->

				<!-- row -->
				<div class="row">
					<div class="col-sm-12 col-lg-6 col-xl-3">
						<div class="card socailicons twitter1">
							<div class="card-body  mb-0">
								<small class="social-title">Twitter</small>
								<h3 class="counter">2175</h3>
								<i class="fab fa-twitter"></i>
							</div>
						</div>
					</div>
					<div class="col-sm-12 col-lg-6 col-xl-3">
						<div class="card socailicons google-plus1">
							<div class="card-body  mb-0">
								<small class="social-title">Google</small>
								<h3 class="counter">2175</h3>
								<i class="fab fa-google-plus-g"></i>
							</div>
						</div>
					</div>
					<div class="col-sm-12 col-lg-6 col-xl-3">
						<div class="card socailicons facebook-like1">
							<div class="card-body  mb-0">
								<small class="social-title">Facebook Like</small>
								<h3 class="counter">2175</h3>
								<i class="fab fa-facebook-f"></i>
							</div>
						</div>
					</div>
					<div class="col-sm-12 col-lg-6 col-xl-3">
						<div class="card socailicons pinterest1">
							<div class="card-body  mb-0">
								<small class="social-title">Pinterest</small>
								<h3 class="counter">2175</h3>
								<i class="fab fa-pinterest-p"></i>
							</div>
						</div>
					</div>
					<div class="col-sm-12 col-md-6 col-lg-3">
						<div class="card bg-primary">
							<div class="card-body">
								<div class="d-flex no-block align-items-center">
									<div>
										<h6 class="text-white">Invoices</h6>
										<h2 class="text-white m-0 ">625</h2>
									</div>
									<div class="ml-auto">
										<span class="text-white display-6"><i class="fas fa-file-invoice fa-2x"></i></span>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-sm-12 col-md-6 col-lg-3">
						<div class="card bg-info">
							<div class="card-body">
								<div class="d-flex no-block align-items-center">
									<div>
										<h6 class="text-white">Sales</h6>
										<h2 class="text-white m-0 ">25k</h2>
									</div>
									<div class="ml-auto">
										<span class="text-white display-6"><i class="fa fa-signal fa-2x"></i></span>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-sm-12 col-md-6 col-lg-3">
						<div class="card bg-success">
							<div class="card-body">
								<div class="d-flex no-block align-items-center">
									<div>
										<h6 class="text-white">Profit</h6>
										<h2 class="text-white m-0 ">62K</h2>
									</div>
									<div class="ml-auto">
										<span class="text-white display-6"><i class="fas fa-comments-dollar fa-2x"></i></span>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-sm-12 col-md-6 col-lg-3">
						<div class="card bg-danger">
							<div class="card-body">
								<div class="d-flex no-block align-items-center">
									<div>
										<h6 class="text-white">News</h6>
										<h2 class="text-white m-0 ">542</h2>
									</div>
									<div class="ml-auto">
										<span class="text-white display-6"><i class="far fa-newspaper fa-2x"></i></span>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- row -->

				<!-- row -->
				<div class="row row-cards">
					<div class="col-sm-12 col-lg-6 col-xl-3">
						<div class="card bg-primary card-img-holder text-white">
							<div class="card-body">
								<img src="{{URL::asset('assets/img/svgicons/circle.svg')}}" class="card-img-absolute" alt="circle-image">
								<h4 class="font-weight-normal  mb-3">Followers
									<i class="fas fa-user-tie  tx-30 float-right"></i>
								</h4>
								<h2 class="mb-0">1,457</h2>
							</div>
						</div>
					</div>
					<div class="col-sm-12 col-lg-6 col-xl-3">
						<div class="card bg-warning card-img-holder text-white">
							<div class="card-body">
								<img src="{{URL::asset('assets/img/svgicons/circle.svg')}}" class="card-img-absolute" alt="circle-image">
								<h4 class="font-weight-normal  mb-3">Likes
									<i class="far fa-heart tx-30 float-right"></i>
								</h4>
								<h2 class="mb-0">6,987</h2>
							</div>
						</div>
					</div>
					<div class="col-sm-12 col-lg-6 col-xl-3">
						<div class="card bg-info card-img-holder text-white">
							<div class="card-body">
								<img src="{{URL::asset('assets/img/svgicons/circle.svg')}}" class="card-img-absolute" alt="circle-image">
								<h4 class="font-weight-normal mb-3">Comments
									<i class="far fa-comments tx-30 float-right"></i>
								</h4>
								<h2 class="mb-0">78</h2>
							</div>
						</div>
					</div>
					<div class="col-sm-12 col-lg-6 col-xl-3">
						<div class="card bg-success card-img-holder text-white">
							<div class="card-body">
								<img src="{{URL::asset('assets/img/svgicons/circle.svg')}}" class="card-img-absolute" alt="circle-image">
								<h4 class="font-weight-normal  mb-3">Posts
									<i class="far fa-paper-plane tx-30 float-right"></i>
								</h4>
								<h2 class="mb-0">345</h2>
							</div>
						</div>
					</div>
				</div>
				<!-- row -->

				<!-- row -->
				<div class="row">
					<div class="col-sm-12 col-xl-4 col-lg-12">
						<div class="card user-wideget user-wideget-widget widget-user">
							<div class="widget-user-header bg-primary">
								<h3 class="widget-user-username">Alexander Pierce</h3>
								<h5 class="widget-user-desc">Founder &amp; CEO</h5>
							</div>
							<div class="widget-user-image">
								<img src="{{URL::asset('assets/img/faces/1.jpg')}}" class="brround" alt="User Avatar">
							</div>
							<div class="user-wideget-footer">
								<div class="row">
									<div class="col-sm-4 border-right">
										<div class="description-block">
											<h5 class="description-header">3,200</h5>
											<span class="description-text">SALES</span>
										</div>
									</div>
									<div class="col-sm-4 border-right">
										<div class="description-block">
											<h5 class="description-header">13,000</h5>
											<span class="description-text">FOLLOWERS</span>
										</div>
									</div>
									<div class="col-sm-4">
										<div class="description-block">
											<h5 class="description-header">35</h5>
											<span class="description-text">PRODUCTS</span>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-sm-12 col-xl-4 col-lg-12">
						<div class="card user-wideget user-wideget-widget widget-user">
							<div class="widget-user-header bg-danger">
								<h3 class="widget-user-username">Alexander Pierce</h3>
								<h5 class="widget-user-desc">Founder &amp; CEO</h5>
							</div>
							<div class="widget-user-image">
								<img src="{{URL::asset('assets/img/faces/5.jpg')}}" class="brround" alt="User Avatar">
							</div>
							<div class="user-wideget-footer">
								<div class="row">
									<div class="col-sm-4 border-right">
										<div class="description-block">
											<h5 class="description-header">3,200</h5>
											<span class="description-text">SALES</span>
										</div>
									</div>
									<div class="col-sm-4 border-right">
										<div class="description-block">
											<h5 class="description-header">13,000</h5>
											<span class="description-text">FOLLOWERS</span>
										</div>
									</div>
									<div class="col-sm-4">
										<div class="description-block">
											<h5 class="description-header">35</h5>
											<span class="description-text">PRODUCTS</span>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-sm-12 col-xl-4 col-lg-12">
						<div class="card user-wideget user-wideget-widget widget-user">
							<div class="widget-user-header bg-success">
								<h3 class="widget-user-username">Alexander Pierce</h3>
								<h5 class="widget-user-desc">Founder &amp; CEO</h5>
							</div>
							<div class="widget-user-image">
								<img src="{{URL::asset('assets/img/faces/12.jpg')}}" class="brround" alt="User Avatar">
							</div>
							<div class="user-wideget-footer">
								<div class="row">
									<div class="col-sm-4 border-right">
										<div class="description-block">
											<h5 class="description-header">3,200</h5>
											<span class="description-text">SALES</span>
										</div>
									</div>
									<div class="col-sm-4 border-right">
										<div class="description-block">
											<h5 class="description-header">13,000</h5>
											<span class="description-text">FOLLOWERS</span>
										</div>
									</div>
									<div class="col-sm-4">
										<div class="description-block">
											<h5 class="description-header">35</h5>
											<span class="description-text">PRODUCTS</span>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- /row -->

@endsection

@section('script')

		<!-- Sparkline js -->
		<script src="{{URL::asset('assets/plugins/jquery-sparkline/jquery.sparkline.min.js')}}"></script>

		<!-- Internal Raphael js -->
		<script src="{{URL::asset('assets/plugins/raphael/raphael.min.js')}}"></script>

		<!-- Piety js -->
		<script src="{{URL::asset('assets/plugins/peity/jquery.peity.min.js')}}"></script>

		<!-- Internal Chart js -->
		<script src="{{URL::asset('assets/plugins/chart.js/Chart.bundle.min.js')}}"></script>

@endsection
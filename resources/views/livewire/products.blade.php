@extends('layouts.app')

@section('style')
@endsection

@section('content')

				<!-- breadcrumb -->
				<div class="breadcrumb-header justify-content-between">
					<div class="my-auto">
						<div class="d-flex">
							<h4 class="content-title mb-0 my-auto">Ecommerce</h4><span class="text-muted mt-1 tx-13 ml-2 mb-0">/ Products</span>
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
					<div class="col-md-4 col-xl-3 mb-3 mb-md-0">
						<div class="card">
							<h5 class="m-0 p-3 card-title bg-light border-bottom">Category</h5>
							<div class="py-2 px-3">
								<label class="p-1 mt-2 d-flex align-items-center">
									<span class="checkbox">
										<span class="check-box mb-0">
											<span class="ckbox"><input checked="" type="checkbox"><span></span></span>
										</span>
									</span>
									<span class="ml-2">
										Foot wear
									</span>
								</label>
								<label class="p-1 d-flex align-items-center">
									<span class="checkbox">
										<span class="check-box mb-0">
											<span class="ckbox"><input type="checkbox"><span></span></span>
										</span>
									</span>
									<span class="ml-2">
										Top wear
									</span>
								</label>
								<label class="p-1 d-flex align-items-center">
									<span class="checkbox">
										<span class="check-box mb-0">
											<span class="ckbox"><input type="checkbox"><span></span></span>
										</span>
									</span>
									<span class="ml-2">
										Bottom wear
									</span>
								</label>
								<label class="p-1 d-flex align-items-center">
									<span class="check-box mb-0">
										<span class="ckbox"><input checked="" type="checkbox"><span></span></span>
									</span>
									<span class="ml-2">
									Accessories
									</span>
								</label>
								<label class="p-1 d-flex align-items-center">
									<span class="checkbox">
										<span class="check-box mb-0">
											<span class="ckbox"><input type="checkbox"><span></span></span>
										</span>
									</span>
									<span class="ml-2">
										Furniture
									</span>
								</label>
								<label class="p-1 d-flex align-items-center">
									<span class="check-box mb-0">
										<span class="ckbox"><input checked="" type="checkbox"><span></span></span>
									</span>
									<span class="ml-2">
										Electronics
									</span>
								</label>
							</div>
							<h5 class="m-0 p-3 card-title bg-light border-bottom border-top">Price</h5>
							<div class="p-3 d-flex align-items-center">
								<div class="w-50">
									<input placeholder="From" class="form-control rounded-0" />
								</div>
								<span class="h4 m-0 font-weight-normal px-2">-</span>
								<div class="w-50">
									<input placeholder="Up to" class="form-control rounded-0" />
								</div>
							</div>
							<h5 class="m-0 p-3 card-title bg-light border-bottom border-top">Ratings</h5>
							<div class="py-2 px-3">
								<label class="p-1 mt-2 d-flex align-items-center">
									<span class="check-box mb-0">
										<span class="ckbox"><input checked="" type="checkbox"><span></span></span>
									</span>
									<span class="ml-3 tx-16 my-auto">
										<i class="ion ion-md-star  text-warning"></i>
										<i class="ion ion-md-star  text-warning"></i>
										<i class="ion ion-md-star  text-warning"></i>
										<i class="ion ion-md-star  text-warning"></i>
										<i class="ion ion-md-star  text-warning"></i>
									</span>
								</label>
								<label class="p-1 mt-2 d-flex align-items-center">
									<span class="check-box mb-0">
										<span class="ckbox"><input checked="" type="checkbox"><span></span></span>
									</span>
									<span class="ml-3 tx-16 my-auto">
										<i class="ion ion-md-star  text-warning"></i>
										<i class="ion ion-md-star  text-warning"></i>
										<i class="ion ion-md-star  text-warning"></i>
										<i class="ion ion-md-star  text-warning"></i>
									</span>
								</label>
								<label class="p-1 mt-2 d-flex align-items-center">
									<span class="check-box mb-0">
										<span class="ckbox"><input checked="" type="checkbox"><span></span></span>
									</span>
									<span class="ml-3 tx-16 my-auto">
										<i class="ion ion-md-star  text-warning"></i>
										<i class="ion ion-md-star  text-warning"></i>
										<i class="ion ion-md-star  text-warning"></i>
									</span>
								</label>
								<label class="p-1 mt-2 d-flex align-items-center">
									<span class="checkbox mb-0">
										<span class="check-box">
											<span class="ckbox"><input type="checkbox"><span></span></span>
										</span>
									</span>
									<span class="ml-3 tx-16 my-auto">
										<i class="ion ion-md-star  text-warning"></i>
										<i class="ion ion-md-star  text-warning"></i>
									</span>
								</label>
								<label class="p-1 mt-2 d-flex align-items-center">
									<span class="checkbox mb-0">
										<span class="check-box">
											<span class="ckbox"><input type="checkbox"><span></span></span>
										</span>
									</span>
									<span class="ml-3 tx-16 my-auto">
										<i class="ion ion-md-star  text-warning"></i>
									</span>
								</label>
							</div>
							<div class="px-3 py-2 border-top">
								<button class="btn btn-danger btn-block">FILTER</button>
							</div>
						</div>
					</div>
					<div class="col-xl-9 col-md-8">
						<div class="card">
							<div class="card-body p-2">
								<div class="input-group">
									<input type="text" class="form-control" placeholder="Search ...">
									<span class="input-group-append">
										<button class="btn btn-primary" type="button">Search</button>
									</span>
								</div>
							</div>
						</div>
						<div class="row row-sm">
							<div class="col-12 col-sm-6 col-md-6 col-lg-6 col-xl-4">
								<div class="product-card card">
									<div class="card-body h-100">
										<div class="d-flex">
											<span class="text-secondary small text-uppercase">planters</span>
											<span class="ml-auto"><i class="fa fa-heart text-danger"></i></span>
										</div>
										<h3 class="h6 mb-2 font-weight-bold text-uppercase">Flower Pot</h3>
										<div class="d-flex">
											<h4 class="h5 w-50 font-weight-bold text-danger">$25 <span class="text-secondary font-weight-normal tx-13 ml-1 prev-price">$47</span></h4>
											<span class="tx-15 ml-auto">
												<i class="ion ion-md-star text-warning"></i>
												<i class="ion ion-md-star text-warning"></i>
												<i class="ion ion-md-star text-warning"></i>
												<i class="ion ion-md-star-half text-warning"></i>
												<i class="ion ion-md-star-outline text-warning"></i>
											</span>
										</div>
										<img class="w-100 mt-2 mb-3" src="{{URL::asset('assets/img/ecommerce/01.jpg')}}" alt="product-image"/>
										<button class="btn btn-primary btn-block mb-0">
											<i class="fe fe-shopping-cart mr-1"></i>
											Add To Cart
										</button>
									</div>
								</div>
							</div>
							<div class="col-12 col-sm-6 col-md-6 col-lg-6 col-xl-4">
								<div class="product-card card">
									<div class="card-body h-100">
										<div class="d-flex">
											<span class="text-secondary small text-uppercase">Furniture</span>
											<span class="ml-auto"><i class="far fa-heart"></i></span>
										</div>
										<h3 class="h6 mb-2 font-weight-bold text-uppercase">Fabric Armchair</h3>
										<div class="d-flex">
											<h4 class="h5 w-50 font-weight-bold text-danger">$56 <span class="text-secondary font-weight-normal tx-13 ml-1 prev-price">$79</span></h4>
											<span class="tx-15 ml-auto">
												<i class="ion ion-md-star text-warning"></i>
												<i class="ion ion-md-star text-warning"></i>
												<i class="ion ion-md-star text-warning"></i>
												<i class="ion ion-md-star-half text-warning"></i>
												<i class="ion ion-md-star-outline text-warning"></i>
											</span>
										</div>
									   <img class="w-100 mt-2 mb-3" src="{{URL::asset('assets/img/ecommerce/02.jpg')}}"  alt="product-image"/>
										<button class="btn btn-primary btn-block mb-0">
											<i class="fe fe-shopping-cart mr-1"></i>
											Add To Cart
										</button>
									</div>
								</div>
							</div>
							<div class="col-12 col-sm-6 col-md-6 col-lg-6 col-xl-4">
								<div class="product-card card">
									<div class="card-body h-100">
										<div class="d-flex">
											<span class="text-secondary small text-uppercase">Furniture</span>
											<span class="ml-auto"><i class="far fa-heart"></i></span>
										</div>
										<h3 class="h6 mb-2 font-weight-bold text-uppercase">Chair</h3>
										<div class="d-flex">
											<h4 class="h5 w-50 font-weight-bold text-danger">$39</h4>
											<span class="tx-15 ml-auto">
												<i class="ion ion-md-star text-warning"></i>
												<i class="ion ion-md-star text-warning"></i>
												<i class="ion ion-md-star text-warning"></i>
												<i class="ion ion-md-star-half text-warning"></i>
												<i class="ion ion-md-star-outline text-warning"></i>
											</span>
										</div>
										<img class="w-100 mt-2 mb-3" src="{{URL::asset('assets/img/ecommerce/06.jpg')}}"  alt="product-image"/>
										<button class="btn btn-primary btn-block mb-0">
											<i class="fe fe-shopping-cart mr-1"></i>
											Add To Cart
										</button>
									</div>
								</div>
							</div>
							<div class="col-12 col-sm-6 col-md-6 col-lg-6 col-xl-4">
								<div class="product-card card">
									<div class="card-body h-100">
										<div class="d-flex">
											<span class="text-secondary small text-uppercase">Cloting</span>
											<span class="ml-auto"><i class="far fa-heart"></i></span>
										</div>
										<h3 class="h6 mb-2 font-weight-bold text-uppercase">Womens Casual dress</h3>
										<div class="d-flex">
											<h4 class="h5 w-50 font-weight-bold text-danger">$25</h4>
											<span class="tx-15 ml-auto">
												<i class="ion ion-md-star text-warning"></i>
												<i class="ion ion-md-star text-warning"></i>
												<i class="ion ion-md-star text-warning"></i>
												<i class="ion ion-md-star-half text-warning"></i>
												<i class="ion ion-md-star-outline text-warning"></i>
											</span>
										</div>
										<img class="w-100 mt-2 mb-3" src="{{URL::asset('assets/img/ecommerce/10.jpg')}}"  alt="product-image"/>
										<button class="btn btn-primary btn-block mb-0">
											<i class="fe fe-shopping-cart mr-1"></i>
											Add To Cart
										</button>
									</div>
								</div>
							</div>
							<div class="col-12 col-sm-6 col-md-6 col-lg-6 col-xl-4">
								<div class="product-card card">
									<div class="card-body h-100">
										<div class="d-flex">
											<span class="text-secondary small text-uppercase">Kitchen & Dining</span>
											<span class="ml-auto"><i class="fa fa-heart text-danger"></i></span>
										</div>
										<h3 class="h6 mb-2 font-weight-bold text-uppercase">Coffee Cup</h3>
										<div class="d-flex">
											<h4 class="h5 w-50 font-weight-bold text-danger">$41</h4>
											<span class="tx-15 ml-auto">
												<i class="ion ion-md-star text-warning"></i>
												<i class="ion ion-md-star text-warning"></i>
												<i class="ion ion-md-star text-warning"></i>
												<i class="ion ion-md-star-half text-warning"></i>
												<i class="ion ion-md-star-outline text-warning"></i>
											</span>
										</div>
									   <img class="w-100 mt-2 mb-3" src="{{URL::asset('assets/img/ecommerce/07.jpg')}}"  alt="product-image"/>
										<button class="btn btn-primary btn-block mb-0">
											<i class="fe fe-shopping-cart mr-1"></i>
											Add To Cart
										</button>
									</div>
								</div>
							</div>
							<div class="col-12 col-sm-6 col-md-6 col-lg-6 col-xl-4">
								<div class="product-card card">
									<div class="card-body h-100">
										<div class="d-flex">
											<span class="text-secondary small text-uppercase">Electronics</span>
											<span class="ml-auto"><i class="far fa-heart"></i></span>
										</div>
										<h3 class="h6 mb-2 font-weight-bold text-uppercase">Mens Watch</h3>
										<div class="d-flex">
											<h4 class="h5 w-50 font-weight-bold text-danger">$69 <span class="text-secondary font-weight-normal tx-13 ml-1 prev-price">$97</span></h4>
											<span class="tx-15 ml-auto">
												<i class="ion ion-md-star text-warning"></i>
												<i class="ion ion-md-star text-warning"></i>
												<i class="ion ion-md-star text-warning"></i>
												<i class="ion ion-md-star-half text-warning"></i>
												<i class="ion ion-md-star-outline text-warning"></i>
											</span>
										</div>
									   <img class="w-100 mt-2 mb-3" src="{{URL::asset('assets/img/ecommerce/04.jpg')}}"  alt="product-image"/>
										<button class="btn btn-primary btn-block mb-0">
											<i class="fe fe-shopping-cart mr-1"></i>
											Add To Cart
										</button>
									</div>
								</div>
							</div>
							<div class="col-12 col-sm-6 col-md-6 col-lg-6 col-xl-4">
								<div class="product-card card">
									<div class="card-body h-100">
										<div class="d-flex">
											<span class="text-secondary small text-uppercase">planters</span>
											<span class="ml-auto"><i class="fa fa-heart text-danger"></i></span>
										</div>
										<h3 class="h6 mb-2 font-weight-bold text-uppercase">cactus plant</h3>
										<div class="d-flex">
											<h4 class="h5 w-50 font-weight-bold text-danger">$39 <span class="text-secondary font-weight-normal tx-13 ml-1 prev-price">$59</span></h4>
											<span class="tx-15 ml-auto">
												<i class="ion ion-md-star text-warning"></i>
												<i class="ion ion-md-star text-warning"></i>
												<i class="ion ion-md-star text-warning"></i>
												<i class="ion ion-md-star-half text-warning"></i>
												<i class="ion ion-md-star-outline text-warning"></i>
											</span>
										</div>
									   <img class="w-100 mt-2 mb-3" src="{{URL::asset('assets/img/ecommerce/08.jpg')}}"  alt="product-image"/>
										<button class="btn btn-primary btn-block mb-0">
											<i class="fe fe-shopping-cart mr-1"></i>
											Add To Cart
										</button>
									</div>
								</div>
							</div>
							<div class="col-12 col-sm-6 col-md-6 col-lg-6 col-xl-4">
								<div class="product-card card">
									<div class="card-body h-100">
										<div class="d-flex">
											<span class="text-secondary small text-uppercase">Accessories</span>
											<span class="ml-auto"><i class="far fa-heart"></i></span>
										</div>
										<h3 class="h6 mb-2 font-weight-bold text-uppercase">Stylish College bag</h3>
										<div class="d-flex">
											<h4 class="h5 w-50 font-weight-bold text-danger">$45 <span class="text-secondary font-weight-normal tx-13 ml-1 prev-price">$674</span></h4>
											<span class="tx-15 ml-auto">
												<i class="ion ion-md-star text-warning"></i>
												<i class="ion ion-md-star text-warning"></i>
												<i class="ion ion-md-star text-warning"></i>
												<i class="ion ion-md-star-half text-warning"></i>
												<i class="ion ion-md-star-outline text-warning"></i>
											</span>
										</div>
										<img class="w-100 mt-2 mb-3" src="{{URL::asset('assets/img/ecommerce/09.jpg')}}"  alt="product-image"/>
										<button class="btn btn-primary btn-block mb-0">
											<i class="fe fe-shopping-cart mr-1"></i>
											Add To Cart
										</button>
									</div>
								</div>
							</div>
							<div class="col-12 col-sm-6 col-md-6 col-lg-6 col-xl-4">
								<div class="product-card card">
									<div class="card-body h-100">
										<div class="d-flex">
											<span class="text-secondary small text-uppercase">Clothing</span>
											<span class="ml-auto"><i class="far fa-heart"></i></span>
										</div>
										<h3 class="h6 mb-2 font-weight-bold text-uppercase">Casual T-shirt</h3>
										<div class="d-flex">
											<h4 class="h5 w-50 font-weight-bold text-danger">$32</h4>
											<span class="tx-15 ml-auto">
												<i class="ion ion-md-star text-warning"></i>
												<i class="ion ion-md-star text-warning"></i>
												<i class="ion ion-md-star text-warning"></i>
												<i class="ion ion-md-star-half text-warning"></i>
												<i class="ion ion-md-star-outline text-warning"></i>
											</span>
										</div>
										<img class="w-100 mt-2 mb-3" src="{{URL::asset('assets/img/ecommerce/11.jpg')}}"  alt="product-image" />
										<button class="btn btn-primary btn-block mb-0">
											<i class="fe fe-shopping-cart mr-1"></i>
											Add To Cart
										</button>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- row closed -->

@endsection

@section('script')
@endsection
@extends('layouts.app')

@section('style')
@endsection

@section('content')

				<!-- breadcrumb -->
				<div class="breadcrumb-header justify-content-between">
					<div class="my-auto">
						<div class="d-flex">
							<h4 class="content-title mb-0 my-auto">Utilities</h4><span class="text-muted mt-1 tx-13 ml-2 mb-0">/ Flex</span>
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

				<!-- row  -->
				<div class="row row-sm">
					<div class="col-md-12 col-xl-12 col-xs-12 col-sm-12">
						<!--div-->
						<div class="card">
							<div class="card-body">
								<div class="main-content-label mg-b-5">
									Enable Flex
								</div>
								<p class="mg-b-20">It is very easy to customize and it uses in website applications.</p>
								<div class="d-flex pd-10 bg-gray-200">
									I'm a flexbox container!
								</div>
							</div>
						</div>
					</div>
					<!--/div-->

					<!--div-->
					<div class="col-md-12 col-xl-12 col-xs-12 col-sm-12">
						<div class="card">
							<div class="card-body">
								<div class="main-content-label mg-b-5">
									Direction
								</div>
								<p class="mg-b-20">It is very easy to customize and it uses in website applications.</p>
								<div>
									<div class="d-flex flex-row bg-gray-200 mg-b-20">
										<div class="pd-10 bg-gray-300">
											Flex item 1
										</div>
										<div class="pd-10 bg-gray-400">
											Flex item 2
										</div>
										<div class="pd-10 bg-gray-500">
											Flex item 3
										</div>
									</div>
									<div class="d-flex flex-row-reverse bg-gray-200">
										<div class="pd-10 bg-gray-300">
											Flex item 1
										</div>
										<div class="pd-10 bg-gray-400">
											Flex item 2
										</div>
										<div class="pd-10 bg-gray-500">
											Flex item 3
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!--/div-->

					<div class="col-md-12 col-xl-12 col-xs-12 col-sm-12">
						<div class="card">
							<div class="card-body">
								<div class="main-content-label mg-b-5">
									Justify Content
								</div>
								<p class="mg-b-20">It is very easy to customize and it uses in website applications.</p>
								<div>
									<div class="d-flex flex-row justify-content-start bg-gray-200 mg-b-20">
										<div class="pd-10 bg-gray-300">
											Flex item 1
										</div>
										<div class="pd-10 bg-gray-400">
											Flex item 2
										</div>
										<div class="pd-10 bg-gray-500">
											Flex item 3
										</div>
									</div>
									<div class="d-flex flex-row justify-content-end bg-gray-200 mg-b-20">
										<div class="pd-10 bg-gray-300">
											Flex item 1
										</div>
										<div class="pd-10 bg-gray-400">
											Flex item 2
										</div>
										<div class="pd-10 bg-gray-500">
											Flex item 3
										</div>
									</div>
									<div class="d-flex flex-row justify-content-center bg-gray-200 mg-b-20">
										<div class="pd-10 bg-gray-300">
											Flex item 1
										</div>
										<div class="pd-10 bg-gray-400">
											Flex item 2
										</div>
										<div class="pd-10 bg-gray-500">
											Flex item 3
										</div>
									</div>
									<div class="d-flex flex-row justify-content-between bg-gray-200 mg-b-20">
										<div class="pd-10 bg-gray-300">
											Flex item 1
										</div>
										<div class="pd-10 bg-gray-400">
											Flex item 2
										</div>
										<div class="pd-10 bg-gray-500">
											Flex item 3
										</div>
									</div>
									<div class="d-flex flex-row justify-content-around bg-gray-200">
										<div class="pd-10 bg-gray-300">
											Flex item 1
										</div>
										<div class="pd-10 bg-gray-400">
											Flex item 2
										</div>
										<div class="pd-10 bg-gray-500">
											Flex item 3
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!--/div-->

					<div class="col-md-12 col-xl-12 col-xs-12 col-sm-12">
						<div class="card">
							<div class="card-body">
								<div class="main-content-label mg-b-5">
									Align Items
								</div>
								<p class="mg-b-20">It is very easy to customize and it uses in website applications.</p>
								<div>
									<div class="d-flex flex-row align-items-start bg-gray-200 ht-100 mg-b-20">
										<div class="pd-10 bg-gray-300">
											Flex item 1
										</div>
										<div class="pd-10 bg-gray-400">
											Flex item 2
										</div>
										<div class="pd-10 bg-gray-500">
											Flex item 3
										</div>
									</div>
									<div class="d-flex flex-row align-items-center bg-gray-200 ht-100 mg-b-20">
										<div class="pd-10 bg-gray-300">
											Flex item 1
										</div>
										<div class="pd-10 bg-gray-400">
											Flex item 2
										</div>
										<div class="pd-10 bg-gray-500">
											Flex item 3
										</div>
									</div>
									<div class="d-flex flex-row align-items-end bg-gray-200 ht-100 mg-b-20">
										<div class="pd-10 bg-gray-300">
											Flex item 1
										</div>
										<div class="pd-10 bg-gray-400">
											Flex item 2
										</div>
										<div class="pd-10 bg-gray-500">
											Flex item 3
										</div>
									</div>
									<div class="d-flex flex-row align-items-stretch bg-gray-200 ht-100">
										<div class="pd-10 bg-gray-300">
											Flex item 1
										</div>
										<div class="pd-10 bg-gray-400">
											Flex item 2
										</div>
										<div class="pd-10 bg-gray-500">
											Flex item 3
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!--/div-->

					<!--div-->
					<div class="col-md-12 col-xl-12 col-xs-12 col-sm-12">
						<div class="card">
							<div class="card-body">
								<div class="main-content-label mg-b-5">
									Align Self
								</div>
								<p class="mg-b-20">It is very easy to customize and it uses in website applications.</p>
								<div>
									<div class="d-flex flex-row bg-gray-200 ht-100 mg-b-20">
										<div class="pd-10 bg-gray-300 align-self-start">
											Flex item 1
										</div>
										<div class="pd-10 bg-gray-400 align-self-center">
											Flex item 2
										</div>
										<div class="pd-10 bg-gray-500 align-self-end">
											Flex item 3
										</div>
										<div class="pd-10 bg-gray-400 align-self-stretch">
											Flex item 4
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!--/div-->

					<!--div-->
					<div class="col-md-12 col-xl-12 col-xs-12 col-sm-12">
						<div class="card">
							<div class="card-body">
								<div class="main-content-label mg-b-5">
									Fill
								</div>
								<p class="mg-b-20">It is very easy to customize and it uses in website applications.</p>
								<div>
									<div class="d-flex bg-gray-200">
										<div class="pd-10 bg-gray-300 flex-fill">
											Flex item with a lot of content
										</div>
										<div class="pd-10 bg-gray-400 flex-fill">
											Flex item
										</div>
										<div class="pd-10 bg-gray-500 flex-fill">
											Flex item
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!--/div-->

					<!--div-->
					<div class="col-md-12 col-xl-12 col-xs-12 col-sm-12">
						<div class="card">
							<div class="card-body">
								<div class="main-content-label mg-b-5">
									Grow and Shrink
								</div>
								<p class="mg-b-20">It is very easy to customize and it uses in website applications.</p>
								<div>
									<div class="d-flex bg-gray-200">
										<div class="pd-10 bg-gray-300 flex-grow-1">
											Flex item
										</div>
										<div class="pd-10 bg-gray-400">
											Flex item
										</div>
										<div class="pd-10 bg-gray-500">
											Third flex item
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!--/div-->

					<!--div-->
					<div class="col-md-12 col-xl-12 col-xs-12 col-sm-12">
						<div class="card">
							<div class="card-body">
								<div class="main-content-label mg-b-5">
									Auto Margins
								</div>
								<p class="mg-b-20">It is very easy to customize and it uses in website applications.</p>
								<div>
									<div class="d-flex bg-gray-200">
										<div class="pd-10 bg-gray-300">
											Flex item
										</div>
										<div class="pd-10 bg-gray-400">
											Flex item
										</div>
										<div class="pd-10 bg-gray-500 mg-l-auto">
											Third flex item
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!--/div-->

					<!--div-->
					<div class="col-md-12 col-xl-12 col-xs-12 col-sm-12">
						<div class="card">
							<div class="card-body">
								<div class="main-content-label mg-b-5">
									Auto Margins
								</div>
								<p class="mg-b-20">It is very easy to customize and it uses in website applications.</p>
								<div>
									<div class="d-flex bg-gray-200">
										<div class="pd-10 bg-gray-300">
											Flex item
										</div>
										<div class="pd-10 bg-gray-400">
											Flex item
										</div>
										<div class="pd-10 bg-gray-500 mg-l-auto">
											Third flex item
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!--/div-->
				</div>
				<!-- row closed -->

@endsection

@section('script')
@endsection
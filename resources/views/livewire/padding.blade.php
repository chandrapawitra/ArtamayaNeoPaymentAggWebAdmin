@extends('layouts.app')

@section('style')
@endsection

@section('content')

				<!-- breadcrumb -->
				<div class="breadcrumb-header justify-content-between">
					<div class="my-auto">
						<div class="d-flex">
							<h4 class="content-title mb-0 my-auto">Utilities</h4><span class="text-muted mt-1 tx-13 ml-2 mb-0">/ Padding</span>
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
				<div class="row">
					<div class="col-md-12 col-xl-12 col-xs-12 col-sm-12">
						<!--div-->
						<div class="card">
							<div class="card-body">
								<div class="main-content-label mg-b-5">
									Padding Values
								</div>
								<p class="mg-b-20">It is very easy to customize and it uses in website applications.</p>
								<div class="d-flex">
									<div class="wd-200 ht-100 bg-gray-500 pd-l-30">
										<div class="d-flex align-items-center justify-content-center ht-100p bg-gray-400">
											.pd-l-30
										</div>
									</div>
									<div class="wd-200 ht-100 bg-gray-500 mg-l-20 pd-l-50">
										<div class="d-flex align-items-center justify-content-center ht-100p bg-gray-400">
											.pd-l-50
										</div>
									</div>
								</div>
								<h6 class="mg-t-25 mb-0">Padding-top Values</h6>
								<div class="table-responsive">
									<table class="table main-table-reference text-nowrap mg-t-10 mb-0">
										<tbody>
											<tr>
												<td class="bg-gray-100 wd-20p"><b>Classes</b></td>
												<td><code>.pd-t-[value]</code></td>
											</tr>
											<tr>
												<td class="bg-gray-100 wd-20p"><b>Values</b></td>
												<td>1 | 2 | 3 | 4 | 5 | 6 | 7 | 8 | 9 | 10</td>
											</tr>
											<tr>
												<td class="bg-gray-100 wd-20p"><b>Bigger Values</b></td>
												<td>15 | 20 | 25 | 30 | ... | 120 &nbsp; (step of 5)</td>
											</tr>
											<tr>
												<td class="bg-gray-100 wd-20p"><b>Even Bigger Values</b></td>
												<td>110 | 120 | 130 | 140 | ... | 200 &nbsp; (step of 10)</td>
											</tr>
										</tbody>
									</table>
								</div>
								<h6 class="mg-t-25 mb-0">Padding-Left Values</h6>
								<div class="table-responsive">
									<table class="table main-table-reference text-nowrap mg-t-10 mb-0">
										<tbody>
											<tr>
												<td class="bg-gray-100 wd-20p"><b>Classes</b></td>
												<td><code>.pd-l-[value]</code></td>
											</tr>
											<tr>
												<td class="bg-gray-100 wd-20p"><b>Values</b></td>
												<td>1 | 2 | 3 | 4 | 5 | 6 | 7 | 8 | 9 | 10</td>
											</tr>
											<tr>
												<td class="bg-gray-100 wd-20p"><b>Bigger Values</b></td>
												<td>15 | 20 | 25 | 30 | ... | 120 &nbsp; (step of 5)</td>
											</tr>
											<tr>
												<td class="bg-gray-100 wd-20p"><b>Even Bigger Values</b></td>
												<td>110 | 120 | 130 | 140 | ... | 200 &nbsp; (step of 10)</td>
											</tr>
										</tbody>
									</table>
								</div>
								<h6 class="mg-t-25 mb-0">Padding-right Values</h6>
								<div class="table-responsive">
									<table class="table main-table-reference text-nowrap mg-t-10 mb-0">
										<tbody>
											<tr>
												<td class="bg-gray-100 wd-20p"><b>Classes</b></td>
												<td><code>.pd-r-[value]</code></td>
											</tr>
											<tr>
												<td class="bg-gray-100 wd-20p"><b>Values</b></td>
												<td>1 | 2 | 3 | 4 | 5 | 6 | 7 | 8 | 9 | 10</td>
											</tr>
											<tr>
												<td class="bg-gray-100 wd-20p"><b>Bigger Values</b></td>
												<td>15 | 20 | 25 | 30 | ... | 120 &nbsp; (step of 5)</td>
											</tr>
											<tr>
												<td class="bg-gray-100 wd-20p"><b>Even Bigger Values</b></td>
												<td>110 | 120 | 130 | 140 | ... | 200 &nbsp; (step of 10)</td>
											</tr>
										</tbody>
									</table>
								</div>
								<h6 class="mg-t-25 mb-0">Padding-bottom Values</h6>
								<div class="table-responsive">
									<table class="table main-table-reference text-nowrap mg-t-10 mb-0">
										<tbody>
											<tr>
												<td class="bg-gray-100 wd-20p"><b>Classes</b></td>
												<td><code>.pd-b-[value]</code></td>
											</tr>
											<tr>
												<td class="bg-gray-100 wd-20p"><b>Values</b></td>
												<td>1 | 2 | 3 | 4 | 5 | 6 | 7 | 8 | 9 | 10</td>
											</tr>
											<tr>
												<td class="bg-gray-100 wd-20p"><b>Bigger Values</b></td>
												<td>15 | 20 | 25 | 30 | ... | 120 &nbsp; (step of 5)</td>
											</tr>
											<tr>
												<td class="bg-gray-100 wd-20p"><b>Even Bigger Values</b></td>
												<td>110 | 120 | 130 | 140 | ... | 200 &nbsp; (step of 10)</td>
											</tr>
										</tbody>
									</table>
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
									Media Query Padding
								</div>
								<p class="mg-b-20">It is very easy to customize and it uses in website applications.</p>
								<div class="table-responsive">
									<table class="table main-table-reference text-nowrap mg-t-0 mg-b-0">
										<thead>
											<tr>
												<th class="wd-30p">Class</th>
												<th class="wd-70p">Value</th>
											</tr>
										</thead>
										<tbody>
											<tr>
												<td><code>.pd-[size]-t-[value]<br>
												.pd-[size]-r-[value]<br>
												.pd-[size]-b-[value]<br>
												.pd-[size]-l-[value]</code></td>
												<td>
													<p class="mg-b-5">size: xs | sm | md | lg | xl</p>
													<p class="mg-b-0">value: the padding value (refer to code above)</p>
												</td>
											</tr>
										</tbody>
									</table>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- row closed -->

@endsection

@section('script')
@endsection
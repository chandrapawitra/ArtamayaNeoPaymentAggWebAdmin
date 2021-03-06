@extends('layouts.app')

@section('style')
@endsection

@section('content')

			<!-- breadcrumb -->
			<div class="breadcrumb-header justify-content-between">
				<div class="my-auto">
					<div class="d-flex">
						<h4 class="content-title mb-0 my-auto">Utilities</h4><span class="text-muted mt-1 tx-13 ml-2 mb-0">/ Extras</span>
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
								Opacity
							</div>
							<p class="mg-b-20">It is very easy to customize and it uses in website applications.</p>
							<div class="table-responsive mg-t-20 mb-0">
								<table class="table main-table-reference text-nowrap mg-t-0">
									<tbody>
										<tr>
											<td class="bg-gray-100 wd-20p"><b>Classes</b></td>
											<td><code>.op-[value]</code></td>
										</tr>
										<tr>
											<td class="bg-gray-100 wd-20p"><b>Values</b></td>
											<td>0 | 1 | 2 | 3 | 4 | 5 | 6 | 7 | 8 | 9</td>
										</tr>
									</tbody>
								</table>
							</div>
							<div class="table-responsive mg-t-20 mb-0">
								<table class="table main-table-reference text-nowrap mg-t-0 mg-b-0">
									<tbody>
										<tr>
											<td class="bg-gray-100 wd-20p"><b>Classes</b></td>
											<td><code>.op-[breakpoint]-[value]</code></td>
										</tr>
										<tr>
											<td class="bg-gray-100 wd-20p"><b>Values</b></td>
											<td>
												<p class="mg-b-5">breakpoint: xs | sm | md | lg | xl</p>
												<p class="mg-b-0">value: 0 | 1 | 2 | 3 | 4 | 5 | 6 | 7 | 8 | 9</p>
											</td>
										</tr>
									</tbody>
								</table>
							</div>
						</div>
					</div>
				</div><!--/div-->
				<!--div-->
				<div class="col-md-12 col-xl-12 col-xs-12 col-sm-12">
					<div class="card">
						<div class="card-body">
							<div class="main-content-label mg-b-5">
								Shadow
							</div>
							<p class="mg-b-20">It is very easy to customize and it uses in website applications.</p>
							<div class="table-responsive mg-t-20 mb-0">
								<table class="table main-table-reference text-nowrap mg-t-0 mb-0">
									<tbody>
										<tr>
											<td class="bg-gray-100 wd-20p"><b>Classes</b></td>
											<td><code>.shadow-base</code></td>
											<td><code>.shadow-none</code></td>
										</tr>
										<tr>
											<td class="bg-gray-100 wd-20p"><b>Values</b></td>
											<td>Add shadow to any box element.</td>
											<td>Remove shadow to any box element.</td>
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
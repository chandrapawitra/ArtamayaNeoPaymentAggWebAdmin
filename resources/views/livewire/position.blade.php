@extends('layouts.app')

@section('style')
@endsection

@section('content')

				<!-- breadcrumb -->
				<div class="breadcrumb-header justify-content-between">
					<div class="my-auto">
						<div class="d-flex">
							<h4 class="content-title mb-0 my-auto">Utilities</h4><span class="text-muted mt-1 tx-13 ml-2 mb-0">/ Position</span>
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
									Set Position
								</div>
								<p class="mg-b-20">It is very easy to customize and it uses in website applications.</p>
								<div class="table-responsive">
									<table class="table main-table-reference text-nowrap mg-t-0 mb-0">
										<thead>
											<tr>
												<th class="wd-30p">Class</th>
												<th class="wd-70p">Value</th>
											</tr>
										</thead>
										<tbody>
											<tr>
												<td><code>.pos-relative</code></td>
												<td>Set a relative position to an element.</td>
											</tr>
											<tr>
												<td><code>.pos-absolute</code></td>
												<td>Set an absolute position to an element.</td>
											</tr>
											<tr>
												<td><code>.pos-fixed</code></td>
												<td>Set a fixed position to an element.</td>
											</tr>
											<tr>
												<td><code>.pos-static</code></td>
												<td>Set a static position to an element.</td>
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
									Cornering
								</div>
								<p class="mg-b-20">It is very easy to customize and it uses in website applications.</p>
								<div class="table-responsive">
									<table class="table main-table-reference  text-nowrap mg-t-0 mb-0">
										<thead>
											<tr>
												<th class="wd-30p">Class</th>
												<th class="wd-70p">Value</th>
											</tr>
										</thead>
										<tbody>
											<tr>
												<td><code>.t-[value]</code></td>
												<td>0 | 5 | 10 | 15 | ... | 100 (step of 5)</td>
											</tr>
											<tr>
												<td><code>.r-[value]</code></td>
												<td>0 | 5 | 10 | 15 | ... | 100 (step of 5)</td>
											</tr>
											<tr>
												<td><code>.b-[value]</code></td>
												<td>0 | 5 | 10 | 15 | ... | 100 (step of 5)</td>
											</tr>
											<tr>
												<td><code>.l-[value]</code></td>
												<td>0 | 5 | 10 | 15 | ... | 100 (step of 5)</td>
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
									X and Y Position
								</div>
								<p class="mg-b-20">It is very easy to customize and it uses in website applications.</p>
								<div class="table-responsive">
									<table class="table main-table-reference text-nowrap mg-t-0 mb-0">
										<thead>
											<tr>
												<th class="wd-30p">Class</th>
												<th class="wd-70p">Value</th>
											</tr>
										</thead>
										<tbody>
											<tr>
												<td><code>.t-[value]</code></td>
												<td>0 | 5 | 10 | 15 | ... | 100 (step of 5)</td>
											</tr>
											<tr>
												<td><code>.r-[value]</code></td>
												<td>0 | 5 | 10 | 15 | ... | 100 (step of 5)</td>
											</tr>
											<tr>
												<td><code>.b-[value]</code></td>
												<td>0 | 5 | 10 | 15 | ... | 100 (step of 5)</td>
											</tr>
											<tr>
												<td><code>.l-[value]</code></td>
												<td>0 | 5 | 10 | 15 | ... | 100 (step of 5)</td>
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
									Negative Corner
								</div>
								<p class="mg-b-20">It is very easy to customize and it uses in website applications.</p>
								<div class="table-responsive">
									<table class="table main-table-reference text-nowrap mg-t-0 mb-0">
										<thead>
											<tr>
												<th class="wd-30p">Class</th>
												<th class="wd-70p">Value</th>
											</tr>
										</thead>
										<tbody>
											<tr>
												<td><code>.t--[value]</code></td>
												<td>0 | 5 | 10 | 15 | ... | 100 (step of 5)</td>
											</tr>
											<tr>
												<td><code>.r--[value]</code></td>
												<td>0 | 5 | 10 | 15 | ... | 100 (step of 5)</td>
											</tr>
											<tr>
												<td><code>.b--[value]</code></td>
												<td>0 | 5 | 10 | 15 | ... | 100 (step of 5)</td>
											</tr>
											<tr>
												<td><code>.l--[value]</code></td>
												<td>0 | 5 | 10 | 15 | ... | 100 (step of 5)</td>
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
									Z-Index Property
								</div>
								<p class="mg-b-20">It is very easy to customize and it uses in website applications.</p>
								<div class="table-responsive">
									<table class="table main-table-reference mg-t-0 mb-0">
										<thead>
											<tr>
												<th class="wd-30p">Class</th>
												<th class="wd-70p">Value</th>
											</tr>
										</thead>
										<tbody>
											<tr>
												<td><code>.z-index-[value]</code></td>
												<td>10 | 50 | 100 | 150 | 200</td>
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
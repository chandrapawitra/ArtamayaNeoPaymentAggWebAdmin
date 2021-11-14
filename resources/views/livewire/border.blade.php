@extends('layouts.app')

@section('style')
@endsection

@section('content')

			<!-- breadcrumb -->
			<div class="breadcrumb-header justify-content-between">
				<div class="my-auto">
					<div class="d-flex">
						<h4 class="content-title mb-0 my-auto">Utilities</h4><span class="text-muted mt-1 tx-13 ml-2 mb-0">/ Border</span>
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
								Set Border
							</div>
							<p class="mg-b-20">It is very easy to customize and it uses in website applications.</p>
							<div class="d-flex">
								<div class="wd-80 ht-80 bg-gray-100 bd bd-2"></div>
								<div class="wd-80 ht-80 bg-gray-100 mg-l-10 bd-t bd-2"></div>
								<div class="wd-80 ht-80 bg-gray-100 mg-l-10 bd-r bd-2"></div>
								<div class="wd-80 ht-80 bg-gray-100 mg-l-10 bd-b bd-2"></div>
								<div class="wd-80 ht-80 bg-gray-100 mg-l-10 bd-l bd-2"></div>
								<div class="wd-80 ht-80 bg-gray-100 mg-l-10 bd-y bd-2"></div>
								<div class="wd-80 ht-80 bg-gray-100 mg-l-10 bd-x bd-2"></div>
							</div>
							<div class="table-responsive mg-t-25">
								<table class="table main-table-reference text-nowrap mg-b-0 mg-t-10">
									<thead>
										<tr>
											<th class="wd-30p">Class</th>
											<th class="wd-70p">Description</th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<td><code class="pd-0 bg-transparent">class="bd"</code></td>
											<td>Add border in all sides of an element using default color and width.</td>
										</tr>
										<tr>
											<td><code class="pd-0 bg-transparent">class="bd-t"</code></td>
											<td>Add border to top side of element.</td>
										</tr>
										<tr>
											<td><code class="pd-0 bg-transparent">class="bd-r"</code></td>
											<td>Add border to right side of element.</td>
										</tr>
										<tr>
											<td><code class="pd-0 bg-transparent">class="bd-b"</code></td>
											<td>Add border to bottom side of element.</td>
										</tr>
										<tr>
											<td><code class="pd-0 bg-transparent">class="bd-l"</code></td>
											<td>Add border to left side of element.</td>
										</tr>
										<tr>
											<td><code class="pd-0 bg-transparent">class="bd-x"</code></td>
											<td>Add border to left and right side of element.</td>
										</tr>
										<tr>
											<td><code class="pd-0 bg-transparent">class="bd-y"</code></td>
											<td>Add border to top and bottom side of element.</td>
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
								Border Sizes
							</div>
							<p class="mg-b-20">It is very easy to customize and it uses in website applications.</p>
							<div class="d-flex">
								<div class="wd-80 ht-80 bg-gray-100 bd"></div>
								<div class="wd-80 ht-80 bg-gray-100 mg-l-10 bd bd-2"></div>
								<div class="wd-80 ht-80 bg-gray-100 mg-l-10 bd bd-3"></div>
								<div class="wd-80 ht-80 bg-gray-100 mg-l-10 bd bd-4"></div>
								<div class="wd-80 ht-80 bg-gray-100 mg-l-10 bd bd-5"></div>
							</div>
							<div class="table-responsive mg-t-25">
								<table class="table main-table-reference text-nowrap mg-b-0 mg-t-10">
									<thead>
										<tr>
											<th class="wd-30p">Class</th>
											<th class="wd-70p">Description</th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<td><code class="pd-0 bg-transparent">class="bd"</code></td>
											<td>Set 1px (default) border to element.</td>
										</tr>
										<tr>
											<td><code class="pd-0 bg-transparent">class="bd bd-2"</code></td>
											<td>Set 2px border to element.</td>
										</tr>
										<tr>
											<td><code class="pd-0 bg-transparent">class="bd bd-3"</code></td>
											<td>Set 3px border to element.</td>
										</tr>
										<tr>
											<td><code class="pd-0 bg-transparent">class="bd bd-4"</code></td>
											<td>Set 4px border to element.</td>
										</tr>
										<tr>
											<td><code class="pd-0 bg-transparent">class="bd bd-5"</code></td>
											<td>Set 5px border to element.</td>
										</tr>
									</tbody>
								</table>
							</div>
						</div>
					</div>
				</div><!--/div-->
				<div class="col-md-12 col-xl-12 col-xs-12 col-sm-12">
					<div class="card mg-b-20">
						<div class="card-body">
							<div class="main-content-label mg-b-5">
								Remove Border
							</div>
							<p class="mg-b-20">It is very easy to customize and it uses in website applications.</p>
							<div class="d-flex">
								<div class="wd-80 ht-80 bg-gray-100 bd bd-2 bd-t-0"></div>
								<div class="wd-80 ht-80 bg-gray-100 mg-l-10 bd bd-2 bd-r-0"></div>
								<div class="wd-80 ht-80 bg-gray-100 mg-l-10 bd bd-2 bd-b-0"></div>
								<div class="wd-80 ht-80 bg-gray-100 mg-l-10 bd bd-2 bd-l-0"></div>
								<div class="wd-80 ht-80 bg-gray-100 mg-l-10 bd bd-2 bd-x-0"></div>
								<div class="wd-80 ht-80 bg-gray-100 mg-l-10 bd bd-2 bd-y-0"></div>
							</div>
							<div class="table-responsive mg-t-25">
								<table class="table main-table-reference text-nowrap mg-b-0 mg-t-10">
									<thead>
										<tr>
											<th class="wd-30p">Class</th>
											<th class="wd-70p">Description</th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<td><code class="pd-0 bg-transparent">.bd-t-0</code></td>
											<td>Remove top border of an element</td>
										</tr>
										<tr>
											<td><code class="pd-0 bg-transparent">.bd-r-0</code></td>
											<td>Remove right border of an element</td>
										</tr>
										<tr>
											<td><code class="pd-0 bg-transparent">.bd-b-0</code></td>
											<td>Remove bottom border of an element</td>
										</tr>
										<tr>
											<td><code class="pd-0 bg-transparent">.bd-l-0</code></td>
											<td>Remove left border of an element</td>
										</tr>
										<tr>
											<td><code class="pd-0 bg-transparent">.bd-x-0</code></td>
											<td>Remove left and right border of an element</td>
										</tr>
										<tr>
											<td><code class="pd-0 bg-transparent">.bd-y-0</code></td>
											<td>Remove top and bottom border of an element</td>
										</tr>
										<tr>
											<td><code class="pd-0 bg-transparent">.bd-[t||r|bl|x|y]-0-f</code></td>
											<td>Force remove border of any side of an element.</td>
										</tr>
									</tbody>
								</table>
							</div>
						</div>
					</div>
				</div><!--/div-->
				<div class="col-md-12 col-xl-12 col-xs-12 col-sm-12">
					<div class="card">
						<div class="card-body">
							<div class="main-content-label mg-b-5">
								Border Color
							</div>
							<p class="mg-b-20">It is very easy to customize and it uses in website applications.</p>
							<div class="d-flex mg-b-40">
								<div class="wd-80 ht-80 bd bd-2 bd-primary"></div>
								<div class="wd-80 ht-80 mg-l-10 bd bd-2 bd-success"></div>
								<div class="wd-80 ht-80 mg-l-10 bd bd-2 bd-warning"></div>
								<div class="wd-80 ht-80 mg-l-10 bd bd-2 bd-danger"></div>
								<div class="wd-80 ht-80 mg-l-10 bd bd-2 bd-info"></div>
								<div class="wd-80 ht-80 mg-l-10 bd bd-2 bd-gray-500"></div>
							</div>
							<div class="table-responsive mg-t-20 mb-0">
								<table class="table main-table-reference text-nowrap mg-b-0 mg-t-0">
									<tbody>
										<tr>
											<td class="bg-gray-100 wd-20p"><b>Classes</b></td>
											<td><code class="pd-0 bg-transparent">.bd-[value]</code></td>
											<td><code class="pd-0 bg-transparent">.bd-gray-[value]</code></td>
										</tr>
										<tr>
											<td class="bg-gray-100 wd-20p"><b>Values</b></td>
											<td>primary | success | warning | danger | info | indigo | purple | pink | teal | orange</td>
											<td>100 | 200 | 300 | 400 | 500 | 600 | 700 | 800 | 900</td>
										</tr>
									</tbody>
								</table>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-12 col-xl-12 col-xs-12 col-sm-12">
					<div class="card">
						<div class="card-body">
							<div class="main-content-label mg-b-5">
								Border Radius
							</div>
							<p class="mg-b-20">It is very easy to customize and it uses in website applications.</p>
							<div class="d-flex">
								<div class="wd-80 ht-80 bd bd-gray-500 rounded"></div>
								<div class="wd-80 ht-80 mg-l-10 bd bd-gray-500 rounded-5"></div>
								<div class="wd-80 ht-80 mg-l-10 bd bd-gray-500 rounded-10"></div>
								<div class="wd-80 ht-80 mg-l-10 bd bd-gray-500 rounded-20"></div>
								<div class="wd-80 ht-80 mg-l-10 bd bd-gray-500 rounded-30"></div>
								<div class="wd-80 ht-80 mg-l-10 bd bd-gray-500 rounded-circle"></div>
							</div>
							<div class="table-responsive mg-t-20 mb-0">
								<table class="table main-table-reference text-nowrap mg-b-0 mg-t-0">
									<tbody>
										<tr>
											<td class="bg-gray-100 wd-20p"><b>Classes</b></td>
											<td><code class="pd-0 bg-transparent">.rounded</code></td>
											<td><code class="pd-0 bg-transparent">.rounded-[value]</code></td>
										</tr>
										<tr>
											<td class="bg-gray-100 wd-20p"><b>Values</b></td>
											<td>Set a border radius of 2px (default) to an element.</td>
											<td>5 | 10 | 20 | 30 | 40 | 50 | circle</td>
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
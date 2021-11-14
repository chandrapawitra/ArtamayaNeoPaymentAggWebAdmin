@extends('layouts.app')

@section('style')
@endsection

@section('content')

				<!-- breadcrumb -->
				<div class="breadcrumb-header justify-content-between">
					<div class="my-auto">
						<div class="d-flex">
							<h4 class="content-title mb-0 my-auto">Pages</h4><span class="text-muted mt-1 tx-13 ml-2 mb-0">/ Invoice</span>
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
					<div class="col-md-12 col-xl-4">
						<div class=" main-content-body-invoice">
							<div class="card card-invoice">
								<div class="card-header pl-3 pr-3 pt-3 pb-0">
									<h2 class="card-title">My Invoices</h2>
								</div>
								<div class="p-0">
									<div class="main-invoice-list" id="mainInvoiceList">
										<div class="media">
											<div class="media-icon">
												<i class="far fa-file-alt"></i>
											</div>
											<div class="media-body">
												<h6><span>Invoice002300</span> <span>$25</span></h6>
												<div>
													<p><span>Date:</span> Oct 25</p>
													<p><span>Product:</span> 921021</p>
												</div>
											</div>
										</div>
										<div class="media selected">
											<div class="media-icon">
												<i class="far fa-file-alt"></i>
											</div>
											<div class="media-body">
												<h6><span>Invoice002299</span> <span>$16</span></h6>
												<div>
													<p><span>Date:</span> Oct 25</p>
													<p><span>Product:</span> 435423</p>
												</div>
											</div>
										</div>
										<div class="media">
											<div class="media-icon">
												<i class="far fa-file-alt"></i>
											</div>
											<div class="media-body">
												<h6><span>Invoice002300</span> <span>$32</span></h6>
												<div>
													<p><span>Date:</span> Oct 25</p>
													<p><span>Product:</span> 921021</p>
												</div>
											</div>
										</div>
										<div class="media">
											<div class="media-icon">
												<i class="far fa-file-alt"></i>
											</div>
											<div class="media-body">
												<h6><span>Invoice002300</span> <span>$18</span></h6>
												<div>
													<p><span>Date:</span> Oct 25</p>
													<p><span>Product:</span> 921021</p>
												</div>
											</div>
										</div>
										<div class="media">
											<div class="media-icon">
												<i class="far fa-file-alt"></i>
											</div>
											<div class="media-body">
												<h6><span>Invoice002300</span> <span>$25</span></h6>
												<div>
													<p><span>Date:</span> Oct 25</p>
													<p><span>Product:</span> 921021</p>
												</div>
											</div>
										</div>
										<div class="media">
											<div class="media-icon">
												<i class="far fa-file-alt"></i>
											</div>
											<div class="media-body">
												<h6><span>Invoice002299</span> <span>$16</span></h6>
												<div>
													<p><span>Date:</span> Oct 25</p>
													<p><span>Product:</span> 435423</p>
												</div>
											</div>
										</div>
										<div class="media">
											<div class="media-icon">
												<i class="far fa-file-alt"></i>
											</div>
											<div class="media-body">
												<h6><span>Invoice002300</span> <span>$32</span></h6>
												<div>
													<p><span>Date:</span> Oct 25</p>
													<p><span>Product:</span> 921021</p>
												</div>
											</div>
										</div>
										<div class="media">
											<div class="media-icon">
												<i class="far fa-file-alt"></i>
											</div>
											<div class="media-body">
												<h6><span>Invoice002300</span> <span>$18</span></h6>
												<div>
													<p><span>Date:</span> Oct 25</p>
													<p><span>Product:</span> 921021</p>
												</div>
											</div>
										</div>
										<div class="media">
											<div class="media-icon">
												<i class="far fa-file-alt"></i>
											</div>
											<div class="media-body">
												<h6><span>Invoice002300</span> <span>$25</span></h6>
												<div>
													<p><span>Date:</span> Oct 25</p>
													<p><span>Product:</span> 921021</p>
												</div>
											</div>
										</div>
										<div class="media">
											<div class="media-icon">
												<i class="far fa-file-alt"></i>
											</div>
											<div class="media-body">
												<h6><span>Invoice002299</span> <span>$16</span></h6>
												<div>
													<p><span>Date:</span> Oct 25</p>
													<p><span>Product:</span> 435423</p>
												</div>
											</div>
										</div>
										<div class="media">
											<div class="media-icon">
												<i class="far fa-file-alt"></i>
											</div>
											<div class="media-body">
												<h6><span>Invoice002300</span> <span>$32</span></h6>
												<div>
													<p><span>Date:</span> Oct 25</p>
													<p><span>Product:</span> 921021</p>
												</div>
											</div>
										</div>
										<div class="media">
											<div class="media-icon">
												<i class="far fa-file-alt"></i>
											</div>
											<div class="media-body">
												<h6><span>Invoice002300</span> <span>$18</span></h6>
												<div>
													<p><span>Date:</span> Oct 25</p>
													<p><span>Product:</span> 921021</p>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div><!-- main-invoice-list -->
					<div class="col-md-12 col-xl-8">
						<div class=" main-content-body-invoice">
							<div class="card card-invoice">
								<div class="card-body">
									<div class="invoice-header">
										<h1 class="invoice-title">Invoice</h1>
										<div class="billed-from">
											<h6>BootstrapDash, Inc.</h6>
											<p>201 Something St., Something Town, YT 242, Country 6546<br>
											Tel No: 324 445-4544<br>
											Email: youremail@companyname.com</p>
										</div><!-- billed-from -->
									</div><!-- invoice-header -->
									<div class="row mg-t-20">
										<div class="col-md">
											<label class="tx-gray-600">Billed To</label>
											<div class="billed-to">
												<h6>Juan Dela Cruz</h6>
												<p>4033 Patterson Road, Staten Island, NY 10301<br>
												Tel No: 324 445-4544<br>
												Email: youremail@companyname.com</p>
											</div>
										</div>
										<div class="col-md">
											<label class="tx-gray-600">Invoice Information</label>
											<p class="invoice-info-row"><span>Invoice No</span> <span>GHT-673-00</span></p>
											<p class="invoice-info-row"><span>Project ID</span> <span>32334300</span></p>
											<p class="invoice-info-row"><span>Issue Date:</span> <span>November 21, 2017</span></p>
											<p class="invoice-info-row"><span>Due Date:</span> <span>November 30, 2017</span></p>
										</div>
									</div>
									<div class="table-responsive mg-t-40">
										<table class="table table-invoice border text-md-nowrap mb-0">
											<thead>
												<tr>
													<th class="wd-20p">Type</th>
													<th class="wd-40p">Description</th>
													<th class="tx-center">QNTY</th>
													<th class="tx-right">Unit Price</th>
													<th class="tx-right">Amount</th>
												</tr>
											</thead>
											<tbody>
												<tr>
													<td>Website Design</td>
													<td class="tx-12">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam...</td>
													<td class="tx-center">2</td>
													<td class="tx-right">$150.00</td>
													<td class="tx-right">$300.00</td>
												</tr>
												<tr>
													<td>Firefox Plugin</td>
													<td class="tx-12">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque...</td>
													<td class="tx-center">1</td>
													<td class="tx-right">$1,200.00</td>
													<td class="tx-right">$1,200.00</td>
												</tr>
												<tr>
													<td>iPhone App</td>
													<td class="tx-12">Et harum quidem rerum facilis est et expedita distinctio</td>
													<td class="tx-center">2</td>
													<td class="tx-right">$850.00</td>
													<td class="tx-right">$1,700.00</td>
												</tr>
												<tr>
													<td>Android App</td>
													<td class="tx-12">Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut</td>
													<td class="tx-center">3</td>
													<td class="tx-right">$850.00</td>
													<td class="tx-right">$2,550.00</td>
												</tr>
												<tr>
													<td class="valign-middle" colspan="2" rowspan="4">
														<div class="invoice-notes">
															<label class="main-content-label tx-13">Notes</label>
															<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
														</div><!-- invoice-notes -->
													</td>
													<td class="tx-right">Sub-Total</td>
													<td class="tx-right" colspan="2">$5,750.00</td>
												</tr>
												<tr>
													<td class="tx-right">Tax (5%)</td>
													<td class="tx-right" colspan="2">$287.50</td>
												</tr>
												<tr>
													<td class="tx-right">Discount</td>
													<td class="tx-right" colspan="2">-$50.00</td>
												</tr>
												<tr>
													<td class="tx-right tx-uppercase tx-bold tx-inverse">Total Due</td>
													<td class="tx-right" colspan="2">
														<h4 class="tx-primary tx-bold">$5,987.50</h4>
													</td>
												</tr>
											</tbody>
										</table>
									</div>
									<a class="btn btn-primary mg-t-40 float-right" href="">Pay Now</a>
								</div>
							</div>
						</div>
					</div><!-- COL-END -->
				</div>
				<!-- row closed -->

@endsection

@section('script')

		<!-- Chart.bundle js -->
		<script src="{{URL::asset('assets/plugins/chart.js/Chart.bundle.min.js')}}"></script>

@endsection
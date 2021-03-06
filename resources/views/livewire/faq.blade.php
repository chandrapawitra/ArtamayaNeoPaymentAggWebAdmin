@extends('layouts.app')

@section('style')
@endsection

@section('content')

				<!-- breadcrumb -->
				<div class="breadcrumb-header justify-content-between">
					<div class="my-auto">
						<div class="d-flex">
							<h4 class="content-title mb-0 my-auto">Pages</h4><span class="text-muted mt-1 tx-13 ml-2 mb-0">/ Faqs</span>
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
					<div class="col-md-12">
						<div class="card">
							<div class="card-body">
								<h4 class="font-weight-semibold tx-15">How To Insert All The Plugins?</h4>
								<p class="text-muted mb-0 tx-13">I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth, the master-builder of human happiness. No one rejects, dislikes, or avoids pleasure itself, because it is pleasure, but because those who do not know how to pursue pleasure rationally encounter consequences</p>
							</div>
							<div class="card-body ">
								<h4 class="font-weight-semibold tx-15">How Can I contact?</h4>
								<p class="text-muted mb-0 tx-13">I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth, the master-builder of human happiness. No one rejects, dislikes, or avoids pleasure itself, because it is pleasure, but because those who do not know how to pursue pleasure rationally encounter consequences</p>
							</div>
							<div class="card-body">
								<h4 class="font-weight-semibold tx-15">Can I use this Plugins in Another Template?</h4>
								<p class="text-muted mb-0 tx-13">I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth, the master-builder of human happiness. No one rejects, dislikes, or avoids pleasure itself, because it is pleasure, but because those who do not know how to pursue pleasure rationally encounter consequences</p>
							</div>
							<div class="card-body ">
								<h4 class="font-weight-semibold tx-15">How Can I Add another page in Template?</h4>
								<p class="text-muted mb-0 tx-13">I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth, the master-builder of human happiness. No one rejects, dislikes, or avoids pleasure itself, because it is pleasure, but because those who do not know how to pursue pleasure rationally encounter consequences</p>
							</div>
							<div class="card-body">
								<h4 class="font-weight-semibold tx-15">It is Easy to Customizable?</h4>
								<p class="text-muted mb-0 tx-13">I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth, the master-builder of human happiness. No one rejects, dislikes, or avoids pleasure itself, because it is pleasure, but because those who do not know how to pursue pleasure rationally encounter consequences</p>
							</div>
							<div class="card-body ">
								<h4 class="font-weight-semibold tx-15">How can I download This template?</h4>
								<p class="text-muted mb-0 tx-13">I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth, the master-builder of human happiness. No one rejects, dislikes, or avoids pleasure itself, because it is pleasure, but because those who do not know how to pursue pleasure rationally encounter consequences</p>
							</div>
						</div>
					</div>
				</div>
				<!-- row closed -->

@endsection

@section('script')

		<!-- Chart.bundle js -->
		<script src="{{URL::asset('assets/plugins/chart.js/Chart.bundle.min.js')}}"></script>

@endsection
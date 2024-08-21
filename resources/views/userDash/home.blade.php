@extends('userDash.include')
@section('userDash')
<div class="content-body">
	<div class="container-fluid mt-3">

		<div class="row">
			@if($userType == "business")
			<div class="col-lg-3 col-sm-6">
				<div class="card cardnew">
					<div class="card-body p-4">
						<h3 class="card-title text-white">ট্রেড লাইসেন্স</h3>
						<div class="d-inline-block">
							<h2 class="text-white font-weight-bold">০০</h2>
						</div>
						<span class="float-right display-5  text-white"><i class="fa fa-book"></i></span>
					</div>
				</div>
			</div>

			<div class="col-lg-3 col-sm-6">
				<div class="card cardnew">
					<div class="card-body p-4">
						<h3 class="card-title text-white">ব্যবসায় নিবন্ধন</h3>
						<div class="d-inline-block">
							<h2 class="text-white font-weight-bold">০০</h2>
						</div>
						<span class="float-right display-5  text-white"><i class="fa fa-book"></i></span>

					</div>
				</div>
			</div>
			@endif
			
			@if($userType == "generalCustomer")
			<div class="col-lg-3 col-sm-6">
				<div class="card cardnew">
					<div class="card-body p-4">
						<h3 class="card-title text-white">ওয়ারিশ সনদ</h3>
						<div class="d-inline-block">
							<h2 class="text-white font-weight-bold">০০</h2>
						</div>
						<span class="float-right display-5  text-white"><i class="fa fa-book"></i></span>
					</div>
				</div>
			</div>

			<div class="col-lg-3 col-sm-6">
				<div class="card cardnew">
					<div class="card-body p-4">
						<h3 class="card-title text-white">পারিবারিক সনদ</h3>
						<div class="d-inline-block">
							<h2 class="text-white font-weight-bold">০০</h2>
						</div>
						<span class="float-right display-5  text-white"><i class="fa fa-book"></i></span>
					</div>
				</div>
			</div>

			<div class="col-lg-3 col-sm-6">
				<div class="card cardnew">
					<div class="card-body p-4">
						<h3 class="card-title text-white">বিবিধ সনদ</h3>
						<div class="d-inline-block">
							<h2 class="text-white font-weight-bold">০০</h2>
						</div>
						<span class="float-right display-5  text-white"><i class="fa fa-book"></i></span>
					</div>
				</div>
			</div>

			<div class="col-lg-3 col-sm-6">
				<div class="card cardnew">
					<div class="card-body p-4">
						<h3 class="card-title text-white">কর আদায়ের তথ্য</h3>
						<div class="d-inline-block">
							<h2 class="text-white font-weight-bold">০০</h2>
						</div>
						<span class="float-right display-5  text-white"><i class="fa fa-book"></i></span>
					</div>
				</div>
			</div>
			@endif

			@if($userType == "commercialHolding")
			<div class="col-lg-3 col-sm-6">
				<div class="card cardnew">
					<div class="card-body p-4">
						<h3 class="card-title text-white">ট্রেড লাইসেন্স</h3>
						<div class="d-inline-block">
							<h2 class="text-white font-weight-bold">০০</h2>
						</div>
						<span class="float-right display-5  text-white"><i class="fa fa-book"></i></span>
					</div>
				</div>
			</div>

			<div class="col-lg-3 col-sm-6">
				<div class="card cardnew">
					<div class="card-body p-4">
						<h3 class="card-title text-white">ট্রেড লাইসেন্স</h3>
						<div class="d-inline-block">
							<h2 class="text-white font-weight-bold">০০</h2>
						</div>
						<span class="float-right display-5  text-white"><i class="fa fa-book"></i></span>
					</div>
				</div>
			</div>

			<div class="col-lg-3 col-sm-6">
				<div class="card cardnew">
					<div class="card-body p-4">
						<h3 class="card-title text-white">ট্রেড লাইসেন্স</h3>
						<div class="d-inline-block">
							<h2 class="text-white font-weight-bold">০০</h2>
						</div>
						<span class="float-right display-5  text-white"><i class="fa fa-book"></i></span>
					</div>
				</div>
			</div>
			@endif

		</div>
	</div>
</div>
@endsection
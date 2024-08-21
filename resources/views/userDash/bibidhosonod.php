<?php
include 'header.php';
?>


<div class="content-body">
	<div class="container-fluid mt-3">



		<div class="col-lg-12">
			<div class="card">
				<div class="card-body">
					<h4 class="card-title"><b>বিবিধ সনদের আবেদন</b></h4><br>


					<form action="" method="post" enctype="multipart/form-data">
						<div class="card-box formbox">

							<div class="row">
								<div class="col-md-12 pagebox">
									<div class="card-box">

										<div class="form-group row">
											<label class="col-md-2 col-form-label">  প্রত্যয়নপত্রের  ধরন  </label>
											<div class="col-md-10">
												<select name="sonod_type" required id="bbsonod_type" class="form-control">
													<option value="">--Select --</option>
													<option value="22"> আবেদনকৃত ভোটারের তথ্য যাচাই-বাচাই প্রতিবেদন </option>
													<option value="29"> শারিরক অসুস্থ্যতার প্রত্যয়ন পত্র </option>
													<option value="30"> মৃত ব্যক্তির প্রত্যয়ন পত্র </option>
												</select>
												</div>
											</div>

											<div id="bbsonod_details">
												<div class="form-group row">
													<label class="col-md-2 col-form-label">সনদের শিরোনাম </label>
													<div class="col-md-10">
														<input type="text" readonly required class="form-control">
													</div>
												</div>

												<div class="form-group row">
													<label class="col-md-2 col-form-label">বিবরণ  </label>
													<div class="col-md-10">
														<textarea type="text" name="details" required class="form-control" rows="4"></textarea>
													</div>
												</div>
											</div>
											
										</div>
									</div>
								</div>
								
								<div class="text-center">
									<button type="submit" class="btn btn-primary submit-btn">সাবমিট</button>
								</div>

							</div>
						</form>




					</div>
				</div>
			</div>






		</div>
	</div>





	<?php
	include 'footer.php';
	?>

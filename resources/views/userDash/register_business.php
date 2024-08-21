<?php
include 'header.php';
?>


<div class="content-body">
	<div class="container-fluid mt-3">



		<div class="col-lg-12">
			<div class="card">
				<div class="card-body">
					<h4 class="card-title"><b>ব্যবসায় নিবন্ধন করুন</b></h4><br>


					<form action="includes/business_trade_inc_code.php" method="post">
						<input type="hidden" name="date" class="form-control" placeholder="Date" value="2024-07-17">
						<div class="card-box">
							<div class="row">
								<div class="col-md-6">
									<div class="card-box">
										<h4 class="ttle2"> ব্যক্তিগত তথ্য</h4><hr>
										<div class="form-group row">
											<label class="col-md-3 col-form-label">মালিকের নাম </label>
											<div class="col-md-9">
												<input type="text" name="name" required class="form-control">
											</div>
										</div>
										<div class="form-group row">
											<label class="col-md-3 col-form-label">এন আই ডি</label>
											<div class="col-md-9">
												<input type="number"name="nid" required class="form-control">
											</div>
										</div>
										<div class="form-group row">
											<label class="col-md-3 col-form-label">মোবাইল নম্বর</label>
											<div class="col-md-9">
												<input type="number" name="mobile" required class="form-control">
											</div>
										</div>
										<div class="form-group row">
											<label class="col-md-3 col-form-label">পিতার নাম</label>
											<div class="col-md-9">
												<input type="text" name="father" required class="form-control">
											</div>
										</div>
										<div class="form-group row">
											<label class="col-md-3 col-form-label">মাতার নাম</label>
											<div class="col-md-9">
												<input type="text" name="mother" class="form-control">
											</div>
										</div>
										<div class="form-group row">
											<label class="col-md-3 col-form-label">স্বামীর নাম</label>
											<div class="col-md-9">
												<input type="text" name="husband"  class="form-control">
											</div>
										</div>
										<div class="form-group row">
											<label class="col-md-3 col-form-label">লিঙ্গ </label>
											<div class="col-md-9">
												<select name="gender" required class="form-control">
													<option value="">--Select --</option>
													<option value="1">নারী </option>
													<option value="2">পুরুষ </option>
													<option value="3">উভয় লিঙ্গ</option>
												</select>
											</div>
										</div>
										<div class="form-group row">
											<label class="col-md-3 col-form-label">ওয়ার্ড নম্বর </label>
											<div class="col-md-9">
												<select name="word_no" required class="form-control">
													<option value="">--Select --</option>
													
													<option value="11"> 01 </option>
													<option value="12"> 02 </option>
													<option value="13"> 03 </option>
													<option value="14"> 04 </option>
													<option value="15"> 05 </option>
													<option value="16"> 06 </option>
													<option value="17"> 07 </option>
													<option value="20"> 08 </option>
													<option value="21"> 09 </option>												</select>
												</div>
											</div>
											<div class="form-group row">
												<label class="col-md-3 col-form-label">গ্রাম/মহল্লা</label>
												<div class="col-md-9">
													<input type="text" name="village" required class="form-control">
												</div>
											</div>
											<div class="form-group row">
												<label class="col-md-3 col-form-label">ডাকঘর</label>
												<div class="col-md-9">
													<input type="text" name="post_office" required class="form-control">
												</div>
											</div>
											<div class="form-group row">
												<label class="col-md-3 col-form-label">জেলা</label>
												<div class="col-md-9">
													<input type="text" name="distric" value="" class="form-control">
												</div>
											</div>
											<div class="form-group row">
												<label class="col-md-3 col-form-label">উপজেলা</label>
												<div class="col-md-9">
													<input type="text" name="upozila" value="" class="form-control">
												</div>
											</div>
										</div>
									</div>

									<div class="col-md-6">
										<div class="card-box">
											<h4 class="ttle2">ব্যবসায়ীক তথ্য</h4><hr>
											<div class="form-group row">
												<label class="col-md-3 col-form-label"> প্রতিষ্ঠানের নাম</label>
												<div class="col-md-9">
													<input type="text" name="institute_name" required class="form-control">
												</div>
											</div>
											<div class="form-group row">
												<label class="col-md-3 col-form-label">  দোকান নং</label>
												<div class="col-md-9">
													<input type="number" name="registration_id" required class="form-control">
												</div>
											</div>
											<div class="form-group row">
												<label class="col-md-3 col-form-label"> ব্যবসায়ের ধরন</label>
												<div class="col-md-9">
													<input type="text" name="business_cat" required class="form-control">
												</div>
											</div>
											<div class="form-group row">
												<label class="col-md-3 col-form-label"> গ্রাম/মহল্লা  </label>
												<div class="col-md-9">
													<input type="text" name="b_village" required class="form-control">
												</div>
											</div>
											<div class="form-group row">
												<label class="col-md-3 col-form-label">ডাকঘর</label>
												<div class="col-md-9">
													<input type="text" name="b_post_office" required  class="form-control">
												</div>
											</div>
											<div class="form-group row">
												<label class="col-md-3 col-form-label">জেলা</label>
												<div class="col-md-9">
													<input type="text" name="b_distric" value="" class="form-control">
												</div>
											</div>
											<div class="form-group row">
												<label class="col-md-3 col-form-label">উপজেলা</label>
												<div class="col-md-9">
													<input type="text" name="b_upozila" value="" class="form-control">
												</div>
											</div>
											<div class="form-group row">
												<label class="col-md-3 col-form-label"> অর্থ বছর</label>
												<div class="col-md-9">
													<select name="apply_year" required  class="form-control">
														<option value="">--Select --</option>

														<option value="127"> 2024-2025 </option>
														<option value="122"> 2023-2024 </option>
														<option value="121"> 2022-2023 </option>
														<option value="120"> 2021-2022 </option>
														<option value="119"> 2020-2021 </option>
														<option value="118"> 2019-2020 </option>
													</select>
													</div>
												</div>
												<div class="form-group row">
													<label class="col-md-3 col-form-label">ইস্যুর তারিখ</label>
													<div class="col-md-9">
														<input type="date" name="issue_date" required class="form-control">
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

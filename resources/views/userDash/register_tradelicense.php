<?php
include 'header.php';
?>


<div class="content-body">
	<div class="container-fluid mt-3">



		<div class="col-lg-12">
			<div class="card">
				<div class="card-body">
					<h4 class="card-title"><b>ট্রেড লাইসেন্স আবেদন</b></h4><br>

					<form action="" method="post" enctype="multipart/form-data">

						<div class="card-box">
							<div class="row">
								<div class="col-md-6">
									<div class="card-box">
										<h4 class="sonodtitle"> ব্যক্তিগত তথ্য</h4><hr>
										<div class="form-group row">
											<label class="col-md-3 col-form-label">মালিকের নাম </label>
											<div class="col-md-9">
												<input type="text" name="name" value="" required class="form-control">
											</div>
										</div>
										<div class="form-group row">
											<label class="col-md-3 col-form-label">জাতীয় পরিচয়পত্র/জন্ম নিবন্ধন নং</label>
											<div class="col-md-9">
												<input type="number"name="nid" value="" required class="form-control">
											</div>
										</div>
										<div class="form-group row">
											<label class="col-md-3 col-form-label">মোবাইল নম্বর</label>
											<div class="col-md-9">
												<input type="number" name="mobile" value="" required class="form-control">
											</div>
										</div>
										<div class="form-group row">
											<label class="col-md-3 col-form-label">পিতার নাম</label>
											<div class="col-md-9">
												<input type="text" name="father" value="" required class="form-control">
											</div>
										</div>
										<div class="form-group row">
											<label class="col-md-3 col-form-label">মাতার নাম</label>
											<div class="col-md-9">
												<input type="text" name="mother" value="" required class="form-control">
											</div>
										</div>
										<div class="form-group row">
											<label class="col-md-3 col-form-label">স্বামীর নাম</label>
											<div class="col-md-9">
												<input type="text" name="husband" value=""  class="form-control">
											</div>
										</div>
										<div class="form-group row">
											<label class="col-md-3 col-form-label"> লিঙ্গ </label>
											<div class="col-md-9">
												<select name="gender" required class="form-control myselect">
													<option value="">--সিলেক্ট--</option>
													<option value="নারী">নারী</option>
													<option value="পুরুষ">পুরুষ</option>
													<option value="অন্যান্য">অন্যান্য</option>
												</select>
											</div>
										</div>
										<div class="form-group row">
											<label class="col-md-3 col-form-label"> বৈবাহিক অবস্থা </label>
											<div class="col-md-9">
												<select name="marital_status" class="form-control myselect">
													<option value="">--সিলেক্ট--</option>
													<option value="বিবাহিত">বিবাহিত </option>
													<option value="অবিবাহিত">অবিবাহিত </option>
												</select>
											</div>
										</div>
										<div class="form-group row">
											<label class="col-md-3 col-form-label"> ওয়ার্ড নম্বর </label>
											<div class="col-md-9">
												<select name="word_no" required  class="form-control myselect">
													<option value="0">--সিলেক্ট--</option>

							     				</select>
												</div>
											</div>
											<div class="form-group row">
												<label class="col-md-3 col-form-label">গ্রাম/মহল্লা</label>
												<div class="col-md-9">
													<input type="text" name="village" value="" required class="form-control">
												</div>
											</div>
											<div class="form-group row">
												<label class="col-md-3 col-form-label">ডাকঘর</label>
												<div class="col-md-9">
													<input type="text" name="post_office" value="" required class="form-control">
												</div>
											</div>
											<div class="form-group row">
												<label class="col-md-3 col-form-label">জেলা</label>
												<div class="col-md-9">
													<input type="text" name="distric" value=""  class="form-control">
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
											<h4 class="sonodtitle">ব্যবসায়ীক তথ্য</h4><hr>
											<div class="form-group row">
												<label class="col-md-3 col-form-label"> প্রতিষ্ঠানের নাম</label>
												<div class="col-md-9">
													<input type="text" name="institute_name" value=" " required class="form-control">
												</div>
											</div>
											<div class="form-group row">
												<label class="col-md-3 col-form-label"> ব্যবসায়ের ধরন</label>
												<div class="col-md-9">
													<input type="text" name="business_cat" value=" " required class="form-control">
												</div>
											</div>
											<div class="form-group row">
												<label class="col-md-3 col-form-label">দোকান নং</label>
												<div class="col-md-9">
													<input type="text" name="user_id" value="" readonly required class="form-control">
												</div>
											</div>
											<div class="form-group row">
												<label class="col-md-3 col-form-label">প্রতিষ্ঠানের ঠিকানা</label>
												<div class="col-md-9">
													<input type="text" name="b_village" value="" required class="form-control">
												</div>
											</div>
											<div class="form-group row">
												<label class="col-md-3 col-form-label">ডাকঘর</label>
												<div class="col-md-9">
													<input type="text" name="b_post_office" required value=""  class="form-control">
												</div>
											</div>
											<div class="form-group row">
												<label class="col-md-3 col-form-label">জেলা</label>
												<div class="col-md-9">
													<input type="text" name="b_distric" value=""  class="form-control">
												</div>
											</div>
											<div class="form-group row">
												<label class="col-md-3 col-form-label">উপজেলা</label>
												<div class="col-md-9">
													<input type="text" name="b_upozila" value=""  class="form-control">
												</div>
											</div>
											<div class="form-group row">
												<label class="col-md-3 col-form-label"> মালিকানার ধরন </label>
												<div class="col-md-9">
													<select name="business_type" required  class="form-control myselect">
														<option value="">--সিলেক্ট--</option>
														<option value="ownership" >ব্যক্তিগত মালিকানা </option>
														<option value="joint_ownership" >যৌথ মালিকানা</option>
														<option value="company" >কোম্পানী</option>
													</select>
												</div>
											</div> 
											<div class="form-group row">
												<label class="col-md-3 col-form-label"> অর্থ বছর</label>
												<div class="col-md-9">
													<select name="year" required  class="form-control myselect">
														<option value="0">--সিলেক্ট--</option>

														<option value="1" > 2024-2025 </option>
														<option value="1" > 2023-2024 </option>
														<option value="1" > 2022-2023 </option>
														<option value="1" > 2021-2022 </option>
														<option value="1" > 2020-2021 </option>
														<option value="1" > 2019-2020 </option>
													</select>
													</div>
												</div> 
												<div class="form-group row">
													<label class="col-md-3 col-form-label">ইস্যুর তারিখ</label>
													<div class="col-md-9">
														<input type="date" name="issue_date" value=""  required class="form-control">
													</div>
												</div>
												<div class="form-group row">
													<div class="col-md-12">
														<label>মালিকের ছবি </label>
														<input type="file" name="photo" class="btn btn-default" oninput="pic.src=window.URL.createObjectURL(this.files[0])">
														<img class="caticon" id="pic" style="height: 100px;" src="https://developers.elementor.com/docs/assets/img/elementor-placeholder-image.png">
													</div>
												</div> 
											</div>
										</div>
									</div>
									<div class="text-center">
										<button type="submit" class="btn btn-primary submit-btn">সাবমিট করুন</button>
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

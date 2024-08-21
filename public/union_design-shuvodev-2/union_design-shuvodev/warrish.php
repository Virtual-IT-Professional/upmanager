<?php
include 'header.php';
?>


<div class="content-body">
	<div class="container-fluid mt-3">



		<div class="col-lg-12">
			<div class="card">
				<div class="card-body">
					<h4 class="card-title"><b>ওয়ারিশ সনদের আবেদন</b></h4><br>


					<form action="" method="post">

						<div class="col-sm-12 p-0"><h4 class="ttle">আবেদনকারীর তথ্য</h4><hr>
						</div>
						<div class="card-box applybox">
							<div class="row">
								<div class="col-md-6">
									<div class="card-box">
										<div class="form-group row">
											<label class="col-md-3 col-form-label">আবেদনকারীর নাম </label>
											<div class="col-md-9">
												<input type="text" name="ap_name" required class="form-control">
											</div>
										</div>
										<div class="form-group row">
											<label class="col-md-3 col-form-label">জাতীয় পরিচয় পত্র</label>
											<div class="col-md-9">
												<input type="number" name="nid" class="form-control">
											</div>
										</div>
										<div class="form-group row">
											<label class="col-md-3 col-form-label"> জম্ম নিবন্ধন নাম্বার </label>
											<div class="col-md-9">
												<input type="number" name="birth_id" class="form-control">
											</div>
										</div>
										<div class="form-group row">
											<label class="col-md-3 col-form-label"> পিতার নাম </label>
											<div class="col-md-9">
												<input type="text" required name="father" class="form-control">
											</div>
										</div>
										<div class="form-group row">
											<label class="col-md-3 col-form-label"> স্বামীর নাম </label>
											<div class="col-md-9">
												<input type="text" name="husband" class="form-control">
											</div>
										</div>
										<div class="form-group row">
											<label class="col-md-3 col-form-label">মাতার নাম</label>
											<div class="col-md-9">
												<input type="text" required name="mother" class="form-control">
											</div>
										</div>
										<div class="form-group row">
											<label class="col-md-3 col-form-label"> জম্ম তারিখ</label>
											<div class="col-md-9">
												<input type="date" name="dob" class="form-control">
											</div>
										</div>
										<div class="form-group row">
											<label class="col-md-3 col-form-label">বৈবাহিক অবস্থা  </label>
											<div class="col-md-9">
												<select required name="marital_status" class="form-control">
													<option value="married">বিবাহিত</option>
													<option value="unmarried">অবিবাহিত</option>
												</select>
											</div>
										</div>
										<div class="form-group row">
											<label class="col-md-3 col-form-label">মোবাইল নম্বর </label>
											<div class="col-md-9">
												<input type="number" required name="mobile" class="form-control">
											</div>
										</div>

										<div class="form-group row">
											<label class="col-md-3 col-form-label"> হোল্ডিং নং  </label>
											<div class="col-md-9">
												<input type="number" name="holding" class="form-control">
											</div>
										</div>

										<div class="form-group row">
											<label class="col-md-3 col-form-label">ওয়ার্ড নম্বর</label>
											<div class="col-md-9">
												<select name="ward" required class="form-control">
													<option value="">--Select --</option>

													<option value="11"> 01 </option>
													<option value="12"> 02 </option>
													<option value="13"> 03 </option>
													<option value="14"> 04 </option>
													<option value="15"> 05 </option>
													<option value="16"> 06 </option>
													<option value="17"> 07 </option>
													<option value="20"> 08 </option>
													<option value="21"> 09 </option>    													</select>
												</div>
											</div>
											<div class="form-group row">
												<label class="col-md-3 col-form-label">ডাকঘর </label>
												<div class="col-md-9">
													<input type="text" name="post_office" class="form-control">
												</div>
											</div>
											<div class="form-group row">
												<label class="col-md-3 col-form-label">গ্রাম </label>
												<div class="col-md-9">
													<input type="text" name="village" class="form-control">
												</div>
											</div>

										</div>
									</div>

									<div class="col-md-6">
										<div class="card-box">
											<div class="form-group row">
												<h4 class="card-title"> মৃত ব্যক্তির তথ্য</h4>
											</div>
											<div class="form-group row">
												<label class="col-md-3 col-form-label"> নাম </label>
												<div class="col-md-9">
													<input type="text" name="wr_name" required class="form-control">
												</div>
											</div>
											<div class="form-group row">
												<label class="col-md-3 col-form-label"> জাতীয় পরিচয় পত্র </label>
												<div class="col-md-9">
													<input type="number" name="wr_nid"  class="form-control">
												</div>
											</div>
											<div class="form-group row">
												<label class="col-md-3 col-form-label"> পিতার নাম </label>
												<div class="col-md-9">
													<input type="text" name="wr_father" required class="form-control">
												</div>
											</div>
											<div class="form-group row">
												<label class="col-md-3 col-form-label"> স্বামীর নাম </label>
												<div class="col-md-9">
													<input type="text" name="wr_husband" class="form-control">
												</div>
											</div>
											<div class="form-group row">
												<label class="col-md-3 col-form-label">মাতার নাম</label>
												<div class="col-md-9">
													<input type="text" name="wr_mother" class="form-control">
												</div>
											</div>
											<div class="form-group row">
												<label class="col-md-3 col-form-label">ওয়ার্ড নম্বর</label>
												<div class="col-md-9">
													<select name="wr_word" required class="form-control">
														<option value="">--Select --</option>

														<option value="11"> 01 </option>
														<option value="12"> 02 </option>
														<option value="13"> 03 </option>
														<option value="14"> 04 </option>
														<option value="15"> 05 </option>
														<option value="16"> 06 </option>
														<option value="17"> 07 </option>
														<option value="20"> 08 </option>
														<option value="21"> 09 </option>        														
													</select>
												</div>
											</div>

											<div class="form-group row">
												<label class="col-md-3 col-form-label">গ্রাম </label>
												<div class="col-md-9">
													<input type="text" name="wr_village" class="form-control">
												</div>
											</div>

											<div class="form-group row">
												<label class="col-md-3 col-form-label">বিস্তারিত </label>
												<div class="col-md-9">
													<textarea type="text" rows="5" name="details" class="form-control">অত্র ইউপি এর মৃত্যু রেজিঃ অনুযায়ী তার মৃত্যুর তারিখ: দিন/মাস/সাল ইং। তিনি ---জন স্ত্রী, ---জন পুত্র ও --- জন কন্যা কে ওয়ারেশ হিসাবে রেখে মৃত্যু বরণ করেন। </textarea>
												</div>
											</div>


										</div>
									</div>

								</div>

								<div class="row">
									<div class="col-md-12">
										<div class="card-box">
											<h4 class="ttle2"> ওয়ারিশগনের তথ্য দিন  </h4>
											<div class="form-group row">
												<div class="col-md-12" style="overflow-x:auto;">
													<table data-dynamicrows class="table table-bordered table-striped">
														<thead>
															<tr>
																<th width="10%">ক্রমিক নং</th>
																<th>নাম</th>
																<th>পিতা/স্বামীর নাম</th>
																<th>সম্পর্ক</th>
																<th>মন্তব্য</th>
															</tr>
														</thead>
														<tbody>
															<tr>
																<input type="hidden" name="warish_id[]" class="form-control">
																<td><input type="number" name="b_slno[]" class="form-control"></td>
																<td><input type="text" name="b_name[]" class="form-control"></td>
																<td><input type="text" name="b_father[]" class="form-control"></td>
																<td><input type="text" name="b_relation[]" class="form-control"></td>
																<td><input type="text" name="b_comments[]" class="form-control"></td>

															</tr>


															<tr>
																<input type="hidden" name="warish_id[]" class="form-control">
																<td><input type="number" name="b_slno[]" class="form-control"></td>
																<td><input type="text" name="b_name[]" class="form-control"></td>
																<td><input type="text" name="b_father[]" class="form-control"></td>
																<td><input type="text" name="b_relation[]" class="form-control"></td>
																<td><input type="text" name="b_comments[]" class="form-control"></td>

															</tr>


															<tr>
																<input type="hidden" name="warish_id[]" class="form-control">
																<td><input type="number" name="b_slno[]" class="form-control"></td>
																<td><input type="text" name="b_name[]" class="form-control"></td>
																<td><input type="text" name="b_father[]" class="form-control"></td>
																<td><input type="text" name="b_relation[]" class="form-control"></td>
																<td><input type="text" name="b_comments[]" class="form-control"></td>

															</tr>


															<tr>
																<input type="hidden" name="warish_id[]" class="form-control">
																<td><input type="number" name="b_slno[]" class="form-control"></td>
																<td><input type="text" name="b_name[]" class="form-control"></td>
																<td><input type="text" name="b_father[]" class="form-control"></td>
																<td><input type="text" name="b_relation[]" class="form-control"></td>
																<td><input type="text" name="b_comments[]" class="form-control"></td>

															</tr>


															<tr>
																<input type="hidden" name="warish_id[]" class="form-control">
																<td><input type="number" name="b_slno[]" class="form-control"></td>
																<td><input type="text" name="b_name[]" class="form-control"></td>
																<td><input type="text" name="b_father[]" class="form-control"></td>
																<td><input type="text" name="b_relation[]" class="form-control"></td>
																<td><input type="text" name="b_comments[]" class="form-control"></td>

															</tr>
														</tbody>
													</table>
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

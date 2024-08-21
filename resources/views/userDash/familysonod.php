<?php
include 'header.php';
?>


<div class="content-body">
	<div class="container-fluid mt-3">



		<div class="col-lg-12">
			<div class="card">
				<div class="card-body">
					<h4 class="card-title"><b>পারিবারিক সনদের আবেদন</b></h4><br>


					<form action="" method="post">
					
						<div class="card-box">
							<div class="row">
								<div class="col-sm-8 col-6 text-right m-b-20">
									
								</div>
							</div>
							<div class="row">
								<div class="col-sm-12">
									<h4 class="ttle">আবেদনকারীর তথ্য </h4><hr>
								</div>
								<div class="col-md-2"></div>
								<div class="col-md-7">
									<div class="card-box">
										<div class="form-group row">
											<label class="col-md-3 col-form-label">আবেদনকারীর নাম </label>
											<div class="col-md-9">
												<input type="text" name="name" required class="form-control">
											</div>
										</div>
										<div class="form-group row">
											<label class="col-md-3 col-form-label"> জাতীয় পরিচয় পত্র </label>
											<div class="col-md-9">
												<input type="number" name="nid"  class="form-control">
											</div>
										</div>
										<div class="form-group row">
											<label class="col-md-3 col-form-label"> জম্ম নিবন্ধন নাম্বার   </label>
											<div class="col-md-9">
												<input type="number" name="birth_id"  class="form-control">
											</div>
										</div>
										<div class="form-group row">
											<label class="col-md-3 col-form-label"> হোল্ডিং নং </label>
											<div class="col-md-9">
												<input type="number" name="holding_no"  class="form-control">
											</div>
										</div>
										<div class="form-group row">
											<label class="col-md-3 col-form-label"> পিতার নাম </label>
											<div class="col-md-9">
												<input type="text" name="father" required class="form-control">
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
												<input type="text" name="mother" required class="form-control">
											</div>
										</div>
										<div class="form-group row">
											<label class="col-md-3 col-form-label">মোবাইল নাম্বার </label>
											<div class="col-md-9">
												<input type="number" name="mobile" class="form-control">
											</div>
										</div>
										<div class="form-group row">
											<label class="col-md-3 col-form-label">জম্ম তারিখ </label>
											<div class="col-md-9">
												<input type="date" name="dob" class="form-control">
											</div>
										</div>
										<div class="form-group row">
											<label class="col-md-3 col-form-label">বৈবাহিক অবস্থা </label>
											<div class="col-md-9">
												<select name="marital_status" class="form-control">
													<option value="married">বিবাহিত</option>
													<option value="unmarried">অবিবাহিত</option>
												</select>
											</div>
										</div>
										<div class="form-group row">
											<label class="col-md-3 col-form-label">ওয়ার্ড নাম্বার</label>
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
													<option value="21"> 09 </option>
												</select>
												</div>
											</div>
											<div class="form-group row">
												<label class="col-md-3 col-form-label">ডাকঘর </label>
												<div class="col-md-9">
													<input type="text" name="post_office" required class="form-control">
												</div>
											</div>
											<div class="form-group row">
												<label class="col-md-3 col-form-label">গ্রাম </label>
												<div class="col-md-9">
													<input type="text" name="village" required class="form-control">
												</div>
											</div>
											<div class="form-group row">
												<label class="col-md-3 col-form-label">বিস্তারিত </label>
												<div class="col-md-9">
													<textarea type="text" name="details" rows="5" class="form-control">উল্লেখিত সদস্য ছাড়া তার পরিবারে আর কোন সদস্য নাই। </textarea>
												</div>
											</div>
										</div>
									</div>
								</div>


								<div class="row">
									<div class="col-md-12">
										<div class="card-box">
											<h4 class="ttle2"> পরিবারের  তথ্য দিন  </h4>
											<div class="form-group row" style="overflow-x:auto;">
												<div class="col-md-12">
													<table data-dynamicrows class="table table-bordered table-striped">
														<thead>
															<tr>
																<th width="10%">ক্রমিক নং</th>
																<th>নাম</th>
																<th>পিতা/স্বামীর নাম</th>
																<th>সম্পর্ক</th>
																<th>জম্ম তারিখ</th>
																<th>জাতীয় পরিচয়পত্র/জন্মনিবন্ধন নং</th>
																<th>মন্তব্য</th>
															</tr>
														</thead>
														<tbody>
															<tr>
																<td><input type="number" name="slno[]" class="form-control"></td>
																<td><input type="text" name="m_name[]"  class="form-control"></td>
																<td><input type="text" name="m_father[]"  class="form-control"></td>
																<td><input type="text" name="relation[]"  class="form-control"></td>
																<td><input type="date" name="m_dob[]"  class="form-control"></td>
																<td><input type="number" name="m_nid[]"  class="form-control"></td>
																<td><input type="text" name="comments[]"  class="form-control"></td>
															</tr>


																<tr>
																<td><input type="number" name="slno[]" class="form-control"></td>
																<td><input type="text" name="m_name[]"  class="form-control"></td>
																<td><input type="text" name="m_father[]"  class="form-control"></td>
																<td><input type="text" name="relation[]"  class="form-control"></td>
																<td><input type="date" name="m_dob[]"  class="form-control"></td>
																<td><input type="number" name="m_nid[]"  class="form-control"></td>
																<td><input type="text" name="comments[]"  class="form-control"></td>
															</tr>



																<tr>
																<td><input type="number" name="slno[]" class="form-control"></td>
																<td><input type="text" name="m_name[]"  class="form-control"></td>
																<td><input type="text" name="m_father[]"  class="form-control"></td>
																<td><input type="text" name="relation[]"  class="form-control"></td>
																<td><input type="date" name="m_dob[]"  class="form-control"></td>
																<td><input type="number" name="m_nid[]"  class="form-control"></td>
																<td><input type="text" name="comments[]"  class="form-control"></td>
															</tr>


																<tr>
																<td><input type="number" name="slno[]" class="form-control"></td>
																<td><input type="text" name="m_name[]"  class="form-control"></td>
																<td><input type="text" name="m_father[]"  class="form-control"></td>
																<td><input type="text" name="relation[]"  class="form-control"></td>
																<td><input type="date" name="m_dob[]"  class="form-control"></td>
																<td><input type="number" name="m_nid[]"  class="form-control"></td>
																<td><input type="text" name="comments[]"  class="form-control"></td>
															</tr>


																<tr>
																<td><input type="number" name="slno[]" class="form-control"></td>
																<td><input type="text" name="m_name[]"  class="form-control"></td>
																<td><input type="text" name="m_father[]"  class="form-control"></td>
																<td><input type="text" name="relation[]"  class="form-control"></td>
																<td><input type="date" name="m_dob[]"  class="form-control"></td>
																<td><input type="number" name="m_nid[]"  class="form-control"></td>
																<td><input type="text" name="comments[]"  class="form-control"></td>
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

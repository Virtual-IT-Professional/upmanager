@php 
    $menu = 'businesss';
@endphp
@extends('manager.include')
@section('adminTitle')
  Pirjatrapur Union Porishod
@endsection
@section('adminContent')              
              <div class="col-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body p-4">
                    <h4 class="card-title">ব্যাবসায়ীক হোল্ডিং নিবন্ধন</h4>
                    <p class="card-description"> নতুন ব্যাবসা প্রতিষ্ঠানের তথ্য নিবন্ধন </p>
                    <div class="row">
                      <div class="col-12">
                        @if(session()->has('success'))
                          <div class="alert alert-success rounded-0">{{ Session::get('success') }}</div>
                        @endif
                        @if(session()->has('error'))
                          <div class="alert alert-danger rounded-0">{{ Session::get('error') }}</div>
                        @endif
                      </div>
                    </div>
                    @if(!empty($business))
                    <div class="row">
                        <div class="form-group col-8 col-md-4 mx-auto">
                        @if(!empty($business->avatar))
                            <div class="text-center">
                                <label for="avatar" class="fw-bold">মালিকের ছবি</label>
                                <div class="form-group">
                                    <img src="{{ asset('/public/upload/image/business/') }}/{{ $business->avatar }}" alt="" class="w-25">
                                    <div class="">
                                        <a href="{{ route('delBusinessAvatar',['id'=>$business->id]) }}" class="btn btn-danger btn-sm mt-2">Delete Avatar</a>
                                    </div>
                                </div>
                            </div>
                        @else
                            <label for="avatar" class="fw-bold">মালিকের ছবি</label>
                            <form class="forms-sample" method="POST" action="{{ route('updateBusinessAvatar') }}" enctype="multipart/form-data">
                                @csrf
                                <input type="hidden" name="memberId" value="{{ $business->id }}">
                                <input type="file" class="form-control" name="avatar" id="avatar">
                                <div class="form-group">
                                <button type="submit" class="btn btn-primary btn-sm mt-2">Update Avatar </button>
                                </div>
                            </form>
                        @endif
                        </div>
                    </div>
                    <a href="{{ route('viewBusiness',['id'=>$business->id]) }}" class="btn btn-primary mb-4 btn-sm rounded-0">বিস্তারিত দেখুন</a>
                    <a href="{{ route('businessList') }}" class="btn btn-success mb-4 btn-sm rounded-0">সকল প্রোফাইল</a>
                    <form class="forms-sample" method="POST" action="{{ route('updateBusiness') }}" enctype="multipart/form-data">
                      @csrf
                      <input type="hidden" name="businessId" value="{{ $business->id }}">
                      <div class="border mx-2 pb-4">
                        <div class="bg-primary text-white p-3">ব্যাক্তিগত তথ্য</div>
                        <div class="card-body row">
                            <div class="col-12 col-md-6">
                                <div class="form-group">
                                    <label for="ownerName" class="fw-bold">মালিকের নাম</label>
                                    <input type="text" class="form-control" name="ownerName" id="ownerName" placeholder="মালিকের নাম উল্লেখ করুন" value="{{ $business->ownerName }}">
                                </div>
                                <div class="form-group">
                                    <label for="idCard" class="fw-bold">জাতীয় পরিচয়পত্র/পাসপোর্টের তথ্য</label>
                                    <input type="text" class="form-control" name="idCard" id="idCard" placeholder="মালিকের জাতীয় পরিচয়পত্র অথবা পাসপোর্টের তথ্য লিখুন" value="{{ $business->idCard }}">
                                </div>
                                <div class="form-group">
                                    <label for="fName" class="fw-bold">পিতার/স্বামীর নাম</label>
                                    <input type="text" class="form-control" name="fName" id="fName" placeholder="মালিকের পিতা/স্বামীর নাম লিখুন" value="{{ $business->fName }}">
                                </div>
                                <div class="form-group">
                                    <label for="mName" class="fw-bold">মাতার নাম</label>
                                    <input type="text" class="form-control" id="mName" name="mName" placeholder="মালিকের মাতার নাম লিখুন" value="{{ $business->mName }}">
                                </div>
                                <div class="form-group">
                                    <label for="dob" class="fw-bold">জন্মতারিখ</label>
                                    <input type="date" class="form-control" name="dob" id="dob" value="{{ $business->dob }}">
                                </div>
                                <div class="form-group">
                                    <label for="gender" class="fw-bold">লিঙ্গ</label>
                                    <select class="form-select" name="gender" id="gender">
                                        <option>{{ $business->gender }}</option>
                                        <option>পুরুষ</option>
                                        <option>মহিলা</option>
                                        <option>অন্যান্য</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="maritalStatus" class="fw-bold">বৈবাহিক অবস্থা</label>
                                    <select class="form-select" name="maritalStatus" id="maritalStatus">
                                        <option>{{ $business->maritalStatus }}</option>
                                        <option>অবিবাহিত</option>
                                        <option>বিবাহিত</option>
                                        <option>বিপত্নীক</option>
                                        <option>ডিভোর্সী</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-12 col-md-6">
                                <div class="form-group">
                                    <label for="mobileNumber" class="fw-bold">মোবাইল নাম্বার</label>
                                    <input type="text" class="form-control" id="mobileNumber" name="mobileNumber" placeholder="মালিকের সচল মোবাইল নাম্বার লিখুন" value="{{ $business->mobileNumber }}">
                                </div>
                                <div class="form-group">
                                    <label for="wordNo" class="fw-bold">ওয়ার্ড নং</label>
                                    <select class="form-select" name="wordNo" id="wordNo">
                                    <option>{{ $business->wordNo }}</option>
                                    <option>01</option>
                                    <option>02</option>
                                    <option>03</option>
                                    <option>04</option>
                                    <option>05</option>
                                    <option>06</option>
                                    <option>07</option>
                                    <option>08</option>
                                    <option>09</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="village" class="fw-bold">গ্রাম/মহল্লা</label>
                                    <input type="text" class="form-control" id="village" name="village" placeholder="মালিকের গ্রাম/মহল্লার নাম লিখুন" value="{{ $business->village }}">
                                </div>
                                <div class="form-group">
                                    <label for="postOffice" class="fw-bold">পোস্ট অফিস</label>
                                    <input type="text" class="form-control" id="postOffice" name="postOffice" placeholder="মালিকের পোস্ট অফিসের তথ্য দিন" value="{{ $business->postOffice }}">
                                </div>
                                <div class="form-group">
                                    <label for="policeStation" class="fw-bold">উপজেলা</label>
                                    <input type="text" class="form-control" id="policeStation" name="policeStation" placeholder="মালিকের উপজেলার তথ্য লিখুন" value="{{ $business->policeStation }}">
                                </div>
                                <div class="form-group">
                                    <label for="district" class="fw-bold">জেলা</label>
                                    <input type="text" class="form-control" id="district" name="district" placeholder="মালিকের জেলার নাম লিখুন" value="{{ $business->district }}">
                                </div>
                                <div class="form-group">
                                    <label for="profileStatus" class="fw-bold">প্রোফাইলের অবস্থা</label>
                                    <select class="form-select" name="profileStatus" id="profileStatus">
                                        <option>{{ $business->profileStatus }}</option>
                                        <option>active</option>
                                        <option>inactive</option>
                                        <option>banned</option>
                                        <option>hold</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        @php 
                            $businessDetails = \App\Models\BusinessLicense::where(['holderId'=>$business->id])->first();
                        @endphp
                        @if(!empty($businessDetails))
                            @php
                                $businessName   = $businessDetails->businessName;
                                $shopNo         = $businessDetails->shopNo;
                                $businessType   = $businessDetails->businessType;
                                $ownershipType  = $businessDetails->ownershipType;
                                $businessYear   = $businessDetails->businessYear;
                                $issueDate      = $businessDetails->issueDate;
                                $location       = $businessDetails->location;
                                $postOffice     = $businessDetails->postOffice;
                                $policeStation  = $businessDetails->policeStation;
                                $district       = $businessDetails->district;
                                $status         = $businessDetails->status;
                            @endphp
                        @else
                            @php
                                $businessName   = "";
                                $shopNo         = "";
                                $businessType   = "";
                                $ownershipType  = "";
                                $businessYear   = "";
                                $issueDate      = "";
                                $location       = "";
                                $postOffice     = "";
                                $policeStation  = "";
                                $district       = "";
                                $status         = "";
                            @endphp
                        @endif
                        <div class="bg-primary text-white p-3 mt-2">ব্যাবসায়ীক তথ্য</div>
                        <div class="card-body row">
                            <div class="col-12 col-md-6">
                                <div class="form-group">
                                    <label for="businessName" class="fw-bold">প্রতিষ্ঠানের নাম</label>
                                    <input type="text" class="form-control" id="businessName" name="businessName" placeholder="ব্যাবসা প্রতিষ্ঠানের পুরো নাম লিখুন(বিস্তারিতভাবে)" value="{{ $businessName }}">
                                </div>
                                <div class="form-group">
                                    <label for="shopNo" class="fw-bold">দোকান নং</label>
                                    <input type="text" class="form-control" id="shopNo" name="shopNo" placeholder="দোকান নং উল্ল্যেখ করুন" value="{{ $shopNo }}">
                                </div>
                                <div class="form-group">
                                    <label for="businessType" class="fw-bold">ব্যাবসার ধরন</label>
                                    <input type="text" class="form-control" id="businessType" name="businessType" placeholder="ব্যাবসার ধরন লিখুন বিস্তারিতভাবে" value="{{ $businessType }}">
                                </div>
                                <div class="form-group">
                                    <label for="ownershipType" class="fw-bold">মালিকানার ধরন</label>
                                    <select class="form-select" name="ownershipType" id="ownershipType">
                                        <option>{{ $ownershipType }}</option>
                                        <option>একক মালিকানা</option>
                                        <option>যৌথ মালিকানা</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="businessYear" class="fw-bold">অর্থ-বছর</label>
                                    <select class="form-select" name="businessYear" id="businessYear">
                                        <option>{{ $businessYear }}</option>
                                        <option>২০২৪-২০২৫</option>
                                        <option>২০২৩-২০২৪</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-12 col-md-6">
                                <div class="form-group">
                                    <label for="location" class="fw-bold">গ্রাম/মহল্লা</label>
                                    <input type="text" class="form-control" id="location" name="location" placeholder="ব্যাবসা প্রতিষ্ঠানের স্থান/গ্রাম/মহল্লার নাম লিখুন" value="{{ $location }}">
                                </div>
                                <div class="form-group">
                                    <label for="busienssPost" class="fw-bold">পোস্ট অফিস</label>
                                    <input type="text" class="form-control" id="busienssPost" name="busienssPost" placeholder="ব্যাবসা প্রতিষ্ঠানের পোস্ট অফিসের তথ্য দিন" value="{{ $postOffice }}">
                                </div>
                                <div class="form-group">
                                    <label for="businessPS" class="fw-bold">উপজেলা</label>
                                    <input type="text" class="form-control" id="businessPS" name="businessPS" value="বুড়িচং" readonly value="{{ $policeStation }}">
                                </div>
                                <div class="form-group">
                                    <label for="businessDistrict" class="fw-bold">জেলা</label>
                                    <input type="text" class="form-control" id="businessDistrict" name="businessDistrict" value="কুমিল্লা" readonly value="{{ $district }}">
                                </div>
                                <div class="form-group">
                                    <label for="issueDate" class="fw-bold">সনদ ইস্যুর তারিখ</label>
                                    <input type="date" class="form-control" name="issueDate" id="issueDate" value="{{ $issueDate }}">
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                          <div class="form-group">
                            <button type="submit" class="btn btn-primary me-2">প্রোফাইল আপডেট করুন</button>
                            <button type="reset" class="btn btn-light">বাতিল</button>
                          </div>
                        </div>
                      </div>
                    </form>
                    @else
                    <div class="alert alert-warning">
                        দুঃখিত! আপনার খোজকৃত তথ্যের কোন ডাটা পাওয়া যায়নি।
                    </div>
                    @endif
                  </div>
                </div>
              </div>
@endsection
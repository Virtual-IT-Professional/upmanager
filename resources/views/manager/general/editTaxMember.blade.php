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
                    <h4 class="card-title">সাধারন হোল্ডিং সদস্য আপডেট</h4>
                    <p class="card-description fw-bold">সাধারন হোল্ডিং সদস্যের তথ্য আপডেট (@if(!empty($taxMember)) {{ $taxMember->taxPayer }} @endif) </p>
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
                    @if(!empty($taxMember))
                    <div class="row align-items-center">
                      <div class="col-4 col-md-3 mx-auto">
                        <div class="form-group text-center">
                          @if(!empty($taxMember->avatar))
                          <div class="text-center">
                            <label for="avatar" class="fw-bold">করদাতার ছবি</label>
                            <div class="form-group">
                              <img src="{{ asset('/public/upload/image/taxPayer/') }}/{{ $taxMember->avatar }}" alt="" class="w-75">
                              <a href="{{ route('delTaxPayerAvatar',['id'=>$taxMember->id]) }}" class="btn btn-danger mt-2">Delete Avatar</a>
                              </div>
                            </div>
                          @else
                          <label for="avatar" class="fw-bold">করদাতার ছবি</label>
                          <form class="forms-sample" method="POST" action="{{ route('updateTaxMemberAvatar') }}" enctype="multipart/form-data">
                            @csrf
                            <input type="hidden" name="memberId" value="{{ $taxMember->id }}">
                            <input type="file" class="form-control" name="avatar" id="avatar">
                            <div class="form-group">
                              <button type="submit" class="btn btn-primary mt-2">Update Avatar </button>
                            </div>
                          </form>
                          @endif
                        </div>
                      </div>
                      <div class="col-4 col-md-3 mx-auto text-end">
                        <div class="form-group">
                          @if(!empty($taxMember->holdingPic))
                          <div class="text-center">
                            <label for="holdingPic" class="fw-bold">হোল্ডিং/বাড়ির ছবি</label>
                            <div class="form-group">
                              <img src="{{ asset('/public/upload/image/generalHolding/') }}/{{ $taxMember->holdingPic }}" alt="" class="w-75">
                              <a href="{{ route('delHoldingPic',['id'=>$taxMember->id]) }}" class="btn btn-danger mt-2">Delete Holding</a>
                            </div>
                          </div>
                          @else
                          <label for="holdingPic" class="fw-bold">হোল্ডিং/বাড়ির ছবি</label>
                          <form class="forms-sample" method="POST" action="{{ route('updateHoldingPic') }}" enctype="multipart/form-data">
                            @csrf
                            <input type="hidden" name="memberId" value="{{ $taxMember->id }}">
                            <input type="file" class="form-control" name="holdingPic" id="holdingPic">
                            <div class="form-group">
                              <button type="submit" class="btn btn-primary mt-2">Update Holding</button>
                            </div>
                          </form>
                          @endif
                        </div>
                      </div>
                    </div>
                    <a href="{{ route('viewTaxMember',['id'=>$taxMember->id]) }}" class="btn btn-primary mb-4 btn-sm rounded-0">বিস্তারিত দেখুন</a>
                    <a href="{{ route('taxMember') }}" class="btn btn-success mb-4 btn-sm rounded-0">সকল প্রোফাইল</a>
                    <form class="forms-sample" method="POST" action="{{ route('updateTaxMember') }}" enctype="multipart/form-data">
                      @csrf
                      <input type="hidden" name="memberId" value="{{ $taxMember->id }}">
                      <div class="row border mx-2 pb-4">
                        <h3 class="bg-primary p-3 text-white">ব্যাক্তিগত তথ্য</h3>
                        <div class="col-12 col-md-6">
                                <div class="form-group">
                                  <label for="wordNo" class="fw-bold">ওয়ার্ড নং</label>
                                  <select class="form-select" name="wordNo" id="wordNo">
                                    <option>{{ $taxMember->wordNo }}</option>
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
                              <label for="taxPayer" class="fw-bold">করদাতার নাম</label>
                              <input type="text" class="form-control" value="{{ $taxMember->taxPayer }}" name="taxPayer" id="taxPayer" placeholder="করদাতার নাম উল্লেখ করুন">
                            </div>
                            <div class="form-group">
                              <label for="idCard" class="fw-bold">জাতীয় পরিচয়পত্র/পাসপোর্টের তথ্য</label>
                              <input type="text" class="form-control" value="{{ $taxMember->idCard }}" name="idCard" id="idCard" placeholder="করদাতার জাতীয় পরিচয়পত্র অথবা পাসপোর্টের তথ্য লিখুন">
                            </div>
                            <div class="form-group">
                              <label for="fName" class="fw-bold">পিতার/স্বামীর নাম</label>
                              <input type="text" class="form-control" value="{{ $taxMember->fName }}" name="fName" id="fName" placeholder="করদাতার পিতা/স্বামীর নাম লিখুন">
                            </div>
                            <div class="form-group">
                              <label for="mName" class="fw-bold">মাতার নাম</label>
                              <input type="text" class="form-control" value="{{ $taxMember->mName }}" id="mName" name="mName" placeholder="করদাতার মাতার নাম লিখুন">
                            </div>
                            <div class="form-group">
                              <label for="dob" class="fw-bold">জন্মতারিখ</label>
                              <input type="date" class="form-control" value="{{ $taxMember->dob }}" name="dob" id="dob" placeholder="করদাতার জন্মতারিখ লিখুন">
                            </div>
                        </div>
                        <div class="col-12 col-md-6">
                            <div class="form-group">
                              <label for="gender" class="fw-bold">লিঙ্গ</label>
                              <select class="form-select" name="gender" id="gender">
                                <option>{{ $taxMember->gender }}</option>
                                <option>পুরুষ</option>
                                <option>মহিলা</option>
                                <option>অন্যান্য</option>
                              </select>
                            </div>
                            <div class="form-group">
                              <label for="religion" class="fw-bold">ধর্ম</label>
                              <select class="form-select" name="religion" id="religion">
                                <option>{{ $taxMember->religion }}</option>
                                <option>ইসলাম</option>
                                <option>সনাতন</option>
                                <option>বৌদ্ধ</option>
                                <option>খ্রিষ্টান</option>
                                <option>অন্যান্য</option>
                              </select>
                            </div>
                            <div class="form-group">
                              <label for="profession" class="fw-bold">পেশা</label>
                              <select class="form-select" name="profession" id="profession">
                                <option>{{ $taxMember->profession }}</option>
                                <option>কৃষি</option>
                                <option>গৃহিনী</option>
                                <option>চাকুরী</option>
                                <option>ব্যবসা</option>
                                <option>চালক</option>
                                <option>শিক্ষক</option>
                                <option>দিনমজুর</option>
                                <option>জেলে</option>
                                <option>প্রবাসী</option>
                                <option>ডাক্তার</option>
                                <option>অন্যান্য</option>
                              </select>
                            </div>
                            <div class="form-group">
                              <label for="nationality" class="fw-bold">জাতীয়তা</label>
                              <input type="text" class="form-control" value="{{ $taxMember->nationality }}" id="nationality" name="nationality" value="বাংলাদেশি" readonly>
                            </div>
                            <div class="row">
                              <div class="col-4">
                                <div class="form-group">
                                  <label for="totalMember" class="fw-bold">পরিবারের মোট সদস্য</label>
                                  <input type="number" class="form-control" value="{{ $taxMember->totalMember }}" name="totalMember" id="totalMember" placeholder="পরিবারের মোট সদস্য সংখ্যা লিখুন" readonly>
                                </div>
                              </div>
                              <div class="col-4">
                                <div class="form-group">
                                  <label for="maleMember" class="fw-bold">পুরুষ সদস্য</label>
                                  <input type="number" class="form-control" value="{{ $taxMember->maleMember }}" name="maleMember" oninput="totMember()" id="maleMember" placeholder="মোট পুরুষ সদস্য সংখ্যা লিখুন">
                                </div>
                              </div>
                              <div class="col-4">
                                <div class="form-group">
                                  <label for="femaleMember" class="fw-bold">মহিলা সদস্য</label>
                                  <input type="number" class="form-control" value="{{ $taxMember->femaleMember }}" name="femaleMember" oninput="totMember()" id="femaleMember" placeholder="মোট মহিলা সদস্য সংখা লিখুন">
                                </div>
                              </div>
                            </div>
                            <div class="form-group">
                              <label for="status" class="fw-bold">একাউন্ট স্ট্যাটাস</label>
                              <select class="form-select" name="status" id="status">
                                <option>{{ $taxMember->status }}</option>
                                <option>inactive</option>
                                <option>active</option>
                                <option>expired</option>
                                <option>banned</option>
                              </select>
                            </div>
                        </div>
                      </div>
                      <div class="row my-4">
                        <div class="col-12">
                          <div class="row g-0">
                          <div class="col-12 col-md-6 border card rounded-0">
                              <div class="bg-primary text-white p-3">ঠিকানা</div>
                              <div class="card-body">
                                <div class="form-group">
                                  <label for="holdingNumber" class="fw-bold">হোল্ডিং নাম্বার</label>
                                  <input type="text" class="form-control" value="{{ $taxMember->holdingNumber }}" id="holdingNumber" name="holdingNumber" placeholder="হোল্ডিং নাম্বার লিখুন(যদি থাকে)">
                                </div>
                                <div class="form-group">
                                  <label for="village" class="fw-bold">গ্রাম/পাড়া/মহল্লা</label>
                                  <input type="text" class="form-control" id="village" value="{{ $taxMember->village }}" name="village" placeholder="করদাতার গ্রাম/পাড়া/মহল্লা উল্লেখ করুন">
                                </div>
                                <div class="form-group">
                                  <label for="postOffice" class="fw-bold">ডাকঘর</label>
                                  <input type="text" class="form-control" id="postOffice" value="{{ $taxMember->postOffice }}" name="postOffice" placeholder="করদাতার ডাকঘর উল্লেখ করুন">
                                </div>
                                <div class="form-group">
                                  <label for="policeStation" class="fw-bold">উপজেলা</label>
                                  <input type="text" class="form-control" id="policeStation" name="policeStation"  value="{{ $taxMember->policeStation }}" readonly>
                                </div>
                                <div class="form-group">
                                  <label for="district" class="fw-bold">জেলা</label>
                                  <input type="text" class="form-control" id="district" name="district"  value="{{ $taxMember->district }}" readonly>
                                </div>
                              </div>
                            </div>
                            <div class="col-12 col-md-6 border card rounded-0">
                              <div class="bg-primary text-white p-3">বসত ঘর/অবকাঠামোর বিবরন</div>
                              <div class="card-body">
                                <div class="form-group">
                                  <label for="multiStoredBuilding" class="fw-bold">বহুতল ভবন</label>
                                  <input type="number" class="form-control" value="{{ $taxMember->multiStoredBuilding }}" name="multiStoredBuilding" id="multiStoredBuilding" placeholder="করদাতার বহুতল ভবনের সংখ্যা">
                                </div>
                                <div class="form-group">
                                  <label for="building" class="fw-bold">পাকা ঘর</label>
                                  <input type="number" class="form-control" value="{{ $taxMember->building }}" name="building" id="building" placeholder="করদাতার পাকা ঘরের মোট সংখ্যা">
                                </div>
                                <div class="form-group">
                                  <label for="semiBuilding" class="fw-bold">আধা-পাকা ঘর</label>
                                  <input type="number" class="form-control" value="{{ $taxMember->semiBuilding }}" name="semiBuilding" id="semiBuilding" placeholder="করদাতার আধা-পাকা ঘরের সংখ্যা">
                                </div>
                                <div class="form-group">
                                  <label for="rawHouse" class="fw-bold">কাঁচা ঘর</label>
                                  <input type="number" class="form-control" value="{{ $taxMember->rawHouse }}" name="rawHouse" id="rawHouse" placeholder="করদাতার কাঁচা ঘরের সংখ্যা">
                                </div>
                              </div>
                            </div>
                          </div>
                          
                        </div>
                      </div>
                      <div class="row border mb-4 pb-4">
                        <h3 class="bg-primary p-3 text-white">বার্ষিক কর আদায়ের তথ্য</h3>
                        <div class="col-12 col-md-6">
                            <div class="form-group">
                              <label for="taxYear" class="fw-bold">অর্থ-বছর</label>
                              <select class="form-select" value="{{ $taxMember->taxYear }}" name="taxYear" id="taxYear">
                                <option>২০২৪-২০২৫</option>
                                <option>২০২৩-২০২৪</option>
                              </select>
                            </div>
                            <div class="form-group">
                              <label for="yearlyIncome" class="fw-bold">বাৎসরিক আয়</label>
                              <input type="number" class="form-control" value="{{ $taxMember->yearlyIncome }}" name="yearlyIncome" id="yearlyIncome" placeholder="করদাতার বাৎসরিক আয়ের পরিমান লিখুন">
                            </div>
                        </div>
                        <div class="col-12 col-md-6">
                            <div class="form-group">
                              <label for="totalTax" class="fw-bold">করদাতার ট্যাক্সের পরিমান</label>
                              <input type="number" class="form-control" value="{{ $taxMember->totalTax }}" name="totalTax" id="totalTax" placeholder="করদাতার সর্বমোট ট্যাক্সের পরিমান উল্লেখ করুন">
                            </div>
                            <div class="form-group">
                              <label for="comments" class="fw-bold">মন্তব্য(যদি থাকে)</label>
                              <textarea raw="4" class="form-control" name="comments" id="comments" placeholder="আপনার মন্তব্য লিখুন(যদি থাকে)">{{ $taxMember->comments }}</textarea>
                            </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-12">
                          <div class="form-group">
                            <button type="submit" class="btn btn-primary me-2">আপডেট করুন</button>
                            <button type="reset" class="btn btn-light">বাতিল</button>
                          </div>
                        </div>
                      </div>
                    </form>
                    @else
                    <div class="alert alert-warning">দুঃখিত! কোন তথ্য পাওয়া যায়নি</div>
                    @endif
                  </div>
                </div>
              </div>
              <script>
                function totMember(){
                  document.getElementById('totalMember').value = 0;
                  var a = 0;
                  var b = 0;
                  var x = document.getElementById('maleMember').value;
                  var y = document.getElementById('femaleMember').value;
                  var a = parseInt(x);
                  var b = parseInt(y);
                  var z = parseInt(a+b);

                  document.getElementById('totalMember').value = parseInt(z);
                }
              </script>
@endsection
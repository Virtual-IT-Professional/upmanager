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
                    <h4 class="card-title">ব্যাবসায়ীক হোল্ডিং</h4>
                    <p class="card-description"> ব্যাবসায়ীক সদস্যের প্রোফাইল </p>
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
                                <a href="{{ route('editBusiness',['id'=>$business->id]) }}" class="btn btn-primary mb-4 btn-sm rounded-0">আপডেট</a>
                                <a href="{{ route('businessList') }}" class="btn btn-success mb-4 btn-sm rounded-0">সকল প্রোফাইল</a>
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
                            <a href="{{ route('editBusiness',['id'=>$business->id]) }}" class="btn btn-primary mb-4 btn-sm rounded-0">আপডেট</a>
                            <a href="{{ route('businessList') }}" class="btn btn-success mb-4 btn-sm rounded-0">সকল প্রোফাইল</a>
                        @endif
                        </div>
                    </div>
                      <div class="row">
                            <div class="row profile">
                                <div class="col-12 col-md-6">
                                <h3 class="bg-primary p-3 mt-4 text-white">ব্যাক্তিগত তথ্য</h3>
                                    <table class="table border-left">
                                        <tbody>
                                            <tr>
                                                <th>মালিকের নাম</th>
                                                <td>: {{ $business->ownerName }}</td>
                                            </tr>
                                            <tr>
                                                <th>জাতীয় পরিচয়পত্র/পাসপোর্ট নাম্বার</th>
                                                <td>: {{ $business->idCard }}</td>
                                            </tr>
                                            <tr>
                                                <th>মোবাইল নাম্বার</th>
                                                <td>: {{ $business->mobileNumber }}</td>
                                            </tr>
                                            <tr>
                                                <th>পিতা/স্বামীর নাম</th>
                                                <td>: {{ $business->fName }}</td>
                                            </tr>
                                            <tr>
                                                <th>মাতার নাম</th>
                                                <td>: {{ $business->mName }}</td>
                                            </tr>
                                            <tr>
                                                <th>জন্ম তারিখ</th>
                                                <td>: {{ $business->dob }}</td>
                                            </tr>
                                            <tr>
                                                <th>লিঙ্গ</th>
                                                <td>: {{ $business->gender }}</td>
                                            </tr>
                                            <tr>
                                                <th>বৈবাহিক অবস্তা</th>
                                                <td>: {{ $business->maritalStatus }}</td>
                                            </tr>
                                            <tr>
                                                <th>গ্রাম/মহল্লা</th>
                                                <td>: {{ $business->village }}</td>
                                            </tr>
                                            <tr>
                                                <th>পোস্ট অফিস</th>
                                                <td>: {{ $business->postOffice }}</td>
                                            </tr>
                                            <tr>
                                                <th>থানা</th>
                                                <td>: {{ $business->policeStation }}</td>
                                            </tr>
                                            <tr>
                                                <th>জেলা</th>
                                                <td>: {{ $business->district }}</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <div class="col-12 col-md-6">
                                <h3 class="bg-primary p-3 mt-4 text-white">ব্যাবসা সংক্রান্ত তথ্য</h3>
                                @php
                                    $license = \App\Models\BusinessLicense::where(['holderId'=>$business->id])->first();
                                @endphp
                                @if($license)
                                    <table class="table border-left">
                                        <tbody>
                                            <tr>
                                                <th>দোকান নাম্বার</th>
                                                <td>: {{ $license->shopNo }}</td>
                                            </tr>
                                            <tr>
                                                <th>দোকানের নাম</th>
                                                <td>: {{ $license->businessName }}</td>
                                            </tr>
                                            <tr>
                                                <th>ব্যবসার ধরন</th>
                                                <td>: {{ $license->businessType }}</td>
                                            </tr>
                                            <tr>
                                                <th>মালিকানার ধরন</th>
                                                <td>: {{ $license->ownershipType }}</td>
                                            </tr>
                                            <tr>
                                                <th>অর্থ-বছর</th>
                                                <td>: {{ $license->businessYear }}</td>
                                            </tr>
                                            <tr>
                                                <th>ঠিকানা</th>
                                                <td>: {{ $license->location }}</td>
                                            </tr>
                                            <tr>
                                                <th>পোস্ট অফিস</th>
                                                <td>: {{ $license->postOffice }}</td>
                                            </tr>
                                            <tr>
                                                <th>থানা</th>
                                                <td>: {{ $license->policeStation }}</td>
                                            </tr>
                                            <tr>
                                                <th>জেলা</th>
                                                <td>: {{ $license->district }}</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    @endif
                                </div>
                            </div>
                        </div>
                      </div>
                  </div>
                </div>
@endsection
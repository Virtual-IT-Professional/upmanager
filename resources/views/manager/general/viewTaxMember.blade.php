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
                    <h4 class="card-title">সাধারন হোল্ডিং</h4>
                    <p class="card-description"> সাধারন হোল্ডিং সদস্যের প্রোফাইল </p>
                      <div class="row">
                        <div class="col-12">
                            @if(!empty($taxMember))
                            <div class="row align-items-center">
                                <div class="col-4 col-md-3 mx-auto text-center">
                                    <div class="form-group text-center">
                                    @if(!empty($taxMember->avatar))
                                        <img src="{{ asset('/public/upload/image/taxPayer/') }}/{{ $taxMember->avatar }}" alt="" class="w-75">
                                    @else
                                        <img src="{{ asset('public/staradmin/dist/') }}/assets/images/taxPayer.webp" alt="" class="w-25 img-thumbnail">
                                    @endif
                                    </div>
                                    <label for="avatar" class="fw-bold mb-2 mt-0 text-primary">করদাতার ছবি</label>
                                </div>
                                <div class="col-4 col-md-3 mx-auto text-center">
                                    <div class="form-group">
                                        @if(!empty($taxMember->holdingPic))
                                            <img src="{{ asset('/public/upload/image/generalHolding/') }}/{{ $taxMember->holdingPic }}" alt="" class="w-75">
                                        @else
                                            <img src="{{ asset('public/staradmin/dist/') }}/assets/images/building.jpg" alt="" class="w-50 img-thumbnail">
                                        @endif
                                    </div>
                                    <label for="holdingPic" class="fw-bold mb-2 text-success">হোল্ডিং/বাড়ির ছবি</label>
                                </div>
                            </div>
                            <a href="{{ route('editTaxMember',['id'=>$taxMember->id]) }}" class="btn btn-danger mb-4 btn-sm rounded-0">প্রোফাইল আপডেট</a>
                            <a href="{{ route('taxMember') }}" class="btn btn-success mb-4 btn-sm rounded-0">সকল প্রোফাইল</a>
                            <h3 class="bg-primary p-3 text-white">ব্যাক্তিগত তথ্য</h3>
                            <div class="row profile">
                                <div class="col-12 col-md-4">
                                    <table class="table border-left">
                                        <tbody>
                                            <tr>
                                                <th>করদাতার নাম</th>
                                                <td>: {{ $taxMember->taxPayer }}</td>
                                            </tr>
                                            <tr>
                                                <th>পিতা/স্বামীর নাম</th>
                                                <td>: {{ $taxMember->fName }}</td>
                                            </tr>
                                            <tr>
                                                <th>মাতার নাম</th>
                                                <td>: {{ $taxMember->mName }}</td>
                                            </tr>
                                            <tr>
                                                <th>জন্ম তারিখ</th>
                                                <td>: {{ $taxMember->taxPayer }}</td>
                                            </tr>
                                            <tr>
                                                <th>লিঙ্গ</th>
                                                <td>: {{ $taxMember->gender }}</td>
                                            </tr>
                                            <tr>
                                                <th>ধর্ম</th>
                                                <td>: {{ $taxMember->religion }}</td>
                                            </tr>
                                            <tr>
                                                <th>পেশা</th>
                                                <td>: {{ $taxMember->profession }}</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <div class="col-12 col-md-4">
                                    <table class="table border-left">
                                        <tbody>
                                            <tr>
                                                <th>হোল্ডিং নাম্বার</th>
                                                <td>: {{ $taxMember->holdingNumber }}</td>
                                            </tr>
                                            <tr>
                                                <th>গ্রাম/মহল্লা</th>
                                                <td>: {{ $taxMember->village }}</td>
                                            </tr>
                                            <tr>
                                                <th>ওয়ার্ড নং</th>
                                                <td>: {{ $taxMember->wordNo }}</td>
                                            </tr>
                                            <tr>
                                                <th>ডাকঘর</th>
                                                <td>: {{ $taxMember->postOffice }}</td>
                                            </tr>
                                            <tr>
                                                <th>উপজেলা</th>
                                                <td>: {{ $taxMember->policeStation }}</td>
                                            </tr>
                                            <tr>
                                                <th>জেলা</th>
                                                <td>: {{ $taxMember->district }}</td>
                                            </tr>
                                            <tr>
                                                <th>জাতীয়তা</th>
                                                <td>: {{ $taxMember->nationality }}</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <div class="col-12 col-md-4">
                                    <table class="table border-0">
                                        <tbody>
                                            <tr>
                                                <th>জাতীয় পরিচয়পত্র/পাসপোর্ট নাম্বার</th>
                                                <td>: {{ $taxMember->idCard }}</td>
                                            </tr>
                                            <tr>
                                                <th>মোবাইল নাম্বার</th>
                                                <td>: {{ $taxMember->mobile }}</td>
                                            </tr>
                                            <tr>
                                                <th>আধা-পাকা ঘর</th>
                                                <td>: {{ $taxMember->semiBuilding }}</td>
                                            </tr>
                                            <tr>
                                                <th>পাকা ঘর</th>
                                                <td>: {{ $taxMember->building }}</td>
                                            </tr>
                                            <tr>
                                                <th>বহুতল ভবন</th>
                                                <td>: {{ $taxMember->multiStoredBuilding }}</td>
                                            </tr>
                                            <tr>
                                                <th>কাচা ঘর</th>
                                                <td>: {{ $taxMember->rawHouse }}</td>
                                            </tr>
                                            <tr>
                                                <th>পরিবারের সদস্য সংখ্যা</th>
                                                <td>: {{ $taxMember->nationality }}</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <h3 class="bg-primary p-3 mt-4 text-white">ট্যাক্সের তথ্য</h3>
                                <div class="col-12">
                                    <table class="table border-0">
                                        <tbody>
                                            <tr>
                                                <th>অর্থ-বছর</th>
                                                <td>: {{ $taxMember->taxYear }}</td>
                                                <th>বাৎসরিক আয়</th>
                                                <td>: {{ $taxMember->yearlyIncome }}</td>
                                            </tr>
                                            <tr>
                                                <th>ট্যাক্সের পরিমাণ</th>
                                                <td>: {{ $taxMember->totalTax }}</td>
                                                <th>মন্তব্য(যদি থাকে)</th>
                                                <td>: {{ $taxMember->comment }}</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            @else
                            <div class="alert alert-info">Sorry! No profile found</div>
                            @endif
                        </div>
                      </div>
                  </div>
                </div>
              </div>
@endsection
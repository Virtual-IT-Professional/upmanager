@php 
    $menu = 'businesss';
@endphp
@extends('manager.include')
@section('adminTitle')
  Pirjatrapur Union Porishod
@endsection
@section('adminContent')              
                <div class="col-12 grid-margin stretch-card mx-auto">
                    <div class="card">
                        <div class="card-body p-4">
                            <h4 class="card-title">ব্যাবসায়ীক হোল্ডিং</h4>
                            <p class="card-description"> ব্যাবসায়ীক হোল্ডিং সকল সদস্যের তালিকা </p>
                            <a href="{{ route('newBusiness') }}" class="btn btn-primary mb-4 btn-sm rounded-0">নতুন প্রোফাইল</a>
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
                            <div class="row border mx-2 pb-4">
                                <div class="col-12 mx-auto">
                                    <table class="table table-striped">
                                        <thead class="text-center">
                                            <th>দোকানের নাম্বার</th>
                                            <th>প্রতিষ্ঠানের নাম</th>
                                            <th>পরিচালকের নাম</th>
                                            <th>ঠিকানা</th>
                                            <th>অপশন</th>
                                        </thead>
                                        <tbody class="text-center">
                                            @if(!empty($businessHolder) & count($businessHolder)>0)
                                            @foreach($businessHolder as $bh)
                                            @php
                                                $license = \App\Models\BusinessLicense::where(['holderId'=>$bh->id])->first();
                                            @endphp
                                            @if(!empty($license))
                                                @php
                                                    $shopNumber = $license->shopNo;
                                                    $shopName   = $license->businessName;
                                                    $location   = $license->location;
                                                @endphp
                                            @else
                                                @php
                                                    $shopNumber = "-";
                                                    $shopName   = "-";
                                                    $location   = "-";
                                                @endphp
                                            @endif
                                            <tr>
                                                <td>{{ $shopNumber }}</td>
                                                <td>{{ $shopName }}</td>
                                                <td>{{ $bh->ownerName }}</td>
                                                <td>{{ $location }}</td>
                                                <td>
                                                    @if($bh->profileStatus=='inactive')
                                                    <a href="{{ route('activeBusiness',['id'=>$bh->id]) }}" onclick="return confirm('এই প্রোফাইলটি একটিভ হতে যাচ্ছে! আপনি কি সত্যিই এটি করতে চান?');" class="btn btn-sm btn-success">প্রোফাইল সক্রিয় করুন</a>
                                                    @else
                                                    <a href="{{ route('inactiveBusiness',['id'=>$bh->id]) }}" onclick="return confirm('এই প্রোফাইলটি নিস্ক্রিয় হতে যাচ্ছে! আপনি কি সত্যিই এটি করতে চান?');" class="btn btn-sm btn-danger">প্রোফাইল নিস্ক্রিয় করুন</a>
                                                    @endif
                                                    <a href="{{ route('generateBusinessPass',['id'=>$bh->id]) }}" onclick="return confirm('আপনি কি সত্যিই পিন নাম্বার দেখতে চান?');" class="btn btn-sm btn-success">পিন নাম্বার দেখুন</a>
                                                    <a href="{{ route('viewBusiness',['id'=>$bh->id]) }}" class="btn btn-lg px-1" title="view document"><i class="fa-sharp fa-solid fa-eye fa-xl"></i></a>
                                                    <a href="{{ route('editBusiness',['id'=>$bh->id]) }}" class="btn btn-lg px-1" title="edit document"><i class="fa-sharp fa-solid fa-pen-to-square fa-xl"></i></a>
                                                    <a href="{{ route('delBusiness',['id'=>$bh->id]) }}" class="btn btn-lg px-1" title="delete document" onclick="return confirm('আপনি কি সত্যিই এটি ডিলেট করতে চান? এটি কিন্তু পুনরায় আর ফিরিয়ে আনা যাবেনা।');"><i class="fa-sharp-duotone fa-solid fa-trash fa-xl"></i></a>
                                            </td>
                                            </tr>
                                            @endforeach
                                            @else
                                            <tr class="text-center">
                                                <td colspan="5">Sorry! No data found</td>
                                            </tr>
                                            @endif
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
@endsection
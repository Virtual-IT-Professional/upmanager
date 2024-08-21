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
                            <h4 class="card-title">সাধারন হোল্ডিং সদস্যের তালিকা</h4>
                            <p class="card-description"> সাধারন হোল্ডিং সকল সদস্যের তালিকা </p>
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
                                            <th>হোল্ডিং নম্বর</th>
                                            <th>নাম</th>
                                            <th>পিতা/স্বামীর নাম</th>
                                            <th>জাতীয় পরিচয়পত্র</th>
                                            <th>অপশন</th>
                                        </thead>
                                        <tbody class="text-center">
                                            @if(!empty($taxMember) & count($taxMember)>0)
                                            @foreach($taxMember as $tm)
                                            <tr>
                                                <td>{{ $tm->holdingNumber }}</td>
                                                <td>{{ $tm->taxPayer }}</td>
                                                <td>{{ $tm->fName }}</td>
                                                <td>{{ $tm->idCard }}</td>
                                                <td>
                                                    @if($tm->status=='inactive')
                                                    <a href="{{ route('activeTaxPayer',['id'=>$tm->id]) }}" onclick="return confirm('এই প্রোফাইলটি একটিভ হতে যাচ্ছে! আপনি কি সত্যিই এটি করতে চান?');" class="btn btn-sm btn-success">প্রোফাইল সক্রিয় করুন</a>
                                                    @else
                                                    <a href="{{ route('inactiveTaxPayer',['id'=>$tm->id]) }}" onclick="return confirm('এই প্রোফাইলটি নিস্ক্রিয় হতে যাচ্ছে! আপনি কি সত্যিই এটি করতে চান?');" class="btn btn-sm btn-danger">প্রোফাইল নিস্ক্রিয় করুন</a>
                                                    @endif
                                                    <a href="{{ route('generateTaxPass',['id'=>$tm->id]) }}" onclick="return confirm('আপনি কি সত্যিই পিন নাম্বার দেখতে চান?');" class="btn btn-sm btn-success">পিন নাম্বার দেখুন</a>
                                                    <a href="{{ route('printHolding',['id'=>$tm->id]) }}" class="brn btn-lg px-1" title="print document"><i class="fa-regular fa-print fa-xl"></i></a>
                                                    <a href="{{ route('viewTaxMember',['id'=>$tm->id]) }}" class="brn btn-lg px-1" title="view document"><i class="fa-sharp fa-solid fa-eye fa-xl"></i></a>
                                                    <a href="{{ route('editTaxMember',['id'=>$tm->id]) }}" class="brn btn-lg px-1" title="edit document"><i class="fa-sharp fa-solid fa-pen-to-square fa-xl"></i></a>
                                                    <a href="{{ route('delTaxMember',['id'=>$tm->id]) }}" class="brn btn-lg px-1" title="delete document" onclick="return confirm('আপনি কি সত্যিই এটি ডিলেট করতে চান? এটি কিন্তু পুনরায় আর ফিরিয়ে আনা যাবেনা।');"><i class="fa-sharp-duotone fa-solid fa-trash fa-xl"></i></a>
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
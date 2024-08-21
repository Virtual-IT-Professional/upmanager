<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\BusinessHolding;
use App\Models\BusinessLicense;
use Hash;
use Illuminate\Support\Facades\Storage;
use File;

class BusinessController extends Controller
{
    public function newBusiness(){
        return view('manager.business.newBusiness');
    }

    public function saveBusiness(Request $requ){
        $chkProfile = BusinessHolding::where(['idCard'=>$requ->idCard])->get();
        if(!empty($chkProfile) && count($chkProfile)>0):
            return back()->with('error','দুঃখিত! এই ব্যাক্তির প্রোফাইল অলরেডি তৈরী হয়েছে।');
        endif;

        //Holder information save to business_holdings table
        $newHolder = new BusinessHolding();

        $newHolder->ownerName       = $requ->ownerName;
        $newHolder->idCard          = $requ->idCard;
        $newHolder->mobileNumber    = $requ->mobileNumber;
        $newHolder->fName           = $requ->fName;
        $newHolder->mName           = $requ->mName;
        $newHolder->gender          = $requ->gender;
        $newHolder->wordNo          = $requ->wordNo;
        $newHolder->dob             = $requ->dob;
        $newHolder->maritalStatus   = $requ->maritalStatus;
        $newHolder->village         = $requ->village;
        $newHolder->postOffice      = $requ->postOffice;
        $newHolder->policeStation   = $requ->policeStation;
        $newHolder->district        = $requ->district;
        $newHolder->profileStatus   = "inactive";
        if($requ->file('avatar')):
            $avatar = $requ->file('avatar');
            $newAvatar = rand().date('ymd').'.'.$avatar->getClientOriginalExtension();
            $avatar->move(public_path('upload/image/business'),$newAvatar);
            $newHolder->avatar = $newAvatar;
        endif;
        if($newHolder->save()):
            $newLicense = new BusinessLicense();

            $newLicense->holderId       = $newHolder->id;
            $newLicense->businessName   = $requ->businessName;
            $newLicense->shopNo         = $requ->shopNo;
            $newLicense->businessType   = $requ->businessType;
            $newLicense->businessYear   = $requ->businessYear;
            $newLicense->issueDate      = $requ->issueDate;
            $newLicense->ownershipType  = $requ->ownershipType;
            $newLicense->location       = $requ->location;
            $newLicense->postOffice     = $requ->busienssPost;
            $newLicense->policeStation  = $requ->businessPS;
            $newLicense->district       = $requ->businessDistrict;
            $newLicense->status         = 'expired';

            if($newLicense->save()):
                return back()->with('success','প্রোফাইল সফলভাবে তৈরী হয়েছে');
            else:
                return back()->with('error','দুঃখিত! প্রোফাইল সফলভাবে তৈরী হয়েছে কিন্তু লাইসেন্স তৈরীতে একটি সমস্যা হয়েছে। দয়া করে পরে আবার চেষ্টা করুন');
            endif;
        else:
            return back()->with('error','দুঃখিত! একটি সমস্যা হয়েছে। দয়া করে পরে আবার চেষ্টা করুন');
        endif;
    }

    public function businessList(){
        $businessHolder = BusinessHolding::orderBy('id','DESC')->get();
        return view('manager.business.businessList',['businessHolder'=>$businessHolder]);
    }

    public function editBusiness($id){
        $businessHolder = BusinessHolding::find($id);
        return view('manager.business.editBusiness',['business'=>$businessHolder]);
    }

    public function updateBusiness(Request $requ){
        $business = BusinessHolding::find($requ->businessId);
        if(!empty($business)):
            //Holder information save to business_holdings table
            $business->ownerName       = $requ->ownerName;
            $business->idCard          = $requ->idCard;
            $business->mobileNumber    = $requ->mobileNumber;
            $business->fName           = $requ->fName;
            $business->mName           = $requ->mName;
            $business->gender          = $requ->gender;
            $business->wordNo          = $requ->wordNo;
            $business->dob             = $requ->dob;
            $business->maritalStatus   = $requ->maritalStatus;
            $business->village         = $requ->village;
            $business->postOffice      = $requ->postOffice;
            $business->policeStation   = $requ->policeStation;
            $business->district        = $requ->district;
            $business->profileStatus   = $requ->profileStatus;

            if($business->save()):

                //business information save to business_license table
                $license = BusinessLicense::where(['holderId'=>$requ->businessId])->first();

                $license->businessName   = $requ->businessName;
                $license->shopNo         = $requ->shopNo;
                $license->businessType   = $requ->businessType;
                $license->businessYear   = $requ->businessYear;
                $license->issueDate      = $requ->issueDate;
                $license->ownershipType  = $requ->ownershipType;
                $license->location       = $requ->location;
                $license->postOffice     = $requ->busienssPost;
                $license->policeStation  = $requ->businessPS;
                $license->district       = $requ->businessDistrict;
                $license->status         = $requ->businessStatus;

                if($license->save()):
                    return back()->with('success','প্রোফাইল সফলভাবে আপডেট হয়েছে');
                else:
                    return back()->with('error','দুঃখিত! প্রোফাইল সফলভাবে আপডেট হয়েছে কিন্তু লাইসেন্স আপডেটে একটি সমস্যা হয়েছে। দয়া করে পরে আবার চেষ্টা করুন');
                endif;
            else:
                return back()->with('error','দুঃখিত! একটি সমস্যা হয়েছে। দয়া করে পরে আবার চেষ্টা করুন');
            endif;
        else:
            return back()->with('error','দুঃখিত! আপডেট করার মত কোন প্রোফাইল খুজে পাওয়া যায়নি');
        endif;
    }

    public function viewBusiness($id){
        $businessHolder = BusinessHolding::find($id);
        return view('manager.business.viewBusiness',['business'=>$businessHolder]);
    }

    public function activeBusiness($id){
        $business = BusinessHolding::find($id);
        if(empty($business->password)):
            $randPin                = mt_rand(10000000,99999999);
            // $hashPass               = Hash::make($randPass);
            $business->password     = $randPin;
        endif;

        $business->profileStatus    = "active";
        if($business->save()):
            return back()->with('success','প্রোফাইল একটিভ হয়েছে');
        else:
            return back()->with('error','দুঃখিত! একটি সমস্যা হয়েছে। দয়া করে পরে আবার চেষ্টা করুন');
        endif;
    }

    public function inactiveBusiness($id){
        $business = BusinessHolding::find($id);
        $business->profileStatus = "inactive";
        if($business->save()):
            return back()->with('success','প্রোফাইল সফলভাবে আপডেট হয়েছে');
        else:
            return back()->with('error','দুঃখিত! একটি সমস্যা হয়েছে। দয়া করে পরে আবার চেষ্টা করুন');
        endif;
    }

    public function delBusiness($id){
        $business = BusinessHolding::find($id);
        $license = BusinessLicense::where(['holderId'=>$id]);
        if($business->delete() && $license->delete()):
            return back()->with('success','প্রোফাইল সফলভাবে ডিলেট করা হয়েছে');
        else:
            return back()->with('error','দুঃখিত! একটি সমস্যা হয়েছে। দয়া করে পরে আবার চেষ্টা করুন');
        endif;
    }

    public function delBusinessAvatar($id){
        $business = BusinessHolding::find($id);
        $filePath = public_path('upload/image/business/').'/'.$business->avatar;
        if (File::exists($filePath)) {
            File::delete($filePath);
        }
        $business->avatar = "";
        if($business->save()):
            return back()->with('success','প্রোফাইল সফলভাবে আপডেট হয়েছে');
        else:
            return back()->with('error','দুঃখিত! একটি সমস্যা হয়েছে। দয়া করে পরে আবার চেষ্টা করুন');
        endif;
    }

    public function updateBusinessAvatar(Request $requ){
        $business = BusinessHolding::find($requ->memberId);
        if($requ->file('avatar')):
            $avatar = $requ->file('avatar');
            $newAvatar = rand().date('ymd').'.'.$avatar->getClientOriginalExtension();
            $avatar->move(public_path('upload/image/business'),$newAvatar);
            $business->avatar = $newAvatar;
        endif;
        if($business->save()):
            return back()->with('success','প্রোফাইল সফলভাবে আপডেট হয়েছে');
        else:
            return back()->with('error','দুঃখিত! একটি সমস্যা হয়েছে। দয়া করে পরে আবার চেষ্টা করুন');
        endif;
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\taxPayer;

class GeneralHolding extends Controller
{
    public function newIncomeTaxMember(){
        return view('manager.general.incomeTaxEntry');
    }
    
    public function TaxMember(){
        $taxMember = taxPayer::orderBy('id','DESC')->get();
        return view('manager.general.taxMember',['taxMember'=>$taxMember]);
    }

    public function saveTaxMember(Request $requ){
        $chk = taxPayer::where(['idCard'=>$requ->idCard])->get();
        if(!empty($chk) && count($chk)>0){
            return back()->with('error','User already exist');
        }

        $addMember = new taxPayer();
        $addMember-> taxPayer               = $requ->taxPayer;
        $addMember-> wordNo                 = $requ->wordNo;
        $addMember-> gender                 = $requ->gender;
        $addMember-> religion               = $requ->religion;
        $addMember-> idCard                 = $requ->idCard;
        $addMember-> profession             = $requ->profession;
        $addMember-> fName                  = $requ->fName;
        $addMember-> mName                  = $requ->mName;
        $addMember-> nationality            = $requ->nationality;
        $addMember-> dob                    = $requ->dob;
        $addMember-> totalMember            = $requ->totalMember;
        $addMember-> maleMember             = $requ->maleMember;
        $addMember-> femaleMember           = $requ->femaleMember;
        $addMember-> holdingNumber          = $requ->holdingNumber;
        $addMember-> village                = $requ->village;
        $addMember-> postOffice             = $requ->postOffice;
        $addMember-> policeStation          = $requ->policeStation;
        $addMember-> district               = $requ->district;
        $addMember-> multiStoredBuilding    = $requ->multiStoredBuilding;
        $addMember-> building               = $requ->building;
        $addMember-> semiBuilding           = $requ->semiBuilding;
        $addMember-> rawHouse               = $requ->rawHouse;
        $addMember-> taxYear                = $requ->taxYear;
        $addMember-> yearlyIncome           = $requ->yearlyIncome;
        $addMember-> totalTax               = $requ->totalTax;
        $addMember-> comments               = $requ->comments;
        $addMember-> status                 = 'inactive';
        if($requ->file('avatar')):
            $avatar = $requ->file('avatar');
            $newAvatar = rand().date('ymd').'.'.$avatar->getClientOriginalExtension();
            $avatar->move(public_path('upload/image/generalHolding'),$newAvatar);
            $addMember->avatar = $newAvatar;
        endif;
        if($requ->file('holdingPic')):
            $holding = $requ->file('holdingPic');
            $newHolding = rand().date('ymd').'.'.$holding->getClientOriginalExtension();
            $holding->move(public_path('upload/image/generalHolding'),$newHolding);
            $addMember->holdingPic = $newHolding;
        endif;

        if($addMember->save()):
            return back()->with('success','User successfully added');
        else:
            return back()->with('success','Something went wrong! Please try later.');
        endif;
    }
    
    public function editTaxMember($id){
        $taxMember = taxPayer::find($id);
        return view('manager.general.editTaxMember',['taxMember'=>$taxMember]);
    }

    public function updateTaxMember(Request $requ){
        $addMember = taxPayer::find($requ->memberId);
        if(empty($addMember)){
            return back()->with('error','Sorry! No user found');
        }

        $addMember-> taxPayer               = $requ->taxPayer;
        $addMember-> wordNo                 = $requ->wordNo;
        $addMember-> gender                 = $requ->gender;
        $addMember-> religion               = $requ->religion;
        $addMember-> idCard                 = $requ->idCard;
        $addMember-> profession             = $requ->profession;
        $addMember-> fName                  = $requ->fName;
        $addMember-> mName                  = $requ->mName;
        $addMember-> nationality            = $requ->nationality;
        $addMember-> dob                    = $requ->dob;
        $addMember-> totalMember            = $requ->totalMember;
        $addMember-> maleMember             = $requ->maleMember;
        $addMember-> femaleMember           = $requ->femaleMember;
        $addMember-> holdingNumber          = $requ->holdingNumber;
        $addMember-> village                = $requ->village;
        $addMember-> postOffice             = $requ->postOffice;
        $addMember-> policeStation          = $requ->policeStation;
        $addMember-> district               = $requ->district;
        $addMember-> multiStoredBuilding    = $requ->multiStoredBuilding;
        $addMember-> building               = $requ->building;
        $addMember-> semiBuilding           = $requ->semiBuilding;
        $addMember-> rawHouse               = $requ->rawHouse;
        $addMember-> taxYear                = $requ->taxYear;
        $addMember-> yearlyIncome           = $requ->yearlyIncome;
        $addMember-> totalTax               = $requ->totalTax;
        $addMember-> comments               = $requ->comments;
        $addMember-> status                 = $requ->status;

        if($addMember->save()):
            return back()->with('success','User successfully update');
        else:
            return back()->with('success','Something went wrong! Please try later.');
        endif;
    }
    
    public function viewTaxMember($id){
        $taxMember = taxPayer::find($id);
        return view('manager.general.viewTaxMember',['taxMember'=>$taxMember]);
    }
    
    public function printTaxMember($id){
        $taxMember = taxPayer::find($id);
        return view('manager.general.printTaxMember',['taxMember'=>$taxMember]);
    }
    
    public function delTaxMember($id){
        $taxMember = taxPayer::find($id);
        if($taxMember->delete()):
            return back()->with('success','Member deleted successfully');
        else:
            return back()->with('success','Something went wrong! Please try later.');
        endif;
    }
    
    public function activeTaxPayer($id){
        $taxMember = taxPayer::find($id);
        if(empty($taxMember->password)):
            $randPin                = mt_rand(10000000,99999999);
            $taxMember->password    = $randPin;
        endif;
        $taxMember->status      = "active";
        if($taxMember->save()):
            return back()->with('success','প্রোফাইল সক্রিয় করা হয়েছে');
        else:
            return back()->with('success','একটি সমস্যা হয়েছে। দয়া করে পরে আবার চেষ্ট করুন');
        endif;
    }
    
    public function inactiveTaxPayer($id){
        $taxMember = taxPayer::find($id);
        $taxMember->status = "inactive";
        if($taxMember->save()):
            return back()->with('success','প্রোফাইল নিস্ক্রিয় করা হয়েছে');
        else:
            return back()->with('success','একটি সমস্যা হয়েছে। দয়া করে পরে আবার চেষ্ট করুন');
        endif;
    }
    
    public function delTaxPayerAvatar($id){
        $taxMember = taxPayer::find($id);
        $taxMember->avatar = "";
        if($taxMember->save()):
            return back()->with('success','Avatar delete successfully');
        else:
            return back()->with('success','Something went wrong! Please try later.');
        endif;
    }
    
    public function delHoldingPic($id){
        $taxMember = taxPayer::find($id);
        $taxMember->holdingPic = "";
        if($taxMember->save()):
            return back()->with('success','Holding delete successfully');
        else:
            return back()->with('success','Something went wrong! Please try later.');
        endif;
    }
    
    public function updateTaxMemberAvatar(Request $requ){
        $taxMember = taxPayer::find($requ->memberId);
        if($requ->file('avatar')):
            $avatar = $requ->file('avatar');
            $newAvatar = rand().date('ymd').'.'.$avatar->getClientOriginalExtension();
            $avatar->move(public_path('upload/image/taxPayer'),$newAvatar);
            $taxMember->avatar = $newAvatar;
        endif;
        if($taxMember->save()):
            return back()->with('success','Member picture update successfully');
        else:
            return back()->with('success','Something went wrong! Please try later.');
        endif;
    }
    
    public function updateHoldingPic(Request $requ){
        $taxMember = taxPayer::find($requ->memberId);
        if($requ->file('holdingPic')):
            $holding = $requ->file('holdingPic');
            $newHolding = rand().date('ymd').'.'.$holding->getClientOriginalExtension();
            $holding->move(public_path('upload/image/generalHolding'),$newHolding);
            $taxMember->holdingPic = $newHolding;
        endif;
        if($taxMember->save()):
            return back()->with('success','Holding update successfully');
        else:
            return back()->with('success','Something went wrong! Please try later.');
        endif;
    }
    
}

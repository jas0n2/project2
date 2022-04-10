<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cover;
use App\Models\Setting;

class AdminController extends Controller
{
    
    public function getHome(){
        
        return view('admin.index');
    }

    public function getCover(){
        return view('admin.cover');
  
    }
    public function postCover(Request $request){

        $cover = new Cover();
        $cover->cover_name= $request->covername;
        $cover->fbenefit_policyholder=$request->fbenefit_poliyholder;
        $cover->fbenefit_familymember=$request->fbenefit_family;
        $cover->hospitalization=$request->hospitalization;
        $cover->hospitalization_desc=$request->hospitalization_desc;
        $cover->accidental=$request->acciddent;
        $cover->lifecover=$request->lifecover;
        $cover->life_premium=$request->lifepremium;
        $cover->pensions1=$request->ppremium1;
        $cover->pensions2=$request->ppremium2;

        if($cover->save()){

            return redirect()->back();
        }

    }
    public function postSettings(Request $request){
        $slidername ="";
        //return $request
            if(isset($request->image)){
                $slidername =time().'.'.$request->image->extension();

        $request->image->move(public_path('logo'),$slidername);
            }
       $settings =  Setting::find(1);
       $settings->phone1 = $request->phone1;
       $settings->logo = $slidername;
       $settings->phone2 = $request->phone2;
       $settings->phone3 = $request->phone3;
       $settings->phone4 = $request->phone4;
       $settings->email1 = $request->email1;
       $settings->email2 = $request->email2;
       $settings->email3 = $request->email3;
       $settings->address = $request->address;
       if($settings->update()){
           return redirect()->back();
       }
    }
    public function getSettings(){
$setting = Setting::find(1);
        return view('admin.settings',['setting'=>$setting]);
    }
public function calculateCover(Request $request){
$cover = Cover::find($request->id);
  $contribution = $request->contribution1 ;
  $withtwo =0.3 * $contribution;
    $withfinal = 0.7 *  $contribution;
$year = $request->year;
$premium = 0;
$premiumtype ="";
$aftertwo =0;
  $pensionmonths =($year *12);
$pensionsCal =  $request->contribution1;
if($request->type =="Daily" ){
    $totalamount = $cover->daily * 28;
    $premium =  $cover->daily;
    

    $premiumtype ="Daily Contribution";
     $deductions = $cover->life_premium + $cover->admin_fee + $request->contribution1;
 $wallet = ( $totalamount -  $deductions) * $pensionmonths;
  $pensionstotal=  $pensionmonths * $contribution;
$total=0;
$interest =0;
$admin =0;
//$co =0;
for($i=0; $i<24; $i++){
    $interest = $aftertwo * 0.10/12;
    $admin =($total + $interest) * 0.025/12;
     $contribution;
      $aftertwo = $aftertwo + $withfinal + $interest - $admin;  
}
for($i =0; $i<$pensionmonths; $i++){
      // $total =20;
      // $co = $i; 
  
     $interest = $total * 0.10/12;
      $admin =($total + $interest) * 0.025/12;
       $contribution;
        $total = $total + $withfinal + $interest - $admin;


}
//return $co;

//return $total;
}elseif($request->type =="Weekly"){
    $totalamount = $cover->weekly *4;
    $premium =  $cover->weekly;
    $premiumtype ="Weekly Contribution";
    $deductions = $cover->life_premium + $cover->admin_fee + $request->contribution1;
$wallet = ( $totalamount -  $deductions) * $pensionmonths;
 $pensionstotal=  $pensionmonths * $contribution;
$total=0;
$interest =0;
$admin =0;
//$co =0;
for($i=0; $i<24; $i++){
    $interest = $aftertwo * 0.10/12;
    $admin =($total + $interest) * 0.025/12;
     $contribution;
      $aftertwo = $aftertwo + $withfinal + $interest - $admin;  
}
for($i =0; $i<$pensionmonths; $i++){
     // $total =20;
     // $co = $i; 
 
    $interest = $total * 0.10/12;
     $admin =($total + $interest) * 0.025/12;
      $contribution;
      $total = $total + $withfinal + $interest - $admin;


}
}
//return $wallet;
return response()->json([
'plan'=>$cover->cover_name,
'wallet'=>number_format($wallet),
'premium'=>$premium,
'premiumtype'=>$premiumtype,
'retirementin'=>number_format($total),
'pensionstotal'=>number_format($pensionstotal),
'lpremium' =>$cover->life_premium,
'pensionsCal' =>$pensionsCal,
'years' =>$year,
'aftertwo'=>number_format($aftertwo),
'lifecover' =>$cover->lifecover,

]);
return $total;
}
    public function getCoverContrib(Request $request)
    {
         $request->id;
         return Cover::where('id',$request->id)->get(['pensions1', 'pensions2']);

         $cover =  Cover::find($request->id,['pensions1', 'pensions2']);
    }

    public function CoverCalculator($type, ){

    }
}

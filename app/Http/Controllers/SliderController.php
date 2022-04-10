<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Slider;
class SliderController extends Controller
{
    

    public function getNewSlider(){

        return view('admin.newslider');
    }


    public function getAllSliders(){
        $slider = Slider::all();
        return view('admin.sliders',['sliders'=>$slider]);

    }
    public function getEditSliders($id){
        $slider = Slider::find($id);
        return view('admin.editslide',['sliders'=>$slider]);

    }
    public function postNewSlider(Request $request){
        $this->validate($request,['content'=>'required','image'=>'required']);
        $slidername =time().'.'.$request->image->extension();

        $request->image->move(public_path('sliders'),$slidername);
        $slider = new Slider();
        $slider->content = $request->content;

        $slider->image = $slidername;
        if($slider->save()){

            return redirect()->back();
        }

    }
    public function postEditSliders(Request $request){

         $request;
          $slider =  Slider::find($request->id);

        $this->validate($request,['content'=>'required']);
        //return "D";
        if(isset($request->image)){
            $slidername =time().'.'.$request->image->extension();

            $request->image->move(public_path('sliders'),$slidername);
            $slider->image = $slidername;
        }
       
        $slider->content = $request->content;
        $slider->update();
        if($slider->update()){
            return redirect()->back();
        }

    }
}

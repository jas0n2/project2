<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Slider;
use App\Models\Contact;
use App\Models\Career;
use App\Models\Cover;
use App\Models\Post;
use App\Models\Page;

class HomeController extends Controller
{


    public function getNews(){
        $post = Post::all();
        return view('frontend.themes.insure.news',['posts'=>$post]);
    }
    public function getPage($slug){
        $page = Page::where('slug','=',$slug)->first();
        if($slug =="news"){
         $post = Post::all();
         return view('frontend.themes.insure.pagecontent',['page'=>$page,'posts'=>$post]);
   
         
        }
         file_put_contents('C:\xampp\htdocs\tag1\resources\views\frontend\themes\insure\dbcontent.blade.php',$page->content);
        return view('frontend.themes.insure.pagecontent',['page'=>$page]);

    }
    public function getHome(){
     $cover = Cover::all();
          $post = Post::all();

$slides = Slider::all();
        return view('frontend.themes.insure.index',['slides'=>$slides,'cover'=> $cover,'post'=>$post]);
    }

    public function getFaq(){
        return view('frontend.themes.tag.faq');

    }
    public function getForm($type){

   //  return $type;
        if($type =="retirement"){
            return view('frontend.themes.tag.retirement');
    
        }elseif($type =="life"){
            return view('frontend.themes.tag.lifeclaim');
    
        }elseif($type =="cash"){
            return view('frontend.themes.tag.cashclaim');
    
        }
    }
public function getClaims(){
    return view('frontend.themes.tag.claims');
  
}
public function getAbout(){

$slides = Slider::all();
return view('frontend.themes.tag.about',['slides'=>$slides]);
}
public function getScheme(){

$slides = Slider::all();
return view('frontend.themes.tag.product',['slides'=>$slides]);
}
public function getContact(){

$slides = Slider::all();
return view('frontend.themes.insure.contact',['slides'=>$slides]);
}
public function getCareer(){

    $slides = Slider::all();
    return view('frontend.themes.insure.career',['slides'=>$slides]);
    }
    
    public function postCareer(Request $request){
        $this->validate($request,['name'=>'required','email'=>'required','dob'=>'required','education_level'=>'required','programs'=>'required','region'=>'required','town'=>'required']);
        $contact = new Career();
        $contact->name = $request->name;
        $contact->email = $request->email;
        $contact->phone = $request->phone;
        $contact->programs = $request->programs;
        $contact->region = $request->region;
        $contact->town = $request->town;
        $contact->education_level = $request->education_level;
        $contact->dob = $request->dob;

        if($contact->save()){
            return redirect()->back();
            return 'Thank you for Interest, We will get in touch with you Shortly';
    
    
        }
    }

public function postContact(Request $request){

    $this->validate($request,['name'=>'required','message'=>'required']);
    $contact = new Contact();
    $contact->name = $request->name;
    $contact->email = $request->email;
    $contact->phone = $request->phone;
    $contact->subject = $request->subject;
    $contact->message = $request->message;

    if($contact->save()){
        return 'Thank you for Message, Your Message has been successfully submited';


    }


}
 
public function getTerms(){
    return view('frontend.themes.tag.terms');

}
}

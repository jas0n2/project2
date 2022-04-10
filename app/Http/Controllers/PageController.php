<?php

namespace App\Http\Controllers;
use App\Models\Page;
use App\Models\Category;
use App\Models\Post;

use Illuminate\Http\Request;

class PageController extends Controller
{
    

    public function getNewPage(){


        return view('admin.newpage');
    }

    public function postNewPage(Request $request){

        $this->validate($request,['title'=>'required','content'=>'required']);
        $slug =strtolower (str_replace(' ','-',$request->title));

        $islug = Page::where('slug','=',$slug)->first();
        if($islug){
            $slug  = $islug."1";
        }
        $page = new Page();
        $page->title = $request->title;
        $page->content = $request->content;
        $page->slug = $slug;

        if($page->save()){
            return redirect()->back();
        }

    }

    public function getPages(){
        $pages = Page::all();
        return view('admin.pages',['pages'=>$pages]);
    }

    public function getEditPage($slug){
        $page = Page::where('slug','=',$slug)->first();
        return view('admin.editpage',['page'=>$page]);
 
    }

    public function postEditPage(Request $request){

        $this->validate($request,['title'=>'required','content'=>'required']);
        if($request->title != $request->oldtitle){
        $slug =strtolower (str_replace(' ','-',$request->title));

        $islug = Page::where('slug','=',$slug)->first();
        if($islug){
            $slug  = $islug."1";
        }
    }else{
        $slug  = $request->slug;
   
    }
        $page =  Page::find($request->id);
        $page->title = $request->title;
        $page->content = $request->content;
        $page->slug = $slug;

        if($page->update()){
            return redirect()->back();
        }

    }

    public function getNewCategory(){

        return view('admin.newcategory');
    }
    public function postNewCategory(Request $request){

        $this->validate($request,['name'=>'required']);

        $cat = new Category();
        $cat->name = $request->name;
        if($cat->save()){
            return redirect()->back();

        }
    }
    public function getNewPost(){
        $cats = Category::all();
        return view('admin.newpost',['cats'=>$cats]);
    }



    public function postNewPost(Request $request){
        $post = new Post();
        $this->validate($request,['title'=>'required','content'=>'required']);

        $slug =strtolower (str_replace(' ','-',$request->title));

        $islug = Post::where('slug','=',$slug)->first();
        if($islug){
            $slug  = $islug."1";
        }
        $post->title = $request->title;
        $post->content = $request->content;
        $post->slug = $slug;
        $post->user_id = 1;
        $post->cat_id = $request->catid;
        if($post->save()){
            return redirect()->back();
        }
    }

    public function getPosts(){
        $posts  = Post::all();

        return view('admin.posts',['posts'=>$posts]);
    }

    public function getEditpost($slug){
        $post = Post::where('slug','=',$slug)->first();
        $cats = Category::all();

        return view('admin.editpost',['post'=>$post,'cats'=>$cats]);
    }

    public function postEditPost(Request $request){

        $this->validate($request,['title'=>'required','content'=>'required']);
        if($request->title != $request->oldtitle){
        $slug =strtolower (str_replace(' ','-',$request->title));

        $islug = Post::where('slug','=',$slug)->first();
        if($islug){
            $slug  = $islug."1";
        }
    }else{
        $slug  = $request->slug;
   
    }
         $post =  Post::find($request->id);
        $post->title = $request->title;
        $post->content = $request->content;
        $post->slug = $slug;
        $post->cat_id = $request->catid;
        if($post->update()){
            return redirect()->back();
        }

    }

 
}

<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('/','App\Http\Controllers\HomeController@getHome')->name('home');
Route::get('/about-us','App\Http\Controllers\HomeController@getAbout')->name('abtus');
Route::get('/insurance-scheme','App\Http\Controllers\HomeController@getScheme')->name('scheme');
Route::get('/contact-us','App\Http\Controllers\HomeController@getContact')->name('contactus');
Route::post('/contact-us/submit','App\Http\Controllers\HomeController@postContact')->name('postcontactus');
Route::get('/career','App\Http\Controllers\HomeController@getCareer')->name('career');
Route::post('/career/submit','App\Http\Controllers\HomeController@postCareer')->name('postcareer');
Route::get('/terms-condition','App\Http\Controllers\HomeController@getTerms')->name('terms');
Route::get('/claims','App\Http\Controllers\HomeController@getClaims')->name('claims');
Route::get('/claims/form/{type}','App\Http\Controllers\HomeController@getForm')->name('form1');
Route::get('/faq','App\Http\Controllers\HomeController@getFaq')->name('faq');
Route::get('/news','App\Http\Controllers\HomeController@getNews')->name('news');
Route::get('/photo-gallary','App\Http\Controllers\HomeController@getFaq')->name('photo');
Route::get('/Programs','App\Http\Controllers\HomeController@getFaq')->name('program');
Route::get('/Seminars','App\Http\Controllers\HomeController@getFaq')->name('seminars');

Route::get('/page/{slug}','App\Http\Controllers\HomeController@getPage')->name('pages');


Route::group(['prefix'=>'dashboard','namespace'=>'App\Http\Controllers'],function () {

    Route::get('/','AdminController@getHome')->name('homeadmin');
    Route::get('/slider/new','SliderController@getNewSlider')->name('newslider');
    Route::get('/sliders','SliderController@getAllSliders')->name('allslider');
    Route::get('/slider/edit/{id}','SliderController@getEditSliders')->name('editslider');
    Route::post('/slider/edit/submit','SliderController@postEditSliders')->name('peditslider');
    Route::get('/settings','AdminController@getSettings')->name('settings');
    Route::post('/settings/submit','AdminController@postSettings')->name('psettings');

    Route::post('/slider/submit','SliderController@postNewSlider')->name('postnewslider');
    Route::get('/cover','AdminController@getCover')->name('coverpage');
    Route::post('/cover/submit','AdminController@postCover')->name('pcoverpage');
    Route::get('/cover/contribution','AdminController@getCoverContrib')->name('covercontr');
    Route::get('/cover/calculate','AdminController@calculateCover')->name('clcover');


    
    Route::get('/page/new','PageController@getNewPage')->name('newpage');
    Route::get('/pages','PageController@getPages')->name('allpages');
    Route::get('/page/edit/{slug}','PageController@getEditPage')->name('editpage');
    Route::get('/page/delete/{slug}','PageController@getDeletePage')->name('deletepage');
    Route::get('/post/category/new','PageController@getNewCategory')->name('catefories');
    Route::post('/post/category/submit','PageController@postNewCategory')->name('postcatgory');
    Route::get('/post/new','PageController@getNewPost')->name('newpost');
    Route::post('/post/submit','PageController@postNewPost')->name('pnewpost');
    Route::get('/posts','PageController@getPosts')->name('posts');
    Route::get('/post/edit/{slug}','PageController@getEditpost')->name('editpost');

    Route::post('/page/edit/submit','PageController@postEditPage')->name('posteditpage');
    Route::post('/post/edit/submit','PageController@postEditPost')->name('posteditpost');

    Route::post('/page/submit','PageController@postNewPage')->name('postnewpage');

});

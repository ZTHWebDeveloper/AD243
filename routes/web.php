<?php
use Auth;
Route::get('/', function () {
    return view('project.userInterface.home');
});
//For Company Show
Route::get('/companyshow',function(){

   if(Auth::check()){
     return view('project.company.companyInterface.home');
   }else{
   	return redirect('/');
   }
	
});
Route::get('/videoshow',function(){
	if(Auth::check()){
      return view('project.company.companyInterface.viewvideo');
	}else{
      return redirect('/');
	}
	
});

//For User Show 
Route::get('/userpostshow',function(){
	return view('project.userInterface.home');

});
Route::get('/uservideoshow',function(){
	return view('project.userInterface.userview');
});

//For Own Post And Video
Route::get('/ownpost',function(){
	if(Auth::check()){
       return view('project.company.companyInterface.ownviewpost');
	}else{
		return redirect('/');
	}
});
Route::get('/ownvideo',function(){
	if(Auth::check()){
       return view('project.company.companyInterface.ownviewvideo');
	}else{
		return redirect('/');
	}
	
});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/logout','Auth\LoginController@logout');

//By Package
Route::get('/package','PackageController@index');
Route::post('/package','PackageController@store');

Route::get('/buypackage/{id}','PackageController@show');
Route::post('/buypackage/{id}','PackageController@confirm');

Route::get('/history_package','PackageController@history');
//Package Lists
Route::get('package_lists','PackageController@showlist');

//Post Upload
Route::get('/post','PostController@index');
Route::post('/post','PostController@store');

//Video Uplaod
Route::get('/videoupload','VideoController@index');
Route::post('/videoupload','VideoController@store');

//Add Profile
Route::get('/addprofile/{id}','ProfileController@index');
Route::post('/addprofile/{id}','ProfileController@store');

//View Post
Route::get('allpost','ViewPostController@allpost');

//
Route::get('aboutus',function(){
	return view('project.userInterface.aboutus');
});
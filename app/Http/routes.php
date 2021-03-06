<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/


Route::group(['prefix'=> 'admin'],function(){
    Route::get('salut/{slug}-{id}',['as' => 'salut',function($slug, $id){
        return "lien : ". route('salut',['slug'=> 'nimportequoi', 'id'=>$id]);
    }])
        ->where('slug','[a-z0-9\-]+')
        ->where('id','[0-9]+')
    ;
});





Route::get('/', function () {
    return view('welcome');
});


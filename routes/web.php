<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\user;
use App\Http\Controllers\photos;
use App\Http\Controllers\register;

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


    Route::get('/',[user::class,'index']);
    Route::get('/about-us',[user::class,'aboutUS']);

    Route::resource('/photos',photos::class);

    Route::resource('/photos',photos::class);

    Route::get('/register',[register::class,'index']);

    Route::post('/register',[register::class,'register']);

    // Route::get('/', function () {
    //     return view('home');
    // });

    // Route::get('/about-us', function () {
    //     return view('about-us');
    // });
    
    // Route::get('/test',function() {
    //     echo "this is tesing the route";            
    // });

    // Route::get('/demo/{name?}/{id?}',function($name=NULL,$id = NULL) {
    //     $html = "<h1>this is testing the h1 tag</h1>";
    //     $data = compact('name', 'id','html');
    //     return view('demo')->with($data);
    // });

    // Route::get('/postapi',function(){
    //     echo "this is testing the post api";
    // });

    // Route::get('/unlessendunless/{name}/{email?}/{id?}',function($name,$email=NULL){
    //         $html = '';
    //         $html = '<h1>this is heading</h1>';
    //         $html.= '<p>this is paragraph</p>';
    //         $data = compact('name','email','html');
    //         return view('demo')->with($data);
    // });

    // Route::get('/postapi/{name}/{email?}/{password}',function($name,$email,$password){
    //     $data = compact('name','email','password');
    //     return view('postapi')->with($data);
    // });





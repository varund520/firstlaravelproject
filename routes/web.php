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

    Route::get('/', function () {
        return view('welcome');
    });

    Route::get('/test',function() {
        echo "this is tesing the route";    
    });


    Route::get('/demo/{name}/{id?}',function($name,$id = NULL) {
        $html = "<h1>this is testing the h1 tag</h1>";
        $data = compact('name', 'id','html');
        return view('demo')->with($data);
    });

    Route::post('/postapi',function(){
        echo "this is testing the post api";
    });

    Route::get('/unlessendunless/{name}/{email?}',function($name,$email){
        $data = compact('name','email');
        return view('demo')->with($data);
    });

    Route::get('/add-student',function(){
        return view('add-student');
    });






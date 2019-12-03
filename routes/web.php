<?php

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
    return view('app');
});
Route::get("/test",function (){
    return view("home");
});
Route::get("/v",function (){
    return view("app");
});
Route::post("/t",function (){
    echo  111;
});
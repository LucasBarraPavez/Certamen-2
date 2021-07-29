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

//Route::get('/', function () {
  //  return view('registrar_consola');
//});
Route::view("/","home")->name("home");


//Route::get("/registrar_juegos",function(){
  //  return view("registrar_juegos");
//});
Route::view("/registrar_juegos","registrar_juegos")->name("registrar_juegos");

//Route::get("/ver_consola",function(){
//    return view("ver_consola");
//});
Route::view("/ver_consola","ver_consola")->name("ver_consola");

//Route::get("/ver_juegos",function(){
//    return view("ver_juegos");
//});
Route::view("/ver_juegos","ver_juegos")->name("ver_juegos");

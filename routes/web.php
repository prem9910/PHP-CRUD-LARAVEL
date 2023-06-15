<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\usercontroller;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


Route::view('/','index');


Route::view('form','userform');

Route::post('adduser',[usercontroller::class,'insertdata']);
Route::get('/',[usercontroller::class,'showdata']);
Route::get('delete/{id}',[usercontroller::class,'deletedata']);
Route::get('edit/{id}',[usercontroller::class,'editdata']);
Route::post('/update',[usercontroller::class,'updatedata']);


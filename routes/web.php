<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\rekcontroller;
use App\Http\Controllers\excontroller;
use App\Http\Controllers\membercontroller;

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

Route::get('/', function () 
{
    return view('example');
}
);
 
 Route::get("user",[UserController::class,'show']);
 Route::get("registertable",[rekcontroller::class,'index']);

 
 Route::view('example','example');
 Route::post('example',[excontroller::class,'adddata']);


 Route::get('list',[membercontroller::class,'show']);

 
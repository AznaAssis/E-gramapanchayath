<?php

use Illuminate\Support\Facades\Route;
use App\http\controllers\indexController;
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

Route::get('/',[indexController::class,'index']);
// Route::get('/about',[indexController::class,'about']);
// Route::get('/contact',[indexController::class,'contact']);
// Route::get('/userregistration',[indexController::class,'userregistration']);
// Route::get('/userlogin',[indexController::class,'userlogin']);
// Route::get('/adminlogin',[indexController::class,'adminlogin']);
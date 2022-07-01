<?php

use Illuminate\Support\Facades\Route;
use App\http\controllers\indexController;
use App\http\controllers\adminController;
use App\http\controllers\gpController;
use App\http\controllers\userController;
use App\http\controllers\secretaryController;
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
Route::get('/about',[indexController::class,'about']);
Route::get('/contact',[indexController::class,'contact']);
Route::get('/userregisteration',[indexController::class,'userregisteration']);
Route::post('/useraction',[indexController::class,'useraction']);
Route::get('/userlogin',[indexController::class,'userlogin']);
Route::get('/adminlogin',[indexController::class,'adminlogin']);
Route::get('/gplogin',[indexController::class,'gplogin']);
Route::get('/slogin',[indexController::class,'slogin']);
Route::post('/userloginaction',[indexController::class,'userloginaction']);
Route::post('/adminloginaction',[indexController::class,'adminloginaction']);
Route::post('/gploginaction',[indexController::class,'gploginaction']);
Route::post('/secretaryloginaction',[indexController::class,'secretaryloginaction']);
Route::get('/viewpanchayath',[indexController::class,'viewpanchayath']);
Route::post('/viewgp',[indexController::class,'viewgp']);

Route::get('/adminindex',[adminController::class,'index']);
Route::get('/addgaramapanchayath',[adminController::class,'addgaramapanchayath']);
Route::get('/editgp/{id}',[adminController::class,'editgp']);
Route::get('/deletegp/{id}',[adminController::class,'deletegp']);
Route::get('/viewgramapanchayath',[adminController::class,'viewgramapanchayath']);
Route::get('/viewsecretary',[adminController::class,'viewsecretary']);
Route::get('/deletesecretary/{id}',[adminController::class,'deletesecretary']);
Route::get('/addsecretary',[adminController::class,'addsecretary']);
Route::post('/addsecretaryaction',[adminController::class,'addsecretaryaction']);
Route::post('/addgpaction',[adminController::class,'addgpaction']);
Route::post('/editgpaction/{id}',[adminController::class,'editgpaction']);
Route::get('/manageloans',[adminController::class,'manageloans']);
Route::get('/viewloans',[adminController::class,'viewloans']);
Route::get('/viewusers',[adminController::class,'viewusers']);
Route::get('/viewservices',[adminController::class,'/viewservices']);
// Route::get('/viewcomplaints',[adminController::class,'viewcomplaints']);
Route::get('/viewfeedback',[adminController::class,'viewfeedback']);


Route::get('/gpindex',[gpController::class,'index']);
Route::get('/viewdetails',[gpController::class,'viewdetails']);
Route::get('/gp/viewsecretary',[gpController::class,'viewsecretary']);
Route::get('/viewapplication',[gpController::class,'viewapplication']);
Route::get('/addcatecategory',[gpController::class,'addcatecategory']);
Route::get('/viewcategory',[gpController::class,'viewcategory']);
Route::get('/gp/managescheme',[gpController::class,'managescheme']);
Route::post('/schemeaction',[gpController::class,'schmeaction']);
Route::get('/editscheme/{id}',[gpController::class,'editscheme']);
Route::post('/editschemeaction/{id}',[gpController::class,'editschemeaction']);
Route::get('/gp/viewusers',[gpController::class,'viewusers']);
Route::post('/addcataction',[gpController::class,'addcataction']);
Route::get('/editcategory/{id}',[gpController::class,'editcategory']);
Route::post('/editcategoryaction/{id}',[gpController::class,'editcategoryaction']);
Route::get('/deletecategory/{id}',[gpController::class,'deletecategory']);

Route::get('/sindex',[secretaryController::class,'index']);
Route::get('/s/viewdetails',[secretaryController::class,'viewdetails']);
// Route::get('/gp/viewsecretary',[secretaryController::class,'viewsecretary']);
// Route::get('/viewapplication',[secretaryController::class,'viewapplication']);
Route::get('/s/viewcategory',[secretaryController::class,'viewcategory']);
// Route::get('/gp/manageloans',[secretaryController::class,'manageloans']);
// Route::get('/gp/viewloans',[secretaryController::class,'viewloans']);


Route::get('/userindex',[userController::class,'userindex']);

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
Route::get('/logout',[indexController::class,'logout']);



Route::get('/adminindex',[adminController::class,'index']);
Route::get('/addgaramapanchayath',[adminController::class,'addgaramapanchayath']);
Route::get('/editgp/{id}',[adminController::class,'editgp']);
Route::get('/deletegp/{id}',[adminController::class,'deletegp']);
Route::get('/viewgramapanchayath',[adminController::class,'viewgramapanchayath']);
Route::get('/viewsecretary',[adminController::class,'viewsecretary']);
Route::post('/addgpaction',[adminController::class,'addgpaction']);
Route::post('/editgpaction/{id}',[adminController::class,'editgpaction']);
Route::get('/viewcategory',[adminController::class,'viewcategory']);
Route::get('/viewusers',[adminController::class,'viewusers']);
Route::get('/viewschemes',[adminController::class,'viewschemes']);
Route::get('/viewfeedback',[adminController::class,'viewfeedback']);




Route::get('/gp/gpindex',[gpController::class,'index']);
Route::get('/gp/secretary',[gpController::class,'secretary']);
Route::post('/gp/addsecretaryaction',[gpController::class,'addsecretaryaction']);
Route::get('/gp/deletesecretary/{id}',[gpController::class,'deletesecretary']);
Route::get('/gp/editsecretary/{id}',[gpController::class,'editsecretary']);
Route::post('/gp/editsecretaryaction/{id}',[gpController::class,'editsecretaryaction']);
Route::get('/gp/viewdetails',[gpController::class,'viewdetails']);
Route::get('/gp/viewapplication',[gpController::class,'viewapplication']);
Route::get('/gp/viewcertificate',[gpController::class,'viewcertificate']);
Route::get('/gp/category',[gpController::class,'category']);
Route::get('/gp/schemes',[gpController::class,'scheme']);
Route::post('/gp/schemeaction',[gpController::class,'schmeaction']);
Route::get('/gp/editscheme/{id}',[gpController::class,'editscheme']);
Route::get('/gp/deletescheme/{id}',[gpController::class,'deletescheme']);
Route::post('/gp/editschemeaction/{id}',[gpController::class,'editschemeaction']);
Route::get('/gp/viewusers',[gpController::class,'viewusers']);
Route::post('/gp/categoryaction',[gpController::class,'categoryaction']);
Route::get('/gp/editcategory/{id}',[gpController::class,'editcategory']);
Route::post('/gp/editcategoryaction/{id}',[gpController::class,'editcategoryaction']);
Route::get('/gp/deletecategory/{id}',[gpController::class,'deletecategory']);
Route::get('/gp/viewservices',[gpController::class,'viewservices']);

Route::get('/sindex',[secretaryController::class,'index']);
Route::get('/s/viewdetails',[secretaryController::class,'viewdetails']);
Route::get('/gp/viewsecretary',[secretaryController::class,'viewsecretary']);
Route::get('/viewapplication',[secretaryController::class,'viewapplication']);
Route::get('/s/viewcategory',[secretaryController::class,'viewcategory']);
Route::get('/addnews',[secretaryController::class,'addnews']);
Route::get('/gp/manageloans',[secretaryController::class,'manageloans']);
Route::get('/gp/viewloans',[secretaryController::class,'viewloans']);


Route::get('/userindex',[userController::class,'userindex']);
Route::get('/editprofile',[userController::class,'editprofile']);
Route::get('/u/viewpanchayath',[userController::class,'viewpanchayath']);
Route::get('/schemesandcertificate',[userController::class,'schemesandcertificate']);
Route::get('/readscheme/{id}',[userController::class,'readscheme']);
Route::get('/applycertificates/{id}',[userController::class,'applycertificates']);
Route::get('/applyscheme/{id}',[userController::class,'applyscheme']);
Route::get('/view',[userController::class,'view']);
Route::post('/schemeapllyaction/{id}',[userController::class,'schemeapllyaction']);
Route::get('/applycertificates/{name}',[userController::class,'applycertificates']);
Route::post('/birthcertificateaction',[userController::class,'birthcertificateaction']);
Route::post('/deathcertificateaction',[userController::class,'deathcertificateaction']);
Route::post('/marrigecertificateaction',[userController::class,'marrigecertificateaction']);
Route::post('/commoncertificateaction',[userController::class,'commoncertificateaction']);
Route::post('/userviewschemes',[userController::class,'birthcertificateaction']);
Route::post('/viewusercertificate',[userController::class,'deathcertificateaction']);
Route::post('/marrigecertificateaction',[userController::class,'marrigecertificateaction']);
Route::post('/commoncertificateaction',[userController::class,'commoncertificateaction']);


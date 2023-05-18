<?php

use App\Http\Controllers\adminController;
use App\Http\Controllers\indexController;
use App\Http\Controllers\fishController;
use Illuminate\Support\Facades\Route;


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

Route::get('/', [indexController::class,'index']);
Route::get('/gallery',[indexController::class,'gallery']);
Route::get('/about',[indexController::class,'about']);
Route::get('/contact',[indexController::class,'contact']);
Route::post('/addcontactaction',[indexController::class,'addcontactaction']);
Route::get('/registration',[indexController::class,'registration']);
Route::post('/addregisteraction',[indexController::class,'addregisteraction']);
Route::get('/userlogin',[indexController::class,'userlogin']);
Route::post('/userloginaction',[indexController::class,'userloginaction']);








Route::get('/adminindex',[adminController::class,'index']);
Route::get('/addabout',[adminController::class,'addabout']);
Route::get('/viewabout',[adminController::class,'viewabout']);
Route::get('/addgallery',[adminController::class,'addgallery']);
Route::get('/viewgallery',[adminController::class,'viewgallery']);
Route::get('/addproducts',[adminController::class,'addproducts']);
Route::post('/addproductaction',[adminController::class,'addproductaction']);
Route::get('/viewproducts',[adminController::class,'viewproducts']);
Route::get('/addreceipe',[adminController::class,'addreceipe']);
Route::get('/viewreceipe',[adminController::class,'viewreceipe']);
Route::get('/addcategory',[adminController::class,'addcategory']);
Route::get('/viewcategory',[adminController::class,'viewcategory']);
Route::get('/vieworders',[adminController::class,'vieworders']);
Route::get('/viewpayments',[adminController::class,'viewpayments']);
Route::get('/viewusers',[adminController::class,'viewusers']);
Route::get('/vieworders',[adminController::class,'vieworders']);


Route::post('/addaboutaction',[adminController::class,'addaboutaction']);
Route::post('/addgalleryaction',[adminController::class,'addgalleryaction']);
Route::post('/addreceipeaction',[adminController::class,'addreceipeaction']);
Route::post('/addcategoryaction',[adminController::class,'addcategoryaction']);

Route::get('/viewaboutedit/{id}',[adminController::class,'viewaboutedit']);
Route::post('/abouteditaction/{id}',[adminController::class,'abouteditaction']);
Route::get('/viewaboutdel/{id}',[adminController::class,'viewaboutdel']);
Route::get('/viewgalleryedit/{id}',[adminController::class,'viewgalleryedit']);
Route::post('/editgalleryaction/{id}',[adminController::class,'editgalleryaction']);
Route::get('/gallerydel/{id}',[adminController::class,'gallerydel']);
Route::get('/receipeedit/{id}',[adminController::class,'receipeedit']);
Route::post('/editreceipeaction/{id}',[adminController::class,'editreceipeaction']);
Route::get('/receipedel/{id}',[adminController::class,'receipedel']);
Route::get('/viewcatedit/{id}',[adminController::class,'viewcatedit']);
Route::post('/editcataction/{id}',[adminController::class,'editcataction']);
Route::get('/viewcatdelete/{id}',[adminController::class,'viewcatdelete']);
Route::get('/viewcontact',[adminController::class,'viewcontact']);
Route::get('/viewuser',[adminController::class,'viewuser']);
Route::get('/productedit/{id}',[adminController::class,'productedit']);
Route::post('/editproductaction/{id}',[adminController::class,'editproductaction']);
Route::get('/productdel/{id}',[adminController::class,'productdel']);
Route::get('/adminlogin',[adminController::class,'adminlogin']);
Route::post('/adminloginaction',[adminController::class,'adminloginaction']);



Route::get('/userindex',[fishController::class,'index']);
Route::get('/uservieworders',[fishController::class,'vieworders']);
Route::get('/viewcart',[fishController::class,'viewcart']);
Route::get('/userviewreceipies',[fishController::class,'viewreceipies']);
Route::get('/myprofile',[fishController::class,'myprofile']);
Route::post('/myprofileaction',[fishController::class,'myprofileaction']);
Route::get('/userabout',[fishController::class,'userabout']);
Route::get('/userlogout',[fishController::class,'userlogout']);
Route::get('/userviewproducts',[fishController::class,'userviewproducts']);
Route::get('/addtocart/{id}',[fishController::class,'addtocart']);
Route::post('/addtocartaction/{id}',[fishController::class,'addtocartaction']);
Route::get('/cartdelete/{id}',[fishController::class,'cartdelete']);
Route::post('/proceedaction',[fishController::class,'proceedaction']);
Route::get('/proceed',[fishController::class,'proceed']);
Route::get('/uservieworders',[fishController::class,'uservieworders']);
Route::post('/categoryaction/{id}',[fishController::class,'categoryaction']);
Route::get('/view/{id}',[fishController::class,'view']);

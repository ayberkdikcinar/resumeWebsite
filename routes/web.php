<?php

use App\Http\Controllers\FrontController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\AdminPanelController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\UserAdminController;
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

//Front pages
Route::get('/',[FrontController::class, 'index'])->name('index');
Route::get('/login',[FrontController::class, 'login'])->name('login');
Route::get('/howitworks',[FrontController::class, 'howItWorks'])->name('howItWorks');
Route::get('/aboutUs',[FrontController::class, 'aboutUs'])->name('aboutUs');
Route::get('/contactUs',[FrontController::class, 'contactUs'])->name('contactUs');
Route::get('/termsOfUse',[FrontController::class, 'termsOfUse'])->name('termsOfUse');

Route::prefix('')->middleware('isLoggedIn')->group(function(){
   Route::get('/profile',[FrontController::class, 'profile'])->name('profile');
   
   Route::prefix('admin')->name('admin.')->middleware('isAdmin')->group(function(){
      Route::get('/dashboard',[AdminPanelController::class, 'index'])->name('dashboard');
      Route::get('/settings/{id}',[AdminPanelController::class, 'settings'])->name('settings');
      Route::resource('userAdmins',UserAdminController::class);
      
      //Route::get('userAdmins/delete/{id}',[UserAdminController::class,'delete'])->name('delete.admin');
      Route::resource('user',UserController::class);
      Route::post('user/{val}',[UserController::class,'indexPost'])->name('indexPost');
      //Route::get('userCustomers/delete/{id}',[UserCustomerController::class,'delete'])->name('delete.customer');
   });
});



///sadece login olmuş kullanıcı girebilecek ve sadece 1 defa.
Route::get('/resume',[FrontController::class, 'resume'])->name('resume');

Route::post('/login',[LoginController::class, 'authenticate'])->name('login.post');
Route::post('/logout',[LoginController::class, 'logout'])->name('logout.post');


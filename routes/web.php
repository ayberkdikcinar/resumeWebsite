<?php

use App\Http\Controllers\FrontController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\AdminPanelController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\UserAdminController;
use App\Http\Controllers\UserResumeController;
use App\Http\Controllers\ResumeController;
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
      //Route::resource('userAdmins',UserAdminController::class);
      //Route::get('userAdmins/delete/{id}',[UserAdminController::class,'delete'])->name('delete.admin');
      
      //Route::get('user/index',[UserController::class,'indexM'])->name('user.indexM');
      Route::resource('user',UserController::class);
      
      //Route::get('userCustomers/delete/{id}',[UserCustomerController::class,'delete'])->name('delete.customer');
   });
   //Route::resource('course',CourseController::class);
   
   //multi-step form pages
   Route::prefix('resume')->name('resume.')->group(function(){

      Route::get('/about',[ResumeController::class, 'about'])->name('about');
      Route::post('/about',[ResumeController::class, 'addUserAbout'])->name('about.post');

      Route::get('/contact',[ResumeController::class, 'contact'])->name('contact');

      Route::get('/courses',[ResumeController::class, 'courses'])->name('courses');
      Route::post('/courses',[ResumeController::class, 'addCourse'])->name('courses.post');

      Route::get('/documents',[ResumeController::class, 'documents'])->name('documents');

      Route::get('/education',[ResumeController::class, 'education'])->name('education');
      Route::post('/education',[ResumeController::class, 'addEducation'])->name('education.post');

      Route::get('/experience',[ResumeController::class, 'experience'])->name('experience');
      Route::post('/experience',[ResumeController::class, 'addExperience'])->name('experience.post');

      Route::get('/job_preferences',[ResumeController::class, 'job_references'])->name('job_preferences');
      Route::post('/job_preferences',[ResumeController::class, 'addJobPreference'])->name('job_preferences.post');

      Route::get('/languages',[ResumeController::class, 'languages'])->name('languages');
      Route::post('/languages',[ResumeController::class, 'addLanguage'])->name('languages.post');

      Route::get('/skills',[ResumeController::class, 'skills'])->name('skills');
      Route::post('/skills',[ResumeController::class, 'addSkill'])->name('skills.post');
   });

});



///sadece login olmuş kullanıcı girebilecek ve sadece 1 defa.
Route::get('/resume',[FrontController::class, 'resume'])->name('resume');

Route::post('/login',[LoginController::class, 'authenticate'])->name('login.post');
Route::post('/logout',[LoginController::class, 'logout'])->name('logout.post');


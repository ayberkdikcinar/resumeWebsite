<?php

use App\Http\Controllers\FrontController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\AdminPanelController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ResumeController;
use App\Http\Controllers\MailController;
use Illuminate\Support\Facades\Route;



//Front pages
Route::get('/',[FrontController::class, 'index'])->name('index');
Route::get('/login',[FrontController::class, 'login'])->name('login');
Route::get('/how-it-works',[FrontController::class, 'howItWorks'])->name('howItWorks');
Route::get('/about-us',[FrontController::class, 'aboutUs'])->name('aboutUs');
Route::get('/contact-us',[FrontController::class, 'contactUs'])->name('contactUs');
Route::get('/terms-of-use',[FrontController::class, 'termsOfUse'])->name('termsOfUse');
Route::get('/privacy-policies',[FrontController::class, 'privacyPolicies'])->name('privacyPolicies');

Route::prefix('')->middleware('isLoggedIn')->group(function(){
   Route::get('/profile',[FrontController::class, 'profile'])->name('profile');

   Route::get('/change-password',[FrontController::class,'changePassword'])->name('changePassword');
   Route::post('user/change-password/{id}',[UserController::class,'changePassword'])->name('user.changePassword');
   
   Route::prefix('admin')->name('admin.')->middleware('isAdmin')->group(function(){
      //Route::get('/dashboard',[AdminPanelController::class, 'index'])->name('dashboard');
      Route::get('/settings/{id}',[AdminPanelController::class, 'settings'])->name('settings');
      Route::get('/website-settings',[AdminPanelController::class, 'siteSettings'])->name('siteSettings');
      //Route::resource('userAdmins',UserAdminController::class);ho
      //Route::get('userAdmins/delete/{id}',[UserAdminController::class,'delete'])->name('delete.admin');
      
      //MAIL
      Route::get('mail/{id}', [MailController::class, 'mailView'])->name('mailView');
      Route::post('send-mail/{id}', [MailController::class, 'mailSend'])->name('mailSend');
      
      ///UPDATE PAGE ROUTES
      Route::prefix('page')->name('page.')->group(function(){
         Route::get('/homepage-update',[AdminPanelController::class, 'homepageUpdate'])->name('homepageUpdate');
         Route::get('/aboutus-update',[AdminPanelController::class, 'aboutUsUpdate'])->name('aboutUsUpdate');
         Route::get('/contactus-update',[AdminPanelController::class, 'contactUsUpdate'])->name('contactUsUpdate');
         Route::get('/howitworks-update',[AdminPanelController::class, 'howItWorksUpdate'])->name('howItWorksUpdate');
         Route::get('/privacypolicies-update',[AdminPanelController::class, 'privacyPoliciesUpdate'])->name('privacyPoliciesUpdate');
         Route::get('/termsofuse-update',[AdminPanelController::class, 'termsOfUseUpdate'])->name('termsOfUseUpdate');
         Route::get('/loginpage-update',[AdminPanelController::class, 'loginpageUpdate'])->name('loginpageUpdate');
         
         
      });
      Route::post('/page-update/{slug}',[AdminPanelController::class, 'pagesUpdatePost'])->name('pagesUpdatePost');
      Route::post('/homepage-update',[AdminPanelController::class, 'homepageUpdatePost'])->name('homepageUpdatePost');
      Route::post('/website-settings',[AdminPanelController::class, 'siteSettingsPost'])->name('siteSettingsPost');
      
      Route::get('user/generate-pdf/{id}',[UserController::class,'generatePDF'])->name('user.generatePDF');
      //Route::get('user/download/{path}',[UserController::class,'downloadFile'])->name('user.download');
      Route::get('user/display-pdf/{id}',[UserController::class,'displayPDF'])->name('user.displayPDF');
      
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
      Route::post('/documents/{document_type}',[ResumeController::class, 'addDocument'])->name('documents.post');

      Route::get('/education',[ResumeController::class, 'education'])->name('education');
      Route::post('/education',[ResumeController::class, 'addEducation'])->name('education.post');

      Route::get('/experience',[ResumeController::class, 'experience'])->name('experience');
      Route::post('/experience',[ResumeController::class, 'addExperience'])->name('experience.post');

      Route::get('/job-preferences',[ResumeController::class, 'job_preferences'])->name('job_preferences');
      Route::post('/job-preferences',[ResumeController::class, 'addJobPreference'])->name('job_preferences.post');

      Route::get('/languages',[ResumeController::class, 'languages'])->name('languages');
      Route::post('/languages',[ResumeController::class, 'addLanguage'])->name('languages.post');

      Route::get('/skills',[ResumeController::class, 'skills'])->name('skills');
      Route::post('/skills',[ResumeController::class, 'addSkill'])->name('skills.post');

      Route::get('/delete-resource/{user_id}/{type}/{id}',[ResumeController::class, 'resourceDelete'])->name('resource_delete');
   });

   

});



///sadece login olmuş kullanıcı girebilecek ve sadece 1 defa.
Route::get('/resume',[FrontController::class, 'resume'])->name('resume');

Route::post('/login',[LoginController::class, 'authenticate'])->name('login.post');
Route::post('/logout',[LoginController::class, 'logout'])->name('logout.post');


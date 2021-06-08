<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\VisitorController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\CourseCntroller;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PhotoController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\ReviewController;

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

// Show Admin Home page
Route::get('/',[HomeController::class,'HomeIndex'])->middleware('loginCheck');

// Show Admin Visitor page
Route::get('/visitor',[VisitorController::class,'VisitorIndex'])->middleware('loginCheck');



// Show Admin Service page
Route::get('/service',[ServiceController::class,'ServiceIndex'])->middleware('loginCheck');
// Show all service data from database
Route::get('/getServiceData',[ServiceController::class,'GetServiceData'])->middleware('loginCheck');
// Add New Service
Route::post('/addService',[ServiceController::class,'addService'])->middleware('loginCheck');
// Delete Service
Route::post('/serviceDelete',[ServiceController::class,'serviceDelete'])->middleware('loginCheck');
// Get service details
Route::post('/serviceDetails',[ServiceController::class,'getServiceDetails'])->middleware('loginCheck');
// Update service data
Route::post('/serviceUpdate',[ServiceController::class,'serviceUpdate'])->middleware('loginCheck');






// Show Admin Service page
Route::get('/course',[CourseCntroller::class,'CourseIndex'])->middleware('loginCheck');
// Show all service data from database
Route::get('/getCourseData',[CourseCntroller::class,'getCourseData'])->middleware('loginCheck');
// Add New Service
Route::post('/addCourse',[CourseCntroller::class,'addCourse'])->middleware('loginCheck');
// Delete Service
Route::post('/courseDelete',[CourseCntroller::class,'courseDelete'])->middleware('loginCheck');
// Get service details
Route::post('/courseDetails',[CourseCntroller::class,'getCourseDetails'])->middleware('loginCheck');
// Update service data
Route::post('/courseUpdate',[CourseCntroller::class,'courseUpdate'])->middleware('loginCheck');





// Admin Login
Route::get('/Login', [LoginController::class,'LoginIndex']);
// Try Admin Login 
Route::post('/onLogin', [LoginController::class,'onLogin']);
// Admin Logout
Route::get('/Logout', [LoginController::class,'onLogout'])->middleware('loginCheck');



// Show Admin Gallery Veiw
Route::get('/gallery', [PhotoController::class,'index'])->middleware('loginCheck');
// Upload & Save Photo
Route::post('/PhotoUpload', [PhotoController::class,'PhotoUpload'])->middleware('loginCheck');
// Load photo inside admin view
Route::get('/LoadPhoto', [PhotoController::class,'LoadPhoto'])->middleware('loginCheck');
// Load more image
Route::get('/LoadMore/{id}', [PhotoController::class,'LoadMore'])->middleware('loginCheck');
// Delete Photo 
Route::post('/deletePhoto', [PhotoController::class,'deletePhoto'])->middleware('loginCheck');






// Admin Panel Projects Management
Route::get('/contact',  [ContactController::class,'ContactIndex'])->middleware('loginCheck');

Route::get('/getContactData',  [ContactController::class,'getContactData'])->middleware('loginCheck');
Route::post('/ContactDelete',  [ContactController::class,'ContactDelete'])->middleware('loginCheck');





// Admin Panel Projects Management
Route::get('/project',  [ProjectController::class,'ProjectIndex'])->middleware('loginCheck');
Route::get('/getProjectData',  [ProjectController::class,'getProjectData'])->middleware('loginCheck');
Route::post('/projectDetails',  [ProjectController::class,'getProjectDetails'])->middleware('loginCheck');
Route::post('/projectDelete',  [ProjectController::class,'ProjectDelete'])->middleware('loginCheck');
Route::post('/projectUpdate',  [ProjectController::class,'ProjectUpdate'])->middleware('loginCheck');
Route::post('/projectAdd',  [ReviewController::class,'ProjectAdd'])->middleware('loginCheck');




// Admin Panel Review Management
Route::get('/review',  [ReviewController::class,'ReviewIndex'])->middleware('loginCheck');
Route::get('/getReviewData',  [ReviewController::class,'getReviewData'])->middleware('loginCheck');
Route::post('/ReviewDetails',  [ReviewController::class,'getReviewDetails'])->middleware('loginCheck');
Route::post('/ReviewDelete',  [ReviewController::class,'ReviewDelete'])->middleware('loginCheck');
Route::post('/ReviewUpdate',  [ReviewController::class,'ReviewUpdate'])->middleware('loginCheck');
Route::post('/ReviewAdd',  [ReviewController::class,'ReviewAdd'])->middleware('loginCheck');
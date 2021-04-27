<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\VisitorController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\CourseCntroller;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PhotoController;

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


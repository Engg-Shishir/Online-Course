<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\VisitorController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\CourseCntroller;

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
Route::get('/',[HomeController::class,'HomeIndex']);

// Show Admin Visitor page
Route::get('/visitor',[VisitorController::class,'VisitorIndex']);



// Show Admin Service page
Route::get('/service',[ServiceController::class,'ServiceIndex']);
// Show all service data from database
Route::get('/getServiceData',[ServiceController::class,'GetServiceData']);
// Add New Service
Route::post('/addService',[ServiceController::class,'addService']);
// Delete Service
Route::post('/serviceDelete',[ServiceController::class,'serviceDelete']);
// Get service details
Route::post('/serviceDetails',[ServiceController::class,'getServiceDetails']);
// Update service data
Route::post('/serviceUpdate',[ServiceController::class,'serviceUpdate']);






// Show Admin Service page
Route::get('/course',[CourseCntroller::class,'CourseIndex']);
// Show all service data from database
Route::get('/getCourseData',[CourseCntroller::class,'getCourseData']);
// Add New Service
Route::post('/addCourse',[CourseCntroller::class,'addCourse']);
// Delete Service
Route::post('/courseDelete',[CourseCntroller::class,'courseDelete']);
// Get service details
Route::post('/courseDetails',[CourseCntroller::class,'getCourseDetails']);
// Update service data
Route::post('/courseUpdate',[CourseCntroller::class,'courseUpdate']);



// Admin Login Form
Route::get('/Login', [LoginController::class,'LoginIndex']);
// Try Admin Login 
Route::post('/onLogin', [LoginController::class,'onLogin']);
// Admin Logout
Route::get('/Logout', [LoginController::class,'onLogout']);
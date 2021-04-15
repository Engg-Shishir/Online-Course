<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\VisitorController;
use App\Http\Controllers\ServiceController;

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
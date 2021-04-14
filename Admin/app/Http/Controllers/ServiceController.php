<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Service;

class ServiceController extends Controller
{
    // This function return Admin->service.blade.php File
    function ServiceIndex(){
        return view('Service');
    }
}

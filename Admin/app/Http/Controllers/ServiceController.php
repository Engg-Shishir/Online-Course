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

    // Show all service data from database
    function GetServiceData(){
        $serviceData = json_encode(Service::orderBy('id','DESC')->get(),true);
        // return getting data who send request to do this. That is script getServiceData() meathoad.
        return $serviceData;
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Service;
use DB;

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
    // Add New Service
    function addService(Request $request){
        // Access sending Request Data
        $name = $request->input('name');
        $des = $request->input('des');
        $img = $request->input('img');
        
        // Insert Data
        $result = Service::insert(['service_name'=>$name,'service_des'=>$des,'service_img'=>$img]);
        
        // If Data insert properly
        if($result==true){
            return 1;// return which function send request
        }else{
            return 0;
        }
    }
    // Delete Service
    function serviceDelete(Request $request){
        $id = $request->input('id');
        $result = Service::where('id',$id)->delete();

        if($result==true){
            return 1;
        }else{
            return 0;
        }
    }
    // Get service details
    function getServiceDetails(Request $request){
        $id = $request->input('id');
        $serviceEditData = json_encode(Service::where('id',$id)->get(),true);

        return $serviceEditData;
    }
    // Updateservice data
    function serviceUpdate(Request $request){
        // Acess Request Data
        $id = $request->input('id');
        $name = $request->input('name');
        $des = $request->input('des');
        $img = $request->input('img');
        
        // Update Data
        $result = Service::where('id',$id)->update(['service_name'=>$name,'service_des'=>$des,'service_img'=>$img]);

        // If data update successfully
        if($result){
            return 1;
        }else{
            return 0;
        }
    }
}

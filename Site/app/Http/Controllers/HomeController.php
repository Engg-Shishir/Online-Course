<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\VisitorModel;
use App\Models\Service;
use App\Models\Course;
use App\Models\Contact;


class HomeController extends Controller
{
    function HomeIndex(){
        // Ip Get
        $UserIP=$_SERVER['REMOTE_ADDR'];

        // Date Time
        date_default_timezone_set("Asia/Dhaka");
        $timeDate= date("Y-m-d h:i:sa");

        // Insert User Ip Address in database
        VisitorModel::insert(['ip_address'=>$UserIP,'visit_time'=>$timeDate]);

        // Get All Service data and show in home page
        $serviceData = json_decode(Service::all(),true);

        $courseData  = json_decode(Course::orderBy('id','DESC')->take(6)->get(),true);

        return view('home',['serviceData'=>$serviceData,'courseData'=>$courseData]);

    }

    function ContactSend(Request $request){
        $contact_name=$request->input('contact_name');
        $contact_mobile= $request->input('contact_mobile');
        $contact_email=$request->input('contact_email');
        $contact_msg=$request->input('contact_msg');
        
        $result= Contact::insert(['contact_name'=> $contact_name,'contact_mobile'=> $contact_mobile,'contact_email'=>$contact_email,'contact_msg'=>$contact_msg]);

       if($result==true){

            return 1;
       }
       else{

           return 0;
       }

    }
} 

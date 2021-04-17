<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\VisitorModel;
use App\Models\Service;
use App\Models\Course;


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
} 

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Course;

class CoursesController extends Controller
{
    function CoursePage(){
        $CoursesData= json_decode(Course::orderBy('id','desc')->get());
        return view('Course',['CoursesData'=>$CoursesData]);
    }
}

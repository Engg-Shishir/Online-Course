<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Course;



class CourseCntroller extends Controller
{
    // This function return Admin->course.blade.php File
    function CourseIndex(){
        return view('Course');
    }


    // Show all service data from database
    function GetCourseData(){
        $courseData = json_encode(Course::orderBy('id','DESC')->get(),true);
        // return getting data who send request to do this. That is script getServiceData() meathoad.
        return $courseData;
    }




    // Add Course
    function addCourse(Request $req){
        $course_name= $req->input('course_name');
        $course_des = $req->input('course_des');
        $course_fee= $req->input('course_fee');     
        $course_totalenroll = $req->input('course_totalenroll'); 
        $course_totalclass= $req->input('course_totalclass'); 
        $course_link= $req->input('course_link'); 
        $course_img = $req->input('course_img'); 

        // Insert Data
        $result= Course::insert(['course_name'=>$course_name,'course_des'=>$course_des,'course_fee'=>$course_fee,'course_totalenroll'=>$course_totalenroll,'course_totalclass'=>$course_totalclass,'course_link'=>$course_link,'course_img'=>$course_img,
        ]);
   
        // If Data insert properly
        if($result==true){// return which function send request
          return 1;
        }
        else{
         return 0;
        }
    }
    // Delete course
    function courseDelete(Request $request){
        $id = $request->input('id');
        $result = Course::where('id',$id)->delete();

        if($result==true){
            return 1;
        }else{
            return 0;
        }
    }
    // Get course details
    function getCourseDetails(Request $request){
        $id = $request->input('id');
        $courseEditData = json_encode(Course::where('id',$id)->get(),true);

        return $courseEditData;
    }
    // Updatecourse data
    function courseUpdate(Request $request){
        // Acess Request Data
        $id = $request->input('id');
        $course_name = $request->input('course_name');
        $course_des = $request->input('course_des');
        $course_fee= $request->input('course_fee');     
        $course_totalenroll = $request->input('course_totalenroll'); 
        $course_totalclass= $request->input('course_totalclass'); 
        $course_link= $request->input('course_link'); 
        $course_img = $request->input('course_img'); 
        
        // Update Data
        $result = Course::where('id',$id)->update(['course_name'=>$course_name,'course_des'=>$course_des,'course_fee'=>$course_fee,'course_totalenroll'=>$course_totalenroll,'course_totalclass'=>$course_totalclass,'course_link'=>$course_link,'course_img'=>$course_img]);

        // If data update successfully
        if($result){
            return 1;
        }else{
            return 0;
        }
    }

}



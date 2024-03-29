<?php

namespace App\Http\Controllers;
use App\Models\Photo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PhotoController extends Controller
{
  
    // Show Admin Gallery Veiw
    function index(){
        return view('Photo');
    }


    // Upload & Save Photo
    function PhotoUpload(Request $request){
        // catch request data & store in storage\app\public folder
        $photoPath=  $request->file('photo')->store('public');
        // make some pich of data according to / , & get only original name
        $photoName=(explode('/',$photoPath))[1];
        // Host address
        $host=$_SERVER['HTTP_HOST'];
        //  final proces to upload image locatn
        $location="http://".$host."/storage/".$photoName;
        // insert data
        $result= Photo::insert(['location'=>$location]);

        // Return result, who send request
        return $result;
    }




    // Load photo inside admin view
    function LoadPhoto(Request $request){
        // First only show 3 image
        $result = Photo::take(6)->get();
        return $result;
    }   
    
    
    
    
    // Load more image
    function LoadMore(Request $request){
        $StartImg=$request->id;
        //return $LastID;
        // Make discition
        //$result = Photo::where('id','>=',$FirstID)->where('id','<',$LastID)->get();
        //$count = Photo::count();
        //$last = Photo::orderBy('id','desc')->first();
        //$LastID=$last['id']+3;
        $result = Photo::where('id','>',$StartImg)->take(3)->get();
        
        if($result){
            return $result;
        }else{
            return 0;
        }
    }



    

    // Delete Photo 
    function deletePhoto(Request  $request){
        $OldPhotoID=$request->input('id'); // Access request data
        // get specific column value from database
        $OldPhotoURL= Photo::where('id','=',$OldPhotoID)->value('location');
        // breake photoUrl according to /, which gives us an array
        $OldPhotoURLArray= explode("/", $OldPhotoURL);
        // Get array last data
        $OldPhotoName=end($OldPhotoURLArray);
        // Delete Photo file from Storage
        $DeletePhotoFile= Storage::delete('public/'.$OldPhotoName);
        // Delete Photo file location from database
        $DeleteRow= Photo::where('id','=',$OldPhotoID)->delete(); 
        
        //return result who send request
        return  $DeleteRow;
    }






}

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


}

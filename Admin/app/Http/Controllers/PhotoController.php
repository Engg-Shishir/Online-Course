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

}

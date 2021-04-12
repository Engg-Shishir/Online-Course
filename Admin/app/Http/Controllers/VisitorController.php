<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\VisitorModel;

class VisitorController extends Controller
{

    function VisitorIndex(){
        $visitorData =  json_decode(VisitorModel::orderBy('id','DESC')->take(5)->get(),true);
        /* $visitorData =  VisitorModel::all(); */
        return view('visitor',['visitorData'=>$visitorData]);
    }
}

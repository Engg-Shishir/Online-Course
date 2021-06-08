<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Project;

class ProjectsController extends Controller
{
        function ProjectPage(){
            $ProjectData=json_decode(Project::orderBy('id','desc')->get());
            return view('Projects',['ProjectData'=>$ProjectData]);
        }
}

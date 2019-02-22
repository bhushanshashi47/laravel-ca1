<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class coursescontroller extends Controller
{
    //
    
    public function index(){
    	$courses =new\App\courses;
    	$list= $courses::all();
    	//$list=["Project 1","Project 2"];
    	return view('courses',compact('list'));

    }

}

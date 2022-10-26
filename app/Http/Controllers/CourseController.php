<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CourseController extends Controller
{
    public function list(){
        return view('backend.pages.course');
    }
}

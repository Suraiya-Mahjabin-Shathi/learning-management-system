<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LearnerController extends Controller
{
    public function list(){
        return view('backend.pages.learner');
    }
}

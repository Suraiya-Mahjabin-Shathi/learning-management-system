<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FeedbackController extends Controller
{
    public function list(){
        return view('backend.pages.feedback');
    }
}

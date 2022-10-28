<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class QuizController extends Controller
{
    public function list(){
        return view('backend.pages.quizzes');
    }
}

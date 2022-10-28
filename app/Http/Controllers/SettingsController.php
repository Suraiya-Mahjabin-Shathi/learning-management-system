<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SettingsController extends Controller
{
    public function list(){
        return view('backend.pages.settings');
    }
}

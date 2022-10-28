<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CertificateController extends Controller
{
    public function list(){
        return view('backend.pages.certificate');
    }
}

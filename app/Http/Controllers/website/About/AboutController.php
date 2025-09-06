<?php

namespace App\Http\Controllers\website\About;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function index(){
        return view('pages.about.about');
    }
}

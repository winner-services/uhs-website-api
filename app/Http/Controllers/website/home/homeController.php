<?php

namespace App\Http\Controllers\website\home;

use App\Http\Controllers\Controller;
use App\Models\About;
use Illuminate\Http\Request;

class homeController extends Controller
{
    public function index(){
         $data = About::first();
        return view('home.index',compact('data'));
    }
}

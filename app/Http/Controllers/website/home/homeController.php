<?php

namespace App\Http\Controllers\website\home;

use App\Http\Controllers\Controller;
use App\Models\About;
use App\Models\Event;
use Illuminate\Http\Request;

class homeController extends Controller
{
    public function index(){
         $data = About::first();
         $twoEvents = Event::latest()->take(2)->get();
        return view('home.index',compact('data','twoEvents'));
    }
}

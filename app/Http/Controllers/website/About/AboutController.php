<?php

namespace App\Http\Controllers\website\About;

use App\Http\Controllers\Controller;
use App\Models\About;
use App\Models\Team;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function index(){
        $data = About::first();
        $team = Team::all();
        return view('pages.about.about', compact('data','team'));
    }
}

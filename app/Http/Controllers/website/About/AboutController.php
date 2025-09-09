<?php

namespace App\Http\Controllers\website\About;

use App\Http\Controllers\Controller;
use App\Models\About;
use App\Models\Gallery;
use App\Models\Message;
use App\Models\objective;
use App\Models\Team;

class AboutController extends Controller
{
    public function index()
    {
        $countTeam = Team::count();
        $countMessage = Message::count();
        $data = About::first();
        $team = Team::all();
        $gallery = Gallery::latest()->paginate(4);
        return view('pages.about.about', compact('data', 'team','gallery','countTeam','countMessage'));
    }

    public function details(){
        $team = Team::inRandomOrder()->take(3)->get();
        $data = About::first();
        $objectives = objective::all();
        return view('pages.about.aboutDetails',compact('data','team','objectives'));
    }
}

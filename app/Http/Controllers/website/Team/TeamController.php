<?php

namespace App\Http\Controllers\website\Team;

use App\Http\Controllers\Controller;
use App\Models\About;
use App\Models\Event;
use App\Models\Gallery;
use App\Models\Team;

class TeamController extends Controller
{
    public function index()
    {
        $data = About::first();
        $team = Team::paginate(8);
        $twoEvents = Event::latest()->take(2)->get();
        return view('pages.team.team', compact('data', 'team', 'twoEvents'));
    }
}

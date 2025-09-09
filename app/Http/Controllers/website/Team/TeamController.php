<?php

namespace App\Http\Controllers\website\Team;

use App\Http\Controllers\Controller;
use App\Models\About;
use App\Models\Gallery;
use App\Models\Team;

class TeamController extends Controller
{
    public function index()
    {
        $data = About::first();
        $team = Team::paginate(8);
        return view('pages.team.team', compact('data', 'team'));
    }
}

<?php

namespace App\Http\Controllers\website\Project;

use App\Http\Controllers\Controller;
use App\Models\About;
use App\Models\Event;
use App\Models\Project;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function projectIndex()
    {
        $data = About::first();
        $twoEvents = Event::latest()->take(2)->get();
        $project = Project::latest()->get();
        return view('pages.projet.project', compact('data', 'twoEvents','project'));
    }
}

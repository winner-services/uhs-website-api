<?php

namespace App\Http\Controllers\website\home;

use App\Http\Controllers\Controller;
use App\Models\About;
use App\Models\Domaine;
use App\Models\Event;
use App\Models\Gallery;
use App\Models\Message;
use App\Models\Parternaire;
use App\Models\Project;
use App\Models\Slide;
use App\Models\Team;
use App\Models\Temoignage;

class homeController extends Controller
{
    public function index()
    {
        $domaine = Domaine::join('categories', 'domaines.category_id', 'categories.id')
            ->select('domaines.*', 'categories.designation as category')
            ->inRandomOrder()->take(3)->get();
        $data = About::first();
        $twoEvents = Event::latest()->take(2)->get();
        $slides = Slide::inRandomOrder()->get();
        $partner = Parternaire::latest()->get();
        $gallery = Gallery::latest()->paginate(4);
        $team = Team::all();
        $countTeam = Team::count();
        $countPartner = Parternaire::count();
        $countMessage = Message::count();
        $event = Event::latest()->paginate(3);
        $temoignage = Temoignage::inRandomOrder()->get();
        $projects = Project::inRandomOrder()->take(3)->get();
        return view('home.index', compact('domaine','countMessage','countPartner','countTeam','data', 'twoEvents', 'slides', 'partner','gallery','team','event','temoignage','projects'));
    }
}

<?php

namespace App\Http\Controllers\website\Offre;

use App\Http\Controllers\Controller;
use App\Models\About;
use App\Models\Event;
use App\Models\Offre;
use Illuminate\Http\Request;

class OffreController extends Controller
{
    public function indexOffreData(){
        $data = About::first();
        $twoEvents = Event::latest()->take(2)->get();
        $offres = Offre::latest()->get();
        return view('pages.offres.offre', compact('data','twoEvents','offres'));
    }
}

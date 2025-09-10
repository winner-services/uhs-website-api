<?php

namespace App\Http\Controllers\website\Event;

use App\Http\Controllers\Controller;
use App\Models\About;
use App\Models\Event;
use App\Models\Gallery;

class EventController extends Controller
{
    public function eventIndex(){
        $data = About::first();
        $event = Event::latest()->paginate(6);
        $twoEvents = Event::latest()->take(2)->get();
        return view('pages.event.event', compact('data','event','twoEvents'));
    }

    public function eventDetails($id){
        $data = About::first();
        $event = Event::find($id);
        $allEvents = Event::latest()->take(3)->get();
        $gallery = Gallery::latest()->paginate(4);
        $twoEvents = Event::latest()->take(2)->get();
        return view('pages.event.eventdetails', compact('data','event','allEvents','gallery','twoEvents'));
    }
}

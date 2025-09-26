<?php

namespace App\Http\Controllers\website\Donate;

use App\Http\Controllers\Controller;
use App\Models\About;
use App\Models\Event;
use App\Models\Gallery;
use Illuminate\Http\Request;

class DonateController extends Controller
{
    public function indexDonateData(){
        $data = About::first();
        $twoEvents = Event::latest()->take(2)->get();
        $gallery = Gallery::latest()->paginate(4);
        return view('pages.don.don', compact('data','twoEvents','gallery'));
    }
}

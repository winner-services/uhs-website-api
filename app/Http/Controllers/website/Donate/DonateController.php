<?php

namespace App\Http\Controllers\website\Donate;

use App\Http\Controllers\Controller;
use App\Models\About;
use App\Models\Event;
use Illuminate\Http\Request;

class DonateController extends Controller
{
    public function indexDonateData(){
        $data = About::first();
        $twoEvents = Event::latest()->take(2)->get();
        return view('pages.don.don', compact('data','twoEvents'));
    }
}

<?php

namespace App\Http\Controllers\website\Donate;

use App\Http\Controllers\Controller;
use App\Models\About;
use Illuminate\Http\Request;

class DonateController extends Controller
{
    public function indexDonateData(){
        $data = About::first();
        return view('pages.don.don', compact('data'));
    }
}

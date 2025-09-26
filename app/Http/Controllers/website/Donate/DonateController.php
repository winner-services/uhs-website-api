<?php

namespace App\Http\Controllers\website\Donate;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DonateController extends Controller
{
    public function indexDonateData(){
        return view('pages.don.don');
    }
}

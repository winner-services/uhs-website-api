<?php

namespace App\Http\Controllers\website\Donate;

use App\Http\Controllers\Controller;
use App\Models\About;
use App\Models\Donation;
use App\Models\Event;
use App\Models\Gallery;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class DonateController extends Controller
{
    public function indexDonateData(){
        $data = About::first();
        $twoEvents = Event::latest()->take(2)->get();
        $gallery = Gallery::latest()->paginate(4);
        return view('pages.don.don', compact('data','twoEvents','gallery'));
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(),[
            'name'    => 'required|string|max:255',
            'email'   => 'nullable|email',
            'phone'   => 'nullable|string|max:20',
            'amount'  => 'required|numeric|min:1',
            'message' => 'nullable|string',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->with('message', 'Les données envoyées ne sont pas valides !');
        }
        $data = $validator->validated();
        Donation::create($data);
        return redirect()->back()->with('success', 'Message envoyé avec succès !'); 
    }
}

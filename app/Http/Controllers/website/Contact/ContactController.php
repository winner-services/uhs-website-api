<?php

namespace App\Http\Controllers\website\Contact;

use App\Http\Controllers\Controller;
use App\Models\About;
use App\Models\Contact;
use App\Models\Event;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ContactController extends Controller
{
    public function contactIndex()
    {
        $data = About::first();
        $twoEvents = Event::latest()->take(2)->get();
        return view('pages.contact.contact', compact('data', 'twoEvents'));
    }

    public function contactStore(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'email' => 'nullable|email',
            'phone' => 'required|string',
            'message' => 'required|string'
        ]);
        if ($validator->fails()) {
            return redirect()->back()->with('message', 'Les données envoyées ne sont pas valides !');
        }
        $data = $validator->validated();
        Contact::create($data);
        return redirect()->back()->with('success', 'Message envoyé avec succès !');
    }
}

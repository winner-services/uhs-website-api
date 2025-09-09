<?php

namespace App\Http\Controllers\website\Message;

use App\Http\Controllers\Controller;
use App\Models\Message;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class MessageController extends Controller
{
    public function storeMessage(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'email' => 'nullable|email',
            'phone' => 'required|string',
            'address' => 'nullable|string',
            'message' => 'required|string'
        ]);
        if ($validator->fails()) {
            return redirect()->back()->with('message', 'Les données envoyées ne sont pas valides !');
        }
        $data = $validator->validated();
        Message::create($data);
        return redirect()->back()->with('success', 'Message envoyé avec succès !');
    }
}

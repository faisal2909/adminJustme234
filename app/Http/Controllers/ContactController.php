<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email',
            'noTelp' => 'required|numeric|digits_between:10,15',
            'message' => 'required|string',
        ]);

        // Menyimpan data ke database
        Contact::create($validated);

        // Redirect atau memberi pesan sukses
        return response()->json(['success' => 'Pesan Anda telah terkirim!'], 200);
    }
}


<?php

namespace App\Http\Controllers;

use App\Models\ContactMessage;  
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactMail;
use Validator;

class ContactController extends Controller
{
    public function showForm()
    {
        return view('landing.contact');
    }
    
    public function submitForm(Request $request)
    {
        // Validasi data
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email',
            'message' => 'required|string|max:1000',
        ]);

        ContactMessage::create([
            'name' => $validated['name'],
            'email' => $validated['email'],
            'message' => $validated['message'],
        ]);

        // Kirim email menggunakan Mailtrap
        Mail::to('aemanel74@gmail.com')->send(new ContactMail(
            $validated['name'], 
            $validated['email'], 
            $validated['message']
        ));
        
        // Redirect dengan pesan sukses
        return redirect()->route('contact.form')->with('success', 'Pesan Anda berhasil dikirim!');
    }

 

        public function showUs()
    {
        $us = ContactMessage::all();
        return view('emails.us', compact('us'));
    }

}

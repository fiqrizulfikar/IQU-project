<?php

namespace App\Http\Controllers;

use App\Models\ContactMessage;  
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactMail;
use Carbon\Carbon;
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
        return redirect()->route('contact.submit')->with('success', 'Pesan Anda berhasil dikirim!');
    }
 

        public function showUs()
    {
        $us = ContactMessage::all(); // Ambil semua data pesan
        return view('emails.us')->with('message', $us);
    }

        
    public function deleteMessage($id)
    {
        // Cari pesan berdasarkan ID
        $message = ContactMessage::findOrFail($id);
        $message->delete();
    
        return response()->json([
            'success' => true,
            'message' => 'Pesan berhasil dihapus.',
        ]);
    }
    

        public function deleteByTime(Request $request)
    {
        $timePeriod = $request->input('time-period');
        $now = Carbon::now();

        switch ($timePeriod) {
            case 'this_month':
                ContactMessage::where('created_at', '>=', $now->startOfMonth())->delete();
                break;
            case 'this_week':
                ContactMessage::where('created_at', '>=', $now->startOfWeek())->delete();
                break;
            case 'last_24_hours':
                ContactMessage::where('created_at', '>=', $now->subDay())->delete();
                break;
            case 'one_message':
                ContactMessage::latest()->first()->delete(); // Hapus pesan terakhir
                break;
        }

        return response()->json([
            'success' => true,
            'message' => 'Pesan berhasil dihapus berdasarkan periode waktu.',
        ]);
    }

    

}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PinController extends Controller
{
    // Menampilkan form PIN
    public function showPinForm()
    {
        return view('pin'); // Menampilkan form PIN
    }

    public function verifyPin(Request $request)
    {
        // Periksa apakah PIN yang dimasukkan benar
        if ($request->pin == '123456') {  // Gantilah dengan PIN yang sesuai
            // Jika benar, simpan status PIN di session
            $request->session()->put('admin_pin_verified', true);
            return redirect()->route('admin.index');  // Arahkan ke halaman dashboard admin
        }

        // Jika PIN salah, tampilkan pesan error
        return back()->with('error', 'PIN yang dimasukkan salah!');
    }
}

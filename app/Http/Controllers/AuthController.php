<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    // Fungsi untuk login
    
    public function login(Request $request)
    {
        // Validasi input
        $credentials = $request->only('email', 'password');


        if (Auth::attempt($credentials)) {
            
            // Jika berhasil login
            return redirect('pendidikan')->with('success', 'Selamat datang di halaman dashboard!');
        } else {
           
            $user = \App\Models\User::where('email', $request->input('email'))->first();
    
            // Jika email tidak terdaftar
            if (!$user) {
                return redirect('login')->withErrors('Kamu belum terdaftar');
            } else {
                // Jika password salah
                return redirect('login')->withErrors('Password salah');
            }
        }
        
      
    }

       public function register(Request $request)
    {
        // Validasi input
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8|confirmed',
        ]);
        
        
        // Simpan pengguna baru ke database
        $user = new User();
        $user->name = $request->input('name');
        $user->email = $request->input('email');
        $user->password = Hash::make($request->input('password'));
    
        $user->role = 'user'; // Atau bisa sesuaikan sesuai logika aplikasi Anda
        // Simpan data pengguna
        $user->save();
        Auth::login($user);
    
        // Redirect ke halaman login setelah sukses mendaftar
        return redirect()->route('login');
    }
   

    // Fungsi untuk menampilkan dashboard
    public function contact()
    {
        if (Auth::check()) {
            return view('pendidikan');
        } else {
            return redirect()->route('pendidikan');
        }
        
    }

    
    
    // Fungsi untuk logout
    public function logout()
    {
        Auth::logout();
        return redirect()->route('mediasosial')->with('success', 'Anda telah logout');
    }
}

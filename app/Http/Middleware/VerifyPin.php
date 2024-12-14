<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class VerifyPin
{
    public function handle(Request $request, Closure $next)
    {
        // Pastikan session admin_pin_verified sudah di-set
        if (!$request->session()->has('admin_pin_verified') || $request->session()->get('admin_pin_verified') !== true) {
            // Jika belum diverifikasi, arahkan ke halaman PIN
            return redirect()->route('admin.index');
        }

        return $next($request); // Lanjutkan jika sudah terverifikasi
    }
}

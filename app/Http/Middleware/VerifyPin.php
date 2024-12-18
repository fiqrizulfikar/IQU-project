<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class VeryPin
{
    public function handle(Request $request, Closure $next)
    {
        if ($request->input('pin') !== '1234') {  // Ganti dengan PIN yang diinginkan
            return redirect()->route('login')->with('error', 'PIN Salah');
        }
        return $next($request);
    }
}

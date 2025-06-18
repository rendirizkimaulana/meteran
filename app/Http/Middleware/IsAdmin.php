<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth; // ✅ Tambahkan ini

class IsAdmin
{
    public function handle(Request $request, Closure $next)
    {
        if (Auth::check() && Auth::user()->role === 'admin') { // ✅ Ganti auth() dengan Auth::
            return $next($request);
        }

        return redirect('/home');
    }
}

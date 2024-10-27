<?php

namespace App\Http\Middleware;

use Closure;
use App\Models\Visitor;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class TrackVisitors
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        // Simpan kunjungan baru ke database
        Visitor::create([
            'ip_address' => $request->ip(),    // Simpan IP Address pengunjung
            'user_agent' => $request->userAgent(), // Simpan User Agent pengunjung
            'visited_at' => now(),             // Simpan waktu kunjungan
        ]);


        return $next($request);
    }
}

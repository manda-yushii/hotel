<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class CekRole
{
    /**
     * Cek apakah user yang login punya salah satu peran yang diizinkan.
     * Contoh pemakaian di route:
     *   ->middleware('role:Kasir')
     *   ->middleware('role:Administrator,Petugas,Operator')
     */
    public function handle(Request $request, Closure $next, string ...$peranYangDiizinkan): Response
    {
        $user = $request->user();

        if (! $user || ! $user->role || ! in_array($user->role->nama_peran, $peranYangDiizinkan)) {
            abort(403, 'Anda tidak punya akses ke halaman ini.');
        }

        return $next($request);
    }
}
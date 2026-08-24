<?php

namespace App\Http\Controllers;

use App\Models\Hotel;
use App\Models\Kamar;
use App\Models\Survei;
use App\Models\User;

class DashboardController extends Controller
{
    public function index()
    {
        $totalHotel = Hotel::count();
        $totalKamar = Kamar::count();
        $totalSurvei = Survei::count();
        $totalPengguna = User::count();

        $aktivitas = collect();

        if ($hotel = Hotel::latest()->first()) {
            $aktivitas->push([
                'label' => 'Data Hotel: ' . $hotel->nama_hotel,
                'badge' => 'Baru',
                'color' => 'success',
                'created_at' => $hotel->created_at,
            ]);
        }

        if ($kamar = Kamar::latest()->first()) {
            $aktivitas->push([
                'label' => 'Data Kamar: ' . $kamar->nomor_kamar,
                'badge' => 'Baru',
                'color' => 'primary',
                'created_at' => $kamar->created_at,
            ]);
        }

        if ($survei = Survei::latest()->first()) {
            $aktivitas->push([
                'label' => 'Survei: ' . $survei->nama_pelanggan,
                'badge' => $survei->status ? 'Selesai' : 'Diproses',
                'color' => $survei->status ? 'success' : 'warning',
                'created_at' => $survei->created_at,
            ]);
        }

        if ($user = User::latest()->first()) {
            $aktivitas->push([
                'label' => 'Data Pengguna: ' . $user->name,
                'badge' => $user->status ? 'Aktif' : 'Nonaktif',
                'color' => $user->status ? 'info' : 'secondary',
                'created_at' => $user->created_at,
            ]);
        }

        $aktivitas = $aktivitas->sortByDesc('created_at')->take(4);

        return view('dashboard', compact(
            'totalHotel',
            'totalKamar',
            'totalSurvei',
            'totalPengguna',
            'aktivitas'
        ));
    }
}
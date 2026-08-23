<?php

namespace App\Http\Controllers;

use App\Models\Hotel;
use App\Models\Kamar;
use App\Models\Survei;
use Illuminate\Http\Request;

class SurveiController extends Controller
{
    /**
     * Halaman Form Survei (input data baru).
     */
    public function create()
    {
        $hotels = Hotel::orderBy('nama_hotel')->get();
        $kamar = Kamar::orderBy('nomor_kamar')->get();

        return view('survei', compact('hotels', 'kamar'));
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'nama_pelanggan' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'hotel_id' => 'required|exists:hotels,id',
            'kamar_id' => 'nullable|exists:kamar,id',
            'rating' => 'required|integer|min:1|max:5',
            'kritik_saran' => 'nullable|string',
        ]);

        Survei::create($data);

        return redirect()
            ->route('survei.create')
            ->with('success', 'Survei berhasil disimpan');
    }

    /**
     * Halaman Hasil Survei (daftar).
     */
    public function index()
    {
        $survei = Survei::with(['hotel', 'kamar'])->latest()->get();

        return view('hasil', compact('survei'));
    }

    public function update(Request $request, Survei $survei)
    {
        $data = $request->validate([
            'nama_pelanggan' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'hotel_id' => 'required|exists:hotels,id',
            'kamar_id' => 'nullable|exists:kamar,id',
            'rating' => 'required|integer|min:1|max:5',
            'kritik_saran' => 'nullable|string',
            'status' => 'nullable|boolean',
        ]);

        $survei->update($data);

        return redirect()
            ->route('hasil.index')
            ->with('success', 'Data survei berhasil diperbarui');
    }

    public function destroy(Survei $survei)
    {
        $survei->delete();

        return redirect()
            ->route('hasil.index')
            ->with('success', 'Data survei berhasil dihapus');
    }
}

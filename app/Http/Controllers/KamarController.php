<?php

namespace App\Http\Controllers;

use App\Models\Hotel;
use App\Models\Kamar;
use Illuminate\Http\Request;

class KamarController extends Controller
{
    public function index()
    {
        $kamar = Kamar::with('hotel')->latest()->get();
        $hotels = Hotel::where('status', true)->orderBy('nama_hotel')->get();

        return view('kamar', compact('kamar', 'hotels'));
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'hotel_id' => 'required|exists:hotels,id',
            'nomor_kamar' => 'required|string|max:255',
            'tipe' => 'required|string|max:255',
            'harga' => 'required|numeric|min:0',
            'status' => 'nullable|boolean',
        ]);

        Kamar::create($data);

        return redirect()
            ->route('kamar.index')
            ->with('success', 'Kamar berhasil ditambahkan');
    }

    public function update(Request $request, Kamar $kamar)
    {
        $data = $request->validate([
            'hotel_id' => 'required|exists:hotels,id',
            'nomor_kamar' => 'required|string|max:255',
            'tipe' => 'required|string|max:255',
            'harga' => 'required|numeric|min:0',
            'status' => 'nullable|boolean',
        ]);

        $kamar->update($data);

        return redirect()
            ->route('kamar.index')
            ->with('success', 'Kamar berhasil diperbarui');
    }

    public function destroy(Kamar $kamar)
    {
        $kamar->delete();

        return redirect()
            ->route('kamar.index')
            ->with('success', 'Kamar berhasil dihapus');
    }
}

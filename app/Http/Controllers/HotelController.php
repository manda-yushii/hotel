<?php

namespace App\Http\Controllers;

use App\Models\Hotel;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class HotelController extends Controller
{
    public function index()
    {
        $hotels = Hotel::latest()->get();

        return view('hotel', compact('hotels'));
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'nama_hotel' => 'required|string|max:255',
            'deskripsi' => 'nullable|string',
            'alamat' => 'required|string',
            'kota' => 'required|string|max:255',
            'telepon' => 'nullable|string|max:20',
            'email' => 'nullable|email|max:255',
            'rating' => 'nullable|numeric|min:0|max:5',
            'status' => 'nullable|boolean',
        ]);

        Hotel::create($data);

        return redirect()
            ->route('hotel.index')
            ->with('success', 'Hotel berhasil ditambahkan');
    }

    public function update(Request $request, Hotel $hotel)
    {
        $data = $request->validate([
            'nama_hotel' => 'required|string|max:255',
            'deskripsi' => 'nullable|string',
            'alamat' => 'required|string',
            'kota' => 'required|string|max:255',
            'telepon' => 'nullable|string|max:20',
            'email' => 'nullable|email|max:255',
            'rating' => 'nullable|numeric|min:0|max:5',
            'status' => 'nullable|boolean',
        ]);

        $hotel->update($data);

        return redirect()
            ->route('hotel.index')
            ->with('success', 'Hotel berhasil diperbarui');
    }

    public function destroy(Hotel $hotel)
    {
        $hotel->delete();

        return redirect()
            ->route('hotel.index')
            ->with('success', 'Hotel berhasil dihapus');
    }
}

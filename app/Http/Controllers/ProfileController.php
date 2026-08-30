<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class ProfileController extends Controller
{
    public function index()
    {
        $user = auth()->user();

        return view('profile', [
            'user' => $user,
        ]);
    }

    public function update(Request $request)
    {
        $user = auth()->user();

        $data = $request->validate([
            'name' => [
                'required',
                'string',
                'max:255',
            ],
            'email' => [
                'required',
                'email',
                'max:255',
                Rule::unique('users', 'email')->ignore($user->id),
            ],
            'telepon' => [
                'nullable',
                'string',
                'max:20',
            ],
            'alamat' => [
                'nullable',
                'string',
            ],
        ]);

        $user->update($data);

        return redirect()
            ->route('profile')
            ->with('success', 'Profil berhasil diperbarui');
    }
}

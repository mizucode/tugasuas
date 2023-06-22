<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class ProfileController extends Controller
{
    public function show()
    {
        $user = Auth::user();

        return view('profile.show', compact('user'));
    }

    public function edit()
    {
        $user = Auth::user();

        return view('profile.edit', compact('user'));
    }

    public function update(Request $request)
    {
        $user = Auth::user();

        // Validasi input gambar jika diperlukan
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'description' => ['nullable', 'string', 'max:255'],
        ]);

        if ($request->hasFile('profile_picture')) {
            // Hapus gambar sebelumnya jika ada
            if ($user->profile_picture) {
                Storage::delete($user->profile_picture);
            }

            // Simpan gambar yang baru diunggah
            $profilePicturePath = $request->file('profile_picture')->store('public/profiles');
            $user->profile_picture = $profilePicturePath;
        }

        // Update data pengguna lainnya jika ada
        // Misalnya, update kolom username
        $user->name = $request->name;
        $user->description = $request->input('description');

        // Simpan perubahan
        $user->save();

        return redirect()->route('profile.show')->with('success', 'Profile updated successfully');
    }
}

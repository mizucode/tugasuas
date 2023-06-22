@extends('layouts.app')

@section('content')
    <div>
        <h1>Profil Pengguna</h1>

        <div>
            <!-- Tampilkan detail profil pengguna -->
            <h3>Detail Profil</h3>
            <p><strong>Username:</strong> {{ $user->username }}</p>
            <p><strong>Email:</strong> {{ $user->email }}</p>
            <p><strong>Foto Profil:</strong></p>
            <img src="{{ "/" . $user->profile_picture }}"       alt="Foto Profil">

            <!-- Tampilkan form untuk mengedit profil -->
            <h3>Edit Profil</h3>
            <form action="{{ route('profile.update') }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')

                <div>
                    <label for="username">Username:</label>
                    <input type="text" id="username" name="username" value="{{ $user->username }}">
                </div>

                <div>
                    <label for="profile_picture">Foto Profil:</label>
                    <input type="file" id="profile_picture" name="profile_picture">
                </div>

                <div>
                    <button type="submit">Simpan</button>
                </div>
            </form>
        </div>
    </div>
@endsection

<div class="flex px-4 gap-2 justify-center">
    <input
        type="file"
        name="image"
        class="font-semibold w-[95%] lg:h-[5rem] mx-auto flex justify-center py-2 px-2 lg:px-8 lg:py-1 text-xs lg:text-2xl border border-primary rounded-md"
    />
</div>

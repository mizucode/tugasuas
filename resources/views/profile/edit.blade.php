@extends('layouts.app')

@section('content')
<body class="bg-BgNote">
    <form action="{{ route('profile.update') }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

    <header class="py-4">
        <div class="container">
            <main class="flex justify-between items-center">
                <a href="/profile"><i class="fa-solid fa-angle-left"></i></a>
                <button type="submit" class="text-dsr underline">Update Profile</button>
                
            </main>
        </div>
    </header>

    <section class="mt-8">
        <div class="container">
            <picture
                class="flex justify-center rounded-full overflow-hidden w-28 mb-4 h-28 mx-auto border-4 border-white"
            >
            @if ($user->profile_picture)
            <img src="{{ Storage::url($user->profile_picture) }}" class="w-full h-full object-cover" />
            @else
            <img src="{{ asset('storage/img/elaina.jpg') }}" class="w-full h-full object-cover" />
            @endif
            </picture>
            <div class="mt-6" >
                <label for="profile_picture"  class="w-full px-4 font-semibold py-4 rounded-lg flex justify-between items-center bg-white shadow-sm">Ganti Foto profile</label>
                <input type="file" name="profile_picture" id="profile_picture" class="hidden">

              
            </div>

            <section class="mt-4 lg:pb-10">
                <div class="bg-white container py-2 rounded-lg">
                    <main class="">
                        <label for="name" class="font-semibold opacity-50">Nickname</label>
                        <input
                        type="text" name="name" id="name" value="{{ $user->name }}" required
                            name=""
                            id=""
                            class="w-full border-2 rounded-lg px-2 text-sm py-1 focus:border-secondaryDark focus:border-opacity-50"
                        />
                    </main>
                    <main class="">
                        <label class="font-semibold opacity-50">Moto</label>
                        <textarea
                        id="description" name="description" rows="4"
                            class="w-full border-2 rounded-lg px-2 text-sm py-1 focus:border-secondaryDark focus:border-opacity-50"
                        >{{ $user->description }}</textarea>
                    </main>
                </div>
            </section>
        </div>
    </section>
    </form>
    <section class="container">
        
        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="bg-white mt-4 rounded-lg py-4 flex justify-center  font-semibold text-secondaryDark">
            @csrf
            <button type="submit">Log Out</button>
        </form>
    </section>
</body>










    {{-- <h1>Edit Profile</h1>
    <form action="{{ route('profile.update') }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <div class="form-group">
            <label for="profile_picture">Profile Picture</label>
            <input type="file" name="profile_picture" id="profile_picture">
        </div>
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" name="name" id="name" value="{{ $user->name }}" required>
        </div>
        <div class="form-group">
            <label for="description">Description</label>
            <textarea class="form-control" id="description" name="description" rows="4">{{ $user->description }}</textarea>
        </div>

        <!-- Tambahkan input untuk data pengguna lainnya jika ada -->

        <button type="submit">Update Profile</button>
    </form> --}}



    
   
@endsection

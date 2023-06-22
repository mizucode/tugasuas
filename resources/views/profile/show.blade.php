@extends('layouts.app')

@section('content')
   <!-- show.blade.php -->
   <body class="bg-BgNote">
    <header
        class="w-full h-56 lg:h-96 overflow-hidden rounded-b-[4rem] shadow-sm bg-cover bg-no-repeat"
        style="background-image: url({{ asset('storage/img/ayaka.webp') }});"
    ></header>
    <section class="-mt-28 lg:-mt-48 z-50">
        <div class="container lg:px-16">
            <div class="w-full mx-auto h-48 lg:h-80 bg-white rounded-lg">
                <div class="justify-end items-start flex relative right-4 top-4">
                    <a
                        href="/profile/edit"
                        class="px-4 lg:px-6 py-1 bg-blue-200 rounded-full text-xs lg:text-xl text-dsr underline"
                        >ubah</a
                    >
                
                </div>
                <div
                    class="w-20 lg:w-40 lg:h-40 h-20 rounded-full overflow-hidden relative border-4 lg:border-[10px] border-white -top-16 lg:-top-32 left-4 lg:left-6"
                >
                    @if ($user->profile_picture)
                    <img src="{{ Storage::url($user->profile_picture) }}" class="w-full h-full object-cover" />
                    @else
                    <img src="{{ asset('storage/img/elaina.jpg') }}" class="w-full h-full object-cover" />
                    @endif
                </div>

                <section class="container -mt-14 lg:-mt-24 lg:px-4">
                    <main class="flex gap-2 items-center">
                        <h1 class="font-bold text-sm lg:text-2xl text-secondaryDark">
                            {{ $user->name }}
                        </h1>
                        <label
                            for=""
                            class="px-[5px] py-[2px] bg-green-400 text-[8px] lg:text-sm font-semibold text-white rounded-sm"
                            >Lv. {{ $user->level }}</label
                        >
                    </main>
                    <main class="flex gap-1 items-center mt-1">
                        <i
                            class="fa-solid fa-address-card text-[14px] lg:text-lg text-dsr"
                        ></i>
                        <h2 class="text-[10px] lg:text-lg">
                            Id Akun : <span>{{ $user->uuid }}</span>
                        </h2>
                    </main>
                    <main class="flex gap-1 items-center opacity-50">
                        <i class="fa-solid fa-book-open text-[14px] lg:text-lg"></i>
                        <h2 class="text-[10px] lg:text-lg">
                            {{ $user->description }}
                        </h2>
                    </main>
                </section>

                <section class="container mt-8 lg:mt-12">
                    <div class="flex justify-around items-center">
                        <main class="text-center">
                            <h1 class="text-sm lg:text-lg leading-none">{{ $user->todos->count() }}</h1>
                            <label for="" class="text-xs lg:text-lg leading-none"
                                >Catatan</label
                            >
                        </main>
                        <main class="text-center">
                            <h1 class="text-sm lg:text-lg leading-none">{{ $user->deadline->count() }}</h1>
                            <label for="" class="text-xs lg:text-lg leading-none"
                                >Deadline</label
                            >
                        </main>
                        <main class="text-center">
                            <h1 class="text-sm lg:text-lg leading-none">0</h1>
                            <label for="" class="text-xs lg:text-lg leading-none"
                                >Selesai</label
                            >
                        </main>
                        <main class="text-center">
                            <h1 class="text-sm lg:text-lg leading-none">{{ $user->done->count() }}</h1>
                            <label for="" class="text-xs lg:text-lg leading-none"
                                >Expire</label
                            >
                        </main>
                    </div>
                </section>
            </div>
        </div>
    </section>

    <section class="mt-4 lg:mt-6">
        <div class="container lg:px-16">
            <section class="bg-dsr w-full lg:py-6 rounded-lg overflow-hidden">
                <div class="flex justify-between px-4 items-center">
                    <main>
                        <h1 class="font-bold text-white text-xl lg:text-4xl">
                            Quest Lab
                        </h1>
                        <p class="font-normal text-xs lg:text-xl opacity-50 text-white">
                            Halo! Selamat datang di Quest LAB exclusive milikmu!
                        </p>
                    </main>
                    <picture class="w-20 lg:w-32 lg:h-32 h-20">
                        <img
                            src="{{ asset('storage/img/pompom.webp') }}"
                            alt=""
                            class="w-full h-full object-contain"
                        />
                    </picture>
                </div>
            </section>
        </div>
    </section>

    <section class="mt-4 lg:mt-6">
        <div class="container lg:px-16">
            <main class="flex gap-2 items-center">
                <i class="fa-solid fa-scroll lg:text-2xl"></i>
                <h1 class="text-lg lg:text-2xl">Pengembara</h1>
            </main>

            <main class="text-center mt-8 lg:pb-10">
                <h1 class="text-xs lg:text-xl text-dark opacity-50">
                    Sebagian jurnal Pengembara-ku disembunyikan
                </h1>
                <a href="#" class="text-xs lg:text-xl text-dsr"
                    >Fitur ini belum selesai</a
                >
            </main>
        </div>
    </section>
</body>

























   {{-- <div>
    <h2>Profile</h2>
    <p>Name: {{ $user->name }}</p>
    <p>Email: {{ $user->email }}</p>
    <p>Username: {{ $user->username }}</p>
    <img src="{{ Storage::url($user->profile_picture) }}" alt="Profile Picture">
</div> --}}



@endsection

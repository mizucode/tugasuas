@extends('layouts.app') @section('content')

<body class="bg-BgNote">
    <header>
        <div class="container lg:px-16">
            <div class="flex items-center justify-between text-2xl py-4">
                <div></div>
                <div class="flex justify-center ml-12 gap-8">
                    <!-- div pertama -->
                    <i
                        class="fa-solid fa-book-bookmark text-ylw2 text-2xl lg:text-4xl"
                    ></i>
                    <i class="fa-regular fa-square-check text-2x lg:text-4xl"></i>
                </div>
                <a href="/profile">
                    <div
                        class="w-11 lg:w-20 h-11 lg:h-20 rounded-full overflow-hidden bg-dsr border border-white justify-end"
                    >
                        <!-- div kedua -->

                        @if (Auth::user()->profile_picture)
                        <img src="{{ Storage::url(Auth::user()->profile_picture) }}" class="w-full h-full object-cover" />
                        @else
                        <img src="{{ asset('storage/img/elaina.jpg') }}" class="w-full h-full object-cover" />
                        @endif

                        
                    </div>
                </a>
            </div>
            <hr />
        </div>
    </header>
    <section class="">
        <div class="container lg:px-16">
            <div class="my-4 text-center text-secondaryDark text-2xl font-semibold">
                <h1>Hallo  {{ Auth::user()->name }}<br />(>‿<)</h1>
            </div>
            <div class="lg:grid grid-cols-1 lg:grid-cols-2 lg:grid-rows-2 gap-4 pb-16">
                @foreach ($todos as $todo)
                <a href="{{ route('todos.edit', $todo->id) }}">
                    <div
                        class="flex items-center justify-between py-4 mt-2 px-4 w-full h-28 lg:h-32 bg-white shadow-sm rounded-2xl hover:scale-95 transition duration-300 ease-in-out"
                    >
                    @if ($todo->image)
                    <div class="w-52 lg:w-96">
                    @else
                    <div class="w-[20rem] md:w-[20rem] 2xl:w-[33rem]">
                    @endif
                      
                            
                            <h1
                                class="font-semibold text-lg lg:text-2xl text-dark truncate pt-3"
                            >
                            {{ $todo->title }}
                            </h1>
                            <p class="text-sm lg:text-lg opacity-50 truncate">
                                {{ $todo->description }}
                            </p>
                            <p class="text-[10px] lg:text-sm mt-3 opacity-50">
                                {{ $todo->start_date }}
                            </p>
                        </div>
                        @if ($todo->image)
                            
                        <div class="w-28 h-20 lg:w-32 lg:h-24 rounded-lg overflow-hidden">
                            <img
                                src="{{ asset('storage/images/' . $todo->image) }}"
                                alt=""
                                class="w-full h-full object-cover"
                            />
                        </div>
                        @endif
                    </div>
                </a>
                @endforeach
               
            </div>
        </div>
    </section>

    <section class="fixed bottom-0 left-0 w-full py-8">
        <div class="container">
            <div class="flex justify-end gap-4 -mt-16">
                <a href="{{ route('todos.create') }}">
                    <div
                        class="bg-ylw2 shadow-md h-16 w-16 rounded-full flex justify-center items-center hover:scale-90 transition duration-300 ease-in-out"
                    >
                        <i class="fa-solid fa-plus text-xl text-white"></i>
                    </div>
                </a>
            </div>
        </div>
    </section>
</body>



















{{-- <body class="bg-slate-200">
    <header class="bg-dark py-4">
        <div class="container">
            <main class="flex justify-between items-center">
                <h1 class="font-bold text-white text-xl md:text-4xl">
                    Hi <span class="text-ylw"> {{ Auth::user()->name }}</span>
                    <a href="{{ route('profile.show') }}">Profile</a>
                </h1>

                <div class="mt-4" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="{{ route('logout') }}"
                       onclick="event.preventDefault();
                                     document.getElementById('logout-form').submit();">
                                     <i class="fa-solid fa-right-from-bracket font-bold text-white text-xl md:text-4xl"></i>
                        
                    </a>
        
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                </div>
            </main>

          
@auth
@if(auth()->user()->isAdmin())
    <a href="/admin" class="px-4 py-2 bg-blue-400">Fitur special</a>
@endif
@endauth

        </div>
    </header>
    <section class="pt-4 h-full rounded-md">
        <div class="container">
            <main class="flex justify-start items-center gap-2">
                <i class="fa-solid fa-clipboard-list text-3xl lg:text-6xl text-dsr"></i>
                <div class="">
                    <h3 class="leading-none text-sm lg:text-2xl font-bold text-orange-500">Misi</h3>
                    <h2 class="leading-none font-bold lg:text-xl text-slate-800">Semua Misi</h2>
                </div>
            </main>
            <ul class="pb-28 lg:pt-4">
                @foreach ($todos as $todo)
                <li
                    class="list-none bg-white px-2 py-2 rounded-xl shadow-md mt-4 hover:bg-orange-100 transition duration-300 ease-in-out"
                >
                   
                <div class="lg:container lg:py-4">
                    <h1
                        class="text-slate-800 text-lg lg:text-3xl truncate font-semibold"
                    >
                    {{ $todo->title }}
                    </h1>
                </div>
                <h3>{{ $todo->tag }}</h3>
                <div
                    class="flex justify-between items-center mt-8 lg:container lg:py-4"
                >
                    <main class="flex justify-start items-center gap-1 opacity-50">
                        <i class="fa-regular fa-calendar lg:text-xl"></i>
                        <p class="text-[10px] lg:text-xl mt-[3px] font-semibold">
                            Deadline : <em>{{ $todo->due_date }}</em>
                        </p>
                    </main>
                    <div>
                        <a
                            href="{{ route('todos.edit', $todo->id) }}"
                            class="px-2 py-1 text-xs lg:text-xl bg-dsr rounded-md flex justify-center items-center gap-2 font-medium text-white hover:shadow-lg hover:bg-sky-500 transition duration-300 ease-in-out"
                            ><i class="fa-solid fa-plus"></i>Lihat Detail</a
                        >
                    </div>
                </div>
                </li>
                @endforeach
            </ul>
        </div>
    </section>

    <section class="fixed bottom-0 left-0 w-full py-8">
        <div class="container">
            <div class="flex justify-end gap-4 -mt-16">
                <div
                    class="bg-white shadow-md h-16 w-16 rounded-md flex justify-center items-center border-4 border-slate-200 hover:border-dark transition duration-300 ease-in-out"
                >
                <a href="{{ route('todos.create') }}"><i class="fa-solid fa-plus text-3xl text-dark"></i></a>
                    
                </div>
            </div>
        </div>
    </section>
</body>
 --}}





















{{-- <body>
    <h1>To Do List</h1>

    <a href="{{ route('todos.create') }}">+</a>

    @if (session('success'))
        <div>{{ session('success') }}</div>
    @endif

    <ul>
        @foreach ($todos as $todo)
            <li>
                <strong>{{ $todo->title }}</strong><br>
                <em>Description:</em> {{ $todo->description }}<br>
                <em>Start Date:</em> {{ $todo->start_date }}<br>
                <em>Due Date:</em> {{ $todo->due_date }}<br>
                <a href="{{ route('todos.edit', $todo->id) }}">Edit</a>
                <form action="{{ route('todos.destroy', $todo->id) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Delete</button>
                </form>
            </li>
        @endforeach
    </ul>


    @guest
    @if (Route::has('login'))
        <li class="nav-item">
            <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
        </li>
    @endif

    @if (Route::has('register'))
        <li class="nav-item">
            <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
        </li>
    @endif
@else
    <li class="nav-item dropdown">
        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
            {{ Auth::user()->name }}
        </a>

        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="{{ route('logout') }}"
               onclick="event.preventDefault();
                             document.getElementById('logout-form').submit();">
                {{ __('Logout') }}
            </a>

            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                @csrf
            </form>
        </div>
    </li>
@endguest
</body>
</html> --}}

<!-- edit.blade.php -->
<!-- create.blade.php -->

@extends('layouts.app') @section('content')
<body class="bg-BgNote">
    <form action="{{ route('todos.update', $todo->id) }}" enctype="multipart/form-data" method="POST" class="pt-4  rounded-md">
        @csrf
        @method('PUT')
   
    <section>
        <div class="container">
            <div class="flex items-center justify-between text-2xl py-4">
                <div>
                    <a href="/todos">
                        <i class="fa-solid fa-arrow-left text-2xl"></i>
                    </a>
                </div>
                <div class="flex justify-center ml-12 gap-8">
                    <button id="toggleMenu" type="button">
                        <i class="fa-solid fa-ellipsis-vertical"></i>
                    </button>
                </div>
                
            </div>
            <div class="menu-container">
                <div id="menu" class="bg-white w-60 rounded-md overflow-hidden hidden right-0 top-0 -mt-12 menu">
                    
                    
                    <button type="submit" class="w-full text-start px-4 py-4 font-semibold hover:bg-gray-200">
                        Perbaharui
                    </button>
                    
                </div>
            </div>
            <div id="darkOverlay" class="dark-overlay"></div>
        </div>
    </section>
    <section action="" class="bg-BgNote">
        <div class="container">
            <input value="{{ $todo->title }}" type="text" name="title" placeholder="Title" required class="w-full font-medium text-3xl px-2 py-2 -mt-2 focus:outline-none bg-BgNote" />
            <div class="mb-2 flex items-center gap-4">
                <input type="date" name="start_date" value="{{ $todo->star_date }}" name="" id="" class="h-6 text-sm lg:text-xl lg:py-4 py-2 text-center px-2 border-black border bg-white rounded-lg opacity-50" />
                <label for="fileInput">
                    <i class="fa-solid fa-image cursor-pointer text-2xl lg:text-3xl opacity-50"></i>
                </label>
            </div>
            <div>
                <div class="px-2 py-2 outline-none bg-BgNote -mt-2 text-xs">
                    <input value="{{ asset('storage/images/' . $todo->image) }}" type="file" name="image" id="fileInput" class="text bg-BgNote outline-none opacity-50 hidden" />
                </div>
                <div>
                    @if ($todo->image)
                        <div id="previewContainer" class="preview-container">
                            <img src="{{ asset('storage/images/' . $todo->image) }}" class="w-full h-full object-cover" alt="Gambar To-Do">
                        </div>
                    @endif
                    <div id="previewContainer" class="preview-container">
                        <img id="previewImage" src="" alt="" />
                    </div>
                </div>
            </div>

            <textarea name="description" name="text" id="textareaInput" cols="30" rows="10" placeholder="Mulai Mengetik" class="w-full text-xl px-2 py-2 focus:outline-none bg-BgNote -mt-48">{{ $todo->description }}</textarea>
        </div>
    </section>
</form>

<section class="fixed bottom-0 left-0 w-full py-8">
    <div class="container">
        <div class="flex justify-end gap-4 -mt-16">
            <form action="{{ route('todos.destroy', $todo->id) }}" method="POST">
                @csrf
                @method('DELETE')
                <button type="submit" class="w-full text-start px-4 py-4 font-semibold hover:bg-gray-200">
                    Hapus
                </button>
            </form>
        </div>
    </div>
</section>

</body>













{{-- <body class="bg-slate-200">
    
    <header class="bg-dark py-4">
        <div class="container lg:px-16">
            <main class="flex justify-between items-center">
                <h1 class="font-bold text-white text-xl md:text-4xl">
                    Detail Tugas <span class="text-ylw">Kamu</span>
                </h1>

                <div class="mt-4">

        <form action="{{ route('todos.destroy', $todo->id) }}" method="POST">
            @csrf
            @method('DELETE')
            <button type="submit" class=" px-4 py-2 bg-red-600 rounded-md flex justify-center items-center gap-2 font-medium text-white hover:shadow-lg hover:bg-red-500 transition duration-300 ease-in-out"><i
                class="fa-solid fa-trash font-bold text-white text-xl md:text-4xl"
            ></i></button>
        </form>
    </div>
              
                
            </main>
        </div>
    </header>

    @if ($todo->image)
    <img src="{{ asset('storage/images/' . $todo->image) }}" alt="Gambar To-Do">
@endif

    <form  action="{{ route('todos.update', $todo->id) }}"  enctype="multipart/form-data" method="POST" class="pt-4  rounded-md">
        @csrf
        @method('PUT')
        <div class="container lg:px-16">
            <section class="w-full py-4 lg:py-0 mb-2 lg:mb-8">
                <div class="container">
                    <div class="relative">
                        <h1
                            class="title-form"
                        >
                            Mau nugas apa?
                        </h1>
                    </div>
                    <div class="bg-text shadow-sm py-8 rounded-b-md">
                        <div class="flex px-4 gap-2 justify-center">
                            <input
                            value="{{ $todo->title }}"
                                maxlength="255"
                                ttype="text" name="title" required
                                placeholder="Menaklukan Dunia (⚈∇⚈〃 )"
                                class="font-semibold w-[95%] lg:h-[5rem] mx-auto flex justify-center py-2 px-2 lg:px-8 lg:py-1 text-xs lg:text-2xl border border-primary rounded-md"
                            />
                        </div>
                    </div>
                </div>
            </section>
            <div class="bg-text shadow-sm py-2 rounded-b-md">
                
            </div>
            <section class="w-full py-4 lg:py-0 mb-2 lg:mb-8">
                <div class="container">
                    <div class="relative">
                        <h1
                            class="title-form"
                        >
                            Tentang apa sih?
                        </h1>
                    </div>
                    <div class="bg-text shadow-sm py-2 rounded-b-md h-[15rem] lg:h-[24rem]">
                        <form class="flex px-4 gap-2">
                            <textarea
                                
                                name="description"
                                placeholder="Tahukah kamu? Otak diciptakan untuk mengingat bukan melupakan, ciptakan kenangan baru untuk melupakan masa lalu hwehehehe（＾ ∀＾）"
                                class="font-semibold flex justify-center w-[95%] mx-auto h-[14rem] lg:h-[20rem] py-2 px-2 text-xs lg:px-4 lg:py-2 lg:text-2xl border border-primary rounded-md"
                            >{{ $todo->description }}</textarea>
                        </form>
                    </div>
                </div>
            </section>
            <section class="w-full py-4 lg:py-0 mb-2 lg:mb-8">
                <div class="container">
                    <div class="relative">
                        <h1
                            class="title-form"
                        >
                            Cieee jadian ama tugas (✿˵ ꒡◡꒡˵)
                        </h1>
                    </div>
                    <div
                        class="bg-text shadow-sm py-8 rounded-b-md h-[5rem] flex justify-center items-center"
                    >
                        <div
                            class="flex overflow-hidden px-4 gap-2 justify-center items-center"
                        >
                            <label for="start_date" class="font-semibold whitespace-nowrap lg:text-2xl"
                                >Tanggal Mulai:</label
                            >
                            <input
                            value="{{ $todo->start_date }}"
                                type="date"
                                name="start_date"
                                class="px-4 py-2 bg-slate-200"
                            />
                        </div>
                    </div>
                </div>
            </section>
            <section class="w-full py-4 lg:py-0 mb-2 lg:mb-8">
                <div class="container">
                    <div class="relative">
                        <h1
                            class="title-form text-red-500"
                        >
                            Masa rebahan berakhir
                        </h1>
                    </div>
                    <div
                        class="bg-text shadow-sm py-8 rounded-b-md h-[5rem] flex justify-center items-center"
                    >
                        <div
                            class="flex overflow-hidden px-4 gap-2 justify-center items-center"
                        >
                            <label for="due_date" class="font-semibold whitespace-nowrap lg:text-2xl"
                                >Deadline:</label
                            >
                            <input
                            value="{{ $todo->due_date }}"
                                type="date"
                                name="due_date"
                                class="px-4 py-2 bg-slate-200"
                            />
                        </div>
                    </div>
                </div>
            </section>

            <button
                type="submit"
                class="px-2 lg:px-6 lg:py-4 mt-6 mb-32 py-1 mx-auto text-2xl lg:text-4xl bg-dsr rounded-md flex justify-center items-center gap-2 font-medium text-white hover:shadow-lg hover:bg-sky-500 transition duration-300 ease-in-out"
            >
            <i class="fa-solid fa-floppy-disk"></i> Update tugas
            </button>
        </div>
    </form>
</body> --}}



























































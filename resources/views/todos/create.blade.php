<!-- create.blade.php -->

@extends('layouts.app') @section('content')

<body class="bg-BgNote">
    <form action="{{ route('todos.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
   
    <section>
        <div class="container">
            <div class="flex items-center justify-between text-2xl py-4">
                <div>
                    <a href="/todos"
                        ><i class="fa-solid fa-arrow-left text-2xl"></i
                    ></a>
                </div>
                <div class="flex justify-center ml-12 gap-8">
                    <button id="toggleMenu" type="button">
                        <i class="fa-solid fa-ellipsis-vertical"></i>
                    </button>
                </div>
                
            </div>
            <div class="menu-container">
                <div
                    id="menu"
                    class="bg-white w-60 rounded-md overflow-hidden hidden right-0 top-0 -mt-12 menu"
                >
                    
                   
                <button type="submit" class="w-full text-start px-4 py-4 font-semibold hover:bg-gray-200">
                    Simpan
                </button>
                    
                </div>
            </div>
            <div id="darkOverlay" class="dark-overlay"></div>
        </div>
    </section>
    <section action="" class="bg-BgNote">
        <div class="container">
            <input
            type="text" name="title" placeholder="Title" required
                id=""
                class="w-full font-medium text-3xl px-2 py-2 -mt-2 focus:outline-none bg-BgNote"
            />
            <div class="mb-2 flex items-center gap-4">
                <input
                type="date" name="start_date"
                    
                    name=""
                    id=""
                    class="h-6 text-sm lg:text-xl lg:py-4 py-2 text-center px-2 border-black border bg-white rounded-lg opacity-50"
                />
                <label for="fileInput"
                    ><i class="fa-solid fa-image cursor-pointer text-2xl lg:text-3xl opacity-50"></i
                ></label>
            </div>
            <div>
                <div class="px-2 py-2 outline-none bg-BgNote -mt-2 text-xs">
                    <input
                        type="file"
                        name="image"
                        id="fileInput"
                        class="text bg-BgNote outline-none opacity-50 hidden"
                    />
                </div>
                <div id="previewContainer" class="preview-container">
                    <img id="previewImage" src="" alt="" />
                </div>
            </div>

            <textarea
            name="description" 
                name="text"
                id="textareaInput"
                cols="30"
                rows="10"
                placeholder="Mulai Mengetik"
                class="w-full text-xl px-2 py-2 focus:outline-none bg-BgNote -mt-48"
            ></textarea>
        </div>
    </section>
</form>

</body>



















{{-- <!DOCTYPE html>
<html>
<head>
    <title>Create To Do</title>
</head>
<body>

    <h1>Create To Do</h1>

    <form action="{{ route('todos.store') }}" method="POST">
        @csrf
        <input type="text" name="title" placeholder="Title" required>
        <textarea name="description" placeholder="Description"></textarea>
        <label for="start_date">Start Date:</label>
        <input type="date" name="start_date">
        <label for="due_date">Due Date:</label>
        <input type="date" name="due_date">
        <button type="submit">Create</button>
    </form>
</body>
</html> --}}

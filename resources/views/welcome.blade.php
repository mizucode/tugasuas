<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="scroll-smooth">
    <head>
		<meta charset="UTF-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<!-- Font Family -->
		<link rel="preconnect" href="https://fonts.googleapis.com" />
		<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
		<link
			href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
			rel="stylesheet"
		/>
		<link
			rel="stylesheet"
			href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
			integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
			crossorigin="anonymous"
			referrerpolicy="no-referrer"
		/>
		<!-- Stylesheet -->
        @vite('resources/css/app.css')
		<link
			rel="stylesheet"
			href="https://use.fontawesome.com/releases/v5.15.4/css/all.css"
			integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm"
			crossorigin="anonymous"
		/>
		<!-- Fav Icon -->
		<link rel="icon" type="image/x-icon" href="{{ asset('storage/img/ikuyo.ico') }}" />
		<!-- Title -->
		<title>PTIK B</title>
	</head>
    <body class="antialiased">
        {{-- <div class="relative sm:flex sm:justify-center sm:items-center min-h-screen bg-dots-darker bg-center bg-gray-100 dark:bg-dots-lighter dark:bg-gray-900 selection:bg-red-500 selection:text-white">
            @if (Route::has('login'))
                <div class="sm:fixed sm:top-0 sm:right-0 p-6 text-right z-10">
                    @auth
                        <a href="{{ url('/home') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Home</a>
                    @else
                        <a href="{{ route('login') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Log in</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

            
        </div> --}}



        <header
			class="bg-transparent absolute top-0 left-0 w-full flex items-center z-10"
		>
			<div class="container">
				<div class="flex items-center justify-between relative">
					<div class="px-4">
						<a href="#home" class="font-bold text-2xl text-dsr block py-6"
							>Tugas<span class="text-ylw">MU</span></a
						>
					</div>
					<div class="flex items-center px-4">
						<button
							id="hamburger"
							name="humberger"
							type="button"
							class="blok absolute right-4 lg:hidden"
						>
							<span
								class="hamburger-line origin-top-left duration-300 ease-in-out"
							></span>
							<span class="hamburger-line duration-300 ease-in-out"></span>
							<span
								class="hamburger-line origin-bottom-left duration-300 ease-in-out"
							></span>
						</button>

						<nav
							id="nav-menu"
							class="hidden absolute py-5 bg-white shadow-lg rounded-lg max-w-[250px] w-full right-4 top-full lg:block lg:static lg:bg-transparent lg:max-w-full lg:shadow-none lg:rounded-none"
						>
							<ul class="block lg:flex">
								<li class="group">
									<a
										href="#home"
										class="text-base text-black py-2 mx-8 flex hover:text-dsr"
										>Home</a
									>
								</li>
								<li class="group">
									<a
										href="#about"
										class="text-base text-black py-2 mx-8 flex hover:text-dsr"
										>Tentang TugasMU</a
									>
								</li>
								<li class="group">
									<a
										href="#fitur"
										class="text-base text-black py-2 mx-8 flex hover:text-dsr"
										>Fitur</a
									>
								</li>
								<li class="group">
									<a
										href="#guide"
										class="text-base text-black py-2 mx-8 flex hover:text-dsr"
										>Cara Pakai</a
									>
								</li>
								<li class="group">
									<a
										href="#team"
										class="text-base text-black py-2 mx-8 flex hover:text-dsr"
										>TeamTMU</a
									>
								</li>
								<li class="group text-center">
                                    @if (Route::has('login'))
                
                    @auth
                        <a href="{{ url('/home') }}" class="py-2 mx-8 justify-center font-bold px-4 text-center rounded text-white flex bg-dsr hover:shadow-lg hover:bg-sky-500 transition duration-300 ease-in-out">Home</a>
                    @else
                        <a href="{{ route('login') }}" class="py-2 mx-8 justify-center font-bold px-4 text-center rounded text-white flex bg-dsr hover:shadow-lg hover:bg-sky-500 transition duration-300 ease-in-out">Log in</a>

                        
                    @endauth
                </div>
            @endif





                                
									
								</li>
							</ul>
						</nav>
					</div>
				</div>
			</div>
		</header>

		<!-- Header End -->

		<!-- Hero Section Start -->
		<section id="home" class="pt-[5rem] lg:pt-28 bg-[#F8F9FA] h-screen">
			<div class="container">
				<div
					class="flex flex-wrap-reverse lg:flex-nowrap lg:flex-row justify-center lg:px-24"
				>
					<div class="w-full self-center lg:px-4">
						<h1 class="text-2xl font-semibold text-center lg:text-start text-blue-500 whitespace-nowrap">
							Selamat Datang di Web
							<span class="block font-bold text-niger text-4xl lg:text-6xl my-2"
								>TugasMU</span
							>
						</h1>
						<h2
							class="font-medium text-slate-500 text-center lg:text-start text-lg mb-6 lg:text-2xl lg:mt-4"
						>
							TugasMU, <span class="multiText"></span>
						</h2>

						<a
                        href="{{ route('register') }}"
							class="text-base md:text-xl lg:justify-start flex justify-center lg:w-60 w-40 lg:text-start text-center lg:mx-0 mx-auto whitespace-nowrap font-semibold text-white bg-dsr py-3 px-8 rounded-md hover:shadow-lg hover:bg-sky-500 transition duration-300 ease-in-out"
							>Daftar Sekarang!</a
						>
					</div>
					<div class="w-full self-end px-4">
						<div class="relative mt-10 lg:mt-9 lg:right-0">
							<img src="{{ asset('storage/img/hero-02.png') }}" class="mx-auto" alt="" />
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- Hero Section End -->

		<!-- About Section Start -->
		<section class="lg:pt-36 py-24 h-screen mt-24" id="about">
			<div class="container">
				<div class="flex justify-center gap-4">
					<div class="hidden lg:flex lg:w-[215rem]">
						<img
							src="{{ asset('storage/img/Statistics.jpg') }}"
							alt=""
							class="object-cover w-full h-full"
						/>
					</div>
					<div class="">
						<h4 class="font-bold uppercase text-3xl text-dsr">
							Tentang TugasMU
						</h4>
						<p class="text-slate-500">
							TugasMU adalah sebuah website to do list yang dirancang untuk
							membantu pengguna mengatur dan mengelola tugas-tugas dengan lebih
							efisien.
						</p>
						<div class="flex flex-wrap md:flex-nowrap justify-between mt-4">
							<div class="w-full lg:mb-10 mb-5">
								<h2 class="font-bold text-black text-xl mb-1">
									Add your tasks
								</h2>
								<p
									class="font-medium text-base lg:text-lg text-slate-500 lg:w-11/12"
								>
									Dengan TugasMU, Kamu dapat membuat daftar tugas, menetapkan
									tenggat waktu, dan melacak kemajuan Anda secara sistematis.
								</p>
							</div>
							<div class="w-full">
								<h3 class="font-bold text-black text-xl mb-1">
									Organize your life
								</h3>
								<p
									class="font-medium text-base lg:text-lg text-slate-500 lg:w-[95%]"
								>
									Setiap individu memiliki kebutuhan dan preferensi yang berbeda
									dalam mengatur tugas. Oleh karena itu, TugasMU memungkinkan
									personalisasi yang luas, seperti memilih tema antarmuka yang
									sesuai dengan selera Kamu.
								</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- About Section End -->

		<!-- Portofolio -->
		<section id="fitur" class="pt-36 pb-16 bg-slate-100">
			<div class="container">
				<div class="w-full px-4">
					<div class="mx-auto text-center mb-4">
						<h4 class="font-semibold text-lg lg:text-2xl text-dsr mb-2">
							Kenapa harus TugasMU?
						</h4>
						<h2 class="font-bold text-black text-3xl lg:text-4xl mb-4">
							Fitur Tugas<span class="text-ylw">MU</span>
						</h2>
						<p class="font-medium text-md md:text-lg text-slate-500">
							Kamu tahu? terkadang tugas tidak dikerjakan karena lupa (ﾉ≧ڡ≦)
							Teehee~!
						</p>
					</div>
				</div>

				<div class="w-full px-4 flex flex-wrap justify-center xl:mx-auto">
					<div class="mb-8 p-4 md:w-1/2">
						<div class="rounded-md overflow-hidden">
							<img src="{{ asset('storage/img/fitur-02.png') }}" alt="" width="w-full" />
						</div>
						<h3 class="font-semibold text-black text-xl mt-5">
							Pembuatan Tugas
						</h3>
						<p class="font-medium text-base text-slate-500">
							Kamu dapat membuat daftar tugas dengan mudah, menambahkan judul,
							deskripsi, dan tenggat waktu untuk setiap tugas yang ingin kamu
							selesaikan.
						</p>
					</div>
					<div class="mb-8 p-4 md:w-1/2">
						<div class="rounded-md overflow-hidden">
							<img src="{{ asset('storage/img/fitur-03.png') }}" alt="" width="w-full" />
						</div>
						<h3 class="font-semibold text-black text-xl mt-5">
							Prioritaskan Tugasmu
						</h3>
						<p class="font-medium text-base text-slate-500">
							Kamu juga dapat membedakan tugas yang paling penting atau mendesak
							yang harus diselesaikan terlebih dahulu.
						</p>
					</div>
					<div class="mb-8 p-4 md:w-1/2">
						<div class="rounded-md overflow-hidden">
							<img src="{{ asset('storage/img/fitur-05.png') }}" alt="" width="w-full" />
						</div>
						<h3 class="font-semibold text-black text-xl mt-5">
							Kelompokan dan Organisir
						</h3>
						<p class="font-medium text-base text-slate-500">
							Dengan ini, Kamu dapat mudah mengorganisir tugas sesuai dengan
							konteks yang sesuai, seperti tugas, pekerjaan, atau studi.
						</p>
					</div>
					<div class="mb-8 p-4 md:w-1/2">
						<div class="rounded-md overflow-hidden">
							<img src="{{ asset('storage/img/fitur-04.png') }}" alt="" width="w-full" />
						</div>
						<h3 class="font-semibold text-black text-xl mt-5 whitespace-nowrap">
							Penyelesaian dan Penandaan
						</h3>
						<p class="font-medium text-base text-slate-500">
							Setelah tugas selesai, Kamu dapat menandainya sebagai selesai atau
							menghapusnya dari daftar. Ini membantu mempertahankan kejelasan
							dan memberikan rasa pencapaian setelah menyelesaikan tugas yang
							ditetapkan.
						</p>
					</div>
				</div>
			</div>
		</section>
		<!-- End Portofolio -->

		<!-- Client -->
		<section id="guide" class="py-32 bg-slate-700 lg:h-screen">
			<div class="container">
				<div class="mx-auto text-center mb-4">
					<h4 class="font-semibold text-lg lg:text-2xl text-blue-400 mb-2">
						Cara Pakai
					</h4>
					<h2 class="font-bold text-white text-3xl lg:text-4xl mb-4">
						Tinggal Sat Set
					</h2>
					<p class="font-medium text-md md:text-lg text-slate-400">
						Untuk menggunakan TugasMU kamu tidak perlu ribet
					</p>
				</div>

				<div class="container mx-auto text-white">
					<div class="grid lg:grid-cols-3 gap-4">
						<div class="grid-cara">
							<div class="grid-cara-main">
								<i class="fa-solid fa-address-card text-2xl text-ylw"></i>
								<h1 class="font-semibold">
									Sat: <span class="text-blue-300">Register Akun</span>
								</h1>
							</div>
						</div>
						<div class="grid-cara">
							<div class="grid-cara-main">
								<i
									class="fa-solid fa-right-to-bracket text-2xl text-blue-400"
								></i>
								<h1 class="font-semibold">
									Set: <span class="text-ylw">Login</span>
								</h1>
							</div>
						</div>
						<div class="grid-cara">
							<div class="grid-cara-main">
								<i class="fa-brands fa-readme text-2xl text-red-400"></i>
								<h1 class="font-semibold">
									Sat: <span class="text-blue-300">Buat To do List</span>
								</h1>
							</div>
						</div>
						<div class="grid-cara">
							<div class="grid-cara-main">
								<i class="fa-solid fa-floppy-disk text-2xl text-purple-400"></i>
								<h1 class="font-semibold">
									Set: <span class="text-ylw">Simpan</span>
								</h1>
							</div>
						</div>
						<div class="grid-cara">
							<div class="grid-cara-main">
								<i class="fa-solid fa-file-pen text-2xl text-orange-400"></i>
								<h1 class="font-semibold">
									Sat: <span class="text-blue-300">Edit To Do List</span>
								</h1>
							</div>
						</div>
						<div class="grid-cara">
							<div class="grid-cara-main">
								<i
									class="fa-solid fa-check-to-slot text-2xl text-green-400"
								></i>
								<h1 class="font-semibold">
									Set: <span class="text-ylw">Tandai Selesai</span>
								</h1>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<section class="bg-slate-100 pt-32 pb-16" id="team">
			<div class="container">
				<div class="mx-auto text-center mb-8 lg:mb-16">
					<h4 class="font-semibold text-lg lg:text-2xl text-blue-400 mb-2">
						Special Thanks To
					</h4>
					<h2 class="font-bold text-slate-500 text-3xl lg:text-4xl mb-4">
						TugasMU Developers Team
					</h2>
				</div>
				<main>
					<div class="lg:flex justify-between gap-8">
						<div class="w-full h-[20rem] mx-auto rounded-xl overflow-hidden">
							<img
								src="{{ asset('storage/img/putri.webp') }}"
								alt=""
								class="object-cover w-full h-full"
							/>
						</div>
						<div class="text-slate-500 mt-8">
							<h1 class="font-extrabold text-slate-700 text-2xl lg:text-4xl">
								Putri Enjeli - <span class="text-ylw">Project Manager</span>
							</h1>
							<h2 class="lg:text-2xl">
								Bertanggung jawab untuk merencanakan, mengatur, dan mengawasi
								proyek pengembangan web secara keseluruhan. Serta mengelola
								anggaran, jadwal, dan sumber daya. Memastikan proyek selesai
								tepat waktu dan sesuai dengan tujuan yang ditetapkan.
							</h2>
						</div>
					</div>
					<div class="lg:flex justify-between lg:flex-row-reverse gap-8 my-8">
						<div class="w-full h-[20rem] mx-auto rounded-xl overflow-hidden">
							<img
								src="{{ asset('storage/img/Kazuto.webp') }}"
								alt=""
								class="object-cover w-full h-full"
							/>
						</div>
						<div class="text-slate-500 mt-8">
							<h1 class="font-extrabold text-slate-700 text-2xl lg:text-4xl">
								Riki Muhamad Fadilah -
								<span class="text-dsr">Web Developers</span>
							</h1>
							<h2 class="lg:text-2xl">
								Bertanggung jawab untuk merancang dan mengembangkan arsitektur
								sistem back-end yang mendukung aplikasi web. Selain itu juga
								bertanggung jawab untuk mendesain visual dan estetika antarmuka
								pengguna aplikasi web front-end.
							</h2>
						</div>
					</div>
					<div class="lg:flex justify-between gap-8">
						<div class="w-full h-[20rem] mx-auto rounded-xl overflow-hidden">
							<img
								src="{{ asset('storage/img/Yui.webp') }}"
								alt=""
								class="object-cover w-full h-full"
							/>
						</div>
						<div class="text-slate-500 mt-8">
							<h1 class="font-extrabold text-slate-700 text-2xl lg:text-4xl">
								Chat GPT - <span class="text-ylw">Support Specialist</span>
							</h1>
							<h2 class="lg:text-2xl">
								Menyediakan dukungan teknis dan bantuan kepada team. Chat GPT
								menjawab pertanyaan, mengatasi masalah, dan memberikan solusi
								dalam mendukung pengalaman pengguna yang baik.
							</h2>
						</div>
					</div>
				</main>
			</div>
		</section>
		<!-- Client -->

		<!-- Footer -->

		<section class="w-full bg-ylw pt-4 pb-8">
			<div class="container">
				<div>
					<div class="">
						<h1 class="mb-1 font-semibold text-base text-left text-dark">
							Butuh Bantuan?
						</h1>
						<a
							href="https://wa.link/ibokfp"
							class="py-2 px-4 bg-gray-300 bg-opacity-80 rounded-md text-xs text-left"
						>
							<i class="fa-solid fa-message"></i>
							<label for="">Hubungi Kami</label>
						</a>
					</div>
					<div class="my-4">
						<h1 class="mb-1 font-semibold text-base text-left text-dark">
							About Us
						</h1>
						<a
							href="https://wa.link/ibokfp"
							class="py-2 px-4 bg-gray-300 bg-opacity-80 rounded-md text-xs text-left"
						>
							<i class="fa-solid fa-message"></i>
							<label for="">Hubungi Kami</label>
						</a>
					</div>
					<div class="mt-4">
						<h1 class="mb-1 font-semibold text-base text-left text-primary">
							Dapatkan berita TugasMU di :
						</h1>
						<div class="flex gap-2">
							<a href=""><i class="fa-brands fa-square-facebook"></i></a>
							<a href=""><i class="fa-brands fa-youtube"></i></a>
							<a href=""><i class="fa-brands fa-instagram"></i></a>
							<a href=""><i class="fa-brands fa-twitter"></i></a>
							<a href=""><i class="fa-brands fa-tiktok"></i></a>
						</div>
					</div>
				</div>
			</div>
		</section>

		<footer class="bg-slate-100 w-full pt-4 pb-8 lg:pb-2">
			<div class="container">
				<div class="lg:flex justify-start gap-8">
					<a href="#" class="text-primary flex justify-center text-xs pb-2"
						>Cretated with <span class="text-red-600"> ❤ </span> TugasMU
					</a>
					<ul
						class="list-disc text-primary text-xs flex gap-4 justify-center flex-wrap"
					>
						<li><a href="#" class="lg:pr-4">Syarat & Ketentuan</a></li>
						<li><a href="#">Kebijakan Privasi</a></li>
					</ul>
				</div>
			</div>
		</footer>

		<!-- <footer class="bg-ylw pt-8 pb-16">
			<div class="container">
				<main class="text-dark">
					<div class="text-center">
						<h class="font-bold text-2xl">TugasMU</h>
						<p class="w-1/2 mx-auto py-4">
							Lorem, ipsum dolor sit amet consectetur adipisicing elit. Placeat
							rem commodi recusandae vitae tempore sed et. Sunt omnis alias
							labore.
						</p>
					</div>
					<div class="flex justify-center gap-8">
						<a href="#">Security</a>
						<a href="#">Privacy</a>
						<a href="#">Terms</a>
					</div>
				</main>
			</div>
		</footer> -->

		<script loading="eager">
			// Hamburger
window.onscroll = function () {
    const header = document.querySelector("header");
    const fixedNav = header.offsetTop;
    const toTop = document.querySelector("#to-top");

    if (window.pageYOffset > fixedNav) {
        header.classList.add("navbar-fixed");
        toTop.classList.remove("hidden");
        toTop.classList.add("flex");
    } else {
        header.classList.remove("navbar-fixed");
        toTop.classList.remove("flex");
        toTop.classList.add("hidden");
    }
};

const hamburger = document.querySelector("#hamburger");
const navMenu = document.querySelector("#nav-menu");

hamburger.addEventListener("click", function () {
    hamburger.classList.toggle("hamburger-active");
    navMenu.classList.toggle("hidden");
});

		</script>
		<script
			type="module"
			src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"
		></script>
		<script
			nomodule
			src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"
		></script>

		<script src="https://cdn.jsdelivr.net/npm/typed.js@2.0.12"></script>
		<script loading="eager">
			var typingeffect = new Typed(".multiText", {
				strings: [
					"Nugas tanpa ragu!",
					"Atur jadwalmu!",
					"Unlock your productivity!",
				],
				loop: true,
				typeSpeed: 100,
				backSpeed: 80,
				backDelay: 1500,
			});
		</script>
    </body>
</html>

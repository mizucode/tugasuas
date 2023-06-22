@extends('layouts.app') @section('content')
@if (session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif

<section class="w-screen h-screen flex flex-col justify-center items-center flex-wrap" >
				<section class="flex justify-center w-full items-center flex-wrap">
		<div class="flex justify-center flex-col items-center">
			<div class="brand-logo text-3xl text-center">
				<a href="#">Tugas<span class="text-kuning">MU</span></a>
				<h2 class="text-dark text-center text-sm">Unlock your productivity!</h2>
			</div>
		</div>
	</section>
	@error('email')
	<span class="text-red-600 mt-2" role="alert">
		<strong>Kata sandi atau email salah</strong>
	</span>
	@enderror
	<form
		method="POST"
		action="{{ route('login') }}"
		class="w-full mt-5 md:bg-white md:w-[30rem] md:shadow-[rgba(0,_0,_0,_0.24)_0px_3px_8px] md:py-4 rounded-md"
	>
		@csrf
		<div class="flex justify-center flex-wrap">
			<!-- Input -->
			<div class="flex justify-center flex-col w-full px-6">
				<label for="email" class="text-sm py-2 font-semibold"
					>{{ __('Email Address') }}</label
				>
				<input
					name="email"
					value="{{ old('email') }}"
					required
					autocomplete="email"
					autofocus
					type="email"
					id="email"
					class="floating-input"
				/>
			</div>
			<div class="flex justify-center flex-col w-full px-6">
				<label for="password" class="text-sm py-2 font-semibold"
					>{{ __('Password') }}</label
				>
				<input
					type="password"
					id="password"
					name="password"
					required
					autocomplete="current-password"
					class="floating-input"
				/>
				
			</div>
			<div class="flex justify-start w-full px-6 pt-2 gap-2">
				<input type="checkbox" name="remember" id="remember" {{ old('remember')
				? 'checked' : '' }}/>
				<label for="remember" class="text-sm py-2 font-semibold"
					>Remember Me</label
				>
			</div>

			<!-- <div class="text-right flex-col w-full px-6 py-2 md:py-6">
                <a href="./" class="text-biru">Lupa password?</a>
            </div> -->
		</div>
		<div class="flex justify-center flex-col w-full px-6 py-2 md:py-6">
			<button
				type="submit"
				class="bg-biru w-full py-3 text-xl rounded-md text-white text-center"
			>
				{{ __('Login') }}
			</button>
		</div>
		<!-- <div class="text-center py-2 md:py-4">
            <h2 class="text-abu text-sm">Or sign in with the following methods</h2>
        </div>
        <div class="flex justify-center flex-col w-full px-6">
            <a
                href="./index.html"
                class="bg-[#3b5998] w-full py-3 text-xl rounded-md text-white text-center"
                ><i class="fa-brands fa-facebook-f text-white"></i> Sign In with
                Facebook
            </a>
        </div> -->
		<div class="text-center px-6 py-2">
			<a href="/register" class="text-biru text-sm"
				>Belum punya akun? Klik disini!</a
			>
		</div>
	</form>
</section>
@endsection



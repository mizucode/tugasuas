@extends('layouts.app')

@section('content')

<section
	class="w-screen h-auto my-24 lg:my-2 flex flex-col justify-center items-center flex-wrap"
>
	<section class="flex justify-center w-full items-center flex-wrap lg:mt-8">
		<div class="flex justify-center flex-col items-center">
			<div class="brand-logo text-3xl text-center">
				<a href="#">Tugas<span class="text-kuning">Mu</span></a>
				<h2 class="text-dark text-center text-sm">
					Let's Start your Quest Journey!
				</h2>
			</div>
		</div>
	</section>
	<form
		method="POST"
		action="{{ route('register') }}"
		class="w-full mt-5 md:bg-white md:w-[30rem] md:shadow-[rgba(0,_0,_0,_0.24)_0px_3px_8px] md:py-4 rounded-md"
	>
		@csrf
		<div class="flex justify-center flex-wrap">
			<!-- Input -->
			<div class="flex justify-center flex-col w-full px-6">
				<label for="name" class="text-sm font-semibold py-2">Username</label>
				<input
					type="text"
					id="name"
					value="{{ old('name') }}"
					required
					name="name"
					autocomplete="name"
					autofocus
					class="floating-input"
				/>
				@error('name')
				<span class="invalid-feedback" role="alert">
					<strong>{{ $message }}</strong>
				</span>
				@enderror
			</div>
			<div class="flex justify-center flex-col w-full px-6">
				<label for="email" class="text-sm font-semibold py-2">Email</label>
				<input
					type="email"
					id="email"
					name="email"
					value="{{ old('email') }}"
					required
					autocomplete="email"
					class="floating-input"
				/>
				@error('email')
				<span class="invalid-feedback" role="alert">
					<strong>{{ $message }}</strong>
				</span>
				@enderror
			</div>

			<div class="flex justify-center flex-col w-full px-6">
				<label for="password" class="text-sm font-semibold py-2"
					>Password</label
				>
				<input
					type="password"
					id="password"
					name="password"
					required
					autocomplete="new-password"
					class="floating-input"
				/>
				@error('password')
				<span class="invalid-feedback" role="alert">
					<strong>{{ $message }}</strong>
				</span>
				@enderror
			</div>
			<div class="flex justify-center flex-col w-full px-6">
				<label for="password-confirm" class="text-sm py-2 font-semibold"
					>Konfirmasi Password</label
				>
				<input
					type="password"
					id="password-confirm"
					name="password_confirmation"
					required
					autocomplete="new-password"
					class="floating-input"
				/>
			</div>
		</div>
		<div class="flex justify-center flex-col w-full px-6 py-6 md:py-6">
			<button
				type="submit"
				class="bg-biru w-full py-3 text-xl rounded-md text-white text-center active:bg-sky-500"
			>
				Daftar Sekarang
			</button>
		</div>

		<div class="text-center px-6 py-2">
			<a href="./login" class="text-biru text-sm"
				>Sudah punya akun? Login disini!</a
			>
		</div>
	</form>
</section>



{{-- <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="row mb-3">
                            <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-end">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div> --}}
@endsection

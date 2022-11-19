@extends('layouts.auth')
@section('title', 'Register')
@section('auths')
    {{-- <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Register') }}</div>

                    <div class="card-body">
                        <form method="POST" action="{{ route('register') }}">
                            @csrf
                            <div class="row mb-3">
                                <label for="nisn" class="col-md-4 col-form-label text-md-end">{{ __('Nisn') }}</label>

                                <div class="col-md-6">
                                    <input id="nisn" type="text"
                                        class="form-control @error('nisn') is-invalid @enderror" name="nisn"
                                        value="{{ old('nisn') }}" required autocomplete="nisn" autofocus>

                                    @error('nisn')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="email"
                                    class="col-md-4 col-form-label text-md-end">{{ __('Email') }}</label>

                                <div class="col-md-6">
                                    <input id="email" type="email"
                                        class="form-control @error('email') is-invalid @enderror" name="email"
                                        value="{{ old('email') }}" required autocomplete="email">

                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="password"
                                    class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                                <div class="col-md-6">
                                    <input id="password" type="password"
                                        class="form-control @error('password') is-invalid @enderror" name="password"
                                        required autocomplete="new-password">

                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="Konfirmasi Password"
                                    class="col-md-4 col-form-label text-md-end">{{ __('Konfirmasi Password') }}</label>

                                <div class="col-md-6">
                                    <input id="password-confirm" type="password" class="form-control"
                                        name="password_confirmation" required autocomplete="new-password">
                                </div>
                            </div>

                            <div class="row mb-0">
                                <div class="text-center mt-2">
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

    <div class="container">
		<div class="login-container-wrapper clearfix">
			<div class="logo">
                <i class="fa fas fa-user"></i>
			</div>
			<div class="welcome"><strong>Selamat Datang</strong>, silahkan Registrasi terlebih dahulu.</div>

			<form class="form-horizontal login-form" method="POST" action="{{ route('register') }}">
                @csrf

				<div class="form-group relative">
                    <input id="nisn" type="text" class="form-control input-lg @error('nisn') is-invalid @enderror" name="nisn"
                    value="{{ old('nisn') }}" required autocomplete="nisn" autofocus placeholder="NISN">

                    @error('nisn')
                        <span class="invalid-feedback" role="alert" style="color:red;">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
				</div>

				<div class="form-group relative">
					<input id="email" type="email" class="form-control input-lg @error('email') is-invalid @enderror" name="email"
                    value="{{ old('email') }}" required autocomplete="email" placeholder="Email">

                    @error('email')
                        <span class="invalid-feedback" role="alert" style="color:red;">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
				</div>

                <div class="form-group relative password">
                    <input id="password" type="password" class="form-control input-lg @error('password') is-invalid @enderror" name="password"
                    required autocomplete="new-password" placeholder="Password">

                    @error('password')
                        <span class="invalid-feedback" role="alert" style="color:red;">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
				</div>

                <div class="form-group relative password">
                    <input id="password-confirm" type="password" class="form-control input-lg" name="password_confirmation"
                    required autocomplete="new-password" placeholder="Konfirmasi Password">
				</div>

                <div class="form-group">
                    <button type="submit" class="btn btn-success btn-lg btn-block">{{ __('Register') }}</button>
                </div>
                
                <div class="text-center">
                    <label>sudah punya akun? <a href="/login">Login</a></label>
                </div>
			</form>
		</div>
	</div>
@endsection

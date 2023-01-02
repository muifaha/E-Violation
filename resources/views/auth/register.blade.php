@extends('layouts.auth')
@section('title', 'Register')
@section('auths')

    <div class="container">
		<div class="animate__animated animate__fadeInDown login-container-wrapper clearfix">
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
                        <span class="invalid-feedback" role="alert" style="color:red; text-shadow: 2px 2px 2px black;">
                            <strong style="color: red; text-shadow: 1px 1px 2px #121212, -1px -1px 2px #ddd;">{{ $message }}</strong>
                        </span>
                    @enderror
				</div>

				<div class="form-group relative">
					<input id="email" type="email" class="form-control input-lg @error('email') is-invalid @enderror" name="email"
                    value="{{ old('email') }}" required autocomplete="email" placeholder="Email">

                    @error('email')
                        <span class="invalid-feedback" role="alert" style="color:red; text-shadow: 2px 2px 2px black;">
                            <strong style="color: red; text-shadow: 1px 1px 2px #121212, -1px -1px 2px #ddd;">{{ $message }}</strong>
                        </span>
                    @enderror
				</div>

                <div class="form-group relative password">
                    <input id="password" type="password" class="form-control input-lg" name="password"
                    required autocomplete="new-password" placeholder="Password">

                    
				</div>

                <div class="form-group relative password">
                    <input id="password-confirm" type="password" class="form-control input-lg @error('password') is-invalid @enderror" name="password_confirmation"
                    required autocomplete="new-password" placeholder="Konfirmasi Password">

                    @error('password')
                        <span class="invalid-feedback" role="alert" style="color:red; text-shadow: 2px 2px 2px black;">
                            <strong style="color: red; text-shadow: 1px 1px 2px #121212, -1px -1px 2px #ddd;">{{ $message }}</strong>
                        </span>
                    @enderror
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

@extends('layouts.data')
@section('title', 'Register')
@section('datas')

    <div class="container">
        <div class="animate__animated animate__fadeInDown login-container-wrapper clearfix" style="max-width: 600px;">
            <div class="welcome"><strong>Selamat Datang</strong>, silahkan Registrasi terlebih dahulu.</div>

            <form class="form-horizontal login-form" method="POST" action="{{ route('register') }}">
                @csrf

                        <div class="form-group relative">
                            <input id="nisn" type="text" class="form-control input-lg @error('nisn') is-invalid @enderror"
                                name="nisn" value="{{ old('nisn') }}" required autocomplete="nisn" autofocus
                                placeholder="NISN">

                            @error('nisn')
                                <span class="invalid-feedback" role="alert" style="color:red; text-shadow: 2px 2px 2px black;">
                                    <strong
                                        style="color: red; text-shadow: 1px 1px 2px #121212">{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="form-group relative">
                            <input id="email" type="email" class="form-control input-lg @error('email') is-invalid @enderror"
                                name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="Email">

                            @error('email')
                                <span class="invalid-feedback" role="alert" style="color:red; text-shadow: 2px 2px 2px black;">
                                    <strong
                                        style="color: red; text-shadow: 1px 1px 2px #121212">{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                <div class="all-data">
                    <div class="col-lg-6 col-sm-12 px-0 outer">
                        <div class="form-group relative password one">
                            <input id="password" type="password" class="form-control input-lg" name="password" required
                                autocomplete="new-password" placeholder="Password">
                        </div>
                    </div>
                    <div class="col-lg-6 col-sm-12 px-0 outer">
                        <div class="form-group relative password two">
                            <input id="password-confirm" type="password"
                                class="form-control input-lg @error('password') is-invalid @enderror" name="password_confirmation"
                                required autocomplete="new-password" placeholder="Konfirmasi Password">
                            @error('password')
                                <span class="invalid-feedback" role="alert" style="color:red; text-shadow: 2px 2px 2px black;">
                                    <strong
                                        style="color: red; text-shadow: 1px 1px 2px #121212">{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                </div>
                
                <div class="form-group relative">
                    <div>
                        <input name="g-recaptcha-response" type="hidden" required
                            class="@error('g-recaptcha-response') is-invalid @enderror"/>
                        <div class="g-recaptcha" data-sitekey="6LeGFxMkAAAAABDvm6s7ilLmm_7oXrgEfa--l_P6" style="transform: scale(0.842); -webkit-transform: scale(0.842); transform-origin: 0 0; -webkit-transform-origin: 0 0;">
                        </div>
                    </div>
                    @error('g-recaptcha-response')
                        <text-small style="font-size: 12px; color: red; text-shadow: 1px 1px 2px #121212; font-weight: 600; ">
                            {{ $message }}
                        </text-small>
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

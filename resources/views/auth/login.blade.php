@extends('layouts.auth')
@section('title', 'Login')
@section('auths')
    <div class="container mt-5">
        <div class="animate__animated animate__bounceIn login-container-wrapper clearfix">
            <div class="logo">
                <i class="fa fas fa-user"></i>
            </div>
            <div class="welcome"><strong>Selamat Datang Kembali</strong>, silahkan Login menggunakan NISN atau Email Anda.
            </div>

            <form class="form-horizontal login-form" method="POST" action="{{ route('login') }}">
                @csrf

                <div class="form-group relative">
                    <input id="nisn" type="text" class="form-control input-lg"
                        placeholder="{{ __('Nisn or Email') }}" name="nisn" value="{{ old('nisn') }}" required
                        autocomplete="nisn" autofocus>
                </div>

                <div class="form-group relative password">
                    <input id="password" class="form-control input-lg" name="password" type="password"
                        placeholder="Password" required>
                </div>

                @if (session()->has('error'))
                    <div class="alert alert-error text-right mb-1" style="padding: 0; font-size:12px;">
                        <strong>* {{ session('error') }}</strong>
                    </div>
                @endif

                <div class="form-group pt-2">
                    <button type="submit" class="btn btn-success btn-lg btn-block">{{ __('Login') }}</button>
                </div>

                <div class="text-center">
                    <label>belum punya akun? <a href="/register">Register</a></label>
                </div>
            </form>
        </div>
    </div>
@endsection

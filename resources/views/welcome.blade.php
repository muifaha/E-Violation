@extends('layouts.app')
@section('title', 'E-BOOK SMKN 1 SURABAYA')
@section('come')
    <nav class="navbar navbar-expand-md navbar-light">
        <div class="container">
            <a class="navbar-brand" href="{{ url('/') }}">
                E-BOOK
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
            data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
            aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <!-- Left Side Of Navbar -->
                <ul class="navbar-nav me-auto"></ul>

                <!-- Right Side Of Navbar -->
                <ul class="navbar-nav ms-auto">
                    <!-- Authentication Links -->
                    <li class="nav-item">
                        <a class="nav-link" href="#">Pengenalan</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Peraturan</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Penanganan</a>
                    </li>
                    @guest
                        @if (Route::has('login'))
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                        @endif
                        {{-- @if (Route::has('register'))
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                            </li>
                        @endif --}}
                    @else
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                            data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ Auth::user()->name }}
                            </a>

                            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                            </div>
                        </li>
                    @endguest
                </ul>
            </div>
        </div>
    </nav>

    <script>
        window.addEventListener("scroll", function(){
            var header = document.querySelector(".navbar");
            header.classList.toggle("sticky", window.scrollY > 0);
        });
    </script>

    <div class="content">
        <div id="cover" style="max-height: 500px">
            <img class="on-top" src="../img/cloud.png">
            <div class="titling">
                <div class="one">
                    <p class="title-1">E-BOOK</p>
                    <h1 class="title-1">SMKN 1 Surabaya</h1>
                </div>
                <p class="title-2">Website Pencatatan Pelanggaran Siswa SMKN 1 Surabaya</p>
            </div>
            
        </div>
        <div class="intro">
            <img class="scroll-up" src="../img/ast-1.png" alt="school-cover">
        <svg class="waves" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#fd7014" fill-opacity="1" d="M0,96L24,106.7C48,117,96,139,144,133.3C192,128,240,96,288,112C336,128,384,192,432,202.7C480,213,528,171,576,144C624,117,672,107,720,122.7C768,139,816,181,864,176C912,171,960,117,1008,112C1056,107,1104,149,1152,181.3C1200,213,1248,235,1296,229.3C1344,224,1392,192,1416,176L1440,160L1440,320L1416,320C1392,320,1344,320,1296,320C1248,320,1200,320,1152,320C1104,320,1056,320,1008,320C960,320,912,320,864,320C816,320,768,320,720,320C672,320,624,320,576,320C528,320,480,320,432,320C384,320,336,320,288,320C240,320,192,320,144,320C96,320,48,320,24,320L0,320Z"></path></svg>
        {{-- <svg class="waves" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#fd7014" fill-opacity="1" d="M0,96L24,106.7C48,117,96,139,144,133.3C192,128,240,96,288,112C336,128,384,192,432,202.7C480,213,528,171,576,144C624,117,672,107,720,122.7C768,139,816,181,864,176C912,171,960,117,1008,112C1056,107,1104,149,1152,181.3C1200,213,1248,235,1296,229.3C1344,224,1392,192,1416,176L1440,160L1440,0L1416,0C1392,0,1344,0,1296,0C1248,0,1200,0,1152,0C1104,0,1056,0,1008,0C960,0,912,0,864,0C816,0,768,0,720,0C672,0,624,0,576,0C528,0,480,0,432,0C384,0,336,0,288,0C240,0,192,0,144,0C96,0,48,0,24,0L0,0Z"></path></svg> --}}

        </div>

        <div id="rule"></div>

        <div id="handling"></div>
    </div>
@endsection

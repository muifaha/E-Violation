@extends('layouts.main')
@section('title', 'Dashboard')
@section('content')
    @if (Auth::user()->role != 3)
        <div class="dashboard">
            <div class="all-card">
                <div class="row">
                    <div class="cord col-lg-3 col-md-6">
                        <div class="card animate__animated animate__fadeInDownBig" style="animation-delay: 0s;">
                            <div class="card-body border-left-green">
                                <div class="row">
                                    <div class="col">
                                        <p class="card-title text-title">{{ 'SISWA' }}</p>
                                        <h2 class="card-text text-amount">
                                            @if ($siswas->count())
                                                {{ $siswas->count() }}
                                            @else
                                                0
                                            @endif
                                        </h2>
                                    </div>
                                    <div class="col-auto">
                                        <div class="icon-shape green icon-area">
                                            <i class="fas fa-user-graduate" aria-hidden="true"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @if (auth()->user()->role == 1)
                        <div class="cord col-lg-3 col-md-6">
                            <div class="card animate__animated animate__fadeInDownBig" style="animation-delay: 0.5s;">
                                <div class="card-body border-left-orange">
                                    <div class="row">
                                        <div class="col">
                                            <p class="card-title text-title">{{ 'USER' }}</p>
                                            <h2 class="card-text text-amount">{{ $users->count() }}</h2>
                                        </div>
                                        <div class="col-auto">
                                            <div class="icon-shape orange icon-pie">
                                                <i class="fa fa-users" aria-hidden="true"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="cord col-lg-3 col-md-6">
                            <a href="#" style="text-decoration: none;">
                                <div class="card dashy animate__animated animate__fadeInDownBig"
                                    style="animation-delay: 1s;">
                                    <div class="card-body border-left-yellow">
                                        <div class="row">
                                            <div class="col">
                                                <p class="card-title text-title hov">POIN</p>
                                                <h5 class="card-text text-amount text-dark">
                                                    <i class="fas fa-arrow-right"></i>
                                                </h5>
                                            </div>
                                            <div class="col-auto">
                                                <div class="icon-shape yellow icon-user">
                                                    <i class="fas fa-clipboard-list" aria-hidden="true"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="cord col-lg-3 col-md-6">
                            <a href="#" style="text-decoration: none;">
                                <div class="card dashb animate__animated animate__fadeInDownBig"
                                    style="animation-delay: 1.5s;">
                                    <div class="card-body border-left-blue">
                                        <div class="row">
                                            <div class="col">
                                                <p class="card-title text-title hov">VISI & MISI</p>
                                                <h5 class="card-text text-amount text-dark">
                                                    <i class="fas fa-arrow-right"></i>
                                                </h5>
                                            </div>
                                            <div class="col-auto">
                                                <div class="icon-shape blue icon-percent">
                                                    <i class="fas fa-tasks" aria-hidden="true"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                    @endif
                </div>
            </div>
        </div>
    @else
        <div class="row mt-3">
            <div class="col-lg-6 offset-lg-3">
                <div class="card shadow-lg-3">
                    <div class="card-header bg-primary text-light h5 p-3">
                        <i class="fas fa-tasks"></i>
                        Ini Id Card/ data Diri
                    </div>
                    <div class="card-body py-4 text-dark">

                    </div>
                </div>
            </div>
        </div>
    @endif
@endsection

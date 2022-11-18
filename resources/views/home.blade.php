@extends('layouts.main')
@section('title', 'Home')
@section('content')
    @if (Auth::user()->role != 0)
        <div class="dashboard">
            <div class="all-card">
                <div class="row">
                    <div class="cord col-lg-3 col-md-6">
                        <div class="card">
                            <div class="card-body border-left-green">
                                <div class="row">
                                    <div class="col">
                                        <p class="card-title text-title">{{ 'SISWA' }}</p>
                                        <h2 class="card-text text-amount">{{ $siswas->count() }}</h2>
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
                    <div class="cord col-lg-3 col-md-6">
                        <div class="card">
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
                            <div class="card dashy">
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
                            <div class="card dashb">
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
                </div>
            </div>
        </div>
    @else
        <div class="alert alert-primary alert-dismissible fade show" role="alert">Welcome,
            <strong> {{ $nama }}</strong>
            <button type="button" class="btn-close p-3" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        <div class="row mt-3">
            <div class="col-lg-6 offset-lg-3">
                <div class="card shadow-lg-3">
                    <div class="card-header bg-primary text-light h5 p-3">
                        <i class="fas fa-tasks"></i>
                        Papan Peringkat
                    </div>
                    <div class="card-body py-4 text-dark">
                        <div class="table-responsive">
                            <table class="table" width="100%" cellspacing="0">
                                <thead class="thead-inverse">
                                    <tr>
                                        <th>No.</th>
                                        <th>Nama</th>
                                        <th>Poin</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($siswas as $siswa)
                                        <tr>
                                            <td scope="row">{{ $loop->iteration }}</td>
                                            <td>{{ $siswa->nama }}</td>
                                            <td>{{ $siswa->poin }}</td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endif
@endsection

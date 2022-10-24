@extends('layouts.main')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            @if (Auth::user()->is_admin == true)
                <div class="card mb-3 bg-primary col-md-5">
                    <div class="fw-bolder fs-4">{{ 'Jumlah Siswa' }}</div>
                    <h3 class="d-flex d-inline">
                        {{ $siswas->count() }}
                    </h3>
                </div>
                <div class="card mb-3 mx-2 bg-warning col-md-5">
                    <div class="fw-bolder fs-4">{{ 'User' }}</div>
                    <h3 class="d-flex d-inline">
                        {{ $users->count() }}
                    </h3>
                </div>
            @else
                <div class="alert alert-primary alert-dismissible fade show" role="alert">Welcome,
                    <strong> {{ $nama }}</strong>
                    <button type="button" class="btn-close p-3" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
                <div class="row mt-3">

                    <div class="col-lg-6 offset-lg-3">
                        <div class="card shadow-lg ">
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
                                                {{-- <th>User ID</th> --}}
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
                                </div>

                            </div>
                        </div>
                    </div>
            @endif
        </div>
    </div>
@endsection

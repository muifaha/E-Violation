@extends('layouts.main')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="card shadow my-2 px-0 col-lg-8">
                <div class="card-header bg-primary text-light">
                    Detail
                </div>
                <div class="card-body">

                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">Nisn : {{ $siswa->nisn }}</li>
                        <li class="list-group-item">Nama : {{ $siswa->nama }}</li>
                        <li class="list-group-item">Gender : {{ $siswa->jk }}</li>
                        <li class="list-group-item">Alamat : {{ $siswa->alamat }}</li>
                        {{-- <li class="list-group-item">Kontak : {{ $kontak->jenis->jenis_kontak }}</li> --}}
                    </ul>
                </div>
            </div>
        </div>
    </div>
@endsection

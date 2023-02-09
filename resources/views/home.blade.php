@extends('layouts.main')
@section('title', 'Dashboard')
@section('content')
<div class="dashboard">
    <div class="all-card">
        <div class="row">

            {{-- Dashboard Admin --}}
            @if (Auth::user()->role == 1)
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
                <div class="cord col-lg-3 col-md-6">
                    <div class="card animate__animated animate__fadeInDownBig" style="animation-delay: 0.333s;">
                        <div class="card-body border-left-orange">
                            <div class="row">
                                <div class="col">
                                    <p class="card-title text-title">{{ 'GURU   ' }}</p>
                                    <h2 class="card-text text-amount">
                                        @if ($walikelas->count())
                                            {{ $walikelas->count() }}
                                        @else
                                            0
                                        @endif
                                    </h2>
                                </div>
                                <div class="col-auto">
                                    <div class="icon-shape orange icon-area">
                                        <i class="fas fa-user-tie" aria-hidden="true"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="cord col-lg-3 col-md-6">
                    <div class="card animate__animated animate__fadeInDownBig" style="animation-delay: 0.666s;">
                        <div class="card-body border-left-yellow">
                            <div class="row">
                                <div class="col">
                                    <p class="card-title text-title">{{ 'USER' }}</p>
                                    <h2 class="card-text text-amount">
                                        {{ $users->count() }}
                                    </h2>
                                </div>
                                <div class="col-auto">
                                    <div class="icon-shape yellow icon-area">
                                        <i class="fas fa-users" aria-hidden="true"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="cord col-lg-3 col-md-6">
                    <div class="card animate__animated animate__fadeInDownBig" style="animation-delay: 1s;">
                        <div class="card-body border-left-blue">
                            <div class="row">
                                <div class="col">
                                    <p class="card-title text-title">{{ 'PELANGGARAN' }}</p>
                                    <h2 class="card-text text-amount">
                                        @if ($peraturan->count())
                                            {{ $peraturan->count() }}
                                        @else
                                            0
                                        @endif
                                    </h2>
                                </div>
                                <div class="col-auto">
                                    <div class="icon-shape blue icon-pie">
                                        <i class="fa fa-clipboard" aria-hidden="true"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endif

            {{-- Dashboard WaliKelas --}}
            @if (auth()->user()->role == 2)
                <div class="cord col-lg-4 col-md-6 ps-0">
                    <div class="card animate__animated animate__fadeInDownBig" style="animation-delay: .0s;">
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
                <div class="cord col-lg-4 col-md-6">
                    <div class="card animate__animated animate__fadeInDownBig" style="animation-delay: .5s;">
                        <div class="card-body border-left-blue">
                            <div class="row">
                                <div class="col">
                                    <p class="card-title text-title">{{ 'PELANGGARAN' }}</p>
                                    <h2 class="card-text text-amount">
                                        @if ($peraturan->count())
                                            {{ $peraturan->count() }}
                                        @else
                                            0
                                        @endif
                                    </h2>
                                </div>
                                <div class="col-auto">
                                    <div class="icon-shape blue icon-pie">
                                        <i class="fa fa-users" aria-hidden="true"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endif

            {{-- Dashboard OrangTua --}}
            @if (auth()->user()->role == 3)
                <div class="cord col-lg-4 col-md-6 p-0">
                    <div class="card animate__animated animate__fadeInDownBig" style="animation-delay: 0s;">
                        <div class="card-body border-left-green">
                            <div class="row">
                                <div class="col">
                                    <p class="card-title text-title">{{ 'POIN PELANGGARAN' }}</p>
                                    <h2 class="card-text text-amount">
                                        {{ $siswa->poin }}
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
                <div class="row px-0">
                    <div class="cut col-lg-6 pr-2">
                        <div class="card shadow-lg-3 animate__animated animate__zoomIn animate__delay-1s">
                            <div class="card-header bg-gradient bg-info text-light h5 px-3">
                                <i class="fas fa-user-graduate mr-2"></i>
                                Data Siswa
                            </div>
                            <div class="card-body py-1 px-3 text-dark">
                                <table class="table mb-0">
                                    <tr class="table-tr">
                                        <td>Nama</td>
                                        <td>:</td>
                                        <td>{{ $siswa->nama }}</td>
                                    </tr>
                                    <tr class="table-tr">
                                        <td>NISN</td>
                                        <td>:</td>
                                        <td>{{ $siswa->nisn }}</td>
                                    </tr>
                                    <tr class="table-tr">
                                        <td>TTL</td>
                                        <td>:</td>
                                        <td>{{ $siswa->ttl }}</td>
                                    </tr>
                                    <tr class="table-tr">
                                        <td>Jenis Kelamin</td>
                                        <td>:</td>
                                        <td>{{ $siswa->jk }}</td>
                                    </tr>
                                    <tr class="table-tr">
                                        <td>Agama</td>
                                        <td>:</td>
                                        <td>{{ $siswa->agama }}</td>
                                    </tr>
                                    <tr class="table-tr">
                                        <td>Alamat</td>
                                        <td>:</td>
                                        <td>{{ $siswa->alamat }}</td>
                                    </tr>
                                    <tr class="table-tr">
                                        <td>Telepon Siswa</td>
                                        <td>:</td>
                                        <td>{{ $siswa->no_telp }}</td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="cut col-lg-6 pl-2">
                        <div class="card shadow-lg-3 animate__animated animate__zoomIn animate__delay-2s">
                            <div class="card-header bg-gradient bg-info text-light h5 px-3">
                                <i class="fas fa-user mr-2"></i>
                                Data Orang Tua
                            </div>
                            <div class="card-body py-1 px-3 text-dark">
                                <table class="table mb-0">
                                    <tr class="table-trr">
                                        <td>Nama Ayah</td>
                                        <td>:</td>
                                        <td>{{ $siswa->n_ayah }}</td>
                                    </tr>
                                    <tr class="table-trr">
                                        <td>Nama Ibu</td>
                                        <td>:</td>
                                        <td>{{ $siswa->n_ibu }}</td>
                                    </tr>
                                    <tr class="table-trr">
                                        <td>Alamat Ortu</td>
                                        <td>:</td>
                                        <td>{{ $siswa->alamat_ortu }}</td>
                                    </tr>
                                    <tr class="table-trr">
                                        <td>Telepon Rumah</td>
                                        <td>:</td>
                                        <td>{{ $siswa->no_telp_rumah }}</td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            @endif

        </div>

    @if (auth()->user()->role == 1)
        <div class="card col-lg-12 animate__animated animate__fadeInDownBig" style="animation-delay: 1.333s;">
            <div class="card-header bg-purple">
                <h3 class="pb-0 mb-0 text-white">Penanganan Pelanggaran Terbaru</h3>
            </div>
            <div class="card-body py-2" style="max-width:auto;">
                <div class="row">
                    @if ($penanganan->count())

                        @foreach ($penanganan as $msg)
                            <div class="list-group my-2 px-2">
                                <div class="border-hover list-group-item list-group-item-action flex-column align-items-start py-0 px-3"
                                    style="background-color: #ffd8ab84; border-radius: 6px;">
                                    <div class="d-flex w-100 mt-1 mb-1 align-items-center" style="justify-content: space-between; flex-wrap: wrap;">
                                        <a href="/master-histori/{{ $msg->siswa->id }}" class="linkind">
                                            <b style="font-size: 12px">{{ $msg->siswa->nama }} - {{$msg->siswa->kelas->nama_kelas}}</b>
                                        </a>
                                        <a>
                                            <small class="px-0" style="height: 20px; width: auto;">{{ $msg->created_at->diffForHumans() }}</small>
                                        </a>
                                    </div>
                                    <div>
                                        <div class="col-lg-10 row" style="margin-top: .2rem;">
                                            <p class="mb-1 mt-1 h6 text-dark px-0">{{ $msg->pesan->tindak_lanjut }}</p>
                                            @if ($msg->pesan->tingkatan == 'Ringan')
                                                @if ($msg->status == 0)
                                                    <a href="/penanganan" class="px-0 mb-2 linkred">Belum Terkonfirmasi</a>
                                                @else
                                                    <a href="/penanganan" class="px-0 mb-2 linkred">Terkonfirmasi pada {{ $msg->created_at->format('d/m/Y') }}</a>
                                                @endif
                                            @else
                                                @if ($msg->status == 0)
                                                    <a href="/penanganan" class="px-0 mb-2 linkred">Belum Terkonfirmasi</a>
                                                @endif
                                                @if ($msg->status == 1)
                                                    <a href="/penanganan" class="px-0 mb-2 linkred">Belum Terlaksana</a>
                                                @endif
                                                @if ($msg->status == 2)
                                                    <a href="/penanganan" class="px-0 mb-2 linkred">Terkonfirmasi pada {{ $msg->created_at->format('d/m/Y') }}</a>
                                                    {{-- <a class="px-0" href="/storage/surat/{{ $msg->berkas }}" target="_blank" rel="noopener noreferrer">
                                                        <p class="mb-2">{{ $msg->berkas }}</p>
                                                    </a> --}}
                                                @endif
                                            @endif
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    @else
                        <h5 class="text-secondary text-center py-2 my-2">Pesan tidak ada</h5>
                    @endif
                </div>
            </div>
        </div>
    @endif
    @if (auth()->user()->role == 2)
        <div class="card col-lg-12 animate__animated animate__fadeInDownBig" style="animation-delay: 1s;">
            <div class="card-header bg-purple">
                <h3 class="pb-0 mb-0 text-white">Penanganan kelas {{$wali_kelas_id->kelas->nama_kelas}}</h3>
            </div>
            <div class="card-body py-2" style="max-width:auto;">
                <div class="row">
                    @if ($penanganan->count())

                        @foreach ($penanganan as $msg)
                            <div class="list-group my-2 px-2">
                                <div class="border-hover list-group-item list-group-item-action flex-column align-items-start py-0 px-3"
                                    style="background-color: #ffd8ab84; border-radius: 6px;">
                                    <div class="d-flex w-100 mt-1 mb-1 align-items-center" style="justify-content: space-between; flex-wrap: wrap;">
                                        <a href="/master-histori/{{ $msg->siswa->id }}" class="linkind">
                                            <b style="font-size: 12px">{{ $msg->siswa->nama }}</b>
                                        </a>
                                        <a>
                                            <small class="px-0" style="height: 20px; width: auto;">{{ $msg->created_at->diffForHumans() }}</small>
                                        </a>
                                    </div>
                                    <div>
                                        <div class="col-lg-10 row" style="margin-top: .2rem;">
                                            <p class="mb-1 mt-1 h6 text-dark px-0">{{ $msg->pesan->tindak_lanjut }}</p>
                                            @if ($msg->pesan->tingkatan == 'Ringan')
                                                @if ($msg->status == 0)
                                                    <a href="/penanganan" class="px-0 mb-2 linkred">Belum Terkonfirmasi</a>
                                                @else
                                                    <a href="/penanganan" class="px-0 mb-2 linkred">Terkonfirmasi pada {{ $msg->created_at->format('d/m/Y') }}</a>
                                                @endif
                                            @else
                                                @if ($msg->status == 0)
                                                    <a href="/penanganan" class="px-0 mb-2 linkred">Belum Terkonfirmasi</a>
                                                @endif
                                                @if ($msg->status == 1)
                                                    <a href="/penanganan" class="px-0 mb-2 linkred">Belum Terlaksana</a>
                                                @endif
                                                @if ($msg->status == 2)
                                                    <a href="/penanganan" class="px-0 mb-2 linkred">Terkonfirmasi pada {{ $msg->created_at->format('d/m/Y') }}</a>
                                                    {{-- <a class="px-0" href="/storage/surat/{{ $msg->berkas }}" target="_blank" rel="noopener noreferrer">
                                                        <p class="mb-2">{{ $msg->berkas }}</p>
                                                    </a> --}}
                                                @endif
                                            @endif
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    @else
                        <h5 class="text-secondary text-center py-2 my-2">Pesan tidak ada</h5>
                    @endif
                </div>
            </div>
        </div>
    @endif
    </div>
</div>
@endsection

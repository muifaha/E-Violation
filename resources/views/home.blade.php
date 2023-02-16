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
                                <div class="float-end">
                                    <button class="btn clickind btn-sm btn-warning btn-detail open_modal animate__animated animate__flip"
                                style="animation-delay: 1s;"><i class="fas fa-pen"></i></button>
                                </div>
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
                @include('siswa.editsiswa')
            @endif

        </div>

    @if (auth()->user()->role == 1)
        <div class="card col-lg-12 animate__animated animate__fadeInDownBig" style="animation-delay: 1.333s;">
            <div class="card-header bg-purple">
                <h3 class="pb-0 mb-0 text-white">Penanganan Terbaru</h3>
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
                <h3 class="pb-0 mb-0 text-white">Penanganan Kelas {{$wali_kelas_id->kelas->nama_kelas}}</h3>
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
@push('scripts')
<script>
    
    $(document).on('click', '.open_modal', function() {
        var url = "/editsiswa";
        var siswa_id = $(this).val();
        $.get(url, function(data) {
            //success data
            const target = "{{ url('editsiswa/:id') }}".replace(':id', data.id);
            $('input#student_id').val(data.id);
            $('input#name').val(data.nama);
            $('input#alamat').val(data.alamat);
            $('input#no_telp').val(data.no_telp);
            $('input#n_ayah').val(data.n_ayah);
            $('input#n_ibu').val(data.n_ibu);
            $('input#no_telp_rumah').val(data.no_telp_rumah);
            $('input#alamat_ortu').val(data.alamat_ortu);
            // $('#editsiswaform').attr('action', target);
            // $('#editsiswaform').attr('action', pass);
            $('#myModal').modal('show');
        });
    });

    function editSiswa(event) {
            var url = $('form#editsiswaform').attr('action');
            $('form#editsiswaform').validate({ // initialize the plugin
                rules: {
                    name: {
                        required: true,
                        maxlength: 255
                    },
                    alamat: {
                        required: true,
                        maxlength: 255,
                    },
                    alamat_ortu: {
                        required: true,
                        maxlength: 255,
                    },
                    no_telp: {
                        number: true,
                        required: true,
                        minlength: 8,
                        maxlength: 15,
                    },
                    n_ayah: {
                        required: true,
                        maxlength: 255,
                    },
                    n_ibu: {
                        required: true,
                        maxlength: 255,
                    },
                    no_telp_rumah: {
                        number: true,
                        required: true,
                        minlength: 5,
                        maxlength: 15,
                    }
                },
                messages: {
                    name: {
                        required: "* Nama harus diisi!",
                        maxlength: "* Nama maksimal 255 karakter!"
                    },
                    alamat: {
                        required:  "* Alamat harus diisi!",
                        maxlength: "* Alamat maksimal 255 digit!",
                    },
                    alamat_ortu: {
                        required:  "* Alamat Ortu harus diisi!",
                        maxlength: "* Alamat Ortu maksimal 255 digit!",
                    },
                    no_telp: {
                        number: "* Telepon harus berupa angka!",
                        required: "* Telepon harus diisi!",
                        minlength: "* Telepon minimal 8 digit!",
                        maxlength: "* Telepon maksimal 15 digit!",
                    },
                    n_ayah: {
                        required:  "* Nama Ayah harus diisi!",
                        maxlength: "* Nama Ayah maksimal 255 digit!",
                    },
                    n_ibu: {
                        required:  "* Nama Ibu harus diisi!",
                        maxlength: "* Nama Ibu maksimal 255 digit!",
                    },
                    no_telp_rumah: {
                        number: "* Telepon rumah harus berupa angka!",
                        required: "* Telepon rumah harus diisi!",
                        minlength: "* Telepon rumah minimal 5 digit!",
                        maxlength: "* Telepon rumah maksimal 15 digit!",
                    }
                    
                },
                submitHandler: function(form) {
                    $("#btn-update").attr("disabled", true);

                    let id = $('input#student_id').val();
                    let name = $('input#name').val();
                    let alamat = $('input#alamat').val();
                    let no_telp = $('input#no_telp').val();
                    let n_ayah = $('input#n_ayah').val();
                    let n_ibu = $('input#n_ibu').val();
                    let no_telp_rumah = $('input#no_telp_rumah').val();
                    let alamat_ortu = $('input#alamat_ortu').val();
                    console.log()
                    $.ajax({
                        url: '/updatesiswa/' + id,
                        type: "PUT",
                        data: {
                            _token: $('meta[name=csrf-token]').attr("content"),
                            name,
                            alamat,
                            no_telp,
                            n_ayah,
                            n_ibu,
                            no_telp_rumah,
                            alamat_ortu
                        },
                        success: function(res) {
                            if (res.success) {
                                swal(
                                    'Data berhasil diubah!',
                                    "",
                                    'success'
                                ).then((result) => {
                                    window.location.reload();
                                });
                                console.log(res);
                            } else {
                                console.log(res.errors);
                                $("#btn-update").attr("disabled", false);

                                $.each(res.errors, function(key, val) {

                                    swal({
                                        title: "Data tidak valid!",
                                        icon: "warning",
                                        dangerMode: true,
                                        button: true,
                                    });
                                });
                            }
                        },
                        error: function(jqXHR, textStatus, errorThrown) {
                          
                            $("#btn-update").attr("disabled", false);
                            console.log(JSON.stringify(jqXHR));
        console.log("AJAX error: " + textStatus + ' : ' + errorThrown);
                            swal({
                                title: "Data tidak valid!",
                                icon: "warning",
                                dangerMode: true,
                                button: true,
                            });
                        }
                    });
                }
            });
        }
</script>
@endpush
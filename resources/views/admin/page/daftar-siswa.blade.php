@extends('layouts.main')
@section('title', 'Daftar Siswa')
@section('content')
    <div class="card shadow px-0">
        <div class="card-header">
            <h2 class="fw-bolder mt-2 d-inline-flex">List Siswa</h2>
            <div class="dropdown float-right">
                <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown"
                    aria-expanded="false">Filter Kelas</button>
                <ul class="dropdown-menu">
                    @foreach ($kelas as $item)
                        <li>
                            <a class="dropdown-item" href="/daftar-siswa?kelas={{ $item->nama_kelas }}"
                                class="text-decoration-none author">{{ $item->nama_kelas }}</a>
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>

        <div class="card-body">

            <!-- Live Search -->
            <!-- <div class="float-right mb-2">
                                <form action="/daftar-siswa" class="d-inline-flex">
                                    @if (request('kelas'))
    <input type="hidden" name="kelas" value="{{ request('kelas') }}">
    @endif
                                    <div class="input-group mb-3">
                                        <input type="text" class="form-control" placeholder="Search" name="search" value="{{ request('search') }}">
                                        <button class="btn btn-primary btn-active-secondary" type="submit" style="z-index: 0;">Search</button>
                                    </div>
                                </form>
                            </div> -->

            <table id="table_data_user" class="table table-bordered display nowrap" cellspacing="0" width="100%">
                <thead class="thead-inverse">
                    <tr>
                        <th>No.</th>
                        <th>Nisn</th>
                        <th>Nama</th>
                        <th>Kelas</th>
                        <th>Wali Kelas</th>
                        <th>Poin</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($siswas as $siswa)
                        <tr>
                            <td scope="row">{{ ($siswas->currentpage() - 1) * $siswas->perpage() + $loop->index + 1 }}
                            </td>
                            <td>{{ $siswa->nisn }}</td>
                            <td>{{ $siswa->nama }}</td>
                            <td>{{ $siswa->kelas->nama_kelas }}</td>
                            <td>{{ $siswa->user->name }}</td>
                            <td><a href="/guru/histori/{{ $siswa->id }}"><b>{{ $siswa->poin }}</b></a></td>
                            <td data-label="Posisi">
                                <a href="#modalCenter{{ $siswa->id }}" role="button" class="btn btn-sm btn-info"
                                    data-bs-toggle="modal">Detail</a>
                                <a href="/pelanggaran/tambah/{{ $siswa->nisn }}" class="btn btn-sm btn-danger ">Tambah</a>
                                <a href="/pelanggaran/kurang/{{ $siswa->nisn }}"
                                    class="btn btn-sm btn-success d-inline-flex">Kurang</a>

                                <!-- Modal Detail -->
                                <div id="modalCenter{{ $siswa->id }}" class="modal fade" tabindex="-1">
                                    <div class="modal-dialog modal-dialog-centered">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title">Detail Siswa</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                                            </div>
                                            <div class="modal-body">
                                                <div class="container">
                                                    <div class="row">
                                                        <div class="col-sm-12">
                                                            <ul class="list-group list-group-flush h5 p-2">
                                                                <li class="list-group-item">TTL : {{ $siswa->ttl }}</li>
                                                                <li class="list-group-item">Gender : {{ $siswa->jk }}</li>
                                                                <li class="list-group-item">Agama : {{ $siswa->agama }}</li>
                                                                <li class="list-group-item">Alamat : {{ $siswa->alamat }}</li>
                                                                <li class="list-group-item">No. Telp : {{ $siswa->no_telp }}</li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary"
                                                    data-bs-dismiss="modal">Kembali</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

        <!-- <div class="card-footer d-inline-flex justify-content-end">
                            {{ $siswas->onEachSide(5)->links() }}
                        </div> -->

    </div>
@endsection

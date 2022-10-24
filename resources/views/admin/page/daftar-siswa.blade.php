@extends('layouts.main')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="card shadow my-2 px-0">
                <div class="card-header">
                    <h2 class="fw-bolder mt-2 d-inline-flex">
                        List Siswa
                    </h2>
                    <div class="dropdown float-right">
                        <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            Filter Kelas
                        </button>
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
                    <div class="float-right mb-2">
                        <form action="/daftar-siswa" class="d-inline-flex">
                            @if (request('kelas'))
                                <input type="hidden" name="kelas" value="{{ request('kelas') }}">
                            @endif
                            <div class="input-group mb-3">
                                <input type="text" class="form-control" placeholder="Search" name="search"
                                    value="{{ request('search') }}">
                                <button class="btn btn-primary btn-active-secondary" type="submit">Search</button>
                            </div>
                        </form>
                    </div>
                    <div class="table-responsive">
                        <table class="table" width="100%" cellspacing="0">
                            <thead class="thead-inverse">
                                <tr>
                                    <th>No.</th>
                                    <th>Nisn</th>
                                    <th>Nama</th>
                                    <th>Kelas</th>
                                    <th>Detail</th>
                                    <th>Poin</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($siswas as $siswa)
                                    <tr>
                                        <td scope="row">
                                            {{ ($siswas->currentpage() - 1) * $siswas->perpage() + $loop->index + 1 }}
                                        </td>
                                        <td>{{ $siswa->nisn }}</td>
                                        <td>{{ $siswa->nama }}</td>
                                        <td>{{ $siswa->kelas->nama_kelas }}</td>
                                        <td data-label="Posisi">
                                            <!-- Button HTML (to Trigger Modal) -->
                                            <a href="#modalCenter{{ $siswa->id }}" role="button"
                                                class="btn btn-sm btn-info" data-bs-toggle="modal">Detail</a>

                                            <!-- Modal HTML -->
                                            <div id="modalCenter{{ $siswa->id }}" class="modal fade" tabindex="-1">
                                                <div class="modal-dialog modal-dialog-centered">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title">Detail Siswa</h5>
                                                            <button type="button" class="btn-close"
                                                                data-bs-dismiss="modal"></button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <div class="container">
                                                                <div class="row">
                                                                    <div class="col-sm-12">
                                                                        <ul class="list-group list-group-flush h5 p-2">
                                                                            <li class="list-group-item">TTL :
                                                                                {{ $siswa->ttl }}</li>
                                                                            <li class="list-group-item">Gender :
                                                                                {{ $siswa->jk }}</li>
                                                                            <li class="list-group-item">Agama :
                                                                                {{ $siswa->agama }}</li>
                                                                            <li class="list-group-item">Alamat :
                                                                                {{ $siswa->alamat }}</li>
                                                                            <li class="list-group-item">No. Telp :
                                                                                {{ $siswa->no_telp }}</li>
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
                                        <td><a href="/guru/histori/{{ $siswa->id }}">{{ $siswa->poin }}</a></td>
                                        <td>
                                            <a href="/pelanggaran/tambah/{{ $siswa->nisn }}"
                                                class="btn btn-sm btn-danger ">Tambah</a>
                                            <a href="/pelanggaran/kurang/{{ $siswa->nisn }}"
                                                class="btn btn-sm btn-success d-inline-flex">Kurang</a>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="card-footer d-inline-flex justify-content-end">
                    {{ $siswas->onEachSide(5)->links() }}
                </div>
            </div>
        </div>
    </div>
@endsection

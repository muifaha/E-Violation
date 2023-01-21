@extends('layouts.main')
@section('title', 'Daftar Siswa')
@section('content')
    <div class="card shadow px-0">
        <div class="card-header">
            <h2 class="fw-bolder mt-2 d-inline-flex">List Siswa {{ $wali_kelas->kelas->nama_kelas }}</h2>

        </div>

        <div class="card-body">
            <table id="table_data_user" class="table table-bordered display nowrap" cellspacing="0" width="100%">
                <thead class="thead-inverse">
                    <tr>
                        <th>No</th>
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
                                                                <li class="list-group-item">Gender : {{ $siswa->jk }}
                                                                </li>
                                                                <li class="list-group-item">Agama : {{ $siswa->agama }}
                                                                </li>
                                                                <li class="list-group-item">Alamat : {{ $siswa->alamat }}
                                                                </li>
                                                                <li class="list-group-item">No. Telp :
                                                                    {{ $siswa->no_telp }}</li>
                                                                <li class="list-group-item">No. Telpon Rumah :
                                                                    {{ $siswa->no_telp_rumah }}</li>
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
    </div>
@endsection
@push('scripts')
    <script>
        $(document).ready(function() {
            var table = $('#table_data_user').DataTable({
                pagingType: 'simple_numbers',
                responsive: true,
                processing: true,
                "language": {
                    "url": "//cdn.datatables.net/plug-ins/9dcbecd42ad/i18n/Indonesian.json",
                    paginate: {
                        first: '«',
                        previous: '‹',
                        next: '›',
                        last: '»'
                    },
                    aria: {
                        paginate: {
                            first: 'First',
                            previous: 'Previous',
                            next: 'Next',
                            last: 'Last'
                        }
                    },
                },
                "columnDefs": [{
                        "orderable": false,
                        "targets": 2
                    },
                    {
                        "orderable": false,
                        "targets": 5
                    },
                ],
            });
        });
    </script>
@endpush

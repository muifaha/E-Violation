@extends('layouts.main')
@section('title', 'Daftar user')
@section('content')
    <div class="card shadow px-0">
        <div class="card-header">
            <h2 class="fw-bolder mt-2 d-inline-flex">List user</h2>

        </div>

        <div class="card-body">
            <table id="table_data_user" class="table table-bordered display nowrap" cellspacing="0" width="100%">
                <thead class="thead-inverse">
                    <th>No</th>
                    <th>Nama</th>
                    <th>Email</th>
                    <th>Info</th>
                    <th>Role</th>
                    <th>Aksi</th>
                </thead>
                <tbody>
                    @foreach ($users as $user)
                        <tr>
                            <td scope="row">{{ ($users->currentpage() - 1) * $users->perpage() + $loop->index + 1 }}
                            </td>
                            <td>{{ $user->name }}</td>
                            <td>{{ $user->email }}</td>
                            <td>{{ $user->info }}</td>
                            @if ($user->role == 1)
                                <td>Admin</td>
                            @endif
                            @if ($user->role == 2)
                                <td>Guru</td>
                            @endif
                            @if ($user->role == 3)
                                <td>Siswa</td>
                            @endif
                            <td>
                                <form action="/master-user/{{ $user->id }}" method="post" id="form">
                                    @csrf
                                    <button type="submit" class="btn btn-sm btn-danger" id="show_confirm">Hapus</button>
                                </form>
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
                'columnDefs': [{
                        orderable: false,
                        targets: 1
                    },
                    {
                        orderable: false,
                        targets: 2
                    },
                    {
                        orderable: false,
                        targets: 5
                    },
                ],
            });
            $('button#show_confirm').click(function(event) {
                var form = $(this).closest("form");
                var name = $(this).data("name");
                event.preventDefault();
                swal({
                        title: `Yakin ingin menghapus?`,
                        text: "Hapus Permanen User",
                        icon: "warning",
                        buttons: [true, "Yakin"],
                        dangerMode: true,
                    })
                    .then((willDelete) => {
                        if (willDelete) {
                            form.submit();
                            setTimeout(() => {
                                swal("User berhasil dihapus!", "", "success");
                            }, 1100);
                        }
                    });
            });
        });
    </script>
@endpush

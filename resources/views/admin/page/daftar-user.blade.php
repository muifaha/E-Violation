@extends('layouts.main')
@section('title', 'Master user')
@section('content')
    <div class="card shadow px-0">
        <div class="card-header bg-gradient bg-primary">
            <h3 class="fw-bolder mt-2 d-inline-flex text-white">List User</h3>
        </div>

        <div class="card-body">
            @if (session()->has('errors'))
                <ul>
                    <li>{{ session('errors') }}</li>
                </ul>
            @endif
            <table id="table_data_user" class="table table-bordered display" cellspacing="0" width="100%">
                <thead class="thead-inverse">
                    <th>No</th>
                    <th>Nama</th>
                    <th>Email</th>
                    <th>Registrasi</th>
                    <th>Role</th>
                    <th>Aksi</th>
                </thead>
                <tbody>
                    @foreach ($users->skip(1) as $user)
                        <tr>
                            <td scope="row">
                                {{ ($users->currentpage() - 1) * $users->perpage() + $loop->index + 1 }}
                            </td>
                            <td>{{ $user->name }}</td>
                            <td>{{ $user->email }}</td>
                            @if ($user->info == 1)
                                <td class="text-success">Sudah</td>
                            @else
                                <td class="text-danger">Belum</td>
                            @endif
                            @if ($user->role == 1)
                                <td class="text-primary" style="font-weight:600;">Admin</td>
                            @endif
                            @if ($user->role == 2)
                                <td class="text-info" style="font-weight:500;">Guru</td>
                            @endif
                            @if ($user->role == 3)
                                <td class="text-secondary" style="font-weight:500;">Siswa</td>
                            @endif
                            <td>
                                <button class="btn clickind btn-sm btn-warning btn-detail open_modal"
                                    value="{{ $user->id }}"><i class="fas fa-pen"></i></button>
                                <form action="/master-user/{{ $user->id }}" method="post" id="form"
                                    class="d-inline">
                                    @csrf
                                    <button type="submit" class="btn clickind btn-sm btn-danger" id="show_confirm"><i class="fas fa-trash"></i></button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    @include('admin.page.edit_user')
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
                        responsivePriority: 1,
                        targets: 1
                    },
                    {
                        orderable: false,
                        targets: 2
                    },
                    {
                        orderable: false,
                        responsivePriority: 2,
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
        $(document).on('click', '.open_modal', function() {
            var url = "/master-user";
            var user_id = $(this).val();
            $.get(url + '/' + user_id + '/' + 'edit', function(data) {
                //success data
                const target = "{{ url('master-user/:id') }}".replace(':id', data.id)
                const pass = "{{ url('change-pass/:id') }}".replace(':id', data.id)
                $('input#user_id').val(data.id);
                $('input#nisn').val(data.nisn);
                $('input#name').val(data.name);
                $('input#email').val(data.email);
                $('select#role').val(data.role).change();
                if (data.info == '0') {
                    $('input#info2').prop('checked', true);
                } else {
                    $('input#info').prop('checked', true);
                };
                $('#editform').attr('action', target);
                $('#change_pass_form').attr('action', pass);
                $('#myModal').modal('show');
            })
        });

        $('button#btn-update').click(function(event) {
            var form = $(this).closest("form");

            form.submit();
            setTimeout(() => {
                swal("User berhasil diupdate!", "", "success");
            }, 2200);

        });

        $('button#btn-pass').click(function(event) {
            var form = $(this).closest("form");

            form.submit();
            // setTimeout(() => {
                swal("Password berhasil diupdate!", "", "success");
            // }, 2200);

        });
    </script>
@endpush

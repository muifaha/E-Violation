@extends('layouts.main')
@section('title', 'Pesan')
@section('content')
    <div class="row justify-content-center">
        <div class="card shadow px-0">
            <div class="card-header">
                <h3 class="fw-bolder mt-2">
                    Pesan
                </h3>
            </div>
            <div class="card-body">
                <table id="table_data_user" class="table table-bordered display nowrap" cellspacing="0" width="100%">
                    <thead class="thead-inverse">
                        <tr>
                            <th>No</th>
                            <th>Pesan</th>
                            <th>Konfirmasi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($pesan as $msg)
                            <tr>
                                <td scope="row">
                                    {{ ($pesan->currentpage() - 1) * $pesan->perpage() + $loop->index + 1 }}
                                </td>
                                <td>{{ $msg->tindak_lanjut }}</td>
                                <td>
                                    @if ($msg->konfirmasi == 0)
                                            <button class="btn btn-primary btn-sm">Belum terkonfirmasi</button>
                                    @else
                                        <button class="btn btn-secondary btn-sm" disabled>Terkonfirmasi {{$msg->updated_at}}</button>
                                    @endif
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>

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
                        "targets": 1
                    },
                    {
                        "orderable": false,
                        "targets": 2
                    },
                ],
                "pageLength": 10
            });
        });
    </script>
@endpush

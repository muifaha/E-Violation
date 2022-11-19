@extends('layouts.main')
@section('title', 'Kurang Poin')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="card">
                <div class="card-header d-inline-flex">
                    <h2 class="fw-bolder my-3">
                        Penghargaan
                    </h2>
                </div>

                <div class="card-body">
                    <form action="/pelanggaran/{{ $siswa->id }}" method="post">
                        @csrf
                        @method('put')
                        <input type="text" name="total" id="total" hidden>
                        <table class="table table-striped table-inverse table-responsive">
                            <thead class="thead-inverse">
                                <tr>
                                    <th>No.</th>
                                    <th>Pelanggaran</th>
                                    <th>Poin</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($rules as $rule)
                                    <tr>
                                        <td scope="row">{{ $loop->iteration }}</td>
                                        <td>{{ $rule->name }}</td>
                                        <td>{{ $rule->poin }}</td>
                                        <td>
                                            <input type="checkbox" name="poin" id="poin"
                                                value="{{ $rule->poin }}">
                                            <input type="text" name="name[]" id="name" value="{{ $rule->id }}"
                                                hidden>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                        <div class="text-end">
                            <button class="btn btn-primary me-5 my-2" type="submit">
                                Tambah Poin
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script>
        $('input:checkbox').change(function() {
            var total = 0;
            $('input:checkbox:checked').each(function() {
                total += isNaN(parseInt($(this).val())) ? 0 : parseInt($(this).val());
            });
            $("#total").val(total);
        });
    </script>
@endsection

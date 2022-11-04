@extends('layouts.main')
@section('content')
    <!-- <div class="container"> -->
        <!-- <div class="row justify-content-center"> -->
            <div class="card">
                <h3 class="card-header mt-2">
                    Pelanggaran yang dilakukan oleh {{ $siswa->nama }}
                </h3>
                <div class="card-body">
                    <!-- <div class="float-right mb-2">
                        <form action="/pelanggaran/tambah/{{ $siswa->nisn }}" class="d-inline-flex">
                            {{-- @if (request('kelas'))
                                <input type="hidden" name="kelas" value="{{ request('kelas') }}">
                            @endif --}}
                            <div class="input-group mb-3">
                                <input type="text" class="form-control" placeholder="Cari peraturan.." name="search"
                                    value="{{ request('search') }}">
                                <button class="btn btn-primary btn-active-secondary" type="submit">Search</button>
                            </div>
                        </form>
                    </div> -->
                    <form action="/pelanggaran/{{ $siswa->id }}" method="post">
                        @csrf
                        @method('put')
                        <input type="text" name="total" id="total" hidden>
                        <input type="text" name="id_user" id="id_user" value="{{ $siswa->user_id }}" hidden>

                        <table class="table" id="table_data_user">
                            <thead>
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
                                        <td scope="row">{{ $rule->id }}</td>
                                        <td>{{ $rule->name }}</td>
                                        <td>{{ $rule->poin }}</td>
                                        <td>
                                            <input type="checkbox" name="poin" id="poin{{ $rule->id }}" value="{{ $rule->poin }}" onmousedown="this.form.rule{{ $rule->id }}.disabled=this.checked">
                                            <input type="text" name="rule[]" id="rule{{ $rule->id }}" value="{{ $rule->id }}" disabled hidden>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                        <div class="text-end">
                            <a href="/daftar-siswa" class="btn btn-secondary btn-rounded">Back</a>
                            <button class="btn btn-primary me-2 my-2" type="submit">
                                Tambah Poin
                            </button>
                        </div>
                    </form>
                </div>
            </div>

        <!-- </div> -->
    <!-- </div> -->
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

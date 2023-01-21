@extends('layouts.main')
@section('title', 'Kurang Poin')
@section('content')
    <div class="card col-md-6 offset-md-3">
        <div class="card-header">
            <h2 class="mt-2">
                Jumlah Poin <b>{{ $siswa->nama }}</b> : {{ $siswa->poin }}
            </h2>
        </div>

        <div class="card-body">
            <form action="/pelanggaran/kurang/{{ $siswa->id }}" method="post">
                @csrf
                @method('put')
                <label for="poin">Poin</label>
                <input type="number" min=0 name="poin"
                    class="form-control form-input-lg @error('poin') is-invalid @enderror">
                @error('poin')
                    <div class="invalid-feedback mb-2">
                        {{ $message }}
                    </div>
                @enderror
                <div class="text-end">
                    <button class="btn btn-primary me-2 my-2 show_confirm" data-toggle="tooltip" title='Delete'
                        type="submit">
                        Kurang Poin
                    </button>
                </div>
            </form>
        </div>
    </div>

@endsection

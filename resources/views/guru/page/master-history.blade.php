@extends('layouts.main')
@section('title', 'Histori Siswa')
@section('content')
    <div class="row justify-content-center">
        <div class="card shadow px-0">
            <div class="card-header">
                <h3 class="fw-bolder mt-2">
                    Histori Siswa {{ $wali_kelas->kelas->nama_kelas }}
                </h3>
            </div>
            <div class="card-body py-0">
                @if ($histories->count())
                    @foreach ($tanggal as $tgl)
                        <b><p class="text-dark mb-1 mt-3 ml-1">{{ $tgl }}</p></b>
                        @foreach ($histories as $history)
                            @if ($history->getAttribute('tanggal') == $tgl)
                                <div class="list-group" style="margin-bottom: 0.75rem">
                                    <div class="border-hover list-group-item  list-group-item-action flex-column align-items-start py-0"
                                        style="background-color: #ffd8ab84; border-radius: 6px;">
                                        <div class="d-flex w-100 mt-1 mb-1 align-items-center" style="justify-content: space-between; flex-wrap: wrap;">
                                            <a href="/guru/histori/{{ $history->siswa->id }}" class="linkind">
                                                <small class="me-1"><b>{{ $history->siswa->nama }}</small></b>
                                            </a>
                                            <a><small>{{ $history->created_at->diffForHumans() }}</small></a>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-10">
                                                <p class="mb-1 h6 text-dark ">{{ $history->rule->nama }}</p>
                                                <div class="text-danger d-inline-flex mb-2">
                                                    <b>+{{ $history->rule->poin }}</b>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endif
                        @endforeach
                    @endforeach
                @else
                    <h5 class="text-secondary text-center py-1 mt-4">Histori tidak ada</h5>
                @endif

            </div>
            <div class="text-end card-footer mt-3">
                <div class="mx-4 text-decoration-none float-right">
                    {{ $histories->links() }}
                </div>
            </div>

        </div>
    </div>
@endsection

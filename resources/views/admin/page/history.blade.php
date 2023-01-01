@extends('layouts.main')
@section('title', 'Histori Siswa')
@section('content')
        <div class="row justify-content-center">
            <div class="card shadow px-0">

                <div class="card-header">

                    <h2 class="fw-bolder mt-2">
                        History @if ($histories->count())
                            {{ $histories[0]->siswa->nama }}
                        @endif
                    </h2>

                </div>
                <div class="card-body py-0">
                    @if ($histories->count())
                        @foreach ($tanggal as $tgl)
                            <p class="text-dark mb-1 mt-3 ml-2">{{ $tgl }}</p>
                            @foreach ($histories as $history)
                                @if ($history->getAttribute('tanggal') == $tgl)
                                    <div class="list-group mb-2">
                                        <a class="list-group-item list-group-item-action flex-column align-items-start py-0"
                                        style="background-color: #f1f1f1;">
                                            
                                            <div class="histori-part row mb-1">
                                                <div class="col-lg-2 row" style="margin-top: .65rem;">
                                                    <small class="px-0" style="height: 20px; width: 84px;">{{ $history->created_at->diffForHumans() }}</small>
                                                </div>
                                                <div class="col-lg-10" style="margin-top: .65rem;">
                                                    <p class="mb-1 h6 text-dark ">{{ $history->rule->name }}</p>
                                                    <div class="text-danger d-inline-flex mb-2">
                                                        +{{ $history->rule->poin }}
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                @endif
                            @endforeach
                        @endforeach
                    @else
                        <h5 class="text-secondary text-center py-1 mt-4">History tidak ada</h5>
                    @endif

                </div>
                <div class="text-end card-footer mt-3">
                    <div class="mx-4 text-decoration-none float-right pagination">
                        {{ $histories->onEachSide(1)->links() }}
                    </div>
                </div>

            </div>
        </div>
        <script>
            $('ul.pagination li').hide().filter(':lt(1), :nth-las-child(1)').show();
        </script>
    @endsection

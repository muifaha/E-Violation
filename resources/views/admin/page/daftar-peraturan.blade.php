@extends('layouts.main')
@section('title', 'Daftar Peraturan')
@section('content')
    <div class="container">
        <div class="row">
            <div class="card shadow my-2 px-0">
                <div class="card-header">
                    <h2 class="fw-bolder mt-2 d-inline-flex">
                        List Peraturan
                    </h2>
                    <div class="dropdown float-right">
                        {{-- <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            Filter Peraturan
                        </button> --}}
                        <ul class="dropdown-menu">
                            {{-- @foreach ($kelas as $item)
                                <li>
                                    <a class="dropdown-item" href="/daftar-siswa?kelas={{ $item->nama_kelas }}"
                                        class="text-decoration-none author">{{ $item->nama_kelas }}</a>
                                </li>
                            @endforeach --}}
                        </ul>
                    </div>
                </div>

                <div class="card-body">
                    <div class="float-right mb-2">
                        {{-- <form action="/daftar-siswa" class="d-inline-flex">
                            @if (request('kelas'))
                                <input type="hidden" name="kelas" value="{{ request('kelas') }}">
                            @endif
                            <div class="input-group mb-3">
                                <input type="text" class="form-control" placeholder="Search" name="search"
                                    value="{{ request('search') }}">
                                <button class="btn btn-primary btn-active-secondary" type="submit">Search</button>
                            </div>
                        </form> --}}
                    </div>
                    <div class="table-responsive">
                        <table class="table" width="100%" cellspacing="0">
                            <thead class="thead-inverse">
                                <tr>
                                    <th>No.</th>
                                    <th>Tipe</th>
                                    <th>Peraturan</th>
                                    <th>Poin</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($rules as $rule)
                                    {{-- @if ($rule->getAttribute('rule_type_id') == 1) --}}
                                    <tr>
                                        <td scope="row">
                                            {{ $loop->iteration }}
                                        </td>
                                        <td>{{ $rule->ruleType->type_name }}</td>
                                        <td>{{ $rule->name }}</td>
                                        <td>{{ $rule->poin }}</td>
                                    </tr>
                                    {{-- @endif --}}
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="card-footer d-inline-flex justify-content-end">
                    {{ $rules->onEachSide(5)->links() }}
                </div>
            </div>
        </div>
    </div>
@endsection

@extends('layouts.app')
@section('title', 'Form Data Siswa')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Data Siswa') }}</div>

                    <div class="card-body">
                        <form method="POST" action="{{ route('siswa') }}">
                            @csrf

                            <div class="row mb-3">
                                <label for="nisn" class="col-md-4 col-form-label text-md-end">{{ __('NISN') }}</label>

                                <div class="col-md-6">
                                    <input id="nisn" type="text"
                                        class="form-control @error('nisn') is-invalid @enderror" name="nisn"
                                        value="{{ Auth::user()->nisn }}" required autocomplete="nisn" readonly>

                                    @error('nisn')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="nama"
                                    class="col-md-4 col-form-label text-md-end">{{ __('Nama Lengkap') }}</label>

                                <div class="col-md-6">
                                    <input id="nama" type="text"
                                        class="form-control @error('nama') is-invalid @enderror" name="nama"
                                        value="{{ old('nama') }}" required autocomplete="nama" placeholder="Masukkan Nama"
                                        autofocus required>

                                    @error('nama')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="ttl"
                                    class="col-md-4 col-form-label text-md-end">{{ __('Tempat Tanggal Lahir') }}</label>
                                <div class="col-md-6">
                                    <div class="input-group">
                                        <input id="ttl" name="ttl" type="text"
                                            class="form-control @error('ttl') is-invalid @enderror"
                                            value="{{ old('ttl') }}" placeholder="Masukkan Tempat Lahir"
                                            autocomplete="ttl" required>

                                        <input type="date" id="date" name="date" class="form-control"
                                            placeholder="dd-mm-yyyy" required>
                                    </div>
                                    @error('ttl')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="jk"
                                    class="col-md-4 col-form-label text-md-end">{{ __('Jenis Kelamin') }}</label>

                                <div class="col-md-6">
                                    <select
                                        class="form-select form-select-md form-select-solid @error('jk') is-invalid @enderror"
                                        name="jk" id="jk" value="{{ old('jk') }}" autocomplete="jk"
                                        required>
                                        <option disabled selected value="">
                                            Pilih Jenis Kelamin</option>
                                        <option value="Laki-laki"
                                            @if (old('jk') == 'Laki-laki') {{ 'selected' }} @endif>
                                            Laki-laki</option>
                                        <option value="Perempuan"
                                            @if (old('jk') == 'Perempuan') {{ 'selected' }} @endif>
                                            Perempuan</option>
                                    </select>
                                    @error('jk')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="agama"
                                    class="col-md-4 col-form-label text-md-end">{{ __('Agama') }}</label>

                                <div class="col-md-6">
                                    <select
                                        class="form-select form-select-md form-select-solid @error('agama') is-invalid @enderror"
                                        name="agama" id="agama" value="{{ old('agama') }}" autocomplete="agama"
                                        required>
                                        <option disabled value="" selected>
                                            Pilih Agama</option>
                                        <option value="Islam"
                                            @if (old('agama') == 'Islam') {{ 'selected' }} @endif>
                                            Islam</option>
                                        <option value="Kristen"
                                            @if (old('agama') == 'Kristen') {{ 'selected' }} @endif>
                                            Kristen</option>
                                        <option value="Katolik"
                                            @if (old('agama') == 'Katolik') {{ 'selected' }} @endif>
                                            Katolik</option>
                                        <option value="Hindu"
                                            @if (old('agama') == 'Hindu') {{ 'selected' }} @endif>
                                            Hindu</option>
                                        <option value="Buddha"
                                            @if (old('agama') == 'Buddha') {{ 'selected' }} @endif>
                                            Buddha</option>
                                        <option value="Konghucu"
                                            @if (old('agama') == 'Konghucu') {{ 'selected' }} @endif>
                                            Konghucu</option>
                                    </select>

                                    @error('agama')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="alamat"
                                    class="col-md-4 col-form-label text-md-end">{{ __('Alamat') }}</label>

                                <div class="col-md-6">
                                    <input id="alamat" type="text"
                                        class="form-control @error('alamat') is-invalid @enderror" name="alamat"
                                        value="{{ old('alamat') }}" required autocomplete="alamat"
                                        placeholder="Masukkan Alamat">

                                    @error('alamat')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="no_telp"
                                    class="col-md-4 col-form-label text-md-end">{{ __('No Telepon') }}</label>

                                <div class="col-md-6">
                                    <input id="no_telp" type="text"
                                        class="form-control @error('no_telp') is-invalid @enderror" name="no_telp"
                                        value="{{ old('no_telp') }}" required autocomplete="no_telp"
                                        placeholder="Masukkan Nomor Telepon">

                                    @error('no_telp')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="kelas"
                                    class="col-md-4 col-form-label text-md-end">{{ __('Kelas') }}</label>
                                <div class="col-md-6">
                                    <select
                                        class="form-select form-select-md form-select-solid @error('kelas') is-invalid @enderror"
                                        name="kelas" id="kelas" value="{{ old('kelas') }}" autocomplete="kelas"
                                        required>
                                        <option disabled value="Pilih" selected>
                                            Pilih kelas</option>
                                        @foreach ($kelas as $item)
                                            <option value="{{ $item->id }}|{{ $item->user_id }}"
                                                @if (old('kelas') == $item->id) {{ 'selected' }} @endif>
                                                {{ $item->nama_kelas }}</option>
                                        @endforeach

                                    </select>
                                    @error('kelas')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="n_ayah"
                                    class="col-md-4 col-form-label text-md-end">{{ __('Nama Ayah') }}</label>

                                <div class="col-md-6">
                                    <input id="n_ayah" type="text"
                                        class="form-control @error('n_ayah') is-invalid @enderror" name="n_ayah"
                                        value="{{ old('n_ayah') }}" required autocomplete="n_ayah"
                                        placeholder="Masukkan Nama Ayah">

                                    @error('n_ayah')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="n_ibu"
                                    class="col-md-4 col-form-label text-md-end">{{ __('Nama Ibu') }}</label>

                                <div class="col-md-6">
                                    <input id="n_ibu" type="text"
                                        class="form-control @error('n_ibu') is-invalid @enderror" name="n_ibu"
                                        value="{{ old('n_ibu') }}" required autocomplete="n_ibu"
                                        placeholder="Masukkan Nama Ibu">

                                    @error('n_ibu')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="alamat_ortu"
                                    class="col-md-4 col-form-label text-md-end">{{ __('Alamat Orang Tua') }}</label>

                                <div class="col-md-6">
                                    <input id="alamat_ortu" type="text"
                                        class="form-control @error('alamat_ortu') is-invalid @enderror"
                                        name="alamat_ortu" value="{{ old('alamat_ortu') }}" required
                                        autocomplete="alamat_ortu" placeholder="Masukkan Alamat Orangtua">

                                    @error('alamat_ortu')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="no_telp_rumah"
                                    class="col-md-4 col-form-label text-md-end">{{ __('No Telepon Rumah') }}</label>

                                <div class="col-md-6">
                                    <input id="no_telp_rumah" type="text"
                                        class="form-control @error('no_telp_rumah') is-invalid @enderror"
                                        name="no_telp_rumah" value="{{ old('no_telp_rumah') }}" required
                                        autocomplete="no_telp_rumah" placeholder="Masukkan Nomer Telepon Rumah">

                                    @error('no_telp_rumah')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="row mb-0">
                                <div class="col-md-8 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('Kirim') }}
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

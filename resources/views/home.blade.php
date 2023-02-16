@extends('layouts.main')
@section('title', 'Dashboard')
@section('content')
    <div class="dashboard">
        <div class="all-card">
            <div class="row">
                {{-- Dashboard Admin --}}
                @if (Auth::user()->role == 1)
                    @include('admin.view_home')
                @endif

                {{-- Dashboard WaliKelas --}}
                @if (auth()->user()->role == 2)
                    @include('guru.page.view_home')
                @endif

                {{-- Dashboard OrangTua --}}
                @if (auth()->user()->role == 3)
                    @include('siswa.view_home')
                    @include('siswa.editsiswa')
                @endif
            </div>
        </div>
    </div>
@endsection
@push('scripts')
    <script>
        $(document).on('click', '.open_modal', function() {
            var url = "/editsiswa";
            var siswa_id = $(this).val();
            $.get(url, function(data) {
                //success data
                const target = "{{ url('editsiswa/:id') }}".replace(':id', data.id);
                $('input#student_id').val(data.id);
                $('input#name').val(data.nama);
                $('input#alamat').val(data.alamat);
                $('input#no_telp').val(data.no_telp);
                $('input#n_ayah').val(data.n_ayah);
                $('input#n_ibu').val(data.n_ibu);
                $('input#no_telp_rumah').val(data.no_telp_rumah);
                $('input#alamat_ortu').val(data.alamat_ortu);
                // $('#editsiswaform').attr('action', target);
                // $('#editsiswaform').attr('action', pass);
                $('#myModal').modal('show');
            });
        });

        function editSiswa(event) {
            var url = $('form#editsiswaform').attr('action');
            $('form#editsiswaform').validate({ // initialize the plugin
                rules: {
                    name: {
                        required: true,
                        maxlength: 255
                    },
                    alamat: {
                        required: true,
                        maxlength: 255,
                    },
                    alamat_ortu: {
                        required: true,
                        maxlength: 255,
                    },
                    no_telp: {
                        number: true,
                        required: true,
                        minlength: 8,
                        maxlength: 15,
                    },
                    n_ayah: {
                        required: true,
                        maxlength: 255,
                    },
                    n_ibu: {
                        required: true,
                        maxlength: 255,
                    },
                    no_telp_rumah: {
                        number: true,
                        required: true,
                        minlength: 5,
                        maxlength: 15,
                    }
                },
                messages: {
                    name: {
                        required: "* Nama harus diisi!",
                        maxlength: "* Nama maksimal 255 karakter!"
                    },
                    alamat: {
                        required: "* Alamat harus diisi!",
                        maxlength: "* Alamat maksimal 255 digit!",
                    },
                    alamat_ortu: {
                        required: "* Alamat Ortu harus diisi!",
                        maxlength: "* Alamat Ortu maksimal 255 digit!",
                    },
                    no_telp: {
                        number: "* Telepon harus berupa angka!",
                        required: "* Telepon harus diisi!",
                        minlength: "* Telepon minimal 8 digit!",
                        maxlength: "* Telepon maksimal 15 digit!",
                    },
                    n_ayah: {
                        required: "* Nama Ayah harus diisi!",
                        maxlength: "* Nama Ayah maksimal 255 digit!",
                    },
                    n_ibu: {
                        required: "* Nama Ibu harus diisi!",
                        maxlength: "* Nama Ibu maksimal 255 digit!",
                    },
                    no_telp_rumah: {
                        number: "* Telepon rumah harus berupa angka!",
                        required: "* Telepon rumah harus diisi!",
                        minlength: "* Telepon rumah minimal 5 digit!",
                        maxlength: "* Telepon rumah maksimal 15 digit!",
                    }

                },
                submitHandler: function(form) {
                    $("#btn-update").attr("disabled", true);

                    let id = $('input#student_id').val();
                    let name = $('input#name').val();
                    let alamat = $('input#alamat').val();
                    let no_telp = $('input#no_telp').val();
                    let n_ayah = $('input#n_ayah').val();
                    let n_ibu = $('input#n_ibu').val();
                    let no_telp_rumah = $('input#no_telp_rumah').val();
                    let alamat_ortu = $('input#alamat_ortu').val();
                    console.log()
                    $.ajax({
                        url: '/updatesiswa/' + id,
                        type: "PUT",
                        data: {
                            _token: $('meta[name=csrf-token]').attr("content"),
                            name,
                            alamat,
                            no_telp,
                            n_ayah,
                            n_ibu,
                            no_telp_rumah,
                            alamat_ortu
                        },
                        success: function(res) {
                            if (res.success) {
                                swal(
                                    'Data berhasil diubah!',
                                    "",
                                    'success'
                                ).then((result) => {
                                    window.location.reload();
                                });
                                console.log(res);
                            } else {
                                console.log(res.errors);
                                $("#btn-update").attr("disabled", false);

                                $.each(res.errors, function(key, val) {

                                    swal({
                                        title: "Data tidak valid!",
                                        icon: "warning",
                                        dangerMode: true,
                                        button: true,
                                    });
                                });
                            }
                        },
                        error: function(jqXHR, textStatus, errorThrown) {

                            $("#btn-update").attr("disabled", false);
                            console.log(JSON.stringify(jqXHR));
                            console.log("AJAX error: " + textStatus + ' : ' + errorThrown);
                            swal({
                                title: "Data tidak valid!",
                                icon: "warning",
                                dangerMode: true,
                                button: true,
                            });
                        }
                    });
                }
            });
        }
    </script>
@endpush

<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-md modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header bg-warning bg-gradient fs-4 fw-bold" style="padding: 15px;">
                <h4 class="modal-title" id="myModalLabel">Edit User</h4>
                <button class="btn btn-md btn-dark text-warning" data-bs-target="#exampleModalToggle2"
                    data-bs-toggle="modal" data-bs-dismiss="modal">Edit Password</button>
            </div>
            <div class="modal-body">
                <form action="" method="post" id="editform">
                    @csrf
                    @method('put')
                    <div class="form-floating">
                        <input type="text" class="form-control" name="nisn" id="nisn" required autofocus>
                        <label for="nisn">NISN</label>
                    </div>
                    <div class="form-floating mt-2">
                        <input type="text" class="form-control" name="name" id="name" required>
                        <label for="name">Nama</label>
                    </div>
                    <div class="form-floating mt-2">
                        <input type="text" class="form-control" name="email" id="email" required>
                        <label for="email">Email</label>
                    </div>

                    <div class="form-floating mt-2">
                        <select class="form-select" id="role" name="role" required>
                            <option selected value="" disabled>Pilih Role</option>
                            <option value="1">Admin</option>
                            <option value="2">Guru</option>
                            <option value="3">Siswa</option>
                        </select>
                        <label for="role">Role</label>
                    </div>

                    <div class="d-flex mt-2 mx-4">
                        <div class="form-check ps-0 mb-0 me-4">
                            <input class="form-check-input" type="radio" name="info" id="info" value="1">
                            <label class="form-check-label info" for="info" style="margin: 2px 0 0 -4px;">
                                Terdaftar
                            </label>
                        </div>
                        <div class="form-check ps-0 mb-0 ms-4">
                            <input class="form-check-input" type="radio" name="info" id="info2" value="0">
                            <label class="form-check-label info2" for="info2" style="margin: 2px 0 0 -4px;">
                                Belum Terdaftar
                            </label>
                        </div>
                    </div>
            </div>
            <div class="modal-footer" style="padding: 12px;">
                <button type="button" class="btn btn-sm btn-secondary" data-bs-dismiss="modal">Tutup</button>
                <button type="submit" class="btn btn-sm btn-warning" id="btn-update">Update</button>
            </div>
            </form>
        </div>
    </div>
</div>
<div class="modal fade" id="exampleModalToggle2" aria-hidden="true" aria-labelledby="exampleModalToggleLabel2"
    tabindex="-1">
    <div class="modal-dialog modal-md modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header bg-danger bg-gradient fs-4 fw-bold text-light" style="padding: 10px 15px;">
                <h5 class="modal-title" id="exampleModalToggleLabel2">Ubah Password</h5>
                {{-- <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button> --}}
            </div>
            <form action="" method="post" id="change_pass_form">
                <div class="modal-body">
                    @csrf
                    @method('put')
                        <label for="password">Password</label>
                        <input type="password" class="form-control" name="password" id="password" required>
                    <text-small class="text-danger">* password minimal 8 karakter</text-small>
                </div>
            <div class="modal-footer" style="padding: 10px 15px;">
                <button class="btn btn-sm btn-secondary" data-bs-target="#myModal" data-bs-toggle="modal" data-bs-dismiss="modal">Kembali</button>
                <button type="submit" class="btn btn-sm btn-success" id="btn-pass">Perbarui</button>
            </div>
        </form>
        </div>
    </div>
</div>

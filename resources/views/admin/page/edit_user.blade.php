<div class="modal fade" id="myModal" tabindex="-1" role="dialog" data-bs-backdrop="static" data-bs-keyboard="false"
    aria-hidden="true">
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
                    <div class="">
                        <label for="nisn">NISN</label>
                        <input minlength=8 type="text" class="form-control" name="nisn" id="nisn" required
                            autofocus>
                    </div>
                    <div class="mt-2">
                        <label for="name">Nama</label>
                        <input type="text" class="form-control" name="name" id="name" required>
                    </div>
                    <div class="mt-2">
                        <label for="email">Email</label>
                        <input type="text" class="form-control" name="email" id="email" required>
                    </div>

                    <div class="mt-2">
                        <label for="role">Role</label>
                        <select class="form-select" id="role" name="role" required>
                            <option selected value="" disabled>Pilih Role</option>
                            <option value="1">Admin</option>
                            <option value="2">Guru</option>
                            <option value="3">Siswa</option>
                        </select>
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
                <button type="submit" class="btn btn-sm btn-warning" id="btn-update"
                    onclick="editUser(event)">Update</button>
            </div>
            </form>
        </div>
    </div>
</div>
<div class="modal fade" id="exampleModalToggle2" data-bs-backdrop="static" data-bs-keyboard="false" aria-hidden="true"
    aria-labelledby="exampleModalToggleLabel2" tabindex="-1">
    <div class="modal-dialog modal-md modal-dialog-centered">
        <div class="modal-content">
            <form action="" method="post" id="change_pass_form">
                <div class="modal-header bg-danger bg-gradient fs-4 fw-bold text-light" style="padding: 10px 15px;">
                    <h5 class="modal-title" id="exampleModalToggleLabel2">Ubah Password</h5>
                </div>
                <div class="modal-body">
                    <div>
                        <label for="password">Password</label>
                        <input minlength=8 type="password" class="form-control" name="password" id="password" required
                            onkeydown="return (event.keyCode!=13);">
                    </div>
                    <div class="mt-2">
                        <label for="password">Confirm Password</label>
                        <input minlength=8 type="password" class="form-control" name="password_confirm"
                            id="password_confirm" required onkeydown="return (event.keyCode!=13);">
                    </div>
                </div>

                <div class="modal-footer" style="padding: 10px 15px;">
                    <button class="btn btn-sm btn-secondary" data-bs-target="#myModal" data-bs-toggle="modal"
                        data-bs-dismiss="modal">Kembali</button>
                    <button type="submit" onclick="editPass(event)" class="btn btn-sm btn-success"
                        id="btn-pass">Perbarui</button>
                </div>
            </form>
        </div>
    </div>
</div>

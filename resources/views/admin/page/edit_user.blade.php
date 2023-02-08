<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header bg-primary fs-4 fw-bold text-light">
                <h4 class="modal-title" id="myModalLabel">Edit Form</h4>
                <button class="btn btn-outline-warning text-light" data-bs-target="#exampleModalToggle2"
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
                        <label for="name">Name</label>
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
                    <div class="px-2">

                        <div class="form-check mt-3">
                            <input class="form-check-input" type="radio" name="info" id="info" value="1">
                            <label class="form-check-label" for="info1">
                                Terdaftar
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="info" id="info2" value="0">
                            <label class="form-check-label" for="info2">
                                Belum Terdaftar
                            </label>
                        </div>
                    </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                <button type="submit" class="btn btn-primary" id="btn-update">Update</button>
            </div>
            </form>
        </div>
    </div>
</div>
<div class="modal fade" id="exampleModalToggle2" aria-hidden="true" aria-labelledby="exampleModalToggleLabel2"
    tabindex="-1">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header bg-primary fs-4 fw-bold text-light">
                <h5 class="modal-title" id="exampleModalToggleLabel2">Ubah Password</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="" method="post" id="change_pass_form">
                    @csrf
                    @method('put')
                    <div class="form-floating mt-2">
                        <input type="password" class="form-control" name="password" id="password" required>
                        <label for="password">Password</label>
                    </div>
                    <text-small>Password Harus minimal 8 karakter</text-small>
            </div>
            <div class="modal-footer">
                <button class="btn btn-secondary" data-bs-target="#myModal" data-bs-toggle="modal"
                    data-bs-dismiss="modal">Kembali</button>

                <button type="submit" class="btn btn-primary" id="btn-pass">Update</button>
                </form>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="add_doctor" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Add Doctors</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="mb-4">
                    <label for="usernameValidate">Nama</label>
                    <input type="text" class="form-control" id="usernameValidate" required>
                </div>

                <div class="mb-4">
                    <label for="gaji">Gaji</label>
                    <input type="number" class="form-control" id="gaji" name="gaji" required>
                </div>

                <div class="mb-4">
                    <label for="bidang">Bidang</label>
                    <select class="form-control" id="bidang" name="bidang" required>
                        <option value="">Pilih Bidang</option>
                        <option value="Dokter_Umum">Dokter Umum</option>
                        <option value="Dokter_Anak">Dokter Anak</option>
                        <option value="Dokter_Kandungan">Dokter Kandungan</option>
                        <option value="Dokter_Gigi">Dokter Gigi</option>
                    </select>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="add_nurse" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Add Nurses</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="mb-4">
                    <label for="usernameValidate">Nama</label>
                    <input type="text" class="form-control" id="usernameValidate" required>
                </div>

                <div class="mb-4">
                    <label for="gaji">Gaji</label>
                    <input type="number" class="form-control" id="gaji" name="gaji" required>
                </div>

                <div class="mb-4">
                    <label for="Jenis_Kelamin">Jenis Kelamin</label>
                    <select class="form-control" id="Jenis_Kelamin" name="Jenis_Kelamin" required>
                        <option value="">Jenis_kelamin</option>
                        <option value="Laki_laki">Laki-Laki</option>
                        <option value="Perempuan">Perempuan</option>
                    </select>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
            </div>
        </div>
    </div>
</div>

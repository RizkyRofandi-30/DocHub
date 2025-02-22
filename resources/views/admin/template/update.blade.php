<div class="modal fade" id="update" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Update {{ $title }}</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="mb-4">
                    <label for="nama">Nama</label>
                    <input type="text" class="form-control" id="nama" name="nama" value="{{ $user['name'] }}"
                        required>
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

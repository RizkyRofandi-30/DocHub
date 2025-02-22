<div class="row d-flex justify-content-center align-items-center">
    <div class="col-6 mt-4 ">
        <div class="card border-0 shadow components-section">
            <div class="card-body">
                <div class="d-flex justify-content-between align-items-center">
                    <h2 class="fs-5 fw-bold mb-0">Tambah Dokter</h2>
                </div>
                <hr class="mt-2">
                <!-- Form -->
                <form action="{{ route('medic.storeDoc') }}" method="POST">
                    @csrf
                    <div class="row ">
                        <div class="mb-4">
                            <label for="name">Nama</label>
                            <input type="text" class="form-control" id="name" name="name" required>
                        </div>

                        <div class="mb-4">
                            <label for="salary">Gaji</label>
                            <input type="number" class="form-control" id="salary" name="salary" required>
                        </div>

                        <div class="mb-4">
                            <label for="specialist">Bidang</label>
                            <select class="form-control" id="specialist" name="specialist" required>
                                <option value="Dokter Umum">Dokter Umum</option>
                                <option value="Dokter Anak">Dokter Anak</option>
                                <option value="Dokter Kandungan">Dokter Kandungan</option>
                                <option value="Dokter Gigi">Dokter Gigi</option>
                            </select>
                        </div>
                    </div>
                    <hr class="mt-4">
                    <div class="col text-end">
                        <button class="btn btn-success" type="submit">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

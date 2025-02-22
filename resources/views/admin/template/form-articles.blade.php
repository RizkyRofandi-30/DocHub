<div class="row">
    <div class="col-12 mt-4">
        <div class="card border-0 shadow components-section">
            <div class="card-body">
                <div class="d-flex justify-content-between align-items-center">
                    <h2 class="fs-5 fw-bold mb-0">Buat Artikel</h2>
                </div>
                <hr class="mt-2">
                <!-- Form -->
                <form action="{{ route('articles.store') }}" method="POST">
                    @csrf
                    <div class="row ">
                        <div class="col-lg-6 col-sm-6">
                            <div class="mb-4">
                                <label for="title">Judul Artikel</label>
                                <input type="text" class="form-control" id="title" name="title" required>
                            </div>
                            <div class="mb-4">
                                <label for="author">Penulis</label>
                                <input type="text" class="form-control" id="author" name="author" required>
                            </div>
                            <div class="mb-4">
                                <label for="category">Kategori</label>
                                <input type="text" class="form-control" id="category" name="category" required>
                            </div>
                        </div>
                        <div class="col-lg-6 col-sm-6">
                            <div class="my-5">
                                <label for="body">Isi Artikel </label>
                                <textarea class="form-control" placeholder="Enter your message..." id="body" name="body" rows="4"></textarea>
                            </div>
                        </div>
                        <hr class="mt-4">
                        <div class="col text-end">
                            <button class="btn btn-success" type="submit">Submit</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

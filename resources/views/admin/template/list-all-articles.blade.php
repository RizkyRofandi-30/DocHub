<div class="col-12 d-flex justify-content-center align-items-center" style="height: 60vh;">
    <!-- Adds left margin on large screens -->
    <div class="card border-0 shadow" style="width: 1000px; max-width: 1200px;"> <!-- Adjust width here -->
        <div class="card-header">
            <div class="row align-items-center">
                <div class="col">
                    <h2 class="fs-5 fw-bold mb-0">{{ $title }}</h2>
                </div>
                <div class="col text-end">
                    <a href="/admin" class="btn btn-sm btn-primary">Back To Dashboard</a>
                </div>
            </div>
        </div>
        <div class="table-responsive">
            <table class="table align-items-center table-flush">
                <thead class="thead-light">
                    <tr>
                        <th class="border-bottom" scope="col">Judul Artikel</th>
                        <th class="border-bottom" scope="col">Penulis</th>
                        <th class="border-bottom" scope="col">Kategori</th>
                        <th class="border-bottom text-center" scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($articles as $article)
                        <tr>
                            <th class="text-gray-900" scope="row">
                                {{ Str::limit($article['title'], 20) }}
                            </th>
                            <td class="fw-bolder text-gray-500">
                                {{ Str::limit($article['author'], 20) }}
                            </td>
                            <td class="fw-bolder text-gray-500">
                                {{ Str::limit($article['category'], 20) }}
                            </td>
                            <td class="text-center">
                                <a href="#" class="btn btn-sm btn-danger">Delete</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

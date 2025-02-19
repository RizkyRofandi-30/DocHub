<div class="col-12 col-xl-6 mb-4">
    <div class="card border-0 shadow">
        <div class="card-header border-bottom d-flex align-items-center justify-content-between">
            <h2 class="fs-5 fw-bold mb-0">{{ $title }}</h2>
            <a href="#" class="btn btn-sm btn-primary">See all</a>
        </div>
        <div class="card-body">
            <ul class="list-group list-group-flush list my--3">
                @foreach ($users as $user)
                    <li class="list-group-item px-0">
                        <div class="row align-items-center">
                            <div class="col-auto">
                                <!-- Avatar -->
                                <a href="#" class="avatar">
                                    <img class="rounded" alt="Image placeholder" src="{{ asset($user['image']) }}">
                                </a>
                            </div>
                            <div class="col-auto ms--2">
                                <h4 class="h6 mb-0">
                                    <a href="#">{{ $user['name'] }}</a>
                                </h4>
                                <div class="d-flex align-items-center">
                                    <div class="{{ $user['status_class'] }} dot rounded-circle me-1"></div>
                                    <small>{{ $user['status'] }}</small>
                                </div>
                            </div>
                            <div class="col text-end">
                                <a href="#" class="btn btn-sm btn-secondary d-inline-flex align-items-center">
                                    <svg class="icon icon-xxs me-2" fill="currentColor" viewBox="0 0 20 20"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd"
                                            d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z"
                                            clip-rule="evenodd"></path>
                                    </svg>
                                    Update
                                </a>
                            </div>
                        </div>
                    </li>
                @endforeach
            </ul>
        </div>
    </div>
</div>

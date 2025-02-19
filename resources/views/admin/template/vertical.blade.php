@foreach ($icons as $icon)
    <div class="card border-0 shadow mb-2 pt-1 pb-1">
        <div class="card-body">
            <div class="row d-block d-xl-flex align-items-center">
                <div
                    class="col-12 col-xl-5 text-xl-center mb-3 mb-xl-0 d-flex align-items-center justify-content-xl-center">
                    <div class="icon-shape {{ $icon['color'] }} rounded me-4 me-sm-0">
                        {!! $icon['svg'] !!}
                    </div>
                </div>
                <div class="col-12 col-xl-7 px-xl-0">
                    <div class="d-none d-sm-block">
                        <h2 class="h6 text-gray-400 mb-0">{{ $icon['title'] }}</h2>
                        <h3 class="fw-extrabold mb-2">{{ $icon['total'] }}</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endforeach

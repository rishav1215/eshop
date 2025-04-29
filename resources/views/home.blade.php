@extends("parent")

@section("title", "Homepage")

@section('content')
<!-- Banner Section -->
<div class="container-fluid p-0">
    <img src="{{ asset('images/banner.png') }}" class="img-fluid w-100" style="max-height: 500px; object-fit: cover;" alt="Banner">
</div>

<!-- Main Content -->
<div class="container mt-5">
    <div class="row">

        <!-- Category Sidebar -->
        <div class="col-md-3 mb-4">
            <div class="list-group shadow-sm">
                <a href="#" class="list-group-item list-group-item-action active">
                    Categories
                </a>
                @foreach ($categories as $category)
                <a href="#" class="list-group-item list-group-item-action d-flex justify-content-between align-items-center">
                    {{ $category->cat_title }}
                    @php $count = $category->products->count(); @endphp
                    @if($count > 0)
                        <span class="badge bg-primary rounded-pill">{{ $count > 99 ? '99+' : $count }}</span>
                    @endif
                </a>
                @endforeach
            </div>
        </div>

        <!-- Products-->
        <div class="col-md-9">
            <div class="row">
                @foreach ($products as $item)
                <div class="col-md-4 col-sm-6 mb-4">
                    <div class="card h-100 shadow-sm border-2">
                        <img src="{{ $item->image }}" alt="{{ $item->title }}" class="card-img-top" style="height: 200px; object-fit: cover;">
                        <div class="card-body">
                            <h5 class="card-title mb-1">{{ $item->title }}</h5>
                            <p class="mb-0">
                                <span class="text-danger fw-bold">{{ $item->discount_price }}</span>
                                <small class="text-muted text-decoration-line-through">{{ $item->price }}</small>
                            </p>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>

            <!-- Pagination -->
            <div class="d-flex justify-content-center">
                {{ $products->links() }}
            </div>
        </div>
    </div>
</div>
@endsection

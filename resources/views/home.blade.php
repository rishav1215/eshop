@extends("parent")

@section("title", "homepage")

@section('content')

<!-- Banner Image -->
<div class="mb-4">
    <img src="https://picsum.photos/1000/200" alt="" class="img-fluid w-100">
</div>

<!-- Product Grid -->
<div class="container py-4">
    <div class="row g-4">
        @foreach ($products as $item)
        <div class="col-12 col-sm-6 col-md-4 col-lg-3 col-xl-2">
            <div class="card h-100 shadow-sm border-0">
                <img src="{{ $item->image }}" class="card-img-top" alt="Product Image" style="height: 180px; object-fit: cover;">
                <div class="card-body d-flex flex-column">
                    <h5 class="card-title text-dark">{{ $item->title }}</h5>
                    <p class="card-subtitle text-muted mb-2">Category Name</p>
                    <div class="mt-auto">
                        <div class="d-flex align-items-center mb-3">
                            <span class="fw-bold text-success me-2">{{ $item->price }}</span>
                            <span class="text-muted text-decoration-line-through small">{{ $item->discount_price }}</span>
                        </div>
                        <button class="btn btn-primary w-100">Add to Cart</button>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>

    <!-- Pagination -->
    <div class="mt-4">
        {{ $products->links() }}
    </div>
</div>

@endsection

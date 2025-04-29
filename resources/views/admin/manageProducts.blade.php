@extends("admin.adminparent")

@section('title', 'Manage Products')

@section("content")
<div class="container mt-5">
    <!-- Page Header -->
    <div class="row mb-4">
        <div class="col-12 d-flex justify-content-between align-items-center">
            <h2 class="fw-bold">Manage Products</h2>
            <a href="{{ route('admin.insertProduct') }}" class="btn btn-success">
                <i class="bi bi-plus-circle me-1"></i> Insert Product
            </a>
        </div>
    </div>

    <!-- Products Table -->
    <div class="row">
        <div class="col-12">
            <div class="table-responsive shadow-sm">
                <table class="table table-bordered table-hover align-middle text-center">
                    <thead class="table-dark">
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Image</th>
                            <th scope="col">Title</th>
                            <th scope="col">Brand</th>
                            <th scope="col">Price</th>
                            <th scope="col">Category</th>
                            <th scope="col">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($products as $item)
                        <tr>
                            <td>{{ $item->id }}</td>
                            <td>
                                <img src="{{ $item->image }}" alt="{{ $item->title }}" class="img-thumbnail" style="width: 70px; height: auto;">
                            </td>
                            <td>{{ $item->title }}</td>
                            <td>{{ $item->brand }}</td>
                            <td>
                                <span class="text-danger fw-bold">${{ $item->discount_price }}</span><br>
                                <small class="text-muted text-decoration-line-through">${{ $item->price }}</small>
                            </td>
                            <td>{{ $item->category->cat_title }}</td>
                            <td>
                                <div class="btn-group" role="group">
                                    <a href="#" class="btn btn-outline-success btn-sm">
                                        <i class="bi bi-pencil-square"></i> Edit
                                    </a>
                                    <a href="#" class="btn btn-outline-primary btn-sm">
                                        <i class="bi bi-eye"></i> View
                                    </a>
                                    <a href="#" class="btn btn-outline-danger btn-sm" onclick="return confirm('Are you sure?')">
                                        <i class="bi bi-x-circle"></i> Delete
                                    </a>
                                </div>
                            </td>
                        </tr>
                        @empty
                        <tr>
                            <td colspan="7" class="text-center">No products available.</td>
                        </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection

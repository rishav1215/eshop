@extends('admin.adminpannel')

@section('title', 'Dashboard')

@section('content')
<div class="container py-5 bg-light">
    <h2 class="mb-4 fw-bold text-dark">Admin Dashboard</h2>
    <div class="row g-4">
        <!-- Card: Manage Products -->
        <div class="col-md-6 col-xl-3">
            <div class="card border-0 shadow-sm h-100">
                <div class="card-body text-center">
                    <i class="bi bi-box-seam fs-1 text-primary mb-3"></i>
                    <h5 class="card-title fw-semibold">Manage Products</h5>
                    <div class="d-grid gap-2 mt-3">
                        <a href="#" class="btn btn-outline-primary">Insert</a>
                        <a href="#" class="btn btn-primary">Manage</a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Card: Manage Users -->
        <div class="col-md-6 col-xl-3">
            <div class="card border-0 shadow-sm h-100">
                <div class="card-body text-center">
                    <i class="bi bi-people-fill fs-1 text-success mb-3"></i>
                    <h5 class="card-title fw-semibold">Manage Users</h5>
                    <div class="d-grid gap-2 mt-3">
                        <a href="#" class="btn btn-outline-success">Insert</a>
                        <a href="#" class="btn btn-success">Manage</a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Card: Manage Category -->
        <div class="col-md-6 col-xl-3">
            <div class="card border-0 shadow-sm h-100">
                <div class="card-body text-center">
                    <i class="bi bi-tags-fill fs-1 text-warning mb-3"></i>
                    <h5 class="card-title fw-semibold">Manage Category</h5>
                    <div class="d-grid gap-2 mt-3">
                        <a href="{{ route('admin.manageCategory') }}" class="btn btn-outline-warning">Insert</a>
                        <a href="{{ route('admin.manageCategory') }}" class="btn btn-warning text-white">Manage</a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Card: Manage Orders -->
        <div class="col-md-6 col-xl-3">
            <div class="card border-0 shadow-sm h-100">
                <div class="card-body text-center">
                    <i class="bi bi-cart-check-fill fs-1 text-danger mb-3"></i>
                    <h5 class="card-title fw-semibold">Manage Orders</h5>
                    <div class="d-grid gap-2 mt-3">
                        <a href="#" class="btn btn-outline-danger">Insert</a>
                        <a href="#" class="btn btn-danger">Manage</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

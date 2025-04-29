@extends('admin.adminparent')

@section('title', 'Manage Category')

@section('content')
<div class="container-fluid py-4 bg-light">
    <div class="row g-4">
        <!-- Table Section -->
        <div class="col-md-8">
            <div class="table-responsive bg-white rounded shadow-sm p-3">
                <table class="table table-bordered table-hover align-middle">
                    <thead class="table-light">
                        <tr>
                            <th>ID</th>
                            <th>Category Title</th>
                            <th>Description</th>
                            <th>Parent</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($categories as $category)
                        <tr>
                            <td>{{ $category->id }}</td>
                            <td>{{ $category->cat_title }}</td>
                            <td class="text-truncate" style="max-width: 200px;">
                                {{ substr($category->cat_description, 0, 60) }}...
                            </td>
                            <td>{{ $category->parent ? $category->parent->cat_title : '—' }}</td>
                            <td>
                                <a href="#" class="btn btn-sm btn-outline-primary">Edit</a>
                                <form action="#" method="POST" class="d-inline">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-sm btn-outline-danger">Delete</button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                {{ $categories->links() }}
            </div>
        </div>

        <!-- Form Section -->
        <div class="col-md-4">
            <div class="bg-white rounded shadow-sm p-4">
                <form method="POST" action="{{ route('admin.createCategory') }}">
                    @csrf

                    <!-- Category Title -->
                    <div class="mb-3">
                        <label for="cat_title" class="form-label">Category Title</label>
                        <input type="text" name="cat_title" id="cat_title" value="{{ old('cat_title') }}"
                            class="form-control @error('cat_title') is-invalid @enderror">
                        @error('cat_title')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <!-- Category Description -->
                    <div class="mb-3">
                        <label for="cat_description" class="form-label">Category Description</label>
                        <textarea name="cat_description" id="cat_description" rows="4"
                            class="form-control @error('cat_description') is-invalid @enderror">{{ old('cat_description') }}</textarea>
                        @error('cat_description')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <!-- Parent Category -->
                    <div class="mb-4">
                        <label for="category_id" class="form-label">Parent Category</label>
                        <select name="category_id" id="category_id" class="form-select">
                            <option value="">Select Parent Category</option>
                            @foreach ($categories as $category)
                                <option value="{{ $category->id }}">{{ $category->cat_title }}</option>
                            @endforeach
                        </select>
                    </div>

                    <!-- Submit Button -->
                    <div class="d-grid">
                        <button type="submit" class="btn btn-success">Create Category</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection

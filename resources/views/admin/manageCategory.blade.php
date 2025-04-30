@extends('admin.adminparent')

@section('title', 'Manage Category')

@section('content')
<div class="container-fluid py-4 bg-light">
    <div class="row g-4">
        <!-- Table Section -->
        <div class="col-md-8">
        @session("msg")
            <div class="alert alert-danger alert-dismissible fade show">
               <p class="small text-danger">{{ session("msg") }}</p> 
               <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="close"></button>
                
            </div>
            @endsession
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

                            <!-- Button trigger modal -->


<!-- Modal -->
<!-- Edit Category Modal -->
<div class="modal fade" id="editmodal{{ $category->id }}" tabindex="-1" aria-labelledby="editmodal{{ $category->id }}" aria-hidden="true">
  <div class="modal-dialog modal-lg"> <!-- Larger modal for better form space -->
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="editmodal{{ $category->id }}">Edit {{ $category->cat_title . "`s . Record" }} </h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>

      <form method="POST" action="{{ route('admin.updateCategory', $category->id) }}">
        @csrf
        @method("put")
        <div class="modal-body">

          <div class="mb-3">
            <label for="cat_title" class="form-label">Category Title</label>
            <input type="text" name="cat_title" id="cat_title" value="{{ $category->cat_title }}"
              class="form-control @error('cat_title') is-invalid @enderror" placeholder="Enter category title">
            @error('cat_title')
              <div class="invalid-feedback">{{ $message }}</div>
            @enderror
          </div>

          <div class="mb-3">
            <label for="cat_description" class="form-label">Category Description</label>
            <textarea name="cat_description" id="cat_description" rows="3"
              class="form-control @error('cat_description') is-invalid @enderror" placeholder="Enter description">{{ $category->cat_description}}</textarea>
            @error('cat_description')
              <div class="invalid-feedback">{{ $message }}</div>
            @enderror
          </div>

          <div class="mb-3">
            <label for="category_id" class="form-label">Parent Category</label>
            <select name="category_id" id="category_id" class="form-select">
              <option value="{{ $category->category_id }}">Selected:{{ $category->cat_title}}</option>
              @foreach ($parent_categories as $parentCategory)
                <option value="{{ $category->id }}">{{ $parentCategory->cat_title }}</option>
              @endforeach
            </select>
          </div>

        </div>

        <div class="modal-footer">
          <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">Cancel</button>
          <button type="submit" class="btn btn-primary">Save Category</button>
        </div>
      </form>

    </div>
  </div>
</div>


                        <tr>
                            <td>{{ $category->id }}</td>
                            <td>{{ $category->cat_title }}</td>
                            <td class="text-truncate" style="max-width: 200px;">
                                {{ substr($category->cat_description, 0, 60) }}...
                            </td>
                            <td>{{ $category->parent ? $category->parent->cat_title : '—' }}</td>
                            <td>
                                <a href="#editmodal{{ $category->id }}" class="btn btn-sm btn-outline-primary" data-bs-toggle="modal">Edit</a>
                                <form action="{{ route("admin.deleteCategory", $category->id) }}" method="POST" class="d-inline">
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

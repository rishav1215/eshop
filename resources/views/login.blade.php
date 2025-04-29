@extends("parent")

@section("title", "Login Page")

@section('content')
<div class="container d-flex justify-content-center align-items-center" style="min-height: 80vh;">
    <div class="col-md-6 col-lg-4">
        <div class="card shadow-sm border-0">
            <div class="card-header bg-dark text-white text-center">
                <h5 class="mb-0">🔐 Login to Your Account</h5>
            </div>
            <div class="card-body p-4">
                <form action="" method="post">
                    @csrf <!-- Always include CSRF token for security -->
                    
                    <div class="mb-3">
                        <label for="email" class="form-label">Email address</label>
                        <input 
                            type="email" 
                            name="email" 
                            id="email" 
                            class="form-control" 
                            placeholder="e.g. abc@example.com" 
                            required>
                    </div>

                    <div class="mb-3">
                        <label for="password" class="form-label">Password</label>
                        <input 
                            type="password" 
                            name="password" 
                            id="password" 
                            class="form-control" 
                            placeholder="********" 
                            required>
                    </div>

                    <div class="d-grid">
                        <button type="submit" class="btn btn-dark">
                            <i class="bi bi-box-arrow-in-right me-1"></i> Login
                        </button>
                    </div>
                </form>
            </div>
            <div class="card-footer text-center small">
                Don't have an account? <a href="#">Register here</a>
            </div>
        </div>
    </div>
</div>
@endsection

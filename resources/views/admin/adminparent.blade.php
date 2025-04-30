<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin || @yield("title") - {{ env("APP_NAME") }}</title>
    
    <!-- Bootstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap Icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
    <style>
        .navbar-custom {
            background-color: #343a40;
            height:50px;
        }
        .navbar-custom .nav-link {
            color: #fff; 
        }
        
        .navbar-custom .navbar-brand {
            font-size: 1.75rem;
            font-weight: bold;
            color: #fff;
            align-items: center;
            justify-content: center;
            display: flex;
            
        }
        
        .bg-info-custom {
            background-color: #17a2b8; 
        }
        
    </style>
</head>
<body>

<!-- Navbar Section -->
<div class="navbar navbar-expand-lgg navbar-custom">
    <div class="container mb-5">
        <!-- Logo / App Name -->
        <a class="navbar-brand" href="/">{{ env("APP_NAME") }}</a>
        <a href="" class="btn btn-success">Logout</a>

        
    </div>
</div>

<!-- Main Navigation Section -->
<nav class="navbar navbar-expand-lg navbar-light bg-info-custom">
    <div class="container">
        <div class="row d-flex w-100">
            <ul class="navbar-nav w-100">
                <li class="nav-item">
                    <a class="nav-link text-white" href="{{ route("admin.dashboard") }}">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="{{ route("admin.manageProduct") }}">Products</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="{{ route("admin.manageCategory") }}">Category</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="">Users</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="">Orders</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<!-- Content Section -->
<div class="container mt-4">
    @section("content")
    @show
</div>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"></script>

</body>
</html>

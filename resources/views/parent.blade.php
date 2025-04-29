<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>@yield("title"){{ env("APP_NAME") }}</title>
  <!-- Bootstrap 5 CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
  <div class="container-fluid bg-info text-white py-3">
    <div class="row align-items-center justify-content-between px-3">
      <!-- Logo / App Name -->
      <div class="col-12 col-md-auto mb-3 mb-md-0">
        <h1 class="h4 fw-bold m-0">{{ env("APP_NAME") }}</h1>
      </div>

      <!-- Search Bar -->
      <div class="col-12 col-md-auto mb-3 mb-md-0">
        <form action="" class="d-flex">
          <input class="text-white"
            type="search"
            placeholder="Search books..."
            class="form-control me-2 bg-dark text-white border-secondary"
          />
          <input
            type="submit"
            value="Go"
            class="btn btn-teal text-white"
            style="background-color: #14b8a6;"
          />
        </form>
      </div>

      <!-- Navigation Links -->
      <div class="col-12 col-md-auto">
        <ul class="nav justify-content-center justify-content-md-end">
          <li class="nav-item">
            <a href="{{ route('homepage') }}" class="nav-link text-white px-2">Home</a>
          </li>
          <li class="nav-item">
            <a href="{{ route('login') }}" class="nav-link text-white px-2">Login</a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link text-white px-2">Register</a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link text-white px-2">Cart</a>
          </li>
        </ul>
      </div>
    </div>
  </div>

  @section("content")
  @show

  <!-- Bootstrap 5 JS Bundle -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

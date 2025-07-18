<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <title> @yield('title')</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    html, body {
      height: 100%;
      margin: 0;
    }
    main {
      flex: 1;
    }
    .full-height {
      height: 100%;
    }
  </style>
</head>
<body class="d-flex flex-column">
  
  <header class="bg-primary text-white text-center py-2">
    <h4 class="mb-0">Header</h4>
  </header>


  <main class="container-fluid d-flex flex-grow-1">
    <div class="row flex-grow-1 w-100">

      <aside class="col-md-3 bg-secondary text-white text-center py-4 full-height">
      <nav class="nav flex-column">
        <a class="nav-link text-white" href="/home">Home</a>
        <a class="nav-link text-white" href="/about">About</a>
        <a class="nav-link text-white" href="/contact">Contacts</a>
        <a class="nav-link text-white" href="/photo">Photos</a>
        <a class="nav-link text-white" href="/emplist">Employees</a>
        <a class="nav-link text-white" href="/form">Form</a>

      </nav>
      </aside>

      <section class="col-md-9 bg-light text-dark text-center py-4 full-height">
      @yield('content')
      </section>
    </div>
  </main>

  <footer class="bg-primary text-white text-center py-2">
    <small>&copy; 2025 Your Company</small>
  </footer>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
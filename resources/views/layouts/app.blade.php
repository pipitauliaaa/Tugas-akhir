<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Vortex Digital Agency')</title>
    <!-- Bootstrap CSS Lokal -->
    <link rel="stylesheet" href="{{ asset('bootstrap-5.3.8-dist/css/bootstrap.min.css') }}">
     <script src="{{ asset('bootstrap-5.3.8-dist/js/bootstrap.bundle.min.js') }}"></script>
    <style>
        body { background-color: #f8f9fa; font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; }
        .hero-section { background: linear-gradient(135deg, #0d6efd, #6610f2); color: white; padding: 80px 0; }
    </style>
</head>
<body class="d-flex flex-column min-vh-100">
    @include('partials.header')
    <main class="flex-fill py-4">
        @yield('content')
    </main>
    @include('partials.footer')
</body>
</html>
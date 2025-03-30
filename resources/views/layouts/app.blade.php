<!DOCTYPE html>
<html lang="uz">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Laravel App')</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>
<body>
    <nav class="navbar navbar-dark bg-dark p-3">
        <a class="navbar-brand" href="{{ route('products.index') }}">Mahsulotlar</a>
    </nav>
a
    <div class="container mt-4">
        @yield('content')
    </div>

    <footer class="text-center mt-4 p-3 bg-light">
        <p>&copy; {{ date('Y') }} Laravel App</p>
    </footer>
</body>
</html>

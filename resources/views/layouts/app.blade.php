<!DOCTYPE html>
<html>
<head>
    <title>My CMS Website</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>
<body>
    <nav class="navbar navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="/">My Blog</a>
        </div>
    </nav>

    <div class="container mt-4">
        @yield('content')
    </div>

    <footer class="text-center mt-5 py-3 border-top">
        <p>&copy; 2026 My Laravel Blog</p>
    </footer>
</body>
</html>
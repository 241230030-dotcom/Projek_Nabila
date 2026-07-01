<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>@yield('title')</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            background: #f4f4f4;
            font-family: Arial, sans-serif;
        }

        .navbar {
            background: white;
            border-bottom: 1px solid #ddd;
        }

        .logo {
            color: green;
            font-weight: bold;
            text-decoration: none;
        }

        footer {
            background: #001a57;
            color: white;
            padding: 20px;
            margin-top: 40px;
        }
    </style>
</head>

<body>

<nav class="navbar px-3 py-2">
    <a href="/" class="logo">Donasiku</a>

    <div class="mx-auto">
        <a href="/" class="mx-2 text-dark text-decoration-none">Home</a>
        <a href="/feeds" class="mx-2 text-dark text-decoration-none">Feeds</a>
        <a href="/campaign" class="mx-2 text-dark text-decoration-none">Campaign</a>
        <a href="/profil" class="mx-2 text-dark text-decoration-none">Profil</a>
    </div>
</nav>

<div class="container py-4">
    @yield('content')
</div>

<footer class="text-center">
    <h5>Donasiku</h5>
    <small>2026 - All Rights Reserved</small>
</footer>

</body>
</html>
{{-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home Page</title>
</head>
<body>
    <h1>@yield('title')</h1>
    <p><a href="{{ route('home') }}">Home</a></p>
    <p><a href="{{ route('about') }}">About Us</a></p>
    <p><a href="{{ route('contact') }}">Contact Us</a></p>
    <hr>
    @yield('content')
    <hr>
</body>
</html> --}}
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        .wrapper {
            display: flex;
        }
        .sidebar {
            width: 250px;
            height: 100vh;
            background: #343a40;
            color: white;
            position: fixed;
            padding-top: 20px;
            transition: all 0.3s ease;
        }
        .sidebar a {
            color: white;
            padding: 10px;
            display: block;
            text-decoration: none;
        }
        .sidebar a:hover {
            background: #495057;
        }
        .sidebar .active {
            background: #007bff;
        }
        .sidebar.hidden {
            margin-left: -250px;
        }
        .content {
            margin-left: 250px;
            padding: 20px;
            transition: all 0.3s ease;
            width: 100%;
        }
        .content.full {
            margin-left: 0;
        }
    </style>
</head>
<body>
    @include('layouts.navbar')

    <div class="wrapper">
        @include('layouts.sidebar')

        <div class="content" id="main-content">
            @yield('content')
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Custom Script -->
    <script>
        document.getElementById("sidebarToggle").addEventListener("click", function () {
            document.getElementById("sidebar").classList.toggle("hidden");
            document.getElementById("main-content").classList.toggle("full");
        });
    </script>
</body>
</html>

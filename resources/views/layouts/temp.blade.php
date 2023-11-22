<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/app.css') }}">
    {{-- <script src="/app.js"></script> --}}
    <title>@yield('title') PAGE</title>
</head>
<body>
    <header>
        <nav>
            <ul>
                <li><a href="/blogs">Blog</a></li>
                {{-- <li><a href="/about">About</a></li> --}}
                <li><a href="/staff">Staff</a></li>
                <li><a href="/location">Location</a></li>
                <li><a href="/login">Login</a></li>
                <li><a href="/register">Register</a></li>
            </ul>
        </nav>
    </header>
    <main>
        @yield('content')
    </main>  
</body>
</html>
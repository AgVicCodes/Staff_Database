<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    {{-- <link rel="stylesheet" href="{{ app }}"> !not working --}}
    <style>
        body {
            background-color: #fcfcfc;
            color: #353535;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }
        
        ul li a {
            text-decoration: none;
            color: #252525;
        }

        ul li {
            display: inline;
            text-transform: uppercase;
            font-family: 'Candara';
            margin-left: 12.5px;
            margin-right: 12.5px;
        }

        ul li:hover {
            font-weight: bold;
        }

        nav ul {
            margin: 20px !important;
            padding: 0px !important;
            /* border: 3px dashed #565656; */
        }

        nav {
            /* position: relative;
            left: 100%;
            right: 100%;
            float: left; */
            display: flex;
            justify-content: center;
            /* margin: 100px; */
            /* border: 10px dashed #cdcddc; */

        }

        header {
            /* margin: 0;
            padding: 0; */
        }

        
    </style>
</head>
<body>
    <header>
        <nav>
            <ul>
                <li><a href="/blog">Blog</a></li>
                <li><a href="/about">About</a></li>
                <li><a href="/staff">Staff</a></li>
                <li><a href="/location">Location</a></li>
                <li><a href="/login">Login</a></li>
                <li><a href="/register">Register</a></li>
            </ul>
        </nav>
    </header>
    Welcome to ACUMEN
</body>
</html>
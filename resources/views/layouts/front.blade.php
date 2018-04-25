<!DOCTYPE html>
<html>
<head>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet" type="text/css">
</head>
<body>

    <nav>
        <ul>
            <li><a href="{{ url('category/index') }}">Categories</a></li>
        </ul>
    </nav>

    @yield('body')
</body>
</html>
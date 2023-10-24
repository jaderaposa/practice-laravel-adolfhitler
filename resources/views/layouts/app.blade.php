<!DOCTYPE html>
<html>

<head>
    <title>@yield('title')</title>

    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>

<body>
    <div class="container">
        @yield('home')
    </div>
    <div class="container">
        @include('section')
    </div>
    <div class="container"></div>

    </div>
</body>

</html>
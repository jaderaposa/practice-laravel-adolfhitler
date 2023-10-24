<!DOCTYPE html>
<html>

<head>
    <title>@yield('title')</title>

    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>

<body>
    <header class="d-flex justify-content-center mt-3">
        <h1 class="justify-content-center p-3 border rounded-pill d-inline-flex">@yield('header')</h1>
    </header>

    <div class="container">
        @yield('content')
    </div>

    <footer class="footer">
        @include('signature.signature')
    </footer>
</body>

</html>
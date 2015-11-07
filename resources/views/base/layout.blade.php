<!doctype html>
<html lang="es">
<head>
    @include('base.head')

    @include('base.style')

    @yield('other-styles', '')
</head>
<body>
    @yield('main-content')

    @include('base.scripts')

    @yield('other-scripts', '')
</body>
</html>
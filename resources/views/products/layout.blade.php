<!DOCTYPE html>
<html>
<head>
    <title>@yield('title')</title>
    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])

    <!-- Custom Style -->
    @yield('importcss')

    <!-- Custom Script -->
    @yield('importjs')
</head>
<body>

<div class="container">
    @yield('content')
</div>

</body>
</html>

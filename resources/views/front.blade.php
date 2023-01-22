<html lang="tr">
<head>
    <meta charset="UTF-8">
    @yield('css')

    <title>@yield('title')</title>
</head>
<body>
@include('about')
@yield('content')

@yield('footer')
</body>
</html>

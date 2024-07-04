<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Madu Trigona</title>
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
    @yield('style')
    @yield('style')
</head>
<body>
    @include('user.layouts.navbar')
    @yield('content')
    @include('user.layouts.footer')
    <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>

    @yield('script')
</body>
</html>

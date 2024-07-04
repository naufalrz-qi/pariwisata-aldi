<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Madu Trigona</title>
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">

    @yield('style')
</head>
<body>
    @include('admin.layouts.navbar')
    @yield('content')
    @include('admin.layouts.footer')
    <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>

    @yield('script')
</body>
</html>

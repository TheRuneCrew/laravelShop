<!DOCTYPE html>
<html lang="en">
<head>
    {{-- meta --}}
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @yield('meta')

    {{-- style --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    @yield('style')

    {{-- title --}}
    <title>TheRuneCrew - @yield('title')</title>
</head>
<body>
    {{-- haeder --}}
    @include('layout.header')
    {{-- end header --}}


    @yield('content')

    {{-- footer --}}
    @include('layout.footer')
    {{-- end footer --}}


    {{-- scripts --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    @yield('script')
    {{-- end scripts --}}
</body>
</html>

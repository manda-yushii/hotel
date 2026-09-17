<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>@yield('title', 'Kasir')</title>

    <link rel="stylesheet" href="{{ asset('assets/vendors/mdi/css/materialdesignicons.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendors/css/vendor.bundle.base.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">

    <link rel="shortcut icon" href="{{ asset('assets/images/favicon.png') }}" />

    @stack('styles')
</head>

<body>
    <div class="container-fluid p-3" style="height: 100vh;">
        @yield('content')
    </div>

    <script src="{{ asset('assets/vendors/js/vendor.bundle.base.js') }}"></script>

    @stack('scripts')
</body>

</html>

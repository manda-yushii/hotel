<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>@yield('title', 'SurveiHotel')</title>

    {{-- Bootstrap --}}
    <link href="{{ asset('user/assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">

    {{-- Bootstrap Icons --}}
    <link href="{{ asset('user/assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">

    {{-- CSS utama --}}
    <link href="{{ asset('user/assets/css/main.css') }}" rel="stylesheet">
    

    @stack('styles')
</head>

<body>

    {{-- Isi Login / Register --}}
    @yield('content')

    {{-- Bootstrap JS --}}
    <script src="{{ asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

    @stack('scripts')

</body>

</html>
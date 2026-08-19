<!DOCTYPE html>
<html lang="en">

@include('partials.user-head')

<body style="padding-top: 110px;">

    @include('partials.user-navbar')

    <main class="main">

        @yield('content')

    </main>

    @include('partials.user-footer')

    @include('partials.user-script')

</body>

</html>
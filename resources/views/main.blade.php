<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
<head>
    @include('partials._head')
</head>
<body>
    <!-- HeaderMenu-->
    @include('partials._header')
    <!-- HeaderMenu-->

    @yield('content')

    <!-- footer -->
    @include('partials._footer')
    <!-- .footer -->
    <!-- scripts -->
    @include('partials._scripts')
</body>
</html>

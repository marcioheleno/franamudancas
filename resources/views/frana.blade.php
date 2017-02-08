<!doctype html>
<html lang="pt-BR">
<head>
    @include('partials._head')
</head>
<body>
<!-- HeaderMenu-->
    @yield('content')
    @include('partials._header')
    <!--<section slideComponents>-->
    @include('partials._slide')
    <!--</section>-->
    <main>

    </main>
    <!-- serviceMkt -->
    @include('partials._serviceMkt')

    <!--<section>-->
    @include('partials._testimonial')
        <!-- serviceMkt -->

    <!--footer-->
    <footer>
        @include('partials._footer')
    </footer>
    <!-- scripts -->
    @include('partials._scripts')
</body>
</html>

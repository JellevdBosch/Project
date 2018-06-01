<!DOCTYPE html>
<html>
    <head>
        @include('include.head')
        <title>@yield('title')</title>
    </head>
    <body>
    @include('include.header')
        @yield('landing')
        <section class="page wrapper">
            @include('include.sidebar')
            @yield('content')
        </section>
        @include('include.footer')
    </body>
</html>

<!DOCTYPE html>
<html>
    <head>
        @include('include.head')
        <title>@yield('title')</title>
    </head>
    <body>
        @yield('landing')
        <section class="page wrapper">
            @yield('content')
        </section>
    </body>
</html>

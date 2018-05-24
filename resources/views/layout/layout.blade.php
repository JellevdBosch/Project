<!DOCTYPE html>
<html>
    <head>
        @include('include.head')
        <title>@yield('title')</title>
    </head>
    <body>
        <section class="wrapper">
            @include('include.header')
            @yield('content')
            @include('include.footer')
        </section>
    </body>
</html>

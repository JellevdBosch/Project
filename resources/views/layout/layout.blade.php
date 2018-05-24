<!DOCTYPE html>
<html>
    <head>
        @include('include.head')
        <title>@yield('title')</title>
    </head>
    <body>
        <section class="wrapper">
            @include('include.header')
            @include('include.sidebar')
            @yield('content')
        </section>
        @include('include.footer')
    </body>
</html>

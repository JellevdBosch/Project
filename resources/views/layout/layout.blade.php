<!DOCTYPE html>
<html>
    <head>
        @include('include.head')
        <title>@yield('title')</title>
    </head>
    <body>

        @include('include.header')
        @yield('content')
        @include('include.footer')

    </body>
</html>

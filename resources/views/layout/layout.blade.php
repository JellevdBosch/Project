<!DOCTYPE html>
<html>
    <head>
        @include('include.header')
        <title>@yield('title')</title>
    </head>
    <body>
        <header class="header">
            @include('include.header')
        </header>

        <div class="container">
            <h1>@yield('content')</h1>
        </div>

        <footer class="footer">
            @include('include.footer')
        </footer>
    </body>
</html>

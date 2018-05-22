<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        @yield('title')
    </head>
    <body>
        <header class="header">
            <h1>@yield('header')</h1>
        </header>

        <div class="container">
            <h1>@yield('content')</h1>
        </div>

        <footer class="footer">
            <h1>@yield('footer')</h1>
        </footer>
    </body>
</html>

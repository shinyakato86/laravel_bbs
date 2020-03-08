<!DOCTYPE html>
<html>
    <head>
        <meta charset='utf-8'>
        <title>EASY BBS</title>
        @include('style-sheet')
    </head>
    <body>
        @include('nav')
        <div class='contentArea'>
            @yield('content')
        </div>
    </body>
</html>
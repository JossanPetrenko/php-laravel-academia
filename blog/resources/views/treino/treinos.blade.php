<html>
    <head>
        <title>App Name - @yield('title')</title>
    </head>
    <body>
        TREINOS
        @section('sidebar')
            This is the master sidebar.
        @show

        <div class="container">
            @yield('content')
        </div>
    </body>
</html>
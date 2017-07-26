<!-- Stored in resources/views/layouts/master.blade.php -->

<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
    
    <head>

        @include('partials.head')

        <title>Monkish Typist - @yield('title')</title>

    </head>
    
    <body class="">
            
        @yield('content')

        @include('partials.footer')

    </body>
</html>
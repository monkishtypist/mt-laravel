<!-- Stored in resources/views/layouts/master.blade.php -->

<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
    
    <head>

        @include('partials.head')

        <title>Monkish Typist - @yield('title')</title>

    </head>
    
    <body class="bg-<?php print( rand(1,5) ); ?>">
            
        {{-- @include('partials.nav') --}}

        {{-- @include('partials.headline') --}}

        <div class="container-fluid">

            @yield('content')

        </div>
        
        @include('partials.footer')

    </body>
</html>
<!-- Stored in resources/views/layouts/master.blade.php -->

<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
    
    <head>

        @include('partials.head')

        <title>Monkishtypist - @yield('title')</title>

    </head>
    
    <body>
            
        @include('partials.nav')
            
        <div class="container-fluid">
            
            @yield('content')

        </div>
        
        @include('partials.footer')

    </body>
</html>
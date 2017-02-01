<!-- Stored in resources/views/layouts/master.blade.php -->

<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
    
    <head>

        @include('partials.head')

        <title>Monkishtypist - @yield('title')</title>

    </head>
    
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @if (Auth::check())
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ url('/login') }}">Login</a>
                        <a href="{{ url('/register') }}">Register</a>
                    @endif
                </div>
            @endif
            
            @include('partials.nav')
            
            <div class="content">
                <div class="container-fluid">
                
                    @yield('content')

                </div>
            </div>
        
        </div>

        @include('partials.footer')

    </body>
</html>
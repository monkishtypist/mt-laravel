<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
    
    @include('partials.head')
    
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
                404 - Lorem ipsum dolor sit amet, consectetur adipisicing elit. Odit, quaerat, veniam inventore nesciunt nulla doloribus pariatur porro excepturi, quam unde veritatis, nobis laborum. Animi, necessitatibus mollitia, ullam hic eveniet dolor!
                </div>
            </div>
        
        </div>

        @include('partials.footer')

    </body>
</html>
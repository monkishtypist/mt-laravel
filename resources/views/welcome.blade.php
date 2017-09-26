<!doctype html>
<html lang="{{ app()->getLocale() }}">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<title>Laravel</title>

		<!-- Fonts -->
		<link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

		<!-- Styles -->
		<link rel="stylesheet" href="./css/app.css">

	</head>
	<body>
		<div class="flex-center position-ref full-height">
			@if (Route::has('login'))
				<div class="top-right links">
					@auth
						<a href="{{ url('/home') }}">Home</a>
					@else
						<a href="{{ route('login') }}">Login</a>
						<a href="{{ route('register') }}">Register</a>
					@endauth
				</div>
			@endif

			<div class="content">

                <div class="container">
				    
                    <div class="row align-items-center justify-content-center">
                        
                        <div class="col-12 col-md-10 col-lg-6">
                            
                            <h1 class="title">Hi. I am MonkishTypist.</h1>
                            <div id="spokenResponse" class="spoken-response">
                                <ul class="spoken-response__text list-unstyled">
                                </ul>
                            </div>

                            <div class="input-group">
                                <input type="text" class="form-control" id="speech" placeholder="Ask me a question..." aria-label="Ask me a question...">
                                <span class="input-group-btn">
                                    <button class="btn btn-secondary" type="button" id="rec">Speak!</button>
                                </span>
                            </div>

                        </div><!-- /.col -->

                    </div><!-- /.row -->

				</div><!-- /.container -->

			</div>
		</div>

        <script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
        <script src="./js/api.ai.js"></script>

	</body>
</html>

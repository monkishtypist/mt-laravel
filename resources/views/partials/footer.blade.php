<footer>
	<nav class="navbar navbar-toggleable-md navbar-light bg-faded">
		<div class="collapse navbar-collapse" id="navbarSupportedContent">
			<ul class="nav navbar-nav mx-auto list-inline">
				<li class="nav-item list-inline-item"><a class="nav-link {{ Request::is('/') ? 'active' : '' }}" href="#">Home <span class="sr-only">(current)</span></a></li>
				<li class="nav-item list-inline-item"><a class="nav-link {{ Request::is('about') ? 'active' : '' }}" href="{{ url('about') }}">About</a></li>
				<li class="nav-item list-inline-item"><a class="nav-link {{ Request::is('contact') ? 'active' : '' }}" href="{{ url('contact') }}">Contact</a></li>
			</ul>
		</div>
	</nav>
</footer>

<!-- Footer Scripts etc -->

<script src="{{ asset('js/app.js') }}"></script>
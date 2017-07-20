@extends('layouts.master')


@section('title', 'Monkish Typist')


@section('headline', 'Monkish Typist')
@section('subhead', 'Web Development / Experiments / APIs')


@section('content')
<header>
	<div class="row">
		<div class="col-xs-12 col-lg-6">
			<h2 class="issue text-center"><span class="name text-uppercase">Tim Spinks</span> <span>is</span></h2>
		</div>
		<div class="col-xs-12 col-lg-6">
			<h2 class="issue text-center">a Web Applications Developer</h2>
		</div>
	</div>
	<div id="headline" class="row">
		<div class="col-sm-12">
			<h1 id="top-title" class="text-center"><span>Monkish Typist</span></h1>
		</div>
	</div>
</header>
<div class="row justify-content-between">
	<div class="col-xs-12 col-md-6 col-lg-7">
		<section id="about">
			<h2>Who is this guy anyway?</h2>
			<div class="row">
				<div class="col-sm-6">
					<p><span class="hilite">An amazing backend developer, that's who! Tim has been developing web applications and custom integrations for nearly a decade. Self-taught, self-motivated, and self-sufficient!</span></p>
				</div>
			</div>
		</section>
		<section id="work">
			<h2 class=""><span>Excellent</span><br class="hidden-md-down" /> <span class="bump">Work!</span></h2>
			<ul class="list-unstyled">
				<li>
					<span class="hilite">
						<h3>Cutting Edge!</h3>
						<h4 class="text-uppercase">Portal WiFi</h4>
					</span>
					<p><span class="hilite">The brand portal built on Laravel and Ghost!</span></p>
				</li>
				<li>
					<span class="hilite">
						<h3>Powerful Integrations!</h3>
						<h4 class="text-uppercase">Tritium Corporation</h4>
					</span>
					<p><span class="hilite">A cyber security Web API made with Angular.</span></p>
				</li>
				<li>
					<span class="hilite">
						<h3>Totally Custom!</h3>
						<h4 class="text-uppercase">Jacuzzi Baths</h4>
					</span>
					<p><span class="hilite">WordPress theming and plugin customization!</span></p>
				</li>
			</ul>
		</section>
	</div>
	<div class="col-xs-12 col-md-6 col-lg-4">
		<section id="skillz">
			<h3 class="text-right"><span class="hilite hard-skills">Hard Skills<br /> you get with this<br /> <span class="font-italic">talented developer</span></span></h3>
			<ul class="list-unstyled text-right">
				<li class=""><span class="hilite">PHP, Angular, Laravel, Vue</span></li>
				<li class=""><span class="hilite">MySQL, PostgreSQL, and other Databases</span></li>
				<li class=""><span class="hilite">Version control: Git, SVN</span></li>
				<li class=""><span class="hilite">Google Analytics</span></li>
				<li class=""><span class="hilite">WordPress plugin development</span></li>
				<li class=""><span class="hilite">Custom API integrations</span></li>
				<li class=""><span class="hilite">And so much more...</span></li>
			</ul>
			<h3 class="text-right"><span class="hilite soft-skills">and <span class="font-italic">Soft Skills</span></span></h3>
			<ul class="list-unstyled text-right">
				<li class=""><span class="hilite">Team leader</span></li>
				<li class=""><span class="hilite">Self starter</span></li>
				<li class=""><span class="hilite">Problem solver</span></li>
				<li class=""><span class="hilite">Critical thinker</span></li>
			</ul>
			<a href="https://github.com/monkishtypist/" class="text-right"><img src="../images/GitHub-Mark-Light-64px.png" alt="GitHub" class="float-right"></a>
		</section>
	</div>
</div>
@stop
@extends('layouts.master')


@section('title', 'Monkish Typist')


@section('headline', 'Monkish Typist')
@section('subhead', 'Web Development / Experiments / APIs')


@section('content')
<div id="app" :class="currentView">

	<app-nav v-on:change-view="changeView" :view="currentView"></app-nav>

	<transition name="component-fade" mode="out-in">
		<component :is="currentView" v-on:change-view="changeView" :view="currentView"></component>
	</transition>

</div>
@stop
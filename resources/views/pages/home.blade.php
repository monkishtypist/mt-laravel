@extends('layouts.master')


@section('title', 'Monkish Typist')


@section('headline', 'Monkish Typist')
@section('subhead', 'Web Development / Experiments / APIs')


@section('content')
<div id="app">

<component :is="currentView" v-on:change-view="changeView" :view="currentView"></component>

</div>
@stop
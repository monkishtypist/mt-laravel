@extends('layouts.master')


@section('title', 'About')


@section('content')

<div class="row">
  <div class="col-sm-12 col-md-6 col-lg-4"></div>
  <div class="col-sm-12 col-md-6 col-lg-8">
    <h1>Monkishtypist</h1>
    <a href="mailto:tim@monkishtypist.com">email</a>
    <dl class="dl-horizontal">
      <dt>About</dt>
      <dd>Born near the bay</dd>
      <dd>Moved to San Diego in the 80's</dd>
      <dd>Trained as an Economist</dd>
      <dd>Prefers puzzles and problem solving</dd>
      <dd>And writing code to solve those puzzles</dd>
      <dd>But still loves math</dd>
    </dl>
    <dl class="dl-horizontal">
      <dt>Mad Skillz</dt>
      <dd>Back-end development</dd>
      <dd>PHP frameworks, APIs</dd>
      <dd>Custom plugin development</dd>
      <dd>E-commerce, WooCommerce, WordPress pro</dd>
      <dd>JIRA admin expert</dd>
    </dl>
  </div>
</div>

@stop

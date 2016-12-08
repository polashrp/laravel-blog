@extends('layouts.app')

@section('head')
@section('content')

<div class="col-md-8">
	@if($post)

		<h1>{{ $post->title }}</h1>

		<p>{{ $post ->post_content }}</p>
	@else
	<h1>No Post </h1>
	@endif
</div>
@stop
@section('footer')
@extends('layouts.app')


@section('content')

<div class="col-md-8">


@foreach($posts  as $post )

<a href="show/{{$post->id}}"><h1>{{ $post->title }}</h1></a>

<p>{{ substr($post ->post_content,0 ,250) }}</p>


@endforeach
</div>
@stop
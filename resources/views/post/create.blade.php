@extends('layouts.app')


@section('content')

<h1>Add new Post</h1>


<form action="new-post" method="POST">
	<input type="hidden" name="_token" value="{{ csrf_token() }}">
	<div class="form-group">
		<input required="required" value="" placeholder="Enter title here" type="text" name = "title"class="form-control" />
	</div>
	<div class="form-group">
		<textarea name='post_content'class="form-control"></textarea>
	</div>
	<input type="submit" name='publish' class="btn btn-success" value = "Publish"/>
	<input type="submit" name='save' class="btn btn-default" value = "Save Draft" />
</form>
@stop
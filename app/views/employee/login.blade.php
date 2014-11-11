@extends("layout")
@section("content")

{{ Form::open(array(
	'url' => 'employee/workbench'
	));	 }}

@if (isset($error))
{{ $error }}<br />
@endif
	{{ Form::label("ID", "ID") }}
	{{ Form::text("ID") }}
	{{ Form::label("password", "Password") }}
	{{ Form::password("password") }}
	{{ Form::submit("login") }}
	
@stop 

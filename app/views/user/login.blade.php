@extends("layout")
@section("content")

<p>আপনার কী ইউজারনেম নেই? এখানে <a  href="sign_up"> সাইন আপ</a> করুন</p>

{{ Form::open(array(
	'url' => 'user/profile'
	));	 }}

@if (isset($error))
{{ $error }}<br />
@endif
	{{ Form::label("email", "E-mail") }}
	{{ Form::text("email") }}
	{{ Form::label("password", "Password") }}
	{{ Form::password("password") }}
	{{ Form::submit("login") }}
	
@stop 

@extends("layout_sign_up")
@section("content")

{{ Form::open(array(
	'url' => 'sign_up_action'
	)) }}

@if (isset($error))
{{ $error }}<br />
@endif

	{{ Form::label("firstName", "First name ") }}
	{{ Form::text("firstName") }}
	{{ Form::label("lastName", "Last Name") }}
	{{ Form::text("lastName") }}
	{{ Form::label("email", "E-mail")}}
	{{ Form::text("email")}}
	{{ Form::label("password", "Password") }}
	{{ Form::password('password') }}
	{{ Form::label("reEnterPassword", "Re enter password") }}
	{{ Form::password('reEnterPassword') }}
	{{ Form::label("gender", "Gender")}} </br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br>
	{{ Form::select('gender', array(
		'male' => 'Male',
		'female' => 'Female'
	)) }} 
	{{ Form::label("dateOfBirth", "Date of Birth in YYYY-MM-DD") }}
	{{ Form::text("dateOfBirth")}}
	{{ Form::label("phoneNumber", "Phone Number") }}
	{{ Form::text("phoneNumber")}}
	{{ Form::label("currentAddress", "Current Address") }}
	{{ Form::text("currentAddress")}}
	{{ Form::label("permanentAddress", "Permanent Address") }}
	{{ Form::text("permanentAddress")}}

	{{ Form::submit("Sign Up") }}


		

@stop
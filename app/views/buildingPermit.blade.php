@extends("layout")
@section("content")

{{ Form::open(array(
	'url' => 'building_permit_action'
	)) }}

@if (isset($error))
{{ $error }}<br />
@endif

	{{ Form::label("formID", "Form ID ") }}
	{{ Form::text("formID") }}
	{{ Form::label("receiptNumber", "Reciept Number") }}
	{{ Form::text("receiptNumber") }}
	{{ Form::label("proposedStructureDetailsID", "Proposed Structure Details ID")}}
	{{ Form::text("proposedStructureDetailsID")}}
	{{ Form::label("documentsID", "Document ID") }}
	{{ Form::text('documentsID') }}

	{{ Form::submit("Sign Up") }}
		
@stop 

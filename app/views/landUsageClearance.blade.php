@extends("layout")
@section("content")

{{ Form::open(array(
	'url' => 'land_usage_clearance_action'
	)) }}

@if (isset($error))
{{ $error }}<br />
@endif

	{{ Form::label("formID", "Form ID ") }}
	{{ Form::text("formID") }}
	{{ Form::label("receiptNumber", "Reciept Number") }}
	{{ Form::text("receiptNumber") }}
	{{ Form::label("plotOwnershipID", "Plot Ownership ID")}}
	{{ Form::text("plotOwnershipID")}}

	{{ Form::submit("Submit") }}
@stop
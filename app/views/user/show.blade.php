@extends('layouts.default')

@include('partials.menu')

@section('content')
	<p>{{{ $user->email or 'Somevalue' }}}</p>
@stop


@section('sidebar')
	@parent
	<p><a href="#">Some Link</a></p>
	<p><a href="#">Some Link</a></p>
	<p><a href="#">Some Link</a></p>
@stop

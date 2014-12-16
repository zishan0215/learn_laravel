@extends('layouts.default')

@section('content')
	@if(count($users))		
		@foreach ($users as $user)
			<p>{{{ $user->email }}}</p>
		@endforeach
	@endif
@stop
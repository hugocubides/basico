@extends('layouts.default')

@section('main')
	
	<br />
	<p>@lang('basico.welcome_profile')</p>
	<p>Email: {{ Auth::user()->email }}</p>
	<p>Usuario: {{ Auth::user()->username }}</p>
	<p>{{ $profile }}</p>
	@foreach($profile as $item)
		<p>ID: {{ $item->id }}</p>
		<p>User ID: {{ $item->user_id }}</p>
		<p>Nombre: {{ $item->first_name }}</p>
		<p>Apellido: {{ $item->last_name }}</p>
	@endforeach
    
@stop

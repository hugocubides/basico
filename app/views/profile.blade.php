@extends('layouts.default')

@section('main')
	<div class="jumbotron">
		<br /><br /><br />
		<p>{{ Lang::get('basico.welcome_profile') }}</p>
		<p>Email: {{ Auth::user()->email }}</p>
		<p>Usuario: {{ Auth::user()->username }}</p>
    </div>
@stop

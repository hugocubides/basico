@extends('layouts.default')

@section('main')
	
	<div class="page-header">
	  <h1>@lang('basico.profile')</h1>
	</div>
	<div class="row">
	  <div class="col-md-8">
		<!--<p>@lang('basico.email'): {{ Auth::user()->email }}</p>
		<p>@lang('basico.username'): {{ Auth::user()->username }}</p>-->
		
		@foreach($profile as $item)
			<p>@lang('basico.first_name'): {{ $item->first_name }}</p>
			<p>@lang('basico.last_name'): {{ $item->last_name }}</p>
			<p>@lang('basico.birthday'): {{ $item->birthday }}</p>
			<p>@lang('basico.bio'): {{ $item->bio }}</p>			
			<p>@lang('basico.profession'): {{ $item->profession }}</p>
			<p>@lang('basico.organization'): {{ $item->organization }}</p>
			<p>@lang('basico.address'): {{ $item->address }}</p>
			<p>@lang('basico.city'): {{ $item->city }}</p>
			<p>@lang('basico.country'): {{ $item->country }}</p>
			<p>@lang('basico.phone'): {{ $item->phone }}</p>
			<p>@lang('basico.mobile'): {{ $item->mobile }}</p>
			<p>@lang('basico.website'): {{ $item->website }}</p>
		@endforeach
	  </div>
	  <div class="col-md-4">
		<div class="list-group">
		  <a href="{{ URL::to(Auth::user()->username.'/edit') }}" class="list-group-item active">
			Editar
		  </a>
		</div>
	  </div>
	</div>	
@stop

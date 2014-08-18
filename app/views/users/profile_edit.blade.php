@extends('layouts.default')

@section('main')
	
	<div class="page-header">
	  <h1>@lang('basico.profile')</h1>
	</div>
	<div class="row">
	  <div class="col-md-8">
		<p>@lang('basico.email'): {{ Auth::user()->email }}</p>
		<p>@lang('basico.username'): {{ Auth::user()->username }}</p>
		
		@foreach($profile as $item)		
		<form method="POST" action="{{{ URL::to(Auth::user()->username.'/edit') }}}" accept-charset="UTF-8">
			<input type="hidden" name="_token" value="{{{ Session::getToken() }}}">
			<input type="hidden" name="_id" value="{{ $item->id }}">
			<fieldset>
				<div class="form-group">
					<label for="first_name">@lang('basico.first_name')</label>
					<input class="form-control" tabindex="1" type="text" name="first_name" id="first_name" value="{{ $item->first_name }}">
				</div>
				<div class="form-group">
					<label for="last_name">@lang('basico.last_name')</label>
					<input class="form-control" tabindex="2" type="text" name="last_name" id="last_name" value="{{ $item->last_name }}">
				</div>
				<div class="form-group">
					<label for="display_name">@lang('basico.display_name')</label>
					<input class="form-control" tabindex="3" type="text" name="display_name" id="display_name" value="{{ $item->display_name }}">
				</div>
				<div class="form-group">
					<label for="birthday">@lang('basico.birthday')</label>
					<input class="form-control" tabindex="4" type="text" name="birthday" id="birthday" value="{{ $item->birthday }}">
				</div>
				<div class="form-group">
					<label for="bio">@lang('basico.bio')</label>
					<textarea class="form-control" tabindex="5" name="bio" id="bio" rows="3">{{{ $item->bio }}}</textarea>
				</div>
				<div class="form-group">
					<label for="profession">@lang('basico.profession')</label>
					<input class="form-control" tabindex="6" type="text" name="profession" id="profession" value="{{ $item->profession }}">
				</div>
				<div class="form-group">
					<label for="organization">@lang('basico.organization')</label>
					<input class="form-control" tabindex="7" type="text" name="organization" id="organization" value="{{ $item->organization }}">
				</div>
				<div class="form-group">
					<label for="address">@lang('basico.address')</label>
					<input class="form-control" tabindex="8" type="text" name="address" id="address" value="{{ $item->address }}">
				</div>
				<div class="form-group">
					<label for="city">@lang('basico.city')</label>
					<input class="form-control" tabindex="9" type="text" name="city" id="city" value="{{ $item->city }}">
				</div>
				<div class="form-group">
					<label for="country">@lang('basico.country')</label>
					<input class="form-control" tabindex="10" type="text" name="country" id="country" value="{{ $item->country }}">
				</div>
				<div class="form-group">
					<label for="phone">@lang('basico.phone')</label>
					<input class="form-control" tabindex="9" type="text" name="phone" id="phone" value="{{ $item->phone }}">
				</div>
				<div class="form-group">
					<label for="mobile">@lang('basico.mobile')</label>
					<input class="form-control" tabindex="9" type="text" name="mobile" id="mobile" value="{{ $item->mobile }}">
				</div>				
				<div class="form-group">
					<label for="website">@lang('basico.website')</label>
					<input class="form-control" tabindex="9" type="text" name="website" id="website" value="{{ $item->website }}">
				</div>
				@if (Session::get('error'))
					<div class="alert alert-danger" role="alert">{{{ Session::get('error') }}}</div>
				@endif

				@if (Session::get('notice'))
					<div class="alert alert-warning" role="alert">{{{ Session::get('notice') }}}</div>
				@endif
				<div class="form-group">
					<button tabindex="4" type="submit" class="btn btn-default">@Lang('basico.save')</button>
				</div>
			</fieldset>
		</form>
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

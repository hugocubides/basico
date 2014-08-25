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
		<form method="POST" action="{{{ URL::to(Auth::user()->username.'/edit') }}}" accept-charset="UTF-8" role="form">
			<input type="hidden" name="_token" value="{{{ Session::getToken() }}}">
			<input type="hidden" name="_id" value="{{ $item->id }}">
			<fieldset>
				@if($errors->get('first_name'))
				<div class="form-group col-sm-6 has-error">
				@else
				<div class="form-group col-sm-6">
				@endif
					<label for="first_name">@lang('basico.first_name')</label>
					<input class="form-control" tabindex="1" type="text" name="first_name" id="first_name" value="{{ $item->first_name }}">
					@foreach($errors->get('first_name') as $message)
						<div class="alert alert-danger" role="alert">{{ $message }}</div>
					@endforeach
				</div>
				@if($errors->get('last_name'))
				<div class="form-group col-sm-6 has-error">
				@else
				<div class="form-group col-sm-6">
				@endif
					<label for="last_name">@lang('basico.last_name')</label>
					<input class="form-control" tabindex="2" type="text" name="last_name" id="last_name" value="{{ $item->last_name }}">
					@foreach($errors->get('last_name') as $message)
						<div class="alert alert-danger" role="alert">{{ $message }}</div>
					@endforeach
				</div>
			</fieldset>
			<fieldset>
				@if($errors->get('display_name'))
				<div class="form-group col-sm-6 has-error">
				@else
				<div class="form-group col-sm-6">
				@endif
					<label for="display_name">@lang('basico.display_name')</label>
					<input class="form-control" tabindex="3" type="text" name="display_name" id="display_name" value="{{ $item->display_name }}">
					@foreach($errors->get('display_name') as $message)
						<div class="alert alert-danger" role="alert">{{ $message }}</div>
					@endforeach
				</div>
				@if($errors->get('birthday'))
				<div class="form-group col-sm-6 has-error">
				@else
				<div class="form-group col-sm-6">
				@endif
					<label for="birthday">@lang('basico.birthday')</label>
					<input class="form-control" tabindex="4" type="text" name="birthday" id="birthday" value="{{ $item->birthday }}">
					@foreach($errors->get('birthday') as $message)
						<div class="alert alert-danger" role="alert">{{ $message }}</div>
					@endforeach
				</div>
			</fieldset>
			<fieldset>
				@if($errors->get('bio'))
				<div class="form-group col-sm-12 has-error">
				@else
				<div class="form-group col-sm-12">
				@endif
					<label for="bio">@lang('basico.bio')</label>
					<textarea class="form-control" tabindex="5" name="bio" id="bio" rows="3">{{{ $item->bio }}}</textarea>
					<span class="help-block">Acerca de ti en 160 caracteres o menos.</span>
					@foreach($errors->get('bio') as $message)
						<div class="alert alert-danger" role="alert">{{ $message }}</div>
					@endforeach
				</div>
			</fieldset>
			<fieldset>
				@if($errors->get('profession'))
				<div class="form-group col-sm-6 has-error">
				@else
				<div class="form-group col-sm-6">
				@endif
					<label for="profession">@lang('basico.profession')</label>
					<input class="form-control" tabindex="6" type="text" name="profession" id="profession" value="{{ $item->profession }}">
					@foreach($errors->get('profession') as $message)
						<div class="alert alert-danger" role="alert">{{ $message }}</div>
					@endforeach
				</div>
				@if($errors->get('organization'))
				<div class="form-group col-sm-6 has-error">
				@else
				<div class="form-group col-sm-6">
				@endif
					<label for="organization">@lang('basico.organization')</label>
					<input class="form-control" tabindex="7" type="text" name="organization" id="organization" value="{{ $item->organization }}">
					@foreach($errors->get('organization') as $message)
						<div class="alert alert-danger" role="alert">{{ $message }}</div>
					@endforeach
				</div>
			</fieldset>
			<fieldset>
				@if($errors->get('address'))
				<div class="form-group col-sm-12 has-error">
				@else
				<div class="form-group col-sm-12">
				@endif
					<label for="address">@lang('basico.address')</label>
					<input class="form-control" tabindex="8" type="text" name="address" id="address" value="{{ $item->address }}">
					@foreach($errors->get('address') as $message)
						<div class="alert alert-danger" role="alert">{{ $message }}</div>
					@endforeach
				</div>
			</fieldset>
			<fieldset>
				@if($errors->get('city'))
				<div class="form-group col-sm-6 has-error">
				@else
				<div class="form-group col-sm-6">
				@endif
					<label for="city">@lang('basico.city')</label>
					<input class="form-control" tabindex="9" type="text" name="city" id="city" value="{{ $item->city }}">
					@foreach($errors->get('city') as $message)
						<div class="alert alert-danger" role="alert">{{ $message }}</div>
					@endforeach
				</div>
				@if($errors->get('country'))
				<div class="form-group col-sm-6 has-error">
				@else
				<div class="form-group col-sm-6">
				@endif
					<label for="country">@lang('basico.country')</label>
					<input class="form-control" tabindex="10" type="text" name="country" id="country" value="{{ $item->country }}">
					@foreach($errors->get('country') as $message)
						<div class="alert alert-danger" role="alert">{{ $message }}</div>
					@endforeach
				</div>
			</fieldset>
			<fieldset>
				@if($errors->get('phone'))
				<div class="form-group col-sm-6 has-error">
				@else
				<div class="form-group col-sm-6">
				@endif
					<label for="phone">@lang('basico.phone')</label>
					<input class="form-control" tabindex="9" type="text" name="phone" id="phone" value="{{ $item->phone }}">
					@foreach($errors->get('phone') as $message)
						<div class="alert alert-danger" role="alert">{{ $message }}</div>
					@endforeach
				</div>
				@if($errors->get('mobile'))
				<div class="form-group col-sm-6 has-error">
				@else
				<div class="form-group col-sm-6">
				@endif
					<label for="mobile">@lang('basico.mobile')</label>
					<input class="form-control" tabindex="9" type="text" name="mobile" id="mobile" value="{{ $item->mobile }}">
					@foreach($errors->get('mobile') as $message)
						<div class="alert alert-danger" role="alert">{{ $message }}</div>
					@endforeach
				</div>
			</fieldset>
			<fieldset>				
				@if($errors->get('mobile'))
				<div class="form-group col-sm-12 has-error">
				@else
				<div class="form-group col-sm-12">
				@endif
					<label for="website">@lang('basico.website')</label>
					<input class="form-control" tabindex="9" type="text" name="website" id="website" value="{{ $item->website }}">
					@foreach($errors->get('website') as $message)
						<div class="alert alert-danger" role="alert">{{ $message }}</div>
					@endforeach
				</div>
			</fieldset>
				<div class="form-group">
					<button tabindex="4" type="submit" class="btn btn-default">@Lang('basico.save')</button>
				</div>
			
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

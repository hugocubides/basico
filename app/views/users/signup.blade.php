@extends('layouts.default')

@section('main')
	<form method="POST" action="{{{ URL::to('users') }}}" accept-charset="UTF-8">
		<input type="hidden" name="_token" value="{{{ Session::getToken() }}}">
		<fieldset>
			<div class="form-group">
				<label for="username">{{{ Lang::get('confide.username') }}}</label>
				<input class="form-control" placeholder="{{{ Lang::get('confide.username') }}}" type="text" name="username" id="username" value="{{{ Input::old('username') }}}">
			</div>
			<div class="form-group">
				<label for="email">{{{ Lang::get('confide.e_mail') }}} <small>{{ Lang::get('confide.signup.confirmation_required') }}</small></label>
				<input class="form-control" placeholder="{{{ Lang::get('confide.e_mail') }}}" type="text" name="email" id="email" value="{{{ Input::old('email') }}}">
			</div>
			<div class="form-group">
				<label for="password">{{{ Lang::get('confide.password') }}}</label>
				<input class="form-control" placeholder="{{{ Lang::get('confide.password') }}}" type="password" name="password" id="password">
			</div>
			<div class="form-group">
				<label for="password_confirmation">{{{ Lang::get('confide.password_confirmation') }}}</label>
				<input class="form-control" placeholder="{{{ Lang::get('confide.password_confirmation') }}}" type="password" name="password_confirmation" id="password_confirmation">
			</div>

			@if (Session::get('error'))
				<div class="alert alert-danger">
					@if (is_array(Session::get('error')))
						{{ head(Session::get('error')) }}
					@endif
				</div>
			@endif

			@if (Session::get('notice'))
				<div class="alert alert-warning">{{ Session::get('notice') }}</div>
			@endif

			<div class="form-actions form-group">
			  <button type="submit" class="btn btn-primary">{{{ Lang::get('confide.signup.submit') }}}</button>
			</div>

		</fieldset>
	</form>
@stop
@extends('layouts.default')

@section('main')
	<form method="POST" action="{{{ URL::to('login') }}}" accept-charset="UTF-8">
		<input type="hidden" name="_token" value="{{{ Session::getToken() }}}">
		<fieldset>
			<div class="form-group">
				<label for="email">{{{ Lang::get('confide.username_e_mail') }}}</label>
				<input class="form-control" tabindex="1" placeholder="{{{ Lang::get('confide.username_e_mail') }}}" type="text" name="email" id="email" value="{{{ Input::old('email') }}}">
			</div>
			<div class="form-group">
			<label for="password">
				{{{ Lang::get('confide.password') }}}
				<small>
					<a href="{{{ URL::to('/users/forgot_password') }}}">{{{ Lang::get('confide.login.forgot_password') }}}</a>
				</small>
			</label>
			<input class="form-control" tabindex="2" placeholder="{{{ Lang::get('confide.password') }}}" type="password" name="password" id="password">
			</div>
			<div class="checkbox">
				<label for="remember">
					<input type="hidden" name="remember" value="0">
					<input tabindex="3" type="checkbox" name="remember" id="remember" value="1"> {{{ Lang::get('confide.login.remember') }}}
				</label>
			</div>
			@if (Session::get('error'))
				<div class="alert alert-danger" role="alert">{{{ Session::get('error') }}}</div>
			@endif

			@if (Session::get('notice'))
				<div class="alert alert-warning" role="alert">{{{ Session::get('notice') }}}</div>
			@endif
			<div class="form-group">
				<button tabindex="4" type="submit" class="btn btn-default">{{{ Lang::get('confide.login.submit') }}}</button>
			</div>
		</fieldset>
	</form>
@stop

@extends('master')

@section('title', @trans('basico.dashboard'))

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
			<div class="jumbotron">
                <h1>{{ trans('basico.dashboard') }}</h1>
				<p>{{ trans('basico.welcome_dashboard') }}</p>
			</div>
		</div>
	</div>
</div>
@endsection

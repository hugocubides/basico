@extends('app')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
			<div class="jumbotron">
                <h1>@lang('basico.welcome')</h1>
				<p>@lang('basico.welcome_msg')</p>
			</div>
		</div>
	</div>
</div>
@endsection
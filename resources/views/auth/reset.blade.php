@extends('auth')

@section('content')
<div class="container-fluid">
	<div class="row">
		<div class="col-md-4 col-md-offset-4">
			
            <div class="page-header text-center">
              <h1>{{ trans('basico.reset_pwd') }}</h1>
            </div>
				
            @include('errors.errors_form')

            <form class="form-horizontal" role="form" method="POST" action="{{ url('/password/reset') }}">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <input type="hidden" name="token" value="{{ $token }}">
                
                <div class="form-group">
                    <div class="input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
                        <input type="email" class="form-control" name="email" value="{{ old('email') }}" placeholder="{{ trans('basico.email') }}">
                    </div>
                </div>
                
                <div class="form-group">
                    <div class="input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                        <input type="password" class="form-control" name="password" placeholder="{{ trans('basico.password') }}">
                    </div>                                                                  
                </div>
                
                <div class="form-group">
                    <div class="input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-repeat"></i></span>
                        <input type="password" class="form-control" name="password_confirmation" placeholder="{{ trans('basico.confirm_pwd') }}">
                    </div>                                                                  
                </div>

                <div class="form-group">
                   
                    <button type="submit" class="btn btn-primary pull-right">
                        {{ trans('basico.reset_pwd') }}
                    </button>
                   
                </div>
            </form>
				
			
		</div>
	</div>
</div>
@endsection

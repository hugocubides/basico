@extends('auth')

@section('title', @trans('basico.login'))

@section('content')
<div class="container-fluid">
	<div class="row">
		<div class="col-md-4 col-md-offset-4">
                
            <div class="page-header text-center">
              <h1>{{ trans('basico.login') }}</h1>
            </div>
                
            @if (count($errors) > 0)
                <div class="alert alert-danger">
                    <strong>Whoops!</strong> There were some problems with your input.<br><br>
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
                    
            <form class="form-horizontal" role="form" method="POST" action="{{ url('/auth/login') }}">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">

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
                
                <div class="form-group pull-right">
                    <div class="checkbox">
                        <label>
                            <input type="checkbox" name="remember"> {{ trans('basico.remember_me') }}
                        </label>
                    </div>
                </div>
                <div class="form-group">
                    <!-- Button -->
                    <div class="col-sm-12 controls">
                        <button type="submit" class="btn btn-primary pull-right"><i class="glyphicon glyphicon-log-in"></i> {{ trans('basico.login') }}</button>                          
                    </div>
                </div>

            </form>                      
            
            <div class="text-center">
                <a class="btn btn-link" href="{{ url('/password/email') }}">{{ trans('basico.forgot_pwd') }}</a>
            </div>
            
		</div>
	</div>
</div>
@endsection

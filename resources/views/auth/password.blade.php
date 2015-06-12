@extends('auth')

@section('content')
<div class="container-fluid">
	<div class="row">
		<div class="col-md-4 col-md-offset-4">
			
            <div class="page-header text-center">
              <h1>{{ trans('basico.reset_pwd') }}</h1>
            </div>
				
			
            @if (session('status'))
                <div class="alert alert-success">
                    {{ session('status') }}
                </div>
            @endif

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

            <form class="form-horizontal" role="form" method="POST" action="{{ url('/password/email') }}">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                
                <div class="form-group">
                    <div class="input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
                        <input type="email" class="form-control" name="email" value="{{ old('email') }}" placeholder="{{ trans('basico.email') }}">
                    </div>
                </div>

                <div class="form-group">
                        <button type="submit" class="btn btn-primary pull-right">
                            {{ trans('basico.send_pwd_link') }}
                        </button>
                </div>
            </form>
			
			
		</div>
	</div>
</div>
@endsection

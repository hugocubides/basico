<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel Basico</title>

    <!-- Bootstrap -->
	<link href="{{ URL::asset('assets/css/bootstrap.min.css') }}" rel="stylesheet">
	<link href="{{ URL::asset('assets/css/jquery-ui.min.css') }}" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
    
    @include('partials.header')
    
    <div class="container">
        @yield('main')
        {{ Lang::get('basico.locale') }}: {{ Config::get( 'app.locale' ) }}
		@include('partials.footer')
    </div> <!-- /container -->	
	
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <!--<script src="{{ URL::asset('assets/js/jquery-ui.min.js') }}"></script>-->
    <script src="{{ URL::asset('assets/js/jquery.ui.datepicker-es.js') }}"></script>
    <script src="{{ URL::asset('assets/js/bootstrap.min.js') }}"></script>
    
    <script>
	$(function() {
		$( "#birthday" ).datepicker({ dateFormat: "yy-mm-dd" });		
	});
	</script>
  </body>
</html>

@section('header')
	<!-- Fixed navbar -->
    <div class="navbar navbar-default navbar-top" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="{{ URL::to('/') }}">Basico</a>
        </div>
        <div class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <li class="active"><a href="{{ URL::to('/') }}">{{ Lang::get('basico.home') }}</a></li>
          </ul>
          
          <ul class="nav navbar-nav navbar-right">
			@if (Confide::user())
				<li class="dropdown">
				  <a href="#" class="dropdown-toggle" data-toggle="dropdown">{{ Auth::user()->username }} <span class="caret"></span></a>
				  <ul class="dropdown-menu" role="menu">
					<li><a href="{{ URL::to('profile') }}">{{ Lang::get('basico.profile') }}</a></li>
					<li class="divider"></li>
					<li><a href="{{ URL::to('logout') }}">{{ Lang::get('basico.logout') }}</a></li>
				  </ul>
				</li>				
			@else
				<li><a href="{{ URL::to('login') }}">{{ Lang::get('basico.login') }}</a></li>
				<li><a href="{{ URL::to('users/create') }}">{{ Lang::get('basico.signup') }}</a></li>
			@endif
          </ul>
          
        </div><!--/.nav-collapse -->
      </div>
    </div>
@show
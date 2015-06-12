<nav class="navbar navbar-default">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle Navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="{{ url('/') }}">Basico</a>
        </div>

        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

            <ul class="nav navbar-nav navbar-right">
                @if (Auth::guest())
                <a  href="{{ url('/auth/login') }}" class="btn btn-default navbar-btn">{{ trans('basico.login') }}</a>
                <a href="{{ url('/auth/register') }}" class="btn btn-default navbar-btn">{{ trans('basico.signup') }}</a>
                @else
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">{{ Auth::user()->profile->display_name }} <span class="caret"></span></a>
                        <ul class="dropdown-menu" role="menu">
                            <li><a href="{{ url('/user/profile') }}">{{ trans('basico.profile') }}</a></li>
                            <li class="divider"></li>
                            <li><a href="{{ url('/auth/logout') }}">{{ trans('basico.logout') }}</a></li>
                        </ul>
                    </li>
                @endif
            </ul>
        </div>
    </div>
</nav>
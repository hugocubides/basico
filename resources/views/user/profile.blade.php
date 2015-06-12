@extends('master')

@section('title', @trans('basico.profile'))

@section('content')
<div class="container">
	<div class="row">
        <div class="col-md-3">
            @include('user.menu')
        </div>
        <div class="col-md-9">
            <div class="well well-sm">
                <div class="row">
                    <div class="col-sm-4 col-md-3">
                        <!--<img src="http://placehold.it/380x500" alt="" class="img-rounded img-responsive" />-->
                    </div>
                    <div class="col-sm-8 col-md-9">
                        <h4>{{ Auth::user()->name }}</h4>
                        <div class="row">
                            <div class="col-md-6">
                                <p>
                                    <i class="glyphicon glyphicon-map-marker"></i> <cite title="{{ $profile->city }}, {{ $profile->country }}">{{ $profile->city or trans('basico.city') }}, {{ $profile->country or trans('basico.country') }}</cite> <br />
                                    {{ $profile->address or trans('basico.address') }}<br /><br />
                                    <i class="glyphicon glyphicon-gift"></i>&nbsp;
                                    {{ $profile->birthday or trans('basico.birthday') }}<br />
                                    <i class="glyphicon glyphicon-envelope"></i>&nbsp;{{ \Auth::user()->email }} <br />
                                    <i class="glyphicon glyphicon-globe"></i>&nbsp;<a href="{{ $profile->website }}" title="{{ $profile->website }}" target="_blank">{{ $profile->website or trans('basico.website') }}</a> <br />
                                    <i class="glyphicon glyphicon-phone-alt"></i>&nbsp;
                                    {{ $profile->phone or trans('basico.phone') }}<br />
                                    <i class="glyphicon glyphicon-phone-alt"></i>&nbsp;
                                    {{ $profile->mobile or trans('basico.mobile') }}<br />
                                </p>
                            </div>
                            <div class="col-md-6">
                                <p>
                                    {{ trans('basico.profession') }}: 
                                    {{ $profile->profession or trans('basico.none') }}<br />
                                    {{ trans('basico.organization') }}:
                                    {{ $profile->organization or trans('basico.none') }}<br />
                                    {{ trans('basico.bio') }}: <br />
                                    {{ $profile->bio or trans('basico.none') }} <br />
                                </p>
                            </div>                            
                        </div>
                    </div>
                </div>
            </div>
            
            <a href="{{ url('/user/profile/edit') }}" class="btn btn-primary">{{ trans('basico.edit') }}</a>
        </div>
	</div>
</div>
@endsection
@extends('app')

@section('content')
<div class="container">
	<div class="row">
        <div class="col-md-4">
            @include('user.menu')
        </div>
        <div class="col-md-8">
            <div class="jumbotron">
              <div class="container">
                <p>@lang('basico.first_name'): {{ $profile->first_name }}</p>
                <p>@lang('basico.last_name'): {{ $profile->last_name }}</p>
                <p>@lang('basico.display_name'): {{ $profile->display_name }}</p>
                <p>@lang('basico.birthday'): {{ $profile->birthday }}</p>
                <p>@lang('basico.bio'): {{ $profile->bio }}</p>			
                <p>@lang('basico.profession'): {{ $profile->profession }}</p>
                <p>@lang('basico.organization'): {{ $profile->organization }}</p>
                <p>@lang('basico.address'): {{ $profile->address }}</p>
                <p>@lang('basico.city'): {{ $profile->city }}</p>
                <p>@lang('basico.country'): {{ $profile->country }}</p>
                <p>@lang('basico.phone'): {{ $profile->phone }}</p>
                <p>@lang('basico.mobile'): {{ $profile->mobile }}</p>
                <p>@lang('basico.website'): <a href="{{ $profile->website }}" title="{{ $profile->website }}" target="_blank">{{ $profile->website }}</a></p>
              </div>
            </div>
            
            <a href="{{ url('/user/profile/edit') }}" class="btn btn-primary">@lang('basico.edit')</a>
        </div>
	</div>
</div>
@endsection
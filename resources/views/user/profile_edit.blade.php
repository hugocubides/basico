@extends('master')

@section('title', @trans('basico.profile'))

@section('content')
<div class="container">
	<div class="row">
        <div class="col-md-4">
            @include('user.menu')
        </div>
        
	  <div class="col-md-8">
        @include('errors.errors_form')

        {!! Form::open(['url' => 'user/profile']) !!}
          <input type="hidden" name="_id" value="{{ $profile->id }}">
          
          <div class="form-group col-sm-6">
          {!! Form::label('name', trans('basico.name')) !!}
          {!! Form::text('name', $errors->all() ? Input::old('name') : Auth::user()->name, ['class' => 'form-control']) !!}
          </div>
          <div class="form-group col-sm-6">
          {!! Form::label('birthday', trans('basico.birthday')) !!}
          {!! Form::input('date', 'birthday', $errors->all() ? Input::old('birthday') : $profile->birthday, ['class' => 'form-control']) !!}
          </div>
          <div class="form-group col-sm-12">
          {!! Form::label('bio', trans('basico.bio')) !!}
          <textarea class="form-control" name="bio" id="bio" rows="3">{{{ $errors->all() ? Input::old('bio') : $profile->bio }}}</textarea>
            <span class="help-block">Acerca de ti en 160 caracteres o menos.</span>
          </div>
           <div class="form-group col-sm-6">
          {!! Form::label('profession', trans('basico.profession')) !!}
          {!! Form::text('profession', $errors->all() ? Input::old('profession') : $profile->profession, ['class' => 'form-control']) !!}
          </div>
          <div class="form-group col-sm-6">
          {!! Form::label('organization', trans('basico.organization')) !!}
          {!! Form::text('organization', $errors->all() ? Input::old('organization') : $profile->organization, ['class' => 'form-control']) !!}
          </div>
          <div class="form-group col-sm-12">
          {!! Form::label('address', trans('basico.address')) !!}
          {!! Form::text('address', $errors->all() ? Input::old('address') : $profile->address, ['class' => 'form-control']) !!}
          </div>
          <div class="form-group col-sm-6">
          {!! Form::label('city', trans('basico.city')) !!}
          {!! Form::text('city', $errors->all() ? Input::old('city') : $profile->city, ['class' => 'form-control']) !!}
          </div>
          <div class="form-group col-sm-6">
          {!! Form::label('country', trans('basico.country')) !!}
          {!! Form::text('country', $errors->all() ? Input::old('country') : $profile->country, ['class' => 'form-control']) !!}
          </div>
          <div class="form-group col-sm-6">
          {!! Form::label('phone', trans('basico.phone')) !!}
          {!! Form::text('phone', $errors->all() ? Input::old('phone') : $profile->phone, ['class' => 'form-control']) !!}
          </div>
          <div class="form-group col-sm-6">
          {!! Form::label('mobile', trans('basico.mobile')) !!}
          {!! Form::text('mobile', $errors->all() ? Input::old('mobile') : $profile->mobile, ['class' => 'form-control']) !!}
          </div>
          <div class="form-group col-sm-12">
          {!! Form::label('website', trans('basico.website')) !!}
          {!! Form::text('website', $errors->all() ? Input::old('website') : $profile->website, ['class' => 'form-control']) !!}
          </div>
          <div class="form-group">
            <button type="submit" class="btn btn-primary">{{ trans('basico.save') }}</button>
          </div>
        {!! Form::close() !!}
      </div>
	</div>
</div>
@endsection

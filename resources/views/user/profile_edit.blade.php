@extends('app')

@section('content')
<div class="container">
	<div class="row">
        <div class="col-md-4">
            @include('user.menu')
        </div>
        
	  <div class="col-md-8">
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

        {!! Form::open(['url' => 'user/profile']) !!}
          <input type="hidden" name="_id" value="{{ $profile->id }}">
          
          <div class="form-group col-sm-6">
          {!! Form::label('first_name', Lang::get('basico.first_name')) !!}
          {!! Form::text('first_name', $errors->all() ? Input::old('first_name') : $profile->first_name, ['class' => 'form-control']) !!}
          </div>
          <div class="form-group col-sm-6">
          {!! Form::label('last_name', Lang::get('basico.last_name')) !!}
          {!! Form::text('last_name', $errors->all() ? Input::old('last_name') : $profile->last_name, ['class' => 'form-control']) !!}
          </div>
          <div class="form-group col-sm-6">
          {!! Form::label('display_name', Lang::get('basico.display_name')) !!}
          {!! Form::text('display_name', $errors->all() ? Input::old('display_name') : $profile->display_name, ['class' => 'form-control']) !!}
          </div>
          <div class="form-group col-sm-6">
          {!! Form::label('birthday', Lang::get('basico.birthday')) !!}
          {!! Form::input('date', 'birthday', $errors->all() ? Input::old('birthday') : $profile->birthday, ['class' => 'form-control']) !!}
          </div>
          <div class="form-group col-sm-12">
          {!! Form::label('bio', Lang::get('basico.bio')) !!}
          {!! Form::textarea('bio', $errors->all() ? Input::old('bio') : $profile->bio, ['class' => 'form-control' ]) !!}
            <span class="help-block">Acerca de ti en 160 caracteres o menos.</span>
          </div>
           <div class="form-group col-sm-6">
          {!! Form::label('profession', Lang::get('basico.profession')) !!}
          {!! Form::text('profession', $errors->all() ? Input::old('profession') : $profile->profession, ['class' => 'form-control']) !!}
          </div>
          <div class="form-group col-sm-6">
          {!! Form::label('organization', Lang::get('basico.organization')) !!}
          {!! Form::text('organization', $errors->all() ? Input::old('organization') : $profile->organization, ['class' => 'form-control']) !!}
          </div>
          <div class="form-group col-sm-12">
          {!! Form::label('address', Lang::get('basico.address')) !!}
          {!! Form::text('address', $errors->all() ? Input::old('address') : $profile->address, ['class' => 'form-control']) !!}
          </div>
          <div class="form-group col-sm-6">
          {!! Form::label('city', Lang::get('basico.city')) !!}
          {!! Form::text('city', $errors->all() ? Input::old('city') : $profile->city, ['class' => 'form-control']) !!}
          </div>
          <div class="form-group col-sm-6">
          {!! Form::label('country', Lang::get('basico.country')) !!}
          {!! Form::text('country', $errors->all() ? Input::old('country') : $profile->country, ['class' => 'form-control']) !!}
          </div>
          <div class="form-group col-sm-6">
          {!! Form::label('phone', Lang::get('basico.phone')) !!}
          {!! Form::text('phone', $errors->all() ? Input::old('phone') : $profile->phone, ['class' => 'form-control']) !!}
          </div>
          <div class="form-group col-sm-6">
          {!! Form::label('mobile', Lang::get('basico.mobile')) !!}
          {!! Form::text('mobile', $errors->all() ? Input::old('mobile') : $profile->mobile, ['class' => 'form-control']) !!}
          </div>
          <div class="form-group col-sm-12">
          {!! Form::label('website', Lang::get('basico.website')) !!}
          {!! Form::text('website', $errors->all() ? Input::old('website') : $profile->website, ['class' => 'form-control']) !!}
          </div>
          <div class="form-group">
            <button type="submit" class="btn btn-primary">@Lang('basico.save')</button>
          </div>
        {!! Form::close() !!}
      </div>
	</div>
</div>
@endsection

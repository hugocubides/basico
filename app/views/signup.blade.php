@extends('layouts.default')

@section('main')
	{{ Confide::makeSignupForm()->render() }}
@stop

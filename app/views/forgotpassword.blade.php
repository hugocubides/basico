@extends('layouts.default')

@section('main')
	{{ Confide::makeForgotPasswordForm()->render() }}
@stop

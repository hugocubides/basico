@extends('layouts.default')

@section('main')
	{{ Confide::makeLoginForm()->render() }}
@stop

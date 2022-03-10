@extends('admin.default')

@section('page-header')
	Company <small>{{ trans('app.add_new_item') }}</small>
@stop

@section('content')
	{!! Form::open([
			'route' => [ ADMIN . '.companies.store' ],
			'files' => true
		])
	!!}

		@include('admin.users.form')

		<button type="submit" class="btn btn-primary">{{ trans('app.add_button') }}</button>

	{!! Form::close() !!}

@stop

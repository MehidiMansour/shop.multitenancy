@extends('admin.default')

@section('page-header')
	Shop <small>{{ trans('app.add_new_item') }}</small>
@stop

@section('content')
	{!! Form::open([
			'route' => [ ADMIN . '.shops.store' ],
			'files' => true
		])
	!!}

		@include('admin.shops.form')

		<button type="submit" class="btn btn-primary">{{ trans('app.add_button') }}</button>

	{!! Form::close() !!}

@stop

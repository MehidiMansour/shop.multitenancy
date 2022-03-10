@extends('admin.default')

@section('page-header')
	Tenant <small>{{ trans('app.add_new_item') }}</small>
@stop

@section('content')
	{!! Form::open([
			'route' => [ ADMIN . '.tenants.store' ],
			'files' => true
		])
	!!}

		@include('admin.tenants.form')

		<button type="submit" class="btn btn-primary">{{ trans('app.add_button') }}</button>

	{!! Form::close() !!}

@stop

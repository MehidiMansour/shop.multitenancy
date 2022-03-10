@extends('admin.default')

@section('page-header')
	Tenant <small>{{ trans('app.update_item') }}</small>
@stop

@section('content')
	{!! Form::model($item, [
			'route'  => [ ADMIN . '.tenants.update', $item->id ],
			'method' => 'put',
			'files'  => true
		])
	!!}

		@include('admin.tenants.form')

		<button type="submit" class="btn btn-primary">{{ trans('app.edit_button') }}</button>

	{!! Form::close() !!}

@stop

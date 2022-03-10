<div class="row mB-40">
	<div class="col-sm-8">
		<div class="bgc-white p-20 bd">
			{!! Form::myInput('text', 'name', 'Name shop') !!}
            {!! Form::mySelect('company_id', 'Company', App\Models\Company::pluck('name', 'id'), null, ['class' => 'form-control select2']) !!}
		</div>
	</div>

</div>

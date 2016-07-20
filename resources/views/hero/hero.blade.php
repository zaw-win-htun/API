

	
			<div class="form-group">
				{!! Form::label('hero_name' ,'Hero Name:') !!}
				{!! Form::text('hero_name',null, ['class' => 'form-control']) !!}
			</div>

			<div class="form-group">
				{!! Form::label('hero_image' ,'Hero Image') !!}
				{!! Form::text('hero_image',null, ['class' => 'form-control']) !!}
			</div>

			<div class="form-group">
				{!! Form::label('hero_overview' ,'Hero Overview:') !!}
				{!! Form::text('hero_overview',null, ['class' => 'form-control']) !!}
			</div>

			<div class="form-group">
				{!! Form::label('hero_detail' ,'Hero Detail:') !!}
				{!! Form::text('hero_detail',null, ['class' => 'form-control']) !!}
			</div>
			<div class="form-group">

			{!! Form::submit($submitButtonText ,['class' => 'btn btn-primary form-control']) !!}
			</div>	
	
						


		
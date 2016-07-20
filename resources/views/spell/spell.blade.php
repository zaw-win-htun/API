	
			<div class="form-group">
				{!! Form::label('hero_id' ,'Hero ID:') !!}
				{!! Form::text('hero_id',null, ['class' => 'form-control']) !!}
			</div>

			<div class="form-group">
				{!! Form::label('spell_name' ,'Spell Name:') !!}
				{!! Form::text('spell_name',null, ['class' => 'form-control']) !!}
			</div>

			<div class="form-group">
				{!! Form::label('spell_image' ,'Spell Image') !!}
				{!! Form::text('spell_image',null, ['class' => 'form-control']) !!}
			</div>

			<div class="form-group">
				{!! Form::label('spell_overview' ,'Spell Overview:') !!}
				{!! Form::text('spell_overview',null, ['class' => 'form-control']) !!}
			</div>
			<hr style="border-color:#fff;">

			<div class="form-group">
				{!! Form::submit($submitButtonText ,['class' => 'btn btn-primary form-control']) !!}
			</div>
		
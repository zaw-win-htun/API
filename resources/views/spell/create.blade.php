@extends('app')

@section('content')
	<div class="container" style="margin-top:30px;">
		<div class="row">
			<div class="panel panel-default">
			  <div class="panel-body">

				  {!! Form::open(['action' => 'SpellController@store']) !!}

				    @include('spell.spell' ,['submitButtonText' => 'Add Spell'])

				  {!! Form::close() !!}

				  @include('errors.list')

			  	</div>
			</div>
		</div>
	</div>
@stop
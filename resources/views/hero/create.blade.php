@extends('app')

@section('content')
	<div class="container" style="margin-top:30px;">
		<div class="row">
			<div class="panel panel-default">
			  <div class="panel-body">

				  {!! Form::open(['action' => 'HeroController@store']) !!}

				    @include('hero.hero' ,['submitButtonText' => 'Add Hero'])

				  {!! Form::close() !!}

				  @include('errors.list')

			  	</div>
			</div>
		</div>
	</div>
@stop
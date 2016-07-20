@extends('app')

@section('content')
		<div class="container" style="margin-top:20px;">
			<div class="row">
				<div class="col-md-4">
					<a href="{{url('hero/create')}} " class="btn btn-primary form-control">Add Hero</a>
				</div>
				<div class="col-md-4">
					
				</div>
				<div class="col-md-4">
					<a href="{{url('spell/create')}} " class="btn btn-primary form-control">Add Spell</a>
				</div>
			</div>
		</div>
		
@stop

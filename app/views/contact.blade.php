@extends('layouts.default')
@section('content')
<div class="container"> 
	{{ HTML::ul($errors->all(), array('class'=>'errors'))}}
	@if(Session::has('success'))
	<div class="alert alert-success">
		<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
		<strong>Success!</strong> {{ Session::get('message', '') }}
	</div>
	@endif
	{{ Form::open(array('class'=>'form-horizontal'))}}
	<div class="form-group">
		{{ Form::label('Email',null,array('class'=>'col-sm-2 control-label'))}}
		<div class="col-md-3">
			{{ Form::text('email',null,array('class'=>'form-control'))}}
		</div>
	</div>
	<div class="form-group">
		{{ Form::label('Message',null,array('class'=>'col-sm-2 control-label'))}}
		<div class="col-md-5">
			{{ Form::textarea('messages',null,array('class'=>'form-control'))}}
		</div>
	</div>
	<div class="form-group">
		<div class="col-sm-offset-2 col-sm-10">
			{{ Form::submit('Send',array('class'=>'btn btn-success'))}}
		</div>
	</div>
	{{ Form::close()}}


	@stop
</div><!--/end of container-->
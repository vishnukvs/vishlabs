@extends('layouts.default')
@section('content')

{{ Form::open()}}
<p>
{{ Form::label('Subject')}}
{{ Form::text('subject')}}
</p>
<p>
{{ Form::label('Message')}}
{{ Form::textarea('message')}}
</p>
<br/><br/>
{{ Form::submit('Send')}}
{{ Form::close()}}
@stop
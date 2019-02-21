@extends('layouts.app')
@section('content')
    <h1>Contact</h1>
    {!! Form::open(['url' => 'contact/submit']) !!}
        <div class="form-group">
            {{Form::label('name', 'Név')}}
            {{Form::text('name','',['class'=>'form-control','placeholder'=>'Név'])}}
        </div>
        <div class="form-group">
            {{Form::label('email', 'E-Mail Cím')}}
            {{Form::text('email','',['class'=>'form-control','placeholder'=>'E-mail cím'])}}
        </div>
        <div class="form-group">
            {{Form::label('message', 'Message')}}
            {{Form::textarea('message','',['class'=>'form-control','placeholder'=>'Üzenet'])}}
        </div>
        <div>
            {{Form::submit('Submit',['class'=>'btn btn-primary'])}}
        </div>
    {!! Form::close() !!}
@endsection
@extends('layouts.app')
@section('content')
{!! Form::open(['action' => 'UsersController@store', 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
    <div class="form-group">
        {{Form::label('name', 'Name')}}
        {{Form::text('name', '', ['class' => 'form-control', 'placeholder' => 'Name'])}}
    </div> 


    <div class="form-group">
        {{Form::label('email', 'E-Mail Address')}}
        {{Form::text('email', '',['class' => 'form-control', 'placeholder' => 'E-Mail'])}}
    </div>

    <div class="form-group">
        {{Form::label('password', 'Password')}}
        {{Form::password('password', ['class' => 'form-control', 'placeholder' => 'Password'])}}
    </div>

    {{Form::submit('Submit', ['class'=>'btn btn-primary'])}}
{!! Form::close() !!}


@endsection
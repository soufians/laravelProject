@extends('layouts.app')
@section('content')
    <h3>Edit User:</h3>
    {!! Form::open(['action' => ['UsersController@update', $user->id],'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
        <div class="form-group">
            {{Form::label('name', 'Name')}}
            {{Form::text('name', $user->name, ['class' => 'form-control', 'placeholder' => 'Name'])}}
        </div>
        <div class="form-group">
                {{Form::label('email', 'E-Mail Address')}}
                {{Form::text('email', $user->email,['class' => 'form-control', 'placeholder' => 'E-Mail'])}}
        </div>
        {{Form::hidden('_method','PUT')}}
        {{Form::submit('Submit', ['class'=>'btn btn-primary'])}}
    {!! Form::close() !!}
@endsection
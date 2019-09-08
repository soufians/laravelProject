@extends('layouts.app')
@section('content')
    {{-- <a href="{{url('/posts')}}">Go Back</a> --}}
    <h1>{{$post->title}}</h1>
    <div>
        {!!$post->content!!}
    </div>
    <hr>
    <small>Written on {{$post->created_at}}</small>
    <hr>
    <a href="{{url('/posts')}}/{{$post->id}}/edit" class="btn btn-default">Edit</a>
   
    {!!Form::open(['action' => ['PostsController@destroy', $post->id], 'method' => 'POST', 'class' => 'pull-right'])!!}
    {{Form::hidden('_method', 'DELETE')}}
    {{Form::submit('Delete', ['class' => 'btn btn-danger'])}}
    {!!Form::close()!!}
@endsection
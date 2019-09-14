@extends('layouts.app')
@section('content')
    <h1>{{$post->title}}</h1>
    <div>
        {!!$post->content!!}
    </div>
    <hr>
    {{-- by {{$post->user->name}} --}}
    <small>Written on {{$post->created_at}} </small> 

    <hr>
    @if(!Auth::guest())
        @if(Auth::user()->id == $post->user_id)
            <a href="{{url('/posts')}}/{{$post->id}}/edit" class="btn btn-default">Edit</a>
        
            {!!Form::open(['action' => ['PostsController@destroy', $post->id], 'method' => 'POST', 'class' => 'pull-right'])!!}
            {{Form::hidden('_method', 'DELETE')}}
            {{Form::submit('Delete', ['class' => 'btn btn-danger'])}}
            {!!Form::close()!!}
        @endif
    @endif
@endsection
@extends('layouts.app')
@section('content')
    <div class="row">
        <div class="col-md-10"><h2>Posts</h2></div>
        <div class="col-md-2" style="margin: 10px 0px; text-align: end;"><a style="color: white; text-decoration: none;" class='btn btn-success' href="{{url('posts/create')}}">Create Post</a></div>
    </div>    
    @if(count($posts) > 0)
        @foreach($posts as $post)
            <div class="well">
            <h3><a href="{{url('/posts')}}/{{$post->id}}"> {{$post->title}}</a></h3>
            <small>Written on {{$post->created_at}}</small>
            </div>
        @endforeach
        {{$posts->links()}} {{-- for pagination --}}
         
    @else 
        <p>No Posts Found</p>
    @endif

@endsection

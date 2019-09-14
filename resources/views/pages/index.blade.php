@extends('layouts.app')
@section('content')
    <div class="row">
        <div class="col-md-10"><h2>Posts</h2></div>
    </div>    
    @if(count($posts) > 0)
        @foreach($posts as $post)
            <div class="well">
            <h3><a href="{{url('/posts')}}/{{$post->id}}"> {{$post->title}}</a></h3>
            <small>Written on {{$post->created_at}}</small>
                 {{-- by {{$post->user->name}} --}}
            </div>
        @endforeach
        {{-- for pagination --}}
        {{-- {{$posts->links()}} --}}
         
    @else 
        <p>No Posts Found</p>
    @endif

@endsection

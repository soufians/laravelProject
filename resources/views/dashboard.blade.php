@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12" style="padding-left: 0px; padding-right: 30px;">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <b style="font-size: 24px;">My Posts</b>
                    <a style="color: white; text-decoration: none; float: right;" class='btn btn-success' href="{{url('posts/create')}}">Create Post</a>
                </div>  
                <div>
                    @if(count($posts) > 0)
                        <table class="table">
                            @foreach ($posts as $post)
                            <tr>
                                <td><a href="{{url('/posts')}}/{{$post->id}}"><h4>{{$post->title}}</h4> </a></td>
                                <td><a href="{{url('/posts/')}}/{{$post->id}}/edit" class="btn btn-primary">Edit</a></td>
                                <td>
                                    {!!Form::open(['action' => ['PostsController@destroy', $post->id], 'method' => 'POST', 'class' => 'pull-right'])!!}
                                    {{Form::hidden('_method', 'DELETE')}}
                                    {{Form::submit('Delete', ['class' => 'btn btn-danger'])}}
                                    {!!Form::close()!!}
                                </td>
                            </tr>
                            @endforeach
                        </table>
                    @else 
                        <p>You have no posts</p>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

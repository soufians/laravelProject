@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12" style="padding-left: 0px; padding-right: 30px;">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <b style="font-size: 24px;">Users</b>
                    <a style="color: white; text-decoration: none; float: right;" class='btn btn-success' href="{{url('users/create')}}">Create User</a>
                </div>  
                <div>
                    @if(count($users) > 0)
                        <table class="table">
                            @foreach ($users as $user)
                            <tr>
                                <td><a href="{{url('/user')}}/{{$user->id}}"><h4>{{$user->name}}</h4> </a></td>
                                <td><a href="{{url('/users/')}}/{{$user->id}}/edit" class="btn btn-primary">Edit</a></td>
                                <td>
                                        {!!Form::open(['action' => ['UsersController@destroy', $user->id], 'method' => 'POST', 'class' => 'pull-right'])!!}
                                        {{Form::hidden('_method', 'DELETE')}}
                                        {{Form::submit('Delete', ['class' => 'btn btn-danger'])}}
                                        {!!Form::close()!!}
                                    </td>
                                </tr>
                            @endforeach
                        </table>
                    @else 
                        <h4>There is no user!</h4>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

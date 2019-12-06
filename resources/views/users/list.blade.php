@extends('layouts.app')
@section('content')
    <div class="card" style="width: 100%;">
        <div class="card-header">
            <h2>List User</h2>
        </div>
        <table class="table table-striped">
            <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Name</th>
                <th scope="col">Email</th>
                <th scope="col">Role</th>
                <th scope="col"></th>
            </tr>
            </thead>
            <tbody>
            @foreach($users as $key => $user)
                <tr>
                    <th scope="row">{{++$key}}</th>
                    <td>{{$user->name}}</td>
                    <td>{{$user->email}}</td>
                    <td>
                        @if($user->role === \App\Http\RoleInterface::ADMIN)
                            Admin
                        @else
                            Guest
                        @endif
                    </td>
                    <td><a class="btn btn-warning" href="{{route('users.edit', $user->id)}}">EDIT</a></td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection

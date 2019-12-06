@extends('layouts.app')
@section('content')
    <div class="col-12">
        <form method="post" action="{{route('users.updateInformation', $user->id)}}">
            @csrf
            <h2>User Profile</h2>

            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" class="form-control" id="name" value="{{$user->name}}" name="name">
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" class="form-control" id="email" disabled value="{{$user->email}}">
            </div>
            <div class="form-group">
                <button class="btn btn-primary" type="submit">Update</button>
                <a class="btn btn-danger" href="{{route('users.changePassword')}}">Change Password</a>
                <a class="btn btn-warning" href="{{route('index')}}">Cancel</a>
            </div>
        </form>
    </div>
@endsection

@extends('layouts.app')
@section('content')
    <div class="col-12">
        <form method="post" action="{{route('users.update', $user->id)}}">
            @csrf
            <h2>User Profile</h2>

            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" class="form-control" id="name" value="{{$user->name}}" name="name"
                @if($errors->has('name'))
                    style="border: solid red"
                    @endif
                >
                @if($errors->has('name'))
                    <p class="text-danger">{{$errors->first('name')}}</p>
                @endif
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" class="form-control" id="email" disabled value="{{$user->email}}">
            </div>
            <div class="form-group">
                <label for="role">Role</label>
                <select class="form-control" id="role" name="role">
                    <option @if($user->role === \App\Http\RoleInterface::ADMIN)
                            selected
                            @endif value="1">Admin
                    </option>
                    <option value="2" @if($user->role === \App\Http\RoleInterface::GUEST)
                    selected
                        @endif>Guest
                    </option>
                </select>
            </div>
            <div class="form-group">
                <button class="btn btn-primary" type="submit">Update</button>
                <a class="btn btn-warning" href="{{route('index')}}">Cancel</a>
            </div>
        </form>
    </div>
@endsection

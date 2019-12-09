@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="col-12">
            <div class="row">
                <div class="col-8">
                    <form method="post" action="{{route('categories.store')}}" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label>Name Category</label>
                            <input type="text" class="form-control" placeholder="Enter Name Category" name="name"
                                   @if($errors->has('name'))
                                   style="border: solid red"
                                @endif
                            >
                            @if($errors->has('name'))
                                <p class="text-danger">{{$errors->first('name')}}</p>
                            @endif
                        </div>
                        <div class="form-group">
                            <label>Title Category</label>
                            <input type="text" class="form-control" placeholder="Enter Title Category" name="title"
                                   @if($errors->has('title'))
                                   style="border: solid red"
                                @endif
                            >
                            @if($errors->has('title'))
                                <p class="text-danger">{{$errors->first('title')}}</p>
                            @endif
                        </div>
                        <div class="form-group">
                            <label>Category photos</label>
                            <input type="file" class="form-control-file" name="image">
                        </div>

                        <button type="submit" class="btn btn-primary">Create</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

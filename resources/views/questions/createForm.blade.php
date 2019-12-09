@extends('layouts.app')
@section('content')
    <form method="post" action="{{route('questions.store')}}">
        @csrf
        <h1>Thêm mới câu hỏi</h1>
        <div class="form-group">
            <label>Question</label>
            <input type="text" class="form-control" name="question">
        </div>

        <div class="form-group">
            <label>Category</label>
            <select name="category_id">
           @foreach($categories as $key=> $category)
               <option value="{{$category->id}}">{{$category->name}}</option>
               @endforeach
            </select>
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
    @endsection

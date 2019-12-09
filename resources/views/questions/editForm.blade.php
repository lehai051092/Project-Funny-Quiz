@extends('layouts.app')
@section('content')
    <form method="post" action="{{route('questions.update',$question->id)}}">
        @csrf
        <h1>Chỉnh sửa câu hỏi</h1>
        <div class="form-group">
            <label>Question</label>
            <input type="text" class="form-control" name="question" value="{{$question->question}}">
        </div>
        <div class="form-group">
            <label>Category</label>
            <select name="category_id">
                @foreach($categories as $key=> $category)
                    <option
                        @if($question->category_id==$category->id)
                        selected
                        @endif
                        value="{{$category->id}}">{{$category->name}}</option>
                @endforeach
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection

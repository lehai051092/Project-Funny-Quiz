@extends('layouts.app')
@section('content')
    <form method="post" action="{{route('questions.update',$question->id)}}">
        @csrf
        <h1>Chỉnh sửa câu hỏi</h1>
        <div class="form-group">
            <label>Question</label>
            <input
                @if($errors->has('question'))
                style="border: solid 1px red"
                @endif
                type="text" class="form-control" name="question" value="{{$question->question}}">
            @if($errors->has('question'))
                <p class="text-danger">{{$errors->first('question')}}</p>
            @endif
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

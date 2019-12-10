@extends('layouts.app')
@section('content')
    <form method="post" action="{{route('questions.store',$category->id)}}">
        @csrf
        <h1>Thêm mới câu hỏi</h1>
        <div class="form-group">
            <label>Question</label>
            <input
                @if($errors->has('question'))
                style="border: solid 1px red"
                @endif
                type="text" class="form-control" name="question">
            @if($errors->has('question'))
                <p class="text-danger">{{$errors->first('question')}}</p>
            @endif

        </div>

        <div class="form-group">
            <label>Category</label>
            <select name="category_id">
                <option
                    @if($questions)
                    @if($questions->category_id === $questions->category->id)
                    selected
                    @endif
                    @endif
                    value="{{$category->id}}">{{$category->name}}</option>
            </select>
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection

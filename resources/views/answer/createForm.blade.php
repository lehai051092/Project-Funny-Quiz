@extends('layouts.app')
@section('content')
    <form method="post" action="{{route('answers.store')}}">
        @csrf
        <h1>Thêm mới câu trả lời</h1>
        <div class="form-group">
            <label>Answer</label>
            <input type="text" class="form-control" name="answer">
        </div>

        <div class="form-group">
            <label>Question</label>
            <select name="question_id">
                @foreach($questions as $key=> $question)
                    <option value="{{$question->id}}">{{$question->question}}</option>
                @endforeach
            </select>
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection

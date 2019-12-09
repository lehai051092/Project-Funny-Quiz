@extends('layouts.app')
@section('content')
    <form method="post" action="{{route('answers.update',$answer->id)}}">
        @csrf
        <h1>Chỉnh sửa câu trả lời</h1>
        <div class="form-group">
            <label>Answer</label>
            <input type="text" class="form-control" name="answer" value="{{$answer->answer}}">
        </div>

        <div class="form-group">
            <label>Question</label>
            <select name="question_id">
                @foreach($questions as $key=> $question)
                    <option
                        @if($answer->question_id===$question->id)
                            selected
                        @endif
                        value="{{$question->id}}">{{$question->question}}</option>
                @endforeach
            </select>
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection

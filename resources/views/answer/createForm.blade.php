@extends('layouts.app')
@section('content')
    <form method="post" action="{{route('answers.store',$question->id)}}">
        @csrf
        <h1>Thêm mới câu trả lời</h1>
        <div class="form-group">
            <label>Answer</label>
            <input
                @if($errors->has('answer'))
                style="border: solid 1px red"
                @endif

                type="text" class="form-control" name="answer">
            @if($errors->has('answer'))
                <p class="text-danger">{{$errors->first('answer')}}</p>
            @endif
        </div>
        <div class="form-group">
            <label>Question</label>
            <select name="question_id">
                <option
                    @if($answers)
                    @if($answers->question_id===$answers->question->id)
                    selected
                    @endif
                    @endif
                    value="{{$question->id}}">{{$question->question}}</option>
            </select>

        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection

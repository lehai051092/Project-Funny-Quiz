@extends('layouts.app')
@section('content')
    <a href="{{route('questions.create')}}">
        <button type="button" class="btn btn-link">Thêm mới</button>
    </a>
    <ul class="list-group">
        @foreach($questions as $question)
            <li class="list-group-item active">{{$question->question}}</li>

            @foreach($answers as $answer)
                @if($question->id===$answer->question_id)
                    <input type="radio" name="answer">{{$answer->answer}}
                    <a href="{{route('answers.delete',$answer->id)}}" onclick="return confirm('Bạn có chắn chắn muốn đáp án này xóa không?')">Delete</a>
                    <a href="{{route('answers.edit',$answer->id)}}">Edit</a><br>
                @endif
            @endforeach
            <a href="{{route('answers.create')}}">Thêm mới</a><br>



            {{--        <li class="list-group-item">Morbi leo risus</li>--}}
            {{--        <li class="list-group-item">Porta ac consectetur ac</li>--}}
            {{--        <li class="list-group-item">Vestibulum at eros</li>--}}
            <a href="{{route('questions.delete', $question->id)}}" onclick="return confirm('bạn có muốn xóa câu hỏi này không?')">Delete</a>
            <a href="{{route('questions.edit', $question->id)}}">Edit</a>
        @endforeach
    </ul>

@endsection

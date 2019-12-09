@extends('layouts.app')
@section('content')
    @can('crud-users')
        <a href="{{route('questions.create')}}">
            <button type="button" class="btn btn-link">Thêm mới</button>
        </a>
    @endcan
    <ul class="list-group">
        @foreach($questions as $question)
            <li class="list-group-item active">{{$question->question}}</li>
            @foreach($answers as $answer)
                @if($question->id===$answer->question_id)
                    <input type="radio" name="answer">{{$answer->answer}}<br>
                    @can('crud-users')
                        <a href="{{route('answers.delete',$answer->id)}}"
                           onclick="return confirm('Bạn có chắn chắn muốn đáp án này xóa không?')"> <i
                                class="fa fa-trash"></i></a>
                        <a href="{{route('answers.edit',$answer->id)}}"><i class="fa fa-edit"></i></a><br>
                    @endcan
                @endif
            @endforeach
            @can('crud-users')
                <a href="{{route('answers.create',$question->id)}}"><i class="fa fa-plus"></i> Câu trả lời</a><br>
                <a href="{{route('questions.delete', $question->id)}}">
                    <button type="button" class="btn btn-danger"><i class="fa fa-trash"></i> Câu hỏi</button>
                </a>
                <a href="{{route('questions.edit', $question->id)}}">
                    <button type="button" class="btb btn"><i class="fa fa-edit"></i> Câu hỏi</button>
                </a>
            @endcan
        @endforeach
    </ul>
    <div class="text-center">
        <a href="">
            <button type="button" class="btn btn-light">Submit and Finish</button>
        </a>
    </div>
    {{--    <div class="modal-header">--}}
    {{--        @foreach($questions as $key=> $question)--}}
    {{--            <h3><span class="label label-danger" id="qid">{{++$key}}</span>{{$question->question}}</h3>--}}

    {{--    </div>--}}
    {{--    <div class="quiz" id="quiz" data-toggle="buttons">--}}
    {{--        @foreach($answers as $answer)--}}
    {{--            @if($question->id===$answer->question_id)--}}
    {{--                <label class="element-animation1 btn btn-lg btn-success btn-block"><span class="btn-label"><i--}}
    {{--                            class="glyphicon glyphicon-chevron-right"></i></span> <input type="radio"--}}
    {{--                                                                                         name="answer">{{$answer->answer}}--}}
    {{--                </label>--}}
    {{--                @can('crud-users')--}}
    {{--                    <a href="{{route('answers.delete',$answer->id)}}"--}}
    {{--                       onclick="return confirm('Bạn có chắn chắn muốn đáp án này xóa không?')"> <i--}}
    {{--                            class="fa fa-trash"></i></a>--}}
    {{--                    <a href="{{route('answers.edit',$answer->id)}}"><i class="fa fa-edit"></i></a><br>--}}
    {{--                @endcan--}}
    {{--            @endif--}}
    {{--        @endforeach--}}
    {{--    </div>--}}
    {{--    @can('crud-users')--}}
    {{--                <a href="{{route('answers.create',$question->id)}}"><i class="fa fa-plus"></i> Câu trả lời</a><br>--}}
    {{--                <a href="{{route('questions.delete', $question->id)}}">--}}
    {{--                    <button type="button" class="btn btn-danger"><i class="fa fa-trash"></i> Câu hỏi</button>--}}
    {{--                </a>--}}
    {{--                <a href="{{route('questions.edit', $question->id)}}">--}}
    {{--                    <button type="button" class="btb btn"><i class="fa fa-edit"></i> Câu hỏi</button>--}}
    {{--                </a>--}}
    {{--                @endcan--}}
    {{--    @endforeach--}}
@endsection

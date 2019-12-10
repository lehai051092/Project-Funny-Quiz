@extends('layouts.app')
@section('content')
    @can('crud-users')
        <a href="{{route('questions.create',$category->id )}}">
            <button type="button" class="btn btn-link">Thêm mới</button>
        </a>
    @endcan
    <h1>Bộ câu hỏi</h1>
    <div class="container-fluid bg-info">
        @foreach($questions as $key=>$question)
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h3><span class="label label-warning" id="qid">{{++$key}}</span> {{$question->question}}</h3>
                    </div>
                    <div class="modal-body">
                        <div class="col-xs-3 col-xs-offset-5">
                            <div id="loadbar" style="display: none;">
                                <div class="blockG" id="rotateG_01"></div>
                                <div class="blockG" id="rotateG_02"></div>
                                <div class="blockG" id="rotateG_03"></div>
                                <div class="blockG" id="rotateG_04"></div>
                                <div class="blockG" id="rotateG_05"></div>
                                <div class="blockG" id="rotateG_06"></div>
                                <div class="blockG" id="rotateG_07"></div>
                                <div class="blockG" id="rotateG_08"></div>
                            </div>
                        </div>
                        @foreach($answers as $answer)
                            @if($question->id===$answer->question_id)
                                <div class="quiz" id="quiz" data-toggle="buttons">
                                    <label class="element-animation1 btn btn-lg btn-success btn-block"><span
                                            class="btn-label"><i class="glyphicon glyphicon-chevron-right"></i></span>
                                        <input
                                            type="radio" name="answer">{{$answer->answer}}</label>
                                </div>
                                @can('crud-users')
                                    <a href="{{route('answers.delete',$answer->id)}}"
                                       onclick="return confirm('Bạn có chắn chắn muốn đáp án này xóa không?')"> <i
                                            class="fa fa-trash"></i></a>
                                    <a href="{{route('answers.edit',$answer->id)}}"><i class="fa fa-edit"></i></a><br>
                                @endcan
                            @endif

                        @endforeach
                    @can('crud-users')
                            <a href="{{route('answers.create',$question->id)}}"><i class="fa fa-plus"></i> Câu trả
                                lời</a><br>
                            <a href="{{route('questions.delete', $question->id)}}">
                                <button type="button" class="btn btn-danger"><i class="fa fa-trash"></i> Câu hỏi
                                </button>
                            </a>
                            <a href="{{route('questions.edit', $question->id)}}">
                                <button type="button" class="btb btn"><i class="fa fa-edit"></i> Câu hỏi</button>
                            </a>
                        @endcan
                    </div>
                    <div class="modal-footer text-muted">
                        <span id="answer"></span>
                    </div>
                </div>
            </div>

        @endforeach


    </div>
@endsection

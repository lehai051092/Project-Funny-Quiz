@extends('layouts.app')
@section('content')
    <div class="text-center">
        @if($message)
            <h1>{{$message}}</h1>
        @endif
        <a href="{{route('index')}}" class="btn btn-warning">Back</a>
    </div>
@endsection

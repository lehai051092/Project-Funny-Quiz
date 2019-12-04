@extends('layouts.app')
@section('content')
    <div class="row">
        @foreach($categories as $category)
            <div class="card">
                <div class="card-header">
                    {{$category->name}}
                </div>
                <div class="card-body">

                </div>
            </div>
        @endforeach
    </div>

@endsection

@extends('layouts.app')
@section('content')
    @can('crud-users')
            <div class=" text-center">
                <a href="{{route('categories.create')}}" class="btn btn-primary"><i class="fa fa-plus"> Create</i></a>
            </div>
            @endcan
            <div class="fh5co-narrow-content">
                @foreach($categories as $key=>$category)
                    <div class="col-md-3 col-sm-6 col-padding animate-box" data-animate-effect="fadeInLeft">
                        <div class="blog-entry">
                            <a href="#" class="blog-img"><img src="{{asset('storage/'.$category->image)}}"
                                                              class="img-responsive"
                                                              alt="Free HTML5 Bootstrap Template by FreeHTML5.co"></a>
                            <div class="desc">
                                <h3><a href="{{route('questions.list',$category->id)}}">{{$category->name}}</a></h3>
                                <span><small>by Admin team ??? </small> / <small> Web Design </small> / <small> <i
                                            class="icon-comment"></i> 14</small></span>
                                <p>{{$category->title}}</p>
                                @can('crud-users')
                                <a href="{{route('categories.destroy',$category->id)}}" style="color: red"
                                   onclick="return confirm('Are you sure???')">Delete <i class="icon-arrow-right3"></i></a>
                                    @endcan
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
@endsection

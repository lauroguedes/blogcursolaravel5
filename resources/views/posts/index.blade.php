@extends('template.index')

@section('title')
    Blog - Curso Laravel
@endsection

@section('content')
    @foreach($posts as $post)
        <div class="row">
            <div class="col-md-7">
                <a href="#">
                    <img class="img-responsive" src="http://placehold.it/700x300" alt="">
                </a>
            </div>
            <div class="col-md-5">
                <h3>{{ $post->title }}</h3>
                <p>{{ $post->content }}</p>
                <a class="btn btn-primary" href="#">Ver post <span class="glyphicon glyphicon-chevron-right"></span></a>
            </div>
            <p>
                @foreach($post->tags as $tag)
                    <span> {{ $tag->name }} </span>
                @endforeach
            </p>
            <h3>Coomments</h3>
            @foreach($post->comments as $comment)
                <strong>Name:</strong> {{ $comment->name }} <br>
                <strong>Comment:</strong> {{ $comment->comment }}
            @endforeach
            <hr>
        </div>
        <hr>
    @endforeach
@endsection
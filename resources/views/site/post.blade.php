@extends('template.index')

@section('title')
    Blog - Curso Laravel - {{ $article['title'] }}
@endsection

@section('content')
    <div class="row">
        <div class="col-md-12">
            <h2>{{ $article['title'] }}</h2>
            <a href="#">
                <img class="img-responsive" src="{{ $article['image'] }}" alt="">
            </a>
        </div>
        <div class="col-md-12">
            <h4>{{ $article['subtitle'] }}</h4>
            <p>{{ $article['description'] }}</p>
        </div>
    </div>
@endsection
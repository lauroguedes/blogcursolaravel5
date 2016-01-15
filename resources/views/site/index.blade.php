@extends('template.index')

@section('title')
    Blog - Curso Laravel
@endsection

@section('content')

<!-- Page Heading -->
<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">Cabeçalho da página</h1>
    </div>
</div>
<!-- /.row -->

    @foreach($posts as $post)
        <div class="row">
            <div class="col-md-7">
                <a href="#">
                    <img class="img-responsive" src="{{ $post['image'] }}" alt="">
                </a>
            </div>
            <div class="col-md-5">
                <h3>{{ $post['title'] }}</h3>
                <h4>{{ $post['subtitle'] }}</h4>
                <p>{{ $post['description'] }}</p>
                <a class="btn btn-primary" href="#">Ver post <span class="glyphicon glyphicon-chevron-right"></span></a>
            </div>
        </div>
        <hr>
    @endforeach

<!-- Pagination -->
<div class="row text-center">
    <div class="col-lg-12">
        <ul class="pagination">
            <li>
                <a href="#">&laquo;</a>
            </li>
            <li class="active">
                <a href="#">1</a>
            </li>
            <li>
                <a href="#">2</a>
            </li>
            <li>
                <a href="#">3</a>
            </li>
            <li>
                <a href="#">4</a>
            </li>
            <li>
                <a href="#">5</a>
            </li>
            <li>
                <a href="#">&raquo;</a>
            </li>
        </ul>
    </div>
</div>
<!-- /.row -->

@endsection
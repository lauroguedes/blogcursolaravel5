@extends('template.index')

@section('title')
    Blog - Admin
@endsection

@section('content')
    <h4>Painel administrativo - Editar - {{ $post->title }}</h4>

    @if($errors->any())
        <ul>
            @foreach($errors->all() as $error)
                <li class="alert alert-success">{{ $error }}</li>
            @endforeach
        </ul>
    @endif

    {!! Form::model($post, ['route'=>['admin.posts.update', $post->id], 'method'=>'put']) !!}

    @include('admin.posts._form')

    <div class="form-group">
        {!! Form::label('tags', 'Tags') !!}
        {!! Form::text('tags', $post->tagList, ['class' => 'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::submit('Edit Post', ['class'=>'btn btn-primary']) !!}
    </div>

    {!! Form::close() !!}

@endsection
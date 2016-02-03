@extends('template.index')

@section('title')
    Blog - Admin
@endsection

@section('content')
    <h4>Painel administrativo - Criar</h4>

    @if($errors->any())
        <ul>
            @foreach($errors->all() as $error)
                <li class="alert alert-success">{{ $error }}</li>
            @endforeach
        </ul>
    @endif

    {!! Form::open(['route'=>'admin.posts.store', 'method'=>'post']) !!}

    <div class="form-group">
        {!! Form::label('title', 'Title') !!}
        {!! Form::text('title', null, ['class'=>'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('content', 'Content') !!}
        {!! Form::textarea('content', null, ['class'=>'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::submit('Create Post', ['class'=>'btn btn-primary']) !!}
    </div>

    {!! Form::close() !!}

@endsection
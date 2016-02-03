@extends('template.index')

@section('title')
    Blog - Admin
@endsection

@section('content')
    <h4>Painel administrativo</h4>

    <table class="table">
        <tr>
            <th>ID</th>
            <th>Title</th>
            <th>Actions</th>
        </tr>
        @foreach($posts as $post)
            <tr>
                <td>{{ $post->id }}</td>
                <td>{{ $post->title }}</td>
                <td>
                    <a href="#" class="btn btn-success">Editar</a>
                    <a href="#" class="btn btn-danger">Excluir</a>
                </td>
            </tr>
        @endforeach
    </table>

    {!! $posts->render() !!}
@endsection
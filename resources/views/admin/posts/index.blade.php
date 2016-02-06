@extends('template.index')

@section('title')
    Blog - Admin
@endsection

@section('content')
    <h4>Painel administrativo</h4>

    <a href="{{ route('admin.posts.create') }}" class="btn btn-success btn-lg">Create new Post</a>

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
                    <a href="{{ route('admin.posts.edit', ['id' => $post->id]) }}" class="btn btn-success">Editar</a>
                    <a href="{{ route('admin.posts.destroy', ['id' => $post->id]) }}" class="btn btn-danger">Excluir</a>
                </td>
            </tr>
        @endforeach
    </table>

    {!! $posts->render() !!}
@endsection
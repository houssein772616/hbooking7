@extends('layouts.admin')

@section('content')
    <h1>Articles de Blog</h1>
    <a href="{{ route('admin.blogs.create') }}">Ajouter un nouvel article</a>
    <table>
        <thead>
            <tr>
                <th>Titre</th>
                <th>Date de Publication</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($blogs as $blog)
                <tr>
                    <td>{{ $blog->title }}</td>
                    <td>{{ $blog->published_at }}</td>
                    <td>
                        <a href="{{ route('admin.blogs.show', $blog->id) }}">Voir</a>
                        <a href="{{ route('admin.blogs.edit', $blog->id) }}">Modifier</a>
                        <form action="{{ route('admin.blogs.destroy', $blog->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit">Supprimer</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection

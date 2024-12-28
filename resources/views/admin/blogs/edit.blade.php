@extends('layouts.admin')

@section('content')
    <h1>Modifier l'Article de Blog</h1>
    <form action="{{ route('admin.blogs.update', $blog->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div>
            <label for="title">Titre</label>
            <input type="text" id="title" name="title" value="{{ $blog->title }}" required>
        </div>
        <div>
            <label for="content">Contenu</label>
            <textarea id="content" name="content" required>{{ $blog->content }}</textarea>
        </div>
        <div>
            <label for="image">Image</label>
            <input type="file" id="image" name="image">
            @if($blog->image)
                <img src="{{ asset('storage/' . $blog->image) }}" alt="Image" width="100">
            @endif
        </div>
        <div>
            <label for="published_at">Date de Publication</label>
            <input type="date" id="published_at" name="published_at" value="{{ $blog->published_at }}" required>
        </div>
        <button type="submit">Mettre à Jour</button>
    </form>
@endsection

@extends('layouts.admin')

@section('content')
    <h1>Ajouter un Article de Blog</h1>
    <form action="{{ route('admin.blogs.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div>
            <label for="title">Titre</label>
            <input type="text" id="title" name="title" required>
        </div>
        <div>
            <label for="content">Contenu</label>
            <textarea id="content" name="content" required></textarea>
        </div>
        <div>
            <label for="image">Image</label>
            <input type="file" id="image" name="image">
        </div>
        <div>
            <label for="published_at">Date de Publication</label>
            <input type="date" id="published_at" name="published_at" required>
        </div>
        <button type="submit">Ajouter</button>
    </form>
@endsection

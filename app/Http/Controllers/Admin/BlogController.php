<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index()
    {
        $blogs = Blog::all();
        return view('admin.blogs.index', compact('blogs'));
    }

    public function create()
    {
        return view('admin.blogs.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required',
            'image' => 'nullable|image|mimes:jpeg,jpg,png,gif,svg,webp|max:2048', // Accepter plusieurs types d'images
            'published_at' => 'required|date',
        ]);

        $blog = new Blog($request->except('image'));

        if ($request->hasFile('image')) {
            // Enregistrer l'image dans le dossier 'public/storage/images/blogs'
            $imagePath = $request->file('image')->store('images/blogs', 'public');
            $blog->image = $imagePath;
        }

        $blog->save();

        return redirect()->route('admin.blogs.index')->with('success', 'Article de blog ajouté avec succès.');
    }

    public function show(Blog $blog)
    {
        return view('admin.blogs.show', compact('blog'));
    }

    public function edit(Blog $blog)
    {
        return view('admin.blogs.edit', compact('blog'));
    }

    public function update(Request $request, Blog $blog)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required',
            'image' => 'nullable|image',
            'published_at' => 'required|date',
        ]);

        $blog->fill($request->except('image'));

        if ($request->hasFile('image')) {
            $blog->image = $request->file('image')->store('images/blogs', 'public');
        }

        $blog->save();

        return redirect()->route('admin.blogs.index')->with('success', 'Article de blog mis à jour avec succès.');
    }

    public function destroy(Blog $blog)
    {
        $blog->delete();
        return redirect()->route('admin.blogs.index')->with('success', 'Article de blog supprimé avec succès.');
    }
}

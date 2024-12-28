<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    // Méthode pour afficher la liste des blogs
    public function index()
    {
        // Récupérer tous les blogs
        $blogs = Blog::all();

        // Retourner la vue avec les données des blogs
        return view('blogs.index', compact('blogs'));
    }

    // Méthode pour stocker les données du formulaire dans la base de données
    public function store(Request $request)
    {
        // Valider les données envoyées par le formulaire
        $validatedData = $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'published_at' => 'required|date',
        ]);

        // Si une image est envoyée, la stocker
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('images', 'public');
            $validatedData['image'] = $imagePath;
        }

        // Créer un nouvel article de blog avec les données validées
        Blog::create($validatedData);

        // Rediriger vers la page d'accueil des blogs avec un message de succès
        return redirect()->route('admin.blogs.index')->with('success', 'Article de blog ajouté avec succès');
    }
}

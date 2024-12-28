<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Contact; // Assurez-vous d'importer le modèle Contact
use Illuminate\Http\Request;

class ContactController extends Controller
{
    // Méthode pour afficher la liste des contacts
    public function index()
    {
        $contacts = Contact::all(); // Récupérer tous les contacts
        return view('admin.contacts.index', compact('contacts'));
    }

    // Méthode pour afficher le formulaire de création
    public function create()
    {
        return view('admin.contacts.create');
    }

    // Méthode pour stocker un nouveau contact
    public function store(Request $request)
    {
        // Validation et stockage du contact
    }

    // Méthode pour afficher un contact spécifique
    public function show($id)
    {
        $contact = Contact::findOrFail($id); // Trouver le contact ou échouer
        return view('admin.contacts.show', compact('contact'));
    }

    // Méthode pour afficher le formulaire d'édition
    public function edit($id)
    {
        $contact = Contact::findOrFail($id);
        return view('admin.contacts.edit', compact('contact'));
    }

    // Méthode pour mettre à jour un contact
    public function update(Request $request, $id)
    {
        // Validation et mise à jour du contact
    }

    // Méthode pour supprimer un contact
    public function destroy($id)
    {
        // Suppression du contact
    }
}

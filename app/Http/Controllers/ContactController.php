<?php
// App\Http\Controllers\ContactController.php
namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index()
    {
        // Récupère tous les contacts et les passe à la vue
        $contacts = Contact::all();
        return view('admin.contacts.index', compact('contacts'));
    }
    public function store(Request $request)
    {
        // Validation des données
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone_number' => 'required|string|max:15',
            'message' => 'required|string',
        ]);

        // Stocker les données dans la base
        Contact::create($validated);

        // Rediriger avec un message de succès
        return redirect()->back()->with('success', 'Votre message a été envoyé avec succès!');
    }
    public function showContactForm()
    {
        return view('contact'); // Assurez-vous que le fichier "form.blade.php" existe dans "resources/views/contacts/"
    }
}

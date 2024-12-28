<?php
namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;
use App\Models\Appointment;
use App\Models\Contact;

class WelcomeController extends Controller
{
    public function index()
    {
        // Assurez-vous que vous récupérez bien les blogs
        $blogs = Blog::latest()->take(3)->get();

        // Passez les blogs à la vue
        return view('welcome', compact('blogs'));
    }
    public function store(Request $request)
    {
        // Validation des données
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone_number' => 'required|string|max:20',
            'appointment_date' => 'required|date',
            'appointment_time' => 'required',
            'reason' => 'required|string',
        ]);

        // Créer un nouveau rendez-vous
        Appointment::create([
            'name' => $validatedData['name'],
            'email' => $validatedData['email'],
            'phone_number' => $validatedData['phone_number'],
            'appointment_date' => $validatedData['appointment_date'],
            'appointment_time' => $validatedData['appointment_time'],
            'reason' => $validatedData['reason'],
        ]);

        // Redirection après la soumission
        return redirect()->back()->with('success', 'Votre rendez-vous a été pris avec succès!');
    }
    public function submitContactForm(Request $request)
    {
        // Validation des données
        $request->validate([
            'name' => 'required|max:255',
            'email' => 'required|email',
            'phone_number' => 'required|digits_between:8,15', // Validation pour le numéro de téléphone
            'message' => 'required',
        ]);
    
        // Traitement du message (envoyer un email ou l'enregistrer en base de données)
        Mail::send('emails.contact', [
            'name' => $request->name,
            'email' => $request->email,
            'phone_number' => $request->phone_number,
            'messageContent' => $request->message,
        ], function($message) use ($request) {
            $message->to('admin@clinique.com') // Remplace par ton email d'administration
                    ->subject('Nouveau message de contact');
        });
    
        // Rediriger avec un message de succès
        return redirect()->back()->with('success', 'Votre message a été envoyé avec succès!');
    }
    
}

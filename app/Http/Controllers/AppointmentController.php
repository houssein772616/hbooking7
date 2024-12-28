<?php

// App\Http\Controllers\AppointmentController.php
namespace App\Http\Controllers;
use App\Mail\AppointmentConfirmation;
use Illuminate\Support\Facades\Mail;
use App\Models\Appointment;
use Illuminate\Http\Request;

class AppointmentController extends Controller
{
    // Affiche le formulaire de prise de rendez-vous
    public function create()
    {
        return view('appointments.create');
    }

    // Enregistre un nouveau rendez-vous
    public function store(Request $request)
    {
        // Validation des données
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone_number' => 'required|string|max:15',
            'appointment_date' => 'required|date',
            'appointment_time' => 'required',
            'reason' => 'required|string',
        ]);

        $appointment = Appointment::create($validated);

        // Envoyer l'email de confirmation
        Mail::to($appointment->email)->send(new AppointmentConfirmation($appointment));
    
   
        // Stocker le rendez-vous dans la base de données
        Appointment::create($validated);

        // Rediriger avec un message de succès
        return redirect()->back()->with('success', 'Votre rendez-vous a été enregistré avec succès!');
    }
    
    // Affiche la liste des rendez-vous pour l'admin
    public function index()
    {
        $appointments = Appointment::all();
        return view('appointments.index', compact('appointments'));
    }

    // Affiche un rendez-vous spécifique (pour l'admin)
    public function show(Appointment $appointment)
    {
        return view('appointments.show', compact('appointment'));
    }
  



}

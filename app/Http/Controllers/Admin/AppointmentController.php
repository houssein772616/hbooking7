<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Appointment;

class AppointmentController extends Controller
{
    public function index()
    {
        $appointments = Appointment::all();
        return view('admin.appointments.index', compact('appointments'));
    }

    public function show($id)
    {
        $appointment = Appointment::findOrFail($id);
        return view('admin.appointments.show', compact('appointment'));
    }

    public function destroy(Appointment $appointment)
    {
        $appointment->delete();
        return redirect()->route('admin.appointments.index')->with('success', 'Rendez-vous supprimé avec succès.');
    }
}

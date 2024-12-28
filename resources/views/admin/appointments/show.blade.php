@extends('layouts.admin')

@section('content')
    <h1>Détails du Rendez-vous</h1>
    <p><strong>Nom:</strong> {{ $appointment->name }}</p>
    <p><strong>Email:</strong> {{ $appointment->email }}</p>
    <p><strong>Téléphone:</strong> {{ $appointment->phone_number }}</p>
    <p><strong>Date:</strong> {{ $appointment->appointment_date }}</p>
    <p><strong>Heure:</strong> {{ $appointment->appointment_time }}</p>
    <p><strong>Motif:</strong> {{ $appointment->reason }}</p>
    <a href="{{ route('admin.appointments.index') }}">Retour à la liste</a>
@endsection

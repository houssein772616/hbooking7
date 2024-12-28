@extends('layouts.admin')

@section('content')
    <h1>Contact Details</h1>
    <p><strong>Nom:</strong> {{ $contact->name }}</p>
    <p><strong>Email:</strong> {{ $contact->email }}</p>
    <p><strong>Message:</strong> {{ $contact->message }}</p>
    <a href="{{ route('admin.contacts.index') }}">Retour à la liste</a>
@endsection

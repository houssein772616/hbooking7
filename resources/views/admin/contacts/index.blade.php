@extends('layouts.admin')

@section('content')
    <h1>Contacts</h1>
    <table>
        <thead>
            <tr>
                <th>Nom</th>
                <th>Email</th>
                <th>Message</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($contacts as $contact)
                <tr>
                    <td>{{ $contact->name }}</td>
                    <td>{{ $contact->email }}</td>
                    <td>{{ $contact->message }}</td>
                    <td>
                        <a href="{{ route('admin.contacts.show', $contact->id) }}">Voir</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection

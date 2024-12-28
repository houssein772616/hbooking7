@extends('layouts.admin')

@section('content')
    <style>
        h1 {
            color: #333;
            margin-bottom: 20px;
            text-align: center;
        }
        
        table {
            width: 100%;
            border-collapse: collapse;
            margin: 20px 0;
            background-color: #fff;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
        }
        
        th, td {
            padding: 12px 15px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }
        
        th {
            background-color: #4CAF50;
            color: white;
            font-weight: bold;
        }
        
        tr:hover {
            background-color: #f5f5f5;
        }
        
        a {
            color: #2196F3;
            text-decoration: none;
            margin-right: 10px;
        }
        
        button {
            background-color: #f44336;
            color: white;
            border: none;
            padding: 5px 10px;
            border-radius: 3px;
            cursor: pointer;
        }
        
        button:hover {
            background-color: #d32f2f;
        }
    </style>

    <h1>Rendez-vous</h1>
    <table>
        <thead>
            <tr>
                <th>#</th>
                <th>Nom</th>
                <th>Email</th>
                <th>Téléphone</th>
                <th>Date</th>
                <th>Heure</th>
                <th>Motif</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($appointments as $key => $appointment)
                <tr>
                    <td>{{ $key + 1 }}</td>
                    <td>{{ $appointment->name }}</td>
                    <td>{{ $appointment->email }}</td>
                    <td>{{ $appointment->phone_number }}</td>
                    <td>{{ $appointment->appointment_date }}</td>
                    <td>{{ $appointment->appointment_time }}</td>
                    <td>{{ $appointment->reason }}</td>
                    <td>
                        <a href="{{ route('admin.appointments.show', $appointment->id) }}">Voir</a>
                        <form action="{{ route('admin.appointments.destroy', $appointment->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit">Supprimer</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection

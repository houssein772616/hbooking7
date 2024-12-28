<!-- resources/views/appointments/create.blade.php -->
<form action="{{ route('appointments.store') }}" method="POST">
    @csrf
    <label for="name">Nom:</label>
    <input type="text" id="name" name="name" required>

    <label for="email">Email:</label>
    <input type="email" id="email" name="email" required>

    <label for="phone_number">Numéro de téléphone:</label>
    <input type="text" id="phone_number" name="phone_number" required>

    <label for="appointment_date">Date du rendez-vous:</label>
    <input type="date" id="appointment_date" name="appointment_date" required>

    <label for="appointment_time">Heure du rendez-vous:</label>
    <input type="time" id="appointment_time" name="appointment_time" required>

    <label for="reason">Motif du rendez-vous:</label>
    <textarea id="reason" name="reason" required></textarea>

    <button type="submit">Prendre rendez-vous</button>
</form>

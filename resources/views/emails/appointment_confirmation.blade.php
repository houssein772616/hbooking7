<p>Bonjour {{ $appointment->name }},</p>

<p>Votre rendez-vous pour le {{ $appointment->appointment_date }} à {{ $appointment->appointment_time }} a été confirmé.</p>

<p>Motif : {{ $appointment->reason }}</p>

<p>Merci de nous avoir contactés!</p>

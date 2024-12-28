<p>Bonjour <?php echo e($appointment->name); ?>,</p>

<p>Votre rendez-vous pour le <?php echo e($appointment->appointment_date); ?> à <?php echo e($appointment->appointment_time); ?> a été confirmé.</p>

<p>Motif : <?php echo e($appointment->reason); ?></p>

<p>Merci de nous avoir contactés!</p>
<?php /**PATH C:\Users\ADMIN\OneDrive\Desktop\gestion_rdv\gestion_cli\resources\views/emails/appointment_confirmation.blade.php ENDPATH**/ ?>
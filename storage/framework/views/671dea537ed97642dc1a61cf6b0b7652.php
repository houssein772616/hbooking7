

<?php $__env->startSection('content'); ?>
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
            <?php $__currentLoopData = $appointments; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $appointment): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td><?php echo e($key + 1); ?></td>
                    <td><?php echo e($appointment->name); ?></td>
                    <td><?php echo e($appointment->email); ?></td>
                    <td><?php echo e($appointment->phone_number); ?></td>
                    <td><?php echo e($appointment->appointment_date); ?></td>
                    <td><?php echo e($appointment->appointment_time); ?></td>
                    <td><?php echo e($appointment->reason); ?></td>
                    <td>
                        <a href="<?php echo e(route('admin.appointments.show', $appointment->id)); ?>">Voir</a>
                        <form action="<?php echo e(route('admin.appointments.destroy', $appointment->id)); ?>" method="POST" style="display:inline;">
                            <?php echo csrf_field(); ?>
                            <?php echo method_field('DELETE'); ?>
                            <button type="submit">Supprimer</button>
                        </form>
                    </td>
                </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
    </table>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\ADMIN\OneDrive\Desktop\gestion_rdv\gestion_cli\resources\views/admin/appointments/index.blade.php ENDPATH**/ ?>


<?php $__env->startSection('content'); ?>
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
            <?php $__currentLoopData = $contacts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $contact): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td><?php echo e($contact->name); ?></td>
                    <td><?php echo e($contact->email); ?></td>
                    <td><?php echo e($contact->message); ?></td>
                    <td>
                        <a href="<?php echo e(route('admin.contacts.show', $contact->id)); ?>">Voir</a>
                    </td>
                </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
    </table>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\ADMIN\OneDrive\Desktop\gestion_rdv\gestion_cli\resources\views/admin/contacts/index.blade.php ENDPATH**/ ?>
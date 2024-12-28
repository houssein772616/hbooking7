

<?php $__env->startSection('content'); ?>
    <h1>Articles de Blog</h1>
    <a href="<?php echo e(route('admin.blogs.create')); ?>">Ajouter un nouvel article</a>
    <table>
        <thead>
            <tr>
                <th>Titre</th>
                <th>Date de Publication</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            <?php $__currentLoopData = $blogs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $blog): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td><?php echo e($blog->title); ?></td>
                    <td><?php echo e($blog->published_at); ?></td>
                    <td>
                        <a href="<?php echo e(route('admin.blogs.show', $blog->id)); ?>">Voir</a>
                        <a href="<?php echo e(route('admin.blogs.edit', $blog->id)); ?>">Modifier</a>
                        <form action="<?php echo e(route('admin.blogs.destroy', $blog->id)); ?>" method="POST" style="display:inline;">
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

<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\ADMIN\OneDrive\Desktop\gestion_rdv\gestion_cli\resources\views/admin/blogs/index.blade.php ENDPATH**/ ?>
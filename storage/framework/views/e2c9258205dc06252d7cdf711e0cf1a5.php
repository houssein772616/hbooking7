

<?php $__env->startSection('content'); ?>
    <h1>Ajouter un Article de Blog</h1>
    <form action="<?php echo e(route('admin.blogs.store')); ?>" method="POST" enctype="multipart/form-data">
        <?php echo csrf_field(); ?>
        <div>
            <label for="title">Titre</label>
            <input type="text" id="title" name="title" required>
        </div>
        <div>
            <label for="content">Contenu</label>
            <textarea id="content" name="content" required></textarea>
        </div>
        <div>
            <label for="image">Image</label>
            <input type="file" id="image" name="image">
        </div>
        <div>
            <label for="published_at">Date de Publication</label>
            <input type="date" id="published_at" name="published_at" required>
        </div>
        <button type="submit">Ajouter</button>
    </form>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\ADMIN\OneDrive\Desktop\gestion_rdv\gestion_cli\resources\views/admin/blogs/create.blade.php ENDPATH**/ ?>
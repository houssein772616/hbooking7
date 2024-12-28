<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login</title>
    <link rel="stylesheet" href="<?php echo e(asset('css/app.css')); ?>">
</head>
<body>
    <div class="container mt-5">
        <h2 class="text-center">Admin Login</h2>
        <form method="POST" action="<?php echo e(route('admin.login.submit')); ?>">
            <?php echo csrf_field(); ?>
            <div class="form-group">
                <label for="email">Email address</label>
                <input type="email" name="email" class="form-control" id="email" placeholder="Enter email" required>
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" name="password" class="form-control" id="password" placeholder="Enter password" required>
            </div>
            <button type="submit" class="btn btn-primary">Login</button>
        </form>
        <div class="text-center mt-3">
            <a href="<?php echo e(route('admin.password.request')); ?>">Forgot your password?</a>
        </div>
    </div>
</body>
</html>
<?php /**PATH C:\Users\ADMIN\OneDrive\Desktop\gestion_rdv\gestion_cli\resources\views/admin/auth/login.blade.php ENDPATH**/ ?>
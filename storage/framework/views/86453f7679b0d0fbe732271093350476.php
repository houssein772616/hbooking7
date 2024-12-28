

<?php $__env->startSection('content'); ?>
<link rel="stylesheet" href="<?php echo e(asset('css/styli.css')); ?>">
<section class="blog">
    <div class="container">
        <div class="flex blog-center" data-aos="fade-down">
            <div class="w-66">
                <div class="flex gap-1">
                    <hr class="blog-hr1">
                    <h5>BLOGS</h5>
                </div>
                <h2 class="mt-1">Latest Posts</h2>
                <p class="mt-1 mb-15">Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                    Lorem Ipsum has been the industry's standard dummy text ever.
                </p>
            </div>
            <div class="w-33 mt-1 flex flex-end">
                <a href="<?php echo e(route('blogs.index')); ?>" class="btn_hover2">See all blogs</a>
            </div>
        </div>
        <div class="flex gap-2 mt-15 blog-cards">
            <?php $__currentLoopData = $blogs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $blog): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <?php if($index < 3): ?>
                    <!-- Display the first 3 blogs in one row -->
                    <div data-aos="fade-up" class="blog-card w-33">
                        <?php if($blog->image && file_exists(public_path('storage/' . $blog->image))): ?>
                            <img src="<?php echo e(asset('storage/' . $blog->image)); ?>" class="card-img-top" alt="<?php echo e($blog->title); ?>" style='height: 300px; border-radius: 10%; '>
                        <?php else: ?>
                            <img src="<?php echo e(asset('images/default-image.png')); ?>" class="card-img-top" alt="Default Image">
                        <?php endif; ?>
                        <div class="card-body">
                            <h4><?php echo e($blog->title); ?></h4>
                            <a href="#" class="btn_hover2">Learn More</a>
                        </div>
                    </div>
                <?php else: ?>
                    <!-- Display the rest of the blogs below the first 3 -->
                    <div data-aos="fade-up" class="blog-card w-100">
                        <?php if($blog->image && file_exists(public_path('storage/' . $blog->image))): ?>
                            <img src="<?php echo e(asset('storage/' . $blog->image)); ?>" class="card-img-top" alt="<?php echo e($blog->title); ?>" style='height: 300px; border-radius: 10%;'>
                        <?php else: ?>
                            <img src="<?php echo e(asset('images/default-image.png')); ?>" class="card-img-top" alt="Default Image">
                        <?php endif; ?>
                        <div class="card-body">
                            <h4><?php echo e($blog->title); ?></h4>
                            <a href="#" class="btn_hover2">Learn More</a>
                        </div>
                    </div>
                <?php endif; ?>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    </div>
</section>

<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
<script>
    AOS.init({
        offset: 150,
        duration: 1250,
        once: true,
    });
</script>

<!-- jquery js cdn -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.js"
    integrity="sha512-+k1pnlgt4F1H8L7t3z95o3/KO+o78INEcXTbnoJQ/F2VqDVhWoaiVml/OEHv9HsVgxUaVW+IbiZPUJQfF/YxZw=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<!-- jquery min js cdn -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"
    integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<!-- slick carousel min js cdn -->
<script src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"
    integrity="sha256-DHF4zGyjT7GOMPBwpeehwoey18z8uiz98G4PRu2lV0A=" crossorigin="anonymous"></script>

<!-- custom js -->
<script src="<?php echo e(asset('js/script.js')); ?>"></script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\houssein\Desktop\gestion_cli\resources\views/blogs/index.blade.php ENDPATH**/ ?>
<!DOCTYPE html>
<html>
<head>
    <title>Cloudin Careers</title>
    <link rel="stylesheet" href="<?php echo e(asset('css/app.css')); ?>">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <ul class="nav flex-column">
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo e(route('jobopening/sidebar')); ?>">Departments</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo e(route('jobopening/sidebar')); ?>">Job opening list</a>
                    </li>
                </ul>
            </div>
            <div class="sidebar">
                <?php echo $__env->make('sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            </div>
            <div class="col-md-9">
                <?php echo $__env->yieldContent('content'); ?>
            </div>
        </div>
    </div>
</body>
</html>
<?php /**PATH C:\job openings\cloudincareers\resources\views/jobopening/layout.blade.php ENDPATH**/ ?>
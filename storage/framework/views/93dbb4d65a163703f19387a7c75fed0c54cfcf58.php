<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="<?php echo e(asset('/css/app.css')); ?>">
    </head>
    <body>
        <div class="cards">
            <?php $__currentLoopData = $travels; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $travel): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="card">
                    <h2><?php echo e($travel->packetName); ?></h2>
                    <span>Road to:</span> <?php echo e($travel->destination); ?>

                    <span>Total days:</span> <?php echo e($travel->daysToStay); ?>

                    <span>Departure:</span> <?php echo e($travel->departureDate); ?>

                    <h3>$<?php echo e($travel->price); ?></h3>
                </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    </body>
</html>
<?php /**PATH C:\Users\andre\PhpstormProjects\laravel-migration-seeder\resources\views/packets.blade.php ENDPATH**/ ?>
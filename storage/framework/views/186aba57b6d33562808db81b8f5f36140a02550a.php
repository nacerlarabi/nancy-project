<nav class="navbar navbar-expand-lg top">
    <div class="container-fluid mx-4">
        <a class="navbar-brand" href="/">
            <img src="<?php echo e(asset("images/logo/logo-transparent.png")); ?>" width="50"/>
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <?php echo $__env->make('common.extra-menu', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <?php echo $__env->make('common.menu', ['menu' => $menu], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    </div>
</nav><?php /**PATH /Users/mac/Downloads/www/resources/views/common/header.blade.php ENDPATH**/ ?>
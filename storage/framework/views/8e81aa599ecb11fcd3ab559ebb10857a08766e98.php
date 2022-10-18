<!DOCTYPE html>
<html lang="<?php echo e($LANG ?? ''); ?>">

<head><?php echo $__env->make('common.head', ['head' => $head], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?></head>
<body style="background-color: #E8F6FE;">
<header><?php echo $__env->make('common.header', ['menu' => $menu], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?></header>
<core><?php echo $__env->yieldContent('content'); ?></core>
<footer><?php echo $__env->make('common.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?></footer>
<?php echo $__env->make('common.before_page', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
</body>
</html>
<?php /**PATH /Users/seddikezzaki/workspaces/summercourses/nancy-project/resources/views/layouts/main.blade.php ENDPATH**/ ?>
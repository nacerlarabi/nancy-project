<!DOCTYPE html>
<html lang="<?php echo e($LANG); ?>">

<head><?php echo $__env->make('common.head', ['head' => $head], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?></head>
<?php echo $__env->yieldContent('content'); ?>
<?php echo $__env->make('common.before_page', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
</body>
</html>
<?php /**PATH /Users/seddikezzaki/workspaces/summercourses/nancy-project/resources/views/layouts/emptymain.blade.php ENDPATH**/ ?>
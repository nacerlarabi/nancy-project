<div class="">
    <div class="media d-flex align-items-center">
        
        <div class="media-body ml-3">
            <a href="<?php echo e($subMenu['uri']); ?>/">
                <h6 class="heading text-primary mb-md-1"><?php echo e($subMenu['title']); ?></h6>
            </a>
            
                <ul class="mb-4 px-0">
                    <?php $__currentLoopData = $subMenu['elements']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $element): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <a href="/<?php echo e($subMenu['uri']); ?>#<?php echo e($element['mnemonic']); ?>">
                            <li class="nav-item d-none d-lg-block"><?php echo e($element['title']); ?></li>
                        </a>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </ul>
            
        </div>
    </div>
</div>
<?php /**PATH /Users/seddikezzaki/workspaces/summercourses/nancy-project/resources/views/common/grouped-submenu.blade.php ENDPATH**/ ?>
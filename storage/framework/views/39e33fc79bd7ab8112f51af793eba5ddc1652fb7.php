
        <div class="collapse navbar-collapse" id="navbarNav" style="margin-top: 40px;">
            <ul class="navbar-nav ml-auto">
                <?php $__currentLoopData = $menu; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $menuTab): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <li class="nav-item <?php if($menuTab['submenu']): ?> dropdown <?php endif; ?>">
                        <a href="#" class="nav-link" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <span class="underlineEffect"><?php echo e(__('menu.'.$menuTab['title'])); ?></span>
                        </a>
                        <?php if(isset($menuTab['submenu'])): ?>
                            <?php if($menuTab['type'] === "simple"): ?>
                                <ul class="dropdown-menu dropdown-menu-right">
                                    <?php $__currentLoopData = $menuTab['submenu']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $subMenu): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <?php echo $__env->make('common.submenu', ['submenu'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                                 <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </ul>
                            <?php else: ?>
                                <ul class="dropdown-menu dropdown-menu-right">
                                    <?php $__currentLoopData = $menuTab['submenu']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $subMenu): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <?php echo $__env->make('common.grouped-submenu', ['subMenu'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </ul>
                            <?php endif; ?>
                        <?php endif; ?>
                    </li>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </ul>
        </div>
<?php /**PATH /Users/seddikezzaki/workspaces/summercourses/nancy-project/resources/views/common/menu.blade.php ENDPATH**/ ?>
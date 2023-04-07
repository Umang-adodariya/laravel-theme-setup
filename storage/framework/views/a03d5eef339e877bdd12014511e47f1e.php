<?php $__env->startSection('content'); ?>
<?php if (isset($component)) { $__componentOriginale9b0a189e65e6458c6ba38ebe9818bb4 = $component; } ?>
<?php $component = App\View\Components\Title::resolve(['titles' => $titles] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('title'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\Title::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginale9b0a189e65e6458c6ba38ebe9818bb4)): ?>
<?php $component = $__componentOriginale9b0a189e65e6458c6ba38ebe9818bb4; ?>
<?php unset($__componentOriginale9b0a189e65e6458c6ba38ebe9818bb4); ?>
<?php endif; ?>

<div id="kt_app_content" class="app-content flex-column-fluid">
    <!--begin::Content container-->
    <div id="kt_app_content_container" class="app-container container-xxl">
        <!--begin::Card-->
        <div class="card card-flush py-4">
        
            <!--begin::Card body-->
            <div class="card-body pt-5">
                <div class="fv-row mb-7 fv-plugins-icon-container">
                    <strong>Name:</strong>
                    <?php echo e($role->name); ?>

                </div>
                <div class="fv-row mb-7 fv-plugins-icon-container">
                    <strong>Permissions:</strong>
                    <?php if(!empty($rolePermissions)): ?>
                    <?php $__currentLoopData = $rolePermissions; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $v): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <label class="label label-success"><?php echo e($v->name); ?>,</label>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    <?php endif; ?>
                </div>
                <!--begin::Separator-->
                <div class="separator mb-6"></div>

            </div>
        </div>
        <!--end::Card header-->
    </div>
    <!--end::Card-->
</div>
<!--end::Content container-->
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laravel-them\matkagambling\resources\views/roles/show.blade.php ENDPATH**/ ?>
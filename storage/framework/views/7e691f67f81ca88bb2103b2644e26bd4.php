<div id="kt_app_toolbar" class="app-toolbar py-3 py-lg-6">
    <!--begin::Toolbar container-->
    <div id="kt_app_toolbar_container" class="app-container container-xxl d-flex flex-stack">
        <!--begin::Page title-->
        <div class="page-title d-flex flex-column justify-content-center flex-wrap me-3">
            <!--begin::Title-->
            <h1 class="page-heading d-flex text-dark fw-bold fs-3 flex-column justify-content-center my-0"><?php echo e(isset($titles['title']) ? $titles['title'] : ''); ?></h1>
            <!--end::Title-->
            <!--begin::Breadcrumb-->
            <ul class="breadcrumb breadcrumb-separatorless fw-semibold fs-7 my-0 pt-1">

                <?php if(isset($titles['breadcrumb_item'])): ?>
                <?php $__currentLoopData = $titles['breadcrumb_item']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $k => $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <?php if($data['link']): ?>
                <li class="breadcrumb-item text-muted">
                    <a class="text-muted text-hover-primary" href="<?php echo e($data['route']); ?>"><?php echo e($data['title']); ?></a>
                </li>
                <?php else: ?>
                <li class="breadcrumb-item text-muted">
                    <?php echo e($data['title']); ?>

                </li>
                <?php endif; ?>
                <?php if((count($titles['breadcrumb_item']) - 1) != $k): ?>
                <li class="breadcrumb-item">
                    <span class="bullet bg-gray-400 w-5px h-2px"></span>
                </li>

                <?php endif; ?>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                <?php endif; ?>

            </ul>
            <!--end::Breadcrumb-->
        </div>
        <!--end::Page title-->
        <!--begin::Actions-->
        <div class="d-flex align-items-center gap-2 gap-lg-3">
            <!--begin::Secondary button-->
            <!--end::Secondary button-->
            <!--begin::Primary button-->
            <?php if(count($titles['breadcrumb_item']) >= 3): ?>
            <button onclick="history.back()" class="btn btn-sm fw-bold btn-primary">Back</button>
            <?php endif; ?>
            <!--end::Primary button-->
        </div>
        <!--end::Actions-->
    </div>
    <!--end::Toolbar container-->
</div><?php /**PATH C:\laravel-them\matkagambling\resources\views/components/title.blade.php ENDPATH**/ ?>
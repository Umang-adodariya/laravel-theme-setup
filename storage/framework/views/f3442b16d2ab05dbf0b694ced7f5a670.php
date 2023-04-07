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
                <!--begin::Form-->
                <?php echo Form::open(['route' => 'roles.store', 'method' => 'POST','id'=>'kt_ecommerce_settings_general_form', 'class' => 'form fv-plugins-bootstrap5 fv-plugins-framework validate_form_role',]); ?>

                <!--begin::Input group-->
                <div class="fv-row mb-7 fv-plugins-icon-container">
                    <!--begin::Label-->
                    <label class="fs-6 fw-semibold form-label mt-3">
                        <span class="required">Name</span>
                        <i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip" aria-label="Enter the contact's name." data-kt-initialized="1"></i>
                    </label>
                    <!--end::Label-->
                    <!--begin::Input-->
                    <?php echo Form::text('name', null, ['placeholder' => 'Enter Name', 'class' => 'form-control form-control-solid', 'id' => 'name','required data-parsley-pattern'=> '^[a-zA-Z_ ]*$',
                    'data-parsley-required-message'=>'Please enter Name.','data-parsley-pattern-message'=>'Enter a valid Name.' ,'data-parsley-trigger'=>'keyup','data-parsley-errors-container'=>'#name_error']); ?>

                    <span class="text-danger" id="name_error"><?php echo e($errors->first('name')); ?></span>
                    <!--end::Input-->
                    <div class="fv-plugins-message-container invalid-feedback"></div>
                </div>

                <div class="fv-row mb-7 fv-plugins-icon-container">
                    <!--begin::Label-->
                    <label class="fs-6 fw-semibold form-label mt-3">
                        <span class="required">Permission</span>
                        <i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip" aria-label="Enter the contact's name." data-kt-initialized="1"></i>
                    </label><br />
                    <!--end::Label-->
                    <?php $__currentLoopData = $permission; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <label class="mt-3"><?php echo e(Form::checkbox('permission[]', $value->id, false, ['class' => 'form-check-input name','data-parsley-required'=>'true' ,'data-parsley-required-message'=>'Please Select Permission.','data-parsley-errors-container'=>'#permission_error','data-parsley-trigger'=> 'click'])); ?>

                        <?php echo e($value->name); ?></label>
                    <br />
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    <span class="text-danger" id="permission_error"><?php echo e($errors->first('permission')); ?></span>
                    <div class="fv-plugins-message-container invalid-feedback"></div>
                </div>
                <!--end::Input group-->
                <!--begin::Separator-->
                <div class="separator mb-6"></div>
                <!--end::Separator-->
                <!--begin::Action buttons-->
                <div class="d-flex justify-content-end">
                    <!--begin::Button-->
                    <button type="submit" id="submit" data-kt-contacts-type="submit" class="btn btn-primary">
                        <span class="indicator-label">Save</span>
                        <span class="indicator-progress">Please wait...
                            <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                    </button>
                    <!--end::Button-->
                </div>
                <!--end::Action buttons-->
                </form>
                <!--end::Form-->
            </div>
            <!--end::Card header-->
        </div>
        <!--end::Card-->
    </div>
    <!--end::Content container-->
</div>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('page-js'); ?>
<script>
    var roleURL = `<?php echo e(route('roles.store')); ?>`;
    var roleIndexURL = `<?php echo e(route('roles.index')); ?>`;
</script>
<script src="<?php echo e(asset('assets/js/admin/role.js')); ?>"></script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laravel-them\matkagambling\resources\views/roles/create.blade.php ENDPATH**/ ?>
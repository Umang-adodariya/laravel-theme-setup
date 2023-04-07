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

            <div id="kt_account_settings_profile_details" class="collapse show">
                <!--begin::Form-->
                <?php echo Form::open(['route' => 'admin-users.store', 'method' => 'POST','id'=>'user_form', 'class' => 'form validate_form_role', 'enctype' => 'multipart/form-data' ]); ?>


                    <!--begin::Card body-->
                    <div class="card-body border-top p-9">
                        <!--begin::Input group-->
                        <div class="row mb-6">
                            <!--begin::Label-->
                            <label class="col-lg-4 col-form-label required fw-semibold fs-6">Name</label>
                            <!--end::Label-->
                            <!--begin::Col-->
                            <div class="col-lg-8">
                                <!--begin::Row-->
                                <div class="row">
                                    <!--begin::Col-->
                                    <div class="col-lg-12 fv-row">
                                        <input type="text" name="name" class="form-control form-control-lg form-control-solid mb-3 mb-lg-0" placeholder="Name" value="" data-parsley-required data-parsley-required-message="Please enter name" data-parsley-pattern= '^[a-zA-Z_ ]*$' data-parsley-pattern-message='Please add in correct name' ,data-parsley-trigger='keyup'/>
                                        <span class="text-danger" id="name_error"><?php echo e($errors->first('name')); ?></span>
                                    </div>
                                    <!--end::Col-->

                                </div>
                                <!--end::Row-->
                            </div>
                            <!--end::Col-->
                        </div>
                        <!--end::Input group-->
                        <!--begin::Input group-->
                        <div class="row mb-6">
                            <!--begin::Label-->
                            <label class="col-lg-4 col-form-label required fw-semibold fs-6">Email</label>
                            <!--end::Label-->
                            <!--begin::Col-->
                            <div class="col-lg-8 fv-row">
                                <input type="email" name="email" class="form-control form-control-lg form-control-solid" placeholder="Email" value=""
                                data-parsley-trigger ="keyup"
                                data-parsley-required = "required"
                                data-parsley-required-message="Please enter email address" data-parsley-type-message="Please enter valid email address"
                                />
                                <span class="text-danger" id="name_error"><?php echo e($errors->first('email')); ?></span>
                            </div>
                            <!--end::Col-->
                        </div>
                        <!--end::Input group-->

                        <div class="row mb-6">
                            <!--begin::Label-->
                            <label class="col-lg-4 col-form-label required fw-semibold fs-6">Phone Number</label>
                            <!--end::Label-->
                            <!--begin::Col-->
                            <div class="col-lg-8">
                                <!--begin::Row-->
                                <div class="row">
                                    <!--begin::Col-->
                                    <div class="col-lg-12 fv-row">
                                        <input name="phone_number" minimum="0"  class="form-control form-control-lg form-control-solid" type="digits" placeholder="Phone Number"
                                        data-parsley-required
                                        data-parsley-trigger ="keyup"
                                        data-parsley-type="digits"
                                        data-parsley-required-message='Please enter mobile number' maxlength="10"
                                        oninput = "this.value=this.value.slice(0,this.maxLength)"
                                        data-parsley-type-message="Please enter valid mobile number">
                                        <span class="text-danger" id="name_error"><?php echo e($errors->first('phone_number')); ?></span>
                                    </div>
                                    <!--end::Col-->

                                </div>
                                <!--end::Row-->
                            </div>
                            <!--end::Col-->
                        </div>

                        <!--begin::Input group-->
                        <div class="row mb-6">
                            <!--begin::Label-->
                            <label class="col-lg-4 col-form-label fw-semibold fs-6">
                                <span class="required">Password</span>
                            </label>
                            <!--end::Label-->
                            <!--begin::Col-->
                            <div class="col-lg-8 fv-row">
                                <input type="password" name="password" class="form-control form-control-lg form-control-solid" placeholder="Password" value="" data-parsley-required data-parsley-pattern="^(?=.*\d)(?=.*[@#$%&!])(?=.*[a-z])(?=.*[A-Z]).{6,}$" data-parsley-required-message='Please enter  password.' data-parsley-minlength="6" data-parsley-minlength-message = "Please enter minimum 6 letter Password"
                                data-parsley-pattern-message='Password Content at least 1 lowercase, 1 uppercase, 1 special character and 1 number.' data-parsley-trigger="keyup" autocomplete="off" data-parsley-errors-container="#password_error">
                                <span class="text-danger" id="password_error"><?php echo e($errors->first('password')); ?></span>
                            </div>
                            <!--end::Col-->
                        </div>
                        <!--end::Input group-->
                        <!--begin::Input group-->
                        <div class="row mb-6">
                            <!--begin::Label-->
                            <label class="col-lg-4 col-form-label required fw-semibold fs-6">Select Role</label>
                            <!--end::Label-->
                            <!--begin::Col-->
                            <div class="col-lg-8 fv-row">
                                <!--begin::Input-->

                                <select name="role[]" aria-label="Select Role" data-control="select2" data-placeholder="Select role..." class="form-select form-select-solid form-select-lg " multiple required data-parsley-required-message="Please select role" data-parsley-errors-container='#role_error'>
                                    <option value="">Select Role...</option>

                                    <?php $__currentLoopData = $roles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $role): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <option value="<?php echo e($role->name); ?>"><?php echo e($role->name); ?></option>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </select>
                                <span class="text-danger" id="role_error"><?php echo e($errors->first('role')); ?></span>
                                <!--end::Input-->

                            </div>
                            <!--end::Col-->
                        </div>
                        <!--end::Input group-->


                    <!--begin::Actions-->

                    <button type="submit" data-kt-contacts-type="submit" class="btn btn-primary submit">
                        <span class="indicator-label">Save</span>
                            <span class="indicator-progress">Please wait...
                                <span class="spinner-border spinner-border-sm align-middle ms-2">
                            </span>
                        </span>
                    </button>
                    <!--end::Actions-->
                <?php echo e(Form::close()); ?>

                <!--end::Form-->
            </div>

        </div>
        <!--end::Card-->
    </div>
    <!--end::Content container-->
</div>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('page-js'); ?>
<script>
var userURL = '<?php echo e(route('admin-users.store')); ?>';
var userIndexURL = '<?php echo e(route('admin-users.index')); ?>';
</script>
<script src="<?php echo e(asset('assets/js/admin/admin-user.js')); ?>"></script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laravel-them\matkagambling\resources\views/users/create.blade.php ENDPATH**/ ?>
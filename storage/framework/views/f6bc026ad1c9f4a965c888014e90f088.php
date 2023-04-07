<?php $__env->startSection('content'); ?>
    <div class="content-wrapper">
        <!-- Main content -->
        <div class="d-flex flex-column flex-column-fluid">
            <!--begin::Toolbar-->
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

            <!--end::Toolbar-->
            <!--begin::Content-->
            <div id="kt_app_content" class="app-content flex-column-fluid">
                <!--begin::Content container-->
                <div id="kt_app_content_container" class="app-container container-xxl">
                    <!--begin::Card-->
                    <div class="card">
                        <!--begin::Card header-->
                        <div class="card-header border-0 pt-6">
                            <!--begin::Card title-->
                            <div class="card-title">

                            </div>
                            <!--to do-->
                            <div class="card-toolbar">
                                <div class="d-flex justify-content-end" data-kt-user-table-toolbar="base">

                                    <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('user-create')): ?>
                                    <a href="<?php echo e(route('admin-users.create')); ?>" class="btn btn-primary">
                                        <!--begin::Svg Icon | path: icons/duotune/arrows/arr075.svg-->
                                        <span class="svg-icon svg-icon-2">
                                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <rect opacity="0.5" x="11.364" y="20.364" width="16"
                                                    height="2" rx="1" transform="rotate(-90 11.364 20.364)"
                                                    fill="currentColor" />
                                                <rect x="4.36396" y="11.364" width="16" height="2"
                                                    rx="1" fill="currentColor" />
                                            </svg>
                                        </span>
                                        <!--end::Svg Icon-->Add User
                                    </a>
                                    <?php endif; ?>
                                    <!--end::Add role-->
                                </div>
                                <!--end::Toolbar-->
                            </div>
                            <!--end::Card toolbar-->
                        </div>
                        <!--end::Card header-->
                        <!--begin::Card body-->
                        <div class="card-body py-4">
                            <!--begin::Table-->
                            <table class="table align-middle table-row-dashed fs-6 gy-5" id="kt_table_users">
                                <!--begin::Table head-->
                                <thead>
                                    <!--begin::Table row-->
                                    <tr class="text-start text-muted fw-bold fs-7 text-uppercase gs-0">

                                        <th class="min-w-125px">ID</th>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Phone Number</th>
                                        <th>Date of joining</th>
                                        <th>Enable/Disable</th>
                                        <th class="text-end min-w-100px">Actions</th>
                                    </tr>
                                    <!--end::Table row-->
                                </thead>
                                <!--end::Table head-->
                                <!--begin::Table body-->


                                <tbody class="text-gray-600 fw-semibold">

                                </tbody>


                                <!--end::Table body-->
                            </table>
                            <!--end::Table-->
                        </div>


                    </div>
                    <!--end::Card-->
                </div>
                <!--end::Content container-->
            </div>
            <!--end::Content-->
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('page-js'); ?>
    <script>
        var userURL = `<?php echo e(route('admin-users.store')); ?>`;
        var changeStatus = "<?php echo e(route('change-status')); ?>";
        var userData = "<?php echo e(route('user-list-admin')); ?>";
    </script>

    <script src="<?php echo e(asset('assets/js/admin/admin_user_dataTable.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/js/admin/admin-user.js')); ?>"></script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laravel-them\matkagambling\resources\views/users/index.blade.php ENDPATH**/ ?>
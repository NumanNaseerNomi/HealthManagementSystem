<!-- start page title -->
<div class="row">
    <div class="col-12">
        <div class="page-title-box d-flex align-items-center justify-content-between">
            <h4 class="mb-0 font-size-18"><?php echo e(__('Dashboard')); ?></h4>
            <div class="page-title-right">
                <ol class="breadcrumb m-0">
                    <li class="breadcrumb-item active">Welcome to Patient Dashboard</li>
                </ol>
            </div>
        </div>
    </div>
</div>
<!-- end page title -->

<div class="row">
    <div class="col-xl-4">
        <div class="card overflow-hidden">
            <div class="bg-soft-primary">
                <div class="row">
                    <div class="col-7">
                        <div class="text-primary p-3">
                            <h5 class="text-primary"><?php echo e(__('Welcome Back!')); ?></h5>
                            <p>Patient <?php echo e(__('Dashboard')); ?></p>
                        </div>
                    </div>
                    <div class="col-5 align-self-end">
                        <img src="<?php echo e(URL::asset('assets/images/profile-img.png')); ?>" alt="" class="img-fluid">
                    </div>
                </div>
            </div>
            <div class="card-body pt-0">
                <div class="row">
                    <div class="col-sm-4">
                        <div class="avatar-md profile-user-wid mb-4">
                            <img src="<?php if($user->profile_photo != null): ?><?php echo e(URL::asset('storage/images/users/' . $user->profile_photo)); ?><?php else: ?><?php echo e(URL::asset('assets/images/users/noImage.png')); ?><?php endif; ?>" class="img-thumbnail rounded-circle">
                        </div>
                        <h5 class="font-size-15 text-truncate"> <?php echo e($user->first_name); ?> <?php echo e($user->last_name); ?> </h5>
                        <p class="text-muted mb-0 text-truncate"><?php echo e(__('Patient')); ?></p>
                    </div>
                    <div class="col-sm-8">
                        <div class="pt-4">
                            <div class="row">
                                <div class="col-12">
                                    <h5 class="font-size-12"><?php echo e(__('Last Login:')); ?></h5>
                                    <p class="text-muted mb-0"> <?php echo e($user->last_login); ?> </p>
                                </div>
                            </div>
                            <div class="row mt-4">
                                <div class="col-12">
                                    <a href="<?php echo e(url('profile-edit')); ?>"
                                        class="btn btn-primary waves-effect waves-light btn-sm"><?php echo e(__('Edit Profile')); ?>

                                        <i class="mdi mdi-arrow-right ml-1"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
















    </div>
    <div class="col-xl-8">
        <div class="row">
            <div class="col-md-4">
                <div class="card mini-stats-wid">
                    <div class="card-body">
                        <div class="media">
                            <div class="media-body">
                                <p class="text-muted font-weight-medium"><?php echo e(__('Appointments')); ?></p>
                                <h4 class="mb-1"><?php echo e(number_format($data['total_appointment'])); ?></h4>
                            </div>
                            <div class="mini-stat-icon avatar-sm rounded-circle bg-primary align-self-center">
                                <span class="avatar-title">
                                    <i class="bx bxs-calendar-check font-size-24"></i>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

































        </div>
        <!-- end row -->

        <div class="card">
            <div class="card-body">
                <h4 class="card-title mb-4"><?php echo e(__('Letest Appointments')); ?></h4>
                <div class="table-responsive">
                    <table class="table table-centered table-nowrap mb-0">
                        <thead class="thead-light">
                            <tr>
                                <th><?php echo e(__('Sr.No.')); ?></th>
                                <th><?php echo e(__('Doctor Name')); ?></th>
                                <th><?php echo e(__('Date')); ?></th>
                                <th><?php echo e(__('Time')); ?></th>
                                <th><?php echo e(__('Status')); ?></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $__currentLoopData = $appointments; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr>
                                    <td><?php echo e($loop->index + 1); ?></td>
                                    <td><?php echo e($item->doctor->first_name); ?> <?php echo e($item->doctor->last_name); ?></td>
                                    <td><?php echo e($item->appointment_date); ?></td>
                                    <td><?php echo e($item->timeSlot->from . ' to ' . $item->timeSlot->to); ?></td>
                                    <td>
                                        <?php if($item->status == 0): ?>
                                            <span class="badge badge-warning">Pending</span>
                                        <?php elseif($item->status == 1 ): ?>
                                            <span class="badge badge-success">Success</span>
                                        <?php elseif($item->status == 2 ): ?>
                                            <span class="badge badge-danger">Cancel</span>
                                        <?php endif; ?>
                                    </td>
                                </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </tbody>
                    </table>
                </div>
                <!-- end table-responsive -->
            </div>
        </div>
    </div>
</div>
<!-- end row -->
<?php /**PATH C:\xampp\htdocs\health_care\health_care\resources\views/layouts/patient-dashboard.blade.php ENDPATH**/ ?>
<?php $__env->startSection('content'); ?>

    <?php if($snipeSettings->custom_forgot_pass_url): ?>
        <a href="<?php echo e($snipeSettings->custom_forgot_pass_url); ?>" rel="noopener"><?php echo e(trans('auth/general.forgot_password')); ?></a>
    <?php else: ?>

    <form class="form" role="form" method="POST" action="<?php echo e(url('/password/email')); ?>">
        <?php echo csrf_field(); ?>

    <div class="container">
        <div class="row">



            <div class="col-md-4 col-md-offset-4">

                <div class="box login-box" style="width: 100%">
                        <div class="box-header">
                            <h3 class="box-title"> <?php echo e(trans('auth/general.send_password_link')); ?></h3>
                        </div>


                        <div class="login-box-body">
                            <div class="row">

                                <!-- Notifications -->
                                <?php echo $__env->make('notifications', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>



                                    <div class="form-group<?php echo e($errors->has('email') ? ' has-error' : ''); ?>">

                                        <div class="col-md-12">
                                            <input type="email" class="form-control" name="email" value="<?php echo e(old('email')); ?>" placeholder="<?php echo e(trans('admin/users/table.email')); ?>">
                                            <?php echo $errors->first('email', '<span class="alert-msg"><i class="fa fa-times"></i> :message</span>'); ?>

                                        </div>
                                    </div>



                            </div>
                        </div>
                        <div class="box-footer">
                            <button type="submit" class="btn btn-lg btn-primary btn-block">
                                <?php echo e(trans('auth/general.email_reset_password')); ?>

                                </button>
                        </div>

                    </div>
            </div>
        </div>
    </div>

    </form>

    <?php endif; ?>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts/basic', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
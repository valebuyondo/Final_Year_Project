<?php $__env->startSection('title'); ?>
403
##parent-placeholder-3c6de1b7dd91465d437ef415f94f36afc1fbc8a8##
<?php $__env->stopSection(); ?>



<?php $__env->startSection('content'); ?>



<div class="row">
  <div class="col-md-8 col-md-offset-2">

    <div style="padding-top: 200px">
      <img src="<?php echo e(url('/')); ?>/img/sad-panda.png" style="width: 200px; height: 200px;" class="pull-left">
            <div class="error-content">
              <h3><i class="fa fa-warning text-yellow"></i> 403 Forbidden.</h3>
              <p>
                Sad panda. You are not authorized to do the thing. Maybe <a href="<?php echo e(url('/')); ?>">return to the dashboard</a>, or contact your administrator.
              </p>

    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts/basic', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
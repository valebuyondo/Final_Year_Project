<?php $__env->startSection('title0'); ?>
  <?php echo e(trans('admin/hardware/general.requestable')); ?>

  <?php echo e(trans('general.assets')); ?>

<?php $__env->stopSection(); ?>


<?php $__env->startSection('title'); ?>
    <?php echo $__env->yieldContent('title0'); ?>  ##parent-placeholder-3c6de1b7dd91465d437ef415f94f36afc1fbc8a8##
<?php $__env->stopSection(); ?>


<?php $__env->startSection('content'); ?>

<div class="row">
    <div class="col-md-12">

        <div class="nav-tabs-custom">
            <ul class="nav nav-tabs">
                <li class="active">
                    <a href="#assets" data-toggle="tab" title="<?php echo e(trans('general.assets')); ?>"><?php echo e(trans('general.assets')); ?></a>
                </li>
                <li>
                    <a href="#models" data-toggle="tab" title="<?php echo e(trans('general.asset_models')); ?>"><?php echo e(trans('general.asset_models')); ?></a>
                </li>
            </ul>
            <div class="tab-content">
                <div class="tab-pane fade in active" id="assets">
                    <div class="row">
                        <div class="col-md-12">
                                <div class="table-responsive">
                                    <table
                                        data-click-to-select="true"
                                        data-cookie-id-table="requestableAssetsListingTable"
                                        data-pagination="true"
                                        data-id-table="requestableAssetsListingTable"
                                        data-search="true"
                                        data-side-pagination="server"
                                        data-show-columns="true"
                                        data-show-export="false"
                                        data-show-footer="false"
                                        data-show-refresh="true"
                                        data-sort-order="asc"
                                        data-sort-name="name"
                                        data-toolbar="#toolbar"
                                        id="assetsListingTable"
                                        class="table table-striped snipe-table"
                                        data-url="<?php echo e(route('api.assets.requestable', ['requestable' => true])); ?>">

                                        <thead>
                                            <tr>
                                                <th class="col-md-1" data-field="image" data-formatter="imageFormatter" data-sortable="true"><?php echo e(trans('general.image')); ?></th>
                                                <th class="col-md-2" data-field="model" data-sortable="true"><?php echo e(trans('admin/hardware/table.asset_model')); ?></th>
                                                <th class="col-md-2" data-field="model_number" data-sortable="true"><?php echo e(trans('admin/models/table.modelnumber')); ?></th>
                                                <th class="col-md-2" data-field="name" data-sortable="true"><?php echo e(trans('admin/hardware/form.name')); ?></th>
                                                <th class="col-md-3" data-field="serial" data-sortable="true"><?php echo e(trans('admin/hardware/table.serial')); ?></th>
                                                <th class="col-md-2" data-field="location" data-sortable="true"><?php echo e(trans('admin/hardware/table.location')); ?></th>
                                                <th class="col-md-2" data-field="status" data-sortable="true"><?php echo e(trans('admin/hardware/table.status')); ?></th>
                                                <th class="col-md-2" data-field="expected_checkin" data-formatter="dateDisplayFormatter" data-sortable="true"><?php echo e(trans('admin/hardware/form.expected_checkin')); ?></th>
                                                <th class="col-md-1" data-formatter="assetRequestActionsFormatter" data-field="actions" data-sortable="false"><?php echo e(trans('table.actions')); ?></th>
                                            </tr>
                                        </thead>
                                    </table>
                                </div>
                    </div>
                </div>
            </div>

                <div class="tab-pane fade" id="models">
                    <div class="row">
                        <div class="col-md-12">

                            <?php if($models->count() > 0): ?>
                            <h4>Requestable Models</h4>
                                <table
                                        name="requested-assets"
                                        data-toolbar="#toolbar"
                                        class="table table-striped snipe-table"
                                        id="table"
                                        data-advanced-search="true"
                                        data-id-table="advancedTable"
                                        data-cookie-id-table="requestableAssets">
                                <thead>
                                    <tr role="row">
                                        <th class="col-md-1" data-sortable="true"><?php echo e(trans('general.image')); ?></th>
                                        <th class="col-md-6" data-sortable="true"><?php echo e(trans('admin/hardware/table.asset_model')); ?></th>
                                        <th class="col-md-3" data-sortable="true"><?php echo e(trans('admin/accessories/general.remaining')); ?></th>

                                        <th class="col-md-2 actions" data-sortable="false"><?php echo e(trans('table.actions')); ?></th>
                                    </tr>
                                </thead>

                                <tbody>
                                    <?php $__currentLoopData = $models; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $requestableModel): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <tr>

                                                <td>

                                                    <?php if($requestableModel->image): ?>
                                                        <a href="<?php echo e(url('/')); ?>/uploads/models/<?php echo e($requestableModel->image); ?>" data-toggle="lightbox" data-type="image">
                                                            <img src="<?php echo e(url('/')); ?>/uploads/models/<?php echo e($requestableModel->image); ?>" style="max-height: <?php echo e($snipeSettings->thumbnail_max_h); ?>px; width: auto;" class="img-responsive">
                                                        </a>
                                                    <?php endif; ?>

                                                </td>


                                                <td><?php echo e($requestableModel->name); ?></td>
                                                <td><?php echo e($requestableModel->assets->where('requestable', '1')->count()); ?></td>

                                                <td>
                                                    <form  action="<?php echo e(route('account/request-item', ['itemType' => 'asset_model', 'itemId' => $requestableModel->id])); ?>" method="POST" accept-charset="utf-8">
                                                        <?php echo e(csrf_field()); ?>

                                                    <input type="text" style="width: 70px; margin-right: 10px;" class="form-control pull-left" name="request-quantity" value="" placeholder="<?php echo e(trans('general.qty')); ?>">
                                                    <?php if($requestableModel->isRequestedBy(Auth::user())): ?>
                                                        <?php echo e(Form::submit(trans('button.cancel'), ['class' => 'btn btn-danger btn-sm'])); ?>

                                                    <?php else: ?>
                                                        <?php echo e(Form::submit(trans('button.request'), ['class' => 'btn btn-primary btn-sm'])); ?>

                                                    <?php endif; ?>
                                                    </form>
                                                </td>
                                        </tr>

                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </tbody>
                            </table>

                            <?php else: ?>
                                <div class="alert alert-info alert-block">
                                    <i class="fa fa-info-circle"></i>
                                    <?php echo e(trans('general.no_results')); ?>

                                </div>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>

            </div> <!-- .tab-content-->
        </div> <!-- .nav-tabs-custom -->
    </div> <!-- .col-md-12> -->
</div> <!-- .row -->
<?php $__env->stopSection(); ?>


<?php $__env->startSection('moar_scripts'); ?>
    <?php echo $__env->make('partials.bootstrap-table', [
        'exportFile' => 'requested-export',
        'search' => true,
        'clientSearch' => true,
    ], array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>


    <script nonce="<?php echo e(csrf_token()); ?>">

    $( "a[name='Request']").click(function(event) {
        // event.preventDefault();
        quantity = $(this).closest('td').siblings().find('input').val();
        currentUrl = $(this).attr('href');
        // $(this).attr('href', currentUrl + '?quantity=' + quantity);
        // alert($(this).attr('href'));
    });
</script>
<?php $__env->stopSection(); ?>



<?php echo $__env->make('layouts/default', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
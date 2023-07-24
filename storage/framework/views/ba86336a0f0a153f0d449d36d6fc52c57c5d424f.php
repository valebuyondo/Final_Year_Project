<?php $__env->startSection('title'); ?>
    <?php echo e(trans('general.audit_report')); ?>

    ##parent-placeholder-3c6de1b7dd91465d437ef415f94f36afc1fbc8a8##
<?php $__env->stopSection(); ?>


<?php $__env->startSection('content'); ?>

    <div class="row">
        <div class="col-md-12">
            <div class="box box-default">
                <div class="box-body">

                    <table
                            data-cookie-id-table="auditReport"
                            data-pagination="true"
                            data-id-table="auditReport"
                            data-search="true"
                            data-side-pagination="server"
                            data-show-columns="true"
                            data-show-export="true"
                            data-show-refresh="true"
                            data-sort-order="asc"
                            id="auditReport"
                            data-url="<?php echo e(route('api.activity.index', ['action_type' => 'audit'])); ?>"
                            class="table table-striped snipe-table"
                            data-export-options='{
                        "fileName": "activity-report-<?php echo e(date('Y-m-d')); ?>",
                        "ignoreColumn": ["actions","image","change","checkbox","checkincheckout","icon"]
                        }'>

                        <thead>
                        <tr>
                            <th class="col-sm-1" data-field="image" data-visible="false" data-formatter="imageFormatter"><?php echo e(trans('admin/hardware/table.image')); ?></th>
                            <th class="col-sm-2" data-field="created_at" data-formatter="dateDisplayFormatter"><?php echo e(trans('general.audit')); ?></th>
                            <th class="col-sm-2" data-field="admin" data-formatter="usersLinkObjFormatter"><?php echo e(trans('general.admin')); ?></th>
                            <th class="col-sm-2" data-field="item" data-formatter="polymorphicItemFormatter"><?php echo e(trans('general.item')); ?></th>
                            <th class="col-sm-1" data-field="location" data-formatter="locationsLinkObjFormatter"><?php echo e(trans('general.location')); ?></th>
                            <th class="col-sm-2" data-field="next_audit_date" data-formatter="dateDisplayFormatter"><?php echo e(trans('general.next_audit_date')); ?></th>
                            <th class="col-sm-1" data-field="days_to_next_audit"><?php echo e(trans('general.days_to_next_audit')); ?></th>

                            <th class="col-sm-2" data-field="note"><?php echo e(trans('general.notes')); ?></th>
                        </tr>
                        </thead>
                    </table>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>


<?php $__env->startSection('moar_scripts'); ?>
    <?php echo $__env->make('partials.bootstrap-table', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts/default', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
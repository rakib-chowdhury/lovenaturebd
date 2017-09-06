<?php $__env->startSection('page_title','Package'); ?>
<?php $__env->startSection('page_header','Package'); ?>
<?php $__env->startSection('page_breadcrumb'); ?>
    <ol class="breadcrumb">
        <li><a href="<?php echo e(url('home/dashboard')); ?>">Dashboard</a></li>
        <li class="active">Package</li>
    </ol>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('page_content'); ?>
    <div class="col-sm-12">
        <div class="white-box">
            <div>
                <!-- Modal -->
                <a href="<?php echo e(url('package/add')); ?>" style="cursor: pointer;"
                   class="btn btn-success btn-rounded">Add New Package</a>
                <hr>
            </div>
            <div class="table-responsive">
                <table id="myTable" class="table table-striped color-bordered-table success-bordered-table">
                    <thead>
                    <tr>
                        <th style="text-align: center; width: 4%;">#</th>
                        
                        <th style="text-align: center; ">Package Code</th>
                        <th style="text-align: center; ">Country Name</th>
                        <th style="text-align: center; ">City Name</th>
                        <th style="text-align: center; ">Package Name</th>
                        
                        <th style="text-align: center; ">Category</th>
                        <th style="text-align: center; ">Status</th>
                        <th style="text-align: center; width: 8%;">
                            <span class="glyphicon glyphicon-wrench"></span>
                        </th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php if ($package_info == null) {
                        echo 'No Package';
                    } else {  ?>

                    <?php foreach ($package_info as $key => $u) { ?>
                    <tr>
                        <td style="text-align: center; "><?= $key + 1 ?></td>
                        <td style="text-align: center;"><?= $u->package_code ?></td>
                        <td style="text-align: center;"><?= $u->hasCountry->country_name ?></td>
                        <td style="text-align: center;"><?= $u->city_name ?></td>
                        <td style="text-align: center;"><?= $u->package_name ?></td>
                        <td style="text-align: center;"><?= $u->category ?></td>
                        <td>
                            <?php
                            if($u->status == 1){ ?>
                            <a href="<?php echo e(url('package/status_change/'.$u->id)); ?>" data-toggle="tooltip"
                               title="Status Change" style="cursor: pointer;">
                                <span class="label label-success"><?php echo e('Active'); ?></span>
                            </a>
                            <?php }else{?>
                            <a href="<?php echo e(url('package/status_change/'.$u->id)); ?>" data-toggle="tooltip"
                               title="Status Change" style="cursor: pointer;">
                                <span class="label label-danger"><?php echo e('Block'); ?></span>
                            </a>
                            <?php }
                            ?>
                        </td>
                        <td style="text-align: center; ">
                            <a style="cursor: pointer;" data-toggle="modal" data-target="#myModal_<?php echo e($u->id); ?>">
							    <span style="color:green" data-toggle="tooltip" data-placement="top" title="View"
                                      class="glyphicon glyphicon-eye-open">
								</span>
                            </a>
                            <a style="cursor: pointer;" href="<?php echo e(url('package/edit')); ?>/<?php echo e($u->id); ?>">
                                <span data-toggle="tooltip" data-placement="top" title="Edit"
                                      class="glyphicon glyphicon-edit"></span>
                            </a>
                            <!-- Modal -->
                            <a href="<?php echo e(url('package/delete')); ?>/<?php echo e($u->id); ?>">
                                <span data-toggle="tooltip" data-placement="top" title="Delete"
                                      style="color: red" class="glyphicon glyphicon-trash"></span>
                            </a>
                            <div id="myModal_<?=$u['id']?>" class="modal fade" role="dialog">
                                <div class="modal-dialog">
                                    <!-- Modal content-->
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                                            <h4 class="modal-title">Package Details</h4>
                                        </div>
                                        <div class="modal-body">
                                            <table class="table table-bordered table-striped">
                                                <tr>
                                                    <td colspan="2">
                                                        <?php foreach ($u->hasImage as $row) { ?>
                                                        <img style="width:100px; height:80px;"
                                                             src="<?php echo e(url('public/images/package/' . $row->image)); ?>">
                                                        <?php } ?>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td style="padding:5px;">Title</td>
                                                    <td style="padding:5px;"><?php echo e($u->title); ?></td>
                                                </tr>
                                                <tr>
                                                    <td style="padding:5px;">Country Name</td>
                                                    <td style="padding:5px;"><?php echo e($u->hasCountry->country_name); ?></td>
                                                </tr>
                                                <tr>
                                                    <td style="padding:5px;">City Name</td>
                                                    <td style="padding:5px;"><?php echo e($u->city_name); ?></td>
                                                </tr>
                                                <tr>
                                                    <td style="padding:5px;">Hotel Name</td>
                                                    <td style="padding:5px;">
                                                        <?php $__currentLoopData = $u->hasHotel; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$htl): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
                                                            <?php if($key!=0): ?>
                                                                <?php echo e(', '); ?>

                                                            <?php endif; ?>
                                                            <?php echo e($htl->hasHotel->hotel_name); ?>

                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td style="padding:5px;">Package Name</td>
                                                    <td style="padding:5px;"><?php echo e($u->package_name); ?></td>
                                                </tr>
                                                <tr>
                                                    <td style="padding:5px;">Package Code</td>
                                                    <td style="padding:5px;"><?php echo e($u->package_code); ?></td>
                                                </tr>
                                                <tr>
                                                    <td style="padding:5px;">Package Type</td>
                                                    <td style="padding:5px;"><?php echo e($u->hasType->package_type_name); ?></td>
                                                </tr>

                                                <tr>
                                                    <td style="padding:5px;">Package Description</td>
                                                    <td style="padding:5px;"><?= $u->package_description ?></td>
                                                </tr>
                                                <tr>
                                                    <td style="padding:5px;">Category</td>
                                                    <td style="padding:5px;"><?php echo e($u->category); ?></td>
                                                </tr>
                                                <tr>
                                                    <td style="padding:5px;">Tour Details</td>
                                                    <td style="padding:5px;"><?= $u->tour_details ?></td>
                                                </tr>
                                                <tr>
                                                    <td style="padding:5px;">Important Notes</td>
                                                    <td style="padding:5px;"><?= $u->important_notes ?></td>
                                                </tr>
                                                <tr>
                                                    <td style="padding:5px;">Terms & Conditions</td>
                                                    <td style="padding:5px;"><?= $u->terms_conditions ?></td>
                                                </tr>
                                            </table>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-default" data-dismiss="modal">Close
                                            </button>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </td>
                    </tr>
                    <?php }} ?>

                    </tbody>
                </table>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('vantage.layout.main', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
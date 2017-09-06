<?php $__env->startSection('page_title','Hot Deals'); ?>
<?php $__env->startSection('page_header','Hot deals'); ?>
<?php $__env->startSection('page_breadcrumb'); ?>
    <ol class="breadcrumb">
        <li><a href="<?php echo e(url('home/dashboard')); ?>">Dashboard</a></li>
        <li class="active">Hot Deals</li>
    </ol>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('page_content'); ?>
    <div class="col-sm-12">
        <div class="white-box">
            
            <div>
                <a href="<?php echo e(url('hot_deals/add')); ?>" class="btn btn-success btn-rounded">Add Hot Deals</a>
                <a href="<?php echo e(url('hot_deals/type_add')); ?>" class="btn btn-success btn-rounded">Add New Type</a>
                <hr>
            </div>

            <div class="table-responsive">
                <table id="myTable" class="table table-striped color-bordered-table success-bordered-table">
                    <thead>
                    <tr>
                        <th style="text-align: center; width: 4%;">#</th>
                        <th style="text-align: center; ">Title</th>
                        <th style="text-align: center; ">Package Code</th>
                        <th style="text-align: center; ">Package type</th>
                        <th style="text-align: center; width: 15%;">
                            <span class="glyphicon glyphicon-wrench"></span>
                        </th>
                    </tr>
                    </thead>
                    <tbody>

                    <?php foreach ($hot_deals as $key=>$u) { ?>
                    <tr>
                        <td style="text-align: center; "><?php echo e($key+1); ?></td>
                        <td style="text-align: center;"><?php echo e($u->title); ?></td>
                        <td style="text-align: center;"><?php echo e($u->package_code); ?></td>
                        <td style="text-align: center;"><?php echo e($u->hasType->package_type_name); ?></td>
                        
                        
                        <!-- Modal -->
                        <td style="text-align: center; ">
                            <a style="cursor: pointer;" data-toggle="modal" data-target="#myModal_<?=$u['id']?>">
							    <span style="color:green" data-toggle="tooltip" data-placement="top" title="View"
                                      class="glyphicon glyphicon-eye-open">
								</span>
                            </a>
                            <a href="<?php echo e(url('hot_deals/edit')); ?>/<?php echo e($u->id); ?>">
                                <span data-toggle="tooltip" data-placement="top" title="Edit"
                                      class="glyphicon glyphicon-edit"></span>
                            </a>&nbsp;
                            <a href="<?php echo e(url('hot_deals/delete')); ?>/<?php echo e($u->id); ?>">
                                <span data-toggle="tooltip" data-placement="top" title="Delete"
                                      style="color: red" class="glyphicon glyphicon-trash"></span>
                            </a>
                            <div id="myModal_<?=$u['id']?>" class="modal fade" role="dialog">
                                <div class="modal-dialog">
                                    <!-- Modal content-->
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                                            <h4 class="modal-title">Hot Deal Details</h4>
                                        </div>
                                        <div class="modal-body">
                                            <table class="table table-bordered table-striped">
                                                <tr>
                                                    <td colspan="2">
                                                        <?php foreach ($u->hasImage as $row) { ?>
                                                        <img style="width:100px; height:80px;"
                                                             src="<?php echo e(url('public/images/hot_deals/'.$row->image)); ?>">
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
                                                    <td style="padding:5px;">Package Type</td>
                                                    <td style="padding:5px;"><?php echo e($u->hasType->package_type_name); ?></td>
                                                </tr>

                                                <tr>
                                                    <td style="padding:5px;">City Name</td>
                                                    <td style="padding:5px;"><?php echo e($u->city_name); ?></td>
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
                    <?php } ?>

                    </tbody>
                </table>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<script>
    function chkIMG() {
        $('#image').attr('required', 'true');
        document.getElementById('isImg').value = 1;
    }
</script>

<?php echo $__env->make('vantage.layout.main', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
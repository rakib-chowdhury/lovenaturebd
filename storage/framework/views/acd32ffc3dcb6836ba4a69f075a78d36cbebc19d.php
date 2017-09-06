<?php $__env->startSection('page_title','Hotels'); ?>
<?php $__env->startSection('page_header','Hotels List'); ?>
<?php $__env->startSection('page_breadcrumb'); ?>
    <ol class="breadcrumb">
        <li><a href="<?php echo e(url('home/dashboard')); ?>">Dashboard</a></li>
        <li class="active">Hotels</li>
    </ol>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('page_content'); ?>
    <div class="col-sm-12">
        <div class="white-box">
            
            <div>
                <a href="<?php echo e(url('hotel/add')); ?>" class="btn btn-success btn-rounded">Add hotel</a>
                <hr>
            </div>

            <div class="table-responsive">
                <table id="myTable" class="table table-striped color-bordered-table success-bordered-table">
                    <thead>
                    <tr>
                        <th style="text-align: center; width: 4%;">#</th>
                        <th style="text-align: center; ">Country Name</th>
                        <th style="text-align: center; ">City Name</th>
                        <th style="text-align: center; ">Hotel Name</th>
                        <th style="text-align: center; width: 15%;">
                            <span class="glyphicon glyphicon-wrench"></span>
                        </th>
                    </tr>
                    </thead>
                    <tbody>

                    <tr>
                        <?php foreach ($hotel as $key=>$u) { ?>
                        <td style="text-align: center; "><?php echo e($key+1); ?></td>
                        <td style="text-align: center;"><?php echo e($u->hasCountry->country_name); ?></td>
                        <td style="text-align: center;"><?php echo e($u->city_name); ?></td>
                        <td style="text-align: center;"><?php echo e($u->hotel_name); ?></td>
                        <!-- Modal -->
                        <td style="text-align: center; ">
                            <a style="cursor: pointer;" data-toggle="modal" data-target="#myModal_<?=$u['id']?>">
							    <span style="color:green" data-toggle="tooltip" data-placement="top" title="View"
                                      class="glyphicon glyphicon-eye-open">
								</span>
                            </a>
                            <a href="<?php echo e(url('hotel/edit')); ?>/<?php echo e($u->id); ?>">
                                <span data-toggle="tooltip" data-placement="top" title="Edit"
                                      class="glyphicon glyphicon-edit"></span>
                            </a>&nbsp;
                            <a href="<?php echo e(url('hotel/delete')); ?>/<?php echo e($u->id); ?>">
                                <span data-toggle="tooltip" data-placement="top" title="Delete"
                                      style="color: red" class="glyphicon glyphicon-trash"></span>
                            </a>
                            <div id="myModal_<?=$u['id']?>" class="modal fade" role="dialog">
                                <div class="modal-dialog">
                                    <!-- Modal content-->
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                                            <h4 class="modal-title">Hotel Details</h4>
                                        </div>
                                        <div class="modal-body">
                                            <table class="table table-bordered table-striped">
                                                <tr>
                                                    <td colspan="2">
                                                        <img style="width:100px; height:80px;"
                                                             src="<?php echo e(url('public/images/hotel/'.$u->image)); ?>">
                                                    </td>
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
                                                    <td style="padding:5px;">শহরের নাম</td>
                                                    <td style="padding:5px;"><?php echo e($u->hasHotel->city_name); ?></td>
                                                </tr>
                                                <tr>
                                                    <td style="padding:5px;">Hotel Name</td>
                                                    <td style="padding:5px;"><?php echo e($u->hotel_name); ?></td>
                                                </tr>
                                                <tr>
                                                    <td style="padding:5px;">হোটেলের নাম</td>
                                                    <td style="padding:5px;"><?php echo e($u->hasHotel->hotel_name); ?></td>
                                                </tr>
                                                <tr>
                                                    <td style="padding:5px;">Hotel Category</td>
                                                    <td style="padding:5px;"><?php echo e($u->hotel_category); ?></td>
                                                </tr>
                                                <tr>
                                                    <td style="padding:5px;">হোটেলের ক্যাটাগরি</td>
                                                    <td style="padding:5px;"><?php echo e($u->hasHotel->hotel_category); ?></td>
                                                </tr>
                                                <tr>
                                                    <td style="padding:5px;">Room Category</td>
                                                    <td style="padding:5px;"><?php echo e($u->room_category); ?></td>
                                                </tr>
                                                <tr>
                                                    <td style="padding:5px;">রুম ক্যাটাগরি</td>
                                                    <td style="padding:5px;"><?php echo e($u->hasHotel->room_category); ?></td>
                                                </tr>
                                                <tr>
                                                    <td style="padding:5px;">Room Facility</td>
                                                    <td style="padding:5px;"><?php echo e($u->room_facility); ?></td>
                                                </tr>
                                                <tr>
                                                    <td style="padding:5px;">রুমের সুবিধা</td>
                                                    <td style="padding:5px;"><?php echo e($u->hasHotel->room_facility); ?></td>
                                                </tr>
                                                <tr>
                                                    <td style="padding:5px;">Room Price</td>
                                                    <td style="padding:5px;"><?= $u->room_price ?></td>
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
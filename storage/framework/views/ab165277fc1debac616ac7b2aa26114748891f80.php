<?php $__env->startSection('page_title','Gallery'); ?>
<?php $__env->startSection('page_header','Gallery'); ?>
<?php $__env->startSection('page_breadcrumb'); ?>
    <ol class="breadcrumb">
        <li><a href="<?php echo e(url('home/dashboard')); ?>">Dashboard</a></li>
        <li class="active">Gallery</li>
    </ol>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('page_content'); ?>
    <div class="col-sm-12">
        <div class="white-box">
            <div>
                <!-- Modal -->
                <a href="<?php echo e(url('gallery/add')); ?>" style="cursor: pointer;"
                   class="btn btn-success btn-rounded">Add Gallery Picture</a>
                <hr>
            </div>
            <div class="table-responsive">
                <table id="myTable" class="table table-striped color-bordered-table success-bordered-table">
                    <thead>
                    <tr>
                        <th style="text-align: center; width: 4%;">#</th>
                        <th style="text-align: center; ">Image</th>
                        <th style="text-align: center; ">Country Name</th>
                        <th style="text-align: center; ">Caption</th>
                        <th style="text-align: center; ">ক্যাপশন(বাংলায়)</th>
                        <th style="text-align: center; width: 8%;">
                            <span class="glyphicon glyphicon-wrench"></span>
                        </th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php foreach ($gallery_pic as $key => $u) { ?>
                    <tr>
                        <td style="text-align: center; "><?= $key + 1 ?></td>
                        <td style="text-align: center;">
                            <?php if($u->image==null || $u->image==''): ?>
                                <img src="<?php echo e(url('public/images/no_img.png')); ?>" alt="">
                            <?php else: ?>
                                <img style=" width: 120px; height:80px;"
                                     src="<?php echo e(url('public/images/gallery/'.$u->image)); ?>" alt="<?php echo e($u->image); ?>">
                        <?php endif; ?>
                        <td style="text-align: center;"><?= $u->hasCountry->country_name ?></td>
                        <td style="text-align: center;"><?= $u->caption ?></td>
                        <td style="text-align: center;"><?= $u->caption_bn ?></td>
                        <td style="text-align: center; ">
                            <a style="cursor: pointer;"  data-toggle="modal" data-target="#editPic_<?php echo e($u->id); ?>">
                                <span data-toggle="tooltip" data-placement="top" title="Replace"
                                      class="glyphicon glyphicon-edit"></span>
                            </a>&nbsp;
                            <!-- Modal -->
                            <div id="editPic_<?php echo e($u->id); ?>" class="modal fade" role="dialog">
                                <div class="modal-dialog">
                                    <!-- Modal content-->
                                    <form onsubmit="return chkIMG2()" enctype="multipart/form-data"
                                          action="<?php echo e(url('gallery/edit_post')); ?>" method="post">
                                        <?php echo e(csrf_field()); ?>

                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <button type="button" class="close"
                                                        data-dismiss="modal">&times;</button>
                                                <h4 class="modal-title" style="text-align: center">Replace Gallery Picture</h4>
                                            </div>
                                            <div class="modal-body">
                                                <input type="hidden" name="id" value="<?php echo e($u->id); ?>">
                                                <div class="row">
                                                    <div class="form-group col-md-12">
                                                        <label for="image" class="control-label">Image</label>
                                                        <input type="hidden" name="isImg" id="isImg" value="0">
                                                        <input required type="file"
                                                               class="dropify" name="image" id="image1"
                                                               data-default-file="">
                                                        <span style="color: peru;">Image should be less than 1mb and image should be in jpg,png format.</span>
                                            <span id="image_err" style="color: red;"><br>
                                                <?php if($errors->has('image')): ?><?php echo e('Image should be less than 1mb and image should be in jpg,png format.'); ?><?php endif; ?>
                                            </span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-danger btn-rounded"
                                                        data-dismiss="modal">Close
                                                </button>
                                                <button type="submit" class="btn btn-success btn-rounded">Submit
                                                </button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <a href="<?php echo e(url('gallery/delete')); ?>/<?php echo e($u->id); ?>">
                                <span data-toggle="tooltip" data-placement="top" title="Delete"
                                      style="color: red" class="glyphicon glyphicon-trash"></span>
                            </a>
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
        $('#image').attr('required','true');
        // $('#image').removeAttr('data-default-file');
        document.getElementById('isImg').value=1;
    }
</script>


<?php echo $__env->make('vantage.layout.main', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
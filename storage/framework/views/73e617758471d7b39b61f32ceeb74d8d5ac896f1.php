<?php $__env->startSection('page_title','Gallery'); ?>
<?php $__env->startSection('page_header','Add Gallery'); ?>
<?php $__env->startSection('page_breadcrumb'); ?>
    <ol class="breadcrumb">
        <li><a href="<?php echo e(url('home/dashboard')); ?>">Dashboard</a></li>
        <li><a href="<?php echo e(url('gallery/show')); ?>">Gallery</a></li>
        <li class="active">Add Gallery Picture</li>
    </ol>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('page_content'); ?>
    <div class="col-sm-12">
        <div class="white-box">
            <form onsubmit=" return chkDoc()" data-toggle="validator" enctype="multipart/form-data"
                  id="info" action="<?php echo e(url('gallery/add_post')); ?>" method="post">
                <?php echo e(csrf_field()); ?>

                <div class="row">
                    <div class="form-group col-md-12">
                        <label for="control-label col-md-3"><span style="color: red;">* </span>Image</label>
                        <input required type="file"
                               class="dropify" name="image"
                               data-default-file="">
                        <span style="color: peru;">Image should be less than 1mb and image should be in jpg,png format.</span>
                        <span id="image_err" style="color: red;"><br>
                            <?php if($errors->has('image')): ?><?php echo e('Image should be less than 1mb and image should be in jpg,png format.'); ?><?php endif; ?>
                        </span>
                    </div>
                </div>
                <div class="row">
                    <div class="form-group col-md-6">
                        <label for="country_name" class="control-label"><span style="color: red;">* </span>Country Name</label>
                        <select required class="form-control" name="country_name"
                                id="country_name">
                            <?php $__currentLoopData = $country; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row2): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
                                <option value="<?php echo e($row2->id); ?>"><?php echo e($row2->country_name); ?></option>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
                        </select>
                        <span id="name_err" style="color: red;">
                            <?php if($errors->has('name')): ?><?php echo e('Required'); ?><?php endif; ?>
                        </span>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="caption" class="control-label"><span style="color: red;">* </span>caption</label>
                        <input type="text" required class="form-control"
                               name="caption" id="caption" placeholder="Caption"
                               value="<?php echo e(old('caption')); ?>">
                        <span id="name_err" style="color: red;">
                            <?php if($errors->has('name')): ?><?php echo e('Required'); ?><?php endif; ?>
                        </span>
                    </div>
                </div>
                <div class="row">
                    <div class="form-group col-md-6">
                        <label for="caption_bn" class="control-label"><span style="color: red;">* </span>ক্যাপশন(বাংলায়)</label>
                        <input type="text" required class="form-control"
                               name="caption_bn" id="caption_bn" placeholder="ক্যাপশন(বাংলায়)"
                               value="<?php echo e(old('caption_bn')); ?>">
                        <span id="name_err" style="color: red;">
                            <?php if($errors->has('name')): ?><?php echo e('Required'); ?><?php endif; ?>
                        </span>
                    </div>
                </div>
                <div class="form-group" style="text-align: center">
                    <button id="submitBTN" type="submit" class="btn btn-success">Submit</button>
                </div>
            </form>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<script>
    function chkDoc() {
        var flag = true;
        var name = document.getElementById('name').value;
        name = name.replace(/\s+/g, '');
        if (name == null || name == '') {
            document.getElementById('name_err').innerText = 'This field should have a value';
            flag = false;
        } else {
            document.getElementById('name_err').innerText = '';
        }
        return flag;
    }
</script>
<?php echo $__env->make('vantage.layout.main', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
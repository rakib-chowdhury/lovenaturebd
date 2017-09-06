<?php $__env->startSection('content'); ?>    
    <section class="search">
        <div class="container">
            <div class="row" style="padding:50px;"></div>
            <div class="row" style="border:1px solid #50b37c; ">
                <div class="col-lg-12 " style="background-color:#50b37c; color:#fff; padding:5px; font-size: x-large;">                    
                    <i class="fa fa-search"></i> <?php if(session('language')=='bn'): ?><?php echo e('প্যাকেজ কোড দ্বারা অনুসন্ধান'); ?><?php else: ?><?php echo e('Search By Product Code'); ?><?php endif; ?>
                </div>
                
                <div class="col-lg-12" style="padding:10px;">                    
                    <form action="<?php echo e(url('search')); ?>" method="get">
                         <div class="col-md-3">
                             <input type="text" name="p_code" class='form-control' placeholder="<?php if(session('language')=='bn'): ?><?php echo e('অনুসন্ধান'); ?><?php else: ?><?php echo e('Search'); ?><?php endif; ?>">
                         </div>
                         <div class="col-md-1">
                             <button type="submit" name='submit' value='1' style='background-color:#50b37c !important; color:#fff' class='btn btn-raised'><?php if(session('language')=='bn'): ?><?php echo e('অনুসন্ধান'); ?><?php else: ?><?php echo e('Search'); ?><?php endif; ?></button>
                         </div>
                    </form>
                </div>
                <?php if($showDiv==1): ?>
                    <div class="col-lg-12">
                       <hr>                       
                       <?php if(session('language')=='bn'): ?>
                           <?php if($package_bn==null): ?>
                           <?php echo e('কোনো তথ্য নেই'); ?>

                           <?php else: ?>
                            <div class="row">
                                <div class="col-md-3">
                                    <div><?php echo e($package_bn->title); ?></div>
                                    <div><img style="height:160px; width:100%;" src="<?php echo e(url('public/images/package/'.$package_bn->hasImage[0]->image)); ?>" alt="no img"></div>
                                    <div>প্যাকেজ কোড: <?php echo e($package_bn->package_code); ?></div>
                                </div>
                                <div class="col-md-6">
                                    <div><?php echo e($package_bn->package_name); ?></div>
                                    <div><?= $package_bn->package_description; ?></div>
                                </div>
                                <div class="col-md-2">
                                     <a href="<?php echo e(url('package/view_details/'.$package_bn->id)); ?>"><button class="btn btn-raised" style="background-color:#50b37c !important; color:#fff">বিস্তারিত দেখুন</button></a>
                                </div>
                            </div>
                           <?php endif; ?>
                       <?php else: ?>
                           <?php if($package==null): ?>
                           <?php echo e('No Package Found'); ?>

                           <?php else: ?>
                            <div class="row">
                                <div class="col-md-3">
                                    <div><?php echo e($package->title); ?></div>
                                    <div><img style="height:160px; width:100%;" src="<?php echo e(url('public/images/package/'.$package->hasImage[0]->image)); ?>" alt="no img"></div>
                                    <div>Package Code : <?php echo e($package->package_code); ?></div>
                                </div>
                                <div class="col-md-6">
                                    <div><?php echo e($package->package_name); ?></div>
                                    <div><?= $package->package_description; ?></div>
                                </div>
                                <div class="col-md-2">
                                     
                                     <a href="<?php echo e(url('package/view_details/'.$package->id)); ?>   "><button class="btn btn-raised" style="background-color:#50b37c !important; color:#fff">Read More</button></a>
                                </div>
                            </div>
                           <?php endif; ?>
                       <?php endif; ?>
                    </div>
                <?php endif; ?>
                
            </div>
            
        </div><br>
    </section>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('home.layout.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
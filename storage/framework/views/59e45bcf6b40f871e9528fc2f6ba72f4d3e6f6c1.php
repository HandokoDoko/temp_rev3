<?php $__env->startSection('subtitle'); ?>
    Create Event
    <small>
        <ol class="breadcrumb">
            <li>
                <a href="<?php echo e(url('/home')); ?>">
                    Dashboard
                </a>
            </li>
            <li class="active">
                Event
            </li>
        </ol>
    </small>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<div class="section margin-top-70">
    <!-- start: MAIN CONTAINER -->
            <div class="main-container inner">
                <!-- start: PAGE -->
                <div class="main-content">
                    <div class="container">
                        <!-- start: PAGE CONTENT -->
                        <div class="row">
                            <div class="col-sm-12">
                                
                            </div>
                        </div>
                        <!-- end: PAGE CONTENT-->
                    </div>
                    <div class="subviews">
                        <div class="subviews-container"></div>
                    </div>
                </div>
                <!-- end: PAGE -->
            </div>
</div>

<?php $__env->stopSection(); ?>




<?php $__env->startSection('script'); ?>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
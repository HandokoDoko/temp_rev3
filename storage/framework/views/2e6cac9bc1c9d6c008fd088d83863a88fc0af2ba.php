<?php $__env->startSection('subtitle'); ?>
    <small>
        <ol class="breadcrumb">
            <li>
                <a href="<?php echo e(url('/home')); ?>">
                    Dashboard
                </a>
            </li>
            <li>
                <a href="<?php echo e(url('/event')); ?>">
                    Event
                </a>
            </li>
            <li class="active">
                Create Form
            </li>
        </ol>
    </small>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('css'); ?>
<style type="text/css">
    .swMain > ul li > a::before {
        border-top: none !important;
    }
    .swMain > ul{
        width: 25% !important;
    }
    .swMain > ul li {
        display: block !important;
        text-align:left !important;
        width: auto !important;
        padding-left: 20px;
    }
    .swMain > ul li .stepDesc {
        text-align: left !important;
    }
</style>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<div class="container">
    <!-- start: PAGE CONTENT -->
    <div class="section section-regist">
        <div class="panel-body">
        <?php echo coolRowBox_Begin('Create Certificate','Form'); ?>

        <form action="<?php echo e(url('/event/create')); ?>" role="form" class="smart-wizard form-horizontal" id="form" method="POST" autocomplete="off">
            <?php echo csrf_field(); ?>

            <div id="wizard" class="swMain row">
                <ul class="col-sm-3" style="margin-top: 26px;">
                    <li>
                        <a href="#step-1">
                            <span class="stepDesc">
                                <small>Event Detail</small> </span>
                        </a>
                    </li>
                    <li>
                        <a href="#step-2">
                            <span class="stepDesc">
                                <small>Choose Template</small> </span>
                        </a>
                    </li>
                    <li>
                        <a href="#step-3">
                            <span class="stepDesc">
                                <small>Preview Template (Skip aja)</small> </span>
                        </a>
                    </li>
                    <li>
                        <a href="#step-4">
                            <span class="stepDesc">
                                <small>Summary</small> </span>
                        </a>
                    </li>
                </ul>

                <div class="stepContainer col-sm-9">
                    <div class="progress progress-xs transparent-black no-radius active">
                        <div aria-valuemax="100" aria-valuemin="0" role="progressbar" class="progress-bar partition-green step-bar">
                            <span class="sr-only"> 0% Complete (success)</span>
                        </div>
                    </div>

                    <div id="step-1">
                        <h3 class="StepTitle">Event Detail</h3>
                        <div class="form-group<?php echo e($errors->has('eventName') ? ' has-error' : ''); ?>">
                            <label class="col-sm-3 control-label">
                                Event Name <span class="symbol required"></span>
                            </label>
                            <div class="col-sm-7">
                                <input type="text" class="form-control" id="eventName" name="eventName" value="<?php echo e(old('orgName')); ?>">

                                <?php if($errors->has('eventName')): ?>
                                    <span class="help-block">
                                        <strong><?php echo e($errors->first('orgName')); ?></strong>
                                    </span>
                                <?php endif; ?>
                            </div>
                        </div>
                        <div class="form-group<?php echo e($errors->has('eventSpeaking') ? ' has-error' : ''); ?>">
                            <label class="col-sm-3 control-label">
                                Event Speaker <span class="symbol required"></span>
                            </label>
                            <div class="col-sm-7">
                                <input type="text" class="form-control" id="eventSpeaking" name="eventSpeaking" value="<?php echo e(old('orgName')); ?>">

                                <?php if($errors->has('eventSpeaking')): ?>
                                    <span class="help-block">
                                        <strong><?php echo e($errors->first('eventSpeaking')); ?></strong>
                                    </span>
                                <?php endif; ?>
                            </div>
                        </div>
                        <div class="form-group<?php echo e($errors->has('date') ? ' has-error' : ''); ?>">
                            <label class="col-sm-3 control-label">
                                Event Date <span class="symbol required"></span>
                            </label>
                            <div class="col-sm-7">
                                <input type="date" class="form-control" id="date" name="date" value="<?php echo e(old('orgName')); ?>">

                                <?php if($errors->has('date')): ?>
                                    <span class="help-block">
                                        <strong><?php echo e($errors->first('date')); ?></strong>
                                    </span>
                                <?php endif; ?>
                            </div>
                        </div>

                        <div class="form-group<?php echo e($errors->has('enrollKey') ? ' has-error' : ''); ?>">
                            <label class="col-sm-3 control-label">
                                Enroll Key <span class="symbol required"></span>
                            </label>
                            <div class="col-sm-7">
                                <input type="text" class="form-control" id="enrollKey" name="enrollKey" value="<?php echo e(old('orgName')); ?>">

                                <?php if($errors->has('enrollKey')): ?>
                                    <span class="help-block">
                                        <strong><?php echo e($errors->first('enrollKey')); ?></strong>
                                    </span>
                                <?php endif; ?>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-2 col-sm-offset-8">
                                <button class="btn btn-blue next-step btn-block">
                                    Next <i class="fa fa-arrow-circle-right"></i>
                                </button>
                            </div>
                        </div>
                    </div>

                    <div id="step-2">
                        <h3 class="StepTitle">Choose Template</h3>

                        <div class="form-group">
                            <div class="col-sm-2 col-sm-offset-3">
                                <button class="btn btn-light-grey back-step btn-block">
                                    <i class="fa fa-circle-arrow-left"></i> Back
                                </button>
                            </div>
                            <div class="col-sm-2 col-sm-offset-3">
                                <button class="btn btn-blue next-step btn-block">
                                    Next <i class="fa fa-arrow-circle-right"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                 
                    <div id="step-3">
                        <h3 class="StepTitle">Preview Template</h3>

                        <div class="form-group">
                            <div class="col-sm-2 col-sm-offset-3">
                                <button class="btn btn-light-grey back-step btn-block">
                                    <i class="fa fa-circle-arrow-left"></i> Back
                                </button>
                            </div>
                            <div class="col-sm-2 col-sm-offset-3">
                                <button class="btn btn-blue next-step btn-block">
                                    Next <i class="fa fa-arrow-circle-right"></i>
                                </button>
                            </div>
                        </div>
                    </div>

                    <div id="step-4">
                        <h3 class="StepTitle">Summary</h3>
                        <h3>Account</h3>
                        <div class="form-group">
                            <label class="col-sm-3 control-label">
                                Username :
                            </label>
                            <div class="col-sm-7">
                                <p class="form-control-static display-value" data-display="userName"></p>
                            </div>
                        </div>

                        <h3>Organization</h3>
                        <div class="form-group">
                            <label class="col-sm-3 control-label">
                                Name :
                            </label>
                            <div class="col-sm-7">
                                <p class="form-control-static display-value" data-display="orgName"></p>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-3 control-label">
                                Email :
                            </label>
                            <div class="col-sm-7">
                                <p class="form-control-static display-value" data-display="orgEmail"></p>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-3 control-label">
                                Phone Number :
                            </label>
                            <div class="col-sm-7">
                                <p class="form-control-static display-value" data-display="orgPhone"></p>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-3 control-label">
                                Address :
                            </label>
                            <div class="col-sm-7">
                                <p class="form-control-static display-value" data-display="orgAddress"></p>
                            </div>
                        </div>


                        <h3>Personal</h3>
                        <div class="form-group">
                            <label class="col-sm-3 control-label">
                                Full Name :
                            </label>
                            <div class="col-sm-7">
                                <p class="form-control-static display-value" data-display="name"></p>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-3 control-label">
                                Email :
                            </label>
                            <div class="col-sm-7">
                                <p class="form-control-static display-value" data-display="email"></p>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-3 control-label">
                                Phone Number :
                            </label>
                            <div class="col-sm-7">
                                <p class="form-control-static display-value" data-display="phone"></p>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-2 col-md-offset-8">
                                <button type="submit" class="btn btn-primary">
                                    <i class="fa fa-btn fa-user"></i>Finish
                                </button>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="clear"></div>
            </div>
        </form>
        <?php echo coolRowBox_End(); ?>

        </div>
    </div>



    <div class="row">
        <div class="col-sm-12">
        </div>
    </div>
    <!-- end: PAGE CONTENT-->
</div>
<?php $__env->stopSection(); ?>



<?php $__env->startSection('script'); ?>
        <!-- start: JAVASCRIPTS REQUIRED FOR THIS PAGE ONLY -->
        <script src="<?php echo e(asset('')); ?>assets/plugins/jQuery-Smart-Wizard/js/jquery.smartWizard.js"></script>
        <script src="<?php echo e(asset('')); ?>assets/js/form-wizard.js"></script>
        <!-- end: JAVASCRIPTS REQUIRED FOR THIS PAGE ONLY -->
        <script>
            jQuery(document).ready(function() {
                FormWizard.init();
            });
        </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.intro', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
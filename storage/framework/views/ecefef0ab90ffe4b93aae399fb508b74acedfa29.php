<?php $__env->startSection('content'); ?>
<div class="section section section-regist margin-top-min20 container">
    <!-- start: MAIN CONTAINER -->
    <div class="panel-body">
        <form action="<?php echo e(url('/register')); ?>" role="form" class="smart-wizard form-horizontal" id="form" method="POST">
            <div id="wizard" class="swMain">
                <ul>
                    <li>
                        <a href="#step-1">
                            <div class="stepNumber">
                                1
                            </div>
                            <span class="stepDesc"> Step 1
                                <br />
                                <small>Your Organization</small> </span>
                        </a>
                    </li>
                    <li>
                        <a href="#step-2">
                            <div class="stepNumber">
                                2
                            </div>
                            <span class="stepDesc"> Step 2
                                <br />
                                <small>Your Own Profile</small> </span>
                        </a>
                    </li>
                    <li>
                        <a href="#step-3">
                            <div class="stepNumber">
                                3
                            </div>
                            <span class="stepDesc"> Step 3
                                <br />
                                <small>Your Authentication</small> </span>
                        </a>
                    </li>
                    <li>
                        <a href="#step-4">
                            <div class="stepNumber">
                                4
                            </div>
                            <span class="stepDesc"> Step 4
                                <br />
                                <small>Summary</small> </span>
                        </a>
                    </li>
                </ul>
                <div class="progress progress-xs transparent-black no-radius active">
                    <div aria-valuemax="100" aria-valuemin="0" role="progressbar" class="progress-bar partition-green step-bar">
                        <span class="sr-only"> 0% Complete (success)</span>
                    </div>
                </div>
                <?php echo csrf_field(); ?>


                <div id="step-1">
                    <h3 class="StepTitle">Organization Profile</h2>

                    <div class="form-group<?php echo e($errors->has('orgName') ? ' has-error' : ''); ?>">
                        <label class="col-sm-3 control-label">
                            Organization Name <span class="symbol required"></span>
                        </label>
                        <div class="col-sm-7">
                            <input type="text" class="form-control" id="orgName" name="orgName" value="<?php echo e(old('orgName')); ?>">

                            <?php if($errors->has('orgName')): ?>
                                <span class="help-block">
                                    <strong><?php echo e($errors->first('orgName')); ?></strong>
                                </span>
                            <?php endif; ?>
                        </div>
                    </div>

                    <div class="form-group<?php echo e($errors->has('orgEmail') ? ' has-error' : ''); ?>">
                        <label class="col-md-3 control-label">
                            Email Address
                        </label>
                        <div class="col-md-7">
                            <input type="email" class="form-control" name="orgEmail" value="<?php echo e(old('orgEmail')); ?>">

                            <?php if($errors->has('orgEmail')): ?>
                                <span class="help-block">
                                    <strong><?php echo e($errors->first('orgEmail')); ?></strong>
                                </span>
                            <?php endif; ?>
                        </div>
                    </div>

                    <div class="form-group<?php echo e($errors->has('orgPhone') ? ' has-error' : ''); ?>">
                        <label class="col-sm-3 control-label">
                            Phone Number
                        </label>
                        <div class="col-sm-7">
                            <input type="text" class="form-control" id="orgPhone" name="orgPhone" value="<?php echo e(old('orgPhone')); ?>">

                            <?php if($errors->has('orgPhone')): ?>
                                <span class="help-block">
                                    <strong><?php echo e($errors->first('orgPhone')); ?></strong>
                                </span>
                            <?php endif; ?>
                        </div>
                    </div>

                     <div class="form-group<?php echo e($errors->has('') ? ' has-error' : ''); ?>">
                        <label class="col-md-3 control-label">
                            Country
                        </label>
                        <div class="col-md-7">
                            <input type="text" class="form-control" name="orgCountry" value = "<?php echo e(old('orgCountry')); ?>">
                        </div>
                    </div>

                     <div class="form-group<?php echo e($errors->has('') ? ' has-error' : ''); ?>">
                        <label class="col-md-3 control-label">
                            City
                        </label>
                        <div class="col-md-7">
                            <input type="text" class="form-control" name="orgCity" value = "<?php echo e(old('orgCity')); ?>">
                        </div>
                    </div>

                    <div class="form-group<?php echo e($errors->has('orgAddress') ? ' has-error' : ''); ?>">
                        <label class="col-sm-3 control-label">
                            Address
                        </label>
                        <div class="col-sm-7">
                            <textarea cols="4" rows="3" class="form-control" id="orgAddress" name="orgAddress"><?php echo e(old('orgAddress')); ?></textarea>
                            <?php if($errors->has('orgAddress')): ?>
                                <span class="help-block">
                                    <strong><?php echo e($errors->first('orgAddress')); ?></strong>
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
                    <h3 class="StepTitle">Personal Data</h2>
                    <div class="form-group<?php echo e($errors->has('name') ? ' has-error' : ''); ?>">
                        <label class="col-md-3 control-label">
                            Full Name <span class="symbol required"></span>
                        </label>

                        <div class="col-md-7">
                            <input type="text" class="form-control" name="name" value="<?php echo e(old('name')); ?>">

                            <?php if($errors->has('name')): ?>
                                <span class="help-block">
                                    <strong><?php echo e($errors->first('name')); ?></strong>
                                </span>
                            <?php endif; ?>
                        </div>
                    </div>

                    <div class="form-group<?php echo e($errors->has('') ? ' has-error' : ''); ?>">
                        <label class="col-md-3 control-label">
                            Phone Number
                        </label>
                        <div class="col-md-7">
                            <input type="text" class="form-control" name="phone" value="<?php echo e(old('phone')); ?>">
                        </div>
                    </div>

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
                    <h3 class="StepTitle">Account</h2>
                    <div class="form-group">
                        <div class="form-group<?php echo e($errors->has('userName') ? ' has-error' : ''); ?>">
                            <label class="col-md-3 control-label">
                                User Name <span class="symbol required"></span>
                            </label>

                            <div class="col-md-7">
                                <input type="text" class="form-control" name="userName" value="<?php echo e(old('userName')); ?>">

                                <?php if($errors->has('userName')): ?>
                                    <span class="help-block">
                                        <strong><?php echo e($errors->first('userName')); ?></strong>
                                    </span>
                                <?php endif; ?>
                            </div>
                        </div>

                        <div class="form-group<?php echo e($errors->has('email') ? ' has-error' : ''); ?>">
                            <label class="col-md-3 control-label">
                                E-Mail Address <span class="symbol required"></span>
                            </label>

                            <div class="col-md-7">
                                <input type="email" class="form-control" name="email" value="<?php echo e(old('email')); ?>">

                                <?php if($errors->has('email')): ?>
                                    <span class="help-block">
                                        <strong><?php echo e($errors->first('email')); ?></strong>
                                    </span>
                                <?php endif; ?>
                            </div>
                        </div>

                        <div class="form-group<?php echo e($errors->has('password') ? ' has-error' : ''); ?>">
                            <label class="col-md-3 control-label">
                                password <span class="symbol required"></span>
                            </label>

                            <div class="col-md-7">
                                <input type="password" class="form-control" name="password">

                                <?php if($errors->has('password')): ?>
                                    <span class="help-block">
                                        <strong><?php echo e($errors->first('password')); ?></strong>
                                    </span>
                                <?php endif; ?>
                            </div>
                        </div>

                        <div class="form-group<?php echo e($errors->has('password_confirmation') ? ' has-error' : ''); ?>">
                            <label class="col-md-3 control-label">
                                Confirm Password <span class="symbol required"></span>
                            </label>

                            <div class="col-md-7">
                                <input type="password" class="form-control" name="password_confirmation">

                                <?php if($errors->has('password_confirmation')): ?>
                                    <span class="help-block">
                                        <strong><?php echo e($errors->first('password_confirmation')); ?></strong>
                                    </span>
                                <?php endif; ?>
                            </div>
                        </div>                                

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
                </div>

                <div id="step-4">
                    <h3 class="StepTitle">Step</h2>
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
                                <i class="fa fa-btn fa-user"></i>Register
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>


<!--
<div class="section section-regist">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Register</div>
                <div class="panel-body">
                    <form class="form-horizontal" role="form" method="POST" action="<?php echo e(url('/register')); ?>">
                        <?php echo csrf_field(); ?>


                        <div class="form-group<?php echo e($errors->has('name') ? ' has-error' : ''); ?>">
                            <label class="col-md-3 control-label">Name</label>

                            <div class="col-md-7">
                                <input type="text" class="form-control" name="name" value="<?php echo e(old('name')); ?>">

                                <?php if($errors->has('name')): ?>
                                    <span class="help-block">
                                        <strong><?php echo e($errors->first('name')); ?></strong>
                                    </span>
                                <?php endif; ?>
                            </div>
                        </div>

                        <div class="form-group<?php echo e($errors->has('email') ? ' has-error' : ''); ?>">
                            <label class="col-md-3 control-label">E-Mail Address</label>

                            <div class="col-md-7">
                                <input type="email" class="form-control" name="email" value="<?php echo e(old('email')); ?>">

                                <?php if($errors->has('email')): ?>
                                    <span class="help-block">
                                        <strong><?php echo e($errors->first('email')); ?></strong>
                                    </span>
                                <?php endif; ?>
                            </div>
                        </div>

                        <div class="form-group<?php echo e($errors->has('password') ? ' has-error' : ''); ?>">
                            <label class="col-md-3 control-label">Password</label>

                            <div class="col-md-7">
                                <input type="password" class="form-control" name="password">

                                <?php if($errors->has('password')): ?>
                                    <span class="help-block">
                                        <strong><?php echo e($errors->first('password')); ?></strong>
                                    </span>
                                <?php endif; ?>
                            </div>
                        </div>

                        <div class="form-group<?php echo e($errors->has('password_confirmation') ? ' has-error' : ''); ?>">
                            <label class="col-md-3 control-label">Confirm Password</label>

                            <div class="col-md-7">
                                <input type="password" class="form-control" name="password_confirmation">

                                <?php if($errors->has('password_confirmation')): ?>
                                    <span class="help-block">
                                        <strong><?php echo e($errors->first('password_confirmation')); ?></strong>
                                    </span>
                                <?php endif; ?>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    <i class="fa fa-btn fa-user"></i>Register
                                </button>
                            </div>
                        </div>


                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
-->
<?php $__env->stopSection(); ?>

<?php $__env->startSection('script'); ?>
        <!-- start: JAVASCRIPTS REQUIRED FOR THIS PAGE ONLY -->
        <script src="assets/plugins/jQuery-Smart-Wizard/js/jquery.smartWizard.js"></script>
        <script src="assets/js/form-wizard.js"></script>
        <!-- end: JAVASCRIPTS REQUIRED FOR THIS PAGE ONLY -->
        <script>
            jQuery(document).ready(function() {
                FormWizard.init();
            });
        </script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.intro', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
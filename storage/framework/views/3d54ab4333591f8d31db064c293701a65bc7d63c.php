<?php $__env->startSection('subtitle'); ?>
    <small>
        <ol class="breadcrumb">
            <li>
                <a href="<?php echo e(url('/home')); ?>">
                    Dashboard
                </a>
            </li>
            <li class="active">
                User Profile
            </li>
        </ol>
    </small>
<?php $__env->stopSection(); ?>



<?php $__env->startSection('css'); ?>
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('')); ?>assets/plugins/select2/select2.css" />
<?php $__env->stopSection(); ?>



<?php $__env->startSection('content'); ?>
<div class="container">
<div class="row">
    <div class="col-sm-12">
        <div class="tabbable">
            <div class="tab-content">
                <div id="panel_overview" class="tab-pane fade in active">
                    <div class="row">
                        <div class="col-sm-5 col-md-4">
                            <div class="user-left">
                                <div class="center">
                                    <h4><?php echo e(Auth::user()->name); ?></h4>
                                    <div class="fileupload fileupload-new" data-provides="fileupload">
                                        <div class="user-image">
                                            <div class="fileupload-new thumbnail"><img src="images/<?php echo e(Auth::user()->photo); ?>" alt=""></div>
                                            <div class="fileupload-preview fileupload-exists thumbnail"></div>
                                            <div class="user-image-buttons">
                                                <a href="#panel_edit_account" class="show-tab btn btn-azure btn-file btn-sm"><i class="fa fa-pencil edit-user-info"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <table class="table table-condensed table-hover">
                                    <thead>
                                        <tr>
                                            <th colspan="3">Organization Info</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                           <td>Name</td>
                                            <td><?php echo e(Auth::user()->orgName); ?></td>
                                            <td><a href="#panel_edit_account" class="show-tab"><i class="fa fa-pencil edit-user-info"></i></a></td>
                                        </tr>
                                        <tr>
                                            <td>Email  </td>
                                            <td><?php echo e(Auth::user()->orgEmail); ?></td>
                                            <td><a href="#panel_edit_account" class="show-tab"><i class="fa fa-pencil edit-user-info"></i></a></td>
                                        </tr>
                                        <tr>
                                            <td>Phone </td>
                                            <td><?php echo e(Auth::user()->orgPhone); ?></td>
                                            <td><a href="#panel_edit_account" class="show-tab"><i class="fa fa-pencil edit-user-info"></i></a></td>
                                        </tr>
                                        <tr>
                                            <td>Country </td>
                                            <td><?php echo e(Auth::user()->orgCountry); ?></td>
                                            <td><a href="#panel_edit_account" class="show-tab"><i class="fa fa-pencil edit-user-info"></i></a></td>
                                        </tr>
                                        <tr>
                                            <td>City </td>
                                            <td><?php echo e(Auth::user()->orgCity); ?></td>
                                            <td><a href="#panel_edit_account" class="show-tab"><i class="fa fa-pencil edit-user-info"></i></a></td>
                                        </tr>
                                        <tr>
                                            <td>address </td>
                                            <td><?php echo e(Auth::user()->orgAddress); ?></td>
                                            <td><a href="#panel_edit_account" class="show-tab"><i class="fa fa-pencil edit-user-info"></i></a></td>
                                        </tr>
                                    </tbody>
                                </table>
                                 <table class="table table-condensed table-hover">
                                    <thead>
                                        <tr>
                                            <th colspan="3">Account</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Name </td>
                                            <td><?php echo e(Auth::user()->name); ?></td>
                                            <td><a href="#panel_edit_account" class="show-tab"><i class="fa fa-pencil edit-user-info"></i></a></td>
                                        </tr>
                                        <tr>
                                            <td>Gender  </td>
                                            <td><?php echo e(Auth::user()->gender); ?></td>
                                            <td><a href="#panel_edit_account" class="show-tab"><i class="fa fa-pencil edit-user-info"></i></a></td>
                                        </tr>
                                        <tr>
                                            <td>User Name  </td>
                                            <td><?php echo e(Auth::user()->userName); ?></td>
                                            <td><a href="#panel_edit_account" class="show-tab"><i class="fa fa-pencil edit-user-info"></i></a></td>
                                        </tr>
                                        <tr>
                                            <td>Email </td>
                                            <td><?php echo e(Auth::user()->email); ?></td>
                                            <td><a href="#panel_edit_account" class="show-tab"><i class="fa fa-pencil edit-user-info"></i></a></td>
                                        </tr>
                                        <tr>
                                            <td>Phone </td>
                                            <td><?php echo e(Auth::user()->phone); ?></td>
                                            <td><a href="#panel_edit_account" class="show-tab"><i class="fa fa-pencil edit-user-info"></i></a></td>
                                        </tr>
                                        <!--
                                        <tr>
                                            <td>Password </td>
                                            <td><span class="label label-sm label-info">Change Password</span></td>
                                            <td><a href="#panel_edit_account" class="show-tab"><i class="fa fa-pencil edit-user-info"></i></a></td>
                                        </tr>-->
                                    </tbody>
                                </table>
                            </div>
                        </div>

                        <div class="col-sm-7 col-md-8">
                            <!-- content -->
                            <div class=" alert alert-info" style="margin-top: 30px;">
                                <div class="row">
                                    <div class="col-xs-8 col-xs-offset-1">
                                        <strong>Everything is Awesome!</strong> Everything is cool when you part of the team!
                                    </div>
                                    <div class="col-xs-3">
                                        <a href="<?php echo e(url('/event/create')); ?>" class="btn btn-green pull-right">Create Event</a>
                                    </div>
                                    <span style="clear:both"></span>
                                </div>
                            </div>

                            <!-- start: DYNAMIC TABLE PANEL -->
                            <?php echo coolRowBox_Begin('List', 'Events'); ?>

                                <table class="table table-striped table-bordered table-hover table-full-width" id="sample_1">
                                    <thead>
                                        <tr>
                                            <th>No.</th>
                                            <th class="hidden-xs">Event Name</th>
                                            <th>Date</th>
                                            <th class="hidden-xs">Speaker</th>
                                            <th class="hidden-xs" >Status</th>
                                            <th width="150">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php foreach($events as $event): ?>
                                        <?php if( $event->idUser === Auth::user()->id ): ?>
                                            <tr>
                                                <th> <?php echo e($no+=1); ?></th>
                                                <th><?php echo e($event->eventName); ?></th>
<<<<<<< HEAD
                                                <th><?php echo e($event->Date); ?></th>
                                                <th><?php echo e($event->EventSpeaking); ?></th>
=======
                                                <th><?php echo e($event->date); ?></th>
                                                <th><?php echo e($event->eventSpeaking); ?></th>
>>>>>>> c5d8951b77a855b383b3c050dba60a57554eab1e
                                                <th> 
                                                    <?php if( $event->confirm === 1): ?>
                                                        <span class="label label-sm label-success">Approved</span>
                                                    <?php else: ?>
                                                        <span class="label label-sm label-danger">Pending</span>
                                                    <?php endif; ?>
                                                </th>
                                                <th>
                                                    <p>
                                                        <a class="btn btn-red" href="#"><i class="fa fa-times fa fa-white" width="10"></i></a>
<<<<<<< HEAD
                                                        <a class="btn btn-blue" href="#"><i class="fa fa-arrow-circle-right"></i></a>
=======
                                                        <a class="btn btn-blue" href="event/<?php echo e($event->id); ?>/edit"><i class="fa fa-info-circle"></i></a>
>>>>>>> c5d8951b77a855b383b3c050dba60a57554eab1e
                                                    </p>
                                                </th>

                                            </tr>

                                        <?php endif; ?>
                                        <?php endforeach; ?>
                                    </tbody>
                                </table>
                            <?php echo coolRowBox_End(); ?>

                            <!-- end: DYNAMIC TABLE PANEL -->

                        </div>
                    </div>
                </div>

                <div id="panel_edit_account" class="tab-pane fade">
                    <form action="/home/<?php echo e(Auth::user()->id); ?>" role="form" id="form" method="post" enctype="multipart/form-data" >
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <div class="col-md-12">
                                        <h3>Organization Info</h3>
                                        <hr/>
                                    </div>
                                    <label class="control-label">
                                        Name
                                    </label>
                                    <input type="text" value="<?php echo e(Auth::user()->orgName); ?>" class="form-control" id="orgName" name="orgName" value="<?php echo e(old('orgName')); ?>">
                                </div>
                                <div class="form-group">
                                    <label class="control-label">
                                        Email
                                    </label>
                                    <input type="email" value="<?php echo e(Auth::user()->orgEmail); ?>" class="form-control" id="orgEmail" name="orgEmail" >
                                </div>
                                <div class="form-group">
                                    <label class="control-label">
                                        Phone
                                    </label>
                                    <input type="text" value="<?php echo e(Auth::user()->orgPhone); ?>" class="form-control" id="phone" name="orgPhone">
                                </div>
                                <div class="form-group">
                                    <label class="control-label">
                                        Country
                                    </label>
                                    <input type="text" value="<?php echo e(Auth::user()->orgCountry); ?>" class="form-control" id="orgCountry" name="orgCountry">
                                </div>
                                <div class="form-group">
                                    <label class="control-label">
                                        City
                                    </label>
                                    <input type="text" value="<?php echo e(Auth::user()->orgCity); ?>" class="form-control" id="orgCity" name="orgCity">
                                </div>
                                <div class="form-group">
                                    <label class="control-label">
                                        Address
                                    </label>
                                    <input type="text" value="<?php echo e(Auth::user()->orgAddress); ?>" class="form-control" id="orgAddress" name="orgAddress">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <div class="col-md-12">
                                        <h3>Account</h3>
                                        <hr/>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label">
                                            Name
                                        </label>
                                        <input type="text" value="<?php echo e(Auth::user()->name); ?>" class="form-control" id="name" name="name">
                                    </div>
                                    <label class="control-label">
                                        Gender
                                    </label>
                                    <div>
                                        <label class="radio-inline">
                                            <input type="radio" class="grey" value="Female" name="gender" id="gender_female">
                                            Female
                                        </label>
                                        <label class="radio-inline">
                                            <input type="radio" class="grey" value="Male" name="gender"  id="gender_male" checked="checked">
                                            Male
                                        </label>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label">
                                            Phone
                                        </label>
                                        <input type="text" value="<?php echo e(Auth::user()->phone); ?>" class="form-control" id="phone" name="phone">
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label">
                                            User Name
                                        </label>
                                        <input type="text" value="<?php echo e(Auth::user()->userName); ?>" class="form-control" id="userName" name="userName">
                                    </div>
                                     <div class="form-group">
                                        <label class="control-label">
                                            Email
                                        </label>
                                        <input type="text" value="<?php echo e(Auth::user()->email); ?>" class="form-control" id="email" name="email">
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label">
                                            Password
                                        </label>
                                        <input type="password" placeholder="password" class="form-control" name="password" id="password">
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label">
                                            Confirm Password
                                        </label>
                                        <input type="password"  placeholder="password" class="form-control" id="   password_again" name="password_again">
                                    </div>

                                    <div class="form-group">
                                        <label>
                                            Image Upload
                                        </label>
                                        <div class="fileupload fileupload-new" data-provides="fileupload">
                                            <div class="fileupload-new thumbnail"><img src="images/<?php echo e(Auth::user()->photo); ?>" alt="">
                                            </div>
                                            <div class="fileupload-preview fileupload-exists thumbnail"></div>
                                            <div class="user-edit-image-buttons">
                                                <span class="btn btn-azure btn-file"><span class="fileupload-new"><i class="fa fa-picture"></i> Select image</span><span class="fileupload-exists"><i class="fa fa-picture"></i> Change</span>
                                                    <input type="file" name="photo" alt="">
                                                </span>
                                                <a href="#" class="btn fileupload-exists btn-red" data-dismiss="fileupload">
                                                    <i class="fa fa-times"></i> Remove
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <p>
                                    By clicking UPDATE, you are agreeing to the Policy and Terms &amp; Conditions.
                                </p>
                            </div>
                            <div class="col-md-2">
                                <a class="btn btn-grey btn-block" data-toggle="tab" href="#panel_overview">
                                    Cancel
                                </a>
                            </div>
                            <input type="hidden" name="_method" value="put"></input>
                            <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>"></input>
                            <div class="col-md-4">
                                <button class="btn btn-green btn-block" type="submit">
                                    Update <i class="fa fa-arrow-circle-right"></i>
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</div>

<?php $__env->stopSection(); ?>



<?php $__env->startSection('script'); ?>
        <script type="text/javascript" src="assets/plugins/select2/select2.min.js"></script>
        <script type="text/javascript" src="assets/js/table-data.js"></script>
        <script>
            jQuery(document).ready(function() {
                Main.init();
                TableData.init();
            });
        </script>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.intro', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
@extends('layouts.intro')

@section('subtitle')
    <small>
        <ol class="breadcrumb">
            <li>
                <a href="{{ url('/home')}}">
                    Dashboard
                </a>
            </li>
            <li class="active">
                User Profile
            </li>
        </ol>
    </small>
@endsection



@section('css')
    <link rel="stylesheet" type="text/css" href="{{ asset('') }}assets/plugins/select2/select2.css" />
@endsection



@section('content')
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
                                    <h4>{{ Auth::user()->name }}</h4>
                                    <div class="fileupload fileupload-new" data-provides="fileupload">
                                        <div class="user-image">
                                            <div class="fileupload-new thumbnail"><img src="{{ asset('') }}assets/img/avatar-1-xl.jpg" alt=""></div>
                                            <div class="fileupload-preview fileupload-exists thumbnail"></div>
                                            <div class="user-image-buttons">
                                                <span class="btn btn-azure btn-file btn-sm"><span class="fileupload-new"><i class="fa fa-pencil"></i></span><span class="fileupload-exists"><i class="fa fa-pencil"></i></span>
                                                    <input type="file">
                                                </span>
                                                <a href="#" class="btn fileupload-exists btn-red btn-sm" data-dismiss="fileupload">
                                                    <i class="fa fa-times"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
<<<<<<< HEAD
=======
                                    <hr />
                                    <div class="social-icons block">
                                        <ul>
                                            <li data-placement="top" data-original-title="Twitter" class="social-twitter tooltips">
                                                <a href="http://www.twitter.com/" target="_blank">
                                                    Twitter
                                                </a>
                                            </li>
                                            <li data-placement="top" data-original-title="Facebook" class="social-facebook tooltips">
                                                <a href="http://facebook.com/" target="_blank">
                                                    Facebook
                                                </a>
                                            </li>
                                            <li data-placement="top" data-original-title="Google" class="social-google tooltips">
                                                <a href="http://google.com/" target="_blank">
                                                    Google+
                                                </a>
                                            </li>
                                            <li data-placement="top" data-original-title="LinkedIn" class="social-linkedin tooltips">
                                                <a href="http://linkedin.com/" target="_blank">
                                                    LinkedIn
                                                </a>
                                            </li>
                                            <li data-placement="top" data-original-title="Github" class="social-github tooltips">
                                                <a href="#" target="_blank">
                                                    Github
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                    <hr>
>>>>>>> b333a688f093e7ad66d9e0d959a4fe83ee9f1e1c
                                </div>
                                <table class="table table-condensed table-hover">
                                    <thead>
                                        <tr>
                                            <th colspan="3">Organization Information</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Name</td>
                                            <td>{{ Auth::user()->orgName }}</td>
                                            <td><a href="#panel_edit_account" class="show-tab"><i class="fa fa-pencil edit-user-info"></i></a></td>
                                        </tr>
                                        <tr>
                                            <td>email : </td>
                                            <td>{{ Auth::user()->orgEmail }}</td>
                                            <td><a href="#panel_edit_account" class="show-tab"><i class="fa fa-pencil edit-user-info"></i></a></td>
                                        </tr>
                                        <tr>
                                            <td>phone : </td>
                                            <td>{{ Auth::user()->orgPhone }}</td>
                                            <td><a href="#panel_edit_account" class="show-tab"><i class="fa fa-pencil edit-user-info"></i></a></td>
                                        </tr>
                                    </tbody>
                                </table>
                                <table class="table table-condensed table-hover">
                                    <thead>
                                        <tr>
                                            <th colspan="3">Personal </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Position</td>
                                            <td>UI Designer</td>
                                            <td><a href="#panel_edit_account" class="show-tab"><i class="fa fa-pencil edit-user-info"></i></a></td>
                                        </tr>
                                        <tr>
                                            <td>Last Logged In</td>
                                            <td>56 min</td>
                                            <td><a href="#panel_edit_account" class="show-tab"><i class="fa fa-pencil edit-user-info"></i></a></td>
                                        </tr>
                                        <tr>
                                            <td>Position</td>
                                            <td>Senior Marketing Manager</td>
                                            <td><a href="#panel_edit_account" class="show-tab"><i class="fa fa-pencil edit-user-info"></i></a></td>
                                        </tr>
                                        <tr>
                                            <td>Supervisor</td>
                                            <td>
                                            <a href="#">
                                                Kenneth Ross
                                            </a></td>
                                            <td><a href="#panel_edit_account" class="show-tab"><i class="fa fa-pencil edit-user-info"></i></a></td>
                                        </tr>
                                        <tr>
                                            <td>Status</td>
                                            <td><span class="label label-sm label-info">Administrator</span></td>
                                            <td><a href="#panel_edit_account" class="show-tab"><i class="fa fa-pencil edit-user-info"></i></a></td>
                                        </tr>
                                    </tbody>
                                </table>
                                <table class="table table-condensed table-hover">
                                    <thead>
                                        <tr>
                                            <th colspan="3">Additional information</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Birth</td>
                                            <td>21 October 1982</td>
                                            <td><a href="#panel_edit_account" class="show-tab"><i class="fa fa-pencil edit-user-info"></i></a></td>
                                        </tr>
                                        <tr>
                                            <td>Groups</td>
                                            <td>New company web site development, HR Management</td>
                                            <td><a href="#panel_edit_account" class="show-tab"><i class="fa fa-pencil edit-user-info"></i></a></td>
                                        </tr>
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
                                        <a href="{{ url('/event/create') }}" class="btn btn-green pull-right">Create Event</a>
                                    </div>
                                    <span style="clear:both"></span>
                                </div>
                            </div>

                            <!-- start: DYNAMIC TABLE PANEL -->
                            {!! coolRowBox_Begin('list') !!}
                                <table class="table table-striped table-bordered table-hover table-full-width" id="sample_1">
                                    <thead>
                                        <tr>
                                            <th>No.</th>
                                            <th class="hidden-xs">Event Name</th>
                                            <th>Date</th>
                                            <th class="hidden-xs">Speaker</th>
                                            <th>Status</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($events as $event)
                                        @if( $event->idUser === Auth::user()->id )
                                            <tr>
                                                <th>1</th>
                                                <th>{{ $event->eventName }}</th>
                                                <th>{{ $event->eventName }}</th>
                                                <th>{{ $event->eventName }}</th>
                                                <th>{{ $event->eventName }}</th>
                                                <th>{{ $event->eventName }}</th>

                                            </tr>
                                        @endif
                                        @endforeach
                                    </tbody>
                                </table>
                            {!! coolRowBox_End() !!}
                            <!-- end: DYNAMIC TABLE PANEL -->

                        </div>
                    </div>
                </div>

                <div id="panel_edit_account" class="tab-pane fade">
                    <form action="#" role="form" id="form">
                        <div class="row">
                            <div class="col-md-12">
                                <h3>Account Info</h3>
                                <hr>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label">
                                        First Name
                                    </label>
                                    <input type="text" placeholder="Peter" class="form-control" id="firstname" name="firstname">
                                </div>
                                <div class="form-group">
                                    <label class="control-label">
                                        Last Name
                                    </label>
                                    <input type="text" placeholder="Clark" class="form-control" id="lastname" name="lastname">
                                </div>
                                <div class="form-group">
                                    <label class="control-label">
                                        Email Address
                                    </label>
                                    <input type="email" placeholder="peter@example.com" class="form-control" id="email" name="email">
                                </div>
                                <div class="form-group">
                                    <label class="control-label">
                                        Phone
                                    </label>
                                    <input type="email" placeholder="(641)-734-4763" class="form-control" id="phone" name="email">
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
                                    <input type="password"  placeholder="password" class="form-control" id="password_again" name="password_again">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group connected-group">
                                    <label class="control-label">
                                        Date of Birth
                                    </label>
                                    <div class="row">
                                        <div class="col-md-3">
                                            <select name="dd" id="dd" class="form-control" >
                                                <option value="">DD</option>
                                                <option value="01">1</option>
                                                <option value="02">2</option>
                                                <option value="03">3</option>
                                                <option value="04">4</option>
                                                <option value="05">5</option>
                                                <option value="06">6</option>
                                                <option value="07">7</option>
                                                <option value="08">8</option>
                                                <option value="09">9</option>
                                                <option value="10">10</option>
                                                <option value="11">11</option>
                                                <option value="12">12</option>
                                                <option value="13">13</option>
                                                <option value="14">14</option>
                                                <option value="15">15</option>
                                                <option value="16">16</option>
                                                <option value="17">17</option>
                                                <option value="18">18</option>
                                                <option value="19">19</option>
                                                <option value="20">20</option>
                                                <option value="21" selected="selected">21</option>
                                                <option value="22">22</option>
                                                <option value="23">23</option>
                                                <option value="24">24</option>
                                                <option value="25">25</option>
                                                <option value="26">26</option>
                                                <option value="27">27</option>
                                                <option value="28">28</option>
                                                <option value="29">29</option>
                                                <option value="30">30</option>
                                                <option value="31">31</option>
                                            </select>
                                        </div>
                                        <div class="col-md-3">
                                            <select name="mm" id="mm" class="form-control" >
                                                <option value="">MM</option>
                                                <option value="01">1</option>
                                                <option value="02">2</option>
                                                <option value="03">3</option>
                                                <option value="04">4</option>
                                                <option value="05">5</option>
                                                <option value="06">6</option>
                                                <option value="07">7</option>
                                                <option value="08">8</option>
                                                <option value="09">9</option>
                                                <option value="10" selected="selected">10</option>
                                                <option value="11">11</option>
                                                <option value="12">12</option>
                                            </select>
                                        </div>
                                        <div class="col-md-3">
                                            <input type="text" placeholder="1982" id="yyyy" name="yyyy" class="form-control">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label">
                                        Gender
                                    </label>
                                    <div>
                                        <label class="radio-inline">
                                            <input type="radio" class="grey" value="" name="gender" id="gender_female">
                                            Female
                                        </label>
                                        <label class="radio-inline">
                                            <input type="radio" class="grey" value="" name="gender"  id="gender_male" checked="checked">
                                            Male
                                        </label>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label class="control-label">
                                                Zip Code
                                            </label>
                                            <input class="form-control" placeholder="12345" type="text" name="zipcode" id="zipcode">
                                        </div>
                                    </div>
                                    <div class="col-md-8">
                                        <div class="form-group">
                                            <label class="control-label">
                                                City
                                            </label>
                                            <input class="form-control tooltips" placeholder="London (UK)" type="text" data-original-title="We'll display it when you write reviews" data-rel="tooltip"  title="" data-placement="top" name="city" id="city">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label>
                                        Image Upload
                                    </label>
                                    <div class="fileupload fileupload-new" data-provides="fileupload">
                                        <div class="fileupload-new thumbnail"><img src="{{ asset('') }}assets/img/avatar-1-xl.jpg" alt="">
                                        </div>
                                        <div class="fileupload-preview fileupload-exists thumbnail"></div>
                                        <div class="user-edit-image-buttons">
                                            <span class="btn btn-azure btn-file"><span class="fileupload-new"><i class="fa fa-picture"></i> Select image</span><span class="fileupload-exists"><i class="fa fa-picture"></i> Change</span>
                                                <input type="file">
                                            </span>
                                            <a href="#" class="btn fileupload-exists btn-red" data-dismiss="fileupload">
                                                <i class="fa fa-times"></i> Remove
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <h3>Additional Info</h3>
                                <hr>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label">
                                        Twitter
                                    </label>
                                    <span class="input-icon">
                                        <input class="form-control" type="text" placeholder="Text Field">
                                        <i class="fa fa-twitter"></i> </span>
                                </div>
                                <div class="form-group">
                                    <label class="control-label">
                                        Facebook
                                    </label>
                                    <span class="input-icon">
                                        <input class="form-control" type="text" placeholder="Text Field">
                                        <i class="fa fa-facebook"></i> </span>
                                </div>
                                <div class="form-group">
                                    <label class="control-label">
                                        Google Plus
                                    </label>
                                    <span class="input-icon">
                                        <input class="form-control" type="text" placeholder="Text Field">
                                        <i class="fa fa-google-plus"></i> </span>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label">
                                        Github
                                    </label>
                                    <span class="input-icon">
                                        <input class="form-control" type="text" placeholder="Text Field">
                                        <i class="fa fa-github"></i> </span>
                                </div>
                                <div class="form-group">
                                    <label class="control-label">
                                        Linkedin
                                    </label>
                                    <span class="input-icon">
                                        <input class="form-control" type="text" placeholder="Text Field">
                                        <i class="fa fa-linkedin"></i> </span>
                                </div>
                                <div class="form-group">
                                    <label class="control-label">
                                        Skype
                                    </label>
                                    <span class="input-icon">
                                        <input class="form-control" type="text" placeholder="Text Field">
                                        <i class="fa fa-skype"></i> </span>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div>
                                    Required Fields
                                    <hr>
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

@endsection



@section('script')
        <script type="text/javascript" src="assets/plugins/select2/select2.min.js"></script>
        <script type="text/javascript" src="assets/js/table-data.js"></script>
        <script>
            jQuery(document).ready(function() {
                Main.init();
                TableData.init();
            });
        </script>


@endsection
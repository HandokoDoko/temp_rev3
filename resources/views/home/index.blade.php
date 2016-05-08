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
                                            <div class="fileupload-new thumbnail"><img src="images/{{ Auth::user()->photo  }}" alt=""></div>
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
                                            <td>{{ Auth::user()->orgName }}</td>
                                            <td><a href="#panel_edit_account" class="show-tab"><i class="fa fa-pencil edit-user-info"></i></a></td>
                                        </tr>
                                        <tr>
                                            <td>Email  </td>
                                            <td>{{ Auth::user()->orgEmail }}</td>
                                            <td><a href="#panel_edit_account" class="show-tab"><i class="fa fa-pencil edit-user-info"></i></a></td>
                                        </tr>
                                        <tr>
                                            <td>Phone </td>
                                            <td>{{ Auth::user()->orgPhone }}</td>
                                            <td><a href="#panel_edit_account" class="show-tab"><i class="fa fa-pencil edit-user-info"></i></a></td>
                                        </tr>
                                        <tr>
                                            <td>Country </td>
                                            <td>{{ Auth::user()->orgCountry }}</td>
                                            <td><a href="#panel_edit_account" class="show-tab"><i class="fa fa-pencil edit-user-info"></i></a></td>
                                        </tr>
                                        <tr>
                                            <td>City </td>
                                            <td>{{ Auth::user()->orgCity }}</td>
                                            <td><a href="#panel_edit_account" class="show-tab"><i class="fa fa-pencil edit-user-info"></i></a></td>
                                        </tr>
                                        <tr>
                                            <td>address </td>
                                            <td>{{ Auth::user()->orgAddress }}</td>
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
                                            <td>{{ Auth::user()->name }}</td>
                                            <td><a href="#panel_edit_account" class="show-tab"><i class="fa fa-pencil edit-user-info"></i></a></td>
                                        </tr>
                                        <tr>
                                            <td>Gender  </td>
                                            <td>{{ Auth::user()->gender }}</td>
                                            <td><a href="#panel_edit_account" class="show-tab"><i class="fa fa-pencil edit-user-info"></i></a></td>
                                        </tr>
                                        <tr>
                                            <td>User Name  </td>
                                            <td>{{ Auth::user()->userName }}</td>
                                            <td><a href="#panel_edit_account" class="show-tab"><i class="fa fa-pencil edit-user-info"></i></a></td>
                                        </tr>
                                        <tr>
                                            <td>Email </td>
                                            <td>{{ Auth::user()->email }}</td>
                                            <td><a href="#panel_edit_account" class="show-tab"><i class="fa fa-pencil edit-user-info"></i></a></td>
                                        </tr>
                                        <tr>
                                            <td>Phone </td>
                                            <td>{{ Auth::user()->phone }}</td>
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
                                        <a href="{{ url('/event/create') }}" class="btn btn-green pull-right">Create Event</a>
                                    </div>
                                    <span style="clear:both"></span>
                                </div>
                            </div>

                            <!-- start: DYNAMIC TABLE PANEL -->
                            {!! coolRowBox_Begin('List', 'Events') !!}
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
                                        @foreach($events as $event)
                                        @if( $event->idUser === Auth::user()->id )
                                            <tr>
                                                <th> {{ $no+=1 }}</th>
                                                <th>{{ $event->eventName }}</th>
                                                <th>{{ $event->Date }}</th>
                                                <th>{{ $event->EventSpeaking }}</th>
                                                <th> 
                                                    @if( $event->confirm === 1)
                                                        <span class="label label-sm label-success">Approved</span>
                                                    @else
                                                        <span class="label label-sm label-danger">Pending</span>
                                                    @endif
                                                </th>
                                                <th>
                                                    <p>
                                                        <a class="btn btn-red" href="#"><i class="fa fa-times fa fa-white" width="10"></i></a>
                                                        <a class="btn btn-blue" href="#"><i class="fa fa-arrow-circle-right"></i></a>
                                                    </p>
                                                </th>

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
                    <form action="/home/{{Auth::user()->id}}" role="form" id="form" method="post" enctype="multipart/form-data" >
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
                                    <input type="text" value="{{ Auth::user()->orgName }}" class="form-control" id="orgName" name="orgName" value="{{ old('orgName') }}">
                                </div>
                                <div class="form-group">
                                    <label class="control-label">
                                        Email
                                    </label>
                                    <input type="email" value="{{ Auth::user()->orgEmail }}" class="form-control" id="orgEmail" name="orgEmail" >
                                </div>
                                <div class="form-group">
                                    <label class="control-label">
                                        Phone
                                    </label>
                                    <input type="text" value="{{ Auth::user()->orgPhone }}" class="form-control" id="phone" name="orgPhone">
                                </div>
                                <div class="form-group">
                                    <label class="control-label">
                                        Country
                                    </label>
                                    <input type="text" value="{{ Auth::user()->orgCountry }}" class="form-control" id="orgCountry" name="orgCountry">
                                </div>
                                <div class="form-group">
                                    <label class="control-label">
                                        City
                                    </label>
                                    <input type="text" value="{{ Auth::user()->orgCity }}" class="form-control" id="orgCity" name="orgCity">
                                </div>
                                <div class="form-group">
                                    <label class="control-label">
                                        Address
                                    </label>
                                    <input type="text" value="{{ Auth::user()->orgAddress }}" class="form-control" id="orgAddress" name="orgAddress">
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
                                        <input type="text" value="{{ Auth::user()->name }}" class="form-control" id="name" name="name">
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
                                        <input type="text" value="{{ Auth::user()->phone }}" class="form-control" id="phone" name="phone">
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label">
                                            User Name
                                        </label>
                                        <input type="text" value="{{ Auth::user()->userName }}" class="form-control" id="userName" name="userName">
                                    </div>
                                     <div class="form-group">
                                        <label class="control-label">
                                            Email
                                        </label>
                                        <input type="text" value="{{ Auth::user()->email }}" class="form-control" id="email" name="email">
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
                                            <div class="fileupload-new thumbnail"><img src="images/{{ Auth::user()->photo  }}" alt="">
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
                            <input type="hidden" name="_token" value="{{ csrf_token() }}"></input>
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
@extends('layouts.blank')


@section('content')
<div class="col-xs-10 col-xs-offset-1 col-sm-8 col-sm-offset-2">
    <!-- start: LOGIN BOX -->
    <div class="box-login">
        <h3>Sign Up</h3>
        <p>
            Enter your personal details below:
        </p>
        <form action="{{ url('/register') }}" role="form" class="smart-wizard form-horizontal" id="form" method="POST">
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
                {!! csrf_field() !!}

                <div id="step-1">
                    <h4 class="StepTitle">Organization Profile</h4>

                    <div class="form-group{{ $errors->has('orgName') ? ' has-error' : '' }}">
                        <label class="col-sm-3 control-label">
                            Organization Name <span class="symbol required"></span>
                        </label>
                        <div class="col-sm-7">
                            <input type="text" class="form-control" id="orgName" name="orgName" value="{{ old('orgName') }}">

                            @if ($errors->has('orgName'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('orgName') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>
                    <!--<div class="form-group{{ $errors->has('orgEmail') ? ' has-error' : '' }}">
                        <label class="col-md-3 control-label">
                            Email Address
                        </label>
                        <div class="col-md-7">
                            <input type="email" class="form-control" name="orgEmail" value="{{ old('orgEmail') }}">

                            @if ($errors->has('orgEmail'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('orgEmail') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>-->

                    <!--<div class="form-group{{ $errors->has('orgPhone') ? ' has-error' : '' }}">
                        <label class="col-sm-3 control-label">
                            Phone Number
                        </label>
                        <div class="col-sm-7">
                            <input type="text" class="form-control" id="orgPhone" name="orgPhone" value="{{ old('orgPhone') }}">

                            @if ($errors->has('orgPhone'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('orgPhone') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>-->

                     <!--<div class="form-group{{ $errors->has('orgCountry') ? ' has-error' : '' }}">
                        <label class="col-md-3 control-label">
                            Country
                        </label>
                        <div class="col-md-7">
                            <input type="text" class="form-control" name="orgCountry" value = "{{ old('orgCountry') }}">
                        
                            @if ($errors->has('orgCountry'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('orgCountry') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>-->

                     <!--<div class="form-group{{ $errors->has('orgCity') ? ' has-error' : '' }}">
                        <label class="col-md-3 control-label">
                            City
                        </label>
                        <div class="col-md-7">
                            <input type="text" class="form-control" name="orgCity" value = "{{ old('orgCity') }}">

                            @if ($errors->has('orgCity'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('orgCity') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>-->

                    <!--<div class="form-group{{ $errors->has('orgPhone') ? ' has-error' : '' }}">
                        <label class="col-sm-3 control-label">
                            Address
                        </label>
                        <div class="col-sm-7">
                            <input class="form-control" id="orgAddress" name="orgAddress" value="{{ old('orgAddress') }}" />
                            @if ($errors->has('orgAddress'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('orgAddress') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>-->

                    <div class="form-group{{ $errors->has('orgDesc') ? ' has-error' : '' }}">
                        <label class="col-sm-3 control-label">
                            Organization Description
                        </label>
                        <div class="col-sm-7">
                            <textarea cols="4" rows="3" class="form-control" id="orgDesc" name="orgDesc">{{ old('orgDesc') }}</textarea>
                            @if ($errors->has('orgDesc'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('orgDesc') }}</strong>
                                </span>
                            @endif
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
                    <h4 class="StepTitle">Your Own Profile</h4>
                    <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                        <label class="col-md-3 control-label">
                            Full Name <span class="symbol required"></span>
                        </label>

                        <div class="col-md-7">
                            <input type="text" class="form-control" name="name" value="{{ old('name') }}">

                            @if ($errors->has('name'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('name') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group{{ $errors->has('phone') ? ' has-error' : '' }}">
                        <label class="col-md-3 control-label">
                            Phone Number <span class="symbol required"></span>
                        </label>
                        <div class="col-md-7">
                            <input type="text" class="form-control" name="phone" value="{{ old('phone') }}">

                            @if ($errors->has('phone'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('phone') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-sm-3 control-label">
                            Gender <span class="symbol required"></span>
                        </label>
                        <div class="col-sm-7">
                            <label class="radio-inline">
                                <input type="radio" class="grey" value="Male" name="gender"  id="gender_male">
                                Male
                            </label>
                            <label class="radio-inline">
                                <input type="radio" class="grey" value="Female" name="gender" id="gender_female" >
                                Female
                            </label>
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
                    <h4 class="StepTitle">Account</h4>
                    <div class="form-group">
                        <div class="form-group{{ $errors->has('userName') ? ' has-error' : '' }}">
                            <label class="col-md-3 control-label">
                                User Name <span class="symbol required"></span>
                            </label>

                            <div class="col-md-7">
                                <input type="text" class="form-control" name="userName" value="{{ old('userName') }}">

                                @if ($errors->has('userName'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('userName') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label class="col-md-3 control-label">
                                E-Mail Address <span class="symbol required"></span>
                            </label>

                            <div class="col-md-7">
                                <input type="email" class="form-control" name="email" value="{{ old('email') }}">

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label class="col-md-3 control-label">
                                password <span class="symbol required"></span>
                            </label>

                            <div class="col-md-7">
                                <input type="password" class="form-control" name="password" id="password">

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
                            <label class="col-md-3 control-label">
                                Confirm Password <span class="symbol required"></span>
                            </label>

                            <div class="col-md-7">
                                <input type="password" class="form-control" name="password_confirmation">

                                @if ($errors->has('password_confirmation'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password_confirmation') }}</strong>
                                    </span>
                                @endif
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
                    <!--<h4 class="StepTitle">Summary</h4>-->
                    <h4>Organization</h4>
                    <div class="form-group">
                        <label class="col-sm-3 control-label">
                            Name
                        </label>
                        <div class="col-sm-7">
                            <p class="form-control-static display-value" data-display="orgName"></p>
                        </div>
                    </div>
                    <!--<div class="form-group">
                        <label class="col-sm-3 control-label">
                            Email
                        </label>
                        <div class="col-sm-7">
                            <p class="form-control-static display-value" data-display="orgEmail"></p>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-3 control-label">
                            Phone Number
                        </label>
                        <div class="col-sm-7">
                            <p class="form-control-static display-value" data-display="orgPhone"></p>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-3 control-label">
                            Address
                        </label>
                        <div class="col-sm-7">
                            <p class="form-control-static display-value" data-display="orgAddress"></p>
                        </div>
                    </div>-->
                    <div class="form-group">
                        <label class="col-sm-3 control-label">
                            Description
                        </label>
                        <div class="col-sm-7">
                            <p class="form-control-static display-value" data-display="orgAddress"></p>
                        </div>
                    </div>
                    <h4>Profile</h4>
                    <div class="form-group">
                        <label class="col-sm-3 control-label">
                            Full Name
                        </label>
                        <div class="col-sm-7">
                            <p class="form-control-static display-value" data-display="name"></p>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-3 control-label">
                            Phone Number
                        </label>
                        <div class="col-sm-7">
                            <p class="form-control-static display-value" data-display="phone" | '-'></p>
                        </div>
                    </div>
                    <h4>Account</h4>
                    <div class="form-group">
                        <label class="col-sm-3 control-label">
                            Username
                        </label>
                        <div class="col-sm-7">
                            <p class="form-control-static display-value" data-display="userName"></p>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-3 control-label">
                            Email
                        </label>
                        <div class="col-sm-7">
                            <p class="form-control-static display-value" data-display="email"></p>
                        </div>
                    </div>
                    <input type="hidden" name = "photo" value="anonymous.jpg"></input>
                    <div class="form-group">
                        <div class="col-md-2 col-md-offset-8">
                            <button type="submit" class="btn btn-green pull-right">
                                Register <i class="fa fa-arrow-circle-right"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
                    <div class="new-account text-right">
                        Already have account? Please 
                        <a href="{{ url('/register') }}" class="register">
                            Sign In
                        </a>
                    </div>
        </form>
    </div>
</div>

@endsection

@section('script')
        <!-- start: JAVASCRIPTS REQUIRED FOR THIS PAGE ONLY -->
        <script src="{{ asset('') }}assets/plugins/jQuery-Smart-Wizard/js/jquery.smartWizard.js"></script>
        <script src="{{ asset('') }}assets/js/form-wizard.js"></script>
        <!-- end: JAVASCRIPTS REQUIRED FOR THIS PAGE ONLY -->
        <script>
            jQuery(document).ready(function() {
                FormWizard.init();
            });
        </script>
@endsection
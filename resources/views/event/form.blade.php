@extends('layouts.intro')


@section('subtitle')
    <small>
        <ol class="breadcrumb">
            <li>
                <a href="{{ url('/home')}}">
                    Dashboard
                </a>
            </li>
            <li>
                <a href="{{ url('/event')}}">
                    Event
                </a>
            </li>
            <li class="active">
                Create Form
            </li>
        </ol>
    </small>
@endsection

@section('css')
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
    }
</style>

@endsection

@section('content')
<div class="container">
    <!-- start: PAGE CONTENT -->
    <div class="section section-regist">
        <div class="panel-body">
        {!! coolRowBox_Begin('Create Certificate','Form') !!}
        <form action="{{ url('/register') }}" role="form" class="smart-wizard form-horizontal" id="form" method="POST" autocomplete="off">
            {!! csrf_field() !!}
            <div id="wizard" class="swMain row">
                <ul class="col-sm-3" style="margin-top: 26px;">
                    <li>
                        <a href="#step-1">
                            <span class="stepDesc">
                                <small>Your Organization</small> </span>
                        </a>
                    </li>
                    <li>
                        <a href="#step-2">
                            <span class="stepDesc">
                                <small>Your Own Profile</small> </span>
                        </a>
                    </li>
                    <li>
                        <a href="#step-3">
                            <span class="stepDesc">
                                <small>Your Authentication</small> </span>
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
                        <h3 class="StepTitle">Organization Profile</h3>
                    </div>

                    <div id="step-2">
                        <h3 class="StepTitle">Personal Data</h3>
                    </div>
                 
                    <div id="step-3">
                        <h3 class="StepTitle">Account</h3>
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
                                    <i class="fa fa-btn fa-user"></i>Register
                                </button>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="clear"></div>
            </div>
        </form>
        {!! coolRowBox_End() !!}
        </div>
    </div>



    <div class="row">
        <div class="col-sm-12">
        </div>
    </div>
    <!-- end: PAGE CONTENT-->
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

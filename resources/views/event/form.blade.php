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

@section('content')
<div class="container">
    <!-- start: PAGE CONTENT -->
<div class="section section-regist margin-top-70">
    <div class="row">
        <div class="col-md-12">
            <div class="panel-body">
                {!! coolRowBox_Begin('Form Create Certificate') !!}
                <form class="form-horizontal" role="form" method="POST" action="{{ url('/event/create') }}">
                    {!! csrf_field() !!}

                    <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                        <label class="col-md-4 control-label">E-Mail Address</label>

                        <div class="col-md-6">
                            <input type="email" class="form-control" name="email" value="{{ old('email') }}">

                            @if ($errors->has('email'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('email') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                        <label class="col-md-4 control-label">Password</label>

                        <div class="col-md-6">
                            <input type="password" class="form-control" name="password">

                            @if ($errors->has('password'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('password') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-md-6 col-md-offset-4">
                            <button type="submit" class="btn btn-primary">
                                <i class="fa fa-btn fa-sign-in"></i> Create
                            </button>
                        </div>
                    </div>

                </form>
                {!! coolRowBox_End() !!}
            </div>
        </div>
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
@endsection


@extends('layouts.blank')

@section('content')

            <div class="main-login col-xs-10 col-xs-offset-1 col-sm-8 col-sm-offset-2 col-md-4 col-md-offset-4">
    <!-- start: LOGIN BOX -->
    <div class="box-login">
        <h3>Sign in to your account</h3>
        <p>
            Please enter your name and password to log in.
        </p>
        <form class="form-login" role="form" method="POST" action="{{ url('/login') }}" autocomplete="off">
            <div class="errorHandler alert alert-danger no-display">
                <i class="fa fa-remove-sign"></i> You have some form errors. Please check below.
                {!! csrf_field() !!}
            </div>
            <fieldset>
                <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                    <span class="input-icon">
                        <input type="text" class="form-control" name="email" value="{{ old('email') }}" placeholder="Email">
                        <i class="fa fa-user"></i> </span>

                    @if ($errors->has('email'))
                        <span class="help-block">
                            <strong>{{ $errors->first('email') }}</strong>
                        </span>
                    @endif
                </div>

                <div class="form-group form-actions{{ $errors->has('password') ? ' has-error' : '' }}">
                    <span class="input-icon">
                        <input type="password" class="form-control password" name="password" placeholder="Password">
                        <i class="fa fa-lock"></i>
                        <a class="forgot" href="{{ url('/password/reset') }}">
                            I forgot my password
                        </a> </span>

                    @if ($errors->has('password'))
                        <span class="help-block">
                            <strong>{{ $errors->first('password') }}</strong>
                        </span>
                    @endif
                </div>

                <div class="form-actions">
                    <label for="remember" class="checkbox-inline">
                        <input type="checkbox" class="grey remember" id="remember" name="remember">
                        Keep me signed in
                    </label>
                    <button type="submit" class="btn btn-green pull-right">
                        Login <i class="fa fa-arrow-circle-right"></i>
                    </button>
                </div>
                <div class="new-account">
                    Don't have an account yet?
                    <a href="{{ url('/register') }}" class="register">
                        Create an account
                    </a>
                </div>
            </fieldset>
        </form>
    </div>
    <!-- end: LOGIN BOX -->
    </div>

{{--<div class="container">
    {!! coolRowBox_Begin('Login') !!}
    <form class="form-horizontal" role="form" method="POST" action="{{ url('/login') }}" autocomplete="off">
        

        <div class="form-group">
            <div class="col-md-7 col-md-offset-3">
                <div class="checkbox">
                    <label>
                        <input type="checkbox" name="remember"> Remember Me
                    </label>
                </div>
            </div>
        </div>

        <div class="form-group">
            <div class="col-md-6 col-md-offset-4">
                <button type="submit" class="btn btn-primary">
                    <i class="fa fa-btn fa-sign-in"></i>Login
                </button>

                <a class="btn btn-link" href="{{ url('/password/reset') }}">Forgot Your Password?</a>
            </div>
        </div>
    </form>
    {!! coolRowBox_End() !!}
</div>--}}
@endsection

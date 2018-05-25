@extends('layouts.auth_pages')

@section('content')
<div class="register-box">
    <div class="register-logo">
        <a href="../../index.html"><b>School</b> Tracking</a>
    </div>

    <div class="register-box-body">
        <p class="login-box-msg">Register a new membership</p>

        <form method="POST" action="{{ route('register') }}" class="form-element">
            {{ csrf_field() }}
            <div class="form-group has-feedback">
                <input id="name" type="text" class="form-control" placeholder="Full name" name="name" value="{{ old('name') }}" required autofocus>
                <span class="ion ion-person form-control-feedback "></span>
                @if ($errors->has('name'))
                <span class="help-block">
                    <strong>{{ $errors->first('name') }}</strong>
                </span>
                @endif
            </div>
            <div class="form-group has-feedback">
                <input id="email" type="email" class="form-control" placeholder="Email" name="email" value="{{ old('email') }}" required>
                <span class="ion ion-email form-control-feedback "></span>
                @if ($errors->has('email'))
                <span class="help-block">
                    <strong>{{ $errors->first('email') }}</strong>
                </span>
                @endif
            </div>
            <div class="form-group has-feedback">
                <input id="password" type="password" class="form-control" placeholder="Password" name="password" required>
                <span class="ion ion-locked form-control-feedback "></span>
                @if ($errors->has('password'))
                <span class="help-block">
                    <strong>{{ $errors->first('password') }}</strong>
                </span>
                @endif
            </div>
            <div class="form-group has-feedback">
                <input id="password-confirm" type="password" class="form-control" placeholder="Retype password" name="password_confirmation" required>
                <span class="ion ion-log-in form-control-feedback "></span>
            </div>
            <div class="row">
                <!-- /.col -->
                <div class="col-12 text-center">
                    <button type="submit" class="btn btn-info btn-block btn-flat margin-top-10">SIGN UP</button>
                </div>
                <!-- /.col -->
            </div>
        </form>

        <div class="margin-top-20 text-center">
            <p>Already have an account?<a href="{{ route('login') }}" class="text-info m-l-5"> Sign In</a></p>
        </div>

    </div>
    <!-- /.form-box -->
</div>
@endsection

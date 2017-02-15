@extends('member')
@section('title', 'Login |')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-sm-6 col-md-4 col-md-offset-4">
            <div class="account-wall">
                <img src="img/favicon.png" alt="Logo" class="profile-img">
                <div class="form-signin">
                    <form role="form" method="POST" action="{{ url('/login') }}">
                        {{ csrf_field() }}
                        <div class="{{ $errors->has('email') ? ' has-error' : '' }}">
                            <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required autofocus placeholder="Email">
                            @if ($errors->has('email'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('email') }}</strong>
                                </span>
                            @endif
                        </div>

                        <div class="{{ $errors->has('password') ? ' has-error' : '' }}">
                            <input id="password" type="password" class="form-control" name="password" required placeholder="Password">

                            @if ($errors->has('password'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('password') }}</strong>
                                </span>
                            @endif
                        </div>
                        <div class="checkbox inline">
                            <label>
                                <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : ''}}> Remember Me
                            </label>
                        </div>
                        

                        <button type="submit" class="btn btn-lg btn-default btn-block">
                            Login
                        </button>

                        <div class="text-center"><a class="need-help" href="{{ url('/password/reset') }}">
                            I forgot my password.
                        </a></div>
                        <p class="text-center new-account">Don't have an account? <a href="/register">Register </a>now!</p>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

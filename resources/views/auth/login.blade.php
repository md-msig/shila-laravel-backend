@extends('layouts.app')

@section('content')

<div class="login-box-body">
    <p class="login-box-msg">Sign in to start your session</p>
    @include('common.message')
    <form class="form-horizontal" role="form" method="POST" action="{{ url('/login') }}">
        {{ csrf_field() }}
        <div class="form-group has-feedback">
            <input type="email" name="email" value="{{ old('email') }}" class="form-control" placeholder="Email">
            <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
            @if ($errors->has('email'))
            <span class="help-block">
                <strong>{{ $errors->first('email') }}</strong>
            </span>
            @endif
        </div>
        
    </form>

    <a href="{{ url('/password/reset') }}">I forgot my password</a><br>
    <a href="{{ url('/register') }}" class="text-center">Register a new membership</a>

</div>

@endsection

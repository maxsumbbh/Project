@extends('layouts.app')
@section('content')
<div class="login-box">
    <div class="login-logo">
        <a href="route('login')">
            {{ trans('เข้าสู่ระบบ') }}
        </a>
    </div>
    <div class="login-box-body">
        <p class="login-box-msg">
            {{ trans('กรุณาเข้าสู่ระบบ') }}
        </p>
        @if(session()->has('message'))
            <p class="alert alert-info">
                {{ session()->get('message') }}
            </p>
        @endif
        <form method="POST" action="{{ route('login') }}">
            {{ csrf_field() }}
            <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                <input type="email" name="email" class="form-control" required autofocus placeholder="{{ trans('อีเมล') }}" value="{{ old('email', null) }}">
                @if($errors->has('email'))
                    <p class="help-block">
                        {{ $errors->first('email') }}
                    </p>
                @endif
            </div>
            <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                <input type="password" name="password" class="form-control" required placeholder="{{ trans('รหัสผ่าน') }}">
                @if($errors->has('password'))
                    <p class="help-block">
                        {{ $errors->first('password') }}
                    </p>
                @endif
            </div>
            <div class="row">
                <div class="col-xs-8">
                    <div class="checkbox icheck">
                        <label><input type="checkbox" name="remember"> {{ trans('global.remember_me') }}</label>
                    </div>
                </div>
                <div class="col-xs-4">
                    <button type="submit" class="btn btn-primary btn-block btn-flat">
                        {{ trans('เข้าสู่ระบบ') }}
                    </button>
                </div>
            </div>
        </form>
        <a href="{{ route('password.request') }}">
            {{ trans('ลืมรหัสผ่าน') }}
        </a>
        <br><a href="{{ route('register') }}">{{ trans('สมัครสมาชิกคณาจารย์/นักศึกษา') }}</a>

    </div>
</div>
@endsection

@section('scripts')
<script>
    $(function () {
    $('input').iCheck({
      checkboxClass: 'icheckbox_square-blue',
      radioClass: 'iradio_square-blue',
      increaseArea: '20%' /* optional */
    });
  });
</script>
@endsection
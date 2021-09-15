@extends('layout.frontend')

@section('title')
Nirman Tools| Login
@endsection

@section('content')
<section class="inner-account">
  <div class="container">
    <div class="inner-account-title">
      <h4>Customer Login</h4>
      <p>If you have an account, sign in with your email address.</p>
    </div>
    <div class="inner-account-content">
      <div class="inner-account-form">
        <form action="{{route('login')}}" method="POST">
          @csrf
          <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-12">
              <div class="form-group">
                <label>Email </label><br>
                <span class="wpcf7-form-control-wrap email">
                  <input type="text" name="email" value="" size="40"
                    class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required form-control" aria-required="true"
                    aria-invalid="false"
                    style="background-image: url(&quot;data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAYAAAAf8/9hAAABHklEQVQ4EaVTO26DQBD1ohQWaS2lg9JybZ+AK7hNwx2oIoVf4UPQ0Lj1FdKktevIpel8AKNUkDcWMxpgSaIEaTVv3sx7uztiTdu2s/98DywOw3Dued4Who/M2aIx5lZV1aEsy0+qiwHELyi+Ytl0PQ69SxAxkWIA4RMRTdNsKE59juMcuZd6xIAFeZ6fGCdJ8kY4y7KAuTRNGd7jyEBXsdOPE3a0QGPsniOnnYMO67LgSQN9T41F2QGrQRRFCwyzoIF2qyBuKKbcOgPXdVeY9rMWgNsjf9ccYesJhk3f5dYT1HX9gR0LLQR30TnjkUEcx2uIuS4RnI+aj6sJR0AM8AaumPaM/rRehyWhXqbFAA9kh3/8/NvHxAYGAsZ/il8IalkCLBfNVAAAAABJRU5ErkJggg==&quot;); background-repeat: no-repeat; background-attachment: scroll; background-size: 16px 18px; background-position: 98% 50%; cursor: auto;"
                    value="{{ old('email') }}">
                  @error('email')
                  <span class="text-danger">
                    {{ $errors->first('email') }}
                  </span>
                  @enderror
                </span>
              </div>
            </div>
            <div class="col-lg-12 col-md-12 col-sm-12 col-12">
              <div class="form-group">
                <label> Password </label><br>
                <span class="wpcf7-form-control-wrap password">
                  <input type="password" name="password" value="" size="40"
                    class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required form-control" aria-required="true"
                    aria-invalid="false"
                    style="background-image: url(&quot;data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAYAAAAf8/9hAAABHklEQVQ4EaVTO26DQBD1ohQWaS2lg9JybZ+AK7hNwx2oIoVf4UPQ0Lj1FdKktevIpel8AKNUkDcWMxpgSaIEaTVv3sx7uztiTdu2s/98DywOw3Dued4Who/M2aIx5lZV1aEsy0+qiwHELyi+Ytl0PQ69SxAxkWIA4RMRTdNsKE59juMcuZd6xIAFeZ6fGCdJ8kY4y7KAuTRNGd7jyEBXsdOPE3a0QGPsniOnnYMO67LgSQN9T41F2QGrQRRFCwyzoIF2qyBuKKbcOgPXdVeY9rMWgNsjf9ccYesJhk3f5dYT1HX9gR0LLQR30TnjkUEcx2uIuS4RnI+aj6sJR0AM8AaumPaM/rRehyWhXqbFAA9kh3/8/NvHxAYGAsZ/il8IalkCLBfNVAAAAABJRU5ErkJggg==&quot;); background-repeat: no-repeat; background-attachment: scroll; background-size: 16px 18px; background-position: 98% 50%; cursor: auto;">
                  @error('password')
                  <span class="text-danger">
                    {{ $errors->first('password') }}
                  </span>
                  @enderror
                </span>
              </div>
            </div>
            <div class="col-lg-12 col-md-12 col-sm-12 col-12">
              <div class="login-extra">
                <label>
                  <input type="checkbox" name="remember"> Remember me
                </label>
                <span class="psw">
                  <a href="forget.php">Forgot password?</a>
                  {{-- <p class="mb-1">
          <a class="btn btn-link" href="{{ route('password.request') }}">
                  {{ __('Forgot Your Password?') }}
                  </a>
                  </p> --}}
                  {{-- <p class="mb-0">
          <a href="{{url('register')}}" class="text-center">Register a new membership</a>
                  </p> --}}
                </span>
              </div>
            </div>
            <div class="col-lg-12 col-md-12 col-sm-12 col-12">
              <div class="account-button">
                <input type="submit" value="Login" class="wpcf7-form-control wpcf7-submit btn btn-default">
              </div>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</section>
@endsection
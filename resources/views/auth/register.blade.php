@extends('layout.frontend')

@section('title')
Nirman Tools| Login
@endsection

@section('content')
<section class="inner-account">
  <div class="container">
    <div class="inner-account-title">
      <h4>New Customer Registration</h4>
      <p>If you are new to our store, we are glad to have you as member.</p>
    </div>
    <div class="inner-account-content">
      <div class="inner-account-form inner-register-form">
      <form action="{{ route('register') }}" method="POST">
          @csrf
          <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-12">
              <div class="form-group">
                <label> Full Name </label><br>
                <span class="wpcf7-form-control-wrap adv_name">
                <input type="text" name="name" value="{{ old('name') }}" size="40"
                    class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required form-control" aria-required="true"
                    aria-invalid="false"
                    style="background-image: url(&quot;data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAYAAAAf8/9hAAABHklEQVQ4EaVTO26DQBD1ohQWaS2lg9JybZ+AK7hNwx2oIoVf4UPQ0Lj1FdKktevIpel8AKNUkDcWMxpgSaIEaTVv3sx7uztiTdu2s/98DywOw3Dued4Who/M2aIx5lZV1aEsy0+qiwHELyi+Ytl0PQ69SxAxkWIA4RMRTdNsKE59juMcuZd6xIAFeZ6fGCdJ8kY4y7KAuTRNGd7jyEBXsdOPE3a0QGPsniOnnYMO67LgSQN9T41F2QGrQRRFCwyzoIF2qyBuKKbcOgPXdVeY9rMWgNsjf9ccYesJhk3f5dYT1HX9gR0LLQR30TnjkUEcx2uIuS4RnI+aj6sJR0AM8AaumPaM/rRehyWhXqbFAA9kh3/8/NvHxAYGAsZ/il8IalkCLBfNVAAAAABJRU5ErkJggg==&quot;); background-repeat: no-repeat; background-attachment: scroll; background-size: 16px 18px; background-position: 98% 50%; cursor: auto;">
                </span>
              </div>
            </div>

            <div class="col-lg-12 col-md-12 col-sm-12 col-12">
              <div class="form-group">
                <label> Phone </label><br>
                <span class="wpcf7-form-control-wrap adv_number">
                  <input type="tel" name="phone" value="{{ old('phone') }}" size="40"
                    class="wpcf7-form-control wpcf7-text wpcf7-tel wpcf7-validates-as-required wpcf7-validates-as-tel form-control "
                    aria-required="true" aria-invalid="false">
                </span>
              </div>
            </div>

            <div class="col-lg-12 col-md-12 col-sm-12 col-12">
              <div class="form-group">
                <label> Email </label><br>
                <span class="wpcf7-form-control-wrap adv_email">
                  <input type="email" name="email" value="{{ old('email') }}" size="40" class="wpcf7-form-control wpcf7-text wpcf7-email wpcf7-validates-as-required wpcf7-validates-as-email form-control
                {{ ($errors->has('email'))?'is-invalid':'' }}" aria-required="true" aria-invalid="false">
                </span>
                @if ($errors->has('email'))
                <span class="text-danger" role="alert">
                  {{ $errors->first('email') }}
                </span>
                @endif
              </div>
            </div>

            <div class="col-lg-12 col-md-12 col-sm-12 col-12">
              <div class="form-group">
                <label> Password </label><br>
                <span class="wpcf7-form-control-wrap adv_name">
                  <input type="password" name="password" value="" size="40"
                class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required form-control {{ ($errors->has('password'))?'is-invalid':'' }}" aria-required="true"
                    aria-invalid="false"
                    style="background-image: url(&quot;data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAYAAAAf8/9hAAABHklEQVQ4EaVTO26DQBD1ohQWaS2lg9JybZ+AK7hNwx2oIoVf4UPQ0Lj1FdKktevIpel8AKNUkDcWMxpgSaIEaTVv3sx7uztiTdu2s/98DywOw3Dued4Who/M2aIx5lZV1aEsy0+qiwHELyi+Ytl0PQ69SxAxkWIA4RMRTdNsKE59juMcuZd6xIAFeZ6fGCdJ8kY4y7KAuTRNGd7jyEBXsdOPE3a0QGPsniOnnYMO67LgSQN9T41F2QGrQRRFCwyzoIF2qyBuKKbcOgPXdVeY9rMWgNsjf9ccYesJhk3f5dYT1HX9gR0LLQR30TnjkUEcx2uIuS4RnI+aj6sJR0AM8AaumPaM/rRehyWhXqbFAA9kh3/8/NvHxAYGAsZ/il8IalkCLBfNVAAAAABJRU5ErkJggg==&quot;); background-repeat: no-repeat; background-attachment: scroll; background-size: 16px 18px; background-position: 98% 50%; cursor: auto;">
                </span>
                @if ($errors->has('password'))
                <span class="text-danger" role="alert">
                  {{ $errors->first('password') }}
                </span>
                @endif
              </div>
            </div>

            <div class="col-lg-12 col-md-12 col-sm-12 col-12">
              <div class="form-group">
                <label>Confirm Password </label><br>
                <span class="wpcf7-form-control-wrap adv_name"><input type="password" name="password_confirmation"
                    value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required form-control"
                    aria-required="true" aria-invalid="false"
                    style="background-image: url(&quot;data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAYAAAAf8/9hAAABHklEQVQ4EaVTO26DQBD1ohQWaS2lg9JybZ+AK7hNwx2oIoVf4UPQ0Lj1FdKktevIpel8AKNUkDcWMxpgSaIEaTVv3sx7uztiTdu2s/98DywOw3Dued4Who/M2aIx5lZV1aEsy0+qiwHELyi+Ytl0PQ69SxAxkWIA4RMRTdNsKE59juMcuZd6xIAFeZ6fGCdJ8kY4y7KAuTRNGd7jyEBXsdOPE3a0QGPsniOnnYMO67LgSQN9T41F2QGrQRRFCwyzoIF2qyBuKKbcOgPXdVeY9rMWgNsjf9ccYesJhk3f5dYT1HX9gR0LLQR30TnjkUEcx2uIuS4RnI+aj6sJR0AM8AaumPaM/rRehyWhXqbFAA9kh3/8/NvHxAYGAsZ/il8IalkCLBfNVAAAAABJRU5ErkJggg==&quot;); background-repeat: no-repeat; background-attachment: scroll; background-size: 16px 18px; background-position: 98% 50%; cursor: auto;"></span>
              </div>
            </div>

            <div class="col-lg-12 col-md-12 col-sm-12 col-12">
              <div class="account-button">
                <input type="submit" value="Sign Up" class="wpcf7-form-control wpcf7-submit btn btn-default">
              </div>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</section>
@endsection
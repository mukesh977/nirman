@extends('layout.frontend')

@section('content')
<section class="inner-dashboard ">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-3">
                @include('frontend.includes.sidebar')
            </div>
            <div class="col-lg-9">
                <!-- ORDERS -->
                <div class="inner-dashboard-right id-bg">
                    <div class="idr-title">
                        <h4>Change Password</h4>
                    </div>
                    <div class="idr-content idrc-password">
                        <form action="{{ route('customer.reset_password') }}" method="POST">
                            <div class="row">
                                @csrf
                                <div class="col-lg-7">
                                    <div class="form-group">
                                        <label> Current Password </label><br>
                                        <span class="wpcf7-form-control-wrap adv_name">
                                            <input type="password" name="current_psw" value="{{ old('current_psw')?old('current_psw'):'' }}" size="40"
                                                class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required form-control {{ ($errors->has('current_psw'))?'is-invalid':'' }}"
                                                aria-required="true" aria-invalid="false"
                                                style="background-image: url(&quot;data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAYAAAAf8/9hAAABHklEQVQ4EaVTO26DQBD1ohQWaS2lg9JybZ+AK7hNwx2oIoVf4UPQ0Lj1FdKktevIpel8AKNUkDcWMxpgSaIEaTVv3sx7uztiTdu2s/98DywOw3Dued4Who/M2aIx5lZV1aEsy0+qiwHELyi+Ytl0PQ69SxAxkWIA4RMRTdNsKE59juMcuZd6xIAFeZ6fGCdJ8kY4y7KAuTRNGd7jyEBXsdOPE3a0QGPsniOnnYMO67LgSQN9T41F2QGrQRRFCwyzoIF2qyBuKKbcOgPXdVeY9rMWgNsjf9ccYesJhk3f5dYT1HX9gR0LLQR30TnjkUEcx2uIuS4RnI+aj6sJR0AM8AaumPaM/rRehyWhXqbFAA9kh3/8/NvHxAYGAsZ/il8IalkCLBfNVAAAAABJRU5ErkJggg==&quot;); background-repeat: no-repeat; background-attachment: scroll; background-size: 16px 18px; background-position: 98% 50%; cursor: auto;"
                                                required>
                                        </span>
                                        @error('current_psw')
                                        <span class="text-danger">
                                            {{ $errors->first('current_psw') }}
                                        </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-lg-7">
                                    <div class="form-group">
                                        <label> New Password </label><br>
                                        <span class="wpcf7-form-control-wrap adv_name">
                                            <input type="password" name="password" size="40"
                                                class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required form-control {{ ($errors->has('password'))?'is-invalid':'' }}"
                                                aria-required="true" aria-invalid="false"
                                                style="background-image: url(&quot;data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAYAAAAf8/9hAAABHklEQVQ4EaVTO26DQBD1ohQWaS2lg9JybZ+AK7hNwx2oIoVf4UPQ0Lj1FdKktevIpel8AKNUkDcWMxpgSaIEaTVv3sx7uztiTdu2s/98DywOw3Dued4Who/M2aIx5lZV1aEsy0+qiwHELyi+Ytl0PQ69SxAxkWIA4RMRTdNsKE59juMcuZd6xIAFeZ6fGCdJ8kY4y7KAuTRNGd7jyEBXsdOPE3a0QGPsniOnnYMO67LgSQN9T41F2QGrQRRFCwyzoIF2qyBuKKbcOgPXdVeY9rMWgNsjf9ccYesJhk3f5dYT1HX9gR0LLQR30TnjkUEcx2uIuS4RnI+aj6sJR0AM8AaumPaM/rRehyWhXqbFAA9kh3/8/NvHxAYGAsZ/il8IalkCLBfNVAAAAABJRU5ErkJggg==&quot;); background-repeat: no-repeat; background-attachment: scroll; background-size: 16px 18px; background-position: 98% 50%; cursor: auto;"
                                                required>
                                        </span>
                                        @error('password')
                                        <span class="text-danger">
                                            {{ $errors->first('password') }}
                                        </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-lg-7">
                                    <div class="form-group">
                                        <label> Confirm Password </label><br>
                                        <span class="wpcf7-form-control-wrap adv_name">
                                            <input type="password" name="password_confirmation" value="" size="40"
                                                class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required form-control"
                                                aria-required="true" aria-invalid="false"
                                                style="background-image: url(&quot;data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAYAAAAf8/9hAAABHklEQVQ4EaVTO26DQBD1ohQWaS2lg9JybZ+AK7hNwx2oIoVf4UPQ0Lj1FdKktevIpel8AKNUkDcWMxpgSaIEaTVv3sx7uztiTdu2s/98DywOw3Dued4Who/M2aIx5lZV1aEsy0+qiwHELyi+Ytl0PQ69SxAxkWIA4RMRTdNsKE59juMcuZd6xIAFeZ6fGCdJ8kY4y7KAuTRNGd7jyEBXsdOPE3a0QGPsniOnnYMO67LgSQN9T41F2QGrQRRFCwyzoIF2qyBuKKbcOgPXdVeY9rMWgNsjf9ccYesJhk3f5dYT1HX9gR0LLQR30TnjkUEcx2uIuS4RnI+aj6sJR0AM8AaumPaM/rRehyWhXqbFAA9kh3/8/NvHxAYGAsZ/il8IalkCLBfNVAAAAABJRU5ErkJggg==&quot;); background-repeat: no-repeat; background-attachment: scroll; background-size: 16px 18px; background-position: 98% 50%; cursor: auto;"
                                                required>
                                        </span>
                                    </div>
                                </div>
                                <div class="col-lg-7">
                                    <div class="idrc-password-btn">
                                        <button type="submit">
                                            <i class="far fa-save"></i>Save Changes
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
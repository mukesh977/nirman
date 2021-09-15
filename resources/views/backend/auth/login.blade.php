<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Nirman Tools | Log in</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">


  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{asset('adminlte/login_css/all.min.css')}}">
  <!-- Ionicons -->
  <link rel="stylesheet" href="{{asset('adminlte/login_css/ionicons.min.css')}}">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="{{asset('adminlte/login_css/icheck-bootstrap.min.css')}}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{asset('adminlte/css/adminlte.min.css')}}">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
  {{-- toast --}}
  <link rel="stylesheet" href="{{ asset('toast/build/toastr.min.css') }}">


</head>

<body class="hold-transition login-page">
  <div class="login-box">
    <div class="login-logo">
      <a href="{{ route('frontend_index') }}">
        <b>
          Nirman Tools
        </b>
      </a>
      <br>
    </div>
    <!-- /.login-logo -->
    <div class="card">
      <div class="card-body login-card-body">
        <p class="login-box-msg">Sign in to start your session</p>

        <form action="{{route('admin.login')}}" method="post">
          @csrf
          <div class="form-group mb-3">
            <input type="email" class="form-control" name="email" value="{{ old('email') }}" placeholder="Email">
            @error('email')
            <span class="text-danger">
              {{ $errors->first('email') }}
            </span>
            @enderror

          </div>
          <div class="form-group mb-3">
            <input type="password" class="form-control" name="password" placeholder="Password">
            @error('password')
            <span class="text-danger">
              {{ $errors->first('password') }}
            </span>
            @enderror
          </div>
          <div class="row">
            <div class="col-8">
              <div class="icheck-primary">
                <input class="form-check-input" type="checkbox" name="remember" id="remember"
                  {{ old('remember') ? 'checked' : '' }}>
                <label class="form-check-label" for="remember">
                  {{ __('Remember Me') }}
                </label>
              </div>
            </div>
            <!-- /.col -->
            <div class="col-4">
              <button type="submit" class="btn btn-primary btn-block">Sign In</button>
            </div>
            <!-- /.col -->
          </div>
        </form>

        {{-- <p class="mb-1">
          <a class="btn btn-link" href="{{ route('password.request') }}">
        {{ __('Forgot Your Password?') }}
        </a>
        </p> --}}
        {{-- <p class="mb-0">
          <a href="{{url('register')}}" class="text-center">Register a new membership</a>
        </p> --}}
      </div>
      <!-- /.login-card-body -->
    </div>
  </div>
  <!-- /.login-box -->




  <!-- jQuery -->
  <script src="{{asset('adminlte/js/jquery.min.js')}}"></script>
  <!-- Bootstrap 4 -->
  <script src="{{asset('adminlte/login_css/bootstrap_bundle.min.js')}}"></script>
  <!-- AdminLTE App -->
  <script src="{{asset('adminlte/js/adminlte.min.js')}}"></script>
  {{-- toast --}}
  <script src="{{ asset('toast/build/toastr.min.js') }}"></script>
  
  
  <script>
    @if(session()->has('success_msg'))
    toastr.success("{{session()->get('success_msg')}}", 'Success', {closeButton :true })    
    @elseif( session()->has('error_msg') )
    toastr.error("{{session()->get('error_msg')}}", 'OOps!', {closeButton :true} )    
  @endif
  </script>



</body>

</html>
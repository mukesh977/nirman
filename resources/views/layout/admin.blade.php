<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="x-ua-compatible" content="ie=edge">



  <title>
    Nirman Tools | @yield('title')
  </title>

  {{-- adminlte css --}}
  <link rel="stylesheet" href="{{asset('adminlte/css/adminlte.min.css')}}">

  {{-- custom css --}}
  <link rel="stylesheet" type="text/css" href="{{asset('adminlte/css/custom.css')}}">

  <link rel="stylesheet" href="{{ asset('frontend/fontawesome-new/css/all.css') }}">

  <link rel="stylesheet" href="{{asset('adminlte/css/bootstrap.min.css')}}">

  {{-- toast --}}
  <link rel="stylesheet" href="{{ asset('toast/build/toastr.min.css') }}">

  {{-- data table --}}
  <link rel="stylesheet" href="{{ asset('datatable/css/jquery.dataTables.min.css') }}">
</head>



<body class="hold-transition sidebar-mini">

  <div class="wrapper">



    <!-- Navbar -->
    @include('include.admin.navbar')
    <!-- /.navbar -->



    <!-- Main Sidebar Container -->
    @include('include.admin.sidebar')



    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Main content -->
      <section class="content">
        @yield('content')
      </section>
      <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->




    <!-- Main Footer -->
    <footer class="main-footer">
      <!-- Default to the left -->
      <strong>Copyright &copy;{{ date("Y") }} <a href="https://www.ultrabyteit.com/" target="0">Utrabyte</a>.</strong>
      All rights reserved.
    </footer>




  </div>



  <!-- REQUIRED SCRIPTS -->
  <!-- jQuery -->
  <script src="{{asset('adminlte/js/jquery.min.js')}}"></script>

  <!-- Bootstrap 4 -->
  <script src="{{asset('adminlte/js/bootstrap.min.js')}}"></script>

  <!-- AdminLTE App -->
  <script src="{{asset('adminlte/js/adminlte.min.js')}}"></script>

  {{-- font awesome --}}
  <script src="{{asset('adminlte/js/fontawesome.js')}}"></script>

  {{-- jquery slim --}}
  {{-- <script type="text/javascript" src="{{asset('adminlte/js/jquery_slim.min.js')}}"></script> --}}

  {{-- popper js --}}
  <script type="text/javascript" src="{{asset('adminlte/js/popper.min.js')}}"></script>


  {{--ckeditor--}}
  <script type="text/javascript" src="https://cdn.ckeditor.com/4.13.0/standard/ckeditor.js"></script>

  {{-- toast --}}
  <script src="{{ asset('toast/build/toastr.min.js') }}"></script>


  {{-- data table --}}
  <script src="{{ asset('datatable/js/jquery.dataTables.min.js') }}"></script>

{{-- 
  <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.min.js"
    integrity="sha512-d9xgZrVZpmmQlfonhQUvTR7lMPtO7NkZMkA0ABN3PHCbKA5nqylQ/yWlFAyY6hYgdF1Qh6nYiuADWwKB4C2WSw=="
    crossorigin="anonymous"></script> --}}

  <!-- Charting library -->
  <script src="https://unpkg.com/echarts/dist/echarts.min.js"></script>
  <!-- Chartisan -->
  <script src="https://unpkg.com/@chartisan/echarts/dist/chartisan_echarts.js"></script>


  <script>
    @if(session()->has('success_msg'))
      toastr.success("{{session()->get('success_msg')}}", 'Success', {closeButton :true })    
    @elseif( session()->has('error_msg') )
      toastr.info("{{session()->get('error_msg')}}", 'OOps!', {closeButton :true} )    
    @endif
  </script>



  @yield('script')

</body>

</html>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="csrf-token" content="{{ csrf_token() }}">



  <title>@yield('title')</title>
  <meta name="description" content="@yield('seo_description')">
  <meta property="og:image" content="@yield('og_image')">
  <meta name="keywords" content="@yield('seo_keyword')">



  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&amp;display=swap" rel="stylesheet">
  <link rel="stylesheet" href="{{ asset('frontend/css/bootstrap.min.css') }}">
  <link rel="stylesheet" href=" {{ asset('frontend/fontawesome-new/css/all.css') }}">
  <link rel="stylesheet" href="{{ asset('frontend/css/slick.css') }}">
  <link rel="stylesheet" href="{{ asset('frontend/css/slick-theme.css') }}">
  <link rel="stylesheet" href="{{ asset('frontend/css/style.css') }}">
  <link rel="stylesheet" href="{{ asset('frontend/css/responsive.css') }}">
  <link rel="stylesheet" href="{{ asset('frontend/css/jquery.fancybox.css') }}" media="screen">
  {{-- toast --}}
  <link rel="stylesheet" href="{{ asset('toast/build/toastr.min.css') }}">
  {{-- star rating css --}}
  <link href="{{ asset('star-rating/css/star-rating.min.css') }}" media="all" rel="stylesheet" type="text/css" />
  <!-- optionally if you need to use a theme, then include the theme file as mentioned below -->
  <link href="{{ asset('star-rating/themes/krajee-fas/theme.min.css') }}" media="all" rel="stylesheet" type="text/css" />
</head>

<body>
  @include('frontend.includes.navbar')



  @yield('content')



  {{-- authenticated modal --}}
  <div class=" authentication-modal">
  <div id="myModal" class="modal fade" role="dialog" style="z-index: 10000;">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Welcome !! Please Login to continue.</h4>
        </div>
        <div class="modal-body">
          <p>You must be authenticated user to access this feature.</p>
          <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-6 col-6">
              <div class="modal-login">
                <a href="{{ route('login') }}">Login</a>
              </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6 col-6">
              <div class="modal-register">
                <a href="{{ route('register') }}">Sign Up</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  </div>



  @include('frontend.includes.footer')



  <script src="{{ asset('frontend/js/jquery-3.3.1.min.js') }}"></script>
  <script src="{{ asset('frontend/js/bootstrap.min.js') }}"></script>
  <script src="{{ asset('frontend/js/slick.min.js') }}"></script>
  <script src="{{ asset('frontend/js/custom.js') }}"></script>
  <script src="{{ asset('frontend/js/jquery.fancybox.js') }}"></script>
  <script src="{{ asset('frontend/js/jquery.fancybox.pack.js') }}"></script>
  <script src="{{ asset('frontend/js/jquery.fancybox-buttons.js') }}"></script>
  {{-- toast --}}
  <script src="{{ asset('toast/build/toastr.min.js') }}"></script>
  {{-- star rating --}}
  <script src="{{ asset('star-rating/js/star-rating.min.js') }}" type="text/javascript"></script>
  <!-- optionally if you need to use a theme, then include the theme file as mentioned below -->
  <script src="{{ asset('star-rating/themes/krajee-fas/theme.min.js') }}"></script>



  <script>
    @if(session()->has('success_msg'))
      toastr.success("{{session()->get('success_msg')}}", 'Success', {closeButton :true })    
    @elseif( session()->has('error_msg') )
      toastr.error("{{session()->get('error_msg')}}", 'OOps!', {closeButton :true} )    
    @elseif( session()->has('warning_msg') )
      toastr.warning("{{session()->get('warning_msg')}}", 'OOps!', {closeButton :true} )    
    @endif

    $(document).ready(function(){        
      $(".unauth-wishlist").click(function(e){
          e.preventDefault();
          $('#myModal').modal('show')
      });                   
    });
  </script>



  @yield('script')
  </body>

</html>
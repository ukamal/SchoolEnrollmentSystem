
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <title>Front Page</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta name="description" content="" />
  <meta name="author" content="" />

  <!-- css -->
  <link href="https://fonts.googleapis.com/css?family=Noto+Serif:400,400italic,700|Open+Sans:300,400,600,700" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css">
  <link href="{{ asset('public/css/frontend_css/font-awesome.min.css') }}" rel="stylesheet" />

  <link href="{{ asset('public/css/frontend_css/bootstrap.css') }}" rel="stylesheet" />
  <link href="{{ asset('public/css/frontend_css/bootstrap-responsive.css') }}" rel="stylesheet" />
  <link href="{{ asset('public/css/frontend_css/fancybox/jquery.fancybox.css') }}" rel="stylesheet">
  <link href="{{ asset('public/css/frontend_css/jcarousel.css') }}" rel="stylesheet" />
  <link href="{{ asset('public/css/frontend_css/flexslider.css') }}" rel="stylesheet" />
  <link href="{{ asset('public/css/frontend_css/style.css') }}" rel="stylesheet" />
  <!-- Theme skin -->
  <link href="{{ asset('public/css/frontend_css/skins/default.css') }}" rel="stylesheet" />
  <!-- Fav and touch icons -->
  <link rel="apple-touch-icon-precomposed" sizes="144x144" href="{{ asset('public/images/frontend_img/ico/apple-touch-icon-144-precomposed.png') }}" />
  <link rel="apple-touch-icon-precomposed" sizes="114x114" href="{{ asset('public/images/frontend_img/ico/apple-touch-icon-114-precomposed.png') }}" />
  <link rel="apple-touch-icon-precomposed" sizes="72x72" href="{{ asset('public/images/frontend_img/ico/apple-touch-icon-72-precomposed.png') }}" />
  <link rel="apple-touch-icon-precomposed" href="{{ asset('public/images/frontend_img/ico/apple-touch-icon-57-precomposed.png') }}" />
  <link rel="shortcut icon" href="{{ asset('public/images/frontend_img/ico/favicon.png') }}" />
  <!-- plugin css for this page -->
  <link rel="stylesheet" href="{{ asset('public/node_modules/font-awesome/css/font-awesome.min.css') }}" />
  <link rel="stylesheet" href="{{ asset('public/css/backend_css/all.min.css') }}" />

  <!-- =======================================================
    Theme Name: Flattern
    Theme URL: https://bootstrapmade.com/flattern-multipurpose-bootstrap-template/
    Author: BootstrapMade.com
    Author URL: https://bootstrapmade.com
  ======================================================= -->
</head>

<body>
  <div id="wrapper">

    @include('front_header')

     @yield('content');

    @include('frontpage_footer')

  </div>
  <a href="#" class="scrollup"><i class="fas fa-chevron-up icon-square icon-32 active"></i></a>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/js/all.min.js"></script>
  <!-- javascript
    ================================================== -->
  <!-- Placed at the end of the document so the pages load faster -->
  <script src="{{ asset('public/js/frontend_js/jquery.js') }}"></script>
  <script src="{{ asset('public/js/frontend_js/all.min.js') }}"></script>
  <script src="{{ asset('public/js/frontend_js/jquery.easing.1.3.js') }}"></script>
  <script src="{{ asset('public/js/frontend_js/bootstrap.js') }}"></script>
  <script src="{{ asset('public/js/frontend_js/jcarousel/jquery.jcarousel.min.js') }}"></script>
  <script src="{{ asset('public/js/frontend_js/jquery.fancybox.pack.js') }}"></script>
  <script src="{{ asset('public/js/frontend_js/jquery.fancybox-media.js') }}"></script>
  <script src="{{ asset('public/js/frontend_js/google-code-prettify/prettify.js') }}"></script>
  <script src="{{ asset('public/js/frontend_js/portfolio/jquery.quicksand.js') }}"></script>
  <script src="{{ asset('public/js/frontend_js/jquery.flexslider.js') }}"></script>
  <script src="{{ asset('public/js/frontend_js/jquery.nivo.slider.js') }}"></script>
  <script src="{{ asset('public/js/frontend_js/portfolio/setting.js') }}"></script>
  <script src="{{ asset('public/js/frontend_js/modernizr.custom.js') }}"></script>
  <script src="{{ asset('public/js/frontend_js/jquery.ba-cond.min.js') }}"></script>
  <script src="{{ asset('public/js/frontend_js/jquery.slitslider.js') }}"></script>
  <script src="{{ asset('public/js/frontend_js/animate.js') }}"></script>

  <!-- Template Custom JavaScript File -->
  <script src="{{ asset('public/js/frontend_js/custom.js') }}"></script>

</body>
</html>

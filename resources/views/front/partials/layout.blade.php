<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Freelancer - Start Bootstrap Theme</title>

    <!-- Bootstrap core CSS -->
    <link href="{{ asset('/assets/front/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="{{ asset('/assets/front/vendor/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css">

    <!-- Custom styles for this template -->
    <link href="{{ asset('/assets/front/css/freelancer.min.css') }}" rel="stylesheet">

  </head>

  <body id="page-top">

    <!-- Navigation -->
    @include('front.partials.nav')
    <!-- End Navigation -->

    @yield('content')

    <!-- Footer -->
    @include('front.partials.footer')
    <!-- End Footer -->

    <!-- Bootstrap core JavaScript -->
    <script src="{{ asset('/assets/front/vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('/assets/front/vendor/popper/popper.min.js') }}"></script>
    <script src="{{ asset('/assets/front/vendor/bootstrap/js/bootstrap.min.js') }}"></script>

    <!-- Plugin JavaScript -->
    <script src="{{ asset('/assets/front/vendor/jquery-easing/jquery.easing.min.js') }}"></script>

    <!-- Contact Form JavaScript -->
    <script src="{{ asset('/assets/front/js/jqBootstrapValidation.js') }}"></script>
    <script src="{{ asset('/assets/front/js/contact_me.js') }}"></script>

    <!-- Custom scripts for this template -->
    <script src="{{ asset('/assets/front/js/freelancer.min.js') }}"></script>

  </body>

</html>

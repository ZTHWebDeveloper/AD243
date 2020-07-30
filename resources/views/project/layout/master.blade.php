<!DOCTYPE html>
<html>
<head>
 
	<title>@yield('title')</title>
 <!--  template start -->
       <!-- Favicons -->
      <link href="{{asset('img/favicon.png')}}" rel="icon">
      <link href="{{asset('img/apple-touch-icon.png')}}" rel="apple-touch-icon">

      <!-- Google Fonts -->
      <link href="{{asset('https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700')}}" rel="stylesheet">

      <!-- Bootstrap CSS File -->
      <link href="{{asset('lib/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">

      <!-- Libraries CSS Files -->
      <link href="{{asset('lib/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet">
      <link href="{{asset('lib/animate/animate.min.css')}}" rel="stylesheet">
      <link href="{{asset('lib/ionicons/css/ionicons.min.css')}}" rel="stylesheet">
      <link href="{{asset('lib/owlcarousel/assets/owl.carousel.min.css')}}" rel="stylesheet">

      <!-- Main Stylesheet File -->
      <link href="{{asset('css/style.css')}}" rel="stylesheet">
 <!-- template end -->

<!-- 	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"> -->
 <style type="text/css">
    body{
      background:#ddd;
    }
 </style>
</head>
<body>
  <div class="container-fluid">
    <div id="nav">
      @yield('navbar')
    </div>
    <div id="slider">
      @yield('slider')
    </div>
    <div id="contact">
      @yield('contact')
    </div>
    <div id="footer">
      @yield('footer')
    </div>
  </div>
  
	<!-- <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" > 
  </script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" > 
  </script> -->

  <!-- template start -->
     <!-- JavaScript Libraries -->
    <script src="{{asset('lib/jquery/jquery.min.js')}}"></script>
    <script src="{{asset('lib/jquery/jquery-migrate.min.js')}}"></script>
    <script src="{{asset('lib/popper/popper.min.js')}}"></script>
    <script src="{{asset('lib/bootstrap/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('lib/easing/easing.min.js')}}"></script>
    <script src="{{asset('lib/owlcarousel/owl.carousel.min.js')}}"></script>
    <script src="{{asset('lib/scrollreveal/scrollreveal.min.js')}}"></script>
    <!-- Contact Form JavaScript File -->
    <script src="{{asset('contactform/contactform.js')}}"></script>

    <!-- Template Main Javascript File -->
    <script src="{{asset('js/main.js')}}"></script>
  <!-- template end -->

</body>
</html>
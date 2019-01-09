<!DOCTYPE html>
<html lang="en">
<head>
  @include('includes.head')
</head>
<body class="cms-index-index index-opt-1">
  <div class="wrapper">
    
    @include('includes.header')

  <!-- MAIN -->
  <main class="site-main">
    @yield('main-content')  
  </main>
  <!-- end MAIN -->

  @include('includes.footer')

{{-- Js File --}}
  <!-- jQuery -->    
  <script src="{{asset('assets/front/js/jquery.min.js')}}"></script>
  <!-- sticky -->
  <script src="{{asset('assets/front/js/jquery.sticky.js')}}"></script>
  <!-- OWL CAROUSEL Slider -->    
  <script src="{{asset('assets/front/js/owl.carousel.min.js')}}"></script>
  <!-- Boostrap --> 
  <script src="{{asset('assets/front/js/bootstrap.min.js')}}"></script>
  <!-- Countdown --> 
  <script src="{{asset('assets/front/js/jquery.countdown.min.js')}}"></script>
  <!--jquery Bxslider  -->
  <script src="{{asset('assets/front/js/jquery.bxslider.min.js')}}"></script>
  <!-- actual --> 
  <script src="{{asset('assets/front/js/jquery.actual.min.js')}}"></script>
  <!-- jQuery UI -->
  <script src="{{asset('assets/front/js/jquery-ui.min.js')}}"></script>
  <!-- Chosen jquery-->    
  <script src="{{asset('assets/front/js/chosen.jquery.min.js')}}"></script>
  <!-- parallax jquery--> 
  <script src="{{asset('assets/front/js/jquery.parallax-1.1.3.js')}}"></script>
  <!-- elevatezoom --> 
  <script src="{{asset('assets/front/js/jquery.elevateZoom.min.js')}}"></script>
  <!-- fancybox -->
  <script src="{{asset('assets/front/js/fancybox/source/jquery.fancybox.pack.js')}}"></script>
  <script src="{{asset('assets/front/js/fancybox/source/helpers/jquery.fancybox-media.js')}}"></script>
  <script src="{{asset('assets/front/js/fancybox/source/helpers/jquery.fancybox-thumbs.js')}}"></script>
  <!-- arcticmodal -->
  <script src="{{asset('assets/front/js/arcticmodal/jquery.arcticmodal.js')}}"></script>
  <!-- Main -->  
  <script src="{{asset('assets/front/js/main.js')}}"></script>
{{-- Js File --}}
@stack('js')
</body>
</html>
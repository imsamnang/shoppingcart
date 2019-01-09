<!DOCTYPE html>
<html lang="en">
<head>
  <title>KuteShop - Multi-Purpose Ecommerce HTML Template</title>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Style CSS -->
  <link rel="stylesheet" type="text/css" href="{{asset('assets/front/css/style.css')}}">
  @stack('css')
</head>
<body class="cms-index-index index-opt-1">
  <div class="wrapper">
    <!-- alert banner top -->
      {{-- @include('layouts.front.ads.head_ads') --}}
    <!-- alert banner top -->
    <!-- HEADER -->
    <header class="site-header header-opt-1 cate-show">

      <!-- header-top -->
        @include('layouts.front.menu.top_navbar')
      <!-- header-top -->

      <!-- header-content -->
        @include('layouts.front.header_content')
      <!-- header-content -->

      <!-- header-nav -->
        @include('layouts.front.menu.header_navbar')
      <!-- header-nav -->

    </header>
  <!-- end HEADER -->        

<!-- MAIN -->
<main class="site-main">
  <!--  Popup Newsletter-->
    {{-- @include('layouts.front.ads.news_letter') --}}
  <!--Popup Newsletter-->

  <div class="block-section-top block-section-top1">
    <div class="container">
      <div class="box-section-top">

      <!-- categories -->
        @include('layouts.front.menu.left_sidebar')
      <!-- categories -->

      <!-- block slide top -->
        @include('layouts.front.slider.slider')
      <!-- block slide top -->

      <!-- banner Slide-->
        @include('layouts.front.ads.banner_slide')
      <!-- banner Slide-->
      </div>
    </div>
  </div>

  <!-- block  service-->
  <div class="container ">
    <div class="block-service-opt1">
      <div class="clearfix">
        <div class="col-md-3 col-sm-6">
          <div class="item">
            <span class="icon">
              <img src="{{asset('assets/front/images/media/index1/service1.png')}}" alt="service">
            </span>
            <strong class="title">Free Shipping </strong>
            <span>On order over $200</span>
          </div>
        </div>
        <div class="col-md-3 col-sm-6">
          <div class="item">
            <span class="icon">
              <img src="{{asset('assets/front/images/media/index1/service2.png')}}" alt="service">
            </span>
            <strong class="title">30-day return</strong>
            <span>Moneyback guarantee</span>
          </div>
        </div>
        <div class="col-md-3 col-sm-6">
          <div class="item">
            <span class="icon">
              <img src="{{asset('assets/front/images/media/index1/service3.png')}}" alt="service">
            </span>
            <strong class="title">24/7 support</strong>
            <span>Online consultations</span>
          </div>
        </div>
        <div class="col-md-3 col-sm-6">
          <div class="item">
            <span class="icon">
              <img src="{{asset('assets/front/images/media/index1/service4.png')}}" alt="service">
            </span>
            <strong class="title">SAFE SHOPPING </strong>
            <span>Safe Shopping Guarantee</span>
          </div>
        </div>

      </div>
    </div>
  </div><!-- block  service-->

  {{-- Best Sallers --}}
    {{-- @include('layouts.front.best_saller') --}}
  {{-- Best Sallers --}}

  <div class="clearfix" style="background-color: #eeeeee;margin-bottom: 40px; padding-top:30px;">

    <!-- block -floor -products / floor 1 :Fashion-->
      {{-- @include('layouts.front.fashion_floor1') --}}
    <!-- block -floor -products / floor 1 :Fashion-->

    {{-- Fashion --}}
      {{-- @include('layouts.front.fashion') --}}
    {{-- Fashion --}}

    {{-- Sports --}}
      {{-- @include('layouts.front.sports') --}}
    {{-- Sports --}}

    {{-- Electronics --}}
      {{-- @include('layouts.front.electronic') --}}
    {{-- Electronics --}}

    {{-- Digital --}}
      {{-- @include('layouts.front.digital') --}}
    {{-- Digital --}}

    {{-- Fornitures --}}
      {{-- @include('layouts.front.furniture') --}}
    {{-- Fornitures --}}

    {{-- jewelry --}}
      {{-- @include('layouts.front.jewelry') --}}
    {{-- jewelry --}}

    <!-- Banner -->
      {{-- @include('layouts.front.banner') --}}
    <!-- Banner -->
  </div>

  <!-- block  showcase-->
    {{-- @include('layouts.front.showcase') --}}
  <!-- block  showcase-->

  <!-- block  hot categories-->
    {{-- @include('layouts.front.hot_categories') --}}
  <!--block  hot categories-->

</main>
<!-- end MAIN -->

@include('layouts.front.footer')

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
</body>
</html>
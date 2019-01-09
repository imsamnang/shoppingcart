<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <meta charset="utf-8" />
    <title>Login Page - Ace Admin</title>
    <meta name="description" content="User login page" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />
    <!-- bootstrap & fontawesome -->
    <link rel="stylesheet" href="{{asset('assets/front/css/bootstrap.css')}}" />
    <link rel="stylesheet" href="{{asset('assets/front/css/font-awesome.css')}}" />
    <!-- text fonts -->
    <link rel="stylesheet" href="{{asset('assets/front/css/fonts.googleapis.com.css')}}" />
    <!-- ace styles -->
    <link rel="stylesheet" href="{{asset('assets/front/css/ace.min.css')}}" />
    @stack('css')
  </head>

<body class="login-layout">
    <div class="main-container">
      <div class="main-content">        
        <div class="row">
          @yield('content')
        </div><!-- /.row -->
      </div><!-- /.main-content -->
    </div>

  <script src="{{asset('assets/front/js/jquery.min.js')}}"></script>
  <script type="text/javascript">
      if('ontouchstart' in document.documentElement) document.write("<script src='{{asset("assets/ace/js/jquery.mobile.custom.min.js")}}'>"+"<"+"/script>");
  </script>

  @stack('js')
</body>
</html>

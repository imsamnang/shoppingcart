<!DOCTYPE html>
<html lang="en">
	<head>
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
		<meta charset="utf-8" />
		<meta name="csrf-token" content="{{ csrf_token() }}">
		<title>@yield('title', 'ACE Master Page')</title>
		<meta name="description" content="overview &amp; stats" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />
		<!-- bootstrap & fontawesome -->
		<link rel="stylesheet" href="{{asset('assets/ace/css/bootstrap.min.css')}}" />
		<link rel="stylesheet" href="{{asset('assets/ace/font-awesome/4.5.0/css/font-awesome.min.css')}}" />
		<!-- page specific plugin styles -->
		<!-- text fonts -->
		<link rel="stylesheet" href="{{asset('assets/ace/css/fonts.googleapis.com.css')}}" />
		<!-- ace styles -->
		<link rel="stylesheet" href="{{asset('assets/ace/css/ace.min.css')}}" class="ace-main-stylesheet" id="main-ace-style" />
		<link rel="stylesheet" href="{{asset('assets/ace/css/ace-skins.min.css')}}" />
		<link rel="stylesheet" href="{{asset('assets/ace/css/ace-rtl.min.css')}}" />
		@stack('css')
	</head>

	<body class="skin-2">
		@include('includes.back.top_navbar')

		<div class="main-container ace-save-state" id="main-container">
			<script type="text/javascript">
				try{ace.settings.loadState('main-container')}catch(e){}
			</script>

		@include('includes.back.ace_left_sidebar')

			<div class="main-content">
				<div class="main-content-inner">
					@include('includes.back.breadcrumbs')

					<div class="page-content">
							@yield('content')
					</div>

				</div>
			</div><!-- /.main-content -->

			@include('includes.back.footer')
		</div><!-- /.main-container -->
		<script src="{{asset('assets/ace/js/jquery-2.1.4.min.js')}}"></script>
		<script type="text/javascript">
			if('ontouchstart' in document.documentElement) document.write("<script src='{{asset('assets/js/jquery.mobile.custom.min.js')}}'>"+"<"+"/script>");
		</script>
		<script src="{{asset('assets/ace/js/bootstrap.min.js')}}"></script>
		{{-- <script src="{{asset('assets/ace/js/jquery-ui.custom.min.js')}}"></script>
		<script src="{{asset('assets/ace/js/jquery.ui.touch-punch.min.js')}}"></script>
		<script src="{{asset('assets/ace/js/jquery.easypiechart.min.js')}}"></script>
		<script src="{{asset('assets/ace/js/jquery.sparkline.index.min.js')}}"></script> --}}
		{{-- <script src="{{asset('assets/ace/js/jquery.flot.min.js')}}"></script>
		<script src="{{asset('assets/ace/js/jquery.flot.pie.min.js')}}"></script>
		<script src="{{asset('assets/ace/js/jquery.flot.resize.min.js')}}"></script> --}}

		<!-- ace scripts -->
		<script src="{{asset('assets/ace/js/ace-elements.min.js')}}"></script>
		<script src="{{asset('assets/ace/js/ace.min.js')}}"></script>
		<script src="{{asset('assets/ace/js/ace-extra.min.js')}}"></script>

		@stack('js')
	</body>
</html>

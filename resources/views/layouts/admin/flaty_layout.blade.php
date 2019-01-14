
<!DOCTYPE html>
<html>
<head>
	@include('includes.back.flaty.head')
	@stack('css')
</head>
<body>

	<!-- BEGIN Theme Setting -->
	<div id="theme-setting">
		{{-- @include('includes.back.flaty.setting') --}}
	</div>
	<!-- END Theme Setting -->

	<!-- BEGIN Navbar -->
	<div id="navbar" class="navbar navbar-fixed">
		@include('includes.back.flaty.top_navbar')
	</div>
	<!-- END Navbar -->

	<!-- BEGIN Container -->
	<div class="container" id="main-container">
		<!-- BEGIN Sidebar -->
		<div id="sidebar" class="navbar-collapse collapse sidebar-fixed">
			<!-- BEGIN Navlist -->
			@include('includes.back.flaty.left_sidebar')
			<!-- END Navlist -->
		</div>
		<!-- END Sidebar -->

		<!-- BEGIN Content -->
		<div id="main-content">
			<!-- BEGIN Breadcrumb -->
			<div id="breadcrumbs">
				<ul class="breadcrumb">
					<li>
						<i class="fa fa-home"></i>
						<a href="index.html">Home</a>
						<span class="divider"><i class="fa fa-angle-right"></i></span>
					</li>
					<li class="active">@yield('menu-title','Blank')</li>
				</ul>
			</div>
			<!-- END Breadcrumb -->

			<!-- BEGIN Main Content -->
			<div class="row">
				<div class="col-md-12">
					<div class="box">
						<div class="box-title">
							<h3><i class="fa fa-file"></i> @yield('form-title', 'default')</h3>
							<div class="box-tool">
								@section('action-form')

						        	@show
								<a data-action="collapse" href="#"><i class="fa fa-chevron-up"></i></a>
								<a data-action="close" href="#"><i class="fa fa-times"></i></a>
							</div>
						</div>
						<div class="box-content">
							@yield('admin-content')
							<br><br><br><br><br><br><br><br><br><br><br><br>
							<br><br><br><br><br><br><br><br><br><br><br><br>
						</div>
					</div>
				</div>
			</div>

	<!-- END Main Content -->

	<footer>
		<p>2013 © FLATY Admin Template.</p>
	</footer>
		<a id="btn-scrollup" class="btn btn-circle btn-lg" href="#"><i class="fa fa-chevron-up"></i></a>
		</div>
	<!-- END Content -->
	</div>
<!-- END Container -->

<!--basic scripts-->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
	<script>window.jQuery || document.write('<script src="{{asset('assets/flaty/assets/jquery/jquery-2.1.1.min.js')}}"><\/script>')</script>
	{{-- <script src="{{asset('assets/flaty/assets/bootstrap/js/bootstrap.min.js')}}"></script> --}}
		<script src="{{asset('js/bootstrap.min.js')}}"></script>
	<script src="{{asset('assets/flaty/assets/jquery-slimscroll/jquery.slimscroll.min.js')}}"></script>
	<script src="{{asset('assets/flaty/assets/jquery-cookie/jquery.cookie.js')}}"></script>

<!--flaty scripts-->
	<script src="{{asset('assets/flaty/js/flaty.js')}}"></script>
	<script src="{{asset('assets/flaty/js/flaty-demo-codes.js')}}"></script>
	@stack('js')
</body>
</html>

<!DOCTYPE html>
<html lang="en">
<head>	
	@include('includes.back.admin_head')
	@stack('js')	
</head>

<body>
	<!-- start: Header -->
		@include('includes.back.top_header')
	<!-- start: Header -->	
	<div class="container-fluid-full">
		<div class="row-fluid">				
			<!-- start: Left Sidebar -->
			@include('includes.back.left_sidebar')	
			<!-- start: Left Sidebar -->
			<noscript>
				<div class="alert alert-block span10">
					<h4 class="alert-heading">Warning!</h4>
					<p>You need to have <a href="http://en.wikipedia.org/wiki/JavaScript" target="_blank">JavaScript</a> enabled to use this site.</p>
				</div>
			</noscript>			
			<!-- start: Content -->
			<div id="content" class="span10">			
				@yield('admin-content')
			</div>
			<!-- start: Content -->
		</div>
	</div><!--/fluid-row-->
		
	<div class="modal hide fade" id="myModal">
		<div class="modal-header">
			<button type="button" class="close" data-dismiss="modal">×</button>
			<h3>Settings</h3>
		</div>
		<div class="modal-body">
			<p>Here settings can be configured...</p>
		</div>
		<div class="modal-footer">
			<a href="#" class="btn" data-dismiss="modal">Close</a>
			<a href="#" class="btn btn-primary">Save changes</a>
		</div>
	</div>
	
	<div class="clearfix"></div>	
	<footer>
		<p>
			<span style="text-align:left;float:left">&copy; 2013 <a href="http://jiji262.github.io/Bootstrap_Metro_Dashboard/" alt="Bootstrap_Metro_Dashboard">Bootstrap Metro Dashboard</a></span>			
		</p>
	</footer>
	
<!-- start: JavaScript-->
	<script src="{{asset('assets/back/js/jquery-1.9.1.min.js')}}"></script>
	<script src="{{asset('assets/back/js/jquery-migrate-1.0.0.min.js')}}"></script>	
	<script src="{{asset('assets/back/js/jquery-ui-1.10.0.custom.min.js')}}"></script>
	<script src="{{asset('assets/back/js/jquery.ui.touch-punch.js')}}"></script>
	<script src="{{asset('assets/back/js/modernizr.js')}}"></script>
	<script src="{{asset('assets/back/js/bootstrap.min.js')}}"></script>
	<script src="{{asset('assets/back/js/jquery.cookie.js')}}"></script>
	<script src='{{asset('assets/back/js/fullcalendar.min.js')}}'></script>
	<script src='{{asset('assets/back/js/jquery.dataTables.min.js')}}'></script>
	<script src="{{asset('assets/back/js/excanvas.js')}}"></script>
	<script src="{{asset('assets/back/js/jquery.flot.js')}}"></script>
	<script src="{{asset('assets/back/js/jquery.flot.pie.js')}}"></script>
	<script src="{{asset('assets/back/js/jquery.flot.stack.js')}}"></script>
	<script src="{{asset('assets/back/js/jquery.flot.resize.min.js')}}"></script>	
	<script src="{{asset('assets/back/js/jquery.chosen.min.js')}}"></script>	
	<script src="{{asset('assets/back/js/jquery.uniform.min.js')}}"></script>		
	<script src="{{asset('assets/back/js/jquery.cleditor.min.js')}}"></script>	
	<script src="{{asset('assets/back/js/jquery.noty.js')}}"></script>	
	<script src="{{asset('assets/back/js/jquery.elfinder.min.js')}}"></script>	
	<script src="{{asset('assets/back/js/jquery.raty.min.js')}}"></script>	
	<script src="{{asset('assets/back/js/jquery.iphone.toggle.js')}}"></script>	
	<script src="{{asset('assets/back/js/jquery.uploadify-3.1.min.js')}}"></script>	
	<script src="{{asset('assets/back/js/jquery.gritter.min.js')}}"></script>	
	<script src="{{asset('assets/back/js/jquery.imagesloaded.js')}}"></script>	
	<script src="{{asset('assets/back/js/jquery.masonry.min.js')}}"></script>	
	<script src="{{asset('assets/back/js/jquery.knob.modified.js')}}"></script>	
	<script src="{{asset('assets/back/js/jquery.sparkline.min.js')}}"></script>	
	<script src="{{asset('assets/back/js/counter.js')}}"></script>	
	<script src="{{asset('assets/back/js/retina.js')}}"></script>
	<script src="{{asset('assets/back/js/custom.js')}}"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
	<!-- end: JavaScript-->
	@stack('js')
</body>
</html>

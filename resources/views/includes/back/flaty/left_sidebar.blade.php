<!-- BEGIN Navlist -->
<ul class="nav nav-list">
	<li class="active">
		<a href="{{route('dashboard')}}">
			<i class="fa fa-dashboard"></i>
			<span>Dashboard</span>
		</a>
	</li>
	<li>
		<a href="#" class="dropdown-toggle">
			<i class="fa fa-desktop"></i>
			<span>Manage Categories</span>
			<b class="arrow fa fa-angle-right"></b>
		</a>
		<!-- BEGIN Submenu -->
		<ul class="submenu">
			<li><a href="{{route('admin.category.index')}}">List Categories</a></li>
			<li><a href="{{route('admin.category.create')}}">Add Category</a></li>			
		</ul>
		<!-- END Submenu -->
	</li>
	<li>
		<a href="#" class="dropdown-toggle">
			<i class="fa fa-edit"></i>
			<span>Forms</span>
			<b class="arrow fa fa-angle-right"></b>
		</a>

		<!-- BEGIN Submenu -->
		<ul class="submenu">
			<li><a href="form_layout.html">Layout</a></li>
			<li><a href="form_component.html">Component</a></li>
			<li><a href="form_wizard.html">Wizard</a></li>
			<li><a href="form_validation.html">Validation</a></li>
		</ul>
		<!-- END Submenu -->
	</li>
	<li>
		<a href="#" class="dropdown-toggle">
			<i class="fa fa-list"></i>
			<span>Tables</span>
			<b class="arrow fa fa-angle-right"></b>
		</a>

		<!-- BEGIN Submenu -->
		<ul class="submenu">
			<li><a href="table_basic.html">Basic</a></li>
			<li><a href="table_advance.html">Advance</a></li>
			<li><a href="table_dynamic.html">Dynamic</a></li>
		</ul>
		<!-- END Submenu -->
	</li>
	<li>
		<a href="#" class="dropdown-toggle">
			<i class="fa fa-globe"></i>
			<span>Maps</span>
			<b class="arrow fa fa-angle-right"></b>
		</a>

		<!-- BEGIN Submenu -->
		<ul class="submenu">
			<li><a href="map_google.html">Google Maps</a></li>
			<li><a href="map_vector.html">Vector Maps</a></li>
		</ul>
		<!-- END Submenu -->
	</li>
	<li>
		<a href="box.html">
			<i class="fa fa-list-alt"></i>
			<span>Box</span>
		</a>
	</li>
	<li>
		<a href="calendar.html">
			<i class="fa fa-calendar"></i>
			<span>Calendar</span>
		</a>
	</li>
	<li>
		<a href="gallery.html">
			<i class="fa fa-picture-o"></i>
			<span>Gallery</span>
		</a>
	</li>
	<li>
		<a href="grid.html">
			<i class="fa fa-th"></i>
			<span>Griding System</span>
		</a>
	</li>
	<li>
		<a href="#" class="dropdown-toggle">
			<i class="fa fa-file-text-o"></i>
			<span>Sample Pages</span>
			<b class="arrow fa fa-angle-right"></b>
		</a>

		<!-- BEGIN Submenu -->
		<ul class="submenu">
			<li><a href="extra_login.html">Login &amp; Register</a></li>
			<li><span>Email</span>
				<ul>
					<li><a href="extra_mail-list.html">Inbox</a></li>
					<li><a href="extra_mail-msg.html">Mail Thread</a></li>
					<li><a href="extra_mail-compose.html">Compose</a></li>
				</ul>
			</li>
			<li><a href="extra_profile.html">User Profile</a></li>
			<li><a href="extra_invoice.html">Invoice</a></li>
			<li><a href="extra_search.html">Search Results</a></li>
		</ul>
		<!-- END Submenu -->
	</li>
	<li>
		<a href="#" class="dropdown-toggle">
			<i class="fa fa-file"></i>
			<span>Other Pages</span>
			<b class="arrow fa fa-angle-right"></b>
		</a>

		<!-- BEGIN Submenu -->
		<ul class="submenu">
			<li><a href="more_blank.html">Blank Page</a></li>
			<li><a href="more_full-width.html">Full Width Page</a></li>
			<li><span>Errors</span>
				<ul>
					<li><a href="more_error-404.html">Error 404</a></li>
					<li><a href="more_error-500.html">Error 500</a></li>
				</ul>
			</li>
			<li><a href="more_set-skin.html">Skin</a></li>
			<li><a href="more_set-sidebar-navbar-color.html">Sidebar &amp; Navbar</a></li>
			<li><a href="more_sidebar-collapsed.html">Collapsed Sidebar</a></li>
		</ul>
		<!-- END Submenu -->
	</li>
</ul>
<!-- END Navlist -->

<!-- BEGIN Sidebar Collapse Button -->
<div id="sidebar-collapse" class="visible-lg">
	<i class="fa fa-angle-double-left"></i>
</div>
<!-- END Sidebar Collapse Button -->

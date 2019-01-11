@extends('layouts.admin.admin_layout')

@section('title','Create Category')

@push('css')
	{{-- expr --}}
@endpush

@section('admin-content')

			<ul class="breadcrumb">
				<li>
					<i class="icon-home"></i>
					<a href="index.html">Home</a> 
					<i class="icon-angle-right"></i>
				</li>
				<li><a href="#">Tables</a></li>
			</ul>

			<div class="row-fluid sortable">		
				<div class="box span12">
					<div class="box-header" data-original-title>
						<h2><i class="halflings-icon user"></i><span class="break"></span>Members</h2>&nbsp;
						<span><a href="{{route('admin.category.create')}}" class="label label-success"><i class="halflings-icon white plus"></i>Add Category</a></span>
						<div class="box-icon">
							<a href="#" class="btn-setting"><i class="halflings-icon plus"></i></a>
							<a href="#" class="btn-minimize"><i class="halflings-icon chevron-up"></i></a>
							<a href="#" class="btn-close"><i class="halflings-icon remove"></i></a>
						</div>
					</div>
					<div class="box-content">
						<table class="table table-striped table-bordered bootstrap-datatable datatable">
						  <thead>
							  <tr>
								  <th>ID</th>
								  <th>Category Name</th>
								  <th>Description</th>
								  <th>Status</th>
								  <th>Actions</th>
							  </tr>
						  </thead>   
						  <tbody>
						  	@foreach ($categories as $key => $row)
							<tr>
								<td>{{++$key}}</td>
								<td class="center">{{$row->category_name}}</td>
								<td class="center">{!!$row->category_description!!}</td>
								<td class="center">
									@if ($row->publication_status==1)
										<span class="label label-success">Publish</span>
									@else
										<span class="label label-info">Unpublish</span>
									@endif
								</td>
								<td class="center">
									@if ($row->publication_status==1)
										<a class="btn btn-danger" href="#">
											<i class="halflings-icon white thumbs-down"></i>  
										</a>
									@else
										<a class="btn btn-success" href="#">
											<i class="halflings-icon white thumbs-up"></i>
										</a>
									@endif
									<a class="btn btn-info" href="#">
										<i class="halflings-icon white edit"></i>  
									</a>
									<a class="btn btn-danger" href="#">
										<i class="halflings-icon white trash"></i> 
									</a>
								</td>
								</td>
							</tr>
						  	@endforeach
						  </tbody>
					  </table>            
					</div>
				</div><!--/span-->
			
			</div><!--/row-->			

@endsection

@push('js')
	{{-- expr --}}
@endpush
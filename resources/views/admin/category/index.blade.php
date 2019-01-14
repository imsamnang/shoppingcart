@extends('layouts.admin.flaty_layout')

@section('title','Create Category')

@push('css')
	{{-- expr --}}
@endpush

@section('admin-content')
	@section('menu-title','List Category')
	@section('form-title','List Category')
	@section('action-form')
    @parent
			<span><a href="{{route('admin.category.create')}}" class="btn btn-primary">Add Category</a></span>
		@endsection
			<div class="row-fluid sortable">		
				<div class="box span12">
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
										<a class="btn btn-danger" href="{{route('admin.category.unpublish',$row->category_id)}}">
											<i class="halflings-icon white thumbs-down"></i>  
										</a>
									@else
										<a class="btn btn-success" href="{{route('admin.category.publish',$row->category_id)}}">
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
	{!! Toastr::message() !!}
@endpush
@extends('layouts.admin.flaty_layout')

@section('title','Add New Category')

@push('css')
	{{-- expr --}}
@endpush

@section('admin-content')
	@section('menu-title','Add Category')
	@section('form-title','Form Add Category')
	@section('action-form')
    	@parent

	@endsection
			<div class="row-fluid sortable">		
				<div class="box span12">
					<div class="box-content">
						<form class="form-horizontal" method="POST" action="{{route('admin.category.store')}}">
							{{csrf_field()}}
						  <fieldset>
								<div class="form-group">
									<label class="col-sm-3 col-lg-2 control-label" for="category_name">Category Name:</label>
									<div class="col-sm-6 col-lg-4 controls">
										<input type="text" name="category_name" id="category_name" class="form-control" data-rule-required="true" data-rule-minlength="3">
									</div>
								</div>

								<div class="form-group">
									<label class="col-sm-3 col-lg-2 control-label" for="category_name">Category Description:</label>
									<div class="col-sm-6 col-lg-4 controls">
										<textarea name="category_description" id="category_description" rows="3" class="form-control" data-rule-required="true" data-rule-minlength="3"></textarea>
									</div>
								</div>

								<div class="form-group">
									<div class="col-sm-9 col-lg-10 controls col-sm-offset-2">
										<label class="checkbox">
											<input type="checkbox" value="1" id="publication_status" name="publication_status"> Status
										</label>
									</div>
								</div>

								<div class="form-group">
									<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2">
									  <button type="submit" class="btn btn-primary">Save changes</button>&nbsp;
									  <button type="reset" class="btn btn-warning">Cancel</button>
									</div>
								</div>								

						  </fieldset>
						</form>   
					</div>
				</div><!--/span-->
			</div><!--/row-->
@endsection

@push('js')
	{!! Toastr::message() !!}
	<script type="text/javascript">
    @if ($errors->any())
        @foreach ($errors->all() as $error)
            toastr.error('{{ $error }}','Error',{
                closeButton:true,
                progressBar:true
            });
        @endforeach
    @endif
	</script>
@endpush
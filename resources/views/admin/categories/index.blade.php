@extends('layouts.admin.sma_layout')

@section('title','List All Category Category')

@push('css')
	{{-- expr --}}
@endpush

@section('admin-content')

	<form action="#" id="action-form" method="post" accept-charset="utf-8">
		<input type="hidden" name="token" value="07bd8bd21d61cf26b22472f6da0c5478" />
		<div class="box">
		    <div class="box-header">
		        <h2 class="blue"><i class="fa-fw fa fa-folder-open"></i>Categories</h2>
		        <div class="box-icon">
		            <ul class="btn-tasks">
		                <li class="dropdown">
		                    <a data-toggle="dropdown" class="dropdown-toggle" href="#">
		                        <i class="icon fa fa-tasks tip" data-placement="left" title="Actions"></i>
		                    </a>
		                    <ul class="dropdown-menu pull-right tasks-menus" role="menu" aria-labelledby="dLabel">
		                        <li>
		                            <a href="http://localhost/project_full/stmav3/admin/system_settings/add_category" data-toggle="modal" data-target="#myModal">
		                                <i class="fa fa-plus"></i> Add Category                            </a>
		                        </li>
		                        <li>
		                            <a href="http://localhost/project_full/stmav3/admin/system_settings/import_categories" data-toggle="modal" data-target="#myModal">
		                                <i class="fa fa-plus"></i> Import Categories                            </a>
		                        </li>
		                        <li>
		                            <a href="#" id="excel" data-action="export_excel">
		                                <i class="fa fa-file-excel-o"></i> Export to Excel file                            </a>
		                        </li>
		                        <li class="divider"></li>
		                        <li>
		                            <a href="#" id="delete" data-action="delete">
		                                <i class="fa fa-trash-o"></i> Delete Category                            </a>
		                        </li>
		                    </ul>
		                </li>
		            </ul>
		        </div>
		    </div>
		    <div class="box-content">
		        <div class="row">
		            <div class="col-lg-12">
		                <p class="introtext">Please use the table below to navigate or filter the results. You can download the table as excel and pdf.</p>
		                <div class="table-responsive">
		                    <table id="CategoryTable" class="table table-bordered table-hover table-striped reports-table">
		                        <thead>
		                            <tr>
		                                <th style="min-width:30px; width: 30px; text-align: center;">
		                                    <input class="checkbox checkth" type="checkbox" name="check"/>
		                                </th>
		                                <th style="min-width:40px; width: 40px; text-align: center;">
		                                    Image                                </th>
		                                <th>Category Code</th>
		                                <th>Category Name</th>
		                                <th>Slug</th>
		                                <th>Parent Category</th>
		                                <th style="width:100px;">Actions</th>
		                            </tr>
		                        </thead>
		                        <tbody>
		                            <tr>
		                                <td colspan="7" class="dataTables_empty">
		                                    Loading data from server                                </td>
		                            </tr>
		                        </tbody>
		                    </table>
		                </div>
		            </div>
		        </div>
		    </div>
		</div>
		<div style="display: none;">
		    <input type="hidden" name="form_action" value="" id="form_action"/>
		    <input type="submit" name="submit" value="submit"  id="action-form-submit" />
		</div>
	</form>

@endsection

@push('js')
	{!! Toastr::message() !!}
@endpush
@extends('layouts.admin.sma_layout')

@section('title','warehouses')

@push('css')
  {{-- expr --}}
@endpush

@section('admin-content')

<form action="http://localhost/full_project/WeERP_v3/system_settings/warehouse_actions" id="action-form" method="post" accept-charset="utf-8">
<input type="hidden" name="token" value="d734af40612ff1684196bb5544ccb118" />
<div class="box">
    <div class="box-header">
        <h2 class="blue"><i class="fa-fw fa fa-building-o"></i>Warehouses</h2>

        <div class="box-icon">
            <ul class="btn-tasks">
                <li class="dropdown">
                    <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                        <i class="icon fa fa-tasks tip" data-placement="left" title="Actions"></i>
                    </a>
                    <ul class="dropdown-menu pull-right tasks-menus" role="menu" aria-labelledby="dLabel">
                        						<li>
                            <a href="http://localhost/full_project/WeERP_v3/system_settings/add_warehouse" data-toggle="modal" data-target="#myModal">
                                <i class="fa fa-plus"></i> Add Warehouse                            </a>
                            </li>
						                        <li>
                            <a href="#" id="excel" data-action="export_excel">
                                <i class="fa fa-file-excel-o"></i> Export to Excel file                            </a>
                        </li>
                        <li>
                            <a href="#" id="pdf" data-action="export_pdf">
                                <i class="fa fa-file-pdf-o"></i> Export to PDF file                            </a>
                        </li>
                        
												<li class="divider"></li>
                        <li>
                            <a href="#" id="delete" data-action="delete">
                                <i class="fa fa-trash-o"></i> Delete Warehouses                            </a>
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
                    <table id="CURData" class="table table-bordered table-hover table-striped table-condensed">
                        <thead>
                        <tr>
                            <th style="min-width:30px; width: 30px; text-align: center;">
                                <input class="checkbox checkth" type="checkbox" name="check"/>
                            </th>
                            <th style="min-width:40px; width: 40px; text-align: center;">map</th>
                            <th class="col-xs-1">Code</th>
                            <th class="col-xs-2">Name</th>
                            <th class="col-xs-2">Price Group</th>
                            <th class="col-xs-2">Phone</th>
                            <th class="col-xs-2">Email</th>
                            <th class="col-xs-3">Address</th>
                            <th style="width:65px;">Actions</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td colspan="9" class="dataTables_empty">Loading data from server</td>
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

@push('css')
  {{-- expr --}}
@endpush


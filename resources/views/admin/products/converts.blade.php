@extends('layouts.admin.sma_layout')

@section('title','Converts')

@push('css')
  {{-- expr --}}
@endpush

@section('admin-content')

<form action="http://localhost/full_project/WeERP_v3/products/adjustment_actions" id="action-form" method="post" accept-charset="utf-8">
<input type="hidden" name="token" value="2c684812a1d708ff68ef64c2082cd362" />
<div class="box">
    <div class="box-header">
        <h2 class="blue"><i class="fa-fw fa fa-filter"></i>Converts (All Warehouses)</h2>
        <div class="box-icon">
            <ul class="btn-tasks">
                <li class="dropdown">
                    <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                        <i class="icon fa fa-tasks tip" data-placement="left" title="Actions"></i>
                    </a>
                    <ul class="dropdown-menu pull-right tasks-menus" role="menu" aria-labelledby="dLabel">
                        <li>
                            <a href="http://localhost/full_project/WeERP_v3/products/add_convert">
                                <i class="fa fa-plus-circle"></i> Add Convert                            </a>
                        </li>
                        <li>
                            <a href="#" id="excel" data-action="export_excel">
                                <i class="fa fa-file-excel-o"></i> Export to Excel file                            </a>
                        </li>
                        <li>
                            <a href="#" id="pdf" data-action="export_pdf">
                                <i class="fa fa-file-pdf-o"></i> Export to PDF file                            </a>
                        </li>
                    </ul>
                </li>
                                    <li class="dropdown">
                        <a data-toggle="dropdown" class="dropdown-toggle" href="#"><i class="icon fa fa-building-o tip" data-placement="left" title="Warehouses"></i></a>
                        <ul class="dropdown-menu pull-right tasks-menus" role="menu" aria-labelledby="dLabel">
                            <li><a href="http://localhost/full_project/WeERP_v3/products/converts"><i class="fa fa-building-o"></i> All Warehouses</a></li>
                            <li class="divider"></li>
                            <li><a href="http://localhost/full_project/WeERP_v3/products/converts/3"><i class="fa fa-building"></i>Warehouse 1</a></li><li><a href="http://localhost/full_project/WeERP_v3/products/converts/4"><i class="fa fa-building"></i>Warehouse 2</a></li><li><a href="http://localhost/full_project/WeERP_v3/products/converts/5"><i class="fa fa-building"></i>Warehouse 3</a></li><li><a href="http://localhost/full_project/WeERP_v3/products/converts/6"><i class="fa fa-building"></i>Warehouse Siem Reap</a></li><li><a href="http://localhost/full_project/WeERP_v3/products/converts/7"><i class="fa fa-building"></i>3A-1234</a></li>                        </ul>
                    </li>
                            </ul>
        </div>
    </div>
    <div class="box-content">
        <div class="row">
            <div class="col-lg-12">
                <p class="introtext">Please use the table below to navigate or filter the results. You can download the table as excel and pdf.</p>

                <div class="table-responsive">
                    <table id="dmpData" class="table table-bordered table-condensed table-hover table-striped">
                        <thead>
                        <tr>
                            <th style="min-width:30px; width: 30px; text-align: center;">
                                <input class="checkbox checkft" type="checkbox" name="check"/>
                            </th>
                            <th class="col-xs-2">Date</th>
                            <th class="col-xs-2">Reference</th>
							<th class="col-xs-2">Biller</th>
                            <th class="col-xs-2">Warehouse</th>
                            <th class="col-xs-2">Created by</th>
                            <th>Note</th>
                            <th style="min-width:75px; text-align:center;">Actions</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td colspan="8" class="dataTables_empty">Loading data from server</td>
                        </tr>
                        </tbody>
                        <tfoot class="dtFilter">
                        <tr class="active">
                            <th style="min-width:30px; width: 30px; text-align: center;">
                                <input class="checkbox checkft" type="checkbox" name="check"/>
                            </th>
                            <th></th><th></th><th></th><th></th><th></th>
                            <th></th>
                            <th style="width:75px; text-align:center;">Actions</th>
                        </tr>
                        </tfoot>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

    <div style="display: none;">
        <input type="hidden" name="form_action" value="" id="form_action"/>
        <input type="submit" name="performAction" value="performAction"  id="action-form-submit" />
    </div>
    </form>
  
@endsection

@push('css')
  {{-- expr --}}
@endpush


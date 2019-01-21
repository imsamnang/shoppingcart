@extends('layouts.admin.sma_layout')

@section('title','Purchase List')

@push('css')
  {{-- expr --}}
@endpush

@section('admin-content')

<form action="http://localhost/full_project/WeERP_v3/purchases/purchase_actions" id="action-form" method="post" accept-charset="utf-8">
<input type="hidden" name="token" value="e300cefab404d51b08c0fbc7f15b818c" />
<div class="box">
    <div class="box-header">
        <h2 class="blue"><i
                class="fa-fw fa fa-star"></i>Purchases (All Warehouses)        </h2>

        <div class="box-icon">
            <ul class="btn-tasks">
                <li class="dropdown">
                    <a data-toggle="dropdown" class="dropdown-toggle" href="#"><i class="icon fa fa-tasks tip" data-placement="left" title="Actions"></i></a>
                    <ul class="dropdown-menu pull-right tasks-menus" role="menu" aria-labelledby="dLabel">
                        <li>
                            <a href="http://localhost/full_project/WeERP_v3/purchases/add">
                                <i class="fa fa-plus-circle"></i> Add Purchase                            </a>
                        </li>
                        <li>
                            <a href="#" id="excel" data-action="export_excel">
                                <i class="fa fa-file-excel-o"></i> Export to Excel file                            </a>
                        </li>
                        <li>
                            <a href="#" id="pdf" data-action="export_pdf">
                                <i class="fa fa-file-pdf-o"></i> Export to PDF file                            </a>
                        </li>
                        <li>
                            <a href="#" id="combine" data-action="combine">
                                <i class="fa fa-file-pdf-o"></i> Combine to pdf                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#" class="bpo" title="<b>Delete Purchases</b>"
                                data-content="<p>Are you sure?</p><button type='button' class='btn btn-danger' id='delete' data-action='delete'>Yes I'm sure</a> <button class='btn bpo-close'>No</button>"
                                data-html="true" data-placement="left">
                                <i class="fa fa-trash-o"></i> Delete Purchases                            </a>
                        </li>
                    </ul>
                </li>
                                    <li class="dropdown">
                        <a data-toggle="dropdown" class="dropdown-toggle" href="#"><i class="icon fa fa-building-o tip" data-placement="left" title="Warehouses"></i></a>
                        <ul class="dropdown-menu pull-right tasks-menus" role="menu" aria-labelledby="dLabel">
                            <li><a href="http://localhost/full_project/WeERP_v3/purchases"><i class="fa fa-building-o"></i> All Warehouses</a></li>
                            <li class="divider"></li>
                            <li ><a href="http://localhost/full_project/WeERP_v3/purchases/3"><i class="fa fa-building"></i>Warehouse 1</a></li><li ><a href="http://localhost/full_project/WeERP_v3/purchases/4"><i class="fa fa-building"></i>Warehouse 2</a></li><li ><a href="http://localhost/full_project/WeERP_v3/purchases/5"><i class="fa fa-building"></i>Warehouse 3</a></li><li ><a href="http://localhost/full_project/WeERP_v3/purchases/6"><i class="fa fa-building"></i>Warehouse Siem Reap</a></li><li ><a href="http://localhost/full_project/WeERP_v3/purchases/7"><i class="fa fa-building"></i>3A-1234</a></li>                        </ul>
                    </li>
                            </ul>
        </div>
    </div>
    <div class="box-content">
        <div class="row">
            <div class="col-lg-12">

                <p class="introtext">Please use the table below to navigate or filter the results. You can download the table as excel and pdf.</p>

                <div class="table-responsive">
                    <table id="POData" cellpadding="0" cellspacing="0" border="0"
                           class="table table-bordered table-hover table-striped">
                        <thead>
                        <tr class="active">
                            <th style="min-width:30px; width: 30px; text-align: center;">
                                <input class="checkbox checkft" type="checkbox" name="check"/>
                            </th>
                            <th>Date</th>
                            <th>Reference No</th>
							<th>Reference No To</th>
							<th>Biller</th>
							<th>Project</th>
                            <th>Supplier</th>
                            <th>Purchase Status</th>
                            <th>Grand Total</th>
                            <th>Paid</th>
                            <th>Balance</th>
                            <th>Payment Status</th>
                            <th style="min-width:30px; width: 30px; text-align: center;"><i class="fa fa-chain"></i></th>
                            <th style="width:100px;">Actions</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td colspan="11" class="dataTables_empty">Loading data from server</td>
                        </tr>
                        </tbody>
                        <tfoot class="dtFilter">
                        <tr class="active">
                            <th style="min-width:30px; width: 30px; text-align: center;">
                                <input class="checkbox checkft" type="checkbox" name="check"/>
                            </th>
                            <th></th>
                            <th></th>
							<th></th>
							<th></th>
                            <th></th>
                            <th></th>
							<th></th>
							
                            <th>Grand Total</th>
                            <th>Paid</th>
                            <th>Balance</th>
                            <th></th>
                            <th style="min-width:30px; width: 30px; text-align: center;"><i class="fa fa-chain"></i></th>
                            <th style="width:100px; text-align: center;">Actions</th>
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


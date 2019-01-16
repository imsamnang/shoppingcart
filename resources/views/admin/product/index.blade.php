@extends('layouts.admin.sma_layout')

@section('title','List all Product')

@push('css')
  {{-- expr --}}
@endpush

@section('admin-content')
  <form action="http://localhost/project_full/stmav3/admin/products/product_actions" id="action-form" method="post" accept-charset="utf-8">
    <input type="hidden" name="token" value="07bd8bd21d61cf26b22472f6da0c5478" />
    <div class="box">
        <div class="box-header">
            <h2 class="blue"><i class="fa-fw fa fa-barcode"></i>Products (All Warehouses)</h2>
            <div class="box-icon">
                <ul class="btn-tasks">
                    <li class="dropdown">
                        <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                            <i class="icon fa fa-tasks tip" data-placement="left" title="Actions"></i>
                        </a>
                        <ul class="dropdown-menu pull-right tasks-menus" role="menu" aria-labelledby="dLabel">
                            <li>
                                <a href="http://localhost/project_full/stmav3/admin/products/add">
                                  <i class="fa fa-plus-circle"></i> Add Product
                                </a>
                            </li>
                            <li>
                              <a href="http://localhost/project_full/stmav3/admin/products/update_price" data-toggle="modal" data-target="#myModal">
                                <i class="fa fa-file-excel-o"></i> Update Price
                              </a>
                            </li>
                            <li>
                              <a href="#" id="labelProducts" data-action="labels">
                                <i class="fa fa-print"></i> Print Barcode/Label
                              </a>
                            </li>
                            <li>
                              <a href="#" id="sync_quantity" data-action="sync_quantity">
                                <i class="fa fa-arrows-v"></i> Sync Quantity
                              </a>
                            </li>
                            <li>
                              <a href="#" id="excel" data-action="export_excel">
                                <i class="fa fa-file-excel-o"></i> Export to Excel file
                              </a>
                            </li>
                            <li class="divider"></li>
                            <li>
                              <a href="#" class="bpo" title="<b>Delete Products</b>"
                                    data-content="<p>Are you sure?</p><button type='button' class='btn btn-danger' id='delete' data-action='delete'>Yes I'm sure</a> <button class='btn bpo-close'>No</button>"
                                    data-html="true" data-placement="left">
                                <i class="fa fa-trash-o"></i> Delete Products
                              </a>
                             </li>
                        </ul>
                    </li>
                    <li class="dropdown">
                      <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                        <i class="icon fa fa-building-o tip" data-placement="left" title="Warehouses"></i>
                      </a>
                      <ul class="dropdown-menu pull-right tasks-menus" role="menu" aria-labelledby="dLabel">
                        <li>
                          <a href="http://localhost/project_full/stmav3/admin/products">
                            <i class="fa fa-building-o"></i> All Warehouses</a>
                        </li>
                        <li class="divider"></li>
                        <li>
                          <a href="http://localhost/project_full/stmav3/admin/products/1">
                            <i class="fa fa-building"></i>Warehouse 1</a>
                        </li>
                        <li>
                          <a href="http://localhost/project_full/stmav3/admin/products/2">
                            <i class="fa fa-building"></i>Warehouse 2
                          </a>
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
                  <table id="PRData" class="table table-bordered table-condensed table-hover table-striped">
                      <thead>
                        <tr class="primary">
                            <th style="min-width:30px; width: 30px; text-align: center;">
                                <input class="checkbox checkth" type="checkbox" name="check"/>
                            </th>
                            <th style="min-width:40px; width: 40px; text-align: center;">Image</th>
                            <th>Code</th>
                            <th>Name</th>
                            <th>Brand</th>
                            <th>Category</th>
                            <th>Cost</th>
                            <th>Price</th>                            
                            <th>Quantity</th>
                            <th>Unit</th>
                            <th>Racks</th>
                            <th>Alert Quantity</th>
                            <th style="min-width:65px; text-align:center;">Actions</th>
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
                          <th style="min-width:40px; width: 40px; text-align: center;">Image</th>
                          <th></th>
                          <th></th>
                          <th></th>
                          <th></th>
                          <th></th>
                          <th></th>                            
                          <th></th>
                          <th></th>
                          <th></th>
                          <th></th>
                          <th style="width:65px; text-align:center;">Actions</th>
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

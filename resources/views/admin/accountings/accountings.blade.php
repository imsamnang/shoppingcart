@extends('layouts.admin.sma_layout')

@section('title','Accountings')

@push('css')
  {{-- expr --}}
@endpush

@section('admin-content')

<form action="http://localhost/full_project/WeERP_v3/accountings/accountings_actions" id="action-form" method="post" accept-charset="utf-8">
<input type="hidden" name="token" value="e300cefab404d51b08c0fbc7f15b818c" />
<div class="box">
    <div class="box-header">
        <h2 class="blue"><i class="fa-fw fa fa-users"></i>Chart Account</h2>

        <div class="box-icon">
            <ul class="btn-tasks">
                <li class="dropdown">
                    <a data-toggle="dropdown" class="dropdown-toggle" href="#"><i class="icon fa fa-tasks tip"
                                                                                  data-placement="left"
                                                                                  title="Actions"></i></a>
                    <ul class="dropdown-menu pull-right tasks-menus" role="menu" aria-labelledby="dLabel">
                        <li><a href="http://localhost/full_project/WeERP_v3/accountings/addAccount" data-toggle="modal" data-target="#myModal"
                               id="add"><i class="fa fa-plus-circle"></i> Add Account</a></li>
                        <li><a href="#" id="excel" data-action="export_excel"><i
                                    class="fa fa-file-excel-o"></i> Export to Excel file</a></li>
                        <li><a href="#" id="pdf" data-action="export_pdf"><i
                                    class="fa fa-file-pdf-o"></i> Export to PDF file</a></li>
                        <li class="divider"></li>
                        <li><a href="#" class="bpo" title="<b>delete billers</b>"
                               data-content="<p>Are you sure?</p><button type='button' class='btn btn-danger' id='delete' data-action='delete'>Yes I'm sure</a> <button class='btn bpo-close'>No</button>"
                               data-html="true" data-placement="left"><i
                                    class="fa fa-trash-o"></i> Delete Accounts</a></li>
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
                    <table id="SupData" cellpadding="0" cellspacing="0" border="0"
                           class="table table-bordered table-condensed table-hover table-striped">
                        <thead>
                        <tr class="primary">
                            <th style="min-width:5%; width: 5%; text-align: center;">
                                <input class="checkbox checkth" type="checkbox" name="check"/>
                            </th>
                            <th>Code</th>
                            <th>Name</th>
                            <th>Parent Code</th>
                            <th>Section</th>
                            <th class="text-center">Is Cash</th>
                            <th>Actions</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td colspan="7" class="dataTables_empty">Loading data from server</td>
                        </tr>
                        </tbody>
                        <tfoot class="dtFilter">
                        <tr class="active">
                            <th style="min-width:5%; width: 5%; text-align: center;">
                                <input class="checkbox checkft" type="checkbox" name="check"/>
                            </th>
                            <th></th>
                            <th></th>
                            <th></th>
                            <th></th>
                            <th class="text-center"></th>
                            <th class="text-center">Actions</th>
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


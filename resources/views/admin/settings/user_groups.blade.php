@extends('layouts.admin.sma_layout')

@section('title','user_groups')

@push('css')
  {{-- expr --}}
@endpush

@section('admin-content')

<div class="box">
    <div class="box-header">
        <h2 class="blue"><i class="fa-fw fa fa-users"></i>User Groups</h2>

        <div class="box-icon">
            <ul class="btn-tasks">
                <li class="dropdown">
                    <a data-toggle="dropdown" class="dropdown-toggle" href="#"><i class="icon fa fa-tasks tip"
                                                                                  data-placement="left"
                                                                                  title="Actions"></i></a>
                    <ul class="dropdown-menu pull-right tasks-menus" role="menu" aria-labelledby="dLabel">
                        <li><a href="http://localhost/full_project/WeERP_v3/system_settings/create_group" data-toggle="modal"
                               data-target="#myModal"><i class="fa fa-plus"></i> Add User Group</a></li>
                        <li><a href="#" id="excelProducts" data-action="export_excel"><i
                                    class="fa fa-file-excel-o"></i> Export to Excel file</a></li>
                        <li><a href="#" id="pdfProducts" data-action="export_pdf"><i
                                    class="fa fa-file-pdf-o"></i> Export to PDF file</a></li>
                        <li class="divider"></li>
                        <li><a href="#" id="deleteGroups" data-action="delete"><i
                                    class="fa fa-trash-o"></i> Delete User Groups</a></li>
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
                    <table id="GPData" class="table table-bordered table-hover table-striped">
                        <thead>
                        <tr>
                            <th style="min-width:30px; width: 30px; text-align: center;">
                                <input class="checkbox checkth" type="checkbox" name="check"/>
                            </th>
                            <th>User Group ID</th>
                            <th>Group Name</th>
                            <th>Group Description</th>
                            <th style="width:45px;">Actions</th>
                        </tr>
                        </thead>
                        <tbody>
                                                    <tr>
                                <td>
                                    <div class="text-center"><input class="checkbox multi-select" type="checkbox" name="val[]"
                                                   value="5"/></div>
                                </td>
                                <td>5</td>
                                <td>sale</td>
                                <td>Sale</td>
                                <td style="text-align:center;">
                                    <a class="tip" title="Change Permissions" href="http://localhost/full_project/WeERP_v3/system_settings/permissions/5"><i class="fa fa-tasks"></i></a> <a class="tip" title="Edit User Group" data-toggle="modal" data-target="#myModal" href="http://localhost/full_project/WeERP_v3/system_settings/edit_group/5"><i class="fa fa-edit"></i></a> <a href="#" class="tip po" title="Delete User Group" data-content="<p>Are you sure?</p><a class='btn btn-danger' href='http://localhost/full_project/WeERP_v3/system_settings/delete_group/5'>Yes I'm sure</a> <button class='btn po-close'>No</button>"><i class="fa fa-trash-o"></i></a>                                </td>
                            </tr>
                                                    <tr>
                                <td>
                                    <div class="text-center"><input class="checkbox multi-select" type="checkbox" name="val[]"
                                                   value="6"/></div>
                                </td>
                                <td>6</td>
                                <td>purchase</td>
                                <td>Purchase</td>
                                <td style="text-align:center;">
                                    <a class="tip" title="Change Permissions" href="http://localhost/full_project/WeERP_v3/system_settings/permissions/6"><i class="fa fa-tasks"></i></a> <a class="tip" title="Edit User Group" data-toggle="modal" data-target="#myModal" href="http://localhost/full_project/WeERP_v3/system_settings/edit_group/6"><i class="fa fa-edit"></i></a> <a href="#" class="tip po" title="Delete User Group" data-content="<p>Are you sure?</p><a class='btn btn-danger' href='http://localhost/full_project/WeERP_v3/system_settings/delete_group/6'>Yes I'm sure</a> <button class='btn po-close'>No</button>"><i class="fa fa-trash-o"></i></a>                                </td>
                            </tr>
                                                    <tr>
                                <td>
                                    <div class="text-center"><input class="checkbox multi-select" type="checkbox" name="val[]"
                                                   value="7"/></div>
                                </td>
                                <td>7</td>
                                <td>saleman</td>
                                <td>Saleman</td>
                                <td style="text-align:center;">
                                    <a class="tip" title="Change Permissions" href="http://localhost/full_project/WeERP_v3/system_settings/permissions/7"><i class="fa fa-tasks"></i></a> <a class="tip" title="Edit User Group" data-toggle="modal" data-target="#myModal" href="http://localhost/full_project/WeERP_v3/system_settings/edit_group/7"><i class="fa fa-edit"></i></a> <a href="#" class="tip po" title="Delete User Group" data-content="<p>Are you sure?</p><a class='btn btn-danger' href='http://localhost/full_project/WeERP_v3/system_settings/delete_group/7'>Yes I'm sure</a> <button class='btn po-close'>No</button>"><i class="fa fa-trash-o"></i></a>                                </td>
                            </tr>
                                                    <tr>
                                <td>
                                    <div class="text-center"><input class="checkbox multi-select" type="checkbox" name="val[]"
                                                   value="8"/></div>
                                </td>
                                <td>8</td>
                                <td>warehouse</td>
                                <td>អ្នកកាន់ឃ្លាំង</td>
                                <td style="text-align:center;">
                                    <a class="tip" title="Change Permissions" href="http://localhost/full_project/WeERP_v3/system_settings/permissions/8"><i class="fa fa-tasks"></i></a> <a class="tip" title="Edit User Group" data-toggle="modal" data-target="#myModal" href="http://localhost/full_project/WeERP_v3/system_settings/edit_group/8"><i class="fa fa-edit"></i></a> <a href="#" class="tip po" title="Delete User Group" data-content="<p>Are you sure?</p><a class='btn btn-danger' href='http://localhost/full_project/WeERP_v3/system_settings/delete_group/8'>Yes I'm sure</a> <button class='btn po-close'>No</button>"><i class="fa fa-trash-o"></i></a>                                </td>
                            </tr>
                                                    <tr>
                                <td>
                                    <div class="text-center"><input class="checkbox multi-select" type="checkbox" name="val[]"
                                                   value="9"/></div>
                                </td>
                                <td>9</td>
                                <td>admin1</td>
                                <td>Admin1</td>
                                <td style="text-align:center;">
                                    <a class="tip" title="Change Permissions" href="http://localhost/full_project/WeERP_v3/system_settings/permissions/9"><i class="fa fa-tasks"></i></a> <a class="tip" title="Edit User Group" data-toggle="modal" data-target="#myModal" href="http://localhost/full_project/WeERP_v3/system_settings/edit_group/9"><i class="fa fa-edit"></i></a> <a href="#" class="tip po" title="Delete User Group" data-content="<p>Are you sure?</p><a class='btn btn-danger' href='http://localhost/full_project/WeERP_v3/system_settings/delete_group/9'>Yes I'm sure</a> <button class='btn po-close'>No</button>"><i class="fa fa-trash-o"></i></a>                                </td>
                            </tr>
                                                </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
  
@endsection

@push('css')
  {{-- expr --}}
@endpush


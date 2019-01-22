@extends('layouts.admin.sma_layout')

@section('title','notifications')

@push('css')
  {{-- expr --}}
@endpush

@section('admin-content')

div class="box">
    <div class="box-header">
        <h2 class="blue"><i class="fa-fw fa fa-info-circle"></i>Notifications</h2>

        <div class="box-icon">
            <ul class="btn-tasks">
                <li class="dropdown"><a href="http://localhost/full_project/WeERP_v3/notifications/add" data-toggle="modal"
                                        data-target="#myModal"><i class="icon fa fa-plus"></i></a></li>
            </ul>
        </div>
    </div>
    <div class="box-content">
        <div class="row">
            <div class="col-lg-12">

                <p class="introtext">Please use the table below to navigate or filter the results. You can download the table as excel and pdf.</p>

                <div class="table-responsive">
                    <table id="NTTable" cellpadding="0" cellspacing="0" border="0"
                           class="table table-bordered table-hover table-striped">
                        <thead>
                        <tr>
                            <th>Notifications</th>
                            <th style="width: 140px;">Submitted at</th>
                            <th style="width: 140px;">From</th>
                            <th style="width: 140px;">Till</th>
                            <th style="width:80px;">Actions</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td colspan="5" class="dataTables_empty">Loading data from server</td>
                        </tr>

                        </tbody>
                    </table>
                </div>
                <!--<p><a href="http://localhost/full_project/WeERP_v3/notifications/add" class="btn btn-primary" data-toggle="modal" data-target="#myModal">Add Notifications</a></p>-->
            </div>
        </div>
    </div>
</div>

  
@endsection

@push('css')
  {{-- expr --}}
@endpush


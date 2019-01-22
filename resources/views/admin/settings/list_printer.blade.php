@extends('layouts.admin.sma_layout')

@section('title','list_printer')

@push('css')
  {{-- expr --}}
@endpush

@section('admin-content')

<div class="box">
    <div class="box-header">
    <h2 class="blue"><i class="fa-fw fa fa-print"></i>Printers</h2>
    </div>
    <div class="box-content">
        <div class="row">
            <div class="col-lg-12">
                <p>Please use the table below to navigate or filter the results. You can download the table as excel and pdf.</p>
                <div class="table-responsive">
                    <table id="PData" class="table table-bordered table-hover table-striped">
                        <thead>
                            <tr>
                                <th class="col-xs-2">Title</th>
                                <th class="col-xs-1">Type</th>
                                <th class="col-xs-2">Profile</th>
                                <th class="col-xs-3">Path</th>
                                <th class="col-xs-2">IP Address</th>
                                <th class="col-xs-1">Port</th>
                                <th style="width:65px;">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td colspan="7" class="dataTables_empty">Loading data from server</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
    </div>
</div>

  
@endsection

@push('css')
  {{-- expr --}}
@endpush


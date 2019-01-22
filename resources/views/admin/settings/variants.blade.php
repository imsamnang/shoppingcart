@extends('layouts.admin.sma_layout')

@section('title','variants')

@push('css')
  {{-- expr --}}
@endpush

@section('admin-content')

<div class="box">
    <div class="box-header">
        <h2 class="blue"><i class="fa-fw fa fa-list"></i>Variants</h2>

        <div class="box-icon">
            <ul class="btn-tasks">
                <li class="dropdown"><a href="http://localhost/full_project/WeERP_v3/system_settings/add_variant"
                                        data-toggle="modal" data-target="#myModal"><i class="icon fa fa-plus"></i></a>
                </li>
            </ul>
        </div>
    </div>
    <div class="box-content">
        <div class="row">
            <div class="col-lg-12">
                <p class="introtext">Please use the table below to navigate or filter the results. You can download the table as excel and pdf.</p>

                <div class="table-responsive">
                    <table id="CURData" class="table table-bordered table-hover table-striped">
                        <thead>
                        <tr>
                            <th style="min-width:30px; width: 30px; text-align: center;">
                                <input class="checkbox checkth" type="checkbox" name="check"/>
                            </th>
                            <th>Name</th>
                            <th style="width:65px;">Actions</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td colspan="3" class="dataTables_empty">Loading data from server</td>
                        </tr>

                        </tbody>
                    </table>
                </div>

            </div>

        </div>
    </div>

  
@endsection

@push('css')
  {{-- expr --}}
@endpush


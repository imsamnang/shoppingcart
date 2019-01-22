@extends('layouts.admin.sma_layout')

@section('title','price_groups')

@push('css')
  {{-- expr --}}
@endpush

@section('admin-content')

<form action="http://localhost/full_project/WeERP_v3/system_settings/price_group_actions" id="action-form" method="post" accept-charset="utf-8">
<input type="hidden" name="token" value="ebb5f994c18ca2edc3d2592a6f42ffff" />
<div class="box">
    <div class="box-header">
        <h2 class="blue"><i class="fa-fw fa fa-building"></i>Price Groups</h2>

        <div class="box-icon">
            <ul class="btn-tasks">
                <li class="dropdown">
                    <a title="Add Price Group" class="tip" href="http://localhost/full_project/WeERP_v3/system_settings/add_price_group" data-toggle="modal" data-target="#myModal">
                    <i class="icon fa fa-plus"></i>
                    </a>
                </li>
            </ul>
        </div>
    </div>
    <div class="box-content">
        <div class="row">
            <div class="col-lg-12">

                <p class="introtext">Please use the table below to navigate or filter the results. You can download the table as excel and pdf.</p>

                <div class="table-responsive">
                    <table id="CGData" class="table table-bordered table-hover table-striped">
                        <thead>
							<tr>
								<th style="min-width:30px; width: 30px; text-align: center;">
									<input class="checkbox checkth" type="checkbox" name="check"/>
								</th>
								<th>Name</th>
																	<th>Category</th>
									<th>Formula</th>
																<th style="max-width:85px;">Actions</th>
							</tr>
                        </thead>
                        <tbody>
							<tr>
																	<td colspan="4" class="dataTables_empty">Loading data from server</td>
																
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


@extends('layouts.admin.sma_layout')

@section('title','Loans List')

@push('css')
  {{-- expr --}}
@endpush

@section('admin-content')

<form action="http://localhost/full_project/WeERP_v3/loans/loan_actions" id="action-form" method="post" accept-charset="utf-8">
<input type="hidden" name="token" value="2c684812a1d708ff68ef64c2082cd362" />

<div class="box">
    <div class="box-header">
        <h2 class="blue"><i class="fa-fw fa fa-star-o"></i>List Loans</h2>
        <div class="box-icon">
			<ul class="btn-tasks">
				<li class="dropdown">
					<a data-toggle="dropdown" class="dropdown-toggle" href="#">
						<i class="icon fa fa-tasks tip" data-placement="left" title="Actions"></i>
					</a>
					<ul class="dropdown-menu pull-right tasks-menus" role="menu" aria-labelledby="dLabel">
						<li>
							<a href="http://localhost/full_project/WeERP_v3/loans/import_csv" id="import" data-action="import_excel">
								<i class="fa fa-file-excel-o"></i> Import By Excel							</a>
						</li>
						<li>
							<a href="#" id="excel" data-action="export_excel">
								<i class="fa fa-file-excel-o"></i> Export to Excel file							</a>
						</li>
						<li>
							<a href="#" id="pdf" data-action="export_pdf">
								<i class="fa fa-file-pdf-o"></i> Export to PDF file							</a>
						</li>
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
                    <table id="LTable" cellpadding="0" cellspacing="0" border="0" class="table table-bordered table-condensed table-hover table-striped">
                        <thead>
                        <tr class="active">
                            <th style="min-width:30px; width: 30px; text-align: center;">
                                <input class="checkbox checkft" type="checkbox" name="check"/>
                            </th>
							<th width='180'>Sale Reference No</th>
							<th width='180'>Loan Reference No</th>
							<th width='180'>Customer</th>
							<th width='180'>Product</th>
							<th width='180'>Price</th>
							<th width='180'>Deposit</th>
							<th width='180'>Principal</th>
							<th width='180'>Paid</th>
							<th width='180'>Balance</th>
							<th width='180'>Percent</th>
							<th width='180'>Rate</th>
							<th width='180'>Term</th>
							<th width='180'>Date</th>
							<th width='180'>Status</th>
							<th width='5%'>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td colspan="8" class="dataTables_empty">Loading data from server</td>
                        </tr>
                        </tbody>
                        <tfoot class="dtFilter">
							<th>&nbsp;</th>
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
							<th></th>
							<th></th>
							<th></th>
							<th></th>
							<th></th>
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


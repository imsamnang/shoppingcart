@extends('layouts.admin.sma_layout')

@section('title','Missing Loans')

@push('css')
  {{-- expr --}}
@endpush

@section('admin-content')

<div class="box">
	<div class="box-header">
		<h2 class="blue"><i class="fa-fw fa fa-star-o"></i>Missing Loans</h2>
		<div class="box-icon">
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
								<th width='100'>Period</th>
								<th width='180'>Reference No</th>
								<th width='180'>Customer</th>
								<th width='180'>Deadline</th>
								<th width='180'>Payment</th>
								<th width='180'>Interest Rate</th>
								<th width='180'>Principal</th>
								<th width='180'>Balance</th>
								<th width='180'>Amount</th>
								<th width='180'>Payment Date</th>
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
						</tfoot>
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


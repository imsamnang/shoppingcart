@extends('layouts.admin.sma_layout')

@section('title','Add New Loan')

@push('css')
{{-- expr --}}
@endpush

@section('admin-content')

<ul id="myTab" class="nav nav-tabs">
	<li class="">
		<a href="#down_payment" class="tab-grey">Down Payment</a>
	</li>
</ul>

<div class="tab-content">
	<div id="down_payment" class="tab-pane fade">
		<form action="http://localhost/full_project/WeERP_v3/loans/add_loan/" method="post" accept-charset="utf-8">
			<input type="hidden" name="token" value="2c684812a1d708ff68ef64c2082cd362" />
			<div class="box">
				<div class="box-content">
					<div class="row">
						<div class="col-md-0">
							<div class="col-md-4">
								<div class="form-group">
									<label for="slcustomer">Amount</label>
									<input name="amount" type="text" value="0" id="amount" class="form-control amount" placeholder="Amount"/>
								</div>
							</div>
							<div class="col-md-4">
								<div class="form-group">
									<label for="slcustomer">Percentage</label>
									<input name="percent" type="number" value="100" id="percent" class="form-control percent"/>
								</div>
							</div>
							<div class="col-md-4">
								<div class="form-group">
									<label for="slcustomer">Deposit</label>
									<input name="deposit" type="text" value="0" id="deposit" class="form-control deposit" placeholder="Deposit"/>
								</div>
							</div>
							<div class="col-md-4 hidden">
								<div class="form-group">
									<label for="slcustomer">Down Payment (Cash)</label>
									<input name="down_payment" type="text" id="down_payment" class="form-control down_payment" value="0" placeholder="Down Payment"/>
								</div>
							</div>
						</div>
					</div>

					<div class="row">
						<div class="col-md-0">
							<div class="col-md-4">
								<div class="form-group">
									<label for="slcustomer">Principal Loan</label>
									<input name="priciple_loan" value="0" type="text" id="priciple_loan"  class="form-control priciple_loan" placeholder="Principal Loan"/>
								</div>
							</div>
						</div>
						<div class="col-md-0">
							<div class="col-md-4">
								<div class="form-group">
									<label for="slcustomer">Principal term</label>
									<input name="priciple_term" value="0" type="text" id="priciple_term" class="form-control priciple_term" placeholder="Principal term"/>
								</div>
							</div>
						</div>

						<div class="col-md-0">
							<div class="col-md-4">
								<div class="form-group">
									<label for="slcustomer">Loan Amount</label>
									<input name="loan_amount" value="0" type="text" id="loan_amount" readonly class="form-control loan_amount" placeholder="Loan Amount"/>
								</div>
							</div>
						</div>
					</div>

					<div class="row">
						<div class="col-md-4">
							<div class="form-group">
								<label for="slcustomer">Interest Rate</label>
								<input name="loan_rate" type="text" value="0" id="loan_rate" class="form-control number_only loan_rate" placeholder="Interest Rate"/>
							</div>
						</div>

						<div class="col-md-4">
							<div class="form-group">
								<label for="slcustomer">Term</label>
								<select name="loan_term"  class='form-control loan_term' >
									<option value="1800">5 Years</option>
									<option value="1080">3 Years</option>
									<option value="365">1 Year</option>
								</select>
							</div>
						</div>
						<div class="col-md-4">
							<div class="form-group">
								<label for="slcustomer">Frequency</label>
								<select name="frequency"  class='form-control frequency' >
									<option value="30">30 Days</option>
									<option value="90">90 Days</option>
									<option value="7">7 days</option>
									<option value="1">1 Day</option>
								</select>
							</div>
						</div>
						<div class="col-md-4">
							<div class="form-group">
								<label for="slcustomer">Principal Type</label>
								<select name="dep_type" class="form-control dep_type" placeholder="Principal Type">
									<option value="2">Normal</option>
									<option value="1">Fix Interest</option>
									<option value="3">Fix Principal</option>
								</select>
							</div>
						</div>
						<div class="col-md-4">
							<div class="form-group">
								<label for="payment_date">Payment Date</label>
								<input type="text" name="payment_date" value="17/01/2019"  class="form-control date" id="payment_date" required="required" />
							</div>
						</div>
						<div class="col-md-4">
							<div class="form-group">
								<label for="reference_no">Reference No</label>
								<input name="reference_no" type="text" value="" id="reference_no" class="form-control reference_no"/>
							</div>
						</div>
					</div>

				</div>
			</div>
			<div class="box">
				<div class="box-content">
					<table class='table table-bordered table-condensed table-hover table-striped'>
						<thead>
							<tr>
								<th class='text-center' width='5%'>#</th>
								<th	class='text-center'	width='130'>Interest Rate</th>
								<th	class='text-center'	width='130'>Percent</th>
								<th	class='text-center'	width='130'>Payment</th>
								<th	class='text-center'	width='130'>Principal</th>
								<th	class='text-center'	width='130'>Balance</th>
								<th	class='text-center'	width='130'>Deadline</th>
							</tr>
						</thead>
						<tbody id="table_installment_schedule"></tbody>
					</table>
					<button type="submit" name="submit" class="btn btn-primary">Submit</button>
				</div>
			</div>
		</form>			
	</div>
</div>

@endsection

@push('css')
{{-- expr --}}
@endpush


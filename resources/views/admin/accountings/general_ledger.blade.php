@extends('layouts.admin.sma_layout')

@section('title','general_ledger')

@push('css')
  {{-- expr --}}
@endpush

@section('admin-content')

<div class="box">
    <div class="box-header">
        <h2 class="blue"><i class="fa-fw fa fa-th-large"></i>General Ledger			 From 21/01/2019 to 21/01/2019		</h2>
		
		<div class="box-icon">
            <ul class="btn-tasks">
                <li class="dropdown">
                    <a href="#" class="toggle_up tip" title="hide form">
                        <i class="icon fa fa-toggle-up"></i>
                    </a>
                </li>
                <li class="dropdown">
                    <a href="#" class="toggle_down tip" title="show form">
                        <i class="icon fa fa-toggle-down"></i>
                    </a>
                </li>
            </ul>
        </div>
        <div class="box-icon">
            <ul class="btn-tasks">
                <li class="dropdown">
                    <a href="#" id="xls" class="tip" title="Download as XLS">
                        <i class="icon fa fa-file-excel-o"></i>
                    </a>
                </li>
            </ul>
        </div>
		
    </div>
    <div class="box-content">
        <div class="row">
            <div class="col-lg-12">

                <p class="introtext">Please customize the report below</p>

                <div id="form">

                    <form action="http://localhost/full_project/WeERP_v3/accountings/general_ledger" method="post" accept-charset="utf-8">
<input type="hidden" name="token" value="e300cefab404d51b08c0fbc7f15b818c" />
					
                    <div class="row">
						
                        <div class="col-sm-3">
                            <div class="form-group">
                                <label class="control-label" for="biller">Biller</label>
                                <select name="biller[]" class="form-control" id="biller" multiple data-placeholder="Select Biller">
<option value="3">iNTER TECH PLUS CO., LTD</option>
<option value="5">iNTER TECH PLUS CO., LTD</option>
<option value="10">BA</option>
</select>
                            </div>
                        </div>
						
															
															
								<div class="col-md-3">
									<div class="form-group">
										<label for="project">Project</label>										<div class="no-project">
											<select name="project" id="project" class="form-control input-tip select" data-placeholder="Select Project"  style="width:100%;" >
<option value="" selected="selected"></option>
<option value="2">Phnom Penh</option>
<option value="3">Siem Reap</option>
<option value="4">ដីឡូត៍តាខ្មៅ</option>
<option value="5">ដីឡូត៍កៀនស្វាយ</option>
<option value="6">គម្រោងរណ្តៅដីអង្គស្នួល</option>
<option value="7">គម្រោងរណ្តៅដីតំបន់សេដ្ឋកិច្ចពិសេស</option>
</select>
										</div>
									</div>
								</div>
							
													
												
						<div class="col-sm-3">
                            <div class="form-group">
                                <label for="start_date">Start Date</label>                                <input type="text" name="start_date" value="21/01/2019"  class="form-control date" id="start_date" />
                            </div>
                        </div>
						
                        <div class="col-sm-3">
                            <div class="form-group">
                                <label for="end_date">End Date</label>                                <input type="text" name="end_date" value="21/01/2019"  class="form-control date" id="end_date" />
                            </div>
                        </div>
						<div class="col-sm-3">
							<div class="form-group">
								<label class="control-label" for="biller">Account</label>
								<select name="account" class="form-control" id="account" data-placeholder="Select Account">
<option value="" selected="selected">Select Account</option>
<option value="100100">100100 - Cash</option>
<option value="100101">100101 - Cash on Hand</option>
<option value="100102">100102 - ACLEDA Bank</option>
<option value="100103">100103 - MB Bank</option>
<option value="100104">100104 - ABA Bank</option>
<option value="100105">100105 - Petty Cash</option>
<option value="100200">100200 - Account Receivables</option>
<option value="100201">100201 - Trade Receivables</option>
<option value="100202">100202 - Other Receivables</option>
<option value="100203">100203 - Allowance for Doubtful Account</option>
<option value="100210">100210 - Other Current Asset</option>
<option value="100300">100300 - Inventory</option>
<option value="100301">100301 - Raw Material</option>
<option value="100302">100302 - Work In Process</option>
<option value="100303">100303 - Finished Product/Goods</option>
<option value="100400">100400 - Prepaid Expense</option>
<option value="100500">100500 - Cash Advance</option>
<option value="100501">100501 - Advance for Staff</option>
<option value="100502">100502 - Salary Advance</option>
<option value="100600">100600 - Supplier Deposit</option>
<option value="100700">100700 - Taxation</option>
<option value="100701">100701 - Prepayment of Profit Tax</option>
<option value="100702">100702 - Input VAT</option>
<option value="100703">100703 - Deferred Tax Asset</option>
<option value="100704">100704 - VAT Credit Carried Forward</option>
<option value="100800">100800 - Property, Plant and Equipment</option>
<option value="100801">100801 - Building</option>
<option value="100802">100802 - Leasehold Improvement</option>
<option value="100803">100803 - Equipment</option>
<option value="100804">100804 - Furniture & Fixures</option>
<option value="100805">100805 - IT Equipment & Computer</option>
<option value="100806">100806 - Vehicle</option>
<option value="100807">100807 - Machineries</option>
<option value="100811">100811 - Building in Progress</option>
<option value="100812">100812 - Leasehold Improvement in Progress</option>
<option value="100813">100813 - Construction In Process</option>
<option value="100814">100814 - Asset under Operating Lease</option>
<option value="100821">100821 - Accum.Depre - Building</option>
<option value="100822">100822 - Accum.Depre - Leasehold Improvement</option>
<option value="100823">100823 - Accum.Depre- Equipment</option>
<option value="100824">100824 - Accum.Depre - Furniture & Fixtures</option>
<option value="100825">100825 - Accum.Depre - IT Equipment & Computer</option>
<option value="100826">100826 - Accum.Depre - Vehicle</option>
<option value="100827">100827 - Accum.Depre - Mchineries</option>
<option value="100900">100900 - Intangible Assets</option>
<option value="100901">100901 - Software & Licences</option>
<option value="100902">100902 - Software in Progress</option>
<option value="100903">100903 - Patent & License</option>
<option value="100910">100910 - Accum Depre - Sofware & Licenses</option>
<option value="201100">201100 - Current Liability</option>
<option value="201101">201101 - Bank Overdraft/Loan from Bank</option>
<option value="201102">201102 - Account Payables - Trade</option>
<option value="201103">201103 - Dividend Payable</option>
<option value="201104">201104 - A/P Withholding Tax-Rental</option>
<option value="201105">201105 - A/P Withholding Tax-Local Service</option>
<option value="201106">201106 - A/P Withholding Tax-Oversea Service</option>
<option value="201107">201107 - A/P Other Withholding Tax</option>
<option value="201108">201108 - Customer Deposit</option>
<option value="201109">201109 - Deferred Revenue - Product</option>
<option value="201110">201110 - Deferred Revenue - Service</option>
<option value="201111">201111 - Other Payables</option>
<option value="201200">201200 - Acrued - CAPEX</option>
<option value="201300">201300 - Acrued - OPEX</option>
<option value="201301">201301 - Accrued - Salary Tax</option>
<option value="201302">201302 - Accrued - Fringe Benefits Tax</option>
<option value="201303">201303 - Accrued - Prepayment of Profit Tax</option>
<option value="201304">201304 - Accrued - Corperate Tax</option>
<option value="201305">201305 - Accrued - VAT 10%</option>
<option value="201306">201306 - Accrued - other tax provision</option>
<option value="201307">201307 - Accrued - Interest expense</option>
<option value="201308">201308 - Accrued - Bonus</option>
<option value="201309">201309 - Accrued - Salary</option>
<option value="201310">201310 - Accrued - Electricity & Water Exp</option>
<option value="201311">201311 - Accrued - Fuel Exp</option>
<option value="201312">201312 - Accrued - Rental</option>
<option value="201313">201313 - Accrued - Cleaning</option>
<option value="201314">201314 - Accrued - Telephone/internet</option>
<option value="201315">201315 - Accrued - Security & Mainternance</option>
<option value="201316">201316 - Accrued - Professional fee & Audit fee</option>
<option value="201317">201317 - Accrued - Advance for staff</option>
<option value="201318">201318 - Accrued - Other Expense</option>
<option value="201400">201400 - Output VAT</option>
<option value="201500">201500 - Provision for Professional Fee</option>
<option value="210100">210100 - Long Term Account Payables</option>
<option value="210101">210101 - Long Term Loan from Bank</option>
<option value="210102">210102 - Long Term Loan from related Party</option>
<option value="210103">210103 - Other Long Term Liability</option>
<option value="300000">300000 - Share Capital</option>
<option value="300100">300100 - Paid In Capital</option>
<option value="300101">300101 - Additional Paid In Capital</option>
<option value="300300">300300 - Retained Earning</option>
<option value="300200">300200 - Openning Balance</option>
<option value="300102">300102 - Divident Payment / Owner Withdrawal</option>
<option value="399999">399999 - Profit & Loss for the Period</option>
<option value="400000">400000 - Sale Revenue</option>
<option value="400100">400100 - Product</option>
<option value="400200">400200 - Service Income</option>
<option value="400300">400300 - Sale Discount</option>
<option value="400400">400400 - Sales Returns & Allowances</option>
<option value="400500">400500 - Other Income</option>
<option value="500000">500000 - Cost of Good Sold</option>
<option value="500100">500100 - Cost Of Product</option>
<option value="500200">500200 - Cost of Service</option>
<option value="500300">500300 - Inventory Adjustment</option>
<option value="600000">600000 - Operating Expense</option>
<option value="600100">600100 - Staff Cost</option>
<option value="600101">600101 - Salary  - Staff</option>
<option value="600102">600102 - Wage</option>
<option value="600103">600103 - Overtime</option>
<option value="600104">600104 - Bonus</option>
<option value="600105">600105 - Recruitement Expesne</option>
<option value="600106">600106 - Uniform</option>
<option value="600107">600107 - Refreshment for staff</option>
<option value="600108">600108 - Social Security Fund</option>
<option value="600109">600109 - Oversea Training</option>
<option value="600110">600110 - Local Trainig</option>
<option value="600111">600111 - Staff Engagement</option>
<option value="600112">600112 - Incentives</option>
<option value="600113">600113 - Medical Expense</option>
<option value="600200">600200 - Sale & Marketing</option>
<option value="600201">600201 - Sale Event</option>
<option value="600202">600202 - Leasflet & Brochure</option>
<option value="600203">600203 - Gift and Sovernior</option>
<option value="600204">600204 - Other Advertising Expense</option>
<option value="600300">600300 - Distribution Expense</option>
<option value="600301">600301 - Transportation</option>
<option value="600302">600302 - Fuel/Gasolin</option>
<option value="600303">600303 - Road Fee/Tax</option>
<option value="600304">600304 - Other Distribution Expense</option>
<option value="600400">600400 - General Operating Expense</option>
<option value="600401">600401 - Office Rental</option>
<option value="600402">600402 - Warehouse Rental</option>
<option value="600403">600403 - Vehicle Rental</option>
<option value="600404">600404 - Other Rental</option>
<option value="600405">600405 - Local Trip</option>
<option value="600406">600406 - Oversea Trip</option>
<option value="600407">600407 - Cleaning Expense</option>
<option value="600408">600408 - Telephone - Landline</option>
<option value="600409">600409 - Electricity Utility</option>
<option value="600410">600410 - Water Utility</option>
<option value="600411">600411 - Petrol Expense</option>
<option value="600412">600412 - Security Expense</option>
<option value="600413">600413 - Stationary and Office Supplies</option>
<option value="600414">600414 - Bank Charge</option>
<option value="600415">600415 - Pantry/Canteen Expense</option>
<option value="600416">600416 - Gift/Donation Expense</option>
<option value="600417">600417 - Mag/Newpaper</option>
<option value="600418">600418 - Business Meeting</option>
<option value="600419">600419 - Maintenances & Repairs - Office</option>
<option value="600420">600420 - Maintenances & Repairs - Vehicles</option>
<option value="600421">600421 - Other Maintenances</option>
<option value="600422">600422 - Licenses</option>
<option value="600423">600423 - Food & Refreshment Support</option>
<option value="600424">600424 - Other Operating Expense</option>
<option value="600425">600425 - Couriers</option>
<option value="600426">600426 - Internet Expense</option>
<option value="600427">600427 - Legal Professional Fee</option>
<option value="600428">600428 - Audit Fee</option>
<option value="600429">600429 - Other Professional Fee</option>
<option value="600430">600430 - Commission Expense</option>
<option value="600431">600431 - Insurance Expene</option>
<option value="700000">700000 - Other Income</option>
<option value="700100">700100 - Interest Income</option>
<option value="700200">700200 - Gain on Asset Disposal</option>
<option value="700300">700300 - Gain on Exchange Rate</option>
<option value="800000">800000 - Miscellaneous Exp</option>
<option value="800100">800100 - Interest Expense</option>
<option value="800200">800200 - Loss on Asset Disposal</option>
<option value="800300">800300 - Loss on Exchange Rate</option>
<option value="800400">800400 - Unrealized Gain/Loss on Exchange Rate</option>
<option value="800500">800500 - Penalty Expense</option>
<option value="800600">800600 - Fixed Assets Written Off/Disposal</option>
<option value="800700">800700 - Depreciation & Amortization</option>
<option value="800701">800701 - Depre-Expense - Building</option>
<option value="800702">800702 - Depre-Expense - Leasehold Improvement</option>
<option value="800703">800703 - Depre-Expense - Equipment</option>
<option value="800704">800704 - Depre-Expense - Furniture & Fixtures</option>
<option value="800705">800705 - Depre-Expense - IT Equipment & Computer</option>
<option value="800706">800706 - Depre-Expense - Vehicle</option>
<option value="800707">800707 - Depre-Expense - Machinary</option>
<option value="800708">800708 - Depre-Expense - Software & License</option>
<option value="800800">800800 - Taxation Expense</option>
<option value="800801">800801 - Patent Tax</option>
<option value="800802">800802 - Road Tax</option>
<option value="800803">800803 - Withholding Tax Expense -  Rental</option>
<option value="800804">800804 - Withholding Tax Expense - Local Service</option>
<option value="800805">800805 - Withholding Tax Expense - Oversea Service</option>
<option value="800806">800806 - Withholding Tax Expense - Interest</option>
<option value="800807">800807 - Withholding Tax Expense - Fringe Benefit</option>
<option value="800808">800808 - Corperate Income Tax</option>
<option value="800809">800809 - Other tax expense</option>
<option value="500400">500400 - Purchase Discount</option>
<option value="500500">500500 - Cost Of Variance</option>
<option value="111222">111222 - ddd</option>
<option value="111223">111223 - ssss</option>
</select>
							</div>
						</div>
						
						<div class="col-sm-3">
							<div class="form-group">
								<label class="control-label" for="user">Created by</label>
								<select name="user" class="form-control"  data-placeholder="Select User">
<option value="" selected="selected">Select User</option>
<option value="1">O - M</option>
<option value="21">ចាន់ - សោភា</option>
<option value="22">Sale - Sale</option>
<option value="23">THY - Rathana</option>
<option value="24">ស្រី - រដ្ដ</option>
<option value="25">Pov - Chenda</option>
<option value="26">Hong - Rachana</option>
<option value="27">Pheap - Somaly</option>
<option value="28">San - Sreyleak</option>
<option value="29">Sok - Kanha</option>
<option value="30">Den - Sreyleang</option>
<option value="31">Voeurn - Thida</option>
<option value="32">Chan - Leakhena</option>
<option value="33">Sok - SreyEm</option>
<option value="34">Roth - SreyNeath</option>
<option value="35">San - MeyMey</option>
<option value="36">Thy  - Rathana</option>
</select>
							</div>
						</div>
						
						<div class="col-sm-3">
							<div class="form-group">
								<label class="control-label" for="customer">Customer</label>
								<select name="customer" class="form-control" data-placeholder="Select Customer">
<option value="" selected="selected">Select Customer</option>
<option value="1">Walk-in Customer</option>
<option value="6">Tech</option>
<option value="7">SR</option>
<option value="8">2W-9403</option>
<option value="9">Mr. A</option>
<option value="12">Owner</option>
<option value="13">fsdfdsfdf</option>
</select>
							</div>
						</div>
						
						<div class="col-sm-3">
							<div class="form-group">
								<label class="control-label" for="supplier">Supplier</label>
								<select name="supplier" class="form-control" data-placeholder="Select Supplier">
<option value="" selected="selected">Select Supplier</option>
<option value="2">Test Supplier</option>
<option value="11">va</option>
</select>
							</div>
						</div>
						
					</div>
					
                    <div class="form-group">
                        <div class="controls"> 
							<input type="submit" name="submit_report" value="Submit"  class="btn btn-primary" />
 
						</div>
                    </div>
					
                    </form>
                </div>
				
                <div class="clearfix"></div>

                <div class="table-responsive">
                    <table cellpadding="0" cellspacing="0" style="white-space:nowrap;" border="1" class="table table-bordered table-hover table-striped table-condensed accountings-table dataTable">
						<thead>
							<tr>
								<th>Account</th>
								<th>Date</th>
								<th>Created by</th>
								<th>Customer</th>
								<th>Supplier</th>
								<th>Reference</th>
								<th>Transaction</th>
								<th>Narrative</th>
								<th>Debit</th>
								<th>Credit</th>
								<th>Balance</th>
							</tr>
                        </thead>
						<tbody>
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


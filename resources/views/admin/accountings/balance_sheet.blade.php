@extends('layouts.admin.sma_layout')

@section('title','balance_sheet')

@push('css')
  {{-- expr --}}
@endpush

@section('admin-content')

<div class="box">
    <div class="box-header">
        <h2 class="blue"><i class="fa-fw fa fa-th-large"></i>Balance Sheet			 From 21/01/2019 to 21/01/2019		</h2>
		
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

                    <form action="http://localhost/full_project/WeERP_v3/accountings/balance_sheet" method="post" accept-charset="utf-8">
<input type="hidden" name="token" value="e300cefab404d51b08c0fbc7f15b818c" />
					
                    <div class="row">
						
                        <div class="col-sm-3">
                            <div class="form-group">
                                <label class="control-label" for="biller">Biller</label>
                                <select name="biller[]" class="form-control biller" id="biller" multiple data-placeholder="Select Biller">
<option value="3">iNTER TECH PLUS CO., LTD</option>
<option value="5">iNTER TECH PLUS CO., LTD</option>
<option value="10">BA</option>
</select>
                            </div>
                        </div>
						
													<div class="col-md-3 project">
								<div class="form-group">
									<label for="project">Project</label>									<div class="no-project-multi">
										<select name="project_multi[]" id="project_multi" class="form-control input-tip select" data-placeholder="Select Project"  style="width:100%;" multiple>
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
								<label class="control-label" for="sub_account">Sub Account</label>
								<select name="sub_account" class="form-control" id="sub_account" data-placeholder="Select Sub Account">
<option value="no">No</option>
<option value="yes">Yes</option>
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
								<th rowspan="1">Account</th>
								<th>Debit</th><th>Credit</th>															</tr>
							                        </thead>
						<tbody>
							<tr style='font-weight:bold; color:#4286f4'><td style='text-align:left' colspan='3'><span>ASSETS</span></td></tr><tr style='font-weight:bold; color:#39c65c'><td style='text-align:left' colspan='3'><span style='margin-left:20px'>CURRENT ASSETS</span></td></tr><tr>
															<td style='font-weight:bold; color:#39c65c'><span style='margin-left:3%'>Total CURRENT ASSETS</span></td>
															<td></td>
															<td style='text-align:right; color:#39c65c'>0.00 $</td>
														</tr><tr style='font-weight:bold; color:#39c65c'><td style='text-align:left' colspan='3'><span style='margin-left:20px'>FIXED ASSETS</span></td></tr><tr>
															<td style='font-weight:bold; color:#39c65c'><span style='margin-left:3%'>Total FIXED ASSETS</span></td>
															<td></td>
															<td style='text-align:right; color:#39c65c'>0.00 $</td>
														</tr><tr style='font-weight:bold; color:#4286f4'>
														<td style='text-align:left'><span>Total ASSETS</span></td>
														<td></td>
														<td style='text-align:right'>0.00 $</td>
													</tr><tr style='font-weight:bold; color:#4286f4'><td style='text-align:left' colspan='3'><span>LIABILITIES</span></td></tr><tr style='font-weight:bold; color:#39c65c'><td style='text-align:left' colspan='3'><span style='margin-left:20px'>CURRENT LIABILITIES</span></td></tr><tr>
															<td style='font-weight:bold; color:#39c65c'><span style='margin-left:3%'>Total CURRENT LIABILITIES</span></td>
															<td></td>
															<td style='text-align:right; color:#39c65c'>0.00 $</td>
														</tr><tr style='font-weight:bold; color:#39c65c'><td style='text-align:left' colspan='3'><span style='margin-left:20px'>NON-CURRENT LIABILITIES</span></td></tr><tr>
															<td style='font-weight:bold; color:#39c65c'><span style='margin-left:3%'>Total NON-CURRENT LIABILITIES</span></td>
															<td></td>
															<td style='text-align:right; color:#39c65c'>0.00 $</td>
														</tr><tr style='font-weight:bold; color:#4286f4'>
														<td style='text-align:left'><span>Total LIABILITIES</span></td>
														<td></td>
														<td style='text-align:right'>0.00 $</td>
													</tr><tr style='font-weight:bold; color:#4286f4'><td style='text-align:left' colspan='3'><span>EQUITIES</span></td></tr><tr style='font-weight:bold; color:#39c65c'><td style='text-align:left' colspan='3'><span style='margin-left:20px'>EQUITY AND RETAINED EARNING</span></td></tr><tr>
															<td style='font-weight:bold; color:#39c65c'><span style='margin-left:3%'>Total EQUITY AND RETAINED EARNING</span></td>
															<td></td>
															<td style='text-align:right; color:#39c65c'>0.00 $</td>
														</tr><tr>
															<td style='font-weight:bold; color:#39c65c'><span style='margin-left:3%'>Total NET INCOME</span></td>
															<td></td>
															<td style='text-align:right; color:#39c65c'>0.00 $</td>
														</tr><tr style='font-weight:bold; color:#4286f4'>
														<td style='text-align:left'><span>Total EQUITIES</span></td>
														<td></td>
														<td style='text-align:right'>0.00 $</td>
													</tr><tr style='font-weight:bold; color:#4286f4'>
													<td style='text-align:left'><span>Total LIABILITIES and EQUITY</span></td>
													<td></td>
													<td style='text-align:right'>0.00 $</td>
												</tr>						</tbody>
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


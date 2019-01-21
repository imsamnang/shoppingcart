@extends('layouts.admin.sma_layout')

@section('title','cash_flow')

@push('css')
  {{-- expr --}}
@endpush

@section('admin-content')

<div class="box">
    <div class="box-header">
        <h2 class="blue"><i class="fa-fw fa fa-th-large"></i>Cash Flow			 From 21/01/2019 to 21/01/2019		</h2>
		
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

                    <form action="http://localhost/full_project/WeERP_v3/accountings/cash_flow" method="post" accept-charset="utf-8">
<input type="hidden" name="token" value="e300cefab404d51b08c0fbc7f15b818c" />
					
                    <div class="row">
						
                        <div class="col-sm-3">
                            <div class="form-group">
                                <label class="control-label" for="biller">Biller</label>
                                <select name="biller[]" class="form-control" multiple id="biller" data-placeholder="Select Biller">
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
								<th>Amount</th>
							</tr>
                        </thead>
						<tbody>
							<tr style="color:#4286f4; font-weight:bold"><td colspan="2">Operating Activities</td></tr><tr style="color:#39c65c; font-weight:bold">
													<td><span style="margin-left:3%"> NET INCOME </span></td>
													<td style="text-align:right">0.00 $</td>
												</tr><tr style="color:#4286f4; font-weight:bold">
												<td><span>Total Operating Activities</span></td>
												<td style="text-align:right">0.00 $</td>
											</tr><tr style="color:#4286f4; font-weight:bold"><td colspan="2">Investing Activities</td></tr><tr style="color:#4286f4; font-weight:bold">
												<td><span>Total Investing Activities</span></td>
												<td style="text-align:right">0.00 $</td>
											</tr><tr style="color:#4286f4; font-weight:bold"><td colspan="2">Financing Activities</td></tr><tr style="color:#4286f4; font-weight:bold">
												<td><span>Total Financing Activities</span></td>
												<td style="text-align:right">0.00 $</td>
											</tr><tr style="color:#4286f4; font-weight:bold">
												<td><span>total cash increse for period</span></td>
												<td style="text-align:right">0.00 $</td>
											</tr><tr style="color:#4286f4; font-weight:bold">
											<td><span>Cash Flow begining</span></td>
											<td style="text-align:right">( 943,824.00 $ )</td>
										</tr><tr style="color:#4286f4; font-weight:bold">
											<td><span>Cash Flow ending</span></td>
											<td style="text-align:right">( 943,824.00 $ )</td>
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


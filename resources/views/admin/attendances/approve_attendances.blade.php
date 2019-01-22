@extends('layouts.admin.sma_layout')

@section('title','approve_attendances')

@push('css')
  {{-- expr --}}
@endpush

@section('admin-content')

<div class="box">
    <div class="box-header">
        <h2 class="#428BCA"><i class="fa-fw fa fa-calendar"></i>Saleman Detail Report (All Warehouses)</h2>

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
			<form action="http://localhost/full_project/WeERP_v3/attendances/approve_attendances" method="post" accept-charset="utf-8">
<input type="hidden" name="token" value="d734af40612ff1684196bb5544ccb118" />
                <p class="introtext">approve attendances</p>
				
				<div id="form">

                    
                    
					<div class="row">	
                        <div class="col-sm-3">
                            <div class="form-group">
                                <label class="control-label" for="biller">Biller</label>
								<select name="biller" class="form-control" id="biller" data-placeholder="Select Biller">
<option value="" selected="selected">All Biller</option>
<option value="3">iNTER TECH PLUS CO., LTD</option>
<option value="5">iNTER TECH PLUS CO., LTD</option>
<option value="10">BA</option>
</select>
                            </div>
                        </div>
						
						<div class="col-sm-3">
                            <div class="form-group">
                                <label class="control-label" for="position">Position</label>
								<select name="position" id="position" class="form-control">
<option value="0">All Position</option>
</select>
                            </div>
                        </div>
						<div class="col-sm-3">
                            <div class="form-group">
                                <label class="control-label" for="department">Department</label>
								<select name="department" id="department" class="form-control">
<option value="0">All Department</option>
</select>
                            </div>
                        </div>
						<div class="col-sm-3">
                            <div class="form-group">
                                <label class="control-label" for="group">Group</label>
								<select name="group" id="group" class="form-control">
<option value="0">All Group</option>
</select>
                            </div>
                        </div>
						
						<div class="col-sm-3">
                            <div class="form-group">
                                <label for="start_date">start date</label>                                <input type="text" name="start_date" value="22/01/2019"  class="form-control date" id="start_date" />
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="form-group">
                                <label for="end_date">end date</label>                                <input type="text" name="end_date" value="22/01/2019"  class="form-control date" id="end_date" />
                            </div>
                        </div>
						
					</div>
					
					
					<div class="form-group">
                        <div class="controls" style="float:left"> 
							<input type="submit" name="submit_report" value="Search"  class="btn btn-primary" />
 
						</div>
						<div class="controls" style="float:right"> 
							<input type="submit" name="approve" value="approve"  class="btn btn-primary" id="approve_attendance" />
 
						</div>
						<div class="controls" style="float:right">
							<input type="text" name="approve_month" value="01/2019"  class="form-control month" id="approve_month" />
                        </div>
						<div style="clear:both"></div>
                    </div>
					
					
					
				</div>
				
                <div class="table-responsive">
                    <table id="ATTable" class="table table-bordered table-striped dfTable reports-table">
                        <thead>
							<th style="min-width:30px; width: 30px; text-align: center;">
                                <input class="checkbox checkth" type="checkbox" name="check"/>
                            </th>
							<th>Code</th>
							<th>name kh</th>
							<th>Name</th>
							<th>Biller</th>
							<th>Position</th>
							<th>Department</th>
							<th>Group</th>
							<th>working day</th>
							<th style="width:5%"><input type="button" id="add_all_present" style="background-color:blue; width:20px" value="+"> present <input type="button" id="sub_all_present" style="background-color:red; width:20px" value="-"></th>
							<th style="width:5%"><input type="button" id="add_all_permission" style="background-color:blue; width:20px" value="+"> permission <input type="button"  id="sub_all_permission" style="background-color:red; width:20px" value="-"></th>
							<th style="width:5%"><input type="button" id="add_all_absent" style="background-color:blue; width:20px" value="+"> absent <input type="button"  id="sub_all_absent" style="background-color:red; width:20px" value="-"></th>
							<th style="width:5%">late</th>
							<th style="width:5%">leave early</th>
							<th style="width:5%">ot</th>
                        </thead>
						<tbody>
												</tbody>
                    </table>
                </div>
				</form>            </div>
			
        </div>
    </div>
</div>

  
@endsection

@push('css')
  {{-- expr --}}
@endpush


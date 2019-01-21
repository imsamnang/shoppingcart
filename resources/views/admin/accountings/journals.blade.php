@extends('layouts.admin.sma_layout')

@section('title','journals')

@push('css')
  {{-- expr --}}
@endpush

@section('admin-content')

<div class="box">
    <div class="box-header">
        <h2 class="blue"><i class="fa-fw fa fa-heart"></i>Journal Lists         </h2>

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
                    <a href="#" id="pdf" class="tip" title="Download as PDF">
                        <i class="icon fa fa-file-pdf-o"></i>
                    </a>
                </li>
                <li class="dropdown">
                    <a href="#" id="xls" class="tip" title="Download as XLS">
                        <i class="icon fa fa-file-excel-o"></i>
                    </a>
                </li>
                <li class="dropdown">
                    <a href="#" id="image" class="tip" title="save image">
                        <i class="icon fa fa-file-picture-o"></i>
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

                    <form action="http://localhost/full_project/WeERP_v3/accountings/journals" method="post" accept-charset="utf-8">
<input type="hidden" name="token" value="e300cefab404d51b08c0fbc7f15b818c" />
                    <div class="row">
                        <div class="col-sm-4">
                            <div class="form-group">
                                <label class="control-label" for="reference_no">Reference No</label>
                                <input type="text" name="reference_no" value=""  class="form-control tip" id="reference_no" />

                            </div>
                        </div>

                        <div class="col-sm-4">
                            <div class="form-group">
                                <label class="control-label" for="biller">Biller</label>
                                <select name="biller" class="form-control" id="biller" data-placeholder="Select Biller">
<option value="" selected="selected">Select Biller</option>
<option value="3">iNTER TECH PLUS CO., LTD</option>
<option value="5">iNTER TECH PLUS CO., LTD</option>
<option value="10">BA</option>
</select>
                            </div>
                        </div>
						<div class="col-sm-4">
                            <div class="form-group">
                                <label class="control-label" for="user">Created by</label>
                                <select name="user" class="form-control" id="user" data-placeholder="Select User">
<option value="" selected="selected">Select User</option>
<option value="1">O M</option>
<option value="21">ចាន់ សោភា</option>
<option value="22">Sale Sale</option>
<option value="23">THY Rathana</option>
<option value="24">ស្រី រដ្ដ</option>
<option value="25">Pov Chenda</option>
<option value="26">Hong Rachana</option>
<option value="27">Pheap Somaly</option>
<option value="28">San Sreyleak</option>
<option value="29">Sok Kanha</option>
<option value="30">Den Sreyleang</option>
<option value="31">Voeurn Thida</option>
<option value="32">Chan Leakhena</option>
<option value="33">Sok SreyEm</option>
<option value="34">Roth SreyNeath</option>
<option value="35">San MeyMey</option>
<option value="36">Thy  Rathana</option>
</select>
                            </div>
                        </div>
						<div class="col-sm-4">
                            <div class="form-group">
                                <label class="control-label" for="project">Project</label>
                                <select name="project" class="form-control" id="project" data-placeholder="Select Project">
<option value="" selected="selected">Select Project</option>
<option value="2">Phnom Penh</option>
<option value="3">Siem Reap</option>
<option value="4">ដីឡូត៍តាខ្មៅ</option>
<option value="5">ដីឡូត៍កៀនស្វាយ</option>
<option value="6">គម្រោងរណ្តៅដីអង្គស្នួល</option>
<option value="7">គម្រោងរណ្តៅដីតំបន់សេដ្ឋកិច្ចពិសេស</option>
</select>
                            </div>
                        </div>

                        <div class="col-sm-4">
                            <div class="form-group">
                                <label for="start_date">Start Date</label>                                <input type="text" name="start_date" value=""  class="form-control datetime" id="start_date" />
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="form-group">
                                <label for="end_date">End Date</label>                                <input type="text" name="end_date" value=""  class="form-control datetime" id="end_date" />
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div
                            class="controls"> <input type="submit" name="submit_report" value="Submit"  class="btn btn-primary" />
 </div>
                    </div>
                    </form>
                </div>
                <div class="clearfix"></div>

                <div class="table-responsive">
                    <table id="SlRData"
                           class="table table-bordered table-condensed accountings-table">
                        <thead>
                        <tr>
							<th style="min-width:30px; width: 30px; text-align: center;">
                                <input class="checkbox checkft" type="checkbox" name="check"/>
                            </th>
                            <th>Transaction</th>
                            <th>Transaction ID</th>
                            <th>Transaction Date</th>
                            <th>Account</th>
							<th>Reference</th>
							<th>Debit</th>
							<th>Credit</th>
                            <th>Narrative</th>
                            <th>Description</th>
							<th>Biller</th>
                            <th>Project</th>
							<th>User</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td colspan="13" class="dataTables_empty">Loading data from server</td>
                        </tr>
                        </tbody>
                        <tfoot class="dtFilter">
                        <tr class="active">
							<th style="min-width:30px; width: 30px; text-align: center;">
                                <input class="checkbox checkft" type="checkbox" name="check"/>
                            </th>
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
                        </tr>
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


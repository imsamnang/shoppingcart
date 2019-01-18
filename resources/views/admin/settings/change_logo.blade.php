@extends('layouts.admin.sma_layout')

@section('title','change_logo')

@push('css')
  {{-- expr --}}
@endpush

@section('admin-content')

<div class="modal fade in" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="false" style="display: block;">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i class="fa fa-2x">×</i>
				</button>
				<h4 class="modal-title" id="myModalLabel">Change Logo</h4>
			</div>
			<form action="#" data-toggle="validator" role="form" enctype="multipart/form-data" method="post" accept-charset="utf-8" novalidate="novalidate" class="bv-form">
				<button type="submit" class="bv-hidden-submit" style="display: none; width: 0px; height: 0px;">				
				</button>
					<input type="hidden" name="token" value="9a325ed990cde116bf5e4c5529cda486">
					<div class="modal-body">
					<p>Please fill in the information below. The field labels marked with * are required input fields.</p>
					<p class="text-primary">Max. file size 1024KB and (width=300px) x (height=80px).</p>
						<div class="form-group">
							<label for="site_logo">Site Logo</label>                
							<span class="file-input file-input-new">
								<div class="input-group ">
									<div tabindex="-1" class="form-control file-caption  kv-fileinput-caption">
										<div class="file-caption-name"></div>
									</div>
									<div class="input-group-btn">
										<button type="button" class="btn btn-default btn-danger fileinput-remove fileinput-remove-button"><i class="fa fa-ban-circle"></i> Remove</button>
										<div class="btn btn-primary btn-file"> <i class="fa fa-folder-open"></i> &nbsp;Browse ... <input id="site_logo" type="file" data-browse-label="Browse ..." name="site_logo" data-show-upload="false" data-show-preview="false" class="form-control file"></div>
									</div>
								</div>
							</span>
						</div>
						<div class="form-group">
							<label for="login_logo">Login Logo</label>                
							<span class="file-input file-input-new">
								<div class="input-group ">
									<div tabindex="-1" class="form-control file-caption  kv-fileinput-caption">
										<div class="file-caption-name"></div>
									</div>
									<div class="input-group-btn">
										<button type="button" class="btn btn-default btn-danger fileinput-remove fileinput-remove-button"><i class="fa fa-ban-circle"></i> Remove</button>

										<div class="btn btn-primary btn-file"> <i class="fa fa-folder-open"></i> &nbsp;Browse ... <input id="login_logo" type="file" data-browse-label="Browse ..." name="login_logo" data-show-upload="false" data-show-preview="false" class="form-control file"></div>
									</div>
								</div></span>
							</div>
							<div class="form-group">
								<label for="biller_logo">Biller Logo</label>                
								<span class="file-input file-input-new">
									<div class="input-group ">
										<div tabindex="-1" class="form-control file-caption  kv-fileinput-caption">
											<div class="file-caption-name"></div>
										</div>
										<div class="input-group-btn">
											<button type="button" class="btn btn-default btn-danger fileinput-remove fileinput-remove-button"><i class="fa fa-ban-circle"></i> Remove</button>

											<div class="btn btn-primary btn-file"> <i class="fa fa-folder-open"></i> &nbsp;Browse ... <input id="biller_logo" type="file" data-browse-label="Browse ..." name="biller_logo" data-show-upload="false" data-show-preview="false" class="form-control file"></div>
										</div>
									</div></span>
									<small class="help-block">Please edit the Biller after uploading the new logo and select newly updated logo.</small>
								</div>
							</div>
							<div class="modal-footer">
								<input type="submit" name="upload_logo" value="Update Logo" class="btn btn-primary">
							</div>
				</form>
		</div>
	</div>
	
	<script type="text/javascript" src="http://localhost/full_project/WeERP_v3/themes/default/assets/js/custom.js"></script>

	<script type="text/javascript">
		if(!window.jQuery) {	
	    var pn = window.location.pathname;
	    var modal_exp = pn.split('/');
	    window.location.replace(window.location.protocol+'//'+window.location.host+'/'+modal_exp[1]);
		}
		$(document).ready(function(e) {
	    $('form[data-toggle="validator"]').bootstrapValidator({ feedbackIcons:{valid: 'fa fa-check',invalid: 'fa fa-times',validating: 'fa fa-refresh'}, excluded: [':disabled'] });
	    	fields = $('.modal-content').find('.form-control');
	    	$.each(fields, function() {
	        var id = $(this).attr('id');
	        var iname = $(this).attr('name');
	        var iid = '#'+id;
	        if (!!$(this).attr('data-bv-notempty') || !!$(this).attr('required')) {
	            $("label[for='" + id + "']").append(' *');
	            $(document).on('change', iid, function(){
	                $('form[data-toggle="validator"]').bootstrapValidator('revalidateField', iname);
	            });
	        }
	    });
	    $('input[type="checkbox"],[type="radio"]').not('.skip').iCheck({
	        checkboxClass: 'icheckbox_square-blue',
	        radioClass: 'iradio_square-blue',
	        increaseArea: '20%' // optional
	    });
	    $("textarea").not('.skip').redactor({
	        buttons: ["formatting", "|", "alignleft", "aligncenter", "alignright", "justify", "|", "bold", "italic", "underline", "|", "unorderedlist", "orderedlist", "|", "link", "|", "html"],
	        formattingTags: ["p", "pre", "h3", "h4"],
	        minHeight: 100,
	        changeCallback: function(e) {
	            var editor = this.$editor.next('textarea');
	            if($(editor).attr('required')){
	                $('form[data-toggle="validator"]').bootstrapValidator('revalidateField', $(editor).attr('name'));
	            }
		   }
	    });
	    $(".input-tip").tooltip({placement: "top", html: true, trigger: "hover focus", container: "body",
	        title: function() {
	            return $(this).attr("data-tip");
	        }
	    });
	    $(".input-pop").popover({placement: "top", html: true, trigger: "hover focus", container: "body",
	        content: function() {
	            return $(this).attr("data-tip");
	        },
	        title: function() {
	            return "<b>" + $('label[for="' + $(this).attr("id") + '"]').text() + "</b>";
	        }
	    });
	    $('select, select.select').select2({minimumResultsForSearch: 7});
	    $('#date_range').daterangepicker({ format: site.dateFormats.js_sdate }, function(start, end, label) {
	        $('#from_date').val(start.format('YYYY-MM-DD'));
	        $('#to_date').val(end.format('YYYY-MM-DD'));
	    });
	    $('#myModal').on('shown.bs.modal', function() {
	        $('.modal-body :input:first').focus();
	    });
	    $('#csv_file').change(function(e) {
			v = $(this).val();
			if (v != '') {
		    var validExts = new Array(".csv");
		    var fileExt = v;
		    fileExt = fileExt.substring(fileExt.lastIndexOf('.'));
		    if (validExts.indexOf(fileExt) < 0) {
			e.preventDefault();
			bootbox.alert("Invalid file selected. Only .csv file is allowed.");
			$(this).val('');
			$('form[data-toggle="validator"]').bootstrapValidator('updateStatus', 'csv_file', 'NOT_VALIDATED');
			return false;
		    }
		    else
			return true;
			}
	  	});
		});

		$(function() {
		    $('.datetime').datetimepicker({format: site.dateFormats.js_ldate, language: 'sma', weekStart: 1, todayBtn: 1, autoclose: 1, todayHighlight: 1, startView: 2, forceParse: 0});
		    $('.date').datetimepicker({format: site.dateFormats.js_sdate, language: 'sma', todayBtn: 1, autoclose: 1, minView: 2 });
		});
	</script>
</div>
  
@endsection

@push('css')
  {{-- expr --}}
@endpush


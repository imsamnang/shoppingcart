@extends('layouts.admin.sma_layout')

@section('title','post_setting')

@push('css')
  {{-- expr --}}
@endpush

@section('admin-content')

<div class="box">
    <div class="box-header">
        <h2 class="blue"><i class="fa-fw fa fa-cogs"></i>POS Settings</h2>
            </div>
    <div class="box-content">
        <div class="row">
            <div class="col-lg-12">

                <p class="introtext">Please update the information below. The field labels marked with * are required input fields.</p>

                <form action="http://localhost/full_project/WeERP_v3/pos/settings" data-toggle="validator" role="form" id="pos_setting" method="post" accept-charset="utf-8">
<input type="hidden" name="token" value="d734af40612ff1684196bb5544ccb118" />

                <fieldset class="scheduler-border">
                    <legend class="scheduler-border">POS Configuration</legend>
                    <div class="col-md-4 col-sm-4">
                        <div class="form-group">
                            <label for="limit">Display Products</label>                            <input type="text" name="pro_limit" value="25"  class="form-control" id="limit" required="required" />
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-4">
                        <div class="form-group">
                            <label for="pin_code">POS Pin Code</label>                            <input type="password" name="pin_code" value="1234"  class="form-control" pattern="[0-9]{4,8}"id="pin_code" />
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-4">
                        <div class="form-group">
                            <label for="default_category">Default Category</label>                            <select name="category" class="form-control" id="default_category" required="required" style="width:100%;">
<option value="">Select Default Category</option>
<option value="18">Air Con</option>
<option value="19">Aircon</option>
<option value="8">Beer</option>
<option value="14">Car</option>
<option value="11">Cement</option>
<option value="12">Coffee</option>
<option value="9">Computer</option>
<option value="17">Dring</option>
<option value="7">Drink</option>
<option value="13">Drinking Water</option>
<option value="6">Food</option>
<option value="10">Phone</option>
<option value="21">Refrigerator</option>
<option value="16">ដីឡូត៍</option>
<option value="15">សេវាកម្មមា៉ស្សា</option>
<option value="24" selected="selected">ឡានកង់ ១២</option>
<option value="22">ឡានកង់ ៦</option>
<option value="23">ឡានកង់១០</option>
</select>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-4">
                        <div class="form-group">
                            <label for="default_biller">Default Biller</label>                            <select name="biller" class="form-control" id="default_biller" required="required" style="width:100%;">
<option value="0"></option>
<option value="3" selected="selected">iNTER TECH PLUS CO., LTD</option>
<option value="5">iNTER TECH PLUS CO., LTD</option>
<option value="10">BA</option>
</select>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-4">
                        <div class="form-group">
                            <label for="customer1">Default Customer</label>                            <input type="text" name="customer" value="1"  id="customer1" data-placeholder="Select Customer" required="required" class="form-control" style="width:100%;" />
                        </div>
                    </div>

                    <div class="col-md-4 col-sm-4">
                        <div class="form-group">
                            <label for="display_time">Display Time</label>                            <select name="display_time" class="form-control" id="display_time" required="required">
<option value="1" selected="selected">Yes</option>
<option value="0">No</option>
</select>
                        </div>
                    </div>

                    <div class="col-md-4 col-sm-4">
                        <div class="form-group">
                            <label for="keyboard">On-Screen Keyboard</label>                            <select name="keyboard" class="form-control" id="keyboard" required="required">
<option value="1">Yes</option>
<option value="0" selected="selected">No</option>
</select>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-4">
                        <div class="form-group">
                            <label for="product_button_color">Product Button Color</label>                            <select name="product_button_color" class="form-control" id="product_button_color" required="required">
<option value="default" selected="selected">Default</option>
<option value="primary">Primary</option>
<option value="info">Info</option>
<option value="warning">Warning</option>
<option value="danger">Danger</option>
</select>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-4">
                        <div class="form-group">
                            <label for="tooltips">Tool tips</label>                            <select name="tooltips" class="form-control" id="tooltips" required="required">
<option value="1">Yes</option>
<option value="0" selected="selected">No</option>
</select>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-4">
                        <div class="form-group">
                            <label for="rounding">Rounding</label>                            <select name="rounding" class="form-control" id="rounding" required="required">
<option value="0" selected="selected">Disable</option>
<option value="1">To nearest 0.05</option>
<option value="2">To nearest 0.50</option>
<option value="3">To nearest number (integer)</option>
<option value="4">To next number (integer)</option>
</select>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-4">
                        <div class="form-group">
                            <label for="item_order">Item Order</label>                                                        <select name="item_order" class="form-control" id="item_order" required="required">
<option value="0" selected="selected">Default</option>
<option value="1">Category</option>
</select>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-4">
                        <div class="form-group">
                            <label for="after_sale_page">After Sale Page</label>                                                        <select name="after_sale_page" class="form-control" id="after_sale_page" required="required">
<option value="0" selected="selected">Receipt</option>
<option value="1">POS</option>
</select>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-4">
                        <div class="form-group">
                            <label for="customer_details">Display Customer Details on Receipt</label>                                                        <select name="customer_details" class="form-control" id="customer_details" required="required">
<option value="0" selected="selected">No</option>
<option value="1">Yes</option>
</select>
                        </div>
                    </div>
					
					<div class="col-md-4 col-sm-4">
                        <div class="form-group">
                            <label for="table">Tables</label>                                                        <select name="table_enable" class="form-control" id="table_enable" required="required">
<option value="0" selected="selected">No</option>
<option value="1">Yes</option>
</select>
                        </div>
                    </div>
					
					<div class="col-md-4 col-sm-4">
                        <div class="form-group">
                            <label for="queue">Queue</label>                                                        <select name="queue_enable" class="form-control" id="queue_enable" required="required">
<option value="0" selected="selected">No</option>
<option value="1">Yes</option>
</select>
                        </div>
                    </div>
					
					<div class="col-md-4 col-sm-4">
                        <div class="form-group">
                            <label for="queue_reset">Queue Reset</label>                            							<input type="text" name="queue_expiry" value="101"  class="form-control tip" id="queue_expiry" />
                            
                        </div>
                    </div>
					
					<div class="col-md-4 col-sm-4">
                        <div class="form-group">
                            <label for="pos_redirect_order">Redirect to Table After Order</label>                                                        <select name="pos_redirect_order" class="form-control" id="pos_redirect_order" required="required">
<option value="0">No</option>
<option value="1" selected="selected">Yes</option>
</select>
                        </div>
                    </div>
					
					<div class="col-md-4 col-sm-4">
                        <div class="form-group">
                            <label for="allow_min_price">Allow Min Price</label>                                                        <select name="allow_min_price" class="form-control" id="allow_min_price" required="required">
<option value="0">No</option>
<option value="1" selected="selected">Yes</option>
</select>
                        </div>
                    </div>
					
					<div class="col-md-4 col-sm-4">
                        <div class="form-group">
                            <label for="default_floor">Default Floor</label>                                                        <select name="floor" class="form-control" id="floor" required="required">
<option value="0"></option>
<option value="1">ជាន់ក្រោម</option>
<option value="2" selected="selected">ភោជនីយដ្ឋាន និង KTV</option>
<option value="3">មា៉ស្សា និង សូណា</option>
</select>
                        </div>
                    </div>
					
					<div class="col-md-4 col-sm-4">
                        <div class="form-group">
                            <label for="pos_payment_sale_note">POS Payment Sale Note / Staff Note</label>                                                        <select name="pos_payment_sale_note" class="form-control" id="pos_payment_sale_note" required="required">
<option value="0" selected="selected">No</option>
<option value="1">Yes</option>
</select>
                        </div>
                    </div>
					
					<div class="col-md-4 col-sm-4">
                        <div class="form-group">
                            <label for="pos_delivery">POS Delivery Status</label>                                                        <select name="pos_delivery" class="form-control" id="pos_delivery" required="required">
<option value="0" selected="selected">No</option>
<option value="1">Yes</option>
</select>
                        </div>
                    </div>
					
                </fieldset>
                <fieldset class="scheduler-border">
                    <legend class="scheduler-border">POS Printing</legend>

                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="remote_printing">Printing</label>                                                        <select name="remote_printing" class="form-control select2" id="remote_printing" style="width:100%;" required="required">
<option value="0">PHP Server (only for LAN/localhost)</option>
<option value="1">Web Browser</option>
<option value="3" selected="selected">PHP POS Print Server</option>
</select>
                            <span class="help-block">On local installation <strong>PHP Server</strong> will be the best choice and for live server, you can install <strong>PHP Pos Print Server</strong> locally (recommended) or use web browser printing feature.</span>
                                                    </div>
                    </div>
                    <div class="clearfix"></div>

                    <div class="printers">

                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="receipt_printer">Receipt Printer</label> <strong>*</strong>
                                                                <select name="receipt_printer" class="form-control select2" id="receipt_printer" style="width:100%;">
<option value="3" selected="selected">Printer 1</option>
<option value="4">Printer 2</option>
</select>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="order_printers">Order Printers</label> <strong>*</strong>
                                <select name="order_printers[]" multiple class="form-control select2" id="order_printers" style="width:100%;">
<option value="3">Printer 1</option>
<option value="4">Printer 2</option>
</select>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="auto_print">Auto Print Receipt</label> <strong>*</strong>
                                <select name="auto_print" class="form-control select2" id="auto_print" style="width:100%;">
<option value="1">Yes</option>
<option value="0" selected="selected">No</option>
</select>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="cash_drawer_codes">Open Cash Drawer Code</label>                                <input type="text" name="cash_drawer_codes" value="x1C"  class="form-control" id="cash_drawer_codes" placeholder="\x1C" />
                            </div>
                        </div>

                    </div>
                </fieldset>
                <fieldset class="scheduler-border">
                    <legend class="scheduler-border">Custom fields for receipt</legend>
                    <div class="col-md-6 col-sm-6">
                        <div class="form-group">
                            <label for="tcf1">Custom Field 1 Title</label>                            <input type="text" name="cf_title1" value=""  class="form-control tip" id="tcf1" />
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6">
                        <div class="form-group">
                            <label for="vcf1">Custom Field 1 Value</label>                            <input type="text" name="cf_value1" value=""  class="form-control tip" id="vcf1" />
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6">
                        <div class="form-group">
                            <label for="tcf2">Custom Field 2 Title</label>                            <input type="text" name="cf_title2" value=""  class="form-control tip" id="tcf2" />
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6">
                        <div class="form-group">
                            <label for="vcf2">Custom Field 2 Value</label>                            <input type="text" name="cf_value2" value=""  class="form-control tip" id="vcf2" />
                        </div>
                    </div>
                </fieldset>
                <fieldset class="scheduler-border">
                    <legend class="scheduler-border">Shortcuts</legend>
                    <p>Ctrl, Shift and Alt with any other letter (Ctrl+Shift+A). Function keys (F1 - F12) are supported too.</p>

                    <div class="col-md-4 col-sm-4">
                        <div class="form-group">
                            <label for="focus_add_item">Focus Add Item Input</label>                            <input type="text" name="focus_add_item" value="Ctrl+F3"  class="form-control tip" id="focus_add_item" />
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-4">
                        <div class="form-group">
                            <label for="add_manual_product">Add Manual Item to Sale</label>                            <input type="text" name="add_manual_product" value="Ctrl+Shift+M"  class="form-control tip" id="add_manual_product" />
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-4">
                        <div class="form-group">
                            <label for="customer_selection">Customer Input</label>                            <input type="text" name="customer_selection" value="Ctrl+Shift+C"  class="form-control tip" id="customer_selection" />
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-4">
                        <div class="form-group">
                            <label for="add_customer">Add Customer</label>                            <input type="text" name="add_customer" value="Ctrl+Shift+A"  class="form-control tip" id="add_customer" />
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-4">
                        <div class="form-group">
                            <label for="toggle_category_slider">Toggle Categories Slider</label>                            <input type="text" name="toggle_category_slider" value="Ctrl+F11"  class="form-control tip" id="toggle_category_slider" />
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-4">
                        <div class="form-group">
                            <label for="toggle_subcategory_slider">Toggle Subcategories Slider</label>                            <input type="text" name="toggle_subcategory_slider" value="Ctrl+F12"  class="form-control tip" id="toggle_subcategory_slider" />
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-4">
                        <div class="form-group">
                            <label for="toggle_brands_slider">Toggle Brands Slider</label>                            <input type="text" name="toggle_brands_slider" value=""  class="form-control tip" id="toggle_brands_slider" />
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-4">
                        <div class="form-group">
                            <label for="cancel_sale">Cancel Sale</label>                            <input type="text" name="cancel_sale" value="F4"  class="form-control tip" id="cancel_sale" />
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-4">
                        <div class="form-group">
                            <label for="suspend_sale">Suspend Sale</label>                            <input type="text" name="suspend_sale" value="F7"  class="form-control tip" id="suspend_sale" />
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-4">
                        <div class="form-group">
                            <label for="print_items_list">Print items list</label>                            <input type="text" name="print_items_list" value="F9"  class="form-control tip" id="print_items_list" />
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-4">
                        <div class="form-group">
                            <label for="finalize_sale">Finalize Sale</label>                            <input type="text" name="finalize_sale" value="Enter"  class="form-control tip" id="finalize_sale" />
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-4">
                        <div class="form-group">
                            <label for="today_sale">Today's Sale</label>                            <input type="text" name="today_sale" value="Ctrl+F1"  class="form-control tip" id="today_sale" />
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-4">
                        <div class="form-group">
                            <label for="open_hold_bills">Open Suspended Sales</label>                            <input type="text" name="open_hold_bills" value="Ctrl+F2"  class="form-control tip" id="open_hold_bills" />
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-4">
                        <div class="form-group">
                            <label for="close_register">Close Register</label>                            <input type="text" name="close_register" value="Ctrl+F10"  class="form-control tip" id="close_register" />
                        </div>
                    </div>
                </fieldset>

                <fieldset class="scheduler-border">
                    <legend class="scheduler-border">Payment Gateways</legend>
                                        <div class="col-md-4 col-sm-4">
                        <div class="form-group">
                            <label for="paypal_pro">Paypal Pro</label>                            <select name="paypal_pro" class="form-control" id="paypal_pro" required="required">
<option value="1">Yes</option>
<option value="0" selected="selected">No</option>
</select>
                        </div>
                    </div>
                    <div class="clearfix"></div>
                    <div id="paypal_pro_con">
                        <div class="col-md-3 col-sm-3">
                            <div class="form-group">
                                <label for="APIUsername">Paypal Pro API Username</label>                                <input type="text" name="APIUsername" value="25"  class="form-control tip" id="APIUsername" />
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-3">
                            <div class="form-group">
                                <label for="APIPassword">Paypal Pro API Password</label>                                <input type="text" name="APIPassword" value=""  class="form-control tip" id="APIPassword" />
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-6">
                            <div class="form-group">
                                <label for="APISignature">Paypal Pro API Signature</label>                                <input type="text" name="APISignature" value=""  class="form-control tip" id="APISignature" />
                            </div>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                                        <div class="col-md-4 col-sm-4">
                        <div class="form-group">
                            <label for="stripe">Stripe</label>                            <select name="stripe" class="form-control" id="stripe" required="required">
<option value="1">Yes</option>
<option value="0" selected="selected">No</option>
</select>
                        </div>
                    </div>
                    <div class="clearfix"></div>
                    <div id="stripe_con">
                        <div class="col-md-6 col-sm-6">
                            <div class="form-group">
                                <label for="stripe_secret_key">Stripe Secret Key</label>                                <input type="text" name="stripe_secret_key" value=""  class="form-control tip" id="stripe_secret_key" />
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-6">
                            <div class="form-group">
                                <label for="stripe_publishable_key">Stripe Publishable Key</label>                                <input type="text" name="stripe_publishable_key" value=""  class="form-control tip" id="stripe_publishable_key" />
                            </div>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                    <div class="clearfix"></div>
                    <div class="col-md-4 col-sm-4">
                        <div class="form-group">
                            <label for="authorize">Authorize.net</label>                            <select name="authorize" class="form-control" id="authorize" required="required">
<option value="1">Yes</option>
<option value="0" selected="selected">No</option>
</select>
                        </div>
                    </div>
                    <div class="clearfix"></div>
                    <div id="authorize_con">
                        <div class="col-md-6 col-sm-6">
                            <div class="form-group">
                                <label for="api_login_id">API Login ID</label>                                <input type="text" name="api_login_id" value=""  class="form-control tip" id="api_login_id" />
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-6">
                            <div class="form-group">
                                <label for="api_transaction_key">API Transaction Key</label>                                <input type="text" name="api_transaction_key" value=""  class="form-control tip" id="api_transaction_key" />
                            </div>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                </fieldset>

                <input type="submit" name="update_settings" value="Update Settings"  class="btn btn-primary" />

                </form>            </div>

        </div>
    </div>
</div>

  
@endsection

@push('css')
  {{-- expr --}}
@endpush


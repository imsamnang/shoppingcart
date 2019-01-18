@extends('layouts.admin.sma_layout')

@section('title','Print Barcodes')

@push('css')
  {{-- expr --}}
@endpush

@section('admin-content')

<div class="box">
    <div class="box-header no-print">
        <h2 class="blue"><i class="fa-fw fa fa-plus"></i>Print Barcode/Label</h2>

        <div class="box-icon">
            <ul class="btn-tasks">
                <li class="dropdown">
                    <a href="#" onclick="window.print();return false;" id="print-icon" class="tip" title="Print">
                        <i class="icon fa fa-print"></i>
                    </a>
                </li>
            </ul>
        </div>
    </div>
    <div class="box-content">
        <div class="row">
            <div class="col-lg-12">
                <p class="introtext">You can visit <a href="http://localhost/full_project/WeERP_v3/system_settings/categories">Categories</a>, <a href="http://localhost/full_project/WeERP_v3/system_settings/subcategories">Sub Categories</a>, <a href="http://localhost/full_project/WeERP_v3/purchases">Purchases</a> and <a href="http://localhost/full_project/WeERP_v3/transfers">Transfers</a> to add products to this printing list.</p>

                <div class="well well-sm no-print">
          
          
                    <div class="form-group">
                        <label for="add_item">Add Product</label>                        <input type="text" name="add_item" value=""  class="form-control" id="add_item" placeholder="Add Item" />
                    </div>
          
                    <form action="http://localhost/full_project/WeERP_v3/products/print_barcodes" id="barcode-print-form" data-toggle="validator" method="post" accept-charset="utf-8">
    <input type="hidden" name="token" value="c32ffaaa43f09a7f1b26901a51503c50" />
                        <div class="controls table-controls">
                            <table id="bcTable"
                                   class="table items table-striped table-bordered table-condensed table-hover">
                                <thead>
                                <tr>
                                    <th class="col-xs-4">Product Name (Product Code)</th>
                                    <th class="col-xs-1">Quantity</th>
                                    <th class="col-xs-7">Variants</th>
                                    <th class="text-center" style="width:30px;">
                                        <i class="fa fa-trash-o" style="opacity:0.5; filter:alpha(opacity=50);"></i>
                                    </th>
                                </tr>
                                </thead>
                                <tbody></tbody>
                            </table>
                        </div>

                            <div class="form-group">
                                <label for="style">Style</label>                                          
    <select name="style" class="form-control tip" id="style" required="required">
    <option value="">Select Style</option>
    <option value="405">40 per sheet a5</option>
    <option value="40">40 per sheet (a4) (1.799" x 1.003")</option>
    <option value="56">56 per sheet (a4) (2.056" x 0.857")</option>
    <option value="60">60 per sheet (a4) (1.545" x 1.028")</option>
    <option value="30">30 per sheet (2.625" x 1")</option>
    <option value="24" selected="selected">24 per sheet (a4) (2.48" x 1.334")</option>
    <option value="20">20 per sheet (4" x 1")</option>
    <option value="18">18 per sheet (a4) (2.5" x 1.835")</option>
    <option value="14">14 per sheet (4" x 1.33")</option>
    <option value="12">12 per sheet (a4) (2.5" x 2.834")</option>
    <option value="10">10 per sheet (4" x 2")</option>
    <option value="50">Continuous feed</option>
    </select>
                                <div class="row cf-con" style="margin-top: 10px; display: none;">
                                    <div class="col-xs-4">
                                        <div class="form-group">
                                            <div class="input-group">
                                                <input type="text" name="cf_width" value=""  class="form-control" id="cf_width" placeholder="Width" />
                                                <span class="input-group-addon" style="padding-left:10px;padding-right:10px;">Inches</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xs-4">
                                        <div class="form-group">
                                            <div class="input-group">
                                                <input type="text" name="cf_height" value=""  class="form-control" id="cf_height" placeholder="Height" />
                                                <span class="input-group-addon" style="padding-left:10px;padding-right:10px;">Inches</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xs-4">
                                        <div class="form-group">
                                                                                <select name="cf_orientation" class="form-control" id="cf_orientation" placeholder="Orientation">
    <option value="0">Portrait</option>
    <option value="1">Landscape</option>
    </select>
                                    </div>
                                </div>
                            </div>
                            <span class="help-block">Please don't forget to set correct page size and margin for your printer. You can set right and bottom to 0 while left and top margin can be adjusted according to your need.</span>
                            <div class="clearfix"></div>
                        </div>
                        <div class="form-group">
                            <span style="font-weight: bold; margin-right: 15px;">Print:</span>
                            <input name="site_name" type="checkbox" id="site_name" value="1" checked="checked" style="display:inline-block;" />
                            <label for="site_name" class="padding05">site name</label>
                            <input name="product_name" type="checkbox" id="product_name" value="1" checked="checked" style="display:inline-block;" />
                            <label for="product_name" class="padding05">Product Name</label>
                            <input name="price" type="checkbox" id="price" value="1" checked="checked" style="display:inline-block;" />
                            <label for="price" class="padding05">Price</label>
                            <input name="currencies" type="checkbox" id="currencies" value="1" style="display:inline-block;" />
                            <label for="currencies" class="padding05">Currencies</label>
                            <input name="unit" type="checkbox" id="unit" value="1" style="display:inline-block;" />
                            <label for="unit" class="padding05">Unit</label>
                            <input name="category" type="checkbox" id="category" value="1" style="display:inline-block;" />
                            <label for="category" class="padding05">Category</label>
                            <input name="variants" type="checkbox" id="variants" value="1" style="display:inline-block;" />
                            <label for="variants" class="padding05">Variants</label>
                            <input name="product_image" type="checkbox" id="product_image" value="1" style="display:inline-block;" />
                            <label for="product_image" class="padding05">Product Image</label>
                            <input name="check_promo" type="checkbox" id="check_promo" value="1" checked="checked" style="display:inline-block;" />
                            <label for="check_promo" class="padding05">Check promotional price</label>
                        </div>

                    <div class="form-group">
                        <input type="submit" name="print" value="Update"  class="btn btn-primary" />
                        <button type="button" id="reset" class="btn btn-danger">Reset</button>
                    </div>
                    </form>                    <div class="clearfix"></div>
                </div>
                <div id="barcode-con">
                                    </div>
            </div>
        </div>
    </div>
</div>

  
@endsection

@push('css')
  {{-- expr --}}
@endpush





 
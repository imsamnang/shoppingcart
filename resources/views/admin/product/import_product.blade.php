@extends('layouts.admin.sma_layout')

@section('title','Import Product')

@push('css')
  {{-- expr --}}
@endpush

@section('admin-content')

  <div class="box">
    <div class="box-header">
      <h2 class="blue">
        <i class="fa-fw fa fa-plus"></i>Add products by Excel</h2>
    </div>
    <div class="box-content">
      <div class="row">
        <div class="col-lg-12">
          <form action="http://localhost/full_project/WeERP_v3/products/import_csv" class="form-horizontal" data-toggle="validator" role="form" enctype="multipart/form-data" method="post" accept-charset="utf-8">
            <input type="hidden" name="token" value="c32ffaaa43f09a7f1b26901a51503c50" />
            <div class="row">
              <div class="col-md-12">

                <div class="well well-small">
                  <a href="http://localhost/full_project/WeERP_v3/assets/csv/sample_products.xlsx"
                  class="btn btn-primary pull-right"><i
                  class="fa fa-download"></i> Download Sample File</a>
                  <span class="text-warning">The first line in downloaded Excel file should remain as it is. Please do not change the order of columns.</span><br/>The correct column order is <span
                  class="text-info">(Name, Code, Barcode Symbology, Brand, Category Code, Unit Code, Sale Unit Code, Purchase Unit Code, Cost, Price, Alert Quantity, Tax, Tax Method, Image, Sub category Code, Product Variants separated by vertical bar <strong>|</strong> , Product Custom Field 1, Product Custom Field 2, Product Custom Field 3, Product Custom Field 4, Product Custom Field 5, Product Custom Field 6                                )</span> &amp; you must follow this.<br>Please make sure the Excel file is UTF-8 encoded and not saved with byte order mark (BOM).                                <p>The images should be uploaded in <strong>uploads</strong> folder.</p>
                </div>
                <div class="col-md-12">
                  <div class="form-group">
                    <label for="xlsx_file">Upload File</label>
                    <input type="file" data-browse-label="Browse ..." accept=".xls, .xlsx" name="userfile" class="form-control file" data-show-upload="false" data-show-preview="false" id="xlsx_file" required="required"/>
                  </div>
                  <div class="form-group">
                    <input type="submit" name="import" value="Import"  class="btn btn-primary" />
                  </div>
                </div>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>  
  </div>
  
@endsection

@push('css')
  {{-- expr --}}
@endpush





 
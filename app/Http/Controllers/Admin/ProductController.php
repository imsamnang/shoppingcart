<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProductController extends Controller
{
    public function index()
    {
      return view('admin.product.index');
    }

    public function create()
    {
      return view('admin.product.create');
    }

    public function store(Request $request)
    {

    }

    public function show($id)
    {

    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }

    public function import_product()
    {
      return view('admin.product.import_product');
    }

    public function print_barcodes()
    {
      return view('admin.product.print_barcodes');
    }

    public function using_stocks()
    {
      return view('admin.product.using_stocks');
    } 

    public function stock_counts()
    {
      return view('admin.product.using_stocks');
    } 

    public function quantity_adjustments()
    {
      return view('admin.product.quantity_adjustments');
    } 

    public function cost_adjustments()
    {
      return view('admin.product.cost_adjustments');
    } 

    public function converts()
    {
      return view('admin.product.converts');
    } 

    public function transfers()
    {
      return view('admin.product.transfers');
    }




    


}

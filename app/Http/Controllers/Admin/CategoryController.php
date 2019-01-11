<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Model\Category;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
  public function index()
  {
  	return view('admin.category.index');
  }

  public function create()
  {
  	return view('admin.category.create');
  } 

  public function store(Request $request)
  {
  	$categories = new Category();
  	$categories->category_name = $request->category_name;
  	$categories->category_description = $request->category_description;
  	$categories->publication_status = $request->publication_status;

		$categories->save();
	  Toastr::success('Category Save Successfull','success');
		return back();

  }

}

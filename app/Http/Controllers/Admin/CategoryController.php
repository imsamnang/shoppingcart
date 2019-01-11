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
    $categories = Category::all();
  	return view('admin.category.index',compact('categories'));
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

  public function publish($id)
  {
    $category = Category::findOrFail($id);
    $category->publication_status = 1;
    $category->update();
    Toastr::success('Category Publish Successfull','success');
    return back();
  } 

  public function unpublish($id)
  {
    $category = Category::findOrFail($id);
    $category->publication_status = 0;
    $category->update();
    Toastr::success('Category Unpublish Successfull','success');
    return back();
  }   

}

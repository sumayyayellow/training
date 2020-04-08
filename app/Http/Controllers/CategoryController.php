<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    
    public function index()
    {   
    	$categories = Category::all();
    	return view('admin.category.category', ['categories' => $categories]);
    }

    public function saveCategory(Request $request)
    {
    	$category = new Category();
    	$category->category_name = $request->category_name;
    	$category->save();

    	 return redirect('/mangecategory')->with('message', 'Category updated');
    }

    public function manageCategory()
    {
        $categories = Category::all();
        return view('admin.category.category-manage', ['categories' => $categories]);
    }

    public function editCategory($id)
    {
        $category = Category::find($id);
        return view('admin.category.category-edit', ['category' => $category]);
    }

    public function updateCategory(Request $request)
    {

        $category = Category::find($request->category_id);
        $category->category_name = $request->category_name;
        $category->save();

        //var_dump($category);
        return redirect('/mangecategory')->with('message', 'Category updated');
    }

    public function deleteCategory($id)
    {
        $category = Category::find($id);
        $category->delete();

        
        return redirect('/mangecategory')->with('message', 'Category deleted');
    }
}

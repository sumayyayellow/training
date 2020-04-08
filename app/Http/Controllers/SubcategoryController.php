<?php

namespace App\Http\Controllers;

use App\Category;
use App\Subcategory;
use Illuminate\Http\Request;

class SubcategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = Category::all();
        return view('admin.subcategory.subcategory', ['categories' => $categories]);
    }

    public function saveSubCategory(Request $request)
    {
       $subcategory = new SubCategory();
       $subcategory->category_id = $request->category_id;
       $subcategory->subcategory_name = $request->subcategory_name;
       $subcategory->save();

       return redirect('/subcategory')->with('message', 'SubCategory info saved successfully');
    }

    public function manageSubCategory()
    {
       $categories = Category::with('Subcategory')->get();
       
       $subcategories = Subcategory::all();

       return view('admin.subcategory.subcategory-manage', [
        'subcategories' => $subcategories,
        'categories' => $categories,
        ]);
    }

    public function editSubCategory($id)
    {
      $subcategory = Subcategory::find($id);

      $categories = Category::with('Subcategory')->get();

      //return view('admin.subcategory.submanage', ['categories' => $categories]);
      return view('admin.subcategory.subcategory-edit', 
        ['subcategory' => $subcategory],
        ['categories' => $categories]
        );
    }

    public function updateSubCategory(Request $request)
    {
      $subcategory = Subcategory::find($request->subcategory_id);
      $subcategory->category_id = $request->category_id;
      $subcategory->subcategory_name = $request->subcategory_name;
      $subcategory->save();

      //$categories = Category::all();

      //return view('admin.subcategory.submanage', ['categories' => $categories]);

      return redirect('/managesubcategory')->with('message', 'SubCategory info updated successfully');
    }

    
    public function deleteSubCategory($id)
    {
      $subcategory = Subcategory::find($id);
      $subcategory->delete();

      return redirect('/managesubcategory')->with('message', 'SubCategory info deleted successfully');
    }
}

<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;


class CategoryController extends Controller
{
    public function getIndex()
    {
        $categories = Category::all();
        return view ('admin.category.index')->with('categories', $categories);
    }

    public function getCreate()
    {
        return view ('admin.category.create');
    }

    public function postStore(Request $request)
    {
        $this->validate($request,
        [
            'name' => 'required | min:5'
            
        ]);
        $category = new Category();
        $category->name = $request->name;
        $category->save();
        toastr()->success('Category has been created successfully!');
        return redirect()->route('indexCategory');
    }

    public function getEdit($id)
    {
        $category = Category::find($id);
        return view ('admin.category.edit')->with('category', $category);
    }

    public function postUpdate(Request $request ,$id)
    {
        $category = Category::find($id);
        $category->name = $request->name;
        $category->save();
        toastr()->success('Category has been updated successfully!');
        

        return redirect()->route('indexCategory');
    }

    public function getDelete($id)
    {
        $category = Category::find($id);
        $category->delete();
        toastr()->error('Category has been deleted successfully!');

        return redirect()->route('indexCategory');
    }

    
}

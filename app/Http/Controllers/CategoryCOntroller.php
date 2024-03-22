<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryCOntroller extends Controller
{
    public function index()
    {
        $this->categories = Category::orderby('created_at', 'desc')->get();
        return view('admin.category.index', ['categories' => $this->categories]);
    }

    public function create( Request $request)
    {
        $request->validate([
            'name' => 'required|unique:products',
            'description' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ], [
            'name.required' => 'Name is Required',
            'name.unique' => 'Product Already Exists',
            'description.required' => 'Description is Required',
            'image.required' => 'Image is Required',
            'image.mimes' => 'Uploaded image should be of type jpeg, png, jpg, or gif',
            'image.max' => 'Uploaded image should not be larger than 2MB',
        ]);

        Category::newCategory($request);

        return response()->json(['status' => 'success',]);

//        return back()->with('message', 'Category info create successfully.');
    }

    public function edit($id)
    {
        $category = Category::find($id);
        return view('admin.category.edit', compact('category'));
    }

    public function update(Request $request, $id)
    {
        Category::updateCategory($id,$request);
        return redirect('/category/manage')->with('message','Category Updated Successfully');
    }

    public function delete($id)
    {
        Category::deleteCategory($id);
        return redirect('/category/manage')->with('message','Category Deleted Successfully');
    }
}

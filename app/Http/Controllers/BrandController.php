<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use Illuminate\Http\Request;

class BrandController extends Controller
{
    public function index()
    {
        $this->categories = Brand::orderby('created_at', 'desc')->get();
        return view('admin.brand.index', ['categories' => $this->categories]);
    }

    public function create( Request $request)
    {
        $request->validate([
            'name' => 'required|unique:products',
            'description' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ], [
            'name.required' => 'Name is Required',
            'name.unique' => 'Name Already Exists',
            'description.required' => 'Description is Required',
            'image.required' => 'Image is Required',
            'image.mimes' => 'Uploaded image should be of type jpeg, png, jpg, or gif',
            'image.max' => 'Uploaded image should not be larger than 2MB',
        ]);

        Brand::newBrand($request);

        return response()->json(['status' => 'success',]);

//        return back()->with('message', 'Category info create successfully.');
    }

    public function edit($id)
    {
        $brand = Brand::find($id);
        return view('admin.brand.edit', compact('brand'));
    }

    public function update(Request $request, $id)
    {
        Brand::updateBrand($id,$request);
        return redirect('/brand/manage')->with('message','Brand Updated Successfully');
    }

    public function delete($id)
    {
        Brand::deleteBrand($id);
        return redirect('/brand/manage')->with('message','Brand Deleted Successfully');
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Unit;
use Illuminate\Http\Request;

class UnitController extends Controller
{
    public function index()
    {
        $this->categories = Unit::orderby('created_at', 'desc')->get();
        return view('admin.unit.index', ['units' => $this->categories]);
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

        Unit::newUnit($request);

        return back()->with('message', 'Category info create successfully.');
    }

    public function editunit($id)
    {
        $unit = Unit::find($id);
        return response()->json([
            'status' => 200,
            'unit'  => $unit,
        ]) ;
    }

    public function update(Request $request, $id)
    {
        Unit::updateUnit($id,$request);
        return redirect('/unit/manage')->with('message','Unit Updated Successfully');
    }

    public function delete($id)
    {
        Unit::deleteUnit($id);
        return redirect('/unit/manage')->with('message','Unit Deleted Successfully');
    }
}

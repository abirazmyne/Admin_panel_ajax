<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use Illuminate\Http\Request;
use function Carbon\Traits\get;

class BrandController extends Controller
{
    public function index()
    {
        $this->categories = Brand::orderby('created_at', 'desc')->get();
        return view('admin.brand.index', ['categories' => $this->categories]);
    }

    public function create( Request $request)
    {

        $this->brand =  Brand::where('name',$request->name)->get();
        if($this->brand->count()  < 1)
        {
            Brand::newBrand($request);
            return back()->with('message', 'Category info create successfully.');
        }
        else
            {
                return back()->with('message', 'Category name already exists');
            }
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

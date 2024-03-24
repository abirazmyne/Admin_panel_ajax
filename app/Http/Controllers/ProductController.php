<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use App\Models\Category;
use App\Models\OtherImages;
use App\Models\Product;
use App\Models\Unit;
use Illuminate\Http\Request;

class ProductController extends Controller
{

    public $product;
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $this->product = Product::orderBy('created_at', 'desc')->get();
        return view('admin.product.index',[
            'categories' => Category::all(),
            'brands'     => Brand::all(),
            'units'      => Unit::all(),
            'products'   => $this->product,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->product = Product::newProduct($request);
        OtherImages::newOtherImage($request->file('other_image'), $this->product->id);
        return back()->with('message', 'Product Info create successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(Product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Product $product)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Product $product)
    {
        Product::updateProduct($request, $product->id);
        if ($request->file('other_image'))
        {
            OtherImages::updateOtherImage($request->file('other_image'), $product->id);
        }
        return redirect('/product')->with('message', 'Product info updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product)
    {
        Product::deleteProduct($product->id);
        OtherImages::deleteOtherImage($product->id);
        return redirect('/product')->with('message', 'Product info delete successfully');
    }
}

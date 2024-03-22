<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WebsiteController extends Controller
{
    private  $allProducts, $newProducts, $offerProducts;
    public function index()
    {

        return view('website.home.index');
//        $this->newProducts = Product::where('product_status', 2)->orderByDesc('id')->take(8)->get();
//        $this->offerProducts = Product::where('product_status', 1)->orderByDesc('id')->take(3)->get();
//        $this->allProducts = Product::orderBy('updated_at', 'desc')->take(12)->get();


//        return view('website.home.index', [
//            'subCategories'=> SubCategory::all(),
//            'brands'=> Brand::all(),
//            'sliders' => Slider::where('slider_status', 1)->get(),
//            'allProducts' => $this->allProducts,
//            'newProducts' => $this->newProducts,
//            'offerProducts' => $this->offerProducts,
//        ]);
    }
}

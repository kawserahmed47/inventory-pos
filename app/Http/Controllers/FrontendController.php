<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use App\Models\Category;
use App\Models\Product;
use App\Models\ProductType;
use App\Models\ProductUnit;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function index(){

        $data['products'] = Product::all();
        $data['brands'] = Brand::all();
        $data['productType'] = ProductType::all();
        $data['categories']= Category::with(array('children'=>function($q){
            $q->with('parent', 'children')->get();
        }))->get();
        $data['productUnits'] = ProductUnit::with(array('product'=>function($q){
            $q->with('brand', 'category')->get();
        }))->get();

        return view('frontend.pages.index', $data);
    }
}

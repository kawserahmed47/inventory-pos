<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\ProductUnit;
use App\Models\Supplier;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProductUnitController extends Controller
{
    
    public function index()
    {
        $data['productUnits'] = ProductUnit::all();
        return view('pages.product_unit.index', $data);
    }


    public function create()
    {
        $data['products'] = Product::all();
        $data['suppliers'] = Supplier::all();
        return view('pages.product_unit.create', $data);
    }

    public function store(Request $request)
    {
       $productUnit = new ProductUnit();
       $productUnit->product_id = $request->product_id;
       $productUnit->supplier_id = $request->supplier_id;
       $productUnit->name = $request->name;
       $productUnit->available_stock = $request->available_stock;
       $productUnit->supplier_price = $request->supplier_price;
       $productUnit->max_retail_price = $request->max_retail_price;
       $productUnit->barcode = rand(10000,9999);
       $productUnit->barcode_view =rand(10000,9999); 
       $productUnit->manufacture_date = $request->manufacture_date;
       $productUnit->expiration_date = $request->expiration_date;
       $productUnit->description = $request->description;
       $productUnit->created_by = Auth::id() ;

       $productUnit->save();

       return redirect()->route('productUnit.index');



    }


    public function show($id)
    {
        $data['products'] = Product::all();
        $data['suppliers'] = Supplier::all();
        $data['productUnit'] = ProductUnit::find($id);
        return view('pages.product_unit.show', $data);
    }


    public function edit($id)
    {
        $data['products'] = Product::all();
        $data['suppliers'] = Supplier::all();
        $data['productUnit'] = ProductUnit::find($id);
        return view('pages.product_unit.edit', $data);
    }


    public function update(Request $request, $id)
    {
        $productUnit = ProductUnit::find($id);
        $productUnit->product_id = $request->product_id;
        $productUnit->supplier_id = $request->supplier_id;
        $productUnit->name = $request->name;
        $productUnit->available_stock = $request->available_stock;
        $productUnit->supplier_price = $request->supplier_price;
        $productUnit->max_retail_price = $request->max_retail_price;
        $productUnit->barcode = rand(10000,9999);
        $productUnit->barcode_view =rand(10000,9999); 
        $productUnit->manufacture_date = $request->manufacture_date;
        $productUnit->expiration_date = $request->expiration_date;
        $productUnit->description = $request->description;
        $productUnit->updated_by = Auth::id() ;

        $productUnit->save();
 
        return redirect()->route('productUnit.index');
    }


    public function destroy($id)
    {
        $productUnit = ProductUnit::find($id);
        $productUnit->delete();
        return redirect()->route('productUnit.index');

    }
}
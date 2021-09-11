<?php

namespace App\Http\Controllers;

use App\Models\ProductType;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class ProductTypeController extends Controller
{
    
    public function index()
    {
        $data['productTypes'] = ProductType::all();
        return view('pages.product_type.index',$data);
    }


    public function create()
    {
        return view('pages.product_type.create');
    }

    public function store(Request $request)
    {
        $productType = new ProductType();
        $productType->name = $request->name;
        $productType->slug = Str::slug($request->name, "-");
        $productType->description = $request->description;
        $productType->created_by = Auth::id();
        $productType->save();
        return  redirect()->route('productType.index');
    }


    public function show($id)
    {
        $data['productType'] = ProductType::find($id);
        return view('pages.product_type.show', $data);
    }


    public function edit($id)
    {
        $data['productType'] = ProductType::find($id);
        return view('pages.product_type.edit', $data);
    }


    public function update(Request $request, $id)
    {
        $productType =  ProductType::find($id);
        $productType->slug = Str::slug($request->name, "-");
        $productType->name = $request->name;
        $productType->description = $request->description;
        $productType->updated_by = Auth::id();
        $productType->save();
        return  redirect()->route('productType.index');
    }


    public function destroy($id)
    {
        $productType = ProductType::find($id);
        $productType->delete();
        return  redirect()->route('productType.index');

    }
}

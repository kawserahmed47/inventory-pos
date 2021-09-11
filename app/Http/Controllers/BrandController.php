<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class BrandController extends Controller
{
    
    public function index()
    {
        $data['brands'] = Brand::all();
       return view('pages.brand.index',$data);
    }

 
    public function create()
    {
        return view('pages.brand.create');
    }

    public function store(Request $request)
    {
        $brand = new Brand();
        $brand->name = $request->name;
        $brand->description = $request->description;
        $brand->created_by = Auth::id();
        $brand->save();
        return redirect()->route('brand.index');
    }

    public function show($id)
    {
        $data['brand'] = Brand::find($id);
        return view('pages.brand.show', $data);
    }


    public function edit( $id)
    {
        $data['brand'] = Brand::find($id);
        return view('pages.brand.edit', $data);
    }


    public function update(Request $request, $id)
    {
        $brand =  Brand::find($id);
        $brand->name = $request->name;
        $brand->description = $request->description;
        $brand->updated_by = Auth::id();
        $brand->save();
        return redirect()->route('brand.index');
    }


    public function destroy($id)
    {
       $brand = Brand::find($id);
       $brand->delete();
       return redirect()->route('brand.index');
    }
}

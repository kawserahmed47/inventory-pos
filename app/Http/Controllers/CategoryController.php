<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CategoryController extends Controller
{
    
    public function index()
    {
        $data['categories'] = Category::all();
        return view('pages.category.index', $data);
    }


    public function create()
    {
        return view('pages.category.create');
    }

    public function store(Request $request)
    {
        $brand = new Category();
        $brand->name = $request->name;
        $brand->description = $request->description;
        $brand->created_by = Auth::id();
        $brand->save();

        return redirect()->route('category.index');
    }


    public function show($id)
    {
        $data['category'] = Category::find($id);
        return view('pages.category.show', $data);
    }


    public function edit($id)
    {
        $data['category'] = Category::find($id);
        return view('pages.category.edit', $data);
    }


    public function update(Request $request, $id)
    {
        $brand =  Category::find($id);
        $brand->name = $request->name;
        $brand->description = $request->description;
        $brand->updated_by = Auth::id();
        $brand->save();

        return redirect()->route('category.index');
    }


    public function destroy($id)
    {
        $category = Category::find($id);
        $category->delete();
        return redirect()->route('category.index');
    }
}

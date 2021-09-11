<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

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
        $category = new Category();
        $category->name = $request->name;
        $category->parent_id = $request->parent_id ? $request->parent_id : 0;
        $category->description = $request->description;
        $category->created_by = Auth::id();
        $category->save();

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
        $category =  Category::find($id);
        $category->name = $request->name;
        $category->parent_id = $request->parent_id ? $request->parent_id : 0;
        $category->description = $request->description;
        $category->updated_by = Auth::id();
        $category->save();

        return redirect()->route('category.index');
    }


    public function destroy($id)
    {
        $category = Category::find($id);
        $category->delete();
        return redirect()->route('category.index');
    }
}

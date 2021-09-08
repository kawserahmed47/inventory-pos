<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    
    public function index()
    {
        return view('pages.category.index');
    }


    public function create()
    {
        return view('pages.category.create');
    }

    public function store(Request $request)
    {
        //
    }


    public function show($id)
    {
        return view('pages.category.show');
    }


    public function edit($id)
    {
        return view('pages.category.edit');
    }


    public function update(Request $request, $id)
    {
        //
    }


    public function destroy($id)
    {
        //
    }
}

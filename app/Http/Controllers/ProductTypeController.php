<?php

namespace App\Http\Controllers;

use App\Models\ProductType;
use Illuminate\Http\Request;

class ProductTypeController extends Controller
{
    
    public function index()
    {
        return view('pages.product_type.index');
    }


    public function create()
    {
        return view('pages.product_type.create');
    }

    public function store(Request $request)
    {
        //
    }


    public function show($id)
    {
        return view('pages.product_type.show');
    }


    public function edit($id)
    {
        return view('pages.product_type.edit');
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

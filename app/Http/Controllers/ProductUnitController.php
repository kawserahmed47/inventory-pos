<?php

namespace App\Http\Controllers;

use App\Models\ProductUnit;
use Illuminate\Http\Request;

class ProductUnitController extends Controller
{
    
    public function index()
    {
        return view('pages.product_unit.index');
    }


    public function create()
    {
        return view('pages.product_unit.create');
    }

    public function store(Request $request)
    {
        //
    }


    public function show($id)
    {
        return view('pages.product_unit.show');
    }


    public function edit($id)
    {
        return view('pages.product_unit.edit');
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
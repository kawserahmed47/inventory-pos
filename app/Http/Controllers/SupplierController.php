<?php

namespace App\Http\Controllers;

use App\Models\Supplier;
use Illuminate\Http\Request;

class SupplierController extends Controller
{
    
    public function index()
    {
        return view('pages.supplier.index');
    }


    public function create()
    {
        return view('pages.supplier.create');
    }

    public function store(Request $request)
    {
        //
    }


    public function show($id)
    {
        return view('pages.supplier.show');
    }


    public function edit($id)
    {
        return view('pages.supplier.edit');
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

<?php

namespace App\Http\Controllers;

use App\Models\Supplier;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SupplierController extends Controller
{
    
    public function index()
    {
        $data['suppliers'] = Supplier::all();
        return view('pages.supplier.index', $data);
    }


    public function create()
    {
        return view('pages.supplier.create');
    }

    public function store(Request $request)
    {
        $supplier = new Supplier();
        $supplier->name = $request->name;
        $supplier->description = $request->description;
        $supplier->created_by = Auth::id();
        $supplier->save();

        return redirect()->route('supplier.index');
    }


    public function show($id)
    {
        $data['supplier'] = Supplier::find($id);

        return view('pages.supplier.show',$data);
    }


    public function edit($id)
    {
        $data['supplier'] = Supplier::find($id);

        return view('pages.supplier.edit',$data);
    }


    public function update(Request $request, $id)
    {
        $supplier = Supplier::find($id);
        $supplier->name = $request->name;
        $supplier->description = $request->description;
        $supplier->updated_by = Auth::id();
        $supplier->save();

        return redirect()->route('supplier.index');
    }


    public function destroy($id)
    {
        $supplier = Supplier::find($id);
        $supplier->delete();
        return redirect()->route('supplier.index');
    }
}

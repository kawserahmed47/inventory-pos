<?php

namespace App\Http\Controllers;

use App\Models\Supplier;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Haruncpi\LaravelIdGenerator\IdGenerator;

class SupplierController extends Controller
{

    function generateIDNumber()
    {

        // $number = mt_rand(1000000000, 9999999999); // better than rand()
        $number =   IdGenerator::generate(['table' => 'suppliers', 'field'=>'id_no', 'length' => 8,  'prefix' =>100]);


        // call the same function if the barcode exists already
        if ($this->idNumberExists($number)) {
            return $this->generateIDNumber();
        }

        // otherwise, it's valid and can be used
        return $number;
    }

    function idNumberExists($number)
    {
        // query the database and return a boolean
        return Supplier::where('id_no', $number)->exists();
    }



    
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
        $supplier->id_no = $this->generateIDNumber();
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

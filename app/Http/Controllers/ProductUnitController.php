<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\ProductUnit;
use App\Models\Supplier;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Picqer;

class ProductUnitController extends Controller
{


    function generateBarcodeNumber() {
        $number = mt_rand(1000000000, 9999999999); // better than rand()

        // call the same function if the barcode exists already
        if ($this->barcodeNumberExists($number)) {
            return $this->generateBarcodeNumber();
        }

        // otherwise, it's valid and can be used
        return $number;
    }

    function barcodeNumberExists($number) {
        // query the database and return a boolean
        return ProductUnit::where('barcode',$number)->exists();
    }
    
    public function index()
    {
        $data['productUnits'] = ProductUnit::all();
        return view('pages.product_unit.index', $data);
    }


    public function create()
    {
        $data['products'] = Product::all();
        $data['suppliers'] = Supplier::all();
        return view('pages.product_unit.create', $data);
    }

    public function store(Request $request)
    {


        DB::beginTransaction();

        try {


            $productUnit = new ProductUnit();
            $productUnit->product_id = $request->product_id;
            $productUnit->supplier_id = $request->supplier_id;
            $productUnit->name = $request->name;
            $productUnit->slug = Str::slug($request->name, "-");
            $productUnit->packet_quantity = $request->packet_quantity;
            $productUnit->available_stock = $request->available_stock;
            $productUnit->supplier_price = $request->supplier_price;
            $productUnit->max_retail_price = $request->max_retail_price; 
            $productUnit->manufacture_date = $request->manufacture_date;
            $productUnit->expiration_date = $request->expiration_date;
            $productUnit->description = $request->description;
            $productUnit->created_by = Auth::id() ;
     
            if($request->barcode){
             $gettingBarcode= $request->barcode;
            }else{
             $gettingBarcode= $this->generateBarcodeNumber();
            }
     
              $productUnit->barcode = $gettingBarcode;
              if($gettingBarcode){
                  // This will output the barcode as HTML output to display in the browser
                  $generator = new Picqer\Barcode\BarcodeGeneratorHTML();
                  $productUnit->barcode_view= $generator->getBarcode($gettingBarcode, $generator::TYPE_CODE_128);
              }
     
     
    
            $productUnit->save();

            DB::commit();
            // all good

            return redirect()->route('productUnit.index');





        } catch (\Exception $e) {
            DB::rollback();
            // something went wrong

            return redirect()->back();
        }

    }


    public function show($id)
    {
        $data['products'] = Product::all();
        $data['suppliers'] = Supplier::all();
        $data['productUnit'] = ProductUnit::find($id);
        return view('pages.product_unit.show', $data);
    }


    public function edit($id)
    {
        $data['products'] = Product::all();
        $data['suppliers'] = Supplier::all();
        $data['productUnit'] = ProductUnit::find($id);
        return view('pages.product_unit.edit', $data);
    }


    public function update(Request $request, $id)
    {

        DB::beginTransaction();


        try{


            




        $productUnit = ProductUnit::find($id);
        $productUnit->product_id = $request->product_id;
        $productUnit->supplier_id = $request->supplier_id;
        $productUnit->name = $request->name;
        $productUnit->slug = Str::slug($request->name, "-");
        $productUnit->packet_quantity = $request->packet_quantity;
        $productUnit->available_stock = $request->available_stock;
        $productUnit->supplier_price = $request->supplier_price;
        $productUnit->max_retail_price = $request->max_retail_price;
        $productUnit->manufacture_date = $request->manufacture_date;
        $productUnit->expiration_date = $request->expiration_date;
        $productUnit->description = $request->description;
        $productUnit->updated_by = Auth::id() ;


        if($request->barcode){
            $gettingBarcode= $request->barcode;
           }else{
            $gettingBarcode= $this->generateBarcodeNumber();
           }
    
             $productUnit->barcode = $gettingBarcode;
             if($gettingBarcode){
                 // This will output the barcode as HTML output to display in the browser
                 $generator = new Picqer\Barcode\BarcodeGeneratorHTML();
                 $productUnit->barcodeView= $generator->getBarcode($gettingBarcode, $generator::TYPE_CODE_128);
             }

        $productUnit->save();
 


        DB::commit();
        // all good
        
        return redirect()->route('productUnit.index');





        } catch (\Exception $e) {
            DB::rollback();
            // something went wrong

            return redirect()->back();
        }






    }


    public function destroy($id)
    {
        $productUnit = ProductUnit::find($id);
        $productUnit->delete();
        return redirect()->route('productUnit.index');

    }
}
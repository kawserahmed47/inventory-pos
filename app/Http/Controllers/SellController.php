<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use App\Models\ProductUnit;
use App\Models\Sell;
use App\Models\SellDetails;
use Illuminate\Http\Request;
use Darryldecode\Cart\Cart;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class SellController extends Controller
{

    public function index()
    {
        $data['sells'] = Sell::with('sellDetails')->where('created_by', Auth::id())->orderBy('id', 'DESC')->get();
        return view('pages.sell.index', $data);
    }

    public function allSells(){
        $data['sells'] = Sell::with('sellDetails')->orderBy('id', 'DESC')->get();
        return view('pages.sell.all_sells', $data);
    }


    public function create()
    {

        $data['products'] = ProductUnit::with('product')->get();
        $data['customers'] = Customer::get();

        // return response()->json($data, 200);
       return view('pages.sell.create', $data);
    }

    public function receipt($sell_no){
        $data['sell'] = Sell::with( array('sellDetails'=>function($q1){
            $q1->with('product', 'productUnit')->get();
        }))->where('sell_no', $sell_no)->first(); 
        // return response()->json($data);
        return view('pages.sell.receipt', $data);
    }

    public function success($sell_no){
        $data['sell'] = Sell::with( array('sellDetails'=>function($q1){
            $q1->with('product', 'productUnit')->get();
        }))->where('sell_no', $sell_no)->first(); 

        return view('pages.sell.success', $data);
    }

 
    public function store(Request $request)
    {

        DB::beginTransaction();

        try {
            $carts =  \Cart::getContent();
            $sell = new Sell();
            $sell->sell_no = rand(100000,9999999);
    
            if($request->customer_id){
                $sell->customer_id = $request->customer_id;
            }
    
    
    
            $sell->total_product_unit_amount = number_format((float)\Cart::getTotal(), 2, '.', '');
            $sell->total_order_cost = number_format((float)\Cart::getTotal(), 2, '.', '');
            $sell->payment_method = $request->payment_method;
            if($request->payment_method == 1){
                $sell->given_amount = $request->given_amount;
                $sell->change_amount = $request->change_amount;
            }
            

    
            $sell->status = 1;
            $sell->description = $request->description;
            $sell->created_by = Auth::id();
    
    
            if($sell->save()){
    
                if ($carts) {
                    foreach ($carts as $key => $item) {
    
                        $product = ProductUnit::with('product', 'supplier')->where('id', $key)->first();
                        if($product){
                            $sellDetails = new SellDetails();
                            $sellDetails->sell_id = $sell->id;
                            $sellDetails->sell_no = $sell->sell_no;
    
                            if($request->customer_id){
                                $sellDetails->customer_id = $request->customer_id;
                            }
    
                            $sellDetails->supplier_id = $product->supplier_id;
                            $sellDetails->supplier_id_no = $product->supplier->supplier_id_no;
                            $sellDetails->brand_id = $product->product->brand_id;
                            $sellDetails->category_id = $product->product->category_id;
                            $sellDetails->product_type_id = $product->product->product_type_id;
                            $sellDetails->product_id = $product->product_id;
                            $sellDetails->product_unit_id = $product->id;

                            $sellDetails->product_unit_supplier_price = $product->supplier_price;
                            $sellDetails->product_unit_max_retail_price = $product->max_retail_price;
                            $sellDetails->order_quantity = $item->quantity;

                            $sellDetails->available_stock_after_order = $product->available_stock - $item->quantity;

                            $sellDetails->sub_total_product_unit_supplier_price =  $item->quantity * $product->supplier_price;
                            $sellDetails->sub_total_product_unit_max_retail_price = $item->quantity * $product->max_retail_price;
                            $sellDetails->manufacture_date = $product->manufacture_date;
                            $sellDetails->expiration_date = $product->expiration_date;
                            $sellDetails->created_by = Auth::id();
    
                            if( $product->available_stock >= $item->quantity){
    
                               if($sellDetails->save()){
                                    $product->available_stock = $product->available_stock - $item->quantity;
                                    $product->save();
                               }
    
                            }
    
    
    
    
                        }
    
                    }
                }
            }
    

            DB::commit();
            // all good

            \Cart::clear();
            $data['status'] = true;
            $data['sell_no'] = $sell->sell_no;
            $data['message'] = "Sell Successfully";

            return response()->json($data,200);
          

            // return view('pages.sell.receipt', $data);




        } catch (\Throwable $th) {
            //throw $th;

            DB::rollback();

            $data['status'] = false;
            $data['message'] = "Sell Failed";
            $data['error'] = $th;

            return response()->json($data,500);

        }

       

    }


    public function show( $id)
    {
        $data['sell'] = Sell::with(array('sellDetails'=>function($q1){
            $q1->with('product', 'productUnit')->get();
        }))->where('id', $id)->first();

        return view('pages.sell.show', $data);

    }

    public function edit( $id)
    {
        //
    }

  
    public function update(Request $request,  $id)
    {
        //
    }

 
    public function destroy($id)
    {
        //
    }
}

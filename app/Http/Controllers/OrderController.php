<?php

namespace App\Http\Controllers;

use App\Models\Order;

use Illuminate\Http\Request;
use Darryldecode\Cart\Cart;

use App\Models\Customer;
use App\Models\ProductUnit;
use App\Models\Sell;
use App\Models\OrderDetails;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;


class OrderController extends Controller
{
    
    public function index()
    {

        $data['orders'] = Order::with(array('orderDetails'=>function($q1){
            $q1->with('brand', 'category', 'product', 'productUnit')->get();
        }))->get();
        return view('pages.order.index', $data);
    }


    public function create()
    {
        return view('pages.order.create');
    }

    public function store(Request $request)
    {
        DB::beginTransaction();

        try {
            $carts =  \Cart::getContent();
            $order = new Order();
            $order->order_no = rand(100000,9999999);
    
            if($request->customer_id){
                $order->customer_id = $request->customer_id;
            }
    
    
    
            $order->total_product_unit_amount = number_format((float)\Cart::getTotal(), 2, '.', '');
            $order->total_order_cost = number_format((float)\Cart::getTotal(), 2, '.', '');
         
            

    
            $order->status = 1;
            $order->description = $request->description;
            $order->created_by = Auth::id();
    
    
            if($order->save()){
    
                if ($carts) {
                    foreach ($carts as $key => $item) {
    
                        $product = ProductUnit::with('product', 'supplier')->where('id', $key)->first();
                        if($product){
                            $orderDetails = new OrderDetails();
                            $orderDetails->order_id = $order->id;
                            $orderDetails->order_no = $order->order_no;
    
                            if($request->customer_id){
                                $orderDetails->customer_id = $request->customer_id;
                            }
    
                            $orderDetails->supplier_id = $product->supplier_id;
                            $orderDetails->supplier_id_no = $product->supplier->supplier_id_no;
                            $orderDetails->brand_id = $product->product->brand_id;
                            $orderDetails->category_id = $product->product->category_id;
                            $orderDetails->product_type_id = $product->product->product_type_id;
                            $orderDetails->product_id = $product->product_id;
                            $orderDetails->product_unit_id = $product->id;

                            $orderDetails->product_unit_supplier_price = $product->supplier_price;
                            $orderDetails->product_unit_max_retail_price = $product->max_retail_price;
                            $orderDetails->order_quantity = $item->quantity;

                            $orderDetails->available_stock_after_order = $product->available_stock - $item->quantity;

                            $orderDetails->sub_total_product_unit_supplier_price =  $item->quantity * $product->supplier_price;
                            $orderDetails->sub_total_product_unit_max_retail_price = $item->quantity * $product->max_retail_price;
                            $orderDetails->manufacture_date = $product->manufacture_date;
                            $orderDetails->expiration_date = $product->expiration_date;
                            $orderDetails->created_by = Auth::id();
    
                            if( $product->available_stock >= $item->quantity){
    
                               if($orderDetails->save()){
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
            $data['order_no'] = $order->order_no;
            $data['message'] = "Order Successfully";

            return response()->json($data,200);
          

            // return view('pages.order.receipt', $data);




        } catch (\Exception $ex) {
            //throw $th;

            DB::rollback();

            $data['status'] = false;
            $data['message'] = "Order Failed";
            $data['error'] = $ex;

            return response()->json($data,500);

        }
     }


    public function show($id)
    {

        $data['order'] = Order::with(array('orderDetails'=>function($q1){
            $q1->with('brand', 'category', 'product', 'productUnit')->get();
        }))->where('id', $id)->first();


        return view('pages.order.show', $data);
    }


    public function edit($id)
    {
        return view('pages.order.edit');
    }


    public function update(Request $request, $id)
    {
        
    }

    public function orderStatus(Request $request){



        try {
            
        $order = Order::find($request->id);
        $order->status = $request->status;
        $order->description = $request->description;
        $order->save();

        $data['status'] = true;
        $data['message'] = "Status Updated";

        } catch (\Exception $th) {
            //throw $th;
            $data['status'] = false;
            $data['message'] = "Status Failed to update";
            $data['error'] = $th;
        }


    }


    public function destroy($id)
    {
        Order::where('id', $id)->delete();
        OrderDetails::where('order_id', $id)->delete();

        return redirect()->route('order.index');

    }
}

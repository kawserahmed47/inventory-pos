<?php

namespace App\Http\Controllers;

use App\Models\ProductUnit;
use App\Models\User;
use App\Models\Category;
use Illuminate\Http\Request;
use Darryldecode\Cart\Cart;

class CartController extends Controller
{

    public function index()
    {
        $data['items'] = \Cart::getContent();
        return view('pages.cart', $data);
        
        
        // return response()->json($data,200);

    }


    public function viewCart(){


        $data['items'] = \Cart::getContent();
        $data['getTotal'] = \Cart::getTotal();
        $data['getSubTotal'] = \Cart::getSubTotal();
        $data['categories']= Category::with(array('children'=>function($q){
            $q->with('parent', 'children')->get();
        }))->get();
        return view('frontend.pages.cart', $data);

    }

    public function dynamicCartLoad(){

        $data['items'] = \Cart::getContent();
        $data['getTotal'] = \Cart::getTotal();
        $data['getSubTotal'] = \Cart::getSubTotal();
        $data['categories']= Category::with(array('children'=>function($q){
            $q->with('parent', 'children')->get();
        }))->get();
        return view('frontend.pages.dynamic_cart_load', $data);

    }

    public function checkout(){

        $data['items'] = \Cart::getContent();
        $data['getTotal'] = \Cart::getTotal();
        $data['getSubTotal'] = \Cart::getSubTotal();
        $data['categories']= Category::with(array('children'=>function($q){
            $q->with('parent', 'children')->get();
        }))->get();
        // $data['customer'] = User::with('customer')->where('id', Auth::id())->first();
        return view('frontend.pages.checkout', $data);

    }

    public function cartInfo(){
        $data['getTotal'] = \Cart::getTotal();
        $data['getSubTotal'] = \Cart::getSubTotal();
        $data['cartCount'] = count(\Cart::getContent());
        return response()->json($data,200);
    }

    public function cartBarLoad(){


        $data['items'] = \Cart::getContent();
        $data['getTotal'] = \Cart::getTotal();
        $data['getSubTotal'] = \Cart::getSubTotal();
        return view('frontend.layouts.cart_bar', $data);

    }

    public function cartClear(){

        \Cart::clear();


        $data['status'] = true;
        $data['message'] = "Cart clear successfully";
        return response()->json($data,200);

    }


    public function create()
    {
        //
    }


    public function addProduct(Request $request)
    {

        $productUnit = ProductUnit::with('product')->where('id', $request->id)->first();

        
        $data = array();
        $data['id']=$request->id;
        $data['name']= $productUnit->product->name.' '.$productUnit->name;
        $data['price']=$productUnit->max_retail_price;
        $data['quantity']=1;
        $data['attributes']['image']=$productUnit->image;


        \Cart::add($data);

        $data['status'] = true;
        $data['message'] = "Product added to cart successfully";
        return response()->json($data,200);
    }

    public function store(Request $request){

        //   $productUnit = ProductUnit::with('product')->where('id', $request->product_unit_id)->first();

        
          $data = array();
          $data['id']=$request->product_unit_id;
          $data['name']=$request->name;
          $data['price']=$request->price;
          $data['quantity']=$request->quantity;
          $data['attributes']['image']=$request->image;
  
  
          \Cart::add($data);
  
          $data['status'] = true;
          $data['message'] = "Product added to cart successfully";
          return response()->json($data,200);

    }


    public function show($id)
    {
        //
    }


    public function edit($id)
    {
        //
    }


    public function update(Request $request)
    {
        // \Cart::update($request->id, array(
        //     'quantity' => $request->quantity, // so if the current product has a quantity of 4, another 2 will be added so this will result to 6
        //   ));

        \Cart::update($request->id, array(
            'quantity' => array(
                'relative' => false,
                'value' => $request->quantity
            ),
          ));

          $data['status'] = true;
          $data['message'] = "Update successfully";
          return response()->json($data,200);
    }


    public function destroy(Request $request)
    {
        \Cart::remove($request->id);

        $data['status'] = true;
        $data['message'] = "Removed successfully";
        return response()->json($data,200);

    }
}

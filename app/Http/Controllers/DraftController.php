<?php

namespace App\Http\Controllers;

use App\Models\Draft;
use App\Models\Customer;
use App\Models\ProductUnit;
use App\Models\Sell;
use App\Models\SellDetails;

use App\Models\DraftDetails;

use Illuminate\Http\Request;
use Darryldecode\Cart\Cart;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;


class DraftController extends Controller
{
    
    public function index()
    {
        $data['drafts'] = Draft::with('draftDetails')->where('created_by', Auth::id())->orderBy('id', 'DESC')->get();
        return view('pages.draft.index', $data);
    }

    public function allDrafts(){

        $data['drafts'] = Draft::with('draftDetails')->orderBy('id', 'DESC')->get();
        return view('pages.draft.all_drafts', $data);

    }


    public function create()
    {
        return view('pages.draft.create');
    }

    public function store(Request $request)
    {

        DB::beginTransaction();

        try {
            $carts =  \Cart::getContent();
            $draft = new Draft();
            $draft->draft_no = rand(100000,9999999);
    
            if($request->customer_id){
                $draft->customer_id = $request->customer_id;
            }
    
    
    
            $draft->total_product_unit_amount = number_format((float)\Cart::getTotal(), 2, '.', '');
            $draft->total_order_cost = number_format((float)\Cart::getTotal(), 2, '.', '');

            

    
            $draft->status = 1;
            $draft->description = $request->description;
            $draft->created_by = Auth::id();
    
    
            if($draft->save()){
    
                if ($carts) {
                    foreach ($carts as $key => $item) {
    
                        $product = ProductUnit::with('product', 'supplier')->where('id', $key)->first();
                        if($product){
                            $draftDetails = new DraftDetails();
                            $draftDetails->draft_id = $draft->id;
                            $draftDetails->draft_no = $draft->draft_no;
    
                            if($request->customer_id){
                                $draftDetails->customer_id = $request->customer_id;
                            }
    
                            $draftDetails->supplier_id = $product->supplier_id;
                            $draftDetails->supplier_id_no = $product->supplier->supplier_id_no;
                            $draftDetails->brand_id = $product->product->brand_id;
                            $draftDetails->category_id = $product->product->category_id;
                            $draftDetails->product_type_id = $product->product->product_type_id;
                            $draftDetails->product_id = $product->product_id;
                            $draftDetails->product_unit_id = $product->id;

                            $draftDetails->product_unit_supplier_price = $product->supplier_price;
                            $draftDetails->product_unit_max_retail_price = $product->max_retail_price;
                            $draftDetails->order_quantity = $item->quantity;

                            $draftDetails->available_stock_after_order = $product->available_stock - $item->quantity;

                            $draftDetails->sub_total_product_unit_supplier_price =  $item->quantity * $product->supplier_price;
                            $draftDetails->sub_total_product_unit_max_retail_price = $item->quantity * $product->max_retail_price;
                            $draftDetails->manufacture_date = $product->manufacture_date;
                            $draftDetails->expiration_date = $product->expiration_date;
                            $draftDetails->created_by = Auth::id();
                            $draftDetails->save();
    
                      
    
    
    
    
                        }
    
                    }
                }
            }
    

            DB::commit();
            // all good

            \Cart::clear();
            $data['status'] = true;
            $data['draft_no'] = $draft->draft_no;
            $data['message'] = "Draft Successfully";

            return response()->json($data,200);
          

            // return view('pages.draft.receipt', $data);




        } catch (\Exception $ex) {
            //throw $th;

            DB::rollback();

            $data['status'] = false;
            $data['message'] = "Draft Failed";
            $data['error'] = $ex;

            return response()->json($data,500);

        }

       

    }



    public function show($id)
    {

        $data['draft'] = Draft::with(array('draftDetails'=>function($q1){
            $q1->with('product', 'productUnit')->get();
        }))->where('id', $id)->first();

        return view('pages.draft.show',$data);
    }


    public function edit($id)
    {
        // return view('pages.draft.edit');

        $drafts = DraftDetails::with('product', 'productUnit')->where('draft_id', $id)->get();
        if($drafts){
            \Cart::clear();

            foreach ($drafts as $draft) {

                $data = array();
                $data['id']=$draft->product_unit_id;
                $data['name']= $draft->product->name.' '.$draft->productUnit->name;
                $data['price']=$draft->product_unit_max_retail_price;
                $data['quantity']=$draft->order_quantity;
                $data['attributes']['image']=$draft->productUnit->image;
        
        
                \Cart::add($data);
            }


        DraftDetails::where('draft_id', $id)->delete();
        Draft::where('id', $id)->delete();
        }

        return redirect()->route('sell.create');

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

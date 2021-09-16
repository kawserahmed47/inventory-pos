@extends('layouts.app', ['activePage' => 'order', 'titlePage' => __('Order List')])

@section('content')
    <div class="content">
        <div class="container-fluid">



            <div class="row">
                <div class="col-md-12">


                    <div class="card ">

                        <div class="card-header card-header-primary">

                            <div class="row">
                                <div class="col-md-6">
                                    <h4 class="card-title">{{ __('Order Info') }}</h4>
                                    <p class="card-category">Draft NO: <strong>{{$order->order_no}}</strong></p>
                                    <p class="card-category">Total Amout: <strong>{{$order->total_order_cost}}</strong></p>


                                </div>
                                <div class="col-md-6">
                                    <h4 class="card-title">{{ __('Customer Info') }}</h4>
                                    <p class="card-category">Customer Name: {{$order->customer_name}}</p>
                                    <p class="card-category">Address: {{$order->address}}</p>


                                </div>

                            </div>
                           
                        </div>

                            <div class="card-body">
                                <div class="row">
                                    <div class="col-12 text-right">
                                        <a href="{{route('order.index')}}" class="btn btn-sm btn-primary">View List</a>
                                    </div>
                                </div>
                                <div class="table-responsive">
                                    <table class="table">
                                        <thead class=" text-primary">
                                            <tr>
                                                <th>#SL</th>
                                                <th>Image</th>
                                                <th>Product Name</th>
                                                <th>
                                                   Order Quantity
                                                </th>
                                                <th>
                                                    MRP
                                                </th>
                                                <th>
                                                    Sub Total
                                                </th>
                                               
                                            </tr>
                                        </thead>
                                        <tbody>

                                            @if ($order->orderDetails)

                                                @foreach ($order->orderDetails as $key=>$orderDetail)
                                                <tr>
                                                    <td>
                                                        {{++$key}}
                                                    </td>
                                                    <td>
                                                        <img src="{{$orderDetail->productUnit->image}}" alt="">
                                                    </td>
                                                    <td>
                                                        {{$orderDetail->product->name}}  {{$orderDetail->productUnit->name}}
                                                    </td>
                                                    <td>
                                                       {{$orderDetail->order_quantity}}
                                                    </td>
                                                    <td>
                                                        {{$orderDetail->product_unit_max_retail_price}}
                                                    </td>
                                                    <td>
                                                        {{$orderDetail->sub_total_product_unit_max_retail_price}}
                                                    </td>
                                               
                                                </tr>
    
                                                @endforeach
                                                
                                            @endif
                                            


                                        </tbody>
                                    </table>
                                </div>
                            </div>




                    </div>
                </div>
            </div>





        </div>
    </div>
@endsection

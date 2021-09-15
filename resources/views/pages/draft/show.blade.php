@extends('layouts.app', ['activePage' => 'draftList', 'titlePage' => __('Draft List')])

@section('content')
    <div class="content">
        <div class="container-fluid">



            <div class="row">
                <div class="col-md-12">


                    <div class="card ">

                        <div class="card-header card-header-primary">

                            <div class="row">
                                <div class="col-md-6">
                                    <h4 class="card-title">{{ __('Draft Info') }}</h4>
                                    <p class="card-category">Draft NO: <strong>{{$draft->draft_no}}</strong></p>
                                    <p class="card-category">Total Amout: <strong>{{$draft->total_order_cost}}</strong></p>


                                </div>
                                <div class="col-md-6">
                                    <h4 class="card-title">{{ __('Customer Info') }}</h4>
                                    <p class="card-category">Customer Name: {{$draft->customer_name}}</p>
                                    <p class="card-category">Address: {{$draft->address}}</p>


                                </div>

                            </div>
                           
                        </div>

                            <div class="card-body">
                                <div class="row">
                                    <div class="col-12 text-right">
                                        <a href="{{route('draft.index')}}" class="btn btn-sm btn-primary">View List</a>
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

                                            @if ($draft->draftDetails)

                                                @foreach ($draft->draftDetails as $key=>$draftDetail)
                                                <tr>
                                                    <td>
                                                        {{++$key}}
                                                    </td>
                                                    <td>
                                                        <img src="{{$draftDetail->productUnit->image}}" alt="">
                                                    </td>
                                                    <td>
                                                        {{$draftDetail->product->name}}  {{$draftDetail->productUnit->name}}
                                                    </td>
                                                    <td>
                                                       {{$draftDetail->order_quantity}}
                                                    </td>
                                                    <td>
                                                        {{$draftDetail->product_unit_max_retail_price}}
                                                    </td>
                                                    <td>
                                                        {{$draftDetail->sub_total_product_unit_max_retail_price}}
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

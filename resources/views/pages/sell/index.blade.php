@extends('layouts.app', ['activePage' => 'sellList', 'titlePage' => __('Sell List')])

@section('content')
    <div class="content">
        <div class="container-fluid">



            <div class="row">
                <div class="col-md-12">


                    <div class="card ">

                        <div class="card-header card-header-primary">
                            <h4 class="card-title">{{ __('View Sells') }}</h4>
                            <p class="card-category">{{ __('Sell information') }}</p>
                        </div>

                            <div class="card-body">
                                <div class="row">
                                    <div class="col-12 text-right">
                                        <a href="{{route('sell.create')}}" class="btn btn-sm btn-primary">Create new</a>
                                    </div>
                                </div>
                                <div class="table-responsive">
                                    <table class="table">
                                        <thead class=" text-primary">
                                            <tr>
                                                <th>#SL</th>
                                                <th>Order No</th>
                                                <th>Customer Name</th>
                                                <th>
                                                    Paid Amount
                                                </th>
                                                <th>
                                                    Description
                                                </th>
                                                <th>
                                                    Creation date
                                                </th>
                                                <th class="text-right">
                                                    Actions
                                                </th>
                                            </tr>
                                        </thead>
                                        <tbody>

                                            @if ($sells)

                                                @foreach ($sells as $key=>$sell)
                                                <tr>
                                                    <td>
                                                        {{++$key}}
                                                    </td>
                                                    <td>
                                                        {{$sell->sell_no}}
                                                    </td>
                                                    <td>
                                                       {{$sell->name}}
                                                    </td>
                                                    <td>
                                                        {{$sell->total_order_cost}}
                                                    </td>
                                                    <td>
                                                        {{$sell->description}}
                                                    </td>
                                                    <td>
                                                        {{ date('Y-m-d h:i a ', strtotime( $sell->updated_at))}}

                                                    </td>
                                                    <td class="td-actions text-right">
                                                        {{-- <a rel="tooltip" class="btn btn-success btn-link" href="{{route('sell.edit', $sell->id)}}"
                                                            data-original-title="" title="Edit">
                                                            <i class="material-icons">edit</i>
                                                            <div class="ripple-container"></div>
                                                        </a><br> --}}

                                                        <a rel="tooltip" class="btn btn-dark btn-link" href="{{route('sell.show', $sell->id)}}"
                                                            data-original-title="" title="View">
                                                            <i class="material-icons">visibility</i>
                                                            <div class="ripple-container"></div>
                                                        </a>


                                                        <form method="POST"  action="{{route('sell.destroy', $sell->id)}}">
                                                            @csrf
                                                            @method('delete')
    
                                                            <button onclick="return(confirm('Are you sure?'))" type="submit" title="Delete"  rel="tooltip" class="btn btn-danger btn-link"> <i class="material-icons">close</i>
                                                                <div class="ripple-container"></div></button>
    
                                                        </form>


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

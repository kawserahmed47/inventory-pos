@extends('layouts.app', ['activePage' => 'order', 'titlePage' => __('Order List')])

@section('content')
    <div class="content">
        <div class="container-fluid">



            <div class="row">
                <div class="col-md-12">


                    <div class="card ">

                        <div class="card-header card-header-primary">
                            <h4 class="card-title">{{ __('View Orders') }}</h4>
                            <p class="card-category">{{ __('Order information') }}</p>
                        </div>

                            <div class="card-body">
                                <div class="row">
                                    <div class="col-12 text-right">
                                        {{-- <a href="{{route('order.create')}}" class="btn btn-sm btn-primary">Create new</a> --}}
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

                                            @if ($orders)

                                                @foreach ($orders as $key=>$order)
                                                <tr>
                                                    <td>
                                                        {{++$key}}
                                                    </td>
                                                    <td>
                                                        {{$order->order_no}}
                                                    </td>
                                                    <td>
                                                       {{$order->name}}
                                                    </td>
                                                    <td>
                                                        {{$order->total_order_cost}}
                                                    </td>
                                                    <td>
                                                        {{$order->description}}
                                                    </td>
                                                    <td>
                                                        {{ date('Y-m-d h:i a ', strtotime( $order->updated_at))}}

                                                    </td>
                                                    <td class="td-actions text-right">
                                                        <a rel="tooltip" class="btn btn-success btn-link editBtn" data-id="{{$order->id}}"  data-toggle="modal" data-target="#exampleModal"  href="#"
                                                            data-original-title="" title="Edit">
                                                            <i class="material-icons">edit</i>
                                                            <div class="ripple-container"></div>
                                                        </a><br>

                                                        <a rel="tooltip" class="btn btn-dark btn-link" href="{{route('order.show', $order->id)}}"
                                                            data-original-title="" title="View">
                                                            <i class="material-icons">visibility</i>
                                                            <div class="ripple-container"></div>
                                                        </a>


                                                        <form method="POST"  action="{{route('order.destroy', $order->id)}}">
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


    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title">Edit Order</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>

            <form id="orderUpateForm" method="post">
                @csrf
                <div class="modal-body">
                    <input type="hidden" name="id" value="" class="editBtn">

                    <select name="status" class="form-control">
                        <option value="">--Select Status--</option>
                        <option value="1">Pending</option>
                        <option value="2">Cancel</option>
                        <option value="3">Delived</option>
                    </select> <br>
                    <textarea name="description" class="form-control"  placeholder="Description" cols="30" rows="5"></textarea>

                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary">Save changes</button>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </form>

          </div>
        </div>
      </div>
@endsection

@push('js')

<script>
    $(document).ready(function(){

        $('.editBtn').on('click', function(){

            var id = $(this).data('id');

            $('.editBtn').val(id);

            


        })

        $('#orderUpateForm').on('submit', function(e){
            e.preventDefault();
            

            var formData = $(this).serialize();

            $.ajax({
                url: "{{url('order-status-change')}}",
                type: 'post',
                data: formData,
                success: function (response) {
                    const Toast = Swal.mixin({
                            toast: true,
                            position: 'top-end',
                            showConfirmButton: false,
                            timer: 3000,
                         
                            })

                            Toast.fire({
                                type: 'success',
                                title: 'Update successfully'
                            })  
                },
                error:function(err){

                }
            })

        })

    })
</script>
    
@endpush

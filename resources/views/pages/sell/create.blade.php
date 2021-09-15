@extends('layouts.app', ['activePage' => 'sellCreate', 'titlePage' => __('Sell')])

@section('content')
  <div class="content">
    <div class="container-fluid">

        <div class="row" id="product-section" style="display: none">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header card-header-success">
                        <div class="row">
                            <div class="col-md-3">
                                <button class="btn btn-secondary" type="button">All Products</button>

                            </div>
                            <div class="col-md-3">
                                <Select class="form-control">
                                    <option value="">Search By Category</option>
                                    <option value="">Category 1</option>
                                    <option value=""> -Subcategory 1</option>
                                </Select>
                            </div>
                            <div class="col-md-3">
                                <Select class="form-control">
                                    <option value="">Search By Brand</option>
                                    <option value="">Category 1</option>
                                    <option value=""> -Subcategory 1</option>
                                </Select>
                            </div>

                            <div class="col-md-3">
                                <Select class="form-control">
                                    <option value="">Search By Supplier</option>
                                    <option value="">Category 1</option>
                                    <option value=""> -Subcategory 1</option>
                                </Select>
                            </div>

                        </div>

                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>SL</th>
                                        <th>Image</th>
                                        <th>Product</th>
                                        <th>Price</th>
                                        <th>Discount</th>
                                        <th>Quantity</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @if ($products)

                                    @foreach ($products as $key=>$unit)

                                    <form method="POST" class="addToCart">

                                        @csrf

                                        <input type="hidden" name="product_unit_id" value="{{$unit->id}}">
                                        <input type="hidden" name="image" value="{{$unit->image}}">
                                        <input type="hidden" name="price" value="{{$unit->max_retail_price}}">
                                        <input type="hidden" name="name" value="{{$unit->product->name}} {{$unit->name}}">
                                        {{-- <input type="hidden" name="quantity" value="1"> --}}
                                        <tr>
                                            <th>{{++$key}}</th>
                                            <th>
                                                @if ($unit->image)
                                                    <img src="{{$unit->image}}" alt="" srcset="">

                                                @else 
                                                    <img src="{{$unit->image}}" alt="Product Image" srcset="">
                                                    
                                                @endif
                                                
                                            </th>
                                            <th>
                                                {{$unit->product->name}} {{$unit->name}}
                                            </th>
                                            <th>{{$unit->max_retail_price}}</th>
                                            <th>0%</th>
                                            <th>
                                                <input  name="quantity" type="number" min="1" max={{$unit->available_stock}} value="1">
                                            </th>
                                            <th><button class="btn btn-sm btn-primary" type="submit">Add To Cart</button></th>
                                        </tr>

                                         
                                    </form>
                                        
                                    @endforeach
                                        
                                    @endif
                                  

                                </tbody>

                            </table>

                        </div>
                    </div>

                    <div class="card-footer">
                    </div>

                </div>

            </div>

        </div>


      <div class="row">
        <div class="col-md-8">
      

            <div class="card ">

              <div class="card-header card-header-primary">
                <h4 class="card-title">{{ __('Select Product') }} <span class="float-right"><button id="show-grid-btn" onclick="showGrid()" class="btn btn-secondary">Show Grid</button> <button class="btn btn-secondary" id="hide-grid-btn" onclick="hideGrid()" style="display: none" >Hide Grid</button> </span> </h4>
                <select name="product_unit_id" class="form-control selectProduct">
                    <option value="">Search Product or Scan By Barcode</option>
                    @foreach ($products as $unit)
                        <option value="{{$unit->id}}"> @if($unit->product){{$unit->product->name}}@endif  {{$unit->name}}  </option>
                    @endforeach
                </select>
              </div>

              <div class="card-body ">

               <div class="row">
                   <div class="col-md-12">
                       <div class="table responsive">
                           <table class="table">
                               <thead>
                                   <tr>
                                       <th>#SL</th>
                                       <th>Image</th>
                                       <th>Product</th>
                                       <th>Price</th>
                                       <th>Discount</th>
                                       <th>Quantity</th>
                                       <th>Total</th>
                                   </tr>
                               </thead>
                               <tbody class="cartBody">

                               </tbody>

                           </table>

                       </div>

                   </div>

               </div>

             

              



              </div>

              <div class="card-footer">

                <div class="form-row">
                   

                    <label for="couponCheck"> <input type="checkbox" class="" name="couponCheck" value="1" id="couponCheck"> Do you have any discount code?</label>
                </div>

              </div>


              

            </div>


            <div class="card mt-5 couponDiv" style="display: none">

                <div class="card-header card-header-info">
                  <h4 class="card-title">{{ __('Select Discount Type') }}</h4>
                  <select name="" class="form-control">
                      <option value=""></option>
                      <option value="">Apply Coupon Code</option>
                      <option value="">Apply Givt Voucher</option>
                      <option value="">Apply Reward Points</option>
                  </select>
                </div>
  
                <div class="card-body ">
  
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form group">
                                <input type="text" name="" class="form-control" placeholder="Apply Code">
                            </div>
                            <div class="form group">
                                <button type="button" class="btn btn-success">Apply</button>
                            </div>
    
    
                        </div>
    
                    </div>
    
               
  
                
  
  
  
                </div>
  
  
                
  
            </div>


        </div>
        <div class="col-md-4">
      
        <form class="confirmSellForm" method="POST">
            @csrf
            <div class="card ">

              <div class="card-header card-header-warning">
                <h4 class="card-title">{{ __('Select Customer') }}  <span class="float-right"><button class="btn btn-sm btn-secondary">Add New</button></span></h4>
                <select name="customer_id" class="form-control">
                    <option value="">Search Customer or Scan By Card</option>
                    @if ($customers)

                    @foreach ($customers as $customer)
                    <option value="{{$customer->id}}">{{$customer->name}}</option>

                    @endforeach
                        
                    @endif
                </select>
                
              </div>

              <div class="card-body ">

             

                <div class="row">
                    <div class="col-md-12">

                        <table class="table">
                            <tr>
                                <th>Product Total :</th>
                                <th>  <span class="productSubtotal">  {{Cart::getSubTotal()}} </span>  /=</th>
                            </tr>
                            {{-- <tr>
                                <th>Coupon Discount :</th>
                                <th>00/=</th>
                            </tr>
                            <tr>
                                <th>Reward Discount :</th>
                                <th>00/=</th>
                            </tr>
                            <tr>
                                <th>Gift Card Amount :</th>
                                <th>00/=</th>
                            </tr>
                            <tr>
                                <th>Total Less :</th>
                                <th>00/=</th>
                            </tr>
                            <tr>
                                <th>Subtotal :</th>
                                <th>00/=</th>
                            </tr>
                            <tr>
                                <th>Vat(4%) :</th>
                                <th>00/=</th>
                            </tr>
                            <tr>
                                <th>Delivery Charge :</th>
                                <th>00/=</th>
                            </tr> --}}
                            <tr>
                                <th>Total Payable :</th>
                                <th> <span class="totalPayable">  {{Cart::getTotal()}} </span> /=</th>
                                <input type="hidden" name="total_product_unit_amount" class="totalProductAmount" value=" {{Cart::getTotal()}}">
                            </tr>
                           
                        </table>

                    </div>

                </div>



                @if(Cart::getTotal()>0)

                <div class="row">
                    <div class="col-md-12">
                        <input type="radio" class="payment_method" required name="payment_method" value="1" id="cash">
                        <label for="cash">Cash</label>
                        <input type="radio" class="payment_method"  name="payment_method" value="2" id="card">
                        <label for="card">Card</label>
                        <input type="radio" class="payment_method"  name="payment_method" value="3" id="mobile">
                        <label for="mobile">Mobile Banking</label>
                        <input type="radio" class="payment_method"  name="payment_method" value="4" id="other">
                        <label for="other">Other</label>
                    </div>
                </div>

                <div class="row forCashPayment" style="display: none" >
                    <div class="col-md-6">
                        <label for="given_amount">Given Amount</label>
                        <input class="form-control"  type="number" name="given_amount"  id="given_amount">                      
                    </div>

                    <div class="col-md-6">
                        <label for="change_amount">Chagne Amount</label> <br>
                        <span id="change_amount" class="change_amounts">0.00 /=</span>
                        <input type="hidden" class="change_amount_i" name="change_amount" value="0.00">
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-12">
                        <label for="comment_payment">Comment</label>
                        <textarea class="form-control" name="description" id="comment_payment" rows="3"></textarea>
                    </div>

                </div>

                
                <div class="row text-center">
                    <div class="col-md-12">
                        <button type="submit" class="btn btn-success btn-block">{{ __(' Confirm Sell ') }}</button>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6 float-left">
                        <button type="button" onclick="saveSell()" class="btn btn-info  btn-block">{{ __('Save') }}</button>

                    </div>
                    <div class="col-md-6 float-right">
                        <button type="button" onclick="cancelSell()" class="btn btn-danger  btn-block">{{ __('Cancel') }}</button>

                    </div>

                </div>
                @endif



               
              



              </div>


              <div class="card-footer">
                  



                
              </div>


            </div>
          </form>
        </div>
      </div>





    </div>
  </div>
@endsection

@push('js')

<script>

viewCart();
cartInfo();

    $(document).ready(function(){


            if($('#couponCheck').prop('checked')) {
                $(".couponDiv").show();
            } else {
                $(".couponDiv").hide();
            }

            $('#couponCheck').on('click', function(){
                    if($('#couponCheck').prop('checked')) {
                    $(".couponDiv").show();
                } else {
                    $(".couponDiv").hide();
                }
            })

            $('.payment_method').on('change', function(){
                var paymentMethod = $(this).val();
                if(paymentMethod == 1){
                    $('.forCashPayment').show();
                    $('#given_amount').attr('required', 'required');
                }else{
                    $('#given_amount').removeAttr('required');

                    $('.forCashPayment').hide();

                }
            })

            $('#given_amount').on('keyup', function(){
                var totalAmount = $('.totalProductAmount').val();
                var givenAmount = $(this).val();
                var changeAmount = (givenAmount-totalAmount);

                $('.change_amount_i').val(changeAmount);
                $('.change_amounts').html(changeAmount);
              


            })




        $('.addToCart').on('submit', function(e){
            e.preventDefault();
            

            var formData = $(this).serialize();
            $.ajax({
                url: "{{route('cart.store')}}",
                type: "post",
                data: formData,
                success:function(response){

                    if(response.status){
                        const Toast = Swal.mixin({
                            toast: true,
                            position: 'top-end',
                            showConfirmButton: false,
                            timer: 3000,
                         
                            })

                            Toast.fire({
                                type: 'success',
                                title: 'Added successfully'
                            })
                  
                           
                           
                        viewCart();
                        cartInfo();
                        location.reload();

                    }else{
                       
                        const Toast = Swal.mixin({
                            toast: true,
                            position: 'top-end',
                            showConfirmButton: false,
                            timer: 3000,
                         
                            })

                            Toast.fire({
                                type: 'error',
                                title: 'Error!'
                            })
                        
                    }

                },
                error:function(err){

                }
            });

        })

        $('.selectProduct').on('change', function(e){
            e.preventDefault();

            var id = $(this).val();
            if(id){
                $.ajax({
                        url: "{{route('cart.addProduct')}}",
                        type: "get",
                        data: {
                            id : id,
                        },
                        success:function(response){

                            const Toast = Swal.mixin({
                                        toast: true,
                                        position: 'top-end',
                                        showConfirmButton: false,
                                        timer: 3000,
                                    
                                        })

                                        Toast.fire({
                                            type: 'success',
                                            title: 'Added successfully'
                                        })

                            viewCart();
                            cartInfo();

                            location.reload();


                        },
                        error:function(err){

                        }
                });
            }

        })


        $('.confirmSellForm').on('submit', function(e){
            e.preventDefault();

            if(confirm("Are you sure to confirm sell?")){

                var formData = $(this).serialize();
            $.ajax({
                    url: "{{route('sell.store')}}",
                    type: "post",
                    data: formData,
                    success:function(response){

                        const Toast = Swal.mixin({
                                    toast: true,
                                    position: 'top-end',
                                    showConfirmButton: false,
                                    timer: 3000,
                                
                                    })

                                    Toast.fire({
                                        type: 'success',
                                        title: 'Sell successfully'
                                    })

                                    setTimeout(function(){
                                        window.open(APP_URL+"/sells/success/"+response.sell_no); 

                                    },3000)

                                    // location.reload();



                    },
                    error:function(err){

                        const Toast = Swal.mixin({
                                    toast: true,
                                    position: 'top-end',
                                    showConfirmButton: false,
                                    timer: 3000,
                                
                                    })

                                    Toast.fire({
                                        type: 'error',
                                        title: 'Server Error'
                                    })

                    }
            });

            }else{
                return false;
            }

           

        
        
        
        })
        
    })

    function showGrid(){
        $('#product-section').show();
        $('#show-grid-btn').hide();
        $('#hide-grid-btn').show();

    }

    function hideGrid(){
        $('#product-section').hide();
        $('#hide-grid-btn').hide();
        $('#show-grid-btn').show();

    }

    function viewCart(){


        $.ajax({
            url: "{{route('cart.index')}}",
            type: "get",
            success:function(response){

             $('.cartBody').html(response);
             

            },
            error:function(err){

            }
        });
    }

    function cartInfo(){


        $.ajax({
            url: "{{route('cart.info')}}",
            type: "get",
            success:function(response){

            $('.productSubtotal').html(response.getSubTotal);
            $('.totalPayable').html(response.getTotal)
            $('.totalProductAmount').val(response.getTotal)


            },
            error:function(err){

            }
        });
    }

  function  removeItem(id){

        $.ajax({
            url: "{{route('cart.remove')}}",
            type: "get",
            data: {
                id : id
            },
            success:function(response){

                const Toast = Swal.mixin({
                            toast: true,
                            position: 'top-end',
                            showConfirmButton: false,
                            timer: 3000,
                         
                            })

                            Toast.fire({
                                type: 'success',
                                title: 'Removed successfully'
                            })
                viewCart();
                cartInfo();

            },
            error:function(err){

            }
        });
  }

  function updateItem(id){


    var $selectRow =  $('.cartUpdateRow-'+id);

    var $findQuantity = $selectRow.find('.quantity')

    var quantity =  $findQuantity.val();

    console.log(quantity);

    $.ajax({
            url: "{{route('cart.quantity')}}",
            type: "get",
            data: {
                id : id,
                quantity: quantity
            },
            success:function(response){

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
                viewCart();
                cartInfo();

            },
            error:function(err){

            }
    });



  }





  function saveSell(){


        if(confirm("Are you sure to save ?")){
            var formData = $('.confirmSellForm').serialize();
            $.ajax({
                    url: "{{route('draft.store')}}",
                    type: "post",
                    data: formData,
                    success:function(response){

                        const Toast = Swal.mixin({
                                    toast: true,
                                    position: 'top-end',
                                    showConfirmButton: false,
                                    timer: 3000,
                                
                                    })

                                    Toast.fire({
                                        type: 'success',
                                        title: 'Saved successfully'
                                    })

                                    setTimeout(function(){
                                    location.reload();

                                    },3000)




                    },
                    error:function(err){

                        const Toast = Swal.mixin({
                                    toast: true,
                                    position: 'top-end',
                                    showConfirmButton: false,
                                    timer: 3000,
                                
                                    })

                                    Toast.fire({
                                        type: 'error',
                                        title: 'Server Error'
                                    })

                    }
            });


        }else{
            return false
        }

          
     


  
  
  
  }

  function cancelSell(){

      if(confirm("Are you sure to cancel ?")){

        $.ajax({
            url: "{{route('cart.cancel')}}",
            type: "get",
            success:function(response){

                const Toast = Swal.mixin({
                            toast: true,
                            position: 'top-end',
                            showConfirmButton: false,
                            timer: 3000,
                         
                            })

                            Toast.fire({
                                type: 'success',
                                title: 'Cancel successfully'
                            })

                            setTimeout(function(){
                                location.reload();

                            },2000)



            },
            error:function(err){

            }
    });

      }

  

  }


</script>
    
@endpush
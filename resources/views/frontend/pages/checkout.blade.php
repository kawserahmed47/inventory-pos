@extends('frontend.master')

@section('content')

<div class="page-header text-center" style="background-image: url('assets/images/page-header-bg.jpg')">
    <div class="container">
        <h1 class="page-title">Checkout<span>Shop</span></h1>
    </div><!-- End .container -->
</div><!-- End .page-header -->


<nav aria-label="breadcrumb" class="breadcrumb-nav">
    <div class="container">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="index-32.html">Home</a></li>
            <li class="breadcrumb-item"><a href="#">Shop</a></li>
            <li class="breadcrumb-item active" aria-current="page">Checkout</li>
        </ol>
    </div><!-- End .container -->
</nav><!-- End .breadcrumb-nav -->

<div class="page-content">
    <div class="checkout">
        <div class="container">
       
            <form method="POST" id="checkoutForm">

                @csrf

                <div class="row">
                    <div class="col-lg-9">
                        <h2 class="checkout-title">Billing Details</h2><!-- End .checkout-title -->
                            <div class="row">
                                <div class="col-sm-6">
                                    <label>First Name *</label>
                                    <input type="text" class="form-control" required>
                                </div><!-- End .col-sm-6 -->

                                <div class="col-sm-6">
                                    <label>Last Name *</label>
                                    <input type="text" class="form-control" required>
                                </div><!-- End .col-sm-6 -->
                            </div><!-- End .row -->

                            <label>Company Name (Optional)</label>
                            <input type="text" class="form-control">


                            <label>Full address *</label>
                            <input type="text" class="form-control" placeholder="" required>

                       

                            <div class="row">
                                <div class="col-sm-6">
                                    <label>Email address *</label>
                                    <input type="email" class="form-control" required>
                                </div><!-- End .col-sm-6 -->

                                <div class="col-sm-6">
                                    <label>Phone *</label>
                                    <input type="tel" class="form-control" required>
                                </div><!-- End .col-sm-6 -->
                            </div><!-- End .row -->

                           

                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="checkout-create-acc">
                                <label class="custom-control-label" for="checkout-create-acc">Create an account?</label>
                            </div><!-- End .custom-checkbox -->

                          

                            <label>Order notes (optional)</label>
                            <textarea class="form-control" cols="30" rows="4" placeholder="Notes about your order, e.g. special notes for delivery"></textarea>
                    </div><!-- End .col-lg-9 -->
                    <aside class="col-lg-3">
                        <div class="summary">
                            <h3 class="summary-title">Your Order</h3><!-- End .summary-title -->

                            <table class="table table-summary">
                                <thead>
                                    <tr>
                                        <th>Product</th>
                                        <th>Quantity</th>
                                        <th>Total</th>
                                    </tr>
                                </thead>

                                <tbody>

                                    @if ($items)

                                        @foreach ($items as $item)
                                        <tr>
                                            <td><a href="#">{{$item->name}}</a></td>
                                            <td> <span> {{$item->price}} x {{$item->quantity}} </span></td>
                                            <td>{{$item->getPriceSum()}}</td>
                                        </tr>
                                        @endforeach
                                        
                                    @endif
                                  



                                    <tr class="summary-subtotal">
                                        <td>Subtotal:</td>
                                        <td></td>
                                        <td>{{$getSubTotal}}</td>
                                    </tr><!-- End .summary-subtotal -->
                                    <tr>
                                        <td>Shipping:</td>
                                        <td></td>
                                        <td>Free shipping</td>
                                    </tr>
                                    <tr class="summary-total">
                                        <td>Total:</td>
                                        <td></td>
                                        <td>{{$getSubTotal}}</td>
                                    </tr><!-- End .summary-total -->
                                </tbody>
                            </table><!-- End .table table-summary -->

                            <div class="accordion-summary" id="accordion-payment">
                               

                             

                                <div class="card">
                                    <div class="card-header" id="heading-3">
                                        <h2 class="card-title">
                                            <a class="collapsed" role="button" data-toggle="collapse" href="#collapse-3" aria-expanded="false" aria-controls="collapse-3">
                                                Cash on delivery
                                            </a>
                                        </h2>
                                    </div><!-- End .card-header -->
                                    <div id="collapse-3" class="collapse" aria-labelledby="heading-3" data-parent="#accordion-payment">
                                        <div class="card-body">
                                            Please keep ready with order amount for smootly delivery. 
                                        </div><!-- End .card-body -->
                                    </div><!-- End .collapse -->
                                </div><!-- End .card -->

                              
                            </div><!-- End .accordion -->

                            <button type="submit" class="btn btn-outline-primary-2 btn-order btn-block">
                                <span class="btn-text">Place Order</span>
                                <span class="btn-hover-text">Proceed to Checkout</span>
                            </button>
                        </div><!-- End .summary -->
                    </aside><!-- End .col-lg-3 -->
                </div><!-- End .row -->
            </form>
        </div><!-- End .container -->
    </div><!-- End .checkout -->
</div><!-- End .page-content -->


    
@endsection

@push('js')

<script>
    $(document).ready(function(){

        $("#checkoutForm").on('submit', function(e){
            e.preventDefault();
            

            var formData = $(this).serialize();
            $.ajax({
                url: "{{route('order.store')}}",
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
                                title: 'Order successfully placed'
                            })
                  
                           
                           
                      

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



    })

</script>
    
@endpush

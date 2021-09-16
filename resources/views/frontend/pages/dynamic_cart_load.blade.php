<div class="row">
    <div class="col-lg-9">
        <table class="table table-cart table-mobile">
            <thead>
                <tr>
                    <th>Product</th>
                    <th>Price</th>
                    <th>Quantity</th>
                    <th>Total</th>
                    <th></th>
                </tr>
            </thead>

            <tbody>

                @if ($items)

                    @foreach ($items as  $key=>$item)
                    <tr>
                        <td class="product-col">
                            <div class="product">
                                <figure class="product-media">
                                    <a href="#">
                                        <img src="{{asset('frontend/assets')}}/images/products/table/product-1.jpg" alt="Product image">
                                    </a>
                                </figure>
    
                                <h3 class="product-title">
                                    <a href="#">{{$item->name}}</a>
                                </h3><!-- End .product-title -->
                            </div><!-- End .product -->
                        </td>
                        <td class="price-col">{{$item->price}}</td>
                        <td class="quantity-col">
                            <div class="cart-product-quantity">
                                <input type="number" onchange="updateItem({{$key}})" class="form-control quantity-{{$key}}" value="{{$item->quantity}}" min="1" max="10" step="1" data-decimals="0" required>
                            </div><!-- End .cart-product-quantity -->
                        </td>
                        <td class="total-col">{{$item->getPriceSum()}}</td>
                        <td class="remove-col"><button class="btn-remove"><i class="icon-close"></i></button></td>
                    </tr>
                    @endforeach
                    
                @endif

              




            </tbody>
        </table><!-- End .table table-wishlist -->



    </div><!-- End .col-lg-9 -->
    <aside class="col-lg-3">
        <div class="summary summary-cart">
            <h3 class="summary-title">Cart Total</h3><!-- End .summary-title -->

            <table class="table table-summary">
                <tbody>
                    <tr class="summary-subtotal">
                        <td>Subtotal:</td>
                        <td>{{$getSubTotal}}</td>
                    </tr><!-- End .summary-subtotal -->
                  



                    <tr class="summary-total">
                        <td>Total:</td>
                        <td>{{$getSubTotal}}</td>
                    </tr><!-- End .summary-total -->
                </tbody>
            </table><!-- End .table table-summary -->

            <a href="{{url('/checkout')}}" class="btn btn-outline-primary-2 btn-order btn-block">PROCEED TO CHECKOUT</a>
        </div><!-- End .summary -->

        <a href="{{url('/')}}" class="btn btn-outline-dark-2 btn-block mb-3"><span>CONTINUE SHOPPING</span><i class="icon-refresh"></i></a>
    </aside><!-- End .col-lg-3 -->
</div><!-- End .row -->
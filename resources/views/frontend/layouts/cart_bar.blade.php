<div class="dropdown-cart-products">


    @if ($items)

        @foreach ($items as $key=>$item)
        <div class="product">


            <div class="product-cart-details">
                <h4 class="product-title">
                    <a href="product.html">{{$item->name}}</a>
                </h4>
    
                <span class="cart-product-info">
                    <span class="cart-product-qty">{{$item->quantity}}</span>
                    x ${{$item->price}} = ${{$item->getPriceSum()}}
                </span>
            </div><!-- End .product-cart-details -->
    
            <figure class="product-image-container">
                <a href="product.html" class="product-image">
                    <img src="{{asset('frontend/assets')}}/images/products/cart/product-1.jpg" alt="product">
                </a>
            </figure>
            <a href="#" onclick="removeItem({{$key}})" class="btn-remove" title="Remove Product"><i class="icon-close"></i></a>
        </div><!-- End .product -->
        @endforeach
        
    @endif

   

</div><!-- End .cart-product -->

<div class="dropdown-cart-total">
    <span>Total</span>

    <span class="cart-total-price">{{$getSubTotal}}</span>
</div><!-- End .dropdown-cart-total -->

<div class="dropdown-cart-action">
    <a href="{{url('/cart')}}" class="btn btn-primary">View Cart</a>
    <a href="{{url('/chekcout')}}" class="btn btn-outline-primary-2"><span>Checkout</span><i class="icon-long-arrow-right"></i></a>
</div><!-- End .dropdown-cart-total -->
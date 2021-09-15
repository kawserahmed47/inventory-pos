@extends('frontend.master')

@section('content')

<div class="mb-lg-2"></div><!-- End .mb-lg-2 -->



<div class="container-fluid">
    <div class="row">


        <div class="col-xl-9 col-xxl-8 offset-lg-3 offset-xxl-2">
            @include('frontend.layouts.slider')
            <!-- End .intro-slider-container -->
        </div>
        <!-- End .col-xl-9 col-xxl-10 -->
        
        <div class="col-xl-3 col-xxl-2 d-none d-xxl-block">
            <div class="banner banner-overlay  banner-content-stretch ">
                <a href="#">
                    <img src="{{asset('frontend/assets')}}/images/demos/demo-14/banners/banner-1.png" alt="Banner img desc">
                </a>
                <div class="banner-content text-right">
                    <div class="price text-center">
                        <sup class="text-white">from</sup>
                        <span class="text-white">
                            <strong>$199</strong><sup class="text-white">,99</sup>
                        </span>
                    </div>
                    <a href="#" class="banner-link">Discover Now <i class="icon-long-arrow-right"></i></a>
                </div><!-- End .banner-content -->
            </div><!-- End .banner banner-overlay -->
        </div><!-- End .col-xl-3 col-xxl-2 -->



    </div><!-- End .row -->
</div><!-- End .container-fluid -->



<div class="container-fluid">
    <div class="row">
        <div class="col-xl-12 col-xxl-12">

            <div class="banner-group-1 mt-1 mb-1">
                <div class="container">
                    <div class="owl-carousel owl-simple rows cols-1 cols-sm-2 cols-lg-3" data-toggle="owl" data-owl-options='{
                        "nav": false, 
                        "dots": true,
                        "margin": 10,
                        "loop": false,
                        "responsive": {
                            "0": {
                                "items":1
                            },
                            "576": {
                                "items":2
                            },
                            "992": {
                                "items":3
                            }
                        }
                    }'>
                        <div class="banner mb-0">
                            <a href="#">
                                <img src="{{asset('frontend/assets')}}/images/demos/demo-28/banners/banner-1.jpg" width="460" height="210">
                            </a>
                            <div class="banner-content p-3">
                                <h5 class="banner-subtitle font-weight-normal text-light mb-1">Fresh Fruit</h5>
                                <h3 class="banner-title font-weight-bold">Organic Fresh Fruits<br>Get 25% Off</h3>
                                <a href="#" class="banner-link text-decoration-none">Shop Now<i class="icon-angle-right"></i></a>
                            </div>
                        </div>
                        <div class="banner mb-0">
                            <a href="#">
                                <img src="{{asset('frontend/assets')}}/images/demos/demo-28/banners/banner-2.jpg" width="460" height="210">
                            </a>
                            <div class="banner-content p-3">
                                <h5 class="banner-subtitle font-weight-normal text-light mb-1">Our Standards</h5>
                                <h3 class="banner-title font-weight-bold">Super Food Bundle<br>From $45.99</h3>
                                <a href="#" class="banner-link text-decoration-none">Shop Now<i class="icon-angle-right"></i></a>
                            </div>
                        </div>
                        <div class="banner mb-0">
                            <a href="#">
                                <img src="{{asset('frontend/assets')}}/images/demos/demo-28/banners/banner-3.jpg" width="460" height="210">
                            </a>
                            <div class="banner-content p-3">
                                <h5 class="banner-subtitle font-weight-normal text-light mb-1">Diet Products</h5>
                                <h3 class="banner-title font-weight-bold">Save Now<br>Detox &amp; Diuretics</h3>
                                <a href="#" class="banner-link text-decoration-none">Shop Now<i class="icon-angle-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="icon-boxes-group">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-3 col-md-6">
                            <div class="icon-box d-flex align-items-center align-items-md-start mt-3 flex-column flex-md-row text-center text-md-left">
                                <figure class="m-0">
                                    <i aria-hidden="true" class="icon icon-truck text-dark d-inline-flex"></i>
                                </figure>
                                <div class="icon-box-content">
                                    <div class="icon-title letter-spacing-normal text-dark">
                                        Payment &amp; Delivery
                                    </div>
                                    <p class="text-light font-weight-normal">Free shipping for orders over $50</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <div class="icon-box d-flex align-items-center align-items-md-start mt-3 flex-column flex-md-row text-center text-md-left">
                                <figure class="m-0">
                                    <img src="{{asset('frontend/assets')}}/images/demos/demo-28/social-icons/return.jpg">
                                </figure>
                                <div class="icon-box-content">
                                    <div class="icon-title letter-spacing-normal text-dark">
                                        Return &amp; Refund
                                    </div>
                                    <p class="text-light font-weight-normal">Free 100% money back guarantee</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <div class="icon-box d-flex align-items-center align-items-md-start mt-3 flex-column flex-md-row text-center text-md-left">
                                <figure class="m-0">
                                    <img src="{{asset('frontend/assets')}}/images/demos/demo-28/social-icons/quality.jpg">
                                </figure>
                                <div class="icon-box-content">
                                    <div class="icon-title letter-spacing-normal text-dark">
                                        Quality Support
                                    </div>
                                    <p class="text-light font-weight-normal">Alway online feedback 24/7</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <div class="icon-box d-flex align-items-center align-items-md-start mt-3 flex-column flex-md-row text-center text-md-left">
                                <figure class="m-0">
                                    <img src="{{asset('frontend/assets')}}/images/demos/demo-28/social-icons/newsletter.jpg">
                                </figure>
                                <div class="icon-box-content">
                                    <div class="icon-title letter-spacing-normal text-dark">
                                        Join Our Newsletter
                                    </div>
                                    <p class="text-light font-weight-normal">10% off by subscribing to our newsletter</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container">
                <hr class="m-0">
                <div class="cat-section mt-4 mb-3">
                    <div class="row">
                        <div class="col-6 col-sm-4 col-md-3 col-lg-2 col-xl-8col">
                            <div class="cat bg-white pt-1 mb-2">
                                <div class="cat-image d-flex justify-content-center align-items-center">
                                    <a href="#"><img src="{{asset('frontend/assets')}}/images/demos/demo-28/categories/1.jpg" width="137" height="137"></a>
                                </div>
                                <div class="cat-content text-center">
                                    <a href="#" class="cat-title">Meat</a>
                                    <h4 class="cat-count letter-spacing-normal d-block font-weight-light">1 Product</h4>
                                </div>
                            </div>
                        </div>
                        <div class="col-6 col-sm-4 col-md-3 col-lg-2 col-xl-8col">
                            <div class="cat bg-white pt-1 mb-2">
                                <div class="cat-image d-flex justify-content-center align-items-center">
                                    <a href="#"><img src="{{asset('frontend/assets')}}/images/demos/demo-28/categories/2.jpg" width="137" height="137"></a>
                                </div>
                                <div class="cat-content text-center">
                                    <a href="#" class="cat-title">Fruits</a>
                                    <h4 class="cat-count letter-spacing-normal d-block font-weight-light">1 Product</h4>
                                </div>
                            </div>
                        </div>
                        <div class="col-6 col-sm-4 col-md-3 col-lg-2 col-xl-8col">
                            <div class="cat bg-white pt-1 mb-2">
                                <div class="cat-image d-flex justify-content-center align-items-center">
                                    <a href="#"><img src="{{asset('frontend/assets')}}/images/demos/demo-28/categories/3.jpg" width="137" height="137"></a>
                                </div>
                                <div class="cat-content text-center">
                                    <a href="#" class="cat-title">Bakery</a>
                                    <h4 class="cat-count letter-spacing-normal d-block font-weight-light">2 Products</h4>
                                </div>
                            </div>
                        </div>
                        <div class="col-6 col-sm-4 col-md-3 col-lg-2 col-xl-8col">
                            <div class="cat bg-white pt-1 mb-2">
                                <div class="cat-image d-flex justify-content-center align-items-center">
                                    <a href="#"><img src="{{asset('frontend/assets')}}/images/demos/demo-28/categories/4.jpg" width="137" height="137"></a>
                                </div>
                                <div class="cat-content text-center">
                                    <a href="#" class="cat-title">Vegetable</a>
                                    <h4 class="cat-count letter-spacing-normal d-block font-weight-light">5 Products</h4>
                                </div>
                            </div>
                        </div>
                        <div class="col-6 col-sm-4 col-md-3 col-lg-2 col-xl-8col">
                            <div class="cat bg-white pt-1 mb-2">
                                <div class="cat-image d-flex justify-content-center align-items-center">
                                    <a href="#"><img src="{{asset('frontend/assets')}}/images/demos/demo-28/categories/5.jpg" width="137" height="137"></a>
                                </div>
                                <div class="cat-content text-center">
                                    <a href="#" class="cat-title">Seafood</a>
                                    <h4 class="cat-count letter-spacing-normal d-block font-weight-light">3 Products</h4>
                                </div>
                            </div>
                        </div>
                        <div class="col-6 col-sm-4 col-md-3 col-lg-2 col-xl-8col">
                            <div class="cat bg-white pt-1 mb-2">
                                <div class="cat-image d-flex justify-content-center align-items-center">
                                    <a href="#"><img src="{{asset('frontend/assets')}}/images/demos/demo-28/categories/6.jpg" width="137" height="137"></a>
                                </div>
                                <div class="cat-content text-center">
                                    <a href="#" class="cat-title">Drinks</a>
                                    <h4 class="cat-count letter-spacing-normal d-block font-weight-light">1 Product</h4>
                                </div>
                            </div>
                        </div>
                        <div class="col-6 col-sm-4 col-md-3 col-lg-2 col-xl-8col">
                            <div class="cat bg-white pt-1 mb-2">
                                <div class="cat-image d-flex justify-content-center align-items-center">
                                    <a href="#"><img src="{{asset('frontend/assets')}}/images/demos/demo-28/categories/7.jpg" width="137" height="137"></a>
                                </div>
                                <div class="cat-content text-center">
                                    <a href="#" class="cat-title">Dairy &amp; Cheese</a>
                                    <h4 class="cat-count letter-spacing-normal d-block font-weight-light">1 Product</h4>
                                </div>
                            </div>
                        </div>
                        <div class="col-6 col-sm-4 col-md-3 col-lg-2 col-xl-8col">
                            <div class="cat bg-white pt-1 mb-2">
                                <div class="cat-image d-flex justify-content-center align-items-center">
                                    <a href="#"><img src="{{asset('frontend/assets')}}/images/demos/demo-28/categories/8.jpg" width="137" height="137"></a>
                                </div>
                                <div class="cat-content text-center">
                                    <a href="#" class="cat-title">Wine</a>
                                    <h4 class="cat-count letter-spacing-normal d-block font-weight-light">1 Product</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>



















          
            <div class="container deal-section">
                <h3 class="title text-center mt-5 font-weight-bold">Today's Best Deal</h3>
                <div class="deal-carousel owl-carousel owl-simple carousel-equal-height row cols-2 cols-md-3 cols-lg-4 cols-xl-5" data-toggle="owl"
                    data-owl-options='{
                        "nav": true, 
                        "dots": false,
                        "margin": 0,
                        "loop": false,
                        "responsive": {
                            "0": {
                                "items":2
                            },
                            "480": {
                                "items":2
                            },
                            "767": {
                                "items":3
                            },
                            "992": {
                                "items":4
                            },
                            "1200": {
                                "items":5
                            },
                            "1600": {
                                "items":5
                            }
                        }
                    }'>


                    @if ($productUnits)

                        @foreach ($productUnits as $productUnit)
                        <div class="product d-flex flex-column overflow-hidden">
                            <figure class="mb-0 product-media bg-white d-flex justify-content-center align-items-center">
                                <span class="product-label label-sale">SALE</span>
                                <a href="product.html" class="w-100">
                                    <img src="{{asset('frontend/assets')}}/images/demos/demo-26/products/product-1.jpg" alt="Product image" class="product-image" width="239" height="239">
                                    <img src="{{asset('frontend/assets')}}/images/demos/demo-26/products/product-1-2.jpg" alt="Product image" class="product-image-hover" width="239"
                                        height="239">
                                </a>
    
                        
                            </figure>
                            <!-- End .product-media bg-white d-flex justify-content-center align-items-center -->
    
                            <div class="product-body pb-3">
                                <div class="text-left product-cat font-weight-normal text-light mb-0">
                                    <a href="#">{{$productUnit->product->category->name}}</a>
                                </div>
                                <!-- End .product-cat  -->
                                <h3 class="product-title letter-spacing-normal font-size-normal text-left mb-0">
                                    <a href="product.html">{{$productUnit->product->name}} {{$productUnit->name}}</a>
                                </h3>
                                <!-- End .product-title letter-spacing-normal font-size-normal -->
                                <div class="product-price mb-1">
                                    <div class="new-price">${{$productUnit->max_retail_price}}</div>
                                    {{-- <div class="old-price font-size-normal font-weight-normal">$290.00</div> --}}
                                </div>
                           
                            </div>
                            <div class="product-action position-relative visible">
                                <a href="javascript:void(0)" onclick="addToCart({{$productUnit->id}})" class="btn-product btn-cart text-uppercase text-dark text-decoration-none" title="Add to cart">
                                    <span class="text-dark shadow-none">add to cart</span>
                                </a>
                            </div>
                        
                        </div>
                        <!-- End .product -->
                        @endforeach
                        
                    @endif
                  

                
                </div>
            </div>
            <!-- End .container-fluid -->






















            <div class="brand-section mt-7 mb-6">
                <div class="container py-2 pt-0">
                    <div class="owl-carousel owl-simple rows cols-2 cols-xs-3 cols-md-4 cols-lg-6" data-toggle="owl" data-owl-options='{
                            "nav": false, "loop": false, "dots": false, "margin":0,"responsive": {
                            "0": {
                                "items":2
                            },
                            "480": {
                                "items":3
                            },
                            "768": {
                                "items":4
                            },
                            "992": {
                                "items":6
                            }
                        }
                    }'>
                        <a href="#" class="brand"><img src="{{asset('frontend/assets')}}/images/demos/demo-28/logos/1.png"></a>
                        <a href="#" class="brand"><img src="{{asset('frontend/assets')}}/images/demos/demo-28/logos/2.png"></a>
                        <a href="#" class="brand"><img src="{{asset('frontend/assets')}}/images/demos/demo-28/logos/3.png"></a>
                        <a href="#" class="brand"><img src="{{asset('frontend/assets')}}/images/demos/demo-28/logos/4.png"></a>
                        <a href="#" class="brand"><img src="{{asset('frontend/assets')}}/images/demos/demo-28/logos/5.png"></a>
                        <a href="#" class="brand"><img src="{{asset('frontend/assets')}}/images/demos/demo-28/logos/6.png"></a>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="newsletter-section bg-image d-flex align-items-center justify-content-center mb-1 pt-2 pb-2 px-3" style="background-image: url({{asset('frontend/assets')}}/images/demos/demo-28/banners/4.jpg);">
                    <div class="banner-content position-relative pt-0">
                        <h3 class="newsletter-title font-weight-bold text-center mb-1">New Customer Discount</h3>
                        <h2 class="newsletter-text font-weight-bold text-center my-4 mt-0"><span class="text-primary">20% Off </span>Your First Order at Molla</h2>
                        <p class="text-light font-weight-normal text-center mb-2">New customers: <b class="text-dark">Save 20%</b> when you sign up for exclusive emails, recipes, expert tips &amp; more...</p>
                        <form action="#">
                            <div class="email-get d-flex justify-content-center flex-column flex-sm-row align-items-center align-items-sm-stretch">
                                <input type="email" name="" class="form-control text-light mb-1" placeholder="Enter your Email Address">
                                <div class="input-group-append">
                                    <button class="btn btn-primary mb-1 letter-spacing-normal text-uppercase" type="submit" id="newsletter-btn">
                                        <span>Subscribe</span>
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="banner-group-2 mb-4">
                <div class="container">
                    <div class="row row-sm">
                        <div class="col-md-6">
                            <div class="banner bg-image d-flex align-items-center" style="background-image: url({{asset('frontend/assets')}}/images/demos/demo-28/banners/5.jpg);">
                                <div class="banner-content">
                                    <h4 class="banner-subtitle mb-1 mt-0 text-light font-weight-normal">Fresh Fruit</h4>
                                    <h3 class="banner-title font-weight-bold">Organic Fresh Drinks<br>Get <span class="text-primary">25% Off</span> on Your Order</h3>
                                    <a href="#" class="banner-link text-decoration-none">Shop Now<i class="icon-angle-right"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="banner bg-image d-flex align-items-center" style="background-image: url({{asset('frontend/assets')}}/images/demos/demo-28/banners/6.jpg);">
                                <div class="banner-content">
                                    <h4 class="banner-subtitle mb-1 mt-0 text-light font-weight-normal">Fresh Fruit</h4>
                                    <h3 class="banner-title font-weight-bold">All Natural Large Box<br>From <span class="text-primary">$29.99</span></h3>
                                    <a href="#" class="banner-link text-decoration-none">Shop Now<i class="icon-angle-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="recommend-section py-2 pb-5 border-0">
                <div class="container">
                    <div class="heading">
                        <h2 class="title align-self-center letter-spacing-normal text-center text-md-left">Recommended For You</h2>
                    </div>
                    <div class="products owl-carousel owl-simple owl-nav-inside carousel-equal-height rows cols-2 cols-md-3 cols-lg-4 cols-xl-6" data-toggle="owl" data-owl-options='{
                            "nav": true,
                            "dots": true,
                            "loop": true,
                            "margin": 0,
                            "responsive": {
                                "0": {
                                    "items":2
                                },
                                "768": {
                                    "items":3
                                },
                                "992": {
                                    "items":4
                                },
                                "1200": {
                                    "items":6
                                }
                            }
                        }'>
                        <div class="product mb-0 rounded-0 w-100">
                            <div class="product-change">
                                <figure class="product-media bg-white ">
                                    <a href="#"><img src="{{asset('frontend/assets')}}/images/demos/demo-28/flash/7.jpg" width="192" height="192"></a>
                                    <a href="#" class="btn-product-zoom btn-quickview" data-product-id="260" title="Quick view"><span>Quick view</span></a>
                                    <div class="deal-container inline-type letter-spacing-normal d-block mr-0">
                                        <div class="deal-countdown" data-until="+10h"></div>
                                    </div>
                                </figure>
                                <div class="product-body position-static bg-transparent">
                                    <div class="product-cat overflow-hidden my-2 mt-0 font-weight-normal">
                                        <a href="#">Bakery</a>
                                    </div>
                                    <h3 class="product-title overflow-hidden letter-spacing-normal">Rye Bread (800g)</h3>
                                    <div class="product-price font-weight-bold align-items-center d-flex mb-0">$3.99</div>
                                </div>
                                <div class="product-footer bg-white rounded-0 d-block position-absolute">
                                    <div class="ratings-container text-truncate">
                                        <div class="ratings">
                                            <div class="ratings-val" style="width: 40%;"></div>
                                            <a href="product.html" class="ratings-text font-weight-normal">(5 reviews)</a>
                                        </div>
                                    </div>
                                    <div class="product-action d-flex justify-content-center flex-column align-items-center position-relative">
                                        <a href="#" class="btn btn-product font-weight-normal text-uppercase text-truncate btn-cart btn-outline-primary-2 btn-outline-primary-2"><span>Add To Cart</span></a>
                                        <a href="#" class="wishlist-link-product px-3 ml-0 font-weight-normal mt-1"><i class="icon-heart-o"></i><span>Add to wishlist</span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="product mb-0 rounded-0 w-100">
                            <div class="product-change">
                                <figure class="product-media bg-white ">
                                    <a href="#"><img src="{{asset('frontend/assets')}}/images/demos/demo-28/flash/8.jpg" width="192" height="192"></a>
                                    <a href="#" class="btn-product-zoom btn-quickview" data-product-id="260" title="Quick view"><span>Quick view</span></a>
                                    <div class="product-label label-top">Top</div>
                                </figure>
                                <div class="product-body position-static bg-transparent">
                                    <div class="product-cat overflow-hidden my-2 mt-0 font-weight-normal">
                                        <a href="#">Seafood</a>
                                    </div>
                                    <h3 class="product-title overflow-hidden letter-spacing-normal">Shrimp - Jumbo (5 lb)</h3>
                                    <div class="product-price font-weight-bold align-items-center d-flex mb-0">$38.00</div>
                                </div>
                                <div class="product-footer bg-white rounded-0 d-block position-absolute">
                                    <div class="ratings-container text-truncate">
                                        <div class="ratings">
                                            <div class="ratings-val" style="width: 40%;"></div>
                                            <a href="product.html" class="ratings-text font-weight-normal">(10 reviews)</a>
                                        </div>
                                    </div>
                                    <div class="product-action d-flex justify-content-center flex-column align-items-center position-relative">
                                        <a href="#" class="btn btn-product font-weight-normal text-uppercase text-truncate btn-cart btn-outline-primary-2 btn-outline-primary-2"><span>Add To Cart</span></a>
                                        <a href="#" class="wishlist-link-product px-3 ml-0 font-weight-normal mt-1"><i class="icon-heart-o"></i><span>Add to wishlist</span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="product mb-0 rounded-0 w-100">
                            <div class="product-change">
                                <figure class="product-media bg-white ">
                                    <a href="#"><img src="{{asset('frontend/assets')}}/images/demos/demo-28/flash/9.jpg" width="192" height="192"></a>
                                    <a href="#" class="btn-product-zoom btn-quickview" data-product-id="260" title="Quick view"><span>Quick view</span></a>
                                    <div class="product-label label-sale">Save: 30%</div>
                                </figure>
                                <div class="product-body position-static bg-transparent">
                                    <div class="product-cat overflow-hidden my-2 mt-0 font-weight-normal">
                                        <a href="#">Seafood</a>
                                    </div>
                                    <h3 class="product-title overflow-hidden letter-spacing-normal">Fresh Mussel (500g)</h3>
                                    <div class="product-price font-weight-bold align-items-center d-flex mb-0">
                                        <h4 class="new-price font-weight-bold mb-0">$12.80</h4>
                                        <h4 class="old-price font-weight-normal mb-0">$22.90</h4>
                                    </div>
                                </div>
                                <div class="product-footer bg-white rounded-0 d-block position-absolute">
                                    <div class="ratings-container text-truncate">
                                        <div class="ratings">
                                            <div class="ratings-val" style="width: 20%;"></div>
                                            <a href="product.html" class="ratings-text font-weight-normal">(2 reviews)</a>
                                        </div>
                                    </div>
                                    <div class="product-action d-flex justify-content-center flex-column align-items-center position-relative">
                                        <a href="#" class="btn btn-product font-weight-normal text-uppercase text-truncate btn-cart btn-outline-primary-2 btn-outline-primary-2"><span>Add To Cart</span></a>
                                        <a href="#" class="wishlist-link-product px-3 ml-0 font-weight-normal mt-1"><i class="icon-heart-o"></i><span>Add to wishlist</span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="product mb-0 rounded-0 w-100">
                            <div class="product-change">
                                <figure class="product-media bg-white ">
                                    <a href="#"><img src="{{asset('frontend/assets')}}/images/demos/demo-28/flash/10.jpg" width="192" height="192"></a>
                                    <a href="#" class="btn-product-zoom btn-quickview" data-product-id="260" title="Quick view"><span>Quick view</span></a>
                                </figure>
                                <div class="product-body position-static bg-transparent">
                                    <div class="product-cat overflow-hidden my-2 mt-0 font-weight-normal">
                                        <a href="#">Drinks</a>
                                    </div>
                                    <h3 class="product-title overflow-hidden letter-spacing-normal">Organic Pure Juice Fresh Pressed Orange - 32 fl oz</h3>
                                    <div class="product-price font-weight-bold align-items-center d-flex mb-0">$4.89</div>
                                </div>
                                <div class="product-footer bg-white rounded-0 d-block position-absolute">
                                    <div class="ratings-container text-truncate">
                                        <div class="ratings">
                                            <div class="ratings-val" style="width: 20%;"></div>
                                            <a href="product.html" class="ratings-text font-weight-normal">(2 reviews)</a>
                                        </div>
                                    </div>
                                    <div class="product-action d-flex justify-content-center flex-column align-items-center position-relative">
                                        <a href="#" class="btn btn-product font-weight-normal text-uppercase text-truncate btn-cart btn-outline-primary-2 btn-outline-primary-2"><span>Add To Cart</span></a>
                                        <a href="#" class="wishlist-link-product px-3 ml-0 font-weight-normal mt-1"><i class="icon-heart-o"></i><span>Add to wishlist</span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="product mb-0 rounded-0 w-100">
                            <div class="product-change">
                                <figure class="product-media bg-white ">
                                    <a href="#"><img src="{{asset('frontend/assets')}}/images/demos/demo-28/flash/11.jpg" width="192" height="192"></a>
                                    <a href="#" class="btn-product-zoom btn-quickview" data-product-id="260" title="Quick view"><span>Quick view</span></a>
                                    <div class="product-label label-sale">Save: 30%</div>
                                </figure>
                                <div class="product-body position-static bg-transparent">
                                    <div class="product-cat overflow-hidden my-2 mt-0 font-weight-normal">
                                        <a href="#">Vegetables</a>
                                    </div>
                                    <h3 class="product-title overflow-hidden letter-spacing-normal">Healthy Fried Soya Stick Chips (100g)</h3>
                                    <div class="product-price font-weight-bold align-items-center d-flex mb-0">
                                        <h4 class="new-price font-weight-bold mb-0">$2.59</h4>
                                        <h4 class="old-price font-weight-normal mb-0">$10.90</h4>
                                    </div>
                                </div>
                                <div class="product-footer bg-white rounded-0 d-block position-absolute">
                                    <div class="ratings-container text-truncate">
                                        <div class="ratings">
                                            <div class="ratings-val" style="width: 20%;"></div>
                                            <a href="product.html" class="ratings-text font-weight-normal">(2 reviews)</a>
                                        </div>
                                    </div>
                                    <div class="product-action d-flex justify-content-center flex-column align-items-center position-relative">
                                        <a href="#" class="btn btn-product font-weight-normal text-uppercase text-truncate btn-cart btn-outline-primary-2 btn-outline-primary-2"><span>Add To Cart</span></a>
                                        <a href="#" class="wishlist-link-product px-3 ml-0 font-weight-normal mt-1"><i class="icon-heart-o"></i><span>Add to wishlist</span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="product mb-0 rounded-0 w-100">
                            <div class="product-change">
                                <figure class="product-media bg-white ">
                                    <a href="#"><img src="{{asset('frontend/assets')}}/images/demos/demo-28/flash/12.jpg" width="192" height="192"></a>
                                    <a href="#" class="btn-product-zoom btn-quickview" data-product-id="260" title="Quick view"><span>Quick view</span></a>
                                </figure>
                                <div class="product-body position-static bg-transparent">
                                    <div class="product-cat overflow-hidden my-2 mt-0 font-weight-normal">
                                        <a href="#">Fruits</a>
                                    </div>
                                    <h3 class="product-title overflow-hidden letter-spacing-normal">Ripe apricot fruits (540g)</h3>
                                    <div class="product-price font-weight-bold align-items-center d-flex mb-0">$12.99</div>
                                </div>
                                <div class="product-footer bg-white rounded-0 d-block position-absolute">
                                    <div class="ratings-container text-truncate">
                                        <div class="ratings">
                                            <div class="ratings-val" style="width: 20%;"></div>
                                            <a href="product.html" class="ratings-text font-weight-normal">(2 reviews)</a>
                                        </div>
                                    </div>
                                    <div class="product-action d-flex justify-content-center flex-column align-items-center position-relative">
                                        <a href="#" class="btn btn-product font-weight-normal text-uppercase text-truncate btn-cart btn-outline-primary-2 btn-outline-primary-2"><span>Add To Cart</span></a>
                                        <a href="#" class="wishlist-link-product px-3 ml-0 font-weight-normal mt-1"><i class="icon-heart-o"></i><span>Add to wishlist</span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="product mb-0 rounded-0 w-100">
                            <div class="product-change">
                                <figure class="product-media bg-white ">
                                    <a href="#"><img src="{{asset('frontend/assets')}}/images/demos/demo-28/flash/12.jpg" width="192" height="192"></a>
                                    <a href="#" class="btn-product-zoom btn-quickview" data-product-id="260" title="Quick view"><span>Quick view</span></a>
                                </figure>
                                <div class="product-body position-static bg-transparent">
                                    <div class="product-cat overflow-hidden my-2 mt-0 font-weight-normal">
                                        <a href="#">Fruits</a>
                                    </div>
                                    <h3 class="product-title overflow-hidden letter-spacing-normal">Ripe apricot fruits (540g)</h3>
                                    <div class="product-price font-weight-bold align-items-center d-flex mb-0">$12.99</div>
                                </div>
                                <div class="product-footer bg-white rounded-0 d-block position-absolute">
                                    <div class="ratings-container text-truncate">
                                        <div class="ratings">
                                            <div class="ratings-val" style="width: 20%;"></div>
                                            <a href="product.html" class="ratings-text font-weight-normal">(2 reviews)</a>
                                        </div>
                                    </div>
                                    <div class="product-action d-flex justify-content-center flex-column align-items-center position-relative">
                                        <a href="#" class="btn btn-product font-weight-normal text-uppercase text-truncate btn-cart btn-outline-primary-2 btn-outline-primary-2"><span>Add To Cart</span></a>
                                        <a href="#" class="wishlist-link-product px-3 ml-0 font-weight-normal mt-1"><i class="icon-heart-o"></i><span>Add to wishlist</span></a>
                                    </div>
                                </div>
                            </div>
                        </div> 
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="service-section py-2 pb-0 mt-6">
                    <div class="owl-carousel carousel-simple" data-toggle="owl" data-owl-options='{
                        "nav": false,
                        "loop": false,
                        "dots": false,
                        "margin": 20,
                        "responsive": {
                            "576": {
                                "items":2
                            },
                            "972": {
                                "items":3
                            }
                        }}'>
                            <div class="icon-box d-flex align-items-center align-items-md-start flex-column flex-md-row text-center text-md-left py-2 pt-0 mb-7">
                                <figure class="m-0">
                                    <img src="{{asset('frontend/assets')}}/images/demos/demo-28/social-icons/icon-apple.jpg">
                                </figure>
                                <div class="icon-box-content">
                                    <h3 class="icon-title letter-spacing-normal mb-1">Always Fresh Products</h3>
                                    <p class="text-light font-weight-light">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec odio. Quisque volutpat mattis eros.</p>
                                </div>
                            </div>
                            <div class="icon-box d-flex align-items-center align-items-md-start flex-column flex-md-row text-center text-md-left py-2 pt-0 mb-7">
                                <figure class="m-0">
                                    <img src="{{asset('frontend/assets')}}/images/demos/demo-28/social-icons/icon-leaf.jpg">
                                </figure>
                                <div class="icon-box-content">
                                    <h3 class="icon-title letter-spacing-normal mb-1">Organic &amp; Gluten-Free</h3>
                                    <p class="text-light font-weight-light">Donec odio. Quisque volutpat mattis eros. Nullam malesuada erat ut turpis.</p>
                                </div>
                            </div>
                            <div class="icon-box d-flex align-items-center align-items-md-start flex-column flex-md-row text-center text-md-left py-2 pt-0 mb-7">
                                <figure class="m-0">
                                    <img src="{{asset('frontend/assets')}}/images/demos/demo-28/social-icons/icon-medal.jpg">
                                </figure>
                                <div class="icon-box-content">
                                    <h3 class="icon-title letter-spacing-normal mb-1">Premium Quality</h3>
                                    <p class="text-light font-weight-light">Quisque volutpat mattis eros. Nullam malesuada eratut turpis. Suspendisse urna nibh, viverra non, semper.</p>
                                </div>
                            </div>
                    </div>
                </div>
            </div>
            <div class="bg-lighter blog-section pt-6 pb-5">

        </div><!-- End .col-lg-9 col-xxl-10 -->
    </div><!-- End .row -->
</div><!-- End .container-fluid -->
    
@endsection
@extends('frontend.master')

@section('content')

<div class="page-header text-center" style="background-image: url('{{asset('frontend/assets')}}/images/page-header-bg.jpg')">
    <div class="container">
        <h1 class="page-title">Shopping Cart<span>Shop</span></h1>
    </div><!-- End .container -->
</div><!-- End .page-header -->
<nav aria-label="breadcrumb" class="breadcrumb-nav">
    <div class="container">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="index-32.html">Home</a></li>
            <li class="breadcrumb-item"><a href="#">Shop</a></li>
            <li class="breadcrumb-item active" aria-current="page">Shopping Cart</li>
        </ol>
    </div><!-- End .container -->
</nav><!-- End .breadcrumb-nav -->

<div class="page-content">


    <div class="cart">
        <div class="container dynamicCart">



          
        </div><!-- End .container -->
    </div><!-- End .cart -->
</div><!-- End .page-content -->
    
@endsection


@push('js')

<script>


viewShopCart()


    $(document).ready(function(){


        
    })





</script>
    
@endpush
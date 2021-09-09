@extends('layouts.app', ['activePage' => 'product', 'titlePage' => __('Product')])

@section('content')
  <div class="content">
    <div class="container-fluid">



      <div class="row">
        <div class="col-md-12">
        

            <div class="card ">

              <div class="card-header card-header-primary">
                <h4 class="card-title">{{ __('Show Product') }}</h4>
                <p class="card-category">{{ __('Product information') }}</p>
              </div>

              <div class="card-body ">

         


                <h1>{{$product->name}}</h1>



              </div>
           
            </div>
        </div>
      </div>





    </div>
  </div>
@endsection
@extends('layouts.app', ['activePage' => 'productType', 'titlePage' => __('Product Type')])

@section('content')
  <div class="content">
    <div class="container-fluid">



      <div class="row">
        <div class="col-md-12">
        

            <div class="card ">

              <div class="card-header card-header-primary">
                <h4 class="card-title">{{ __('View Product Type') }}</h4>
                <p class="card-category">{{ __('Product Type information') }}</p>
              </div>

              <div class="card-body ">

                <h1>{{$productType->name}}</h1>






              </div>
           
            </div>
        </div>
      </div>





    </div>
  </div>
@endsection
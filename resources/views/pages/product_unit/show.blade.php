@extends('layouts.app', ['activePage' => 'productUnit', 'titlePage' => __('Order Unit')])

@section('content')
  <div class="content">
    <div class="container-fluid">



      <div class="row">
        <div class="col-md-12">
        

            <div class="card ">

              <div class="card-header card-header-primary">
                <h4 class="card-title">{{ __('View Order Unit') }}</h4>
                <p class="card-category">{{ __('Order Unit information') }}</p>
              </div>

              <div class="card-body ">

         


                <h1>{{$productUnit->name}}</h1>



              </div>
           
            </div>
        </div>
      </div>





    </div>
  </div>
@endsection
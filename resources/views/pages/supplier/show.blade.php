@extends('layouts.app', ['activePage' => 'supplier', 'titlePage' => __('Supplier')])

@section('content')
  <div class="content">
    <div class="container-fluid">



      <div class="row">
        <div class="col-md-12">
        

            <div class="card ">

              <div class="card-header card-header-primary">
                <h4 class="card-title">{{ __('View Supplier') }}</h4>
                <p class="card-category">{{ __('Supplier information') }}</p>
              </div>

              <div class="card-body ">

                <h1>{{$supplier->name}}</h1>






              </div>
           
            </div>
        </div>
      </div>





    </div>
  </div>
@endsection
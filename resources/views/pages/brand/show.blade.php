@extends('layouts.app', ['activePage' => 'brand', 'titlePage' => __('Brand')])

@section('content')
  <div class="content">
    <div class="container-fluid">



      <div class="row">
        <div class="col-md-12">
        

            <div class="card ">

              <div class="card-header card-header-primary">
                <h4 class="card-title">{{ __('View Brand') }}</h4>
                <p class="card-category">{{ __('Brand information') }}</p>
              </div>

              <div class="card-body ">

         

                <h1>{{$brand->name}}</h1>




              </div>
           
            </div>
        </div>
      </div>





    </div>
  </div>
@endsection
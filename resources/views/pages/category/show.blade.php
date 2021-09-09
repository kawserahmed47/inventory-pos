@extends('layouts.app', ['activePage' => 'category', 'titlePage' => __('Category')])

@section('content')
  <div class="content">
    <div class="container-fluid">



      <div class="row">
        <div class="col-md-12">
        

            <div class="card ">

              <div class="card-header card-header-primary">
                <h4 class="card-title">{{ __('View Category') }}</h4>
                <p class="card-category">{{ __('Category information') }}</p>
              </div>

              <div class="card-body ">

         
                <h1>{{$category->name}}</h1>





              </div>
           
            </div>
        </div>
      </div>





    </div>
  </div>
@endsection
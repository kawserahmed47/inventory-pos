@extends('layouts.app', ['activePage' => 'employee', 'titlePage' => __('Employee')])

@section('content')
  <div class="content">
    <div class="container-fluid">



      <div class="row">
        <div class="col-md-12">
        

            <div class="card ">

              <div class="card-header card-header-primary">
                <h4 class="card-title">{{ __('View Employee') }}</h4>
                <p class="card-category">{{ __('Employee information') }}</p>
              </div>

              <div class="card-body ">

         

                <h1>{{$employee->name}}</h1>




              </div>
           
            </div>
        </div>
      </div>





    </div>
  </div>
@endsection
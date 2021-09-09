@extends('layouts.app', ['activePage' => 'productUnit', 'titlePage' => __('Product Unit')])

@section('content')
  <div class="content">
    <div class="container-fluid">



      <div class="row">
        <div class="col-md-12">
          <form method="post" action="{{route('productUnit.store')}}" enctype="multipart/form-data" autocomplete="off" class="form-horizontal">
            @csrf

            <div class="card ">

              <div class="card-header card-header-primary">
                <h4 class="card-title">{{ __('Create Product Unit') }}</h4>
                <p class="card-prdocutUnit">{{ __('Product Unit information') }}</p>
              </div>

              <div class="card-body ">

                <div class="row">
                  <label class="col-sm-2 col-form-label">{{ __('Product') }}</label>
                  <div class="col-sm-7">
                    <div class="form-group">
                      <select name="product_id" id="product" class="form-control" required>
                        <option value="">--</option>
                        @if ($products)
                          @foreach ($products as $product)
                              <option value="{{$product->id}}">{{$product->name}}</option>
                          @endforeach
                        @endif
                      </select>
                    </div>
                  </div>
                </div>

                <div class="row">
                  <label class="col-sm-2 col-form-label">{{ __('Supplier') }}</label>
                  <div class="col-sm-7">
                    <div class="form-group">
                      <select name="supplier_id" id="supplier" required class="form-control">
                        <option value="">--</option>
                        @if ($suppliers)
                          @foreach ($suppliers as $supplier)
                              <option value="{{$supplier->id}}">{{$supplier->name}}</option>
                          @endforeach
                        @endif

                      </select>
                                         
                  </div>
                  </div>
                </div>
         

                <div class="row">
                  <label class="col-sm-2 col-form-label">{{ __('Name') }}</label>
                  <div class="col-sm-7">
                    <div class="form-group">
                      <input class="form-control" name="name" id="input-name" type="text" placeholder="{{ __('Name') }}" value="" required="true" aria-required="true"/>
                    </div>
                  </div>
                </div>

                <div class="row">
                  <label class="col-sm-2 col-form-label">{{ __('Stock Quantity') }}</label>
                  <div class="col-sm-7">
                    <div class="form-group">
                      <input class="form-control" name="available_stock" id="input-name" type="text" placeholder="{{ __('Stock Quantity') }}" value="" required="true" aria-required="true"/>
                    </div>
                  </div>
                </div>

                <div class="row">
                  <label class="col-sm-2 col-form-label">{{ __('Supplier Price') }}</label>
                  <div class="col-sm-7">
                    <div class="form-group">
                      <input class="form-control" name="supplier_price" id="input-name" type="text" placeholder="{{ __('Supplier Price') }}" value="" required="true" aria-required="true"/>
                    </div>
                  </div>
                </div>

                <div class="row">
                  <label class="col-sm-2 col-form-label">{{ __('Max Retail Price') }}</label>
                  <div class="col-sm-7">
                    <div class="form-group">
                      <input class="form-control" name="max_retail_price" id="input-name" type="text" placeholder="{{ __('MRP') }}" value="" required="true" aria-required="true"/>
                    </div>
                  </div>
                </div>



                <div class="row">
                  <label class="col-sm-2 col-form-label">{{ __('Description') }}</label>
                  <div class="col-sm-7">
                    <div class="form-group">
                        <textarea class="form-control" name="description"  rows="5"></textarea>
                    </div>
                  </div>
                </div>



              </div>
              <div class="card-footer ml-auto mr-auto">
                <button type="submit" class="btn btn-primary">{{ __('Save') }}</button>
              </div>
            </div>
          </form>
        </div>
      </div>





    </div>
  </div>
@endsection
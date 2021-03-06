@extends('layouts.app', ['activePage' => 'product', 'titlePage' => __('Product')])

@section('content')
  <div class="content">
    <div class="container-fluid">



      <div class="row">
        <div class="col-md-12">
          <form method="post" action="{{route('product.update', $product->id)}}" autocomplete="off" class="form-horizontal">
            @csrf
            @method('PUT')
            <div class="card ">

              <div class="card-header card-header-primary">
                <h4 class="card-title">{{ __('Create Product') }}</h4>
                <p class="card-product">{{ __('Product information') }}</p>
              </div>

              <div class="card-body ">

                <div class="row">
                  <label class="col-sm-2 col-form-label">{{ __('Brand') }}</label>
                  <div class="col-sm-7">
                    <div class="form-group">
                      <select name="brand_id" class="form-control" id="brand" required>
                        <option value="">--</option>
                        @if ($brands)
                          @foreach ($brands as $brand)
                            <option value="{{$brand->id}}" @if ($product->brand_id == $brand->id) selected @endif>{{$brand->name}}</option>

                          @endforeach
                            
                        @endif
                      </select>
                    </div>
                  </div>
                </div>

                <div class="row">
                  <label class="col-sm-2 col-form-label">{{ __('Category') }}</label>
                  <div class="col-sm-7">
                    <div class="form-group">
                      <select name="category_id" class="form-control" id="category" required>
                        <option value="">--</option>
                        @if ($categories)
                          @foreach ($categories as $category)
                            <option value="{{$category->id}}"  @if ($product->category_id == $category->id) selected @endif>{{$category->name}}</option>

                          @endforeach
                            
                        @endif
                      </select>                    
                    </div>
                  </div>
                </div>

                <div class="row">
                  <label class="col-sm-2 col-form-label">{{ __('Product Type') }}</label>
                  <div class="col-sm-7">
                    <div class="form-group">
                      <select name="product_type_id" class="form-control" id="productType" >
                        <option value="">--</option>
                        @if ($productTypes)
                          @foreach ($productTypes as $productType)
                            <option value="{{$productType->id}}" @if ($product->product_type_id == $productType->id) selected @endif >{{$productType->name}}</option>

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
                      <input class="form-control" name="name" id="input-name" type="text" placeholder="{{ __('Name') }}" value="{{$product->name}}" required="true" aria-required="true"/>
                    </div>
                  </div>
                </div>



                <div class="row">
                  <label class="col-sm-2 col-form-label">{{ __('Description') }}</label>
                  <div class="col-sm-7">
                    <div class="form-group">
                        <textarea class="form-control" name="description"  rows="5">{{$product->description}}</textarea>
                    </div>
                  </div>
                </div>



              </div>
              <div class="card-footer ml-auto mr-auto">
                <button type="submit" class="btn btn-primary">{{ __('Update') }}</button>
              </div>
            </div>
          </form>
        </div>
      </div>





    </div>
  </div>
@endsection
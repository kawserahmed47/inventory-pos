<div class="sidebar" data-color="orange" data-background-color="white" data-image="{{ asset('material') }}/img/sidebar-1.jpg">
  <!--
      Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger"

      Tip 2: you can also add an image using data-image tag
  -->
  <div class="logo">
    <a href="https://creative-tim.com/" class="simple-text logo-normal">
      {{ __('Creative Tim') }}
    </a>
  </div>
  <div class="sidebar-wrapper">



    <ul class="nav">



      <li class="nav-item{{ $activePage == 'dashboard' ? ' active' : '' }}">
        <a class="nav-link" href="{{ route('home') }}">
          <i class="material-icons">dashboard</i>
            <p>{{ __('Dashboard') }}</p>
        </a>
      </li>






      <li class="nav-item {{ ($activePage == 'profile' || $activePage == 'user-management') ? ' active' : '' }}">
        <a class="nav-link" data-toggle="collapse" href="#laravelExample" aria-expanded="{{ ($activePage == 'profile' || $activePage == 'user-management') ? ' true' : '' }}">
          <i><img style="width:25px" src="{{ asset('material') }}/img/laravel.svg"></i>
          <p>{{ __('User Management') }}
            <b class="caret"></b>
          </p>
        </a>
        <div class="collapse {{ ($activePage == 'profile' || $activePage == 'user-management') ? ' show' : '' }}" id="laravelExample">
          <ul class="nav">
            <li class="nav-item{{ $activePage == 'profile' ? ' active' : '' }}">
              <a class="nav-link" href="{{ route('profile.edit') }}">
                <span class="sidebar-mini"> UP </span>
                <span class="sidebar-normal">{{ __('User profile') }} </span>
              </a>
            </li>
            <li class="nav-item{{ $activePage == 'user-management' ? ' active' : '' }}">
              <a class="nav-link" href="{{ route('user.index') }}">
                <span class="sidebar-mini"> UM </span>
                <span class="sidebar-normal"> {{ __('Users List') }} </span>
              </a>
            </li>
          </ul>
        </div>
      </li>


      <li class="nav-item {{ ($activePage == 'employee') ? ' active' : '' }}">
        <a class="nav-link" data-toggle="collapse" href="#employee" aria-expanded="{{ ($activePage == 'employee') ? 'true' : '' }}">
          <i><img style="width:25px" src="{{ asset('material') }}/img/laravel.svg"></i>
          <p>{{ __('Employee') }}
            <b class="caret"></b>
          </p>
        </a>
        <div class="collapse {{ ($activePage == 'employee') ? ' show' : '' }}" id="employee">
          <ul class="nav">
            <li class="nav-item{{ $activePage == 'employee' ? ' active' : '' }}">
              <a class="nav-link" href="{{ route('employee.index') }}">
                <span class="sidebar-mini"> UM </span>
                <span class="sidebar-normal"> {{ __('Employee List') }} </span>
              </a>
            </li>
          </ul>
        </div>
      </li>

      <li class="nav-item {{ ($activePage == 'supplier') ? ' active' : '' }}">
        <a class="nav-link" data-toggle="collapse" href="#supplier" aria-expanded="{{ $activePage == 'supplier' ? ' true' : '' }}">
          <i><img style="width:25px" src="{{ asset('material') }}/img/laravel.svg"></i>
          <p>{{ __('Supplier') }}
            <b class="caret"></b>
          </p>
        </a>
        <div class="collapse {{ $activePage == 'supplier' ? ' show' : '' }}" id="supplier">
          <ul class="nav">
            <li class="nav-item{{ $activePage == 'supplier' ? ' active' : '' }}">
              <a class="nav-link" href="{{ route('supplier.index') }}">
                <span class="sidebar-mini"> UM </span>
                <span class="sidebar-normal"> {{ __('Supplier List') }} </span>
              </a>
            </li>
          </ul>
        </div>
      </li>



      <li class="nav-item {{ ($activePage == 'brand') ? ' active' : '' }}">
        <a class="nav-link" data-toggle="collapse" href="#brand" aria-expanded="{{ ($activePage == 'brand') ? ' true' : '' }}">
          <i><img style="width:25px" src="{{ asset('material') }}/img/laravel.svg"></i>
          <p>{{ __('Brand') }}
            <b class="caret"></b>
          </p>
        </a>
        <div class="collapse {{ ($activePage == 'brand') ? ' show' : '' }}" id="brand">
          <ul class="nav">
          
            <li class="nav-item{{ $activePage == 'brand' ? ' active' : '' }}">
              <a class="nav-link" href="{{ route('brand.index') }}">
                <span class="sidebar-mini"> UM </span>
                <span class="sidebar-normal"> {{ __('Brands List') }} </span>
              </a>
            </li>
          </ul>
        </div>
      </li>




      <li class="nav-item {{ $activePage == 'category' ? ' active' : '' }}">
        <a class="nav-link" data-toggle="collapse" href="#category" aria-expanded="{{ $activePage == 'category' ? ' true' : '' }}">
          <i><img style="width:25px" src="{{ asset('material') }}/img/laravel.svg"></i>
          <p>{{ __('Category') }}
            <b class="caret"></b>
          </p>
        </a>
        <div class="collapse {{ $activePage == 'category' ? ' show' : '' }}" id="category">
          <ul class="nav">
       
            <li class="nav-item{{ $activePage == 'category' ? ' active' : '' }}">
              <a class="nav-link" href="{{ route('category.index') }}">
                <span class="sidebar-mini"> UM </span>
                <span class="sidebar-normal"> {{ __('Category List') }} </span>
              </a>
            </li>
          </ul>
        </div>
      </li>


      <li class="nav-item {{ ($activePage == 'productType' ) ? ' active' : '' }}">
        <a class="nav-link" data-toggle="collapse" href="#productType" aria-expanded="{{ ($activePage == 'productType' ) ? ' true' : '' }}">
          <i><img style="width:25px" src="{{ asset('material') }}/img/laravel.svg"></i>
          <p>{{ __('Product Type') }}
            <b class="caret"></b>
          </p>
        </a>
        <div class="collapse {{ ($activePage == 'productType' ) ? ' show' : '' }}" id="productType">
          <ul class="nav">
         
            <li class="nav-item{{ $activePage == 'productType' ? ' active' : '' }}">
              <a class="nav-link" href="{{ route('productType.index') }}">
                <span class="sidebar-mini"> UM </span>
                <span class="sidebar-normal"> {{ __('Product Type List') }} </span>
              </a>
            </li>
          </ul>
        </div>
      </li>


     



      <li class="nav-item {{ ($activePage == 'product') ? ' active' : '' }}">
        <a class="nav-link" data-toggle="collapse" href="#product" aria-expanded="{{ ($activePage == 'product') ? ' true' : '' }}">
          <i><img style="width:25px" src="{{ asset('material') }}/img/laravel.svg"></i>
          <p>{{ __('Product') }}
            <b class="caret"></b>
          </p>
        </a>
        <div class="collapse {{ ($activePage == 'product') ? ' show' : '' }}" id="product">
          <ul class="nav">
           
            <li class="nav-item{{ $activePage == 'product' ? ' active' : '' }}">
              <a class="nav-link" href="{{ route('product.index') }}">
                <span class="sidebar-mini"> UM </span>
                <span class="sidebar-normal"> {{ __('Products List') }} </span>
              </a>
            </li>
          </ul>
        </div>
      </li>


      <li class="nav-item {{ ($activePage == 'productUnit') ? ' active' : '' }}">

        <a class="nav-link" data-toggle="collapse" href="#productUnit" aria-expanded="{{ $activePage == 'productUnit' ? ' true' : '' }}">
          <i><img style="width:25px" src="{{ asset('material') }}/img/laravel.svg"></i>
          <p>{{ __('Product Unit') }}
            <b class="caret"></b>
          </p>
        </a>

        <div class="collapse {{ $activePage == 'productUnit' ? ' show' : '' }}" id="productUnit">
          <ul class="nav">
          
            <li class="nav-item{{ $activePage == 'productUnit' ? ' active' : '' }}">
              <a class="nav-link" href="{{ route('productUnit.index') }}">
                <span class="sidebar-mini"> UM </span>
                <span class="sidebar-normal"> {{ __('Product Units List') }} </span>
              </a>
            </li>
          </ul>
        </div>
      </li>

      <li class="nav-item {{ ($activePage == 'sellList' || $activePage == 'sellCreate' || $activePage == 'draftList' || $activePage == 'allSellsList' || $activePage == 'allDraftsList' ) ? ' active' : '' }}">
        <a class="nav-link" data-toggle="collapse" href="#sell" aria-expanded="{{ ($activePage == 'sellList' || $activePage == 'sellCreate' || $activePage == 'draftList' || $activePage == 'allSellsList' || $activePage == 'allDraftsList') ? ' true' : '' }}">
          <i><img style="width:25px" src="{{ asset('material') }}/img/laravel.svg"></i>
          <p>{{ __('Sell') }}
            <b class="caret"></b>
          </p>
        </a>
        <div class="collapse {{ ($activePage == 'sellList' || $activePage == 'sellCreate' || $activePage == 'draftList' || $activePage == 'allSellsList' || $activePage == 'allDraftsList' ) ? ' show' : '' }}" id="sell">
          <ul class="nav">
          
            <li class="nav-item {{ ($activePage == 'sellCreate') ? ' active' : '' }}">
              <a class="nav-link" href="{{ route('sell.create') }}">
                <span class="sidebar-mini"> UM </span>
                <span class="sidebar-normal"> {{ __('Create') }} </span>
              </a>
            </li>

            <li class="nav-item {{ ($activePage == 'sellList') ? ' active' : '' }}">
              <a class="nav-link" href="{{ route('sell.index') }}">
                <span class="sidebar-mini"> UM </span>
                <span class="sidebar-normal"> {{ __('Sells List') }} </span>
              </a>
            </li>

            <li class="nav-item {{ ($activePage == 'draftList') ? ' active' : '' }}">
              <a class="nav-link" href="{{ route('draft.index') }}">
                <span class="sidebar-mini"> UM </span>
                <span class="sidebar-normal"> {{ __('Draft List') }} </span>
              </a>
            </li>

            <li class="nav-item {{ ($activePage == 'allSellsList') ? ' active' : '' }}">
              <a class="nav-link" href="{{ route('sell.allSells') }}">
                <span class="sidebar-mini"> UM </span>
                <span class="sidebar-normal"> {{ __('All Sells') }} </span>
              </a>
            </li>

            <li class="nav-item {{ ($activePage == 'allDraftsList') ? ' active' : '' }}">
              <a class="nav-link" href="{{ route('draft.allDrafts') }}">
                <span class="sidebar-mini"> UM </span>
                <span class="sidebar-normal"> {{ __('All Drafts') }} </span>
              </a>
            </li>


          </ul>
        </div>
      </li>

      <li class="nav-item {{ ($activePage == 'order') ? ' active' : '' }}">
        <a class="nav-link" data-toggle="collapse" href="#order" aria-expanded="{{ ($activePage == 'order') ? ' true' : '' }}">
          <i><img style="width:25px" src="{{ asset('material') }}/img/laravel.svg"></i>
          <p>{{ __('Order') }}
            <b class="caret"></b>
          </p>
        </a>
        <div class="collapse {{ ($activePage == 'order') ? ' show' : '' }}" id="order">
          <ul class="nav">
          
            <li class="nav-item {{ ($activePage == 'order') ? ' active' : '' }}">
              <a class="nav-link" href="{{ route('order.index') }}">
                <span class="sidebar-mini"> UM </span>
                <span class="sidebar-normal"> {{ __('Order List') }} </span>
              </a>
            </li>
          </ul>
        </div>
      </li>

      <li class="nav-item {{ ($activePage == 'customer' ) ? ' active' : '' }}">
        <a class="nav-link" data-toggle="collapse" href="#customer" aria-expanded="{{ $activePage == 'customer' ? ' true' : '' }}">
          <i><img style="width:25px" src="{{ asset('material') }}/img/laravel.svg"></i>
          <p>{{ __('Customer') }}
            <b class="caret"></b>
          </p>
        </a>
        <div class="collapse {{ $activePage == 'customer' ? ' show' : '' }}" id="customer">
          <ul class="nav">
          
            <li class="nav-item{{ $activePage == 'customer' ? ' active' : '' }}">
              <a class="nav-link" href="{{ route('customer.index') }}">
                <span class="sidebar-mini"> UM </span>
                <span class="sidebar-normal"> {{ __('Customer List') }} </span>
              </a>
            </li>

          </ul>
        </div>
      </li>


      <li class="nav-item {{ ($activePage == 'accounts' ) ? ' active' : '' }}">
        <a class="nav-link" data-toggle="collapse" href="#account" aria-expanded="{{ ($activePage == 'accounts' ) ? ' true' : '' }}">
          <i><img style="width:25px" src="{{ asset('material') }}/img/laravel.svg"></i>
          <p>{{ __('Accounts Management') }}
            <b class="caret"></b>
          </p>
        </a>
        <div class="collapse {{ ($activePage == 'accounts' ) ? ' show' : '' }}" id="account">
          <ul class="nav">
          
            <li class="nav-item{{ $activePage == 'accounts' ? ' active' : '' }}">
              <a class="nav-link" href="{{ route('user.index') }}">
                <span class="sidebar-mini"> UM </span>
                <span class="sidebar-normal"> {{ __('Employee Salary') }} </span>
              </a>
            </li>

            <li class="nav-item{{ $activePage == 'accounts' ? ' active' : '' }}">
              <a class="nav-link" href="{{ route('user.index') }}">
                <span class="sidebar-mini"> UM </span>
                <span class="sidebar-normal"> {{ __('Supplier Payment') }} </span>
              </a>
            </li>

            <li class="nav-item{{ $activePage == 'accounts' ? ' active' : '' }}">
              <a class="nav-link" href="{{ route('user.index') }}">
                <span class="sidebar-mini"> UM </span>
                <span class="sidebar-normal"> {{ __('Other Cost') }} </span>
              </a>
            </li>

          </ul>
        </div>
      </li>




      {{-- <li class="nav-item{{ $activePage == 'table' ? ' active' : '' }}">
        <a class="nav-link" href="{{ route('table') }}">
          <i class="material-icons">content_paste</i>
            <p>{{ __('Table List') }}</p>
        </a>
      </li> --}}







      {{-- <li class="nav-item{{ $activePage == 'notifications' ? ' active' : '' }}">
        <a class="nav-link" href="{{ route('notifications') }}">
          <i class="material-icons">notifications</i>
          <p>{{ __('Notifications') }}</p>
        </a>
      </li> --}}


    </ul>
  </div>
</div>

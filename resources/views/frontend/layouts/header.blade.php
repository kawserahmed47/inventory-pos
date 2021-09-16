<header class="header header-14">
    <div class="header-top">
        <div class="container">
            <div class="header-left">
                <a href="tel:#"><i class="icon-phone"></i>Call: +0123 456 789</a>
            </div><!-- End .header-left -->

            <div class="header-right">

                <ul class="top-menu">
                    <li>
                        <a href="#"><i class="fa fa-user"></i></a>
                        <ul class="menus">
                            <li class="login">
                                <a href="#signin-modal" data-toggle="modal">Sign in / Sign up</a>
                            </li>
                        </ul>
                    </li>
                </ul><!-- End .top-menu -->
            </div><!-- End .header-right -->
        </div><!-- End .container -->
    </div><!-- End .header-top -->

    <div class="header-middle">
        <div class="container-fluid">
            <div class="row">
                <div class="col-auto col-lg-3 col-xl-3 col-xxl-2">
                    <button class="mobile-menu-toggler">
                        <span class="sr-only">Toggle mobile menu</span>
                        <i class="icon-bars"></i>
                    </button>
                    <a href="index-32.html" class="logo">
                        <img src="{{asset('frontend/assets')}}/images/demos/demo-14/logo.png" alt="Molla Logo" width="105" height="25">
                    </a>
                </div><!-- End .col-xl-3 col-xxl-2 -->
            
                <div class="col col-lg-9 col-xl-9 col-xxl-10 header-middle-right">
                    <div class="row">
                        <div class="col-lg-8 col-xxl-4-5col d-none d-lg-block">
                            <div class="header-search header-search-extended header-search-visible header-search-no-radius">
                                <a href="#" class="search-toggle" role="button"><i class="icon-search"></i></a>
                                <form action="#" method="get">
                                    <div class="header-search-wrapper search-wrapper-wide">

                                        <div class="select-custom">
                                            <select id="cat" name="cat">
                                                <option value="">All Departments</option>
                                                <option value="1">Fashion</option>
                                                <option value="2">- Women</option>
                                                <option value="3">- Men</option>
                                                <option value="4">- Jewellery</option>
                                                <option value="5">- Kids Fashion</option>
                                                <option value="6">Electronics</option>
                                                <option value="7">- Smart TVs</option>
                                                <option value="8">- Cameras</option>
                                                <option value="9">- Games</option>
                                                <option value="10">Home &amp; Garden</option>
                                                <option value="11">Motors</option>
                                                <option value="12">- Cars and Trucks</option>
                                                <option value="15">- Boats</option>
                                                <option value="16">- Auto Tools &amp; Supplies</option>
                                            </select>
                                        </div><!-- End .select-custom -->
                                        <label for="q" class="sr-only">Search</label>
                                        <input type="search" class="form-control" name="q" id="q" placeholder="Search product ..." required>

                                        <button class="btn btn-primary" type="submit"><i class="icon-search"></i></button>
                                    </div><!-- End .header-search-wrapper -->
                                </form>
                            </div><!-- End .header-search -->
                        </div><!-- End .col-xxl-4-5col -->

                        <div class="col-lg-4 col-xxl-5col d-flex justify-content-end align-items-center">
                            <div class="header-dropdown-link">
                                

                                <div class="dropdown cart-dropdown">
                                    <a href="{{url('/cart')}}" class="dropdown-toggle" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-display="static">
                                        <i class="icon-shopping-cart"></i>
                                        <span class="cart-count">0</span>
                                        <span class="cart-txt">Cart</span>
                                    </a>

                                    <div class="dropdown-menu dropdown-menu-right cartBar">
                                     
                                    </div>
                                    <!-- End .dropdown-menu -->




                                </div><!-- End .cart-dropdown -->
                            </div>
                        </div><!-- End .col-xxl-5col -->
                    </div><!-- End .row -->
                </div><!-- End .col-xl-9 col-xxl-10 -->
            </div><!-- End .row -->
        </div><!-- End .container-fluid -->
    </div><!-- End .header-middle -->

    <div class="header-bottom sticky-header">
        <div class="container-fluid">
            <div class="row">
                <div class="col-auto col-lg-3 col-xl-3 col-xxl-2 header-left">
                    <div class="dropdown category-dropdown show is-on" data-visible="true">
                        <a href="#" class="dropdown-toggle" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-display="static" title="Browse Categories">
                            Browse Categories
                        </a>

                        <div class="dropdown-menu show">
                            <nav class="side-nav">
                                <ul class="menu-vertical sf-arrows">
                                    @if ($categories)

                                        @foreach ($categories as $category)
                                            <li><a href="#"><i class="icon-blender"></i>{{$category->name}}</a></li>
                                        @endforeach
                                        
                                    @endif
                                </ul><!-- End .menu-vertical -->
                            </nav><!-- End .side-nav -->
                        </div><!-- End .dropdown-menu -->
                    </div><!-- End .category-dropdown -->
                </div><!-- End .col-xl-3 col-xxl-2 -->

                <div class="col col-lg-6 col-xl-6 col-xxl-8 header-center">
                    <nav class="main-nav">
                        <ul class="menu sf-arrows">
                            <li class="megamenu-container active">
                                <a href="{{url('/')}}" class="sf-with-ul">Home</a>
                            </li>
                            <li>
                                <a href="category.html" class="sf-with-ul">Shop</a>
                            </li>
                            <li>
                                <a href="product.html" class="sf-with-ul">Abous Us</a>
                            </li>
                        
                            <li>
                                <a href="blog.html" class="sf-with-ul">Blog</a>
                            </li>

                            <li>
                                <a href="blog.html" class="sf-with-ul">Contact Us</a>
                            </li>

                       
                        </ul><!-- End .menu -->
                    </nav><!-- End .main-nav -->
                </div><!-- End .col-xl-9 col-xxl-10 -->

                <div class="col col-lg-3 col-xl-3 col-xxl-2 header-right">
                    <i class="la la-lightbulb-o"></i><p>Clearance Up to 30% Off</span></p>
                </div>
            </div><!-- End .row -->
        </div><!-- End .container-fluid -->
    </div><!-- End .header-bottom -->
</header>
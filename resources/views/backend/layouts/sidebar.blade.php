<nav id="sidebar">
    <!-- Sidebar Content -->
    <div class="sidebar-content">
        <!-- Side Header -->
        <div class="content-header content-header-fullrow px-15">
            <!-- Mini Mode -->
            <div class="content-header-section sidebar-mini-visible-b">
                <!-- Logo -->
                <span class="content-header-item font-w700 font-size-xl float-left animated fadeIn">
                    <span class="text-dual-primary-dark">c</span><span class="text-primary">b</span>
                </span>
                <!-- END Logo -->
            </div>
            <!-- END Mini Mode -->

            <!-- Normal Mode -->
            <div class="content-header-section text-center align-parent sidebar-mini-hidden">
                <!-- Close Sidebar, Visible only on mobile screens -->
                <!-- Layout API, functionality initialized in Template._uiApiLayout() -->
                <button type="button" class="btn btn-circle btn-dual-secondary d-lg-none align-v-r" data-toggle="layout" data-action="sidebar_close">
                    <i class="fa fa-times text-danger"></i>
                </button>
                <!-- END Close Sidebar -->

                <!-- Logo -->
                <div class="content-header-item">
                    <a class="link-effect font-w700" href="index.html">
                        <i class="si si-fire text-primary"></i>
                        <span class="font-size-xl text-dual-primary-dark">Chabi</span><span class="font-size-xl text-primary">Kathi</span>
                    </a>
                </div>
                <!-- END Logo -->
            </div>
            <!-- END Normal Mode -->
        </div>
        <!-- END Side Header -->

        <!-- Side User -->
        <div class="content-side content-side-full content-side-user px-10 align-parent">
            <!-- Visible only in mini mode -->
            <div class="sidebar-mini-visible-b align-v animated fadeIn">
                <img class="img-avatar img-avatar32" src="{{ asset('asset/backend/assets/media/avatars/avatar15.jpg')}}" alt="">
            </div>
            <!-- END Visible only in mini mode -->

            <!-- Visible only in normal mode -->
            <div class="sidebar-mini-hidden-b text-center">
                <a class="img-link" href="{{route('profile')}}">
                    <img class="img-avatar" src="{{Auth::user()->image==''? asset('asset/backend/assets/media/avatars/avatar15.jpg'): '/'.Auth::user()->image}}" alt="">
                </a>
                <ul class="list-inline mt-10">
                    <li class="list-inline-item">
                        <a class="link-effect text-dual-primary-dark font-size-sm font-w600 text-uppercase" href="be_pages_generic_profile.html">{{Auth::user()->name}}</a>
                    </li>
                    <li class="list-inline-item">
                        <!-- Layout API, functionality initialized in Template._uiApiLayout() -->
                        <a class="link-effect text-dual-primary-dark" data-toggle="layout" data-action="sidebar_style_inverse_toggle" href="javascript:void(0)">
                            <i class="fa fa-cog"></i>
                        </a>
                    </li>
                    <!-- <li class="list-inline-item">
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf

                            <x-jet-dropdown-link href="{{ route('logout') }}"
                                     onclick="event.preventDefault();
                                            this.closest('form').submit();">
                                <i class="si si-logout"></i>&nbsp;&nbsp; Sing Out
                            </x-jet-dropdown-link>
                        </form>
                    </li> -->
                </ul>
            </div>
            <!-- END Visible only in normal mode -->
        </div>
        <!-- END Side User -->

        <!-- Side Navigation -->
        <div class="content-side content-side-full">
            <ul class="nav-main">
                <li>
                    <a class="active" href="{{route('admin')}}"><i class="si si-cup"></i><span class="sidebar-mini-hide">Dashboard</span></a>
                </li>
                <li class="nav-main-heading"><span class="sidebar-mini-visible">P.S</span><span class="sidebar-mini-hidden">Product Section</span></li>
                <li>
                    <a class="nav-submenu" data-toggle="nav-submenu" href="#"><i class="fa fa-th-large"></i><span class="sidebar-mini-hide">Category</span></a>
                    <ul>
                        <li>
                            <a href="{{route('category.list')}}">Categories List</a>
                        </li>
                        <li>
                            <a href="{{route('category.create')}}">Add Category</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a class="nav-submenu" data-toggle="nav-submenu" href="#"><i class="fa fa-th-list"></i><span class="sidebar-mini-hide">Sub Category</span></a>
                    <ul>
                        <li>
                            <a href="{{route('sub-category.list')}}">Sub Categories List</a>
                        </li>
                        <li>
                            <a href="{{route('sub-category.create')}}">Add Sub Category</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a class="nav-submenu" data-toggle="nav-submenu" href="#"><i class="fa fa-shopping-bag"></i><span class="sidebar-mini-hide">Product</span></a>
                    <ul>
                        <li>
                            <a href="{{route('product.list')}}">Products List</a>
                        </li>
                        <li>
                            <a href="{{route('product.create')}}">Add Product</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a class="nav-submenu" data-toggle="nav-submenu" href="#"><i class="fa fa-cart-plus"></i><span class="sidebar-mini-hide">Stock</span></a>
                    <ul>
                        <li>
                            <a href="{{route('stock.list')}}">Stocks List</a>
                        </li>
                        <li>
                            <a href="{{route('stock.create')}}">Add Stock</a>
                        </li>
                    </ul>
                </li>


                <li class="nav-main-heading"><span class="sidebar-mini-visible">P.V</span><span class="sidebar-mini-hidden">Product Veriation</span></li>
                <li>
                    <a class="nav-submenu" data-toggle="nav-submenu" href="#"><i class="si si-size-actual"></i><span class="sidebar-mini-hide">Size</span></a>
                    <ul>
                        <li>
                            <a href="{{route('size.list')}}">Size List</a>
                        </li>
                        <li>
                            <a href="{{route('size.create')}}">Add Size</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a class="nav-submenu" data-toggle="nav-submenu" href="#"><i class="si si-anchor"></i><span class="sidebar-mini-hide">Weight</span></a>
                    <ul>
                        <li>
                            <a href="{{route('weight.list')}}">Weight List</a>
                        </li>
                        <li>
                            <a href="{{route('weight.create')}}">Add Weight</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a class="nav-submenu" data-toggle="nav-submenu" href="#"><i class="si si-equalizer"></i><span class="sidebar-mini-hide">Color Code</span></a>
                    <ul>
                        <li>
                            <a href="{{route('color-code.list')}}">Color Code List</a>
                        </li>
                        <li>
                            <a href="{{route('color-code.create')}}">Add Color Code</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a class="nav-submenu" data-toggle="nav-submenu" href="#"><i class="si si-badge"></i><span class="sidebar-mini-hide">Brand</span></a>
                    <ul>
                        <li>
                            <a href="{{route('brand.list')}}">Brand List</a>
                        </li>
                        <li>
                            <a href="{{route('brand.create')}}">Add Brand</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a class="nav-submenu" data-toggle="nav-submenu" href="#"><i class="si si-basket"></i><span class="sidebar-mini-hide">Shop</span></a>
                    <ul>
                        <li>
                            <a href="{{route('shop.list')}}">Shop List</a>
                        </li>
                        <li>
                            <a href="{{route('shop.create')}}">Add Shop</a>
                        </li>
                    </ul>
                </li>


                <li class="nav-main-heading"><span class="sidebar-mini-visible">E.C</span><span class="sidebar-mini-hidden"> Extra Change</span></li>
                <li>
                    <a class="nav-submenu" data-toggle="nav-submenu" href="#"><i class="fa fa-sliders"></i><span class="sidebar-mini-hide">Slider</span></a>
                    <ul>
                        <li>
                            <a href="{{route('slider.list')}}">Sliders List</a>
                        </li>
                        <li>
                            <a href="{{route('slider.create')}}">Add Slider</a>
                        </li>
                    </ul>
                </li>

                <li class="nav-main-heading"><span class="sidebar-mini-visible">S.S</span><span class="sidebar-mini-hidden">Settings Section</span></li>
                <li>
                    <a class="nav-submenu" data-toggle="nav-submenu" href="#"><i class="fa fa-cog"></i><span class="sidebar-mini-hide">Backend Settings</span></a>
                    <ul>
                        <li>
                            <a href="be_pages_auth_all.html">All</a>
                        </li>
                        <li>
                            <a href="op_auth_signin.html">Sign In</a>
                        </li>
                        <li>
                            <a href="op_auth_signin2.html">Sign In 2</a>
                        </li>
                        <li>
                            <a href="op_auth_signin3.html">Sign In 3</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a class="nav-submenu" data-toggle="nav-submenu" href="#"><i class="si si-settings"></i><span class="sidebar-mini-hide">Fontend Settings</span></a>
                    <ul>
                        <li>
                            <a href="op_error_400.html">400</a>
                        </li>
                        <li>
                            <a href="op_error_401.html">401</a>
                        </li>
                        <li>
                            <a href="op_error_403.html">403</a>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
        <!-- END Side Navigation -->
    </div>
    <!-- Sidebar Content -->
</nav>
 <!-- END Sidebar -->
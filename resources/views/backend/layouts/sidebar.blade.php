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
                <button type="button" class="btn btn-circle btn-dual-secondary d-lg-none align-v-r" data-toggle="layout"
                    data-action="sidebar_close">
                    <i class="fa fa-times text-danger"></i>
                </button>
                <!-- END Close Sidebar -->

                <!-- Logo -->
                <div class="content-header-item">
                    <a class="link-effect font-w700" href="{{route('admin')}}">
                        <i class="si si-fire text-primary"></i>
                        <span class="font-size-xl text-dual-primary-dark">Chabi</span><span
                            class="font-size-xl text-primary">Kathi</span>
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
                <img class="img-avatar img-avatar32" src="{{ asset('asset/backend/assets/media/avatars/avatar15.jpg')}}"
                    alt="">
            </div>
            <!-- END Visible only in mini mode -->

            <!-- Visible only in normal mode -->
            <div class="sidebar-mini-hidden-b text-center">
                <a class="img-link" href="{{route('profile')}}">
                    <img class="img-avatar"
                        src="{{Auth::user()->image==''? asset('asset/backend/assets/media/avatars/avatar15.jpg'): '/'.Auth::user()->image}}"
                        alt="">
                </a>
                <ul class="list-inline mt-10">
                    <li class="list-inline-item">
                        <a class="link-effect text-dual-primary-dark font-size-sm font-w600 text-uppercase"
                            href="be_pages_generic_profile.html">{{Auth::user()->name}}</a>
                    </li>
                    <li class="list-inline-item">
                        <!-- Layout API, functionality initialized in Template._uiApiLayout() -->
                        <a class="link-effect text-dual-primary-dark" data-toggle="layout"
                            data-action="sidebar_style_inverse_toggle" href="javascript:void(0)">
                            <i class="fa fa-cog"></i>
                        </a>
                    </li>
                </ul>
            </div>
            <!-- END Visible only in normal mode -->
        </div>
        <!-- END Side User -->

        <!-- Side Navigation -->
        <div class="content-side content-side-full">
            <ul class="nav-main">
                <li>
                    <a class="active" href="{{route('admin')}}"><i class="si si-cup"></i><span
                            class="sidebar-mini-hide">Dashboard</span></a>
                </li>

                <li class="">
                    <a class="nav-submenu" data-toggle="nav-submenu" href="#"><i class="si si-list"></i><span
                            class="sidebar-mini-hide">Category Section</span></a>
                    <ul>
                        <li class="">
                            <a class="nav-submenu" data-toggle="nav-submenu" href="#"><span
                                    class="sidebar-mini-hide">Category</span></a>
                            <ul>
                                <li>
                                    <a href="{{route('category.list')}}"><span class="sidebar-mini-hide">Categories
                                            List</span></a>
                                </li>
                                <li>
                                    <a href="{{route('category.create')}}"><span class="sidebar-mini-hide">Add
                                            Category</span></a>
                                </li>
                            </ul>
                        </li>
                        <li class="">
                            <a class="nav-submenu" data-toggle="nav-submenu" href="#"><span
                                    class="sidebar-mini-hide">Sub Category</span></a>
                            <ul>
                                <li>
                                    <a href="{{route('sub-category.list')}}"><span class="sidebar-mini-hide">Sub
                                            Categories List</span></a>
                                </li>
                                <li>
                                    <a href="{{route('sub-category.create')}}"><span class="sidebar-mini-hide">Add Sub
                                            Category</span></a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li class="">
                    <a class="nav-submenu" data-toggle="nav-submenu" href="#"><i class="si si-layers"></i><span
                            class="sidebar-mini-hide">Product Variation</span></a>
                    <ul>
                        <li class="">
                            <a class="nav-submenu" data-toggle="nav-submenu" href="#"><span
                                    class="sidebar-mini-hide">Size</span></a>
                            <ul>
                                <li>
                                    <a href="{{route('size.list')}}"><span class="sidebar-mini-hide">Size
                                            List</span></a>
                                </li>
                                <li>
                                    <a href="{{route('size.create')}}"><span class="sidebar-mini-hide">Add
                                            Size</span></a>
                                </li>
                            </ul>
                        </li>
                        <li class="">
                            <a class="nav-submenu" data-toggle="nav-submenu" href="#"><span
                                    class="sidebar-mini-hide">Weight</span></a>
                            <ul>
                                <li>
                                    <a href="{{route('weight.list')}}"><span class="sidebar-mini-hide">Weight
                                            List</span></a>
                                </li>
                                <li>
                                    <a href="{{route('weight.create')}}"><span class="sidebar-mini-hide">Add
                                            Weight</span></a>
                                </li>
                            </ul>
                        </li>
                        <li class="">
                            <a class="nav-submenu" data-toggle="nav-submenu" href="#"><span
                                    class="sidebar-mini-hide">Color Code</span></a>
                            <ul>
                                <li>
                                    <a href="{{route('color-code.list')}}"><span class="sidebar-mini-hide">Color Code
                                            List</span></a>
                                </li>
                                <li>
                                    <a href="{{route('color-code.create')}}"><span class="sidebar-mini-hide">Add Color
                                            Code</span></a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li>
                    <a class="nav-submenu" data-toggle="nav-submenu" href="#"><i class="si si-bag"></i><span
                            class="sidebar-mini-hide">Product</span></a>
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
                    <a class="nav-submenu" data-toggle="nav-submenu" href="#"><i class="si si-basket-loaded"></i><span
                            class="sidebar-mini-hide">Stock</span></a>
                    <ul>
                        <li>
                            <a href="{{route('stock.list')}}">Stocks List</a>
                        </li>
                        <li>
                            <a href="{{route('stock.create')}}">Add Stock</a>
                        </li>
                    </ul>
                </li>

                <li>
                    <a href="{{route('seller.list')}}"><i class="si si-users"></i>Seller List</a>
                </li>

                <li>
                    <a href="{{route('shop.list')}}"><i class="si si-drawer"></i>Shop List</a>
                </li>

                <li>
                    <a href="{{route('brand.list')}}"><i class="si si-badge"></i>Brand List</a>
                </li>

                <li>
                    <a class="nav-submenu" data-toggle="nav-submenu" href="#"><i class="si si-user"></i><span
                            class="sidebar-mini-hide">Admin</span></a>
                    <ul>
                        <li>
                            <a href="{{route('admin.list')}}">Admin List</a>
                        </li>
                        <li>
                            <a href="{{route('admin.create')}}">Add Admin</a>
                        </li>
                    </ul>
                </li>


                <li class="nav-main-heading"><span class="sidebar-mini-visible">S.S</span><span
                        class="sidebar-mini-hidden">Settings Section</span></li>
                <li>
                    <a class="nav-submenu" data-toggle="nav-submenu" href="#"><i class="fa fa-sliders"></i><span
                            class="sidebar-mini-hide">Slider</span></a>
                    <ul>
                        <li>
                            <a href="{{route('slider.list')}}">Sliders List</a>
                        </li>
                        <li>
                            <a href="{{route('slider.create')}}">Add Slider</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a class="nav-submenu" data-toggle="nav-submenu" href="#"><i class="fa fa-cog"></i><span
                            class="sidebar-mini-hide">Backend Settings</span></a>
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
                    <a class="nav-submenu" data-toggle="nav-submenu" href="#"><i class="si si-settings"></i><span
                            class="sidebar-mini-hide">Fontend Settings</span></a>
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
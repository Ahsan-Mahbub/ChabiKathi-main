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
                    <a class="link-effect font-w700" href="index.html">
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
                        src="{{auth('seller')->user()->banner==''? asset('asset/backend/assets/media/avatars/avatar15.jpg'): '/'.auth('seller')->user()->banner}}"
                        alt="">
                </a>
                <ul class="list-inline mt-10">
                    <li class="list-inline-item">
                        <a class="link-effect text-dual-primary-dark font-size-sm font-w600 text-uppercase"
                            href="be_pages_generic_profile.html">{{auth('seller')->user()->first_name}}</a>
                    </li>
                    <li class="list-inline-item">
                        <!-- Layout API, functionality initialized in Template._uiApiLayout() -->
                        <a class="link-effect text-dual-primary-dark" data-toggle="layout"
                            data-action="sidebar_style_inverse_toggle" href="javascript:void(0)">
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
                    <a class="active" href=""><i class="si si-cup"></i><span
                        class="sidebar-mini-hide">Dashboard</span></a>
                </li>
                <li>
                    <a class="nav-submenu" data-toggle="nav-submenu" href="#"><i class="si si-badge"></i><span
                        class="sidebar-mini-hide">Brand</span></a>
                    <ul>
                        <li>
                            <a href="{{route('seller.brand.list')}}">Brand List</a>
                        </li>
                        <li>
                            <a href="{{route('seller.brand.create')}}">Add Brand</a>
                        </li>
                    </ul>
                </li>

                <li>
                    <a class="nav-submenu" data-toggle="nav-submenu" href="#"><i class="fa fa-shopping-bag"></i><span
                            class="sidebar-mini-hide">Product</span></a>
                    <ul>
                        <li>
                            <a href="{{route('seller.product.list')}}">Products List</a>
                        </li>
                        <li>
                            <a href="{{route('seller.product.create')}}">Add Product</a>
                        </li>
                    </ul>
                </li>


                <li class="nav-main-heading"><span class="sidebar-mini-visible">P.V</span><span
                        class="sidebar-mini-hidden">Product Veriation</span></li>

            </ul>
        </div>
        <!-- END Side Navigation -->
    </div>
    <!-- Sidebar Content -->
</nav>
<!-- END Sidebar -->
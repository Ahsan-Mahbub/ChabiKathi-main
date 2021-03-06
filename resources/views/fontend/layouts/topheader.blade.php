<!-- Top Header Section -->
<section class="top-header bg-white">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-lg-6 col-xl-6 col-sm-6 col-6 left-side-top">
                <div class="phone-details-top">
                    <i class="fas fa-phone"></i>
                    <span>+8809696070055</span>
                </div>
                <div class="mail-details-top">
                    <i class="far fa-envelope"></i>
                    <span>info@chabikathi.com.bd</span>
                </div>
            </div>
            <div class="col-md-6 col-lg-6 col-xl-6 col-sm-12 col-12 right-side-top">
                <div class="sell-details-top">
                    <i class="far fa-store"></i>
                    <a href="{{route('seller.login')}}">Sell on Chabikathi</a>
                </div>
                <div class="app-details-top">
                    <i class="fas fa-mobile-alt"></i>
                    <span>Save big on our App!</span>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Top Header Section -->
<!-- Header Section -->
<section class="main-top-header bg-white">
    <div class="container">
        <div class="row">
            <!-- Header Logo Section -->
            <div class="col-3 col-sm-3 col-md-3 col-lg-3 col-xl-3 site-header-logo">
                <a href="/">
                    <img src="{{ asset('asset/fontend/asset/img/Logo-2.png')}}">
                </a>
            </div>
            <!-- End Header Logo Section -->
            <!-- Header Search Section -->
            <div class="col-9 col-sm-9 col-md-6 col-lg-7 col-xl-7 site-header-search">
                <div class="search-box-area">
                    <div>
                        <div class="search-box">
                            <div class="search-box-border">
                                <div class="searching-area-wrapper">
                                    <div class="ant-select-show-search ant-select-auto-complete ant-select">
                                        <div class="ant-select-selection">
                                            <ul>
                                                <li class="ant-select-search">
                                                    <input placeholder="Search Product..."
                                                        class="ant-input ant-input-lg" type="text" value="">
                                                    <button>
                                                        <i class="fas fa-search"></i>
                                                    </button>
                                                    <span class="ant-select-search__field__mirror">&nbsp;</span>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Header Search Section -->
            <!-- Header icon Section -->
            <div class="col-12 col-sm-12 col-md-3 col-lg-2 col-xl-2 site-header-cart">
                <div class="cart-logo-img">
                    <img src="{{ asset('asset/fontend/asset/img/Logo-2.png')}}">
                </div>
                <div class="wish-icon">
                    <i class="far fa-heart"></i>
                </div>
                <div class="cart-icon">
                    <a href="/cart">
                        <div class="dropdown">
                            <i class="fas fa-shopping-bag"></i>
                        </div>
                        <span class="cart-add">0</span>
                    </a>
                </div>
                <div class="profile-icon">
                    <div class="dropdown">
                        <i class="fas fa-user-circle">
                            <div class="dropdown-content">
                                <a href="#">My Account</a>
                                <a href="{{route('seller.login')}}">Login</a>
                            </div>
                        </i>
                    </div>
                </div>
            </div>
            <!-- End Header icon Section -->
        </div>
    </div>
</section>